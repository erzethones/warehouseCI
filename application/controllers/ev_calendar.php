<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ev_calendar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_evcalendar','m_evcalendar');
	}

	public function index(){
		$this->load->view('event/evCalendar/ev_calendar',array());	
	}

	public function get_events(){
    	// Our Start and End Dates
     	$start 		= "2017-09-01" ; //$this->input->get("start");
     	$end 		= "2017-09-30" ; //$this->input->get("end");

     	$startdt 	= new DateTime('now'); // setup a local datetime
     	$startdt->setTimestamp($start); // Set the date based on timestamp
     	$start_format = $startdt->format('Y-m-d');

     	$enddt 		= new DateTime('now'); // setup a local datetime
     	$enddt->setTimestamp($end); // Set the date based on timestamp
     	$end_format = $enddt->format('Y-m-d');

     	$events = $this->m_evcalendar->get_events($start_format, $end_format);

     	$data_events = array();

     	foreach($events->result() as $r) {

        	$data_events[] = array("id" => $r->Kode,
        						   "title" => $r->Keterangan,
             					   "description" => "",
             					   "end" => $r->TglSelesai,
             				       "start" => $r->TglMulai);
     	}

     	echo json_encode(array("events" => $data_events));
     	exit();
 	}

    Public function getEvents()
    {
        $result=$this->Calendar_model->getEvents();
        echo json_encode($result);
    }
}