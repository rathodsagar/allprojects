    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>List SMS Templates</title>
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
                <li class="breadcrumb-item active">List SMS Templates</li>
            </ol>
        </nav>
    </section>

    <section class="comm-check-table">
        <div class="container-fluid">
            <div class="row align-items-center mb-md-3 mb-0">
                <div class="col-md-6 col-12">
                    <h1 class="comm-heading mb-md-0">List SMS Templates</h1>
                </div>
                <div class="col-md-6 col-12 sticky-bottom">
                    <div class="action-btn">
                        <button class="btn btn-outline-icon filter filter-leads" data-bs-toggle="modal" data-bs-target="#filterSmsTemplates">Filter</button>
                        <a href="add-list-sms-templates.php" class="btn btn-fill-icon add">Add SMS Template</a>
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
                                <th>Name</th>
                                <th>Content</th>
                                <th>Created Date</th>
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
                                    </div>
                                    <div class="action-btn d-lg-none">
                                        <a href="edit-list-sms-templates.php" class="link">
                                            <span class="material-symbols-outlined">edit_document</span>
                                        </a>
                                        <a href="call-leads.php" class="link delete">
                                            <span class="material-symbols-outlined">delete</span>
                                        </a>
                                    </div>
                                </td>
                                <td class="name" data-title="Name:">Welcome SMS</td>
                                <td class="content" data-title="Content:">Thanks for contacting Edelweiss Tokio Life Insurance. We will get in touch with you soon.</td>
                                <td class="created-date" data-title="Created Date:">23-Sep-2015</td>
                                <td class="table-d-none table-d-lg-block action-btn">
                                    <a href="edit-list-sms-templates.php" class="link">
                                        <span class="material-symbols-outlined">edit_document</span>
                                    </a>
                                    <a href="call-leads.php" class="link delete">
                                        <span class="material-symbols-outlined">delete</span>
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
                                    </div>
                                    <div class="action-btn d-lg-none">
                                        <a href="edit-list-sms-templates.php" class="link">
                                            <span class="material-symbols-outlined">edit_document</span>
                                        </a>
                                        <a href="call-leads.php" class="link delete">
                                            <span class="material-symbols-outlined">delete</span>
                                        </a>
                                    </div>
                                </td>
                                <td class="name" data-title="Name:">Welcome SMS</td>
                                <td class="content" data-title="Content:">Thanks for contacting Edelweiss Tokio Life Insurance. We will get in touch with you soon.</td>
                                <td class="created-date" data-title="Created Date:">23-Sep-2015</td>
                                <td class="table-d-none table-d-lg-block action-btn">
                                    <a href="edit-list-sms-templates.php" class="link">
                                        <span class="material-symbols-outlined">edit_document</span>
                                    </a>
                                    <a href="call-leads.php" class="link delete">
                                        <span class="material-symbols-outlined">delete</span>
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
                                    </div>
                                    <div class="action-btn d-lg-none">
                                        <a href="edit-list-sms-templates.php" class="link">
                                            <span class="material-symbols-outlined">edit_document</span>
                                        </a>
                                        <a href="call-leads.php" class="link delete">
                                            <span class="material-symbols-outlined">delete</span>
                                        </a>
                                    </div>
                                </td>
                                <td class="name" data-title="Name:">Welcome SMS</td>
                                <td class="content" data-title="Content:">Thanks for contacting Edelweiss Tokio Life Insurance. We will get in touch with you soon.</td>
                                <td class="created-date" data-title="Created Date:">23-Sep-2015</td>
                                <td class="table-d-none table-d-lg-block action-btn">
                                    <a href="edit-list-sms-templates.php" class="link">
                                        <span class="material-symbols-outlined">edit_document</span>
                                    </a>
                                    <a href="call-leads.php" class="link delete">
                                        <span class="material-symbols-outlined">delete</span>
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

    <section class="modal fade comm-modal right" id="filterSmsTemplates" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Filter SMS Template Name</h5>
                    <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="" id="" medthod="post">
                        <div class="form-group">
                            <label for="searchSmsName" class="form-label">SMS Template Name</label>
                            <input type="text" class="form-control" name="searchSmsName" id="searchSmsName" placeholder="Search By SMS Template Name">
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

</body>
</html>