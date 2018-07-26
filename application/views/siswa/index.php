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

        <!--Menu-->
        <div class="container-fluid">
			<div class="row" style="padding-top: 10px; padding-bottom: 10px">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="<?= base_url('siswa/create') ?>" class="btn btn-sm btn-primary"><i class="fa fa-user-plus"></i> Tambah Siswa</a>
                </div>
			</div>
		</div>
        <!--EndMenu-->

        <!--Alert-->
        <?php $this->load->view('menu/view_alert');?>
        <!--EndAlert-->

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-user"></i> Data Siswa</div>
                <div class="panel-body">
                    <table  id="datatable" class="table table-condensed dt-responsive nowrap" cellspacing="0" width="100%" style="font-size: 15px">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Angkatan</th>
                                <th class="no-sort">No. Telp</th>
                                <th class="no-sort no-search">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($siswa as $element) { ?>
                            <tr>
                                <td><?= $element->nis ?></td>
                                <td><?= $element->nama ?></td>
                                <td><?= $element->angkatan ?></td>	
                                <td><?= $element->no_telp ?></td>
                                <td>
                                    <a href="<?= base_url('siswa/show/'.$element->nis) ?>" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> Lihat</a>
                                    <a href="<?= base_url('siswa/destroy/'.$element->nis) ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
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
