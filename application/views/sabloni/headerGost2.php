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

        <link href="../../assets/css/kalendar.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/headerGost2Css.css'); ?>" type="text/css" rel="stylesheet" />

        <link href="<?php echo base_url('assets/css/contentPages.css'); ?>" type="text/css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <!--   <script src="<?php // echo base_url('assets/js/jquery-3.4.0.js');                                 ?>"></script> -->

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

@media only screen and (max-width: 900px) and (min-width: 600px) {
    #imgProf {
    margin: auto;    
    width:80%;
    height: auto;
    float: none;
    clear: both;
    display: block;  
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
    <div class="topnav" id="myTopnav">
        <!--        <div class="" id="myNavbar">-->
        <ul>
            <li id="buttonMuteUnmute" onclick="muteUnmute()">
                <i class="fa fa-volume-off" style="font-size:24px"></i>
            </li>
            <li>
                <a href="<?php echo site_url('Gost/index'); ?>">
                    <span><i class="fa fa-home"></i> POČETNA</span>
                    <span><i class="fa fa-home"></i> POČETNA</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Gost/oProfesoruUcitavanjeStr'); ?>">
                    <span>O PROFESORU</span>
                    <span>O PROFESORU</span>
                </a>
            </li>
            <!--            <li>
                            <a href="<?php echo site_url('Gost/uputstvaZaCasoveUcitavanjeStr'); ?>">
                                <span>UPUTSTVO ZA ZAKAZIVANJE</span>
                                <span>UPUTSTVO ZA ZAKAZIVANJE</span>
                            </a>
                        </li>-->
            <li>
                <a href="<?php echo site_url('Gost/vezbaonicaBubnjevaUcitavanjeStr'); ?>">
                    <span>VEŽBAONICA BUBNJEVA</span>
                    <span>VEŽBAONICA BUBNJEVA</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Gost/galerijaFotografijaUcitavanjeStr'); ?>">
                    <span>GALERIJA</span>
                    <span>GALERIJA</span>
                </a>
            </li>
            <!--<li>-->
            <!--    <a href="<//?php echo site_url('Gost/muzickeVestiUcitavanjeStr'); ?>">-->
            <!--        <span>MUZIČKE VESTI</span>-->
            <!--        <span>MUZIČKE VESTI</span>-->
            <!--    </a>-->
            <!--</li>-->
            <li>
                <a href="<?php echo site_url('Gost/kontaktUcitavanjeStr'); ?>">
                    <span><i class="fa fa-envelope"></i> KONTAKT</span>
                    <span><i class="fa fa-envelope"></i> KONTAKT</span>
                </a>
            </li>
        </ul>
        <ul class="logInRight">
            <li>
                <a href="<?php echo site_url('Gost/loadLogIn'); ?>">
                    <span><i class="fa fa-sign-in"></i> PRIJAVITE SE</span>
                    <span><i class="fa fa-sign-in"></i> PRIJAVITE SE</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Gost/loadRegistration'); ?>">
                    <span><i class="fa fa-user-plus"></i> REGISTRUJTE SE</span>
                    <span><i class="fa fa-user-plus"></i> REGISTRUJTE SE</span>
                </a>
            </li>
            <li id="scheduleLinkGreenRight">
                <a class="w3-animate-opacity w3-small w3-border w3-border-black w3-padding-small w3-round-xxlarge w3-text-black w3-hover-opacity w3-transparent" href="<?php echo site_url('Gost/zakazivanjeCasaUcitavanjeStr'); ?>"><i class="fa fa-calendar" style="font-size:13px"></i> ZAKAŽITE ČAS</a>
            </li>

        </ul>
    </div>
    <div class="topnav2" id="myTopnav2" style="background-color: #000; color: #fff;">
        <a href="<?php echo site_url('Gost/index'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Početna</a>
        <a href="<?php echo site_url('Gost/oProfesoruUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">O profesoru</a>
        <a href="<?php echo site_url('Gost/vezbaonicaBubnjevaUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Vežbaonica bubnjeva</a>
        <a href="<?php echo site_url('Gost/galerijaFotografijaUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Galerija</a>
        <!--<a href="<//?php echo site_url('Gost/muzickeVestiUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Muzičke vesti</a>-->
        <a href="<?php echo site_url('Gost/kontaktUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Kontakt</a>
        <a href="<?php echo site_url('Gost/loadLogIn'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Prijavite se <i class="fa fa-sign-in" style="font-size:13px"></i></a>
        <a href="<?php echo site_url('Gost/loadRegistration'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Registrujte se <i class="fa fa-user-plus" style="font-size:13px"></i></a>
        <a href="<?php echo site_url('Gost/zakazivanjeCasaUcitavanjeStr'); ?>" style="border-bottom: 1px solid #fff; padding: 12px;">Zakažite čas <i class="fa fa-calendar" style="font-size:13px"></i></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction2()" style="background-color: #000; color: #fff; padding: 12px;">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="bgimg-1 w3-display-container w3-grayscale-min">
        <audio id="audio" autoplay muted loop>
            <source src="<?php echo base_url(); ?>assets/audio/Teme.wav" type="audio/wav">
            <source src="myAudio.ogg" type="audio/ogg">
        </audio>
        <a class="w3-btn w3-animate-opacity w3-display-middle w3-medium w3-border w3-border-white w3-padding-large w3-round-xxlarge w3-text-white w3-hover-opacity w3-transparent" href="<?php echo site_url('Gost/zakazivanjeCasaUcitavanjeStr'); ?>"><i class="fa fa-calendar" style="font-size:13px"></i> ZAKAŽITE ČAS</a>
    </div><br><br>
    <div class="bodyContent w3-container">


