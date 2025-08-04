<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>Dashboard Call Status</title>
</head>
<body>
    <section class="main-menu sticky-top">
        <div class="container">
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
                            <a class="nav-link dashboard-icon active" aria-current="page" href="dashboard.php">Dashboard</a>
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
                            <a href="list-leads.php" class="nav-link leads-icon dropdown-toggle" id="LeadsDropdown" role="button" data-bs-toggle="dropdown" >Leads</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="list-leads.php">List / View Lead</a>
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
        <nav class="container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item home-icon">
                    <a href="dashboard.php" class="link">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Call Status</li>
            </ol>
        </nav>
    </section>

    <section class="call-days-status-wrapper mb-4 mb-md-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-md-0 mb-4">
                    <h1 class="comm-heading">Call Status</h1>
                    <div class="row vartical-scrollable-card">
                        <div class="col-md-6 col-12 mb-3 mb-lg-4">
                            <div class="card comm-card aloe-vera-green">
                                <div class="card-header">
                                    <h2 class="title">Mrinal Chakraborty Mrinal Chakraborty</h2>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <p class="title">Month Total: 60</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-3 mb-lg-4">
                            <div class="card comm-card aloe-vera-green">
                                <div class="card-header">
                                    <h2 class="title">Mrinal Chakraborty</h2>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <p class="title">Month Total: 60</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-3 mb-lg-4">
                            <div class="card comm-card aloe-vera-green">
                                <div class="card-header">
                                    <h2 class="title">Mrinal Chakraborty</h2>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <p class="title">Month Total: 60</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-3 mb-lg-4">
                            <div class="card comm-card aloe-vera-green">
                                <div class="card-header">
                                    <h2 class="title">Mrinal Chakraborty</h2>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <p class="title">Month Total: 60</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-3 mb-lg-4">
                            <div class="card comm-card aloe-vera-green">
                                <div class="card-header">
                                    <h2 class="title">Mrinal Chakraborty</h2>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <p class="title">Month Total: 60</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-3 mb-lg-4">
                            <div class="card comm-card aloe-vera-green">
                                <div class="card-header">
                                    <h2 class="title">Mrinal Chakraborty</h2>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                        <li class="list-group-item">W1-15</li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <p class="title">Month Total: 60</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <h2 class="comm-heading">Past 7 Days Status</h2>
                    <div class="accordion comm-accordion alovera-green-accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Top on login in last 7 days</button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                    <span class="badge rounded-pill">Jay Chauhan</span>
                                    <span class="badge rounded-pill">Sagar Rathod</span>
                                    <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Top 2 talk time</button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                    <span class="badge rounded-pill">Jay Chauhan</span>
                                    <span class="badge rounded-pill">Sagar Rathod</span>
                                    <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Zero login in last 7 days</button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                    <span class="badge rounded-pill">Jay Chauhan</span>
                                    <span class="badge rounded-pill">Sagar Rathod</span>
                                    <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Bottom 2 calls made</button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                    <span class="badge rounded-pill">Jay Chauhan</span>
                                    <span class="badge rounded-pill">Sagar Rathod</span>
                                    <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">Bottom 2 talk time</button>
                            </h2>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                    <span class="badge rounded-pill">Jay Chauhan</span>
                                    <span class="badge rounded-pill">Sagar Rathod</span>
                                    <span class="badge rounded-pill">Mrinal Chakraborty</span>
                                    <span class="badge rounded-pill">Priti Darji</span>
                                </div>
                            </div>
                        </div>
                    </div>
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