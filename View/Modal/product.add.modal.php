<div class="modal fade" id="add-product-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add new product</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="add-product-form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="machine_name">Code</label>
						<input type="text" class="form-control" id="product-code" style="width: 100%;">
					</div>
					<div class="form-group">
						<label for="machine_name">Name</label>
						<input type="text" class="form-control" id="product-name" style="width: 100%;">
					</div>
					<div class="form-group">
						<label>Images</label>
						<div class="row" id="imgChooserPanel">
							<div class="col-md-3">
								<div style="max-width: 100%; max-height: 100%;">
									<button class="close" type="button" style="position: relative; top: 3px; left: -28px; display: none; z-index: 100;" onclick="delImgChooser(this)">×</button>
									<input type="file" name="product-image" style="display: none;">
									<img src="./assets/img/plus.png" class="imgChooserBg" onclick="chooseImg(this, 'product-image')">
								</div>
							</div>
						</div>
					</div>
                    <div class="form-group">
						<label for="machine_doc">Price</label>
						<input type="text" class="form-control" id="product-price" style="width: 100%;">
					</div>
					<div class="form-group">
						<label for="machine_doc">Country</label>
						<input type="text" class="form-control" id="product-country" style="width: 100%;">
					</div>
					<div class="form-group">
						<label for="machine_doc">Brand</label>
						<select class="form-control" id="product-brand">
						<?php
						foreach($viewParams['brandList'] as $brand){ ?>
							<option value="<?php echo $brand['brand_id'] ?>"><?php echo $brand['name'] ?></option>
						<?php 
						} ?>
						</select>
					</div>
					<div class="form-group">
						<label for="machine_doc">Description</label>
						<textarea id="product-description" class="form-control"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary" data-dismiss="modal" onclick="addProduct()">Add</button>
			</div>
		</div>
	</div>
</div>