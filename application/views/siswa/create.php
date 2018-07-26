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

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-user-plus"></i> Tambah Data Siswa</div>
                <div class="panel-body">
                    <form action="<?= base_url('siswa/store') ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nis" class="control-label col-sm-3">NIS</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="nis" id="nis" placeholder="Nomor Induk Siswa" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label col-sm-3">Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="password" id="password" placeholder="********" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="control-label col-sm-3">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="control-label col-sm-3">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <label class="radio-inline"><input type="radio" name="jk" value="Laki-laki" required>Laki-laki</label>
                                <label class="radio-inline"><input type="radio" name="jk" value="Perempuan" required>Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp" class="control-label col-sm-3">No. Telp</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor telepon" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="control-label col-sm-3">Alamat</label>
                            <div class="col-sm-6">
                                <textarea name="alamat" id="alamat" cols="60" rows="3" placeholder="Alamat lengkap" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="angkatan" class="control-label col-sm-3">Angkatan</label>
                            <div class="col-sm-6">
                                <select name="angkatan" id="id_angkatan" class="form-control">
                                    <option value="">-- Pilih tahun angkatan --</option>
                                    <?php foreach ($angkatan as $element) {?>
                                        <option value="<?= $element->tahun ?>"><?= $element->tahun ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="foto" class="control-label col-sm-3">Foto Profil</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <a href="<?= base_url('siswa') ?>" class="btn btn-warning"><i class="fa fa-angle-double-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
	

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