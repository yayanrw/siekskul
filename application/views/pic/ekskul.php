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
                <div class="panel-heading"><i class="fa fa-user"></i> <?= $title ?></div>
                <div class="panel-body">
                    <form action="<?= base_url('ekskul/store') ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama" class="control-label col-sm-3">nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Ekstrakulikuler" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="control-label col-sm-3">Deskripsi</label>
                            <div class="col-sm-6">
                                <textarea name="deskripsi"  class="form-control" id="deskripsi" cols="60" rows="3" placeholder="Deskripsi ekstrakulikuler" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kuota" class="control-label col-sm-3">Kuota</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="kuota" id="kuota" placeholder="Kuota Ekstrakulikuler" required>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="angkatan" class="control-label col-sm-3">Periode</label>
                            <div class="col-sm-6">
                                <select name="periode" id="id_periode" class="form-control">
                                    <option value="">-- Pilih periode ekstrakulikuler --</option>
                                    <?php foreach ($periode as $element) {?>
                                        <option value="<?= $element->periode ?>"><?= $element->periode ?></option>
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
