$("#formsubmit").submit(function (e) {
  e.preventDefault(); // avoid to execute the actual submit of the form.

  const firstname = $("#firstname").val();
  const lastname = $("#lastname").val();
  const birthday = $("#birthday").val();
  const email = $("#email").val();
  const password = $("#password").val();
  const confirmpassword = $("#confirmpassword").val();

  if (firstname.length === 0) {
    sweetAlert("", "กรุณากรอกชื่อจริง!", "error");
    return;
  }

  if (lastname.length === 0) {
    sweetAlert("", "กรุณากรอกนามสกุล!", "error");
    return;
  }


  if (email.length === 0) {
    sweetAlert("", "กรุณากรอกอีเมล!", "error");
    return;
  }


  if (birthday.length === 0) {
    sweetAlert("", "กรุณากรอกวันเกิด!", "error");
    return;
  }

  if (password.length === 0) {
    sweetAlert("", "กรุณากรอกรหัสผ่าน!", "error");
    return;
  }

  if (password.length <= 6) {
    sweetAlert("", "ต้องการรหัสผ่าน 6 ตัวอักษรขึ้นไป!", "error");
    return;
  }

  if (password != confirmpassword) {
    sweetAlert("", "รหัสผ่านไม่ตรงกัน!", "error");
    return;
  }

  const data = {
    firstname: firstname,
    lastname: lastname,
    birthday: birthday,
    email: email,
    password: password,
  };

  $.ajax({
    type: "post",
    url: "logup_db.php",
    data: data,
    success: function (data) {
      const object = JSON.parse(data);
      if (object.status === 401) {
        swal(object.message, "", "error");
        return;
      }
      swal("ลงทะเบียนสำเร็จแล้ว!", "", "success");
    },
    error: function (err) {
      swal("Internet Error Server!", "", "error");
      console.log("An error occurred.");
    },
  });
});
