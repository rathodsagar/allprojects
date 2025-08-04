    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <title>Dashboard</title>
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
                <li class="breadcrumb-item home-icon active">Dashboard</li>
            </ol>
        </nav>
    </section>

    <section class="all-leads-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-lg-4">
                    <div class="card comm-card">
                        <div class="card-body total-leads">
                            <div class="leads-details">
                                <div class="sub-title">Paid</div>
                                <div class="title">3545</div>
                            </div>
                            <div class="leads-details">
                                <div class="sub-title">Non Paid</div>
                                <div class="title">598767</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-lg-4">
                    <div class="card comm-card wild-blue">
                        <div class="card-body total-leads">
                            <div class="leads-details">
                                <div class="material-symbols-outlined">event</div>
                                <div class="big-title">300</div>
                            </div>
                            <div class="leads-details">
                                <div class="sub-title">Lead Today</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-lg-4">
                    <div class="card comm-card aloe-vera-green">
                        <div class="card-body total-leads">
                            <div class="leads-details">
                                <div class="material-symbols-outlined">calendar_month</div>
                                <div class="big-title">2000</div>
                            </div>
                            <div class="leads-details">
                                <div class="sub-title">Lead This Month</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-lg-4">
                    <div class="card comm-card sweet-garden-green">
                        <div class="card-body total-leads">
                            <div class="leads-details">
                                <div class="material-symbols-outlined">stack_star</div>
                                <div class="big-title">1600</div>
                            </div>
                            <div class="leads-details">
                                <div class="sub-title">Unique Leads</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="performance">
        <div class="container">
            <h1 class="comm-heading">Overall Performance</h1>
            <div class="card comm-card mb-3 mb-lg-4">
                <div class="card-body">
                    <div class="row text-center align-items-lg-center">
                        <div class="col-1 item-col d-none d-lg-block">
                            <span class="material-symbols-outlined icon">query_stats</span>
                        </div>
                        <div class="col item-col">
                            <div class="title">2000</div>
                            <div class="sub-title">Leads</div>
                        </div>
                        <div class="col item-col">
                            <div class="title">45%</div>
                            <div class="sub-title">Contactibility</div>
                        </div>
                        <div class="col item-col">
                            <div class="title">17%</div>
                            <div class="sub-title">Lead to Fup%</div>
                        </div>
                        <div class="col item-col">
                            <div class="title">25%</div>
                            <div class="sub-title">FUP to C%</div>
                        </div>
                        <div class="col item-col">
                            <div class="title">4%</div>
                            <div class="sub-title">Sales</div>
                        </div>
                        <div class="col item-col">
                            <div class="title">₹ 432,25,457</div>
                            <div class="sub-title">AFYP</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="campaign-status-charts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="comm-heading">Today’s Leads by Campaigns</div>
                    <div class="card comm-card sweet-garden-green">
                        <div class="card-body">
                            <div class="campaigns-chart">
                                <canvas id="campaigns-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="comm-heading">Leads Status Today</div>
                    <div class="card comm-card sweet-garden-green">
                        <div class="card-body">
                            <div class="status-chart">
                                <canvas id="status-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="campaign-health-details">
        <div class="container">
            <div class="comm-heading">Pre sales leads campaign health</div>
            <ul class="nav nav-tabs comm-tabs aloe-vera-green" id="myTab" role="tablist">
                <li class="nav-item flex-fill">
                    <button class="nav-link active" id="term-tab" data-bs-toggle="tab" data-bs-target="#term" type="button" role="tab">Term</button>
                </li>
                <li class="nav-item flex-fill">
                    <button class="nav-link" id="nonTerm-tab" data-bs-toggle="tab" data-bs-target="#nonTerm" type="button" role="tab">Non Term</button>
                </li>
            </ul>
            <div class="card comm-card">
                <div class="card-body">
                    <div class="tab-content" id="heathDetails">
                        <div id="term" class="tab-pane fade show active" role="tabpanel">
                            <table class="table table-striped comm-table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Leads</th>
                                        <th>Contactibility</th>
                                        <th>Lead to Fup%</th>
                                        <th>FUP to C%</th>
                                        <th>Sales</th>
                                        <th>AFYP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td data-title="Leads">1111</td>
                                        <td data-title="Contactibility">10%</td>
                                        <td data-title="Lead to Fup%">12%</td>
                                        <td data-title="FUP to C%">15%</td>
                                        <td data-title="Sales">15%</td>
                                        <td data-title="AFYP">######</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="nonTerm" class="tab-pane fade" role="tabpanel">
                            <table class="table table-striped comm-table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Leads</th>
                                        <th>Contactibility</th>
                                        <th>Lead to Fup%</th>
                                        <th>Lead to Fup%</th>
                                        <th>Sales</th>
                                        <th>sagar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Website</td>
                                        <td>1111</td>
                                        <td>10%</td>
                                        <td>12%</td>
                                        <td>15%</td>
                                        <td>15%</td>
                                        <td>######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>1111</td>
                                        <td>10%</td>
                                        <td>12%</td>
                                        <td>15%</td>
                                        <td>15%</td>
                                        <td>######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>1111</td>
                                        <td>10%</td>
                                        <td>12%</td>
                                        <td>15%</td>
                                        <td>15%</td>
                                        <td>######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>1111</td>
                                        <td>10%</td>
                                        <td>12%</td>
                                        <td>15%</td>
                                        <td>15%</td>
                                        <td>######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>1111</td>
                                        <td>10%</td>
                                        <td>12%</td>
                                        <td>15%</td>
                                        <td>15%</td>
                                        <td>######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>1111</td>
                                        <td>10%</td>
                                        <td>12%</td>
                                        <td>15%</td>
                                        <td>15%</td>
                                        <td>######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>1111</td>
                                        <td>10%</td>
                                        <td>12%</td>
                                        <td>15%</td>
                                        <td>15%</td>
                                        <td>######</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>1111</td>
                                        <td>10%</td>
                                        <td>12%</td>
                                        <td>15%</td>
                                        <td>15%</td>
                                        <td>######</td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        const campaignsChart = document.getElementById('campaigns-chart');

        new Chart(campaignsChart, {
            type: 'bar',
            data: {
                labels: ['Term SEM', 'Non-Term', 'Website', 'Chat', 'C2C'],
                datasets: [{
                    data: [90, 40, 50, 60, 20, 100],
                    borderWidth: 2,
                    borderColor: [
                        'rgba(188, 216, 94, 1)'
                    ],
                    backgroundColor: [
                        'rgba(120, 152, 179, 1)'
                    ]
                }],
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                },
                indexAxis: 'y'
            }
        });

        const statusChart = document.getElementById('status-chart');

        new Chart(statusChart, {
            type: 'bar',
            data: {
                labels: ['NC', 'Call Back', 'Not Called', 'Follow Up', 'Sale', 'Test Leads'],
                datasets: [{
                    data: [90, 35, 45, 75, 10, 25, 100],
                    borderWidth: 2,
                    borderColor: [
                        'rgba(188, 216, 94, 1)'
                    ],
                    backgroundColor: [
                        'rgba(120, 152, 179, 1)'
                    ]
                }],
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                },
                indexAxis: 'y'
            }
        });
    </script>
</body>
</html>