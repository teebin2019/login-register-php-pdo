<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'connect.php';

try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // insert a row
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $countrow = $stmt->fetchColumn();

        if ($countrow > 0) {
            echo json_encode([
                'message' => "มีอีเมลซ้ำกัน",
                "status" => 401
            ]);
            return;
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);

        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO users (f_name, l_name, email,birthday,password)
  VALUES (:firstname, :lastname, :email ,:birthday, :password)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':birthday', $birthday);
        $stmt->bindParam(':password', $hash);
        $stmt->execute();

        // use exec() because no results are returned
        echo json_encode(['message' => "ลงทะเบียนสำเร็จ"]);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
