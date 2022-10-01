$(document).ready(function() {
  $("#register").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
      url: "api/register.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function(data) {
        console.log(data);
        if (data == "success") {
          swal({
            title: "Success",
            text: "Register Successfully",
            icon: "success",
            buttons: false,
            closeOnClickOutside: false,
            closeOnEsc: false,
            timer: 2000
          });
        } else if (data == "warning") {
          swal({
            title: "Missing Value",
            text: "Please fill mandatory field !!!",
            icon: "warning",
            buttons: false,
            closeOnClickOutside: false,
            closeOnEsc: false,
            timer: 2000
          });
        } else if (data == "error") {
          swal({
            title: "Failed",
            text: "Registration Failed !!!",
            icon: "error",
            buttons: false,
            closeOnClickOutside: false,
            closeOnEsc: false,
            timer: 2000
          });
        }
      }
    });
  });
});
