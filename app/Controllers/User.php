<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlanModel;
use App\Models\TransactionModel;
use App\Models\UserModel;
use App\Models\KeyModel;

class User extends BaseController
{
	public function index()
	{
		$model = new UserModel();
		$pmodel = new PlanModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'li_1' => 'Minia', 'li_2' => 'Dashboard'])
		];
		$data['user'] = $model->where('user_id',session()->get('user_id'))->first();
		$data['plan'] = $pmodel->where('plan_id',$data['user']['user_member_type'])->first();
		return view('/user/Dashboard', $data);
	}
	public function excel()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Excel Upload']),
			'page_title' => view('partials/page-title', ['title' => 'Excel Upload', 'li_1' => 'Dashboard', 'li_2' => 'Excel_upload'])
		];
		
		return view('/user/pages/Excel', $data);
	}
	public function credits()
	{
		$model = new planModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Credits']),
			'page_title' => view('partials/page-title', ['title' => 'Credits', 'li_1' => 'Dashboard', 'li_2' => 'Buy Credits'])
		];
		$data['plans']= $model->findAll(10,1);
		
		return view('/user/pages/Credits', $data);
	}

	public function invoices()
	{
		$model = new TransactionModel();
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoices']),
			'page_title' => view('partials/page-title', ['title' => 'Invoices', 'li_1' => 'Dashboard', 'li_2' => 'Invoices'])
		];
		$data['invoices'] = $model->where('user_id',session()->get('user_id'))->findAll();
		
		return view('/user/pages/Invoices', $data);
	}

	public function invoice($c)
	{
		$model = new TransactionModel();
		$umodel= new userModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice']),
			'page_title' => view('partials/page-title', ['title' => 'Invoice', 'li_1' => 'Dashboard', 'li_2' => 'Invoice'])
		];
		$data['invoice'] = $model->where('trnx_id',$c)->first();
		$data['user'] = $umodel->where('user_id',session()->get('user_id'))->first();
		if($data['invoice'])
		{

			return view('/user/pages/Invoice', $data);
		}else{
			return redirect()->back();
		}
		
	}
	public function Access_keys()
	{
		$model = new keyModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Api Access Keys']),
			'page_title' => view('partials/page-title', ['title' => 'Access Keys', 'li_1' => 'Dashboard', 'li_2' => 'access_keys'])
		];
		$data['keys'] = $model->where('key_user_id',session()->get('user_id'))->findAll();
		
		return view('/user/pages/Access_keys', $data);
	}
	public function manage_account()
	{
		$model = new userModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Manage_Account']),
			'page_title' => view('partials/page-title', ['title' => 'Account', 'li_1' => 'Dashboard', 'li_2' => 'manage account'])
		];
		$data['user'] = $model->where('user_id',session()->get('user_id'))->first();
		return view('/user/pages/Manage_account', $data);
	}
	public function notifications()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Notifications']),
			'page_title' => view('partials/page-title', ['title' => 'Notifications', 'li_1' => 'Dashboard', 'li_2' => 'Notifications'])
		];
		
		return view('/user/pages/Notifications', $data);
	}
	public function manage_team()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Manage Team']),
			'page_title' => view('partials/page-title', ['title' => 'Team', 'li_1' => 'Dashboard', 'li_2' => 'Team'])
		];
		
		return view('/user/pages/Manage_team', $data);
	}
	public function password()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Change Password']),
			'page_title' => view('partials/page-title', ['title' => 'Password', 'li_1' => 'Dashboard', 'li_2' => 'change_password'])
		];
		
		return view('/user/pages/Password', $data);
	}
}
