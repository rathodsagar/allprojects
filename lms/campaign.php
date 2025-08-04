
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>Campaign</title>
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
                            <a href="campaign.php" class="nav-link campaigns-icon dropdown-toggle active" id="CampaignsDropdown" role="button" data-bs-toggle="dropdown">Campaigns</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item active" href="campaign.php">List / View Campaign</a>
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
        <nav class="container-fluid" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item home-icon">
                    <a href="dashboard.php" class="link">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Campaigns</li>
            </ol>
        </nav>
    </section>

    <section class="campaign">
        <div class="container-fluid">
            <div class="row align-items-center mb-md-3 mb-0">
                <div class="col-md-6 col-12">
                    <h1 class="comm-heading mb-md-0">Campaigns</h1>
                </div>
                <div class="col-md-6 col-12 sticky-bottom">
                    <div class="action-btn">
                        <button class="btn btn-fill-icon sweet-garden-green search search-campaign" data-bs-toggle="modal" data-bs-target="#searchModal">Search</button>
                        <a href="add-campaign.php" class="btn btn-outline-icon sweet-garden-green add">Add Campaign</a>
                    </div>
                </div>
            </div>
            <div class="card comm-card sweet-garden-green">
                <div class="card-body">
                    <table class="table table-striped comm-table-striped">
                        <thead class="table-d-none table-d-lg-block">
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Category </th>
                                <th>Leads Collected</th>
                                <th>Valid Leads</th>
                                <th>Repeat Leads</th>
                                <th>Vendor</th>
                                <th>Channel</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-approve d-lg-none">Approved</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-approve">Approved</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-reject d-lg-none">Reject</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-reject">Reject</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-pending d-lg-none">Pending</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-pending">Pending</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-approve d-lg-none">Approved</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-approve">Approved</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-approve d-lg-none">Approved</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-approve">Approved</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-approve d-lg-none">Approved</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-approve">Approved</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-approve d-lg-none">Approved</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-approve">Approved</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-approve d-lg-none">Approved</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-approve">Approved</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="">
                                    <div class="code">CMP0000004</div>
                                    <button type="button" class="btn btn-approve d-lg-none">Approved</button>
                                </td>
                                <td class="data-left name" data-title="Name:">Social</td>
                                <td class="data-left category" data-title="Category:">App</td>
                                <td class="data-top w33" data-title="Leads Collected">108</td>
                                <td class="data-top w33" data-title="Valid Leads">108</td>
                                <td class="data-top w33" data-title="Repeat Leads">108</td>
                                <td class="data-left vendor" data-title="Vendor:">Test</td>
                                <td class="data-left channel" data-title="Channel:">Test</td>
                                <td data-title="" class="table-d-none table-d-lg-block">
                                    <button type="button" class="btn btn-approve">Approved</button>
                                </td>
                                <td class="action-btn sweet-garden-green">
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">content_copy</span>
                                    </a>
                                    <a href="#" class="link">
                                        <span class="material-symbols-outlined">visibility</span>
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

    <div class="modal fade comm-modal right" id="searchModal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Campaign</h5>
                    <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="searchCamp" id="searchCamp" medthod="post">
                        <div class="form-group">
                            <label for="CampName" class="form-label">Campaign Name</label>
                            <input type="text" class="form-control" name="CampName" id="CampName" placeholder="Search By Campaign Name">
                        </div>
                        <div class="form-group">
                            <label for="CampCode" class="form-label">Campaign Code</label>
                            <input type="text" class="form-control" name="CampCode" id="CampCode" placeholder="Search By Campaign Code">
                        </div>
                        <div class="form-group select">
                            <label for="campCategory" class="form-label">Category</label>
                            <select name="campCategory" id="campCategory" class="form-select">
                                <option value="">Select Category</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="form-group select">
                            <label for="campVendor" class="form-label">Vendor</label>
                            <select name="campVendor" id="campVendor" class="form-select">
                                <option value="">Select Vendor</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="form-group select">
                            <label for="campChannel" class="form-label">Channel</label>
                            <select name="campChannel" id="campChannel" class="form-select">
                                <option value="">Select Channel</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="form-group select">
                            <label for="campStatus" class="form-label">Status</label>
                            <select name="campStatus" id="campStatus" class="form-select">
                                <option value="">Select Status</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Apply" class="btn btn-fill">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
        $("#searchCamp").validate({
            rules:
            {
                CampName: {
                    required: true
                },
                CampCode: {
                    required: true,
                    email: true
                },
                campCategory: {
                    require: true
                },
                campVendor: {
                    require: true
                },
                campVendor: {
                    require: true
                },
                campStatus: {
                    require: true
                },
            },
            messages:
              {
                CampName:{
                    required: "Please provide campaign name"
                },
                CampCode: {
                    required: "Please provide campaign code"
                },
                campCategory: {
                    required: "Please select campaign category"
                },
                campVendor: {
                    required: "Please select campaign vendor"
                },
                campChannel: {
                    required: "Please select campaign channel"
                },                           
                campStatus: {
                    required: "Please select campaign status"
                },                           
            }       
        });
    </script>
</body>
</html>