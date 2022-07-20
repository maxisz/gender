<?php 
namespace App\Controllers;
// use App\Models\FormModel;
use CodeIgniter\Controller;
class SendMail extends Controller
{
    // public function index() 
	// {
    //     return view('form_view');
    // }
    function sendMail() { 
        $email = \Config\Services::email(); // loading for use

        // This is for getting form data while submit
        // $to = $this->request->getVar('user_to');
        // $subject = $this->request->getVar('mail_subject');
        // $message = $this->request->getVar('mail_message');

        $email->setTo("xxxxx@gmail.com");
        $email->setFrom('xxxxx@gmail.com', 'Online Web Tutor Support');
        // If you need to send mail to CC and BCC
        // $email->setCC('another@another-user.com');
        // $email->setBCC('other@other-user.com');

        $email->setSubject("Sample Mail - Online Web Tutor");
        $email->setMessage("This is a sample mail sent by online web tutor for testing");

        if ($email->send()) {
            echo 'Email successfully sent, please check';
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
}