<?php

/**
* 
*/
class Func{
	
	function String2Number($cString){
  		return str_replace(".","",$cString) ;
	}
	
	function Date2String($cDate){
		$vaDate = explode("-", $cDate) ;
		$dDate  = $vaDate[2] . "-" . $vaDate[1]. "-" . $vaDate[0] ;
		return $dDate;
	}

	function String2Date($dDate){
		$vaDate = explode("-", $dDate) ;
		$cDate  = $vaDate[2] . "-" . $vaDate[1]. "-" . $vaDate[0] ;
		return $cDate;
	}

	function GetLastNumber($cKey,$nLen,$lUpdate = true){
	 	$ci =& get_instance();
		$ci->load->database();
	  	$nID 		= 0 ;
	  	$cKode 	= "" ;
	  	if($lUpdate){
	  		$dbQInsert = "INSERT INTO nomorfaktur (Kode) VALUES ('$cKey')";
	  		$ci->db->query($dbQInsert) ;
	    
		    $dbQSelect = "SELECT last_insert_id() as ID FROM nomorfaktur WHERE Kode = '$cKey'" ;
		    $dbData = $ci->db->query($dbQSelect) ;
		    if($dbRow = $dbData->row_array()){
		    	$nID = $dbRow ['ID'] ;
		    	$dbQDelete = "DELETE FROM nomorfaktur WHERE Kode = '$cKey' AND ID < $nID" ;
		    	$ci->db->query($dbQDelete) ;
		    }        
	  	}else{
		  	$dbQSelect = "SELECT ID FROM nomorfaktur WHERE Kode = '$cKey'";
		  	$dbData = $ci->db->query($dbQSelect) ;
		  	if($dbRow = $dbData->row_array()){
		  		$nID = $dbRow ['ID'] ;	
		  	}
	    	$nID ++ ;
	  	}
	  	$cKode = str_pad($nID,$nLen,"0",STR_PAD_LEFT) ;
	  	return $cKode ;
	}
	
	function GetLastFaktur($cKey,$dTgl='',$lUpdate = true,$cCabang='01'){
	  $nTime  	= time() ;	      
	  $dTgl     = date("Ymd",$nTime) ;      
	  $cKey 	= $cKey . $cCabang . date("Ymd",$nTime) ;
	  $cRetval 	= $this->GetLastNumber($cKey,20,$lUpdate) ;
	  $cRetval 	= $cKey . substr($cRetval,strlen($cKey)) ;
	  return $cRetval ;
	}

}

?>