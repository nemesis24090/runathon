<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 24/8/14
 * Time: 1:40 PM
 */

class Home extends CI_Controller{
var $logged_in;
  function __construct() {
    parent::__construct();
    $this->load->model('retrive_data');
    }

    function index(){
        //after succesful login
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
    }

    function viewColumn($column_id){
        $this->logged_in="success";
        $data['title']="Rannathon";
        $data['logged_in']=$this->logged_in;
        $this->load->view('header',$data);
        $data['column_info']=$this->retrive_data->retriveColumn($column_id);
        $this->load->view('column_home',$data);

        $current_date=date("Y-m-d H:i:s");
        $data['upcoming_events']=$this->retrive_data->upcomingEvents($current_date);
        $data['famous_columns']=$this->retrive_data->famousColumns();

        $this->load->view('sidebar',$data);
        $this->load->view("footer",$data);
    }
}