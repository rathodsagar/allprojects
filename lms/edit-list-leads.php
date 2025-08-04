<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>Edit List Leads</title>
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
                                    <a class="dropdown-item" href="campaign.php">List / View Campaign</a>
                                </li>
                                <li>
                                    <a class="dropdown-item active" href="add-campaign.php">Allocate Campaign</a>
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
                <li class="breadcrumb-item">
                    <a href="list-leads.php" class="link">List Leads</a>
                </li>
                <li class="breadcrumb-item active">Edit Leads</li>
            </ol>
        </nav>
    </section>

    <section class="edit-list-leads">
        <div class="container-fluid">
            <h1 class="comm-heading">Edit Leads</h1>
            <ul class="nav nav-tabs comm-tabs" id="myTab" role="tablist">
                <li class="nav-item flex-fill">
                    <button class="nav-link active" id="basicInfo-tab" data-bs-toggle="tab" data-bs-target="#basicInfo" type="button" role="tab">Basic</button>
                </li>
                <li class="nav-item flex-fill">
                    <button class="nav-link" id="addInfo-tab" data-bs-toggle="tab" data-bs-target="#addInfo" type="button" role="tab">Address</button>
                </li>
                <li class="nav-item flex-fill">
                    <button class="nav-link" id="trackInfo-tab" data-bs-toggle="tab" data-bs-target="#trackInfo" type="button" role="tab">Tracking</button>
                </li>
            </ul>
            <div class="tab-content comm-tab-content" id="heathDetails">
                <div id="basicInfo" class="tab-pane fade show active" role="tabpanel">
                    <form id="basicInfoForm" class="formInfo" method="post" action="">
                        <div class="card comm-card">
                            <div class="card-body">
                                <div class="card-row">
                                    <div class="row">
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="BasicFname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="BasicFname" id="BasicFname" placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="BasicLname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="BasicLname" id="BasicLname" placeholder="Enter Last Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12 emailCol">
                                            <div class="input-group">
                                                <label for="BasicEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Enter Email" name="BasicEmail" id="BasicEmail">
                                                <span class="input-group-text addEmailCol">
                                                    <span class="material-symbols-outlined">add</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12 phoneCol">
                                            <div class="input-group">
                                                <label for="BasicPhn" class="form-label">Phone No.</label>
                                                <input type="email" class="form-control" placeholder="Enter Phone No" name="BasicPhn" id="BasicPhn">
                                                <span class="input-group-text addPhoneCol">
                                                    <span class="material-symbols-outlined">add</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="BasicDate" class="form-label">Last Name</label>
                                                <input type="date" class="form-control" name="BasicDate" id="BasicDate">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group select">
                                                <label for="BasicGender" class="form-label">Gender</label>
                                                <select name="BasicGender" id="BasicGender" class="form-select">
                                                    <option value="">Select Gender</option>
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                    <option value="">Transgender</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="BasicCity" class="form-label">City</label>
                                                <input type="text" class="form-control" name="BasicCity" id="BasicCity" placeholder="Enter City">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group select">
                                                <label for="BasicSource" class="form-label">Source</label>
                                                <select name="BasicSource" id="BasicSource" class="form-select">
                                                    <option value="">Select Source</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group select">
                                                <label for="BasicProduct" class="form-label">Product Interested</label>
                                                <select name="BasicProduct" id="BasicProduct" class="form-select">
                                                    <option value="">Select Product</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group select">
                                                <label for="BasicAllocate" class="form-label">Allocate To</label>
                                                <select name="BasicAllocate" id="BasicAllocate" class="form-select">
                                                    <option value="">Select</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-4">
                                    <button type="submit" class="btn btn-fill">Save and Next</button>
                                    <button type="submit" class="btn btn-outline">Cancle</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="addInfo" class="tab-pane fade" role="tabpanel">
                    <form id="addressInfoForm" class="formInfo addressInfoForm" method="post" action="">
                        <div class="card comm-card">
                            <div class="card-body">
                                <div class="card-row">
                                    <div class="row align-items-center mb-0 mb-md-4">
                                        <div class="col-md-5 col-12 order-md-2 mb-md-0 mb-4">
                                            <div class="action-btn text-right">
                                                <button type="button" class="btn btn-fill primary">Make Primary</button>
                                                <button type="button" id="addNewAddressListLead" class="btn btn-outline p-2">
                                                    <span class="material-symbols-outlined icon">add</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-12 order-md-1 mb-md-0 mb-4">
                                            <div class="leads-filter-check">
                                                <div class="item-list title">Type</div>
                                                <div class="item-list radio-check-box-list">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="" id="shipping">
                                                        <label class="form-check-label" for="shipping">Shipping</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="" id="billing">
                                                        <label class="form-check-label" for="billing">Billing</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="AddFlatNo" class="form-label">Flat No.</label>
                                                <input type="text" class="form-control" name="AddFlatNo" id="AddFlatNo" placeholder="Enter Flat No.">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="AddBuildName" class="form-label">Building Name</label>
                                                <input type="text" class="form-control" name="AddBuildName" id="AddBuildName" placeholder="Enter Building Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="LocalOrStreet" class="form-label">Locality or Street</label>
                                                <input type="text" class="form-control" name="LocalOrStreet" id="LocalOrStreet" placeholder="Enter Locality or Street">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="AddLandmark" class="form-label">Landmark</label>
                                                <input type="text" class="form-control" name="AddLandmark" id="AddLandmark" placeholder="Enter Locality or Street">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="AddPin" class="form-label">Pin</label>
                                                <input type="text" class="form-control" name="AddPin" id="AddPin" placeholder="Enter Pin Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="AddCity" class="form-label">City</label>
                                                <input type="text" class="form-control" name="AddCity" id="AddCity" placeholder="Enter City">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="AddState" class="form-label">State</label>
                                                <input type="text" class="form-control" name="AddState" id="AddState" placeholder="Enter State">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group">
                                                <label for="AddCountry" class="form-label">Country</label>
                                                <input type="text" class="form-control" name="AddCountry" id="AddCountry" placeholder="Enter Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-4">
                            <button type="submit" class="btn btn-fill">Save and Next</button>
                            <button type="submit" class="btn btn-outline">Cancle</button>
                        </div>
                    </form>
                </div>
                <div id="trackInfo" class="tab-pane fade" role="tabpanel">
                    <form id="trackInfoForm" class="formInfo" method="post" action="">
                        <div class="card comm-card">
                            <div class="card-body">
                                <div class="card-row">
                                    <div class="row">
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group select">
                                                <label for="TrackCamp" class="form-label">Campaign</label>
                                                <select name="TrackCamp" id="TrackCamp" class="form-select">
                                                    <option value="">Select Campaign</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group select">
                                                <label for="TrackVendor" class="form-label">Vendor</label>
                                                <select name="TrackVendor" id="TrackVendor" class="form-select">
                                                    <option value="">Select Vendor</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="form-group select">
                                                <label for="TrackChannel" class="form-label">Channel</label>
                                                <select name="TrackChannel" id="TrackChannel" class="form-select">
                                                    <option value="">Select Channel</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-4">
                                    <button type="submit" class="btn btn-fill">Save and Next</button>
                                    <button type="submit" class="btn btn-outline">Cancle</button>
                                </div>
                            </div>
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
                leadsPhn: {
                    required: true
                }
            },
            messages:
            {
                leadsPhn:{
                    required: "Please provide phone number"
                }          
            }       
        });
    </script>
</body>
</html>