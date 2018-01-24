<?php
	

	class Login extends CI_Controller {

		function __construct(){
			parent ::__construct();
			
			//session_start();
			$this->load->model(array('m_user'));
			if($this->session->userdata('cSession_UserName')){
				redirect('homepage') ;
			}	
		}
		
		
		function index(){
			$this->load->view('login_page');
		}

		function processLogAPI(){
	        $cUsername = $this->input->post('cUsername');
	        $cPassword = $this->input->post('cPassword');
	        $result    = $this->m_user->LoginApi($cUsername, $cPassword);
	        echo json_encode($result);
		}



		function process(){
			$this->form_validation->set_rules('cUsername', 'username', 'required|trim');
	        $this->form_validation->set_rules('cPassword', 'password', 'required|trim');

	        if ($this->form_validation->run() == FALSE) {
	        	$this->session->set_flashdata('validation_error');
	            $this->load->view('login_page');
	        } else {

	            $cUsername = $this->input->post('cUsername');
	            $cPassword = $this->input->post('cPassword');
	            // $cUsername = mysqli_real_escape_string($cUsername);
	            // $cPassword = md5(mysqli_real_escape_string($cPassword));
	            $cPassword = md5($cPassword);
	            $CheckUserPass = $this->m_user->CheckUserPass($cUsername, $cPassword);
	            if ($CheckUserPass->num_rows() > 0) {
	            	//login berhasil, Update LastLog pada table system_username
	            	$dNow = date('Y-m-d h:i:s') ;
	            	$vaData = array('LastLog' => $dNow);
					$this->db->where('username', $cUsername);
					$this->db->update('system_user', $vaData);

					//login berhasil, buat session
	                foreach ($CheckUserPass->result() as $dbRow) {
	                    $sess_data['logged_in'] 			= "Wes Mlebu Website Jess" ;
	                    $sess_data['cSession_UserName'] 	= $dbRow->username;
	                    $sess_data['cSession_FullName'] 	= $dbRow->fullname;
	                    $sess_data['cSession_UserLevel']	= $dbRow->level;
	                    $sess_data['cSession_Cabang'] 		= $dbRow->Cabang;
	                    $sess_data['cSession_Initial']	 	= $dbRow->initial;
	                    echo json_encode($sess_data) ;
	                    $this->session->set_userdata($sess_data);
	                }
	                echo json_encode($sess_data) ;
	                redirect('homepage');
	            } else {
	            	$this->session->set_flashdata('validation_error');
	                $this->load->view('login_page');
	            }
	        }
		}
	}


?>