<div class="bodyContentMiddle"><h1>Galerija</h1><img src="<?php echo base_url('assets/img/wings3.png'); ?>" class="wings" height="30" width="130"></div><br><br>
<div class="gallery-wrapper row w3-row-padding">
   <?php if (isset($images)) {
        foreach ($images as $image) { 
            foreach ($image as $imgURL => $imgDesc) { 
                $fullImgURL = base_url('assets/img/gallery/').$imgURL;
    ?>
    <div class="gallery w3-mobile w3-third">
        <a target="_blank" href="<?php echo $fullImgURL  ?>">
            <img class="w3-padding" src="<?php echo $fullImgURL ?>" alt="Mala klavirska akademija" width="600" height="400">
        </a>
        <div class="desc"><span><?php echo $imgDesc; ?></span></div>
    </div>
    <?php }
        }
    } ?>
</div>
