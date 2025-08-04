$(document).ready(function () { 

    $(".navbar-toggler").click(function() {
        $(".main-menu").toggleClass("show");
        $(".navbar-toggler-icon").toggleClass("close");
    });
    
    $(".search-icon").click(function() {
        $(".search-bar").fadeToggle();
        $("#search").focus();
    });
    $("#search").blur(function() {
        $(".search-bar").fadeToggle();
    });

    /* $('#searchModal').on('shown.bs.modal', function () {
        // alert("sagar");
        $('#CampName').trigger('focus');
    }); */
    $('.modal').on('shown.bs.modal', function () {
        $('#CampName, #CustName, #leadsPhn').trigger('focus');
    });

    $("#campaignList").on('click', "#addNewCampaignRow", function() {
        var newCampaignRow = '<tr> <td> <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="row1"> <label class="form-check-label" for="row1"></label> </div> <button class="table-d-block table-d-md-none btn btn-outline delete deleteRow py-1 px-2"> <span class="material-symbols-outlined icon">delete</span> </button> </td> <td> <div class="form-group select"> <label for="vendor" class="form-label">Vendor</label> <select name="vendor" id="vendor" class="form-select"> <option value="">Select Vendor</option> <option value="">1</option> <option value="">2</option> <option value="">3</option> </select> </div> </td> <td> <div class="form-group select"> <label for="channel" class="form-label">Channel</label> <select name="channel" id="channel" class="form-select"> <option value="">Select Channel</option> <option value="">1</option> <option value="">2</option> <option value="">3</option> </select> </div> </td> <td> <div class="form-group select"> <label for="force_upload" class="form-label">Force Upload</label> <select name="force_upload" id="force_upload" class="form-select"> <option value="">Select Force Upload</option> <option value="">1</option> <option value="">2</option> <option value="">3</option> </select> </div> </td> <td> <div class="form-group select"> <label for="location" class="form-label">Location</label> <select name="location" id="location" class="form-select"> <option value="">Select Location</option> <option value="">1</option> <option value="">2</option> <option value="">3</option> </select> </div> </td> <td> <div class="form-group select"> <label for="allocation_type" class="form-label">Allocation Type</label> <select name="allocation_type" id="allocation_type" class="form-select"> <option value="">Select Allocation Type</option> <option value="">1</option> <option value="">2</option> <option value="">3</option> </select> </div> </td> <td> <div class="form-group select"> <label for="agent_allocation" class="form-label">Agent Allocation</label> <select name="agent_allocation" id="agent_allocation" class="form-select"> <option value="">Select Agent Allocation</option> <option value="">1</option> <option value="">2</option> <option value="">3</option> </select> </div> </td> <td> <div class="form-group select"> <label for="diallerGroup" class="form-label">Dialler Group</label> <select name="diallerGroup" id="diallerGroup" class="form-select"> <option value="">Select Dialler Group</option> <option value="">1</option> <option value="">2</option> <option value="">3</option> </select> </div> </td> <td class="table-d-none table-d-md-block"> <button class="btn btn-outline delete deleteRow py-1 px-2"> <span class="material-symbols-outlined icon">delete</span> </button> </td> </tr>';
        $("#campaignListBody").append(newCampaignRow);
    });

    $("#campaignListBody").on('click', '.deleteRow', function() {
        $(this).parents('tr').remove();
    });

    $("#checkAll").click(function(){
        $("#leadListBody input[type=checkbox]").prop('checked', $(this).prop('checked'));
    });

    $("#basicInfoForm").on('click', '.addEmailCol', function() {
        var addNewEmailCol = '<div class="col-lg-3 col-12 newEmailCol"> <div class="input-group"> <label for="basicAlernateEmail" class="form-label">Alternate Email*</label> <input type="email" class="form-control" placeholder="Enter Alternate Email" name="basicAlernateEmail" id="basicAlernateEmail"> <span class="input-group-text removeEmailCol"> <span class="material-symbols-outlined close">close</span> </span> </div> </div>';
        $(this).parents(".emailCol").after(addNewEmailCol);
    });

    $("#basicInfoForm").on('click', '.removeEmailCol', function() {
        $(this).parents(".newEmailCol").remove();
    });
    
    $("#basicInfoForm").on('click', '.addPhoneCol', function() {
        console.log("in");
        var addNewPhoneCol = '<div class="col-lg-3 col-12 newPhoneCol"> <div class="input-group"> <label for="basicAlernatePhone" class="form-label">Alternate Phone No.</label> <input type="email" class="form-control" name="basicAlernatePhone" id="basicAlernatePhone" placeholder="Enter Alternate Phone No." > <span class="input-group-text removePhoneCol"> <span class="material-symbols-outlined close">close</span> </span> </div> </div>';
        $(this).parents(".phoneCol").after(addNewPhoneCol);
    });

    $("#basicInfoForm").on('click', '.removePhoneCol', function() {
        console.log("in");
        $(this).parents(".newPhoneCol").remove();
    });

    $("#addressInfoForm").on('click', '#addNewAddressListLead', function() {
        var newLeadListRow = '<div class="card-row"> <div class="row align-items-center mb-0 mb-md-4"> <div class="col-md-5 col-12 order-md-2 mb-md-0 mb-4"> <div class="action-btn text-right"> <button type="button" class="btn btn-fill primary">Make Primary</button> <button type="button" class="btn btn-outline delete deleteRow p-2"> <span class="material-symbols-outlined icon">delete</span> </button> </div> </div> <div class="col-md-7 col-12 order-md-1 mb-md-0 mb-4"> <div class="leads-filter-check"> <div class="item-list title">Type</div> <div class="item-list radio-check-box-list"> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" value="" id="shipping"> <label class="form-check-label" for="shipping">Shipping</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" value="" id="billing"> <label class="form-check-label" for="billing">Billing</label> </div> </div> </div> </div> </div> <div class="row"> <div class="col-lg-3 col-12"> <div class="form-group"> <label for="AddFlatNo" class="form-label">Flat No.</label> <input type="text" class="form-control" name="AddFlatNo" id="AddFlatNo" placeholder="Enter Flat No."> </div> </div> <div class="col-lg-3 col-12"> <div class="form-group"> <label for="AddBuildName" class="form-label">Building Name</label> <input type="text" class="form-control" name="AddBuildName" id="AddBuildName" placeholder="Enter Building Name"> </div> </div> <div class="col-lg-3 col-12"> <div class="form-group"> <label for="LocalOrStreet" class="form-label">Locality or Street</label> <input type="text" class="form-control" name="LocalOrStreet" id="LocalOrStreet" placeholder="Enter Locality or Street"> </div> </div> <div class="col-lg-3 col-12"> <div class="form-group"> <label for="AddLandmark" class="form-label">Landmark</label> <input type="text" class="form-control" name="AddLandmark" id="AddLandmark" placeholder="Enter Locality or Street"> </div> </div> <div class="col-lg-3 col-12"> <div class="form-group"> <label for="AddPin" class="form-label">Pin</label> <input type="text" class="form-control" name="AddPin" id="AddPin" placeholder="Enter Pin Code"> </div> </div> <div class="col-lg-3 col-12"> <div class="form-group"> <label for="AddCity" class="form-label">City</label> <input type="text" class="form-control" name="AddCity" id="AddCity" placeholder="Enter City"> </div> </div> <div class="col-lg-3 col-12"> <div class="form-group"> <label for="AddState" class="form-label">State</label> <input type="text" class="form-control" name="AddState" id="AddState" placeholder="Enter State"> </div> </div> <div class="col-lg-3 col-12"> <div class="form-group"> <label for="AddCountry" class="form-label">Country</label> <input type="text" class="form-control" name="AddCountry" id="AddCountry" placeholder="Enter Country"> </div> </div> </div> </div>';

        $(this).parents(".card-row").after(newLeadListRow);
    });

    $("#addressInfoForm").on('click', '.deleteRow', function() {
        $(this).parents(".card-row").remove();
    });
    
    $("#addressInfoForm").on("click", ".primary", function() {
        $(this).toggleClass("check");
        $(this).html() == "Primary" ? $(this).html('Make Primary') : $(this).html('Primary');
    });


});



$(document).on("click", function(event){
    var trigger = $(".main-menu");
    if(trigger !== event.target && !trigger.has(event.target).length) {
        $(".navbar-collapse").removeClass("show");
        $(".navbar-toggler-icon").removeClass("close");
        trigger.removeClass("show");
    }
});