<div class="row table-filter-container">

	<div class="col-sm-12">

		<form action="<?php echo base_url().'admin/tulisan'?>" method="get" enctype="multipart/form-data">



		<div class="item-table-filter" style="width: 80px; min-width: 80px;">

			<label><?php echo trans("show"); ?></label>

			<select name="show" class="form-control">

				<option value="15" <?php echo ($this->input->get('show', true) == '15') ? 'selected' : ''; ?>>15</option>

				<option value="30" <?php echo ($this->input->get('show', true) == '30') ? 'selected' : ''; ?>>30</option>

				<option value="60" <?php echo ($this->input->get('show', true) == '60') ? 'selected' : ''; ?>>60</option>

				<option value="100" <?php echo ($this->input->get('show', true) == '100') ? 'selected' : ''; ?>>100</option>

			</select>

		</div>



		<div class="item-table-filter">

			<label><?php echo trans('category'); ?></label>

			<select id="categories" name="category" class="form-control" onchange="get_filter_subcategories(this.value);">

				<option value=""><?php echo trans("all"); ?></option>

				<?php

				$categories = $this->m_header->get_all_parent_categories();

				foreach ($categories as $item): ?>

					<option value="<?php echo $item->id; ?>" <?php echo ($this->input->get('jenis', true) == $item->id) ? 'selected' : ''; ?>>

						<?php echo category_name($item); ?>

					</option>

				<?php endforeach; ?>

			</select>

		</div>



		<div class="item-table-filter">

			<div class="form-group">

				<label class="control-label"><?php echo trans('subcategory'); ?></label>

				<select id="subcategories" name="menu" class="form-control" onchange="get_third_categories(this.value);">

					<option value=""><?php echo trans("all"); ?></option>

					<?php

					if (!empty($this->input->get('jenis', true))):

						$subcategories = $this->m_header->get_subcategories_by_parent_id($this->input->get('jenis', true));

						if (!empty($subcategories)) {

							foreach ($subcategories as $item):?>

								<option value="<?php echo $item->id; ?>" <?php echo ($this->input->get('menu', true) == $item->id) ? 'selected' : ''; ?>><?php echo $item->name; ?></option>

							<?php endforeach;

						}

					endif;

					?>

				</select>

			</div>

		</div>



		<div class="item-table-filter">

			<label><?php echo trans("search"); ?></label>

			<input name="q" class="form-control" placeholder="<?php echo trans("search"); ?>" type="search" value="<?php echo html_escape($this->input->get('q', true)); ?>" <?php echo ($this->rtl == true) ? 'dir="rtl"' : ''; ?>>

		</div>

		<?php 

			if ($type == 'lelang') { ?>

				<input name="type" class="form-control"  type="hidden" value="lelang">

			<?php } ?>



		<div class="item-table-filter md-top-10" style="width: 65px; min-width: 65px;">

			<label style="display: block">&nbsp;</label>

			<button type="submit" class="btn bg-purple"><?php echo trans("filter"); ?></button>

		</div>

		<div class="item-table-filter md-top-10" style="width: 65px; min-width: 65px;">

            <label style="display: block">&nbsp;</label>

        

        

            <?php if (($type == "lelang")AND(!empty($types))){ ?>

            	<a href="<?php echo admin_url(); ?>products?type=lelang" class="btn btn-danger btn-add-new">
            &nbsp;&nbsp;<?php echo trans('Reset Filter'); ?>
               </a>

            <?php } elseif($types == "products"){ ?>

            	<a href="<?php echo admin_url(); ?>products" class="btn btn-danger btn-add-new">
            &nbsp;&nbsp;<?php echo trans('Reset Filter'); ?>
                </a>

            <?php } elseif($types == "featured_products"){ ?>

            	<a href="<?php echo admin_url(); ?>featured-products" class="btn btn-danger btn-add-new">
            &nbsp;&nbsp;<?php echo trans('Reset Filter'); ?>
                </a>

            <?php } ?>

        </div>

		</form>

	</div>

</div>

