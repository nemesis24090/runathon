<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

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
            $current_date=date("Y-m-d H:i:s");
            $data['event_info']=$this->retrive_data->getEventDetails($current_date);
            $this->load->view('header',$data);
            $this->load->view('event',$data);


            $data['upcoming_events']=$this->retrive_data->upcomingEvents($current_date);
            $data['famous_columns']=$this->retrive_data->famousColumns();
            $this->load->view('sidebar',$data);
            $this->load->view("footer",$data);

        }
        else
            redirect("home");
	}

    function viewEvent($event_id){

        if(!($this->session->userdata("session_name") && $this->session->userdata("session_id"))){// check if user is logged in or not from session
            $logged_in="failure";
            //check for
            $data['title']="Rannathon";
            $data['logged_in']=$logged_in;
            $current_date=date("Y-m-d H:i:s");
            $data['event_info']=$this->retrive_data->getEventInfo($event_id);
            $data['event_content']=file_get_contents("C:\\xampp\\htdocs\\runathon\\events\\".$data['event_info']->content_filename);
            $data['reviews_info']=$this->retrive_data->getEventReviews($event_id);
            $this->load->view('header',$data);
            $this->load->view('eventmain',$data);


            $data['upcoming_events']=$this->retrive_data->upcomingEvents($current_date);
            $data['famous_columns']=$this->retrive_data->famousColumns();
            $this->load->view('sidebar',$data);
            $this->load->view("footer",$data);

        }
        else
            redirect("home");

    }


    function postReview(/*$content,$event_id*/){
        $current_date=date("Y-m-d H:i:s");
        $result=$this->retrive_data->postReview($this->session->userdata("session_name"),$_POST["content"],$_POST["event_id"],$current_date,$_POST["rating"]);
        // $result=$this->retrive_data->postComment($this->session->userdata("session_name"),$content,$column_id,$current_date);
        echo $result;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */