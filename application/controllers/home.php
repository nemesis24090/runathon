<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 24/8/14
 * Time: 1:40 PM
 */

class Home extends CI_Controller{
var $logged_in="failure";
  function __construct() {
    parent::__construct();
    $this->load->model('retrive_data');
    }

    function index(){
        //after succesful login
        if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){// check if user is logged in or not from session
        $this->logged_in="success";
        $data['title']="Rannathon";
        $data['logged_in']=$this->logged_in;
        $this->load->view('header',$data);
        $this->load->view('home',$data);

        $current_date=date("Y-m-d H:i:s");
        $data['upcoming_events']=$this->retrive_data->upcomingEvents($current_date);/*later store upcoming events and columns in session*/
        $data['famous_columns']=$this->retrive_data->famousColumns();

       $this->load->view('sidebar',$data);
       $this->load->view("footer",$data);
       $this->load->view("home_footer",$data);
        }
        else
            redirect("login");
    }

    function logOut(){
        $this->session->sess_destroy();
        redirect(login);
    }

    function profile(){
        if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){// check if user is logged in or not from session
            $this->logged_in="success";
            $data['title']="Rannathon";
            $data['logged_in']=$this->logged_in;

            $this->load->view('header',$data);
            $this->load->view('editProfile',$data);
            $this->load->view('footer',$data);


        }
        else{
            redirect("login");
        }
    }

    function profileChange(){
        if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){// check if user is logged in or not from session
            $email_pattern="/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})$/i";
            $logged_in="success";
            //$alert="";
            if(!preg_match($email_pattern,trim($_POST['user_id']))){
                $data['alert']="Please check the required field";
                $data['email']="Enter a Valid email";
                $data['title']="Rannathon";
                $data['logged_in']=$logged_in;
                $this->load->view('header',$data);
                $this->load->view('editProfile',$data);
                $this->load->view("footer",$data);
            }
            elseif(strlen(trim($_POST["username"]))==0){
                $data['alert']="Please check the required field";
                $data['name']="Please provide ur name";
                $data['title']="Rannathon";
                $data['logged_in']=$logged_in;
                $this->load->view('header',$data);
                $this->load->view('editProfile',$data);
                $this->load->view("footer",$data);
            }
            elseif(strlen(trim($_POST["contact"]))<10 && strlen(trim($_POST["contact"])!=0 )){
                $data['alert']="Please check the required field";
                $data['contact']="Please Provide ur proper contact or keep it blank";
                $data['title']="Rannathon";
                $data['logged_in']=$logged_in;
                $this->load->view('header',$data);
                $this->load->view('editProfile',$data);
                $this->load->view("footer",$data);
            }
/*            elseif(strlen($_POST["password"])==0){
                //$password="Provide some password";
                $data['alert']="Please check the required field";

                $data['password']="Provide some password";
                $data['title']="Rannathon";
                $data['logged_in']=$logged_in;
                $this->load->view('header',$data);
                $this->load->view('signUp',$data);
                $this->load->view("footer",$data);
            }

            elseif($_POST["password"] != $_POST["confpass"]){
                // $confpass="Password dose not matches";
                $data['alert']="Please check the required field";
                $data['confpass']="Password dose not matches";
                $data['title']="Rannathon";
                $data['logged_in']=$logged_in;
                $this->load->view('header',$data);
                $this->load->view('signUp',$data);
                $this->load->view("footer",$data);
            }*/

            elseif(trim($_POST['user_id'])!=$this->session->userdata("session_name")){
                if($this->checkEmail(trim($_POST["user_id"]))){
                $data['alert']="Please check the required field";
                $data['email']="This email is already registered with us...";
                $data['title']="Rannathon";
                $data['logged_in']=$logged_in;
                $this->load->view('header',$data);
                $this->load->view('editProfile',$data);
                $this->load->view("footer",$data);
                }
            }
            else{
                $update['user_id']=trim($_POST['user_id']);
                $update['name']=trim($_POST['username']);
                $update['contact']=trim($_POST['contact']);
                $update['dob']=trim($_POST['dob']);

                //$insert['password']=md5($_POST['password']);
                $result=$this->retrive_data->updateUser($this->session->userdata("session_name"),$update);
                if(!$result){
                    $data['alert']="Cannot connect databse please try later..";
                    $data['title']="Rannathon";
                    $data['logged_in']=$logged_in;
                    $this->load->view('header',$data);
                    $this->load->view('editProfile',$data);
                    $this->load->view("footer",$data);
                }
                else{
                    $this->session->set_userdata("session_name",trim($_POST['user_id']));
                    $this->session->set_userdata("user_name",trim($_POST['username']));
                    $this->session->set_userdata("contact",trim($_POST['contact']));
                    $this->session->set_userdata("dob",trim($_POST['dob']));
                    $data['success']="Successfully Updated...";
                    $data['title']="Rannathon";
                    $data['logged_in']=$logged_in;
                    $this->load->view('header',$data);
                    $this->load->view('editProfile',$data);
                    $this->load->view("footer",$data);
                }

            }
        }
        else
            redirect("login");
    }

    public function checkEmail($email){
        $result=$this->retrive_data->emailCheck($email);
        if($result)
            return true;
        else
            return false;
    }

    function upload_pic(){ //upload profile pic
        if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){
            // echo $_FILES["profile_pic"]["name"];
            // if (!($_FILES["profile_pic"]["error"] > 0)){
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["profile_pic"]["name"]);
            $extension = end($temp);

            if ((($_FILES["profile_pic"]["type"] == "image/gif")
                    || ($_FILES["profile_pic"]["type"] == "image/jpeg")
                    || ($_FILES["profile_pic"]["type"] == "image/jpg")
                    || ($_FILES["profile_pic"]["type"] == "image/pjpeg")
                    || ($_FILES["profile_pic"]["type"] == "image/x-png")
                    || ($_FILES["profile_pic"]["type"] == "image/png"))
                && ($_FILES["profile_pic"]["size"] < 30000)
                && in_array($extension, $allowedExts)){

                $newname = $this->session->userdata("session_name").".".$extension;
                $target= "C:\\xampp\\htdocs\\runathon\\profile_pic\\".$newname;
                //$target= base_url()."\\profile_pic\\".$newname;

                if(move_uploaded_file($_FILES["profile_pic"]["tmp_name"],$target)){
                    $result=$this->retrive_data->updateProfilePic($newname,$this->session->userdata("session_name"));
                        if($result){
                         $alert['success_profile']="successfully updated";
                         $this->session->set_userdata("profile_pic",$newname);
                         $this->profile_update($alert);
                        }
                    else{
                        $alert['failure_profile']="error connecting database";
                        $this->profile_update($alert);
                    }
                }
                else{
                   // $alert="failure";
                    $alert['failure_profile']="cannot move file";
//                    echo $alert_message;
                    $this->profile_update($alert);
                    //   echo "cannot move file";
                }
            }
            else{
  //              $alert="failure";
                $alert['failure_profile']="Provide file of gif,jpeg,jpg,png and size less then 2mb";
          //      echo $alert_message;
                $this->profile_update($alert);
                //  echo "not a valid file";
            }
            // }
        }
        else
            redirect('login');
    }

    function profile_update($data){
        $logged_in="success";
        /*after successful and unsuccessful profile pic upload with alert mesaage*/
        if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){

            $data['title']="Rannathon";
            $data['logged_in']=$logged_in;
            $this->load->view('header',$data);
            $this->load->view('editProfile',$data);
            $this->load->view("footer",$data);
       }
        else
            redirect('login');
    }

    function show_contactus()
    {
        if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){// check if user is logged in or not from session
            $this->logged_in="success";

        }
            //check for
            $data['title']="Rannathon";
            $data['logged_in']=$this->logged_in;
            $this->load->view('header',$data);
            $this->load->view('contactus',$data);
            $this->load->view("footer",$data);

    }

}