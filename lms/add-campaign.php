<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>Add Campaign</title>
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
                    <a href="campaign.php" class="link">Campaigns</a>
                </li>
                <li class="breadcrumb-item active">Add Campaigns</li>
            </ol>
        </nav>
    </section>

    <section class="addCampaign">
        <div class="container-fluid">
            <h1 class="comm-heading">Add Campaign</h1>
            <div class="card comm-card">
                <div class="card-body">
                    <form class="addCampaign comm-form" id="addCampaign" method="post">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <div class="form-group select">
                                    <label for="campCategory" class="form-label">Category</label>
                                    <select name="campCategory" id="campCategory" class="form-select">
                                        <option value="">Select Category</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label for="CampTitle" class="form-label">Campaign Title</label>
                                    <input type="CampTitle" class="form-control" name="CampTitle" id="CampTitle" placeholder="Search By Campaign Code">
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label for="CampName" class="form-label">Campaign Name</label>
                                    <input type="CampName" class="form-control" name="CampName" id="CampName" placeholder="Search By Campaign Code">
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label for="CampDisplayName" class="form-label">Campaign Display Name</label>
                                    <input type="CampDisplayName" class="form-control" name="CampDisplayName" id="CampDisplayName" placeholder="Search By Campaign Code">
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group select">
                                    <label for="product" class="form-label">Product</label>
                                    <select name="product" id="product" class="form-select">
                                        <option value="">Select Product</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group select">
                                    <label for="vendor" class="form-label">Vendor</label>
                                    <select name="vendor" id="vendor" class="form-select">
                                        <option value="">Select Vendor</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group select">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select">
                                        <option value="">Select Status</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="form-group select">
                                    <label for="forceUpload" class="form-label">Force Upload</label>
                                    <select name="forceUpload" id="forceUpload" class="form-select">
                                        <option value="">Select Option</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h5 class="mb-3 mb-lg-4">Select Channel</h5>
                    <div class="default-outline-uncheck sweet-garden-green">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="aip">
                            <label class="form-check-label done-icon" for="aip">Active Income Product</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="affinity">
                            <label class="form-check-label done-icon" for="affinity">Affinity</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ab">
                            <label class="form-check-label done-icon" for="ab">Amazon Banner</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="amp">
                            <label class="form-check-label done-icon" for="amp">AMP</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="api">
                            <label class="form-check-label done-icon" for="api">API</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="app">
                            <label class="form-check-label done-icon" for="app">APP</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="altVideo" checked="">
                            <label class="form-check-label done-icon" for="altVideo">ATL Video</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="aud">
                            <label class="form-check-label done-icon" for="aud">AUD</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="banner1">
                            <label class="form-check-label done-icon" for="banner1">Banner 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="banner2">
                            <label class="form-check-label done-icon" for="banner2">Banner 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="banner3">
                            <label class="form-check-label done-icon" for="banner3">Banner 3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="soc">
                            <label class="form-check-label done-icon" for="soc">Some Other Channel</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="campaign-allocation mt-4 mt-md-5">
        <div class="container-fluid">
            <div class="card comm-card sweet-garden-green">
                <div class="card-body">
                    <table class="table table-striped comm-table-striped" id="campaignList">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Vendor</th>
                                <th>Channel</th>
                                <th>Force Upload</th>
                                <th>Location</th>
                                <th>Allocation Type</th>
                                <th>Agent Allocation</th>
                                <th>Dialler Group</th>
                                <th>
                                    <button type="button" id="addNewCampaignRow" class="btn btn-fill add-new-row py-1 px-2">
                                        <span class="material-symbols-outlined icon">add</span>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="campaignListBody">
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="row1">
                                        <label class="form-check-label" for="row1"></label>
                                    </div>
                                    <button class="table-d-block table-d-md-none btn btn-outline delete deleteRow py-1 px-2">
                                        <span class="material-symbols-outlined icon">delete</span>
                                    </button>
                                </td>
                                <td>
                                    <div class="form-group select">
                                        <label for="vendor" class="form-label">Vendor</label>
                                        <select name="vendor" id="vendor" class="form-select">
                                            <option value="">Select Vendor</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group select">
                                        <label for="channel" class="form-label">Channel</label>
                                        <select name="channel" id="channel" class="form-select">
                                            <option value="">Select Channel</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group select">
                                        <label for="force_upload" class="form-label">Force Upload</label>
                                        <select name="force_upload" id="force_upload" class="form-select">
                                            <option value="">Select Force Upload</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group select">
                                        <label for="location" class="form-label">Location</label>
                                        <select name="location" id="location" class="form-select">
                                            <option value="">Select Location</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group select">
                                        <label for="allocation_type" class="form-label">Allocation Type</label>
                                        <select name="allocation_type" id="allocation_type" class="form-select">
                                            <option value="">Select Allocation Type</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group select">
                                        <label for="agent_allocation" class="form-label">Agent Allocation</label>
                                        <select name="agent_allocation" id="agent_allocation" class="form-select">
                                            <option value="">Select Agent Allocation</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group select">
                                        <label for="diallerGroup" class="form-label">Dialler Group</label>
                                        <select name="diallerGroup" id="diallerGroup" class="form-select">
                                            <option value="">Select Dialler Group</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="table-d-none table-d-md-block">
                                    <button class="btn btn-outline delete deleteRow py-1 px-2">
                                        <span class="material-symbols-outlined icon">delete</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-center pt-4">
                <button type="submit" class="btn btn-fill">Save</button>
                <button type="submit" class="btn btn-outline">Cancle</button>
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
        $("#searchCamp").validate({
            rules:
            {
                CampName: {
                    required: true
                },
                CampCode: {
                    required: true,
                    email: true
                }
              },
              messages:
              {
                  fname:{
                    required: "Please provide campaign name"
                },
                CampCode: {
                    required: "Please provide campaign code",
                }              
            }       
        });
    </script>
</body>
</html>