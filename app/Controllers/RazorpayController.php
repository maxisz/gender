<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use Razorpay\Api\Api;
use App\Models\PlanModel;
use App\Models\UserModel;
use App\Models\SettingModel;
class RazorpayController extends BaseController
{
    public function payWithRazorpay()
    {
        $data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Credits']),
			'page_title' => view('partials/page-title', ['title' => 'Credits', 'li_1' => 'Dashboard', 'li_2' => 'Buy Credits'])
		];
        return view('/user/pages/Credits',$data);
    }

    public function processPayment()
    {
        $model = new settingModel();
        $data = $model->where('site_id',1)->first();

        //Input items of form
        $input = $this->request->getVar();
        //get API Configuration
        $api = new Api($data['site_key_id'], $data['site_key_secret']);
        // $api = new Api(env('razorKey'), env('razorSecret'));
        //Fetch payment information by razorpay_payment_id
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {

                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));

            } catch (\Exception $e) {
                return $e->getMessage();
                session()->setFlashdata("error", $e->getMessage());
                return redirect()->back();
            }
            // get the package name
            $pmodel = new PlanModel();
            $datas = $pmodel->where('plan_id',$this->request->getVar('plan_id'))->first();
            $package_name = $datas['plan_name'];
            $package_calls = $datas['plan_limit'];

            if($datas['plan_period'] =="Monthly")
            {
                
                $expiry = date("Y-m-d", strtotime($date . "+30 day"));
            }else if($datas['plan_period'] == "yearly")
            {
               
                $expiry = date("Y-m-d", strtotime($date . "+365 day"));
            }else if($datas['plan_period'] == "Lifetime")
            {
                
                $expiry = date("Y-m-d", strtotime($date . "+36500 month"));
            }
            $today = date('Y-m-d');
            // $membershipEnds = data("Y-m-d", strtotime(date("Y-m-d", strtotime($today))." + 30 day"));
            // remember to add the user calls to the plan limit
            // change the use to package name
            $umodel = new userModel();
            $data = [
                "user_member_type" => $this->request->getVar('plan_id'),
                "user_credits" => $package_calls,
                "user_calls" => 0,
                "user_member_name" =>  $package_name,
                "user_credits_created_at"=> date("Y-m-d H:i:s"),
                'user_credits_expired_at'=>$expiry
             
            ];
            $umodel->update(session()->get('user_id'),$data);
            // save transaction details
            $trnx = new TransactionModel();
            
            $trnx->insert([
                "amount" => $response->amount,
                "currency" => $response->currency,
                "trnx_id" => $response->id,
                "user_id" => session()->get('user_id'),
                "status" => $response->status,
                "package_name"=> $package_name,
                "transaction_date"=> date('Y-m-d H:i:s')
            ]);
        }

        session()->setFlashdata('success', 'Payment successfully done, You Are Now <br> a '. $package_name.' user');
        
        return redirect()->back();
    }
}