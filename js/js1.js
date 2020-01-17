// JavaScript Document
window.onscroll = function () {
    scrollFunction()
  };
  //navigation bar color change on scroll
  function scrollFunction() {
  
  //  for navigation through page
    $(window).scroll(function () {
      clearTimeout($.data(this, 'scrollTimer'));
      $.data(this, 'scrollTimer', setTimeout(function () {
        // do something
        if (($(this).scrollTop() >= $('#home').position().top - 1) &&
          ($(this).scrollTop() < $('#services').position().top - 1)) {
          onClickNav('home');
        } else if (($(this).scrollTop() >= $('#services').position().top - 1) &&
          ($(this).scrollTop() < $('#our_clients').position().top - 1)) {
          onClickNav('services');
        } else if (($(this).scrollTop() >= $('#our_clients').position().top - 1) &&
          ($(this).scrollTop() < $('#portfolio').position().top - 1)) {
          onClickNav('our_clients');
        } else if (($(this).scrollTop() >= $('#portfolio').position().top - 1) &&
          ($(this).scrollTop() < $('#contact_us').position().top - 1)) {
          onClickNav('portfolio');
        } else if ($(this).scrollTop() >= $('#contact_us').position().top - 1) {
          onClickNav('contact_us');
        }
      }, 250));
    });
  }  
  
  function onClickNav(nav) {
    document.getElementById("nav_home").classList.remove("active-home");
    document.getElementById("nav_services").classList.remove("active-home");
    document.getElementById("nav_ourclients").classList.remove("active-home");
    document.getElementById("nav_portfolio").classList.remove("active-home");
    document.getElementById("nav_contactus").classList.remove("active-home");
  
    if (nav == "home") {
      document.getElementById("nav_home").classList.add("active-home");
    } else if (nav == "services") {
      document.getElementById("nav_services").classList.add("active-home");
    } else if (nav == "our_clients") {
      document.getElementById("nav_ourclients").classList.add("active-home");
    } else if (nav == "portfolio") {
      document.getElementById("nav_portfolio").classList.add("active-home");
    } else if (nav == "contact_us") {
      document.getElementById("nav_contactus").classList.add("active-home");
    }
  }
  
  function validate() {
    var x = document.forms["contact_us_form"]["name"].value;
    if (x == "") {
      alert("Please Enter Your Name!");
      return false;
    }
    x = document.forms["contact_us_form"]["company-name"].value;
    if (x == "") {
      alert("Please Enter Your Company Name!");
      return false;
    }
    x = document.forms["contact_us_form"]["email-id"].value;
    if (x == "") {
      alert("Please Enter Your Email ID!");
      return false;
    }
    x = document.forms["contact_us_form"]["email-id"].value;
    var atposition=x.indexOf("@");
    var dotposition=x.lastIndexOf(".");
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
      alert("Please enter a valid e-mail address");
      return false;
    }
    var num = document.forms["contact_us_form"]["contact-no"].value;
    if(num == "") {
      alert("Please Enter Your Contact Number!");
      return false;
    }
    if (isNaN(num)){
      document.getElementById("numloc").innerHTML="Enter Numeric value only";
      return false;
    }
    return true;
  }