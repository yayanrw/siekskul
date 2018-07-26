<?php 
$notif = $this->session->flashdata('notif');
if(isset($notif)) { ?>
    <div class="alert alert-success col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-7 col-lg-offset-7" style="position: fixed; width: 300px; z-index:9999;" id="notif">
        <h4><i class="fa fa-info"></i> <?= $notif ?></h4>
    </div>
<?php } ?>