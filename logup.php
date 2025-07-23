<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <title>ลงทะเบียน</title>
</head>

<body class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center"><b>ลงทะเบียน</b></h2>
                <div id="message">

                </div>
                <form id="formsubmit">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">ชื่อจริง</label>
                        <input type="text" class="form-control" id="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">วันเกิด</label>
                        <input type="date" class="form-control" id="birthday">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">อีเมล</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label">ยันยืนรหัสผ่าน</label>
                        <input type="password" class="form-control" id="confirmpassword">
                    </div>


                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    <div class="mt-3">
                        <p>หากคุณมี account ให้
                            <a href="index.php"> กดเข้าสู่ระบบ</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <script src="logup.js"> </script>
</body>

</html>