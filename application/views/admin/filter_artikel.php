<div class="row table-filter-container">

	<div class="col-sm-12">

		<form action="<?php echo base_url().'admin/tulisan'?>" method="get" enctype="multipart/form-data">

		<input type="hidden" name="jenis" value="<?php echo $jenis ?>">


		<div class="item-table-filter">

			<div class="form-group">

				<label class="control-label"><?php echo ('subcategory'); ?></label>

				<select id="subcategories" name="menu" class="form-control" onchange="get_third_categories(this.value);">

					<option value=""><?php echo ("all"); ?></option>

					<?php

						$subcategories = $this->m_header->get_subcategories_by_parent_id($jenis);

						if (!empty($subcategories)) {

							foreach ($subcategories as $item):?>

								<option value="<?php echo $item->nama; ?>" <?php echo ($this->input->get('menu', true) == $item->id) ? 'selected' : ''; ?>><?php echo $item->nama; ?></option>

							<?php endforeach;

						}

				

					?>

				</select>

			</div>

		</div>


		<div class="item-table-filter md-top-10" style="width: 65px; min-width: 65px;">

			<label style="display: block">&nbsp;</label>

			<button type="submit" class="btn bg-purple"><?php echo ("filter"); ?></button>

		</div>

		<div class="item-table-filter md-top-10" style="width: 65px; min-width: 65px;">

			<label style="display: block">&nbsp;</label>

			<a href="<?php echo base_url().'admin/tulisan?jenis='.$jenis?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Reset</a>

		</div>

		</form>

	</div>

</div>

