<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
	</form>
	<ul class="nav menu">
		<li class="
		<?php if ($id_menu == 'beranda') {
		 echo 'active'; 
		} ?>
		"><a href="<?= base_url('beranda') ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Beranda</a></li>	
		
		<?php if($this->session->userdata('level') == 'admin'){ ?>
		<li class="
		<?php if ($id_menu == 'bk') {
		 echo 'active'; 
		} ?>
		"><a href="<?= base_url('bk') ?>"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Bimbingan Konseling</a></li>
		<?php } ?>

		<?php if(($this->session->userdata('level') == 'admin') || $this->session->userdata('level') == 'bk'){ ?>
		<li class="
		<?php if ($id_menu == 'pic') {
		 echo 'active'; 
		} ?>
		"><a href="<?= base_url('pic') ?>"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Person In Charge</a></li>
		<?php } ?>

		<?php if(($this->session->userdata('level') == 'admin') || $this->session->userdata('level') == 'bk'){ ?>
		<li class="parent
		<?php if ($id_menu == 'siswa') {
		 echo 'active'; 
		} ?>
		">
		<a data-toggle="collapse" href="#submenu-siswa"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Siswa</a>
			<ul class="children collapse" id="submenu-siswa">
				<li>
					<a href="<?= base_url('siswa') ?>">
						<svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Data Siswa
					</a>
				</li>
				<li>
					<a href="<?= base_url('angkatan') ?>">
						<svg class="glyph stroked paperclip"><use xlink:href="#stroked-paperclip"/></svg> Data Tahun Angkatan
					</a>
				</li>
			</ul>
		</li>
		<?php } ?>

		<?php if(($this->session->userdata('level') == 'admin') || $this->session->userdata('level') == 'bk'){ ?>
		<li class="parent
		<?php if ($id_menu == 'Ekstrakulikuler') {
		 echo 'active'; 
		} ?>
		">
		<a data-toggle="collapse" href="#submenu-ekskul"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Ekstrakulikuler</a>
			<ul class="children collapse" id="submenu-ekskul">
				<li>
					<a href="<?= base_url('ekskul') ?>">
						<svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg> Data Ekskul
					</a>
				</li>
				<li>
					<a href="<?= base_url('periode') ?>">
						<svg class="glyph stroked paperclip"><use xlink:href="#stroked-paperclip"/></svg> Data Periode
					</a>
				</li>
			</ul>
		</li>
		<?php } ?>

		<?php if($this->session->userdata('level') == 'pic'){ ?>
		<li class="
		<?php if ($id_menu == 'ekskul') {
		 echo 'active'; 
		} ?>
		"><a href="<?= base_url('ekskul') ?>"><svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg> Ajukan Ekstra Kulikuler</a></li>
		<?php } ?>

		<?php if($this->session->userdata('level') == 'siswa'){ ?>
		<li class="
		<?php if ($id_menu == 'ekskul') {
		 echo 'active'; 
		} ?>
		"><a href="<?= base_url('ekskul') ?>"><svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg> Pilih Ekstrakulikuler</a></li>
		<?php } ?>

		<!--<li class="
		@if ($id_menu == 'absensi')
		{{ 'active' }}
		@endif
		"><a href="<?= base_url('absensi') ?>"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Absensi</a></li>-->
	</ul>
	<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
</div>