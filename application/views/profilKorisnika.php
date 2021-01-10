<?php

        foreach ($this->session->userdata('korisnik') as $key => $polje) {
            echo "Ovo je KEY: " . $key . " | " . "Ovo je POLJE: " . $polje . "<br>";

        }