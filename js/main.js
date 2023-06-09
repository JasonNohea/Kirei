$(document).ready(function() {
    $('.login-con form').submit(function(e) {
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
    var username = $('#email').val();
    var password = $('#pass').val();

    if (username === '') {
      $('#em-err').removeClass('hidden').text('Please fill in the username field.');
    } else {
      $('#em-err').addClass('hidden');
    }

    if (password === '') {
      $('#pass-err').removeClass('hidden').text('Please fill in the password field.');
    } else {
      $('#pass-err').addClass('hidden');
    }

    if (username !== '' && password !== '') {
      // Perform login logic here
    }
  });


//switch form
  $('#test').click(function(e) {
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


  