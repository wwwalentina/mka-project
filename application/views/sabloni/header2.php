<!DOCTYPE html>
<html>
    <head>
        <title>Mala klavirska akademija</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-food.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="<?php echo base_url('assets/css/header2Css.css'); ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/contentPages.css'); ?>" type="text/css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--    <script src="<?php // echo base_url('assets/js/jquery-3.4.0.js');                         ?>"></script> -->

<!--        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>-->
   <style>
    @media only screen and (max-width: 900px) and (min-width: 600px) {
    .imgLeft {
    margin: auto;    
    width:80%;
    height: auto;
    float: none;
    clear: both;
    display: block;
  
} .pRight {
    clear: both;
}
}



    @media only screen and (max-width: 600px) {
    .imgLeft {
    width: 100%;
    height: auto;
} 
}

   
   @media only screen and (max-width: 700px) {
     .bodyContentMiddle {
         width: 100%;
         height: auto;
        border: none; 
     } h1 {
         font-size: 25px;
         text-align: center;
     }
     .wings {
         margin: auto;
         display: block;
         width: 25%;
         height: auto;
     }
   }
</style>

    </head>
    <body>

        <div class="w3-bar topnav" id="myNavbar">
            <ul>
                <li>
                    <a href="<?php echo site_url('Korisnik/index'); ?>">
                        <span><i class="fa fa-home"></i> POČETNA</span>
                        <span><i class="fa fa-home"></i> POČETNA</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Korisnik/oProfesoruUcitavanjeStr'); ?>">
                        <span>O PROFESORU</span>
                        <span>O PROFESORU</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Korisnik/vezbaonicaBubnjevaUcitavanjeStr'); ?>">
                        <span>VEŽBAONICA BUBNJEVA</span>
                        <span>VEŽBAONICA BUBNJEVA</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Korisnik/galerijaFotografijaUcitavanjeStr'); ?>">
                        <span>GALERIJA</span>
                        <span>GALERIJA</span>
                    </a>
                </li>
                <!--<li>-->
                <!--    <a href="<//?php echo site_url('Korisnik/muzickeVestiUcitavanjeStr'); ?>">-->
                <!--        <span>MUZIČKE VESTI</span>-->
                <!--        <span>MUZIČKE VESTI</span>-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="<?php echo site_url('Korisnik/kontaktUcitavanjeStr'); ?>">
                        <span><i class="fa fa-envelope"></i>KONTAKT</span>
                        <span><i class="fa fa-envelope"></i>KONTAKT</span>
                    </a>
                </li>
            </ul>
            <ul id="logOutRight">
                <li>
                    <a href="<?php echo site_url('Korisnik/logOut'); ?>">
                        <span><i class="fa fa-sign-out"></i>ODJAVITE SE</span>
                        <span><i class="fa fa-sign-out"></i>ODJAVITE SE</span>
                    </a>
                </li>
                <li id="scheduleLinkGreenRight">
                    <a class="w3-small w3-border w3-padding-small w3-round-xxlarge w3-hover-opacity w3-transparent" href="<?php echo site_url('Korisnik/zakazivanjeCasaUcitavanjeStr'); ?>"><i class="fa fa-calendar" style="font-size:13px"></i> ZAKAŽITE ČAS</a>
                </li>
            </ul>
        </div>
        <div class="topnav2" id="myTopnav2" style="background-color: #000; color: #fff;">
            <a href="<?php echo site_url('Korisnik/index'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Početna</a>
            <a href="<?php echo site_url('Korisnik/oProfesoruUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">O profesoru</a>
            <a href="<?php echo site_url('Korisnik/vezbaonicaBubnjevaUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Vežbaonica bubnjeva</a>
            <a href="<?php echo site_url('Korisnik/galerijaFotografijaUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Galerija</a>
            <!--<a href="<//?php echo site_url('Korisnik/muzickeVestiUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Muzičke vesti</a>-->
            <a href="<?php echo site_url('Korisnik/kontaktUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Kontakt</a>
            <a href="<?php echo site_url('Korisnik/logOut'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Odjavite se</a>
            <a href="<?php echo site_url('Korisnik/zakazivanjeCasaUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Zakažite čas</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction2()" style="background-color: #000; color: #fff; padding: 12px;">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <!-- First Parallax Image with Logo Text -->
        <div class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
            <!--            <div class="w3-display-middle" style="white-space:nowrap;">
                            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>
                        </div>-->
            <a class="w3-btn w3-animate-opacity w3-display-middle w3-medium w3-border w3-border-white w3-padding-large w3-round-xxlarge w3-text-white w3-hover-opacity w3-transparent" href="<?php echo site_url('Korisnik/zakazivanjeCasaUcitavanjeStr'); ?>"><i class="fa fa-calendar" style="font-size:13px"></i> ZAKAŽITE ČAS</a>

        </div><br><br>

        <div class="bodyContent w3-container">
