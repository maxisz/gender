<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\TransactionModel;
use App\Models\ApiModel;
use App\Models\PlanModel;
use App\Models\SettingModel;
use App\Models\FaqModel;

class Admin extends BaseController
{
	public function __construct(){
		$db = \Config\Database::connect();
	}
	public function index()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Admin Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'li_1' => 'Dashboard', 'li_2' => 'overview'])
		];
		$umodel = new userModel();
		$pmodel = new planModel();
		$tmodel = new transactionModel();
		$nmodel = new apiModel();
		$data['plans'] = $pmodel->findAll();
		$data['users'] = $umodel->findAll();
		$data['transactions'] = $tmodel->findAll();
		$data['names'] = $nmodel->findAll();
		//
		
		return view('/admin/Dashboard',$data);
	}
	public function users()
	{
		$model = new planModel();
		$db = \Config\Database::connect();
		$builder = $db->table('users');
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Users']),
			'page_title' => view('partials/page-title', ['title' => 'users', 'li_1' => 'Dashboard', 'li_2' => 'manage_users'])
		];
		$builder->select('*');
		$builder->join("plans","users.user_member_type=plans.plan_id");
		$query = $builder->get();
		$data['users'] = $query->getResult();
		$data['plans'] = $model->findAll();
		// $data['users'] = $model->findAll();
		return view('/admin/Users',$data);
	}
	public function invoices()
	{
		// $model = new transactionModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoices']),
			'page_title' => view('partials/page-title', ['title' => 'Invoices', 'li_1' => 'Dashboard', 'li_2' => 'manage_Transactions'])
		];
		// $data['transactions'] = $model->findAll();
		
		$db = \Config\Database::connect();
		$builder = $db->table('transactions');
		$builder->select("*");
		$builder->join('users',"transactions.user_id=users.user_id");
		$query = $builder->get();
		$data['transactions'] = $query->getResult();
		// print_r($data);
		return view('/admin/Invoices',$data);

	}
	public function keys()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Admin Keys']),
			'page_title' => view('partials/page-title', ['title' => 'Keys', 'li_1' => 'Dashboard', 'li_2' => 'manage_keys'])
		];
		$db = \Config\Database::connect();
		$builder = $db->table('keys');
		$builder->select("*");
		$builder->join("users","users.user_id = keys.key_user_id");
		$query = $builder->get();
		$data['keys'] = $query->getResult();
		return view('/admin/Keys',$data);
	}
	public function Names()
	{
		$model = new apiModel();

		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Admin Names']),
			'page_title' => view('partials/page-title', ['title' => 'Names', 'li_1' => 'Dashboard', 'li_2' => 'manage_Names'])
		];
		// $db = \Config\Database::connect();
		// $builder = $db->table('keys');
		// $builder->select("*");
		// $builder->join("users","users.user_id = keys.key_user_id");
		// $query = $builder->get();
		// $data['keys'] = $query->getResult();
		$data['names'] = $model->findAll();
		return view('/admin/Names',$data);
	}
	public function plans()
	{
		$model = new planModel();

		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Admin Plans']),
			'page_title' => view('partials/page-title', ['title' => 'Plans', 'li_1' => 'Dashboard', 'li_2' => 'manage_plans'])
		];
		$data['plans'] = $model->findAll();
		return view('/admin/Plans',$data);
	
	}

	public function settings()
	{
		$model= new settingModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Admin Plans']),
			'page_title' => view('partials/page-title', ['title' => 'Plans', 'li_1' => 'Dashboard', 'li_2' => 'manage_plans'])
		];
		$data['setting'] = $model->where('site_id',1)->first();
		return view("/admin/Settings",$data);
	}

	public function faqs()
	{
		$model= new faqModel();
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Admin Faqs']),
			'page_title' => view('partials/page-title', ['title' => 'faqs', 'li_1' => 'Dashboard', 'li_2' => 'manage_faqs'])
		];
		$data['faqs'] = $model->findAll();
		return view("/admin/Faqs",$data);
	}
	public function password()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Admin Password']),
			'page_title' => view('partials/page-title', ['title' => 'faqs', 'li_1' => 'Password', 'li_2' => 'Account_password'])
		];
		
		return view("/admin/Password",$data);
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
		$data['user'] = $umodel->where('user_id',$data['invoice']['user_id'])->first();
		if($data['invoice'])
		{
			return view('/admin/Invoice', $data);
		}else{
			return redirect()->to(base_url('/admin/invoices'));
		}
		
	}
}
