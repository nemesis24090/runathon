<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 31/8/14
 * Time: 4:15 PM
 */

class Column extends CI_Controller{
var $logged_in="failure";
    function __construct() {
        parent::__construct();
        $this->load->model('retrive_data');
    }

    function index(){
        //List of columns to be shown
    }


    function viewColumn($column_id){
        if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){
            $this->logged_in="success";
           if($this->session->userdata("column_list")==null){
             $column_list=$this->retrive_data->columnList($this->session->userdata("session_name"));

               $temp=array();

               for($i=0;$i<sizeof($column_list);$i++)
                   $temp[$i]=$column_list[$i]->column_id;

               $this->session->set_userdata("column_list",$temp);
           }

            if(in_array($column_id,$this->session->userdata("column_list")))
                $data['like']=true;
            else
                $data['like']=false;
        }
        $data['column']="active";
        $data['event']="disable";
        $data['home']="disable";
        $data['contact']="disable";
        $data['column_id']=$column_id;
        $data['title']="Rannathon";
        $data['logged_in']=$this->logged_in;
        $this->load->view('header',$data);
        $data['column_info']=$this->retrive_data->retriveColumn($column_id);
        $data['column_content']=file_get_contents("C:\\xampp\\htdocs\\runathon\\columns\\".$data['column_info']->row()->content);
        //$data['column_content']=file_get_contents("/var/www/html/runathon/columns/".$data['column_info']->row()->content);
        $this->load->view('column_home',$data);

        $current_date=date("Y-m-d H:i:s");
        $data['upcoming_events']=$this->retrive_data->upcomingEvents($current_date);
        $data['famous_columns']=$this->retrive_data->famousColumns();

        $column_comment['comments']=$this->retrive_data->columnComments($column_id);
        $this->load->view("column_comment",$column_comment);
        $this->load->view('sidebar',$data);
        $this->load->view("footer",$data);
        $this->load->view("column_footer",$data);
    }

    function postComment(/*$content,$column_id*/){
        $current_date=date("Y-m-d H:i:s");
        $result=$this->retrive_data->postComment($this->session->userdata("session_name"),$_POST["content"],$_POST["column_id"],$current_date);
       // $result=$this->retrive_data->postComment($this->session->userdata("session_name"),$content,$column_id,$current_date);
      echo $result;
    }

    function updateLike(){
        $current_date=date("Y-m-d H:i:s");
        $result=$this->retrive_data->updateLike($this->session->userdata("session_name"),$_POST['column_id'],$current_date);


        if($result == true){
            $column_list=$this->session->userdata("column_list");
            array_push($column_list,$_POST['column_id']);
            $this->session->set_userdata("column_list",$column_list);
        }

        echo $result;
    }

    function updateUnlike(){
        $result=$this->retrive_data->updateUnlike($this->session->userdata("session_name"),$_POST['column_id']);

        if($result == true){
            $column_list=$this->session->userdata("column_list");
            $column_list=array_diff($column_list,$_POST['column_id']);
            $this->session->set_userdata("column_list",$column_list);
        }

        echo $result;
    }
}