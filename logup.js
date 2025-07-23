$(window).on("load", function () {
  console.log("All assets are loaded");
});

const validation = (data) => {
  const errors = [];

  if (data.firstname.length === 0) {
    errors.push({ message: "กรุณากรอกชื่อจริง!", status: "error" });
  }

  if (data.lastname.length === 0) {
    errors.push({ message: "กรุณากรอกนามสกุล!", status: "error" });
  }

  if (data.email.length === 0) {
    errors.push({ message: "กรุณากรอกอีเมล!", status: "error" });
  }

  if (data.birthday.length === 0) {
    errors.push({ message: "กรุณากรอกวันเกิด!", status: "error" });
  }

  if (data.password.length === 0) {
    errors.push({ message: "กรุณากรอกรหัสผ่าน!", status: "error" });
  }

  if (data.password.length <= 6) {
    errors.push({
      message: "ต้องการรหัสผ่าน 6 ตัวอักษรขึ้นไป!",
      status: "error",
    });
  }

  if (data.password != data.confirmpassword) {
    errors.push({
      message: "รหัสผ่านไม่ตรงกัน!",
      status: "error",
    });
  }
  return errors;
};

$("#formsubmit").submit(function (e) {
  e.preventDefault(); // avoid to execute the actual submit of the form.

  const firstname = $("#firstname").val();
  const lastname = $("#lastname").val();
  const birthday = $("#birthday").val();
  const email = $("#email").val();
  const password = $("#password").val();
  const confirmpassword = $("#confirmpassword").val();

  const data = {
    firstname: firstname,
    lastname: lastname,
    birthday: birthday,
    email: email,
    password: password,
    confirmpassword: confirmpassword,
  };

  const errors = validation(data);

  const message = $("#message");

  if (errors.length > 0) {
    message.html(` <div class="alert alert-danger " role="alert" id="message">
                    <ul>
                 ${errors.map((error) => `<li>${error.message}</li>`).join("")}
                    </ul>
                </div>`);
    return;
  }

  $.ajax({
    type: "post",
    url: "logup_db.php",
    data: data,
    success: function (data) {
      const object = JSON.parse(data);
      // if (object.status === 401) {
      //   swal(object.message, "", "error");
      //   return;
      // }
      swal("ลงทะเบียนสำเร็จแล้ว!", "", "success");
    },
    error: function (err) {
      swal("Internet Error Server!", "", "error");
      console.log("An error occurred.");
    },
  });
});
