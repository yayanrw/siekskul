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
                <div class="panel-heading"><i class="fa fa-user"></i> <?= $title ?></div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =1;
                            foreach ($bk as $element) {
                                ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><i class="fa fa-user"></i> <?= $element->nama ?></td>
                                <td>
                                    <a href="<?= base_url('bk/show/'.$element->nip) ?>" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> Lihat</a>
                                    <a href="<?= base_url('bk/destroy/'.$element->nip) ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>		
        </div>	

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-user-plus"></i> <?= $title2 ?></div>
                <div class="panel-body">
                    <form action="<?= base_url('bk/store') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nip" class="control-label col-sm-3">NIP</label>
                            <div class="col-sm-9">
                                <input type="number" name="nip" id="nip" class="form-control" placeholder="Nomor Induk Pegawai" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label col-sm-3">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="password" id="password" class="form-control" placeholder="********" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="control-label col-sm-3">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="control-label col-sm-3">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <label class="radio-inline"><input type="radio" name="jk" value="Laki-laki" required>Laki-laki</label>
                                <label class="radio-inline"><input type="radio" name="jk" value="Perempuan" required>Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp" class="control-label col-sm-3">No. Telp</label>
                            <div class="col-sm-9">
                                <input type="number" name="no_telp" id="no_telp" class="form-control" placeholder="Nomor telepon" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="control-label col-sm-3">Alamat</label>
                            <div class="col-sm-9">
                                <textarea name="alamat" id="alamat" cols="40" rows="3" class="form-control" placeholder="Alamat lengkap" required></textarea>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="foto" class="control-label col-sm-3">Foto Profil</label>
                            <div class="col-sm-9">
                                <input type="file" name="foto" id="foto" class="form-control">
                            </div>
                        </div> -->
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
