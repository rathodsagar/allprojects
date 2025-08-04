<?php include("includes/header-2.php"); ?>

<section class="section-container">
	<div class="row">
		<?php include("includes/sidebar_according.php"); ?>		
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<form>
				<div class="fullwidth-table">
					<table class="table">
						<thead class="thead">
							<tr>
								<th colspan="3" class="fw5">Order Report</th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="table-responsive rounded-table">
					<table id="rounded-table" class="table table-bordered table-striped table-condensed">
						<thead class="thead">
							<tr>
								<th class="text-center">Transaction Number</th>
								<th class="text-center">Scheme</th>
								<th class="text-center">Folio</th>
								<th class="text-center">Amount</th>
								<th class="text-center">Units</th>
								<th class="text-center">Type</th>
								<th class="text-center">Status</th>
								<th class="text-center">Date</th>
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

<?php include("includes/footer.php"); ?>