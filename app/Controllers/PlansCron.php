<?php

namespace App\Controllers;

use App\Models\ApiModel;
use App\Models\UserModel;
use App\Models\PlanModel;
use App\Models\KeyModel;

class PlansCron extends BaseController
{

    public function index()
    {
        $model = new UserModel();
        $user = $model->where('user_id',1)->first();
        $user_created_at = $user['user_credits_created_at'];
        $date = date("Y-m-d");
        $expiry = date("Y-m-d", strtotime($date . "+1 day"));
        print_r(explode(" ",$user_created_at));
        // echo $date;
        // echo $expiry;
        

        // print($user_created_at.' expiry=> '.$expiry);
        
        // if($date > $expiry)
        // {
        //     echo "expired";
        // }else 
        // {
        //     echo "not expired";
        // }
    }

}