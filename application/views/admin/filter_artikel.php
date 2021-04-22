<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ADMIN | List Artikel</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'images/logo1.png'?>">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
<div class="row table-filter-container">

	<div class="col-sm-3">

		<form action="<?php echo base_url().'admin/tulisan'?>" method="get" enctype="multipart/form-data">

		<input type="hidden" name="jenis" value="<?php echo $jenis ?>">


		<div class="item-table-filter">

			<div class="form-group">

				<label class="control-label"><?php echo ('Pilih Submenu'); ?></label>
				<div class="form-group">

				<select id="subcategories" name="menu" class="form-control" onchange="get_third_categories(this.value);">

					<option value=""><?php echo ("All"); ?></option> 
					<?php

						$subcategories = $this->m_header->get_subcategories_by_parent_id($jenis);

						if (!empty($subcategories)) {

							foreach ($subcategories as $item):?>

								<option value="<?php echo $item->nama; ?>" <?php echo ($this->input->get('menu', true) == $item->id) ? 'selected' : ''; ?>><?php echo $item->nama; ?></option>

							<?php endforeach;

						}
					?>
				</select>
				<br>
			
				<button type="submit" class="btn bg-blue"><?php echo ("Search"); ?></button>

				<a href="<?php echo base_url().'admin/tulisan?jenis='.$jenis?>" class="btn btn-danger" role="button" aria-pressed="true">Reset</a>
			</div>
		<br>
		</form>
	</div>
</div>
</div>
	</div>
			</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
