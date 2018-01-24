<?php
	class database_config extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper(array("html","form","url","text"));
		}

		function checkConn(){
			// $config['hostname'] = "localhost";
			// $config['dbdriver'] = "mysqli";
			// $config['database'] = "luckywash";
			// $config['username'] = "root";
			// $config['password'] = "";

			$this->load->database();
			echo "DB Connected! Yaaaayy!!" ;
		}
	}
?>