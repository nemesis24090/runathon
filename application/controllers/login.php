<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 15/8/14
 * Time: 6:43 PM
 * login controller on website load
 */

class Login extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('retrive_data');
        $this->load->helper("form");

    }


    public function index()
    {
        if(!($this->session->userdata("session_name") && $this->session->userdata("session_id"))){// check if user is logged in or not from session
            $logged_in="failure";
            //check for
            $data['title']="Rannathon";
            $data['logged_in']=$logged_in;
            $this->load->view('header',$data);
            $this->load->view('login_home',$data);

            $current_date=date("Y-m-d H:i:s");
            $data['upcoming_events']=$this->retrive_data->upcomingEvents($current_date);
            $data['famous_columns']=$this->retrive_data->famousColumns();

            $this->load->view('sidebar',$data);
            $this->load->view("footer",$data);
            $this->load->view("login_footer",$data);
        }
        else
            redirect("home");
   }

    public function submitLogin(){
            if(isset($_POST['user_id'])){
            $result=$this->retrive_data->loginCheck($_POST['user_id']);

                if($result){
                    if($result[0]->password == md5(trim($_POST['password']))){
                        $user_details=$this->retrive_data->userDetails(trim($_POST['user_id']));
                        if($user_details[0]->profilepic==null)
                            $profile_pic="profile_default.png";
                        else
                            $profile_pic=$user_details[0]->profilepic;
                            $sessiondata=array(
                            "session_id" => 1,//change later
                            "session_name" => $_POST['user_id'],
                            "user_name" => $user_details[0]->name,
                            "profile_pic" => $profile_pic,
                            "last_login" => $user_details[0]->last_login,
                            "contact" => $user_details[0]->contactno,
                            "dob"=>$user_details[0]->dob,
                        );
                        $this->session->set_userdata($sessiondata);
                        redirect("home");
                    }
                    else{
                        $logged_in="failure";

                        $data['logged_in']=$logged_in;
                        $data['title']="Rannathon";
                        $data['login_failure']=true;
                        $data['message']="Invalid password";
                        $this->load->view('header',$data);
                        $this->load->view('loginPage',$data);
                        $this->load->view('footer',$data);
                        $this->load->view("login_footer",$data);
                    }
                }
                else{
                    $logged_in="failure";

                    $data['logged_in']=$logged_in;
                    $data['title']="Rannathon";
                    $data['message']="Invalid email id";
                    $data['login_failure']="true";
                    $this->load->view('header',$data);
                    $this->load->view('loginPage',$data);
                    $this->load->view('footer',$data);
                    $this->load->view("login_footer",$data);
                }
            }
            else
                show_404();
    }

    public function submitSignUp(){

        $email_pattern="/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})$/i";
        $logged_in="failure";
        //$alert="";
        if(!preg_match($email_pattern,trim($_POST['email']))){
            $data['alert']="Please check the required field";
            $data['email']="Enter a Valid email";
            $data['title']="Rannathon";
            $data['logged_in']=$logged_in;
            $this->load->view('header',$data);
            $this->load->view('signUp',$data);
            $this->load->view("footer",$data);
            $this->load->view("login_footer",$data);

        }
        elseif(strlen(trim($_POST["fullname"]))==0){
            $data['alert']="Please check the required field";
            $data['name']="Please provide ur name";
            $data['title']="Rannathon";
            $data['logged_in']=$logged_in;
            $this->load->view('header',$data);
            $this->load->view('signUp',$data);
            $this->load->view("footer",$data);
            $this->load->view("login_footer",$data);

        }
        elseif(strlen(trim($_POST["password"]))==0){
            //$password="Provide some password";
            $data['alert']="Please check the required field";

            $data['password']="Provide some password";
            $data['title']="Rannathon";
            $data['logged_in']=$logged_in;
            $this->load->view('header',$data);
            $this->load->view('signUp',$data);
            $this->load->view("footer",$data);
            $this->load->view("login_footer",$data);

        }

        elseif(trim($_POST["password"]) != trim($_POST["confpass"])){
           // $confpass="Password dose not matches";
            $data['alert']="Please check the required field";
            $data['confpass']="Password dose not matches";
            $data['title']="Rannathon";
            $data['logged_in']=$logged_in;
            $this->load->view('header',$data);
            $this->load->view('signUp',$data);
            $this->load->view("footer",$data);
            $this->load->view("login_footer",$data);

        }

        elseif($this->checkEmail(trim($_POST["email"]))){
            $data['alert']="Please check the required field";
            $data['email']="This email is already registered with us...";
            $data['title']="Rannathon";
            $data['logged_in']=$logged_in;
            $this->load->view('header',$data);
            $this->load->view('signUp',$data);
            $this->load->view("footer",$data);
            $this->load->view("login_footer",$data);

        }
        else{
            $insert['user_id']=trim($_POST['email']);
            $insert['name']=trim($_POST['fullname']);
            $insert['password']=md5(trim($_POST['password']));
            $result=$this->retrive_data->createUser($insert);
            if(!$result){
                $data['alert']="Cannot connect databse please try later..";
                $data['title']="Rannathon";
                $data['logged_in']=$logged_in;
                $this->load->view('header',$data);
                $this->load->view('signUp',$data);
                $this->load->view("footer",$data);
                $this->load->view("login_footer",$data);

            }
            else{
                $data['success']="Successfully registered...";
                $data['title']="Rannathon";
                $data['logged_in']=$logged_in;
                $this->load->view('header',$data);
                $this->load->view('signUp',$data);
                $this->load->view("footer",$data);
                $this->load->view("login_footer",$data);

            }
        }
    }

    public function loadSignUp(){
        $logged_in="failure";

        $data['logged_in']=$logged_in;
        $data['title']="Rannathon";
        $this->load->view('header',$data);
        $this->load->view('signUp',$data);
        $this->load->view('footer',$data);
        $this->load->view('signup_footer',$data);
    }

    public function emailCheck(){
       $result=$this->retrive_data->emailCheck(trim($_POST["email"]));
        if($result)
            echo false;
        else
            echo true;
    }

    public function checkEmail($email){
        $result=$this->retrive_data->emailCheck($email);
        if($result)
            return true;
        else
            return false;
    }
}