<?php
include "koneksi.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek == 1) {
    while ($data = mysqli_fetch_array($sql)) {
        $_SESSION['userid'] = $data['userid'];
        $_SESSION['namalengkap'] = $data['namalengkap'];
    }
    // Redirect ke halaman index.php dan sertakan query string untuk menunjukkan login berhasil
    header("Location: index.php?login_success=true");
} else {
    // Redirect kembali ke halaman login.php dan sertakan query string untuk menunjukkan login gagal
    header("Location: login.php?login_failed=true");
}
?>
<!DOCTYPE html>
<html>
<body>
    <!-- Konten HTML Anda di sini -->

    <script>
        // Ambil nilai query string dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const loginSuccess = urlParams.get('login_success');
        const loginFailed = urlParams.get('login_failed');

        // Tampilkan pop-up sesuai dengan hasil login
        if (loginSuccess) {
            alert("Login berhasil. Selamat datang, <?php echo $_SESSION['namalengkap']; ?>!");
        } else if (loginFailed) {
            alert("Login gagal. Silakan coba lagi!");
        }
    </script>
</body>
</html>
