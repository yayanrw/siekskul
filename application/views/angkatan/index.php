<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title_page; ?></title>

	<!-- CSS -->
	<?php $this->load->view('assets/css'); ?>
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

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-paperclip"></i> <?= $title ?></div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =1; 
                            foreach ($angkatan as $element) {?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><i class="fa fa-paperclip"></i> <?= $element->tahun ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>		
        </div>	

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> <?= $title2 ?></div>
                <div class="panel-body">
                    <form action="<?= base_url('angkatan/store') ?>" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="tahun" class="control-label col-sm-3">Angkatan</label>
                            <div class="col-sm-9">
                                <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun Angkatan" required>
                            </div>
                        </div>				
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                            </div>	
                        </div>
                    </form>
                </div>
            </div>		
        </div>
		
		
	</div>	<!--/.main-->

	<!-- JS -->
	<?php $this->load->view('assets/js'); ?>
    <script>
		$("#notif").fadeTo(2000, 500).slideUp(500, function(){
		$("#notif").slideUp(500);
	});
	</script>
	<!-- End JS -->

</body>

</html>