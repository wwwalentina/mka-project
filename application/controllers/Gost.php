<?php

class Gost extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("ModelKorisnik");
        $this->load->library('session');
        $this->load->helper('directory');
        if (($this->session->userdata('korisnik')) != NULL)
            redirect("Korisnik");
    }

    private function loadView($header, $data, $glavniDeo) {
        $this->load->view($header, $data);
        $this->load->view($glavniDeo, $data);
        $this->load->view("sabloni/footer.php");
    }

    public function index() {
        $this->loadView("sabloni/headerGost.php", NULL, "pocetna.php");
    }

    public function zakazivanjeCasaUcitavanjeStr() {
        $data['poruka'] = "<p class='w3-panel w3-pale-purple w3-border-purple w3-border w3-text-purple' style='margin: auto; width: 60%; padding: 15px;'>Molimo Vas da se <a href='loadLogIn' style='color: #333333;'>ulogujete</a>/<a href='loadRegistration' style='color: #333333;'>registrujete</a> kako biste zakazali čas i videli sve potrebne informacije.</p>";
        $this->loadView("sabloni/headerGost2.php", $data, "forma.php");
    }

    public function uputstvaZaCasoveUcitavanjeStr() {
        $this->loadView("sabloni/headerGost2.php", NULL, "uputstvaZaCasove.php");
    }

    public function oProfesoruUcitavanjeStr() {
        $data['poruka'] = 'Molimo Vas da se ulogujete kako biste videli sadržaj ove stranice.';
        $this->loadView("sabloni/headerGost2.php", $data, "oProfesoru.php");
    }

    public function kontaktUcitavanjeStr() {
        $this->loadView("sabloni/headerGost2.php", NULL, "kontakt.php");
    }

    public function galerijaFotografijaUcitavanjeStr() {
        $map = directory_map('assets/img/gallery');
        sort($map, SORT_NATURAL | SORT_FLAG_CASE);
        $i = 0;
        $imgURLs = array();
        foreach ($map as $image) {
            $imgURLs[$i] = $image;
            list($firsts[$i], $lasts[$i]) = explode(".", "$image");
            $images[$i] = array($imgURLs[$i] => $firsts[$i]);
            $i++;
        }

        $data['images'] = $images;
        $this->loadView("sabloni/headerGost2.php", $data, "galerijaFotografija.php");
    }

    public function galerijaSnimakaUcitavanjeStr() {
        $this->loadView("sabloni/headerGost2.php", NULL, "galerijaSnimaka.php");
    }

    public function muzickeVestiUcitavanjeStr() {
        $this->loadView("sabloni/headerGost2.php", NULL, "muzickeVesti.php");
    }

    public function vezbaonicaBubnjevaUcitavanjeStr() {
        $data['poruka'] = "<p id='panelDrums' class='w3-panel w3-pale-purple w3-border-purple w3-border w3-text-purple' style='margin: auto; width: 60%; padding: 15px;'>Molimo Vas da se <a href='loadLogIn' style='color: #333333;'>ulogujete</a>/<a href='loadRegistration' style='color: #333333;'>registrujete</a> ili nas kontaktirate kako biste saznali više detalja o vežbaonici bubnjeva.</p>";
        $this->loadView("sabloni/headerGost2.php", $data, "vezbaonicaBubnjeva.php");
    }

    public function loadRegistration($poruka = NULL) {
        $podaci = array();
        if ($poruka) {
            $podaci['poruka'] = $poruka;
            $this->loadView("sabloni/headerGost2.php", $podaci, "registracija.php");
        } else {
            $this->loadView("sabloni/headerGost2.php", NULL, "registracija.php");
        }
    }

    public function loadLogIn($poruka = NULL) {
        $podaci = array();
        if ($poruka) {
            $podaci['poruka'] = $poruka;
            $this->loadView("sabloni/headerGost2.php", $podaci, "logIn.php");
        } else {
            $this->loadView("sabloni/headerGost2.php", NULL, "logIn.php");
        }
    }
    
        public function zaboravljenaLozinkaUcitavanjeStr($poruka = NULL) {
        $podaci = array();
        if ($poruka) {
            $podaci['poruka'] = $poruka;
            $this->loadView("sabloni/headerGost2.php", $podaci, "zaboravljenaLozinka.php");
        } else {
            $this->loadView("sabloni/headerGost2.php", NULL, "zaboravljenaLozinka.php");
        }
    }

    public function registrovanje() {
//        $this->form_validation->set_rules('name', 'Name', 'required');
//        $this->form_validation->set_rules('surname', 'Surname', 'required');
//        $this->form_validation->set_rules('email', 'Email', 'required');
//        $this->form_validation->set_rules('phoneNumber', 'Phone number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'Confirm password', 'required|matches[password]');
        $this->form_validation->set_message("matches", "<p class='w3-panel w3-pale-red w3-border-red w3-border w3-text-red' style='margin: auto; width: 60%; padding: 15px;'>Ponovljena lozinka je neispravna.</p>");


        if ($this->form_validation->run() == FALSE) {
            $this->loadRegistration();
        } else {

            $ucenikIliRoditelj = $this->input->post('ucenikIliRoditelj');
            $ime = $this->input->post('name');
            $prezime = $this->input->post('surname');
            $email = $this->input->post('email');
            $telefon = $this->input->post('phoneNumber');
            $password = $this->input->post('password');
            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

            $ubacivanjeNizaPodatakaOkorisniku = array(
                "ucenikIliRoditelj" => $ucenikIliRoditelj,
                "ime" => $ime,
                "prezime" => $prezime,
                "email" => $email,
                "brojTelefona" => $telefon,
                "passwordHashed" => $passwordHashed
            );
            $this->ModelKorisnik->email = $this->input->post('email');
            $proveriEmailReg = $this->ModelKorisnik->proveriEmailReg($email);

            if ($proveriEmailReg == 0) {
                $dodajKorisnika = $this->ModelKorisnik->dodajKorisnika($ubacivanjeNizaPodatakaOkorisniku);
                if (!$dodajKorisnika) {
                    $this->loadLogIn();
                }
            } else {
                $this->loadRegistration("Uneta e-mail adresa je već registrovana na ovom sajtu! Ulogujte se ili koristite drugu e-mail adresu pri registraciji.");
            }
        }
    }

    public function logIn() {
        $this->form_validation->set_rules("email", "E-mail", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_message("required", "Polje {field} je ostalo prazno.");
        if ($this->form_validation->run()) {
            $this->ModelKorisnik->email = $this->input->post('email');
            if (!$this->ModelKorisnik->postojiEmail())
                $this->loadLogIn("<p class='w3-panel w3-pale-red w3-border-red w3-border w3-text-red' style='margin: auto; width: 60%; padding: 15px;'>Ne postoji korisnik sa unetom e-mail adresom.</p>");
            else if (!$this->ModelKorisnik->ispravanPassword($this->input->post('password')))
                $this->loadLogIn("<p class='w3-panel w3-pale-red w3-border-red w3-border w3-text-red' style='margin: auto; width: 60%; padding: 15px;'>Neispravna lozinka!</p>");
            else {
                $this->load->library('session');
                $this->session->set_userdata('korisnik', $this->ModelKorisnik);
                redirect("Korisnik/zakazivanjeCasaUcitavanjeStr");
            }
        } else
            $this->loadLogIn();
    }
    
    public function zaboravljenaLozinka() {
        $this->form_validation->set_rules("email", "E-mail", "required");
        $this->form_validation->set_message("required", "Polje {field} je ostalo prazno.");
        
            if ($this->form_validation->run()) {
            $this->ModelKorisnik->email = $this->input->post('email');
            if (!$this->ModelKorisnik->postojiEmail())
                $this->zaboravljenaLozinkaUcitavanjeStr("<p class='w3-panel w3-pale-red w3-border-red w3-border w3-text-red' style='margin: auto; width: 60%; padding: 15px;'>Ne postoji korisnik sa unetom e-mail adresom.</p>");
            else {
                $this->zaboravljenaLozinkaUcitavanjeStr("<p class='w3-panel w3-pale-green w3-border-green w3-border' style='margin: auto; width: 60%; padding: 15px;'><font style='color: #4CAF50!important;'>Uskoro će Vam stići poruka sa novom lozinkom.</font></p>");
            }
        } else
            $this->zaboravljenaLozinkaUcitavanjeStr();
    }

}
