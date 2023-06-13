$(document).ready(function() {
    $('.login-con form, .reset-con form').submit(function(e) {
      e.preventDefault(); // Prevent the default form submission behavior
    });
  });

$(".login-button").on("click", function () {
    $(".dark-screen, .login-con, .login-form").fadeIn("fast");
});

$(".dark-screen").on("click", function () {
    $(".dark-screen, .login-con, .reset-con").fadeOut("fast");
});

$(".login-cancel").on("click", function () {
    $(".main-con").fadeOut("fast");
});


//field checker
$('.login-submit').on('click', function() {
    var email = $('#email').val();
    var password = $('#pass').val();

    if (email === '') {
      $('#em-err').removeClass('hidden').text('Please fill in the username field.');
    } else {
      $('#em-err').addClass('hidden');
    }

    if (password === '') {
      $('#pass-err').removeClass('hidden').text('Please fill in the password field.');
    } else {
      $('#pass-err').addClass('hidden');
    }


    if (email !== '' && password !== '') {
      // Perform login logic here
      console.log(email, password);
    }
  });
  
  $('#reset-submit').on('click', function() {

    var emailreset = $('#emailreset').val();

    if (emailreset === '') {
      $('#emr-err').removeClass('hidden').text('Please fill in the username field.');

    } else {
      $('#emr-err').addClass('hidden');
    }

    if (emailreset !== '') {
      console.log(emailreset);
      // Perform login logic here
    }
  });

//switch form
  $('#forgot-pass').click(function(e) {
    e.preventDefault(); // Prevent the default link behavior

    $('.login-form')[0].reset(); // Reset the login form fields
    $('.login-con').fadeOut(); // Hide the login form container
    $('.dark-screen').fadeOut();
    $('.dark-screen').fadeIn();
    $('.reset-con').fadeIn(); // Show the register form container
  });

  $('#back').click(function(e) {
    e.preventDefault(); // Prevent the default link behavior

    $('.reset-form')[0].reset(); // Reset the login form fields
    $('.reset-con').fadeOut(); // Hide the login form container
    $('.dark-screen').fadeOut();
    $('.dark-screen').fadeIn();
    $('.login-con').fadeIn(); // Show the register form container
  });

  function success() {
    var comem = document.getElementById("email-company").value;
    var comname = document.getElementById("company-name").value;
    var fname = document.getElementById("first-name").value;
    var lname = document.getElementById("last-name").value;
    var pass = document.getElementById("pass-reg").value

    if ( comem.length > 5){

    }


    if (
      document.getElementById("email-company").value !== "" &&
      document.getElementById("company-name").value !== "" &&
      document.getElementById("first-name").value !== "" &&
      document.getElementById("last-name").value !== "" &&
      document.getElementById("pass-reg").value !== ""
    ) {
      document.getElementById('reg-b').disabled = false;
    } else {
      document.getElementById('reg-b').disabled = true;
    }
    
  }