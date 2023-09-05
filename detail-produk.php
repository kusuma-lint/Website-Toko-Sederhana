<?php
error_reporting(0);
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM admin WHERE admin_id = 1 ");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($conn, "SELECT * FROM product WHERE product_id= '".$_GET['id']."' ");
    $p = mysqli_fetch_object($produk);
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
        <h1><a href="index.php">Toko Kusen</a></h1>
        <ul>
            <li><a href="produk.php">Produk</a></li>
        </ul>
        </div>
    </header>
    <!-- header end -->

    <!-- bagian search start -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search']?>">
                <input type="hidden" name="kategori" value="<?php echo $_GET['kategori']?>">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>
    <!-- bagian search end -->
    <div class="section">
        <div class="container">
            <h3>Detail Produk</h3>
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->product_image?>" width="100px">
                </div>
                <div class="col-2">
                    <h3><?php echo $p->product_name?></h3>
                    <h4>Rp. <?php echo number_format($p->product_price) ?></h4>
                    <p>Deskripsi :<br>
                    <?php echo $p->product_description?>
                    </p>
                        <p><a href="https://api.whatsapp.com/send/?phone=<?php echo $a->admin_telp?> 
                        &text>= Hai, saya tertarik dengan produk Anda." target="_blank">
                        Hubungi via Whatsapp <img src="img/whatsapp.png" width="50px">
                        </a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- product detail start -->

    <!-- product detail end -->

    <!-- footer start -->
    <div class="footer">
        <div class="container">
            <h4>Alamat</h4>
            <p><?php echo $a->admin_address?></p>

            <h4>Email</h4>
            <p><?php echo $a->admin_email?></p>

            <h4>Whatsapp</h4>
            <p><?php echo $a->admin_telp?></p>
            <small>Copyright &copy; 2022 - Toko Kusen Kharomah Indah.</small>
        </div>  
    </div>
    <!-- footer end -->
</body>
</html>