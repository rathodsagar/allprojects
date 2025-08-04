<?php include("includes/header-2.php"); ?>

<section class="section-container">
	<div class="row">
		<?php include("includes/sidebar_according.php"); ?>		
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<form>
				<div class="rounded-table">
					<table id="rounded-table" class="table table-bordered table-striped table-condensed">
						<thead class="thead">
							<tr>
								<th class="text-center">Equity</th>
								<th class="text-center">Debt</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="right">123456</td>
								<td align="right">123456</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="know-more">
					Why is Asset Allocation important? <a href="#KnowMore" data-toggle="collapse" >Know More</a>
					<div id="KnowMore" class="collapse">
						<ul class="padd_top_20">
							<li>Asset Allocation is the split between your debt and equity investments. It is important so that your investments are in sync with your risk appetite and optimally invested at all times.</li>
							<li>For example, if your risk profile is "Moderate", it means that you are not the kind of investor who can take very high risks. You should therefore have some part of your investment allocated to debt instruments.</li>
							<li>This allocation will help you and us to manage your portfolio better (shift of investments from debt to equity and vice versa as and when needed) and ensure that your investments are optimal at all times.</li>
						</ul>
					</div>
				</div>
				<div class="text-right btn_pt-40">
					<button type="button" class="btn btn-1 btn-sm" data-toggle="modal" data-target="#dialog">Request Discussion</button>
			</form>
		</div>
	</div>
</section>
<div class="dialogPopup">
	<div class="modal fade" id="dialog" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal">&#10006;</button>
					<h1 class="header">Asset Discussion</h1>
					<div class="sub-header">Request CAGRfunds to Discuss Asset</div>
				</div>
				<div class="modal-body">
					<textarea placeholder="Your Message" class="form-control"></textarea>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-1 btn-sm">Submit</button>
					<button type="button" class="btn btn-2 btn-sm" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("includes/footer.php"); ?>