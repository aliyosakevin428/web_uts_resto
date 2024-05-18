<!-- Ricat Tolong di baikin dulu -->
<!-- WOKEEE -->
<?php 
    include("datas/listkontak.php");
?>

<h1 class="text-center">Silahkan Hubungi Kami...</h1>
<p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, excepturi aliquid? Illo optio deserunt voluptatum illum modi magnam ipsum, blanditiis totam soluta ratione ducimus minima, tempore dolorem quo aperiam facere!</p>

<table class="table table-dark table-striped text-center">
    <?php foreach($kontaks as $kontak => $link) : ?>
        <tr>
            <td><?php echo $kontak ?></td>
            <td><a href="<?php echo $kontaks[$kontak]?>" class="btn"><?php echo $link ?></a></td>
        </tr>
    <?php endforeach ?>
</table>