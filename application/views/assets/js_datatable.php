<script src="<?= base_url('public/assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('public/assets/js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('public/assets/js/dataTables.responsive.min.js') ?>"></script>
<script type="text/javascript">
	$(function() {
		$("#datatable").DataTable({
			"columnDefs": [{
				"targets": 'no-sort',
				"orderable": false
			},{
				"targets": 'no-search',
				"searchable": false
			}]
		});
	});
</script>