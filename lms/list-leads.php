    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>List Leads</title>
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
                <li class="breadcrumb-item active">List Leads</li>
            </ol>
        </nav>
    </section>

    <section class="list-leads">
        <div class="container-fluid">
            <div class="row align-items-center mb-md-3 mb-0">
                <div class="col-md-6 col-12">
                    <h1 class="comm-heading mb-md-0">List Leads</h1>
                </div>
                <div class="col-md-6 col-12 sticky-bottom">
                    <div class="action-btn">
                        <button class="btn btn-outline-icon filter filter-leads" data-bs-toggle="modal" data-bs-target="#filterModal">Filter</button>
                        <a href="edit-list-leads.php" class="btn btn-fill-icon add">Add Lead</a>
                        <button class="btn btn-outline btn-icon delete d-none d-lg-inline">
                            <span class="material-symbols-outlined icon">delete</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card comm-card">
                <div class="card-body">
                    <table class="table table-striped comm-table-striped">
                        <thead>
                            <tr>
                                <th class="action-check-all">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        <label class="form-check-label" for="checkAll">
                                            <span class="check-title d-lg-none">Check All</span>
                                        </label>
                                    </div>
                                    <button class="btn btn-outline delete p-1 d-inline d-lg-none">
                                        <span class="material-symbols-outlined icon">delete</span>
                                    </button>
                                </th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Connect</th>
                                <th>Talk Time</th>
                                <th>Attempt</th>
                                <th>Last Called</th>
                                <th>Date Added</th>
                                <th>Last Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="leadListBody" >
                            <tr>
                                <td class="action-check-row">
                                    <div class="check-id">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="field1">
                                            <label class="form-check-label" for="field1"></label>
                                        </div>
                                        <div class="row-id d-lg-none">314</div>
                                    </div>
                                    <div class="action-btn d-lg-none">
                                        <a href="edit-list-leads.php" class="link">
                                            <span class="material-symbols-outlined">edit_document</span>
                                        </a>
                                        <a href="call-leads.php" class="link">
                                            <span class="material-symbols-outlined">call</span>
                                        </a>
                                    </div>
                                </td>
                                <td class="table-d-none table-d-lg-block">314</td>
                                <td class="user-name">Raj test</td>
                                <td class="email">rajtest@gmail.com</td>
                                <td class="tel">3012014520</td>
                                <td class="data-top w33 connect" data-title="Connect">10</td>
                                <td class="data-top w33 talk-time" data-title="Talk Time">0.00</td>
                                <td class="data-top w33 attempt" data-title="Attempt">5</td>
                                <td class="data-left last-called" data-title="Last Called:">23 Sep 2023<div class="time d-inline d-lg-block">01:53 Pm</div></td>
                                <td class="data-left date-added" data-title="Date Added:">23 Sep 2023<div class="time d-inline d-lg-block">01:53 Pm</div></td>
                                <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                <td class="table-d-none table-d-lg-block action-btn">
                                    <a href="edit-list-leads.php" class="link">
                                        <span class="material-symbols-outlined">edit_document</span>
                                    </a>
                                    <a href="call-leads.php" class="link">
                                        <span class="material-symbols-outlined">call</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="action-check-row">
                                    <div class="check-id">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="field1">
                                            <label class="form-check-label" for="field1"></label>
                                        </div>
                                        <div class="row-id d-lg-none">314</div>
                                    </div>
                                    <div class="action-btn d-lg-none">
                                        <a href="edit-list-leads.php" class="link">
                                            <span class="material-symbols-outlined">edit_document</span>
                                        </a>
                                        <a href="call-leads.php" class="link">
                                            <span class="material-symbols-outlined">call</span>
                                        </a>
                                    </div>
                                </td>
                                <td class="table-d-none table-d-lg-block">314</td>
                                <td class="user-name">Raj test</td>
                                <td class="email">rajtest@gmail.com</td>
                                <td class="tel">3012014520</td>
                                <td class="data-top w33 connect" data-title="Connect">10</td>
                                <td class="data-top w33 talk-time" data-title="Talk Time">0.00</td>
                                <td class="data-top w33 attempt" data-title="Attempt">5</td>
                                <td class="data-left last-called" data-title="Last Called:">23 Sep 2023<div class="time d-inline d-lg-block">01:53 Pm</div></td>
                                <td class="data-left date-added" data-title="Date Added:">23 Sep 2023<div class="time d-inline d-lg-block">01:53 Pm</div></td>
                                <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                <td class="table-d-none table-d-lg-block action-btn">
                                    <a href="edit-list-leads.php" class="link">
                                        <span class="material-symbols-outlined">edit_document</span>
                                    </a>
                                    <a href="call-leads.php" class="link">
                                        <span class="material-symbols-outlined">call</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="action-check-row">
                                    <div class="check-id">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="field1">
                                            <label class="form-check-label" for="field1"></label>
                                        </div>
                                        <div class="row-id d-lg-none">314</div>
                                    </div>
                                    <div class="action-btn d-lg-none">
                                        <a href="edit-list-leads.php" class="link">
                                            <span class="material-symbols-outlined">edit_document</span>
                                        </a>
                                        <a href="call-leads.php" class="link">
                                            <span class="material-symbols-outlined">call</span>
                                        </a>
                                    </div>
                                </td>
                                <td class="table-d-none table-d-lg-block">314</td>
                                <td class="user-name">Raj test</td>
                                <td class="email">rajtest@gmail.com</td>
                                <td class="tel">3012014520</td>
                                <td class="data-top w33 connect" data-title="Connect">10</td>
                                <td class="data-top w33 talk-time" data-title="Talk Time">0.00</td>
                                <td class="data-top w33 attempt" data-title="Attempt">5</td>
                                <td class="data-left last-called" data-title="Last Called:">23 Sep 2023<div class="time d-inline d-lg-block">01:53 Pm</div></td>
                                <td class="data-left date-added" data-title="Date Added:">23 Sep 2023<div class="time d-inline d-lg-block">01:53 Pm</div></td>
                                <td class="data-left status" data-title="Status:">Junk -Not a Target Audienec</td>
                                <td class="table-d-none table-d-lg-block action-btn">
                                    <a href="edit-list-leads.php" class="link">
                                        <span class="material-symbols-outlined">edit_document</span>
                                    </a>
                                    <a href="call-leads.php" class="link">
                                        <span class="material-symbols-outlined">call</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-4 align-items-center">
                <div class="col-md-6 col-6">
                    <p class="pagination-text">Showing 1 to 10 of 40</p>
                </div>
                <div class="col-md-6 col-6">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <span class="material-symbols-outlined arrow">arrow_back_ios_new</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link active" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <span class="material-symbols-outlined arrow">arrow_forward_ios</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="modal fade comm-modal right" id="filterModal" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Filter Leads</h5>
                    <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="leadsFilter" id="leadsFilter" medthod="post">
                        <div class="row">

                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="CustName" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="CustName" id="CustName" placeholder="Customer Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="CustEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="CustEmail" id="CustEmail" placeholder="Customer Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="CustPhn" class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="CustPhn" id="CustPhn" placeholder="Customer Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group select">
                                    <label for="CustCallStatus" class="form-label">Calling Status</label>
                                    <select name="CustCallStatus" id="CustCallStatus" class="form-select">
                                        <option value="">Calling Status</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group group-text group-lg-text">
                                    <label for="CustDateFrom" class="form-label">Created Date</label>
                                    <input type="date" class="form-control" name="CustDateFrom" id="CustDate">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="CustDateto" id="CustDateto">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group group-text group-lg-text">
                                    <label for="AttemptDateFrom" class="form-label">Last Attempt Date</label>
                                    <input type="date" class="form-control" name="AttemptDateFrom" id="CustDate">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="AttemptDateto" id="AttemptDateto">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group select">
                                    <label for="leadsCampaign" class="form-label">Campaign</label>
                                    <select name="leadsCampaign" id="leadsCampaign" class="form-select">
                                        <option value="">Select Campaign</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group select">
                                    <label for="leadsChannel" class="form-label">Channel</label>
                                    <select name="leadsChannel" id="leadsChannel" class="form-select">
                                        <option value="">Select Channel</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group select">
                                    <label for="leadsVendor" class="form-label">Vendor</label>
                                    <select name="leadsVendor" id="leadsVendor" class="form-select">
                                        <option value="">Select Vendor</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group select">
                                    <label for="leadsNumAttempt" class="form-label">No. of Attempt</label>
                                    <select name="leadsNumAttempt" id="leadsNumAttempt" class="form-select">
                                        <option value="">Select No. of Attempt</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group select">
                                    <label for="leadsDisposition" class="form-label">Disposition</label>
                                    <select name="leadsDisposition" id="leadsDisposition" class="form-select">
                                        <option value="">Select Disposition</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group select">
                                    <label for="leadsAgent" class="form-label">Agent</label>
                                    <select name="leadsAgent" id="leadsAgent" class="form-select">
                                        <option value="">Select Agent</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Apply" class="btn btn-fill">
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


    <script>
        $("#leadsFilter").validate({
            rules:
            {
                CustName: {
                    required: true
                },
                CustEmail: {
                    required: true,
                    email: true
                },
                CustPhn: {
                    required: true
                },
                CustDateFrom: {
                    required: true,
                    date: true,
                    dateFormat: true
                },
                CustDateto: {
                    required: true,
                    date: true,
                    dateFormat: true
                },
                AttemptDateFrom: {
                    required: true,
                    date: true,
                    dateFormat: true
                },
                AttemptDateto: {
                    required: true,
                    date: true,
                    dateFormat: true
                },
                leadsCampaign: {
                    required: true
                },
                leadsChannel: {
                    required: true
                },
                leadsVendor: {
                    required: true
                },
                leadsNumAttempt: {
                    required: true
                },
                leadsDisposition: {
                    required: true
                },
                leadsAgent: {
                    required: true
                }
            },
            messages:
            {
                CustName:{
                    required: "Please provide customer name"
                },
                CustEmail: {
                    required: "Please provide customer email",
                },              
                CustPhn: {
                    required: "Please provide customer phone",
                },             
                CustDateFrom: {
                    required: "Please provide customer start date",
                },            
                CustDateto: {
                    required: "Please provide customer end date",
                }              
                AttemptDateFrom: {
                    required: "Please provide attempt start date",
                }              
                AttemptDateto: {
                    required: "Please provide attempt end date",
                },            
                leadsCampaign: {
                    required: "Please select Campaign",
                },
                leadsChannel: {
                    required: "Please select Channel",
                },
                leadsVendor: {
                    required: "Please select Vendor",
                },
                leadsNumAttempt: {
                    required: "Please select No. of Attempt",
                },
                leadsDisposition: {
                    required: "Please select Disposition",
                },
                leadsAgent: {
                    required: "Please select Agent",
                }           
            }       
        });
    </script>
</body>
</html>