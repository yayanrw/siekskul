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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-user"></i> <?= $title ?></div>
                <div class="panel-body">
                <table id="datatable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ekskul</th>
                            <th>Pengaju</th>
                            <th>Periode</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;
                        foreach ($ekskul as $key) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $key->nama ?></td>
                            <td><?= $key->username ?></td>
                            <td><?= $key->periode ?></td>
                            <td>
                                <?php if($key->status == 'Disetujui') {?>
                                <span class="label label-success"><?= $key->status ?></span>
                                <?php } ?>
                                <?php if($key->status == 'Ditolak') {?>
                                <span class="label label-danger"><?= $key->status ?></span>
                                <?php } ?>
                                <?php if($key->status == 'Menunggu') {?>
                                <span class="label label-warning"><?= $key->status ?></span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($key->status == 'Menunggu') {?>
                                <a href="<?= base_url('ekskul/setuju/'.$key->id_ekskul); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Setujui</a>
                                <a href="<?= base_url('ekskul/tolak/'.$key->id_ekskul); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Tolak</a>
                                <a href="<?= base_url('ekskul/show/'.$key->id_ekskul); ?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Lihat</a>
                                <?php } ?>
                                <?php if($key->status == 'Disetujui') {?>
                                <a href="<?= base_url('ekskul/show/'.$key->id_ekskul); ?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Lihat</a>
                                <?php } ?>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
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
