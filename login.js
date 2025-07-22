$("#formsubmit").submit(function (e) {
  e.preventDefault(); // avoid to execute the actual submit of the form.

  const email = $("#email").val();
  const password = $("#password").val();

  if (email.length === 0) {
    sweetAlert("", "กรุณาใส่อีเมล!", "error");
    return;
  }

  if (password.length === 0) {
    sweetAlert("", "กรุณาใส่รหัสผ่าน!", "error");
    return;
  }

  const data = {
    email: email,
    password: password,
  };

  $.ajax({
    type: "post",
    url: "login_db.php",
    data: data,
    success: function (data) {
      const object = JSON.parse(data);
      if (object.status === 401) {
        sweetAlert("", object.message, "error");
        return;
      }
      sweetAlert("", object.message, "success");
    },
    error: function (err) {
      console.log("An error occurred.");
      console.log(err);
    },
  });
});
