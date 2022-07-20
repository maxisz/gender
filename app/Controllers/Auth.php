<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\PlanModel;

class Auth extends BaseController
{
	
	public function index()
	{
        // $data['title'] = "Login";
        // return view('/auth/Login',$data);
         $data['banner_title'] = "Login";
        return view('/auth/Login',$data);
    }
	public function login()
	{
        // $data['title'] = "Login";
        // return view('/auth/Login',$data);
        $data['banner_title'] = "Login";
        return view('/auth/Login',$data);
    }
	public function signup()
	{
        // $data['title'] = "Signup";
        // return view('/auth/Signup',$data);
        $data['banner_title'] = "Signup";
        return view('/auth/Signup',$data);
    }
    public function Fsignup()
    {
            //  get plan calls
            $pmodel = new PlanModel();
            $datas = $pmodel->where('plan_id',1)->first();
             //include helper form
             helper(['form']);
             //set rules validation form
             $rules = [
                 
                 'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]'
                
             ];

             $expiry = date("Y-m-d", strtotime($date . "+30 day"));
            
            //    password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
             if($this->validate($rules)){
                 $model = new UserModel();
                 $data = [
                     'user_name'     => $this->request->getVar('name'),
                     'user_email'    => $this->request->getVar('email'),
                     'user_password' => md5($this->request->getVar('password')),
                     'user_created_at' => date('Y-m-d H:i:s'),
                     'user_verification_key' => uniqid(),
                     'user_api_key' => bin2hex(openssl_random_pseudo_bytes(8)),
                     'user_member_type' => 1,
                     'user_member_name'=> $datas['plan_name'],
                     'user_credits'=> $datas['plan_limit'],
                     'user_credits_created_at'=>date("Y-m-d"),
                     'user_credits_expired_at'=>$expiry,
                 ];
                 if($model->save($data))
                 {
                     $response = "success";
                 }else{
                     $response = "failed";
                 }
     
                 // return redirect()->to('/');
             }else{
                 $data['validation'] = $this->validator;
                 // echo view('/auth/register', $data);
                 $response = "invalid";
             }
             echo $response;
    }
    public function Flogin()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = md5($this->request->getVar('password'));
        $data = $model->where('user_email', $email)->first();
        if($data){
            
            $pass = $data['user_password'];
            // $verify_pass = password_verify($password, $pass);
     
            if($password == $pass){
                if($data['user_member_type'] == '0'){
                    $response = "success";
                    $ses_data = [
                        'user_id'       => $data['user_id'],
                        'user_name'     => $data['user_name'],
                        'user_email'    => $data['user_email'],
                        'user_api_key'  => $data['user_api_key'],
                        'logged_in'     => TRUE,
                        'user_is_admin' =>TRUE
                    ];
                    $session->set($ses_data);
                }else{
                    $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'user_api_key'  => $data['user_api_key'],
                    'logged_in'     => TRUE,
                    
                    
                ];
                $session->set($ses_data);
                // return redirect()->to(base_url('/dashboard'));
                $response = "success";
            }
            }else{
                // $session->setFlashdata('msg', 'Wrong Password');
                // return redirect()->to(base_url('/login'));
                $response = "failed";
            }
        }else{
            // $session->setFlashdata('msg', 'Email not Found');
            // return redirect()->to(base_url('/login'));
            $response = "user not found";
        }
        echo $response;
        
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('/'));
    }


}

?>