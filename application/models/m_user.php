<?php
	
	/**
	* 
	*/
	class m_user extends CI_Model
	{
		
		private $table = "system_user";

		function CheckUserPass($cUsername,$cPassword){
			//echo($cUsername);
			$this->db->where("username",$cUsername);
			$this->db->where("password",$cPassword);
			return $this->db->get("system_user") ;
		} 


		function getLoginData($cUsername, $cPassword) {
        	$cUsername = mysql_real_escape_string($cUsername);
	        $cPassword = md5(mysql_real_escape_string($cPassword));
	        $dbData = $this->db->get_where('system_user', array('username' => $cUsername, 'password' => $cPassword));
	        if (count($dbData->result()) > 0) {
	            foreach ($dbData->result() as $qck) {
	                foreach ($dbData->result() as $dbRow) {
	                    $sess_data['logged_in'] 			= "Wes Mlebu Website Jess" ;
	                    $sess_data['cSession_UserName'] 	= $dbRow->username;
	                    $sess_data['cSession_FullName'] 	= $dbRow->fullname;
	                    $sess_data['cSession_UserLevel']	= $dbRow->level;
	                    $sess_data['cSession_Cabang'] 		= $dbRow->Cabang;
	                    $sess_data['cSession_Initial']	 	= $dbRow->initial;
	                    $this->session->set_userdata($sess_data);
	                }
	                redirect('homepage');
	            }
	        } else {
	            //$this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
	            header('location:' . base_url() . 'login');
	        }
	    }


	    function LoginApi($cUsername, $cPassword){
        	$dbData = $this->db->get_where('system_user', array('username' => $cUsername, 'password' => $cPassword));
        	return $dbData->result();
    	}
	}

?>