<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ApiModel;
use App\Models\ContactModel;
use App\Models\FaqModel;
use App\Models\PlanModel;
use App\Models\KeyModel;
use App\Models\SettingModel;


class Functions extends BaseController
{
	public function index()
	{
		//
	}
	public function user_api_key()
	{
		$user_id = session()->get('user_id');
		$model = new UserModel();
		$data = $model->where('user_id',$user_id)->first();
		echo $data['user_api_key'];
	}
	public function user_calls()
	{
		$user_id = session()->get('user_id');
		$model = new UserModel();
		$data = $model->where('user_id',$user_id)->first();
		echo $data['user_calls'];
	}
	public function user_credits()
	{
		$user_id = session()->get('user_id');
		$model = new UserModel();
		$data = $model->where('user_id',$user_id)->first();
		// $plan_id = $data['user_member_type'];
		// $model1 = new PlanModel();
		// $data = $model1->where('plan_id',$plan_id)->first();
		// echo $data['plan_limit'];
		echo $data['user_credits'];
	}
	public function names_count()
	{
		$db = \Config\Database::connect();
		$builder = $db->table('names');
		$builder->select('gender, COUNT(gender) as total');
		// $builder->groupBy('gender');
		// $builder->orderBy('total','desc');
		$query = $builder->get();
		$data = $query->getResult();
			echo $data[0]->total;
	}

	public function countries_count()
	{
		$db = \Config\Database::connect();
		$builder = $db->table('names');
		$builder->select('country, COUNT(country) as total');
		$builder->groupBy('country');
		$builder->orderBy('total','desc');
		$query = $builder->get();
		$data = $query->getResult();
			echo $data[0]->total;
	}
	// save series
	public function save_billing_info()
	{
		$user_name = $this->request->getVar('user_name');
		$user_company = $this->request->getVar('user_company');
		$user_street = $this->request->getVar('user_street');
		$user_address_line = $this->request->getVar('user_address_line');
		$user_country = $this->request->getVar('user_country');
		$user_country_code = $this->request->getVar('user_country_code');
		$user_vat_number = $this->request->getVar('user_vat_number');
		$model = new UserModel();
		$data = [
			"user_company" => $user_company,
			"user_street" => $user_street,
			"user_address_line" => $user_address_line,
			"user_country" => $user_country,
			"user_country_code"=>$user_country_code,
			"user_vat_number" => $user_vat_number,
			'user_name'=> $user_name
		];
		$datas = $model->update(session()->get('user_id'),$data);
		if($datas)
		{
			echo "success";
		}else
		{
			echo "failed";
		}
	}
	public function change_password()
	{
		$umodel = new UserModel();
		$data = $umodel->where('user_id',session()->get('user_id'))->first();
		if($data)
		{
			$pass = $data['user_password'];
			$password = md5($this->request->getVar('old_password'));
			if($password ==  $pass)
			{
				$new_pass = md5($this->request->getVar('new_password'));
				$data = [
					'user_password'=>$new_pass
				];
				if($umodel->update(session()->get('user_id'),$data))
				{
					$response ="success";
				}else{
					$response ="Failed Saving";
				}
			}else{
				$response = "Password Mismatch";
			}
		} else{
			$response = "error fetching";
		}
		echo $response;
	}

	public function new_key()
	{
		$model = new keyModel();
		$label = "gender_project_Key_".$this->request->getVar('key_label');
		$key = bin2hex(openssl_random_pseudo_bytes(8));
		$data = [
			'key_user_id'=> session()->get('user_id'),
			'key_key' => $key,
			'key_label'=> $label,
			'key_created_at'=>date('Y-m-d H:i:s')
		];
		if($model->save($data))
		{
			$response = "success";

		}else{
			$response ="failed";
		}
		echo $response;
		
	}
	public function delete_key()
	{
		$model = new keyModel();
		$key_key = $this->request->getPost('key_key');
		$resp = $model->where('key_key',$key_key)->first();
		if($resp)
		{
			$key_id = $this->request->getPost('key_id');
			$data= $model->delete($key_id);
				if($data)
				{
					$response = "success";
				}else
				{
					$response ="failed";
				}
			
		}else{
			$response = "key not found";
		}
		
		
		echo $response;
	}

// admin series



	public function upload()
    {
       $model = new ApiModel();
       $csv = $this->request->getFile('file');
       $name  = $csv->getName();
		if($name)
		{
			
			if(fopen($csv->getTempName(), "r"))
				{
					$file = fopen($csv->getTempName(), "r");
					
					while(($getData = fgetcsv($file)) !== FALSE)
					{
						  
						   if($getData[0]!='' && $getData[1]!='' && $getData[2]!=''){
							  
							   $data = [
								   'first_name' => $getData[0],
								   'second_name' => $getData[1],
								   'country' => $getData[3],
								   'gender' => $getData[2],
							   ];
							   
							   if($model->save($data)){
								
								   $response = "success";
							   }else{
								   $response = "failed"; 
							   }
							   
							   //   $sql = "INSERT into names (first_name,second_name,country,gender) 
							   //       values ('$getData[0]','$getData[1]','$getData[2]','$getData[3]')";
							   //       $result = mysqli_query($conn, $sql);
					   
					   }else{
						$response ="please use appropriate headers";
					   }
					}
					
				}			
		}
     echo $response;
    }


	public function createplan(){
        $model = new PlanModel();
        $plan_name = $this->request->getPost("plan_name");
        $plan_price = $this->request->getPost("plan_price");
        $plan_limit = $this->request->getPost("plan_limit");
        $plan_excel_limit = $this->request->getPost("plan_excel_limit");
        $plan_period = $this->request->getPost("plan_period");
        $data = [
         'plan_name' => $plan_name,
         'plan_price' => $plan_price,
         'plan_limit' => $plan_limit,
         'plan_excel_limit' => $plan_excel_limit,
         'plan_period' => $plan_period,
        ];
        if($model->save($data)){
            $response = "success";
        }else{
            $response = "failed";
        }
        echo $response;
    }



	public function updateplan(){
        $model = new PlanModel();
        $plan_id = $this->request->getPost("plan_id");
        $plan_name = $this->request->getPost("plan_name");
        $plan_price = $this->request->getPost("plan_price");
        $plan_limit = $this->request->getPost("plan_limit");
        $plan_excel_limit = $this->request->getPost("plan_excel_limit");
        $plan_period = $this->request->getPost("plan_period");
        $data = [
         'plan_name' => $plan_name,
         'plan_price' => $plan_price,
         'plan_limit' => $plan_limit,
         'plan_excel_limit' => $plan_excel_limit,
         'plan_period' => $plan_period,
        ];
        if($model->update($plan_id,$data)){
            $response = "success";
        }else{
            $response = "failed";
        }
        echo $response;

    }

	public function deleteplan(){
        $model = new PlanModel();
        $plan_id = $this->request->getPost("id");
        if($model->delete($plan_id)){
            $response = "success";
        }else{
            $response = "failed";
        }
        echo $response;
    }


    // user model 
    public function updateuser()
    {
        $model = new UserModel();
        $data =[
            'user_name'=>$this->request->getVar('user_name'),
            'user_email'=>$this->request->getVar('user_email'),
            'user_calls'=>$this->request->getVar('user_calls'),
            'user_member_type'=>$this->request->getVar('user_member_type'),
            'user_credits'=>$this->request->getVar('user_credits'),
            'user_verification_key'=>$this->request->getVar('user_verification_key'),
            'user_api_key'=>$this->request->getVar('user_api_key'),
        ];
        if($model->update($this->request->getVar('user_id'),$data))
        {
            $response = "success";
        }else{
            $response = "error";
        }
        echo $response;
    }
    public function newfaq()
    {
        $model= new FaqModel();
        $data= [
            'faq_title'=> $this->request->getVar('title'),
            'faq_description'=> $this->request->getVar('description'),
        ];
        if($model->save($data)){
            $response ="success";
        }else{
            $response = "failed";
        }
        echo $response;
    }

    public function updatefaq()
    {
        $model= new FaqModel();
        $data= [
            'faq_title'=> $this->request->getVar('title'),
            'faq_description'=> $this->request->getVar('description'),
        ];
        if($model->update($this->request->getVar('id'),$data)){
            $response ="success";
        }else{
            $response = "failed";
        }
        echo $response;
    }
    public function deletefaq()
    {
        $model= new FaqModel();
      
        if($model->delete($this->request->getVar('id'))){
            $response ="success";
        }else{
            $response = "failed";
        }
        echo $response;
    }

    // account
    public function cancelsubscription()
    {
        $pmodel = new PlanModel();
        $umodel = new UserModel();
        $plan = $pmodel->where('plan_id',1)->first();
        $data =
        [
            'user_credits' => $plan['plan_limit'],
            'user_member_type'=> 1,
            'user_member_name'=> $plan['plan_name'],
            
        ];
        if($umodel->update(session()->get('user_id'),$data))
        {
            $response = "success";
        }else{
            $response = "failed";
        }
        echo $response;
    }

    public function deleteaccount()
    {
        $model = new UserModel();
        if($model->delete(session()->get('user_id')))
        {
            $response = "success";
        }else{
            $response = "failed";
        }
        echo $response;
    }

    // admin save settings
    public function savesettings()
    {
        $model = new SettingModel();
        $data = [
            'site_title'=>$this->request->getVar('site_title'),
            'site_description'=>$this->request->getVar('site_description'),
            'site_keywords'=>$this->request->getVar('site_keywords'),
            'site_smtp_host'=>$this->request->getVar('site_smtp_host'),
            'site_smtp_port'=>$this->request->getVar('site_smtp_port'),
            'site_smtp_username'=>$this->request->getVar('site_smtp_username'),
            'site_smtp_password'=>$this->request->getVar('site_smtp_password'),
            'site_key_id'=>$this->request->getVar('site_key_id'),
            'site_key_secret'=>$this->request->getVar('site_key_secret'),
        ];
        if($model->update(1,$data))
        {
            $response = "success";
        }else{
            $response = "failed";
        }
        echo $response;
    }

	// 
	function deleteuser()
	{
		$model = new UserModel();
		$user_id = $this->request->getVar('user_id');
		if(!session()->get('user_is_admin'))
		{
			$response =" you need Admin rights to perfome the action";

		}else{
			if($model->delete($user_id))
			{
				$response = "success";
			}else{
				$response = "failed";
			}
		}
		echo $response;
	}


	// contact form
	function contact()
	{
		$model = new ContactModel();
		$data = [
			"contact_name" => $this->request->getPost('contact_name'),
			"contact_email" => $this->request->getPost('contact_email'),
			"contact_phone" => $this->request->getPost('contact_phone'),
			"contact_message" => $this->request->getPost('contact_message')
		];
		if($model->save($data))
		{
			session()->setFlashdata('message', 'success');
			
		}else{
			session()->setFlashdata('message', 'error');
		}
		return redirect()->to(base_url('/'));
	
	}
}
