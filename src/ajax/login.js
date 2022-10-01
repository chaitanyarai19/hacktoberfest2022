$(document).ready(function() {
  $("#login").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
      url: "src/api/login.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function(data) {
        console.log(data);
        if (data == "success") {
          swal({
            title: "Success",
            text: "Login Successfully",
            icon: "success",
            buttons: false,
            closeOnClickOutside: false,
            closeOnEsc: false,
            timer: 2000
          });
          $("#register").trigger("reset");
          window.location.href = "index.php";
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
            text: "Login Failed !!!",
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
