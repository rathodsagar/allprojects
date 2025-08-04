<?php include("includes/header-2.php"); ?>

<section class="section-container">
	<div class="row">
		<?php include("includes/sidebar_according.php"); ?>		
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<form>
				<div class="padd_btm_20">
					<button type="button" class="btn btn-1 btn-sm" data-toggle="modal" data-target="#alert">Request Fund Statement</button>
				</div>
				<div class="fullwidth-table">
					<table class="table">
						<thead class="thead">
							<tr>
								<th colspan="3" class="fw5">Fund House Statement</th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="table-reponsive rounded-table">
					<table id="rounded-table" class="table table-bordered table-striped table-condensed">
						<thead class="thead">
							<tr>
								<th class="text-center">Name of the Fund</th>
								<th class="text-center">Folio No.</th>
								<th class="text-center">Fund Type</th>
								<th class="text-center">Option</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="10" align="center">No Record Found</td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
</section>
<div class="alertPopup">
	<div class="modal fade" id="alert" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&#10006;</button>
				</div>
				<div class="modal-body">
					<div class="header">
						<h1 class="title">Thanks Trilokchand Modi</h1>
						<div class="sub-title">Your Statement will be uploaded soon!</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("includes/footer.php"); ?>