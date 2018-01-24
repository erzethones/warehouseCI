<?php

	function renderMenuItem($obj, $id, $keterangan, $icon, $id_parent, $request, $level){
		//author : MR. HAFIZH
		$hasChild 	= false;
		$id 		= intval($id);
		$qChild 	= "SELECT sm.* FROM system_menu sm 
	 				   LEFT JOIN system_menu_level sml on sml.ID_Menu = sm.ID
	 				   WHERE sm.ID_Parent = '$id' and sml.ID_Level = '$level'";
	 	$dbChild    = $obj->db->query($qChild) ;
	 	$dbRR		= $dbChild->result_array();
	 	if($dbRR){
	 		$hasChild = true;
	 	}

		if($id_parent == 0){
			?>
			<li class="has-sub">
				<a href="javascript:;">
				    <b class="caret pull-right"></b>
				    <i class="<?php echo $icon;?>"></i>
				    <span><?php echo $keterangan;?></span>
			    </a>
			    <ul class="sub-menu">
			<?php
		}else{
			if($hasChild){
				?>
				<li class="has-sub">
					<a href="javascript:;">
					    <b class="caret pull-right"></b>
					    <span><?php echo $keterangan;?></span>
				    </a>
				    <ul class="sub-menu">
				<?php
			} else {
				?>
				<li><?php echo anchor($request,$keterangan) ;?></li>
				<?php
			}
		} 
		
		if($hasChild) {
			foreach ($dbChild->result_array() as $rRChild){
				renderMenuItem($obj, $rRChild['ID'], $rRChild['Keterangan'], '', $rRChild['ID_Parent'], $rRChild['Request'],$level);
			}
		}

	 	if($id_parent == 0 || $hasChild){
	 		?>
	 			</ul>
			</li>
	 		<?php
	 	}
	}
/*************************************************************************************************************************************************/
	$cUsername  = $this->session->userdata('cSession_UserName');

	$dbQuery   	= "SELECT fullname, Level, photoPath FROM system_user WHERE username = '$cUsername'";
	$dbData 	= $this->db->query($dbQuery) ;
    if($dbRow = $dbData->row_array()){
        $ctFullName  = trim($dbRow['fullname']);
        $vaFullName = explode(" ", $ctFullName);
        $countVA    = count($vaFullName);
        if($countVA > 1){
            $cFullName  = $vaFullName[0] . " " . $vaFullName[1] ;
        }else{
            $cFullName  = $vaFullName[0] ;
        }
		$cLevel		= $dbRow['Level'];
		$cPhotoPath = $dbRow['photoPath'];
		
?>
<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="image">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/img/'.$cPhotoPath); ?>" alt="" /></a>
				</div>
				<div class="info">
					<small><?php echo $cFullName ;?></small>
				</div>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="nav-header">Navigation</li>
			<?php
				$qParent 	= "SELECT sm.ID as ID, sm.ID_Parent as ID_Parent, 
							   sm.Keterangan as Keterangan, sm.Path as Path, sm.Request as Request, 
							   si.Class as ClassIco, sml.ID_Menu as ID_Menu, sml.ID_Level as ID_Level 
							   FROM system_menu sm
							   LEFT JOIN system_menu_level sml on sml.ID_Menu = sm.ID
							   LEFT JOIN system_icon si on si.ID = sm.ClassIco
							   WHERE sm.ID_Parent = '0' and sml.ID_Level = '$cLevel' ORDER BY OrderList ASC";
				$dbParent 	= $this->db->query($qParent) ;
				foreach ($dbParent->result_array() as $rRParent){
					renderMenuItem($this, $rRParent['ID'],$rRParent['Keterangan'], $rRParent['ClassIco'], 0, $rRParent['Request'], $cLevel);
				}
			?>
			
			<!-- begin sidebar minify button -->
			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
	        <!-- end sidebar minify button -->
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->
<?php
	}
?>