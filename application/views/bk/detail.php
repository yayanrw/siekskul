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
                    <center>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <img class="img-responsive img-circle" src="<?= base_url('public/img/no_photo.png') ?>" alt="">
                            <h3><?= $bk->nama ?></h3>
                            <h4><i>Bimbingan Konseling</i></h4>
                        </div>
                    </center>

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#profil" aria-controls="profil" role="tab" data-toggle="tab">Informasi Detail</a>
                                </li>
                                <li role="presentation">
                                    <a href="#ubah" aria-controls="tab" role="tab" data-toggle="tab">Ubah Informasi</a>
                                </li>
                            </ul>

                             <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="profil">
                                    <div class="form-horizontal form-label-left">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="nip">NIP</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <input class="form-control" value="<?= $bk->nip ?>" id="nip" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="nama">Nama</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <input class="form-control" value="<?= $bk->nama ?>" id="nama" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="jk">Jenis Kelamin</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <input class="form-control" value="<?= $bk->jk ?>" id="jk" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="no_telp">No Telp</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <input class="form-control" value="<?= $bk->no_telp ?>" id="no_telp" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="alamat">Alamat</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <textarea class="form-control" id="alamat" readonly><?= $bk->alamat ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="ubah">
                                    <form action="<?= base_url('bk/update/'.$bk->nip) ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="nip">NIP</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <input class="form-control" value="<?= $bk->nip ?>" id="nip" name="nip" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="nama">Nama</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <input class="form-control" value="<?= $bk->nama ?>" id="nama" name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jk" class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3">Jenis Kelamin</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <label class="radio-inline">
                                                    <input type="radio" name="jk" value="Laki-laki" required
                                                    <?php if ($bk->jk == 'Laki-laki') {
                                                        echo 'checked'; }?>
                                                    >Laki-laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="jk" value="Perempuan" required
                                                    <?php if ($bk->jk == 'Perempuan') {
                                                        echo 'checked'; }?>
                                                    >Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="no_telp">No Telp</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <input class="form-control" value="<?= $bk->no_telp ?>" id="no_telp" name="no_telp">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="alamat">Alamat</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                                <textarea class="form-control" id="alamat"  name="alamat"><?= $bk->alamat ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <a href="<?= base_url('bk') ?>" class="btn btn-warning"><i class="fa fa-angle-double-left"></i> Kembali</a>
                                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                            </div>	
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
