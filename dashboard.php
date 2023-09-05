<?php
    session_start();
    if($_SESSION['status_login']!= true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Toko Kusen</title>
</head>
<body>
    <!-- heeader start -->
    <header>
        <div class="container">
        <h1><a href="dashboard.php">Toko Kusen</a></h1>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="data-kategori.php">Data Kategori</a></li>
            <li><a href="data-produk.php">Data Produk</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
        </div>
    </header>
    <!-- header end -->

    <!-- content start -->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global'] ->admin_name ?> di Toko Online</h4>
            </div>
        </div>
    </div>
    <!-- content end -->

    <!-- footer start -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Toko Kusen Kharomah Indah.</small>
        </div>
    </footer>
    <!-- footer end -->
</body>
</html>