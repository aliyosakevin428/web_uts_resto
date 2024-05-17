<!-- Ini Naila Tolong Bikinkan Halaman Membernya ya -->
<?php
    include("datas/listmember.php");
?>

<h1>List Menu yang Ada Di Restoran Kami</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam perferendis iure quas pariatur, neque, dolorum quasi voluptatem, culpa reprehenderit eligendi temporibus quis at nam assumenda corrupti. Ea blanditiis fugit repellat.</p>

<div class="row row-cols-3">
<?php 
    foreach ($members as $member) {
    ?>
       <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $member['anggota'] ?></h5>
        <p class="card-text"><?php echo $member['name'] ?></p>
        <p class="card-text"><?php echo $member['jabatan'] ?></p>
      </div>
    </div>
  </div>
</div>
    <?php
    }
?>
</div>
