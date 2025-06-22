<?php
$valid_user = "admin";
$valid_pass = "123456";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_user && $password === $valid_pass) {
    header("Location: dashboard.html");
    exit();
} else {
    // 顯示 SweetAlert2 錯誤提示
    echo '
    <!DOCTYPE html>
    <html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <title>登入錯誤</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: "error",
                title: "帳號或密碼錯誤",
                confirmButtonText: "OK"
            }).then(() => {
                window.location.href = "index.html"; // 回登入頁
            });
        </script>
    </body>
    </html>';
}
?>
