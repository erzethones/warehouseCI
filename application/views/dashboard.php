<?php
    $dDate         = date("d M Y");
    
?>
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Home</a></li>
	<li><a href="javascript:;">Dashboard</a></li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header"> Dashboard <small></small></h1>
<!-- end page-header -->
<!-- begin row -->
<div class="row">
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-orange">
            <div class="stats-icon"><i class="fa fa-calendar fa-fw"></i></div>
            <div class="stats-title">TODAY</div>
            <div class="stats-number"><?php echo $dDate ;?></div>
            <div class="stats-link">
                <a href="javascript:;">&nbsp;</a>
            </div>
        </div>
        
    </div>
    <!-- end col-3 -->

    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-blue">
            <div class="stats-icon"><i class="fa fa-barcode fa-fw"></i></div>
            <div class="stats-title">SALES THIS WEEK</div>
            <div class="stats-info"><p><?php echo $dDate ;?></p></div>
            <div class="stats-link">
                <a href="javascript:;">&nbsp;</a>
            </div>
        </div>
        
    </div>
    <!-- end col-3 -->

    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-green">
            <div class="stats-icon"><i class="fa fa-cubes"></i></div>
            <div class="stats-info">
                <h4>ORDERS TODAY</h4>
                <p>~</p>   
            </div>
            <div class="stats-link">
                <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-red">
            <div class="stats-icon"><i class="fa fa-exclamation-triangle"></i></div>
            <div class="stats-info">
                <h4>UNRESOLVED ORDERS</h4>
                <p>~</p>   
            </div>
            <div class="stats-link">
                <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->