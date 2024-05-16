<!-- Ricat Tolong di baikin dulu -->
<?php 
    include("datas/listkontak.php");
?>

<h2>Silahkan Hubungi Kami...</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, excepturi aliquid? Illo optio deserunt voluptatum illum modi magnam ipsum, blanditiis totam soluta ratione ducimus minima, tempore dolorem quo aperiam facere!</p>

<table class="table">
    <?php foreach($kontaks as $kontak => $link) : ?>
        <tr>
            <td><?php echo $kontak ?></td>
            <td><a href="<?php echo $kontaks[$link]?>" class="btn btn-primary"><?php echo $link ?></a></td>
        </tr>
    <?php endforeach ?>
</table>