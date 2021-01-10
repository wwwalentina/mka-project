

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
        <link href="<?php echo base_url('assets/css/headerGostCss.css'); ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/contentPages.css'); ?>" type="text/css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--      <script src="<?php // echo base_url('assets/js/jquery-3.4.0.js');      ?>"></script> -->

<!--        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>-->
<style>
 @media only screen and (max-width: 600px) {
    .home {
        width: 100%;
        height: auto;
    }
 }
</style>
    </head>
    <body>
        <header class="bgimg w3-display-container">
<!--            <iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/RtUQ_pz5wlo?autoplay=1" frameborder="0" allow="encrypted-media; gyroscope; picture-in-picture"></iframe>-->
            <!--<div id="mySidenav" class="sidenav">-->
            <div class="w3-sidebar w3-bar-block w3-animate-left w3-black w3-text-white" style="display:none;left:0;" id="leftMenu">
                <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                <button onclick="closeLeftMenu()" class="sidebarX w3-bar-item w3-large w3-black w3-text-white" style="">&Chi;</button>
                <a class="homeLink w3-bar-item w3-border-bottom w3-small" href="<?php echo site_url('Gost/index'); ?>">POČETNA</a>
                <a class="w3-bar-item w3-border-bottom w3-small" href="<?php echo site_url('Gost/oProfesoruUcitavanjeStr'); ?>">O PROFESORU</a>
                <a class="scheduleLink w3-border-bottom w3-small w3-bar-item" href="<?php echo site_url('Gost/zakazivanjeCasaUcitavanjeStr'); ?>"><i class="fa fa-calendar" style="font-size:13px"></i> ZAKAŽITE ČAS</a>
                <a class="w3-bar-item w3-border-bottom w3-small" href="<?php echo site_url('Gost/kontaktUcitavanjeStr'); ?>">KONTAKT</a>
                <a class="w3-bar-item w3-border-bottom w3-small" href="<?php echo site_url('Gost/galerijaFotografijaUcitavanjeStr'); ?>">GALERIJA</a>
                <a class="w3-bar-item w3-border-bottom w3-small" href="<?php echo site_url('Gost/vezbaonicaBubnjevaUcitavanjeStr'); ?>">VEŽBAONICA BUBNJEVA</a>
                <!--<a class="w3-bar-item w3-border-bottom w3-small" href="<//?php echo site_url('Gost/muzickeVestiUcitavanjeStr'); ?>">U SVETU MUZIKE</a>-->
                <a class="w3-bar-item w3-border-bottom w3-small" id="registracija" href="<?php echo site_url('Gost/loadRegistration'); ?>">REGISTRUJTE SE</a>
                <a class="w3-bar-item w3-border-bottom w3-small" id="prijavljivanje" href="<?php echo site_url('Gost/loadLogIn'); ?>">PRIJAVITE SE</a>
            </div>
            <div class="clef w3-left w3-hover-opacity" onclick="openLeftMenu()"><img src="<?php echo base_url(); ?>assets/img/violinski33.png"></div>
            <div class="home w3-display-middle w3-padding-large w3-border  w3-wide w3-text-light-grey w3-center">
                <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">MALA KLAVIRSKA AKADEMIJA</h1>
                <h5 class="w3-hide-large">mala klavirska akademija</h5>
                <h3 class="w3-hide-medium w3-hide-small">Zorana Vladisavljević</h3>
            </div>
            <audio id="audio" autoplay muted loop>
                <source src="<?php echo base_url(); ?>assets/audio/Teme.wav" type="audio/wav">
                <source src="myAudio.ogg" type="audio/ogg">
            </audio>
            <div id="buttonMuteUnmute" onclick="muteUnmute()" class="w3-bottom">
                <i class="fa fa-volume-off w3-display-middle" style="font-size:24px; color: white;"></i>
            </div>
        </header>


        <div class="bodyContent w3-container">
