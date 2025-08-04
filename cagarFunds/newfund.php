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
								<td><strong>Fund Type:</strong></td>
								<td colspan="2">
									<select class="form-control">
										<option value="">Select Fund Type</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><strong>Fund Option:</strong></td>
								<td colspan="2">
									<select class="form-control">
										<option value="">Select Fund Option</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
									</select>
								</td>
							</tr>
						</tbody>
						<tfoot class="tfoot">
							<tr>
								<td>
									<select class="form-control">
										<option value="Payout" selected="selected">Payout</option>
										<option value="Reinvestment">Reinvestment</option>
									</select>
								</td>
								<td>
									<button type="submit" class="btn btn-1 btn-sm">Search</button>
								</td>
								<td align="right">
									<label class="control-label" for="srt">Sort:</label>
									<select class="form-control">
										<option value="fundasc" selected="selected">Fund Name (A-Z)</option>
										<option value="funddesc">Fund Name (Z-A)</option>
										<option value="navasc">Nav (Low-High)</option>
										<option value="navdesc">Nav (High-Low)</option>
									</select>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</form>
			<div class="">
				<p>
					<a href="https://www.cagrfunds.com/upload/factsheet/factsheet-s.pdf" class=" pull-right" target="_blank">+FactSheet</a>
				</p>
			</div>
			<div class="rounded-table">
				<table id="rounded-table" class="table table-bordered table-striped table-condensed">
					<thead class="thead">
						<tr>
							<th>Fund Name</th>
							<th class="text-center">NAV (INR)</th>
							<th class="text-center">Investment mode</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
						<tr>
							<td>Sundaram Banking &amp; Psu Debt Fund  Monthly D</td>
							<td class="text-center">11.14</td>
							<td class="text-center"><a href="https://www.cagrfunds.com/invest/buy?fid=97&amp;fo=Payout&amp;cn=invest">Lumpsum</a></td>
							<td class="text-center">
								<a href="https://www.cagrfunds.com/invest/sipbuy?fid=97&amp;fo=Payout&amp;cn=invest">SIP</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<?php include("includes/footer.php"); ?>