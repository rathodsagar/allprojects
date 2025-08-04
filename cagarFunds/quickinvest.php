<?php include("includes/header-2.php"); ?>

<section class="section-container">
	<div class="row">
		<?php include("includes/sidebar_according.php"); ?>
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div class="quickinvest-container">
				<h1 class="heading text-red text-center">We provide you the convenience to invest in no time! Just 3 clicks and you are done!!</h1>
				<div class="quickinvest-form">
					<form>
						<ul class="list-inline">
							<li>
								<div class="main-invest-cont text-center">
									<div class="image-cont">  
										<img src="https://www.cagrfunds.com/assets/frontend/images/quick-invest1.jpg" class="responsive"> 
									</div>
									<div class="item-box">
										<div class="header text-red fw7"><span>Recent Transactions</span></div>
										<div class="description">You can view the last 5 transactions done on our platform</div>
										<div class="control-group">
											<label class="control control--radio">
											<input type="radio" onclick="searchAction();" name="radio" value="rt">
											<div class="control__indicator"></div>
											</label>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="main-invest-cont text-center">
									<div class="image-cont"> <img src="https://www.cagrfunds.com/assets/frontend/images/quick-invest2.jpg" class="responsive"> </div>
									<div class="item-box">
										<div class="header"><span>Suggested Portfolio</span></div>
										<p class="description">Cagrfunds suggested portfolio<br>
											<br>
										</p>
										<div class="control-group">
											<label class="control control-radio">
											<input type="radio" onclick="searchAction();" name="radio" value="sp">
											<div class="control__indicator"></div>
											</label>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("includes/footer.php"); ?>