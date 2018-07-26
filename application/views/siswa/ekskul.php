<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title_page; ?></title>

	<!-- CSS -->
	<?php $this->load->view('assets/css'); ?>
    <?php $this->load->view('assets/css_datatable'); ?>
	<!-- End CSS -->


</head>

<body>
	
	<!-- Navbar -->
	<?php $this->load->view('menu/view_navbar'); ?>
	<!-- End Navbar -->

	<!-- Sidebar -->
	<?php $this->load->view('menu/view_sidebar'); ?>
	<!-- End Sidebar -->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<!-- Breadcrumb -->
		<?php $this->load->view('menu/view_breadcrumb'); ?>
		<!-- End Breadcrumb -->

        <!--Alert-->
        <?php $this->load->view('menu/view_alert');?>
        <!--EndAlert-->
		<div class="row">
            <?php 
            foreach ($ekskul as $key) { ?>
			<div class="col-xs-12 col-md-4 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?= $key->kuota ?> <small>Kuota</small></div>
							<div class="text-muted"><?= $key->nama ?></div>
						</div>
					</div>
				</div>
			</div>
            <?php } ?>
        </div>
		
		
	</div>	<!--/.main-->

	<!-- JS -->
	<?php $this->load->view('assets/js'); ?>
    <?php $this->load->view('assets/js_datatable'); ?>
    <script>
		$("#notif").fadeTo(2000, 500).slideUp(500, function(){
		$("#notif").slideUp(500);
	});
	</script>
	<!-- End JS -->

</body>

</html>
