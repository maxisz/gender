<?php

namespace App\Controllers;
use App\Models\PlanModel;
use App\Models\FaqModel;

class Home extends BaseController
{
	
	public function index()
	{
		$fmodel =new FaqModel();
		$pmodel = new planModel();
		$data['plans'] = $pmodel->findAll();
		$data['faqs'] = $fmodel->findAll();
		
		return view('/landing/Main',$data);
	}

	

}
