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
								<th colspan="3" class="fw5">Please make the following selections</th>
							</tr>
						</thead>					
						<tbody>
							<tr>
								<td><strong>Fund House:</strong></td>
								<td colspan="2">
									<select class="form-control">
										<option value="">Select Fund House</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><strong>Source Scheme:</strong></td>
								<td colspan="2">
									<select class="form-control">
										<option value="">Select Scheme</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><strong>Available units</strong></td>
								<td colspan="2">123456</td>
							</tr>
							<tr>
								<td><strong>Switch Amount</strong></td>
								<td colspan="2">
									<ul class="list-inline">
										<li>
											<input type="text" name="" placeholder="Switch Amount" class="form-control">
										</li>
										<li>
											<div class="checkbox">
												<label><input type="checkbox" value="">All units</label>
											</div>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td><strong>Destination Scheme Type:</strong></td>
								<td colspan="2">
									<select class="form-control">
										<option value="">Select Scheme Type</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><strong>Destination Fund Option:</strong></td>
								<td colspan="2">
									<select class="form-control">
										<option value="">Select Destination Fund Option</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><strong>Destination Scheme:</strong></td>
								<td colspan="2">
									<select class="form-control">
										<option value="">Select Destination Scheme</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><strong>Advised by</strong></td>
								<td colspan="2">
									<ul class="list-inline">
										<li>
											<div class="checkbox">
												<label><input type="checkbox" value="">Execution only*</label>
											</div>
										</li>
										<li>
											<select class="form-control">
												<option value="">Select EUIN / Name</option>
												<option value="">1</option>
												<option value="">2</option>
												<option value="">3</option>
											</select>
										</li>
									</ul>
								</td>
							</tr>
						</tbody>
						<tfoot class="tfoot">
							<tr>
								<td colspan="2" align="center" class="text-center">
									<button type="submit" class="btn btn-1 btn-sm">Next</button>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</form>
			<div class="desc_content padd_btm_40">
				<small>
					<strong>Important Note:</strong>
					<br/>
					*I/We hereby confirm that the EUIN box has been intentionally left blank by me/us as this transaction is executed without any interaction or advice by the employee/relationship manager/sales person of CAGRfunds or notwithstanding the advice of in-appropriateness, if any, provided by the employee/relationship manager/sales person of CAGRfunds.
				</small>
			</div>
		</div>
	</div>
</section>

<?php include("includes/footer.php"); ?>