<!DOCTYPE html>
<html>
    <head>
        <title>Mala klavirska akademija</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-food.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-camo.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../../assets/css/kalendar.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/headerCss.css'); ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/contentPages.css'); ?>" type="text/css" rel="stylesheet" />


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--     <script src="<?php // echo base_url('assets/js/jquery-3.4.0.js');    ?>"></script> -->
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
            <!--<div id="mySidenav" class="sidenav">-->
            <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;left:0;" id="leftMenu">
                <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                <button onclick="closeLeftMenu()" class="sidebarX w3-border-bottom w3-bar-item w3-large" style=" padding-top: 9%;
                        padding-bottom: 9%;">&Chi;</button>
                <a class="homeLink w3-bar-item w3-border-bottom w3-hover-none w3-small" href="<?php echo site_url('Korisnik/index'); ?>">POČETNA</a>
                <a class="w3-bar-item sidebarItem w3-border-bottom w3-hover-none w3-small" href="<?php echo site_url('Korisnik/oProfesoruUcitavanjeStr'); ?>">O PROFESORU</a>
                <a class="scheduleLink w3-bar-item sidebarItem  w3-border-bottom  w3-hover-none w3-small" href="<?php echo site_url('Korisnik/zakazivanjeCasaUcitavanjeStr'); ?>"><i class="fa fa-calendar" style="font-size:13px"></i> ZAKAŽITE ČAS</a>
                <a class="w3-bar-item sidebarItem w3-border-bottom w3-hover-none w3-small" href="<?php echo site_url('Korisnik/kontaktUcitavanjeStr'); ?>">KONTAKT</a>
                <a class="w3-bar-item sidebarItem w3-border-bottom w3-hover-none w3-small" href="<?php echo site_url('Korisnik/galerijaFotografijaUcitavanjeStr'); ?>">GALERIJA</a>
                <a class="w3-bar-item sidebarItem w3-border-bottom w3-hover-none w3-small" href="<?php echo site_url('Korisnik/vezbaonicaBubnjevaUcitavanjeStr'); ?>">VEŽBAONICA BUBNJEVA</a>
                <!--<a class="w3-bar-item sidebarItem w3-border-bottom w3-hover-none w3-small" href="<//?php echo site_url('Korisnik/muzickeVestiUcitavanjeStr'); ?>">U SVETU MUZIKE</a>-->
                <a class="w3-bar-item w3-border-bottom w3-hover-none w3-small" href="<?php echo site_url('Korisnik/logOut'); ?>">ODJAVITE SE</a>
            </div>
           <!-- <div class="w3-hover-opacity" style="cursor:pointer" onclick="openNav()"><img id="buttonClef" src="<?php // echo base_url();    ?>assets/img/violinski33.png"></div>       --> 
<!--            <a id="linkZakazivanjeNaPocetnoj" class="w3-btn w3-medium  w3-text-white w3-hover-opacity w3-animate-opacity" href="<?php echo site_url('Korisnik/zakazivanjeCasaUcitavanjeStr'); ?>">Zakažite čas</a>-->
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

        <div class="bodyContent w3-container  w3-animate-bottom">
            <br><br>

