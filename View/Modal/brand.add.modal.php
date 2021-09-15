<div class="modal fade" id="add-brand-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add new brand</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="addPostForm">
					<div class="form-group">
						<label for="post_title">Brand name</label>
						<input type="text" class="form-control" id="post_title" style="width: 100%;">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary" data-dismiss="modal" onclick="addBrand()">Add</button>
			</div>
		</div>
	</div>
</div>