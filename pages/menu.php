<?php
    include("datas/listmenu.php");
?>

<h1>List Menu yang Ada Di Restoran Kami</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam perferendis iure quas pariatur, neque, dolorum quasi voluptatem, culpa reprehenderit eligendi temporibus quis at nam assumenda corrupti. Ea blanditiis fugit repellat.</p>

<div class="row row-cols">
<?php 
    foreach ($menus as $menu) {
    ?>
       <div class="col">
       <div class="card" style="width: 18rem;">
    <img src="" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $menu['name'] ?></h5>
        <p class="card-text"><?php echo $menu['harga'] ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
       </div>
    <?php
    }
?>
</div>