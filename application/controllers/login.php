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

        }
        else
            redirect("home");
   }

}