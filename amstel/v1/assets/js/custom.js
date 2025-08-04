(function ($) {
  "use strict";
  if ("IntersectionObserver" in window) {
    let observer = new IntersectionObserver(function (entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          let img = $(entry.target);
          img.attr("src", img.data("src")).removeClass("lazy");
          observer.unobserve(entry.target);
        }
      });
    });

    $(".lazy").each(function () {
      observer.observe(this);
    });
  } else {
    $(window).on("scroll", lazyLoad);
    $(window).on("resize", lazyLoad);
    lazyLoad();
  }

  // scroll navbar animation
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");

    if (window.scrollY > lastScrollY) {
      navbar.classList.add("hidden");
    } else {
      navbar.classList.remove("hidden");
    }

    lastScrollY = window.scrollY;
  });

  // to get navbar height
  function adjustContentMargin() {
    const navbar = document.getElementById("navbar");
    const content = document.getElementById("main-wrapper");
    const navbarHeight = navbar.offsetHeight;
    content.style.paddingTop = `${navbarHeight}px`;
  }

  adjustContentMargin();

  window.addEventListener("resize", adjustContentMargin);

  // modal
  $(window).on("load", function () {
    $("#agreeModal").modal("show");
  });

  function toggleCheckboxes() {
    const agreeChecked = $("#agree-p-1").is(":checked");
    const disagreeChecked = $("#agree-p-2").is(":checked");

    if (agreeChecked) {
      $("#agree-p-2").prop("checked", false);
      $("#disagreeMessage").hide();
      $("#proceedButton").removeClass("disabled");
      $("#errorMessage").hide();
    } else if (disagreeChecked) {
      $("#agree-p-1").prop("checked", false);
      $("#disagreeMessage").show();
      $("#proceedButton").addClass("disabled");
      $("#errorMessage").hide();
    } else {
      $("#disagreeMessage").hide();
      $("#proceedButton").addClass("disabled");
    }
  }

  $("#agree-p-1").on("change", function () {
    if (this.checked) {
      $("#agree-p-2").prop("checked", false);
    }
    toggleCheckboxes();
  });

  $("#agree-p-2").on("change", function () {
    if (this.checked) {
      $("#agree-p-1").prop("checked", false);
    }
    toggleCheckboxes();
  });

  $("#proceedButton").on("click", function (e) {
    e.preventDefault();
    if (!$("#agree-p-1").is(":checked") && !$("#agree-p-2").is(":checked")) {
      $("#errorMessage").show();
    } else if ($("#agree-p-1").is(":checked")) {
      $("#errorMessage").hide();
      $("#agreeModal").modal("hide");
    }
  });

  // button
  $("#beginButton").click(function () {
    $(".mid-content-wrapper").hide(); // Hide mid-content-wrapper
    $(".form-wrapper").show(); // Show form-wrapper
  });

  // form validations
  $("input[name='code']").on("input", function () {
    if ($(this).val()) {
      $("#codeError").hide();
    }
  });

  $("input[name='name']").on("input", function () {
    if ($(this).val()) {
      $("#nameError").hide();
    }
  });

  $("input[name='mobile']").on("input", function () {
    if ($(this).val().length === 10 && /^\d{10}$/.test($(this).val())) {
      $("#mobileError").hide();
    }
  });

  $("input[name='email']").on("input", function () {
    const email = $(this).val();
    if (!email || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      $("#emailError").hide();
    }
  });

  $("select[name='state']").on("change", function () {
    if ($(this).val()) {
      $("#stateError").hide();
    }
  });

  $("#agree-p-3").on("change", function () {
    if ($(this).is(":checked")) {
      $("#ageError").hide();
    }
  });

  $("#agree-p-4").on("change", function () {
    if ($(this).is(":checked")) {
      $("#termsError").hide();
    }
  });

  $("#submitForm").submit(function (e) {
    e.preventDefault();
    let isValid = true;

    // Validate Voucher Code
    if (!$("input[name='code']").val()) {
      $("#codeError").show();
      isValid = false;
    } else {
      $("#codeError").hide();
    }

    // Validate Name
    if (!$("input[name='name']").val()) {
      $("#nameError").show();
      isValid = false;
    } else {
      $("#nameError").hide();
    }

    const mobile = $("input[name='mobile']").val();
    if (!mobile || mobile.length !== 10 || !/^\d{10}$/.test(mobile)) {
      $("#mobileError").show();
      isValid = false;
    } else {
      $("#mobileError").hide();
    }

    // Validate email
    const email = $("input[name='email']").val();
    if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      $("#emailError").show();
      isValid = false;
    } else {
      $("#emailError").hide();
    }

    // Validate State Selection
    if (!$("select[name='state']").val()) {
      $("#stateError").show();
      isValid = false;
    } else {
      $("#stateError").hide();
    }

    // Validate Terms and Conditions Checkbox
    if (!$("#agree-p-3").is(":checked")) {
      $("#ageError").show();
      isValid = false;
    } else {
      $("#ageError").hide();
    }

    // Validate Terms and Conditions Checkbox
    if (!$("#agree-p-4").is(":checked")) {
      $("#termsError").show();
      isValid = false;
    } else {
      $("#termsError").hide();
    }

    if (isValid) {
      alert("Form submitted successfully!");
      location.reload();
    }
  });

  // menu
  $(".bugger-icon").click(function () {
    $(".menu-section-wrapper").toggleClass("close");
    $("body").css("overflow", "hidden");
  });
  $(".close-icon").click(function () {
    $(".menu-section-wrapper").addClass("close");
    $("body").css("overflow", "");
  });
})(jQuery);
