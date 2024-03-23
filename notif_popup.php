<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notifikasi Pop-Up PHP</title>
    <script type="text/javascript">
        // Fungsi JavaScript untuk menampilkan pop-up
        function showPopup(message) {
            alert(message);
        }
    </script>
    <?php
    echo "<script type='text/javascript'>showPopup('$pesan');</script>";
?>
</head>
<body>
    // Tempat untuk menulis kode PHP
    <?php
    $pesan = "Halo! Ini adalah notifikasi pop-up dari PHP.";
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form jika ada
        // ...
        
        // Tampilkan pop-up notifikasi
        echo "<script type='text/javascript'>showPopup('$pesan');</script>";
    }
?>

// Kode HTML untuk form
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    // Element form lainnya
    <input type="submit" value="Kirim" />
</form>
</body>
</html>