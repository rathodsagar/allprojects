<?php include("includes/header.php"); ?>

<section class="section-container">
	<div class="breadcrumb-list">
		<ol class="breadcrumb">
			<li><a href="services.php">Calculators</a></li>
			<li class="active">Risk Profile Calculator</li>  
		</ol>
	</div>
	<div class="QuestAns-container desc-content text-black">
		<div class="bar">
			<ul class="list-inline">
				<li class="progress-circle active">1</li>
				<li class="progress-circle"></li>
				<li class="progress-circle"></li>
				<li class="progress-circle"></li>
				<li class="progress-circle"></li>
				<li class="progress-circle"></li>
				<li class="progress-circle"></li>
			</ul>
			<!-- <ol class="wizard-progress clearfix">
			    <li class="active-step">
			      <span class="step-num">1</span>
			    </li>
			    <li>
			        <span class="step-num">2</span>
			    </li>
			    <li>
			        <span class="step-num">3</span>
			    </li>
			    <li>
			        <span class="step-num">4</span>
			    </li>
			</ol> -->
			<!-- <ol class="progtrckr" data-progtrckr-steps="5">
			    <li class="progtrckr-done">Order Processing</li>
			    <li class="progtrckr-done">Pre-Production</li>
			    <li class="progtrckr-done">In Production</li>
			    <li class="progtrckr-done">Shipped</li>
			    <li class="progtrckr-todo">Delivered</li>
			</ol> -->
		</div>
		<form>
			<div class="QuestAns">
				<div class="title">How do you feel about your salary?</div>
				<div class="anwser-opt">
					<div class="radio">
						<label><input type="radio" name="optradio">I can barely cover my expenses</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio">I am just able to cover my necessary expenses</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio">I am just able to cover all my expenses (necessary + discretionary)</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio">I am able to save but not more than 25% of my salary</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio">I am able to save above 25% of my salary</label>
					</div>
				</div>
			</div>
			<div class="">
				<a href="" class="btn btn-2 text-uppercase">Next</a>
			</div>
		</form>
		<!-- <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tips">
					<div class="main-header">Our Risk Profile has identified you as Conservative</div>
					<div class="header fw7">Tip</div>
					<div class="description">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="risk_meter">
					<img src="images/risk_meter.jpg" alt="Risk Profile Meter" title="Risk Profile Meter" class="img-responsive">
				</div>
			</div>
		</div>
		<div class="btn_pt-40">
			<a href="" class="btn btn-2 btn-sm text-uppercase">Caculate again</a>
		</div> -->
	</div>
</section>


<?php include("includes/footer.php"); ?>