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

        <div class="panel panel-info">
            <div class="panel-heading"><i class="fa fa-user"></i> Informasi Siswa</div>
            <div class="panel-body">
                <center>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <img class="img-responsive img-circle" src="<?= base_url('public/img/no_photo.png') ?>" alt="">
                        <h3><?= $siswa->nama ?></h3>
                        <h4><i>Angkatan <?= $siswa->angkatan ?></i></h4>
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
                    </div>

                     <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="profil">
                            <div class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="nis">NIS</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                        <input class="form-control" value="<?= $siswa->nis ?>" id="nis" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="nama">Nama</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                        <input class="form-control" value="<?= $siswa->nama ?>" id="nama" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="jk">Jenis Kelamin</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                        <input class="form-control" value="<?= $siswa->jk ?>" id="jk" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="no_telp">No Telp</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                        <input class="form-control" value="<?= $siswa->no_telp ?>" id="no_telp" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3 col-lg-3" for="alamat">Alamat</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                                        <textarea class="form-control" id="alamat" readonly><?= $siswa->alamat ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="ubah">
							<form action="<?= base_url('siswa/update/'.$siswa->nis) ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nis" class="control-label col-sm-3">NIS</label>
									<div class="col-sm-6">
										<input type="number" class="form-control" name="nis" id="nis" placeholder="Nomor Induk Siswa" value="<?= $siswa->nis ?>" required readonly>
									</div>
								</div>
								<div class="form-group">
									<label for="nama" class="control-label col-sm-3">Nama</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama lengkap" value="<?= $siswa->nama ?>" required>
									</div>
								</div>
								<div class="form-group">
									<label for="jk" class="control-label col-sm-3">Jenis Kelamin</label>
									<div class="col-sm-9">
										<label class="radio-inline">
											<input type="radio" name="jk" value="Laki-laki" required
											<?php if ($siswa->jk == 'Laki-laki') {
											    echo 'checked';
                                            } ?>
											>Laki-laki
										</label>
										<label class="radio-inline">
											<input type="radio" name="jk" value="Perempuan" required
											<?php if ($siswa->jk == 'Perempuan') {
											    echo 'checked';
                                            } ?>
											>Perempuan
										</label>
									</div>
								</div>
								<div class="form-group">
									<label for="no_telp" class="control-label col-sm-3">No. Telp</label>
									<div class="col-sm-6">
										<input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor telepon" value="<?= $siswa->no_telp ?>" required>
									</div>
								</div>
								<div class="form-group">
									<label for="alamat" class="control-label col-sm-3">Alamat</label>
									<div class="col-sm-6">
										<textarea name="alamat" class="form-control" id="alamat" cols="60" rows="3" placeholder="Alamat lengkap" required><?= $siswa->alamat ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="angkatan" class="control-label col-sm-3">Angkatan</label>
									<div class="col-sm-6">
										<select name="angkatan" id="angkatan" class="form-control">
											<option value="">-- Pilih tahun angkatan --</option>
											<?php foreach ($angkatan as $element) {?>
												<option value="<?= $element->tahun ?>"
												<?php if ($siswa->angkatan == $element->tahun) {
													echo 'selected';
                                                } ?>
												><?= $element->tahun ?></option>
                                            <?php } ?>
										</select>
									</div>
								</div>
								<!--<div class="form-group">
									<label for="foto" class="control-label col-sm-3">Foto Profil</label>
									<div class="col-sm-6">
										<input type="file" class="form-control" name="foto" id="foto">
									</div>
								</div>-->
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