<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <title>เข้าสู่ระบบ</title>
</head>

<body class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title"><b>เข้าสู่ระบบ</b></h5>
            <form id="formsubmit">
                <div class="mb-3">
                    <label for="email" class="form-label">อีเมล</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="password">
                </div>


                <button type="submit" class="btn btn-primary">ยืนยัน</button>
                <div class="mt-3">
                    <p>หากคุณยังไม่่มี account ให้
                        <a href="logup.php"> กดลงทะเบียน</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <script src="login.js"> </script>
</body>

</html>