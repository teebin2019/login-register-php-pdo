<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once 'connect.php';

try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // insert a row
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);


        if (empty($row['email'])) {
            echo json_encode(["message" => "ไม่มีข้อมูลผู้ใช้งาน", 'status' => 401]);
            return;
        }
        // See the password_hash() example to see where this came from.
        $hash = $row['password'];

        if (password_verify($password, $hash)) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["f_name"] = $row['f_name'];
            $_SESSION["l_name"] = $row['l_name'];
            $_SESSION["email"] = $row['email'];
            echo json_encode(["message" => "เข้าสู่ระบบสำเร็จ", 'status' => 200]);
        } else {
            echo json_encode(["message" => "ไม่มีรหัสผ่านไม่ตรง", 'status' => 401]);
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
