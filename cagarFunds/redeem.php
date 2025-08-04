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
								<td colspan="3">
									<select class="form-control">
										<option value="">Select Fund House</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><strong>Scheme:</strong></td>
								<td colspan="3">
									<select class="form-control">
										<option value="">Select Scheme</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><strong>Indicative NAV</strong></td>
								<td colspan="3">45.2020 on 20/06/2018</td>
							</tr>
							<tr>
								<td><strong>Available units</strong></td>
								<td colspan="3">217.4980 (<strong>Indicative Amount:</strong> 9831.34)</td>
							</tr>
							<tr>
								<td><strong>Redeem Amount</strong></td>
								<td colspan="3">
									<ul class="list-inline">
										<li>
											<input type="text" name="" placeholder="Redeem Amount" class="form-control">
										</li>
										<li>
											<div class="checkbox">
												<label><input type="checkbox" value="">Execution only*</label>
											</div>
										</li>
									</ul>
								</td>
							</tr>
						</tbody>
						<tfoot class="tfoot">
							<tr>
								<td colspan="3" align="center" class="text-center">
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
					<strong>Equity/Debt Funds:</strong> For all valid subscription orders placed on or before 1400 hrs IST, same day NAV shall be applicable.<br/>
					<strong>Liquid Funds:</strong> For all valid subscription orders placed on or before 1300 hrs IST, closing NAV of the previous business day shall be applicable.
				</small>
			</div>
		</div>
	</div>
</section>

<?php include("includes/footer.php"); ?>