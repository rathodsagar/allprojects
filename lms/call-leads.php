<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>Call Leads</title>
</head>
<body>
    <section class="main-menu sticky-top">
        <div class="container-fluid">
            <nav class="navbar">
                <div class="navbar-left d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <picture>
                            <img src="assets/images/logo.png" title="" alt="">
                        </picture>
                    </a>
                </div>
                <ul class="navbar-right d-flex align-items-center">
                    <li class="nav-item search-box">
                        <div class="form-group search-bar">
                            <input type="text" name="search" id="search" class="form-control" >
                        </div>
                        <a href="javascript:void(0)" class="nav-link search-icon">
                            <span class="material-symbols-outlined">search</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#notificationModal">
                            <span class="material-symbols-outlined">notifications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">
                            <span class="material-symbols-outlined">person</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#chatModal">
                            <span class="material-symbols-outlined">chat</span>
                        </a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <button class="btn navbar-close navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                    <div class="logo mb-3">
                        <a href="" class="link p-0">
                            <picture>
                                <img src="assets/images/fill-logo.png" alt="" title="" class="inner-logo">
                            </picture>
                        </a>
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link dashboard-icon" aria-current="page" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a hre="#" class="nav-link configuration-icon dropdown-toggle" id="ConfigurationDropdown" role="button" data-bs-toggle="dropdown">Configuration</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="role-permission.php">Permission</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">List View Company</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">List / View IPS</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Custom Fields</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Custom Forms</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="campaign.php" class="nav-link campaigns-icon dropdown-toggle" id="CampaignsDropdown" role="button" data-bs-toggle="dropdown">Campaigns</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="campaign.php">List / View Campaign</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="add-campaign.php">Allocate Campaign</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Listing Of All Api</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="role-permission.php" class="nav-link approvals-icon dropdown-toggle" id="ApprovalsDropdown" role="button" data-bs-toggle="dropdown">Approvals</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="#">Campaign Approvals</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Vendors Approvals</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="list-leads.php" class="nav-link leads-icon dropdown-toggle active" id="LeadsDropdown" role="button" data-bs-toggle="dropdown" >Leads</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item active" href="list-leads.php">List / View Lead</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Import Leads</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="edit-list-leads.php">Allocate Leads</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Registered Leads</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Backlog Leads</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Escalate Lead Info</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Accept/reject Escalate Info</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Escalate History</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Churn Module</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link other-icon leads-icon dropdown-toggle" id="LeadsDropdown" role="button" data-bs-toggle="dropdown" >Other</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="#">List / View Sms Content</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">List / View Did</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">List / View Email Content</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Users</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Partner Users</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Target Tracker</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Roles</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Groups</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Vendors</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Channels</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link reports-icon" href="#">Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link support-icon" href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <section class="page-breadcrumb">
        <nav class="container-fluid" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item home-icon">
                    <a href="dashboard.php" class="link">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="list-leads.php" class="link">List Leads</a>
                </li>
                <li class="breadcrumb-item active">Call Leads</li>
            </ol>
        </nav>
    </section>

    <section class="call-details mb-4">
        <div class="container-fluid">
            <div class="dispose-call mb-2 d-lg-none">
                <button type="button" class="btn btn-fill sweet-garden-green" data-bs-toggle="modal" data-bs-target="#disposeCallModal"><span class="material-symbols-outlined icon">call</span> Dispose The Call</button>
            </div>
            <div class="contact-btn mb-3">
                <button type="button" class="btn btn-outline" >
                    <span class="material-symbols-outlined icon">mail</span>
                </button>
                <button type="button" class="btn btn-outline" >
                    <span class="material-symbols-outlined icon">sms</span>
                </button>
                <button type="button" class="btn btn-outline" >
                    <span class="material-symbols-outlined icon">input_circle</span>
                </button>
                <button type="button" class="btn btn-outline" >
                    <span class="material-symbols-outlined icon">news</span>
                </button>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12 d-md-flex flex-md-column">
                    <ul class="nav nav-tabs comm-tabs" id="callDetailsTab" role="tablist">
                        <li class="nav-item flex-fill">
                            <button class="nav-link active" id="personalInfo-tab" data-bs-toggle="tab" data-bs-target="#personalInfo" type="button" role="tab">Personal Information</button>
                        </li>
                        <li class="nav-item flex-fill">
                            <button class="nav-link" id="activityInfo-tab" data-bs-toggle="tab" data-bs-target="#activityInfo" type="button" role="tab">Latest Activity Details</button>
                        </li>
                    </ul>
                    <div class="card comm-card comm-tab-content h-md-100">
                        <div class="card-body">
                            <div class="tab-content" id="callDetails">
                                <div id="personalInfo" class="personalInfo tab-pane fade show active" role="tabpanel">
                                    <div class="row mb-3 mb-lg-4">
                                        <div class="col-6">
                                            <h1 class="name mb-0">Test Lead Name</h1>
                                        </div>
                                        <div class="col-6">
                                            <h2 class="dob mb-0">01 Jan 1970</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="contact-info">
                                                <div class="icon-text">
                                                    <span class="material-symbols-outlined icon">call</span><span class="title d-none d-md-inline">Phone</span>
                                                </div>
                                                <div class="number">
                                                    <a href="tel:9663591056" class="link">9663591056</a>
                                                </div>
                                            </div>
                                            <div class="action-btn my-3 my-lg-4">
                                                <a href="#" class="btn btn-outline">Alternate Number</a>
                                                <a href="#" class="btn btn-fill d-inline-flex">
                                                    <span class="material-symbols-outlined">add</span>
                                                    <span class="btn-text d-none d-xl-inline">Add New</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="contact-info">
                                                <div class="icon-text">
                                                    <span class="material-symbols-outlined icon">mail</span><span class="title d-none d-md-inline">Email</span>
                                                </div>
                                                <div class="number">
                                                    <a href="mailto:SomeEmail@testmail.com" class="link">SomeEmail@testmail.com</a>
                                                </div>
                                            </div>
                                            <div class="action-btn my-3 my-lg-4">
                                                <a href="#" class="btn btn-outline">Alternate Email</a>
                                                <a href="#" class="btn btn-fill d-inline-flex">
                                                    <span class="material-symbols-outlined">add</span>
                                                    <span class="btn-text d-none d-xl-inline">Add New Email</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center call-info">
                                        <div class="col-md-6 col-12 oreder-md-2">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="talk-attempt-info">
                                                        <div class="title">Dialer Attempt</div>
                                                        <div class="time-duration">5</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12 order-md-1">
                                                    <div class="talk-attempt-info">
                                                        <div class="title">Talk Time</div>
                                                        <div class="time-duration">0.00 Sec</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 oreder-md-2">
                                            <div class="action-btn mt-3 mt-md-0">
                                                <a href="#" class="btn btn-fill">
                                                    <span class="material-symbols-outlined">edit_document</span>
                                                </a>
                                                <a href="#" class="btn btn-outline">
                                                    <span class="material-symbols-outlined">call_merge</span>
                                                </a>
                                                <a href="#" class="btn btn-outline">
                                                    <span class="material-symbols-outlined">bookmark</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="activityInfo" class="activityInfo tab-pane fade" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-12 mb-3 mb-lg-4">
                                            <div class="title">Product Name</div>
                                            <div class="sub-title">Some Product Name</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12 mb-3 mb-lg-4">
                                            <div class="title">Current Stage</div>
                                            <div class="sub-title">Some Stage</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12 mb-3 mb-lg-4">
                                            <div class="title">Current Campaign</div>
                                            <div class="sub-title">Test Campaign Name</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12 mb-3 mb-lg-4">
                                            <div class="title">Current Channel</div>
                                            <div class="sub-title">Test Channel Name</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12 mb-3 mb-lg-4">
                                            <div class="title">Current Vendor</div>
                                            <div class="sub-title">Test Vendor Name</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12 mb-3 mb-lg-4">
                                            <div class="title">Last Visited</div>
                                            <div class="sub-title">Some Visited Data</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-none d-lg-block">
                    <div class="card comm-card sweet-garden-green dispose-call-card">
                        <div class="card-header text-center d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined icon">call</span> Dispose The Call
                        </div>
                        <div class="card-body">
                        <form class="leadsFilter" id="leadsFilter" medthod="post">
                            <div class="form-group">
                                <label for="level_one_Phn" class="form-label">Level 1</label>
                                <input type="text" class="form-control" name="level_one_Phn" id="level_one_Phn" placeholder="Search By Phone No.">
                            </div>
                            <div class="form-group">
                                <label for="level_one_Phn" class="form-label">Level 2</label>
                                <input type="text" class="form-control" name="level_one_Phn" id="level_one_Phn" placeholder="Search By Phone No.">
                            </div>
                            <div class="form-group">
                                <label for="level_one_Phn" class="form-label">Level 2</label>
                                <textarea name="level_two_description" class="form-control" id="" placeholder="Enter Comment Here" rows="3"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="form-check form-check-inline px-0">
                                        <input class="form-check-input" type="checkbox" value="interested" id="interested">
                                        <label class="form-check-label" for="interested">Interested</label>
                                    </div>
                                    <div class="form-check form-check-inline px-0">
                                        <input class="form-check-input" type="checkbox" value="Clear About His Need" id="hisNeed">
                                        <label class="form-check-label" for="hisNeed">Clear About His Need</label>
                                    </div>
                                    <div class="form-check form-check-inline px-0">
                                        <input class="form-check-input" type="checkbox" value="Qualified Lead" id="qualifiedLead">
                                        <label class="form-check-label" for="qualifiedLead">Qualified Lead</label>
                                    </div>
                                    <div class="form-check form-check-inline px-0">
                                        <input class="form-check-input" type="checkbox" value="Decision Maker" id="decisionMaker">
                                        <label class="form-check-label" for="decisionMaker">Decision Maker</label>
                                    </div>
                                    <div class="form-check form-check-inline px-0">
                                        <input class="form-check-input" type="checkbox" value="SMS" id="sms">
                                        <label class="form-check-label" for="sms">SMS</label>
                                    </div>
                                    <div class="form-check form-check-inline px-0">
                                        <input class="form-check-input" type="checkbox" value="Email" id="email">
                                        <label class="form-check-label" for="email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Save Dispose" class="btn btn-fill">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-record">
        <div class="container-fluid">
            <ul class="nav nav-tabs comm-tabs" id="callRecordTab" role="tablist">
                <li class="nav-item flex-fill">
                    <button class="nav-link active" id="quote-tab" data-bs-toggle="tab" data-bs-target="#quote" type="button" role="tab">Quote</button>
                </li>
                <li class="nav-item flex-fill">
                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab">Orders</button>
                </li>
                <li class="nav-item flex-fill">
                    <button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes" type="button" role="tab">Notes</button>
                </li>
                <li class="nav-item flex-fill">
                    <button class="nav-link" id="communication-tab" data-bs-toggle="tab" data-bs-target="#communication" type="button" role="tab">Communication Details</button>
                </li>
            </ul>
            <div class="card comm-card">
                <div class="card-body">
                    <div class="tab-content comm-tab-content" id="callRecord">
                        <div id="quote" class="tab-pane fade show active" role="tabpanel">
                            <table class="table table-striped comm-table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Talk Time</th>
                                        <th>Call Back</th>
                                        <th>Recording Path</th>
                                        <th>Called By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="orders" class="tab-pane fade" role="tabpanel">
                            <table class="table table-striped comm-table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Talk Time</th>
                                        <th>Call Back</th>
                                        <th>Recording Path</th>
                                        <th>Called By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="notes" class="tab-pane fade" role="tabpanel">
                            <table class="table table-striped comm-table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Talk Time</th>
                                        <th>Call Back</th>
                                        <th>Recording Path</th>
                                        <th>Called By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="communication" class="tab-pane fade" role="tabpanel">
                            <table class="table table-striped comm-table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Talk Time</th>
                                        <th>Call Back</th>
                                        <th>Recording Path</th>
                                        <th>Called By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                    <tr>
                                        <td class="date">18 Sep 2021 14:24:46</td>
                                        <td class="called-by table-d-lg-none">Purna Chawla</td>
                                        <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                        <td class="data-top w50 talk-time table-d-none table-d-lg-block" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-none table-d-lg-block" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="data-top w50 record-path" data-title="Recording Path">3012014520</td>
                                        <td class="data-top w50 talk-time table-d-block table-d-lg-none" data-title="Talk Time">0.00</td>
                                        <td class="data-left call-back table-d-lg-none" data-title="Call Back:">23 Sep 2023 at 1:53PM</td>
                                        <td class="called-by table-d-none table-d-lg-block">Purna Chawla</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="modal fade comm-modal right" id="disposeCallModal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Lead</h5>
                    <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="leadsFilter" id="leadsFilter" medthod="post">
                        <div class="form-group">
                            <label for="level_one_Phn" class="form-label">Level 1</label>
                            <input type="text" class="form-control" name="level_one_Phn" id="level_one_Phn" placeholder="Search By Phone No.">
                        </div>
                        <div class="form-group">
                            <label for="level_one_Phn" class="form-label">Level 2</label>
                            <input type="text" class="form-control" name="level_one_Phn" id="level_one_Phn" placeholder="Search By Phone No.">
                        </div>
                        <div class="form-group">
                            <label for="level_one_Phn" class="form-label">Level 2</label>
                            <textarea name="level_two_description" class="form-control" id="" placeholder="Enter Comment Here" rows="5"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-12 form-group">
                                <div class="form-check px-0">
                                    <input class="form-check-input" type="checkbox" value="interested" id="interested">
                                    <label class="form-check-label" for="interested">Interested</label>
                                </div>
                            </div>
                            <div class="col-md-7 col-12 form-group">
                                <div class="form-check px-0">
                                    <input class="form-check-input" type="checkbox" value="Clear About His Need" id="hisNeed">
                                    <label class="form-check-label" for="hisNeed">Clear About His Need</label>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 form-group">
                                <div class="form-check px-0">
                                    <input class="form-check-input" type="checkbox" value="Qualified Lead" id="qualifiedLead">
                                    <label class="form-check-label" for="qualifiedLead">Qualified Lead</label>
                                </div>
                            </div>
                            <div class="col-md-7 col-12 form-group">
                                <div class="form-check px-0">
                                    <input class="form-check-input" type="checkbox" value="Decision Maker" id="decisionMaker">
                                    <label class="form-check-label" for="decisionMaker">Decision Maker</label>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 form-group">
                                <div class="form-check px-0">
                                    <input class="form-check-input" type="checkbox" value="SMS" id="sms">
                                    <label class="form-check-label" for="sms">SMS</label>
                                </div>
                            </div>
                            <div class="col-md-7 col-12 form-group">
                                <div class="form-check px-0">
                                    <input class="form-check-input" type="checkbox" value="Email" id="email">
                                    <label class="form-check-label" for="email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Save Dispose" class="btn btn-fill">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="modal fade comm-modal right" id="notificationModal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Notification</h5>
                    <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut sunt, expedita soluta sapiente accusamus ex adipisci beatae animi ab.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut sunt, expedita soluta sapiente accusamus ex adipisci beatae animi ab.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut sunt, expedita soluta sapiente accusamus ex adipisci beatae animi ab.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="modal fade comm-modal right" id="chatModal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chat</h5>
                    <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos excepturi quam, voluptates minima sit nemo ex facere molestiae impedit ratione cupiditate totam pariatur asperiores aspernatur numquam esse voluptatibus dolore dolor!</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>
</html>