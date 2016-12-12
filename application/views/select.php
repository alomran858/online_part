
<?php
if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $username = $session_data['username'];
     $id=$session_data['id'];
   }else {

 redirect('login', 'refresh');

   }
   if ($idd !=$id){
     show_404();
   }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Retrieve Queries  - Analyze Social Media </title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="http://<?php echo  base_url() ; ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="http://<?php echo  base_url() ; ?>assets/js/html5shiv.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/respond.min.js"></script>
		<![endif]-->






    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


   <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
     <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>

     <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
       <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>


       <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
       <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
         <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>



             <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
             <script type='text/javascript'>
              google.charts.load('upcoming', {'packages': ['geochart']});
              google.charts.setOnLoadCallback(drawMarkersMap);

               function drawMarkersMap() {
               var data = google.visualization.arrayToDataTable([
                 ['Country',   'Population', 'Area Percentage'],
                 ['France',  65700000, 50],
                 ['Germany', 81890000, 27],
                 ['Poland',  38540000, 23]
               ]);

               var options = {
                 sizeAxis: { minValue: 0, maxValue: 100 },
                 region: '155', // Western Europe
                 displayMode: 'markers',
                 colorAxis: {colors: ['#e7711c', '#4374e0']} // orange to blue
               };

               var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
               chart.draw(data, options);
             };
             </script>


             <script src="http://code.highcharts.com/maps/highmaps.js"></script>


	</head>

	<body class="no-skin">


		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="http://<?php echo base_url();  ?>index.php/user/panel" class="navbar-brand">
						<small>
							<i class="fa fa-bar-chart"></i>
							Analyze Social Media
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">	<!--upper right sidebar -->




						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">

								<span  >
									<medium>Welcome    </medium>
								<?php echo $username ; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">



								<li class="divider"></li>

								<li>
									<a href="http://<?php echo base_url()?>index.php/user/logout ">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>




                								<ul class="nav nav-list">
                									<li class="active">
                										<a href="http://<?php echo base_url();  ?>index.php/user/panel">
                											<i class="menu-icon fa fa-tachometer"></i>
                											<span class="menu-text"> Dashboard </span>
                										</a>

                										<b class="arrow"></b>
                									</li>

                									<li class="">
                										<a href="http://<?php echo base_url();  ?>index.php/query/newquery" >
                											<i class="menu-icon fa fa-sign-in "></i>
                											<span class="menu-text">
                												  Retrive Topic Result
                											</span>


                										</a>

                										<b class="arrow"></b>


                									</li>



                				          <li class="">
                				          	<a href="http://<?php echo base_url();  ?>index.php/query/retrievequeries/<?php echo $id ?> " >
                				              <i class="menu-icon fa fa-cloud-download "></i>
                				              <span class="menu-text">
                				                Retrieve Result
                				              </span>


                				            </a>

                				            <b class="arrow"></b>


                				          </li>

                								</ul><!-- /.nav-list -->



				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="http://<?php echo base_url();  ?>index.php/user/panel">Home</a>
							</li>
							<li class="active">Retrive Topic Result </li>
						</ul><!-- /.breadcrumb -->


					</div>

  <h1>-   Retrieve Queries </h1>


  <div class="container">
    <table  class="table  table-bordered table-hover">
        <tr>

         <td><strong>Query topic</strong></td>
         <td>Status</td>
         <td>Number of Tweets</td>
          <td>Number of Accounts</td>
       </tr>
        <?php foreach($queries as $query){?>
        <tr>

            <td><?php echo $query->topic;?></td>
                <td><?php  if($query->status ==0){
                  echo 		'<span class="label label-sm label-warning">not Finished</span>';
                }else{
              echo    '<span class="label label-sm label-success">Finished</span>';
                }
                 ?></td>

                 <th>
                   30066 tweets
                 </th>

                 <th>
                   6284 Accounts
                 </th>
         </tr>

        <?php }?>

      </table>
<center>

  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1"><h1>Emotions Map</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">




                  <style>


                  #central {
            position: fixed;
            bottom: 30%;
            left: 24%;
            z-index: 20;
            color: white;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
          }
          #western {
          position: absolute;
          bottom: 27%;
          left: 9%;
          z-index: 20;
          color: white;
          text-shadow: 0 1px 2px rgba(0,0,0,.6);
          }

          #eastern {
          position: absolute;
          bottom: 18%;
          right: -3%;
          z-index: 20;
          color: white;
          text-shadow: 0 1px 2px rgba(0,0,0,.6);
          }
          #southern {
          position: absolute;
          bottom: 1%;
          left: 21%;
          z-index: 20;
          color: white;
          text-shadow: 0 1px 2px rgba(0,0,0,.6);
          }

          #northern {
          position: absolute;
          top: 15%;
          left: 4%;
          z-index: 20;
          color: white;
          text-shadow: 0 1px 2px rgba(0,0,0,.6);
          }



                  </style>



                  <div id="mycarousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="item active">
                          <img src="http://<?php echo base_url();  ?>/assets/images/gallery/map.png" alt="" class="img-responsive">
                             <div class="jeddah">

                             </div>
                             <div class="carousel-caption" id="central">
                          80% Sad
                              <img src="http://<?php echo base_url();  ?>/assets/images/gallery/cry.svg" height="15" width="15" ?>
                             </div>

                             <div class="carousel-caption" id="western">
                          55% happy
                              <img src="http://<?php echo base_url();  ?>/assets/images/gallery/happy.svg" height="15" width="15" ?>
                             </div>

                             <div class="carousel-caption" id="eastern">
                          55% angry
                              <img src="http://<?php echo base_url();  ?>/assets/images/gallery/angry.svg" height="15" width="15" ?>
                             </div>

                             <div class="carousel-caption" id="southern">
                          55% neutral
                              <img src="http://<?php echo base_url();  ?>/assets/images/gallery/neutral.svg" height="15" width="15" ?>
                             </div>

                             <div class="carousel-caption" id="northern">
                             64% fearful
                              <img src="http://<?php echo base_url();  ?>/assets/images/gallery/fear.svg" height="15" width="15" ?>
                             </div>

                          </div>
                      </div>
                  </div>



        </div>




      </div>
    </div>
  </div>






    <div class="container">
      <h1>Cites That Tweeted The Most :</h1>
  <div id="citeschart" style="width:80%;height: 60vh;"></div>

  <h1>Most Tweeted Time :</h1>
  <div id="tweetschart"  style="width:80%;height:60vh;"></div>




  </div>







  <div class="container">




      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse2"> <h1>10 Most Mentioned HashTags</h1>  </a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">


              <p><font size="6">النصر</font>

    <font size="2">الزعيم</font>

    <font size="10">التحكيم</font>  &nbsp &nbsp &nbsp &nbsp &nbsp
    <font size="2">اقيلوا_المدرب</font> &nbsp &nbsp &nbsp &nbsp
    <font size="4">خسارة</font> &nbsp &nbsp &nbsp &nbsp
    <font size="5">هدف</font> &nbsp &nbsp &nbsp &nbsp
    <font size="2">ادارة</font><br>
    <font size="8">المدرب</font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <font size="1">المباراة</font> &nbsp &nbsp &nbsp &nbsp
    <font size="10">تسلل</font> &nbsp &nbsp &nbsp &nbsp

              </p>




            </div>




          </div>
        </div>
      </div>


</div>


<br><br><br><br><br><br><br>

<br><br><br><br><br><br><br>
			</div><!-- /.main-content -->





			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://<?php echo  base_url() ; ?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='http://<?php echo  base_url() ; ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="http://<?php echo  base_url() ; ?>assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.sparkline.index.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.flot.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.flot.pie.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="http://<?php echo  base_url() ; ?>assets/js/ace-elements.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/ace.min.js"></script>




		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});


			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);


			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });

				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});




				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });


				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
		</script>


    <script>



  new  Morris.Bar({
  element: 'tweetschart',
  data: [
    { y: '6AM', a: 300 },
    { y: '9AM', a: 654 },
    { y: '12PM', a: 456 },
    { y: '3PM', a: 500 },
    { y: '6PM', a: 550 },
    { y: '9PM', a: 1000 },
    { y: '12AM', a: 800 },
    { y: '3AM', a: 120 }
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Number of tweets']
});

new Morris.Donut({
  element: 'citeschart',
  data: [
    {label: "Riyadh", value: 3000},
    {label: "Jeddah", value: 2500},
    {label: "Abha", value: 1450},
     {label: "Braidah", value: 1300},
     {label: "Almagmaa", value: 453},
     {label: "Alkharj", value: 200},
     {label: "Arar", value: 400},
     {label: "Alquriat", value: 340},
     {label: "Dammam", value: 2322},

  ]
});


</script>


	</body>
</html>
