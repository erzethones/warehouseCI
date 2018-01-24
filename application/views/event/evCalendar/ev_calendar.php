<!DOCTYPE html>
<!--[if IE 8]><html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:54:23 GMT -->
<?php $this->load->view('head_tag'); ?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		
		<!-- begin #header -->
		<?php $this->load->view('header_page'); ?>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<?php $this->load->view('sidebar_page'); ?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
		    <!-- begin page-header -->
			<h1 class="page-header">Calendar Events <small>a better way to reminds you...</small></h1>
			<!-- end page-header -->
			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			        </div>
			        <h4 class="panel-title">Calendar Events</h4>
			    </div>
			    <div class="panel-body p-0">
			        <div class="vertical-box">
			            <!--<div class="vertical-box-column p-15 bg-silver width-sm">
                             <div id="external-events" class="calendar-event">
                                <h4 class=" m-b-20">Draggable Events</h4>
                                <div class="external-event bg-purple" data-bg="bg-purple" data-title="Discussion" data-media="<i class='fa fa-comments'></i>" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
                                    <h5><i class="fa fa-comments fa-lg fa-fw"></i> Discussion</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="external-event bg-blue" data-bg="bg-blue" data-title="Dinner" data-media="<i class='fa fa-cutlery'></i>" data-desc="Cum sociis natoque penatibus et magnis dis parturient montes."> 
                                    <h5><i class="fa fa-cutlery fa-lg fa-fw"></i> Dinner</h5>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                </div>
                                <div class="external-event bg-green" data-bg="bg-green" data-title="Brainstorming" data-media="<i class='fa fa-lightbulb-o'></i>" data-desc="Mauris tristique massa eu venenatis semper. Phasellus a nibh nisi.">
                                    <h5><i class="fa fa-lightbulb-o fa-lg fa-fw"></i> Brainstorming</h5>
                                    <p>Mauris tristique massa eu venenatis semper. Phasellus a nibh nisi.</p>
                                </div>
                                <div class="external-event bg-orange" data-bg="bg-orange" data-title="Performance Rating" data-media="<i class='fa fa-tasks'></i>" data-desc="Class aptent taciti sociosqu ad litora torquent per conubia nostra.">
                                     <h5><i class="fa fa-tasks fa-lg fa-fw"></i> Performance Rating</h5>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                </div>
                                <div class="external-event bg-red" data-bg="bg-red" data-title="Video Shooting" data-media="<i class='fa fa-video-camera'></i>" data-desc="Donec ligula nisi, tempus eu egestas id, auctor sit amet velit.">
                                    <h5><i class="fa fa-video-camera fa-lg fa-fw"></i> Video Shooting</h5>
                                    <p>Donec ligula nisi, tempus eu egestas id, auctor sit amet velit.</p>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="drop-remove" />
                                        remove after drop
                                    </label>
                                </div>
                            </div> 
                        </div>-->
                        <div id="calendar" class="vertical-box-column p-15 calendar"></div>
			        </div>
			    </div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-1.9.1.min.js') ; ?> "></script>
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-migrate-1.1.0.min.js') ; ?> "></script>
	<script src="<?php echo base_url('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') ; ?> "></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ; ?> "></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url() ; ?> assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url() ; ?> assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url() ; ?> assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url('assets/plugins/slimscroll/jquery.slimscroll.min.js') ; ?> "></script>
	<script src="<?php echo base_url('assets/plugins/jquery-cookie/jquery.cookie.js') ; ?> "></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('assets/plugins/fullcalendar/fullcalendar/fullcalendar.js') ; ?> "></script>
	<script src="<?php echo base_url('assets/js/apps.min.js') ; ?> "></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script type="text/javascript">
	var handleCalendarDemo=function(){
		"use strict";
		var e={left:"today prev,next ",center:"title",right:"month,agendaWeek,agendaDay"};
		var t=new Date;
		var n=t.getMonth();
		var r=t.getFullYear();
		var base_url='<?php echo base_url('ev_calendar/getEvents') ;?>'; // Here i define the base_url
		var i=$("#calendar").fullCalendar({
			header:e,
			eventRender:function(e,t,n){
				var r=e.media?e.media:"";
				var i=e.description?e.description:"";
				t.find(".fc-event-title").after($('<span class="fc-event-icons"></span>').html(r));
				t.find(".fc-event-title").append("<small>"+i+"</small>")},
				editable:false,
				events: base_url ,
				select: function(start, end) {
	                $('#start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
	                $('#end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
	            },
				/*events : function(start, end) {
	                		$.ajax({
	                 		url: '<?php //echo base_url() ?>calendar/get_events',
	                 		dataType: 'json',
	                 		data: {
	                 			// our hypothetical feed requires UNIX timestamps
	                 			start : start.unix(),
	                 			end   : end.unix()
	                 		},
	                 		success: function(msg) {
	                     		var events = msg.events;
	                     		callback(events);
	                 		}
	                 	});
	            	}
	         	},*/
				});
				
		$("#external-events .external-event").each(function(){
			var e={title:$.trim($(this).attr("data-title")),
			className:$(this).attr("data-bg"),
			media:$(this).attr("data-media"),
			description:$(this).attr("data-desc")
		};
		$(this).data("eventObject",e);
		$(this).draggable({zIndex:999,revert:true,revertDuration:0})
	})};
	var Calendar=function(){
		"use strict";
		return{init:function(){handleCalendarDemo()}
	}}()

	$('#calendar').fullCalendar({
	     eventSources: [
	         {
	             events: function(start, end, timezone, callback) {
	                 $.ajax({
	                 url: '<?php echo base_url() ?>calendar/get_events',
	                 dataType: 'json',
	                 data: {
	                 // our hypothetical feed requires UNIX timestamps
	                 start: start.unix(),
	                 end: end.unix()
	                 },
	                 success: function(msg) {
	                     var events = msg.events;
	                     callback(events);
	                 }
	                 });
	             }
	         },
	     ]
	 });
	</script>
	<script>
		$(document).ready(function() {
			App.init();
			Calendar.init();
		});
	</script>
</body>
	
</html>
