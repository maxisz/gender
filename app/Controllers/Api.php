<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ApiModel;
use App\Models\UserModel;
use App\Models\PlanModel;
use App\Models\KeyModel;
   //     parse_str($_SERVER['QUERY_STRING'],$_GET);
    // //    $key =  $_GET['key'];
    // //    $name =  $_GET['name'];

class Api extends BaseController
{
    public function index()
    {
        $benchmark = \Config\Services::timer();
        $umodel = new UserModel();
        $pmodel = new PlanModel();
        $kmodel = new KeyModel();
        $amodel = new Apimodel();
 
       if($this->request->getVar('name') && $this->request->getVar('key') && $this->request->getVar('key') != '' && $this->request->getVar('name') != '')
       {
           $benchmark->start('q');
           $name =$this->request->getVar('name');
           $key = $this->request->getVar('key');

        //    check api key
        $data =  $umodel->where("user_api_key",$key)->first();
        $pass = false;
        if($data)
        {
            $pass = true;
            $user_id = $data['user_id'];
        } else{
            $data = $kmodel->where('key_key',$key)->first();
            if($data)
            {
                $pass = true;
                $user_id = $data['key_user_id'];
                
            }else
            {
                $pass = false;
            }
        }

        // continue if the key is valid
        if($pass==true)
        {
            
            $expirydate = $data['user_credits_expired_at'];
            
            // lets check if the user is still on subssviprion not expired
            if(date("Y-m-d") < $expirydate){
                //    continue by checking if the user calls are less
                $user_calls = $umodel->where('user_id',$user_id)->first()['user_calls'];
                $user_credits = $umodel->where('user_id',$user_id)->first()['user_credits'];
                if($calls<$user_credits)
                {
                    $arr = array('first_name' => $name, 'second_name' => $name);
                    $ndata = $amodel->where('first_name' ,$name)->orLike('first_name' ,$name)->first();
                    $tstart = $benchmark->getTimers()['q']['start'];
                    $tend = $benchmark->getTimers()['q']['end'];
                    if($ndata){
                            $ndata += array("samples" => count($amodel->findall()),"time" => $tend-$tstart);
                            //   we need to add one to the user calls table\
                                        $ncalls = $user_calls + 1;
                                        $vcall = $user_credits -1;
                                        $updata = [
                                            'user_calls' => $ncalls,
                                            'user_credits' => $vcall
                                        ];
                                        $umodel->update($user_id,$updata);
                            // after we add now lets give the user data after long troll
                            header('Content-Type: application/json');
                            echo json_encode($ndata,JSON_PRETTY_PRINT);
                                
                        
                        } else{
                            die("sorry name not found");
                        }
                }else{
                    die("out of access credits");
                }
            }else{
                die("Subsciption Expired Please Renew");
            }

        }else{
            die("invalid key"); // ?return false
        }
        
        }

    }
    
    
}
