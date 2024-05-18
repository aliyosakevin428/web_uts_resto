<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    img {
      aspect-ratio: 1/1;
      border-radius: 5%;
      border: white solid 3px;
    }

    .card {
      color:  #fff;
      background-color: #1e1c2a;
    }
  </style>
</head>

<body>

  <!-- Ini Naila Tolong Bikinkan Halaman Membernya ya -->
  <?php
  include("datas/listmember.php");
  ?>

  <div class="text-center">
    <h1>Jabatan Dan Anggota Pada Restoran Kami</h1>

  </div>

  <div class="row">
    <?php foreach ($members as $member) { ?>
      <div class="col-3">
        <div class="card text-center p-3">
          <img src="<?php echo $member['image'] ?>">
          <h5 class="card-title p-2"><?php echo $member['name'] ?></h5>
          <p class="card-text"><?php echo $member['tanggal'] ?></p>
          <p class="card-text"><?php echo $member['jabatan'] ?></p>
        </div>
      </div>
      <?php
        }
        ?>
  </div>
</body>

</html>