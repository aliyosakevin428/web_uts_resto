<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        img {
            aspect-ratio: 16/9;
        }
        .card {
            background-color: #1e1c2a;
            color: #fff;
        }
    </style>
</head>

<body>
    
    <!-- Ricat Bisa Sekalian Buat kan cssnya kah Yang Simpel Aja Gak Usah terlalu rumit -->
    <?php
    include("datas/listmenu.php");
    ?>

    <div class="text-center">
        <h1>List Menu yang Ada Di Restoran Kami</h1>
    </div>

    <div class="container text-center">
        <div class="row">
            <?php foreach ($menus as $menu) {?>
                <div class="col">
                    <div class="card border border-white border-3"  style="width: 18rem;">
                        <img src="<?php echo $menu['image'] ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $menu['name'] ?></h5>
                            <p class="card-text"><?php echo $menu['harga'] ?></p>
                            <a href="#" class="btn">Order Now</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>