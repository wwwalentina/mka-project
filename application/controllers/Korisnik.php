<?php

class Korisnik extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("ModelKorisnik");
        $this->load->library('session');
        $this->load->helper('directory');
        $this->naviHref = htmlentities($_SERVER['PHP_SELF']);
    }

    private function loadView($header, $data, $glavniDeo) {
        $this->load->view($header, $data);
        $this->load->view($glavniDeo, $data);
        $this->load->view("sabloni/footer.php");
    }

    public function index() {
        $this->loadView("sabloni/header.php", NULL, "pocetna.php");
    }

    public function zakazivanjeCasaUcitavanjeStr() {
        $this->loadView("sabloni/header2.php", NULL, "forma.php");
    }

    public function uputstvaZaCasoveUcitavanjeStr() {
        $this->loadView("sabloni/header2.php", NULL, "uputstvaZaCasove.php");
    }

    public function oProfesoruUcitavanjeStr() {
        $this->loadView("sabloni/header2.php", NULL, "oProfesoru.php");
    }

    public function kontaktUcitavanjeStr() {
        $this->loadView("sabloni/header2.php", NULL, "kontakt.php");
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
        
        $this->loadView("sabloni/header2.php", $data, "galerijaFotografija.php");
    }

    public function galerijaSnimakaUcitavanjeStr() {
        $this->loadView("sabloni/header2.php", NULL, "galerijaSnimaka.php");
    }

    public function muzickeVestiUcitavanjeStr() {
        $this->loadView("sabloni/header2.php", NULL, "muzickeVesti.php");
    }

    public function vezbaonicaBubnjevaUcitavanjeStr() {
        $this->loadView("sabloni/header2.php", NULL, "vezbaonicaBubnjeva.php");
    }

    public function zakaziCas() {
        $this->form_validation->set_rules('predmet', 'Predmet', 'required');
        $this->form_validation->set_rules('tipCasa', 'Tip casa', 'required');
        $this->form_validation->set_rules('trajanjeCasa', 'Trajanje casa', 'required');
        $this->form_validation->set_rules('nivoZnanja', 'Nivo znanja', 'required');
        $this->form_validation->set_rules('pohadjanjeMuzickeSkole', 'Pohadjanje muzicke skole', 'required');
        // $this->form_validation->set_rules('kompozicija', 'Naziv kompozicije', 'required');
        // $this->form_validation->set_rules('autor', 'Naziv autora', 'required');
        $this->form_validation->set_rules('selectedDate', 'Izabrani datum', 'required');
        $this->form_validation->set_rules('selectedHour', 'Izabrano vreme', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->zakazivanjeCasaUcitavanjeStr();
        } else {
            $predmet = $this->input->post('predmet');
            $tipCasa = $this->input->post('tipCasa');
            $trajanjeCasa = $this->input->post('trajanjeCasa');
            $nivoZnanja = $this->input->post('nivoZnanja');
            $pohadjanjeMuzickeSkole = $this->input->post('pohadjanjeMuzickeSkole');
            $kompozicija = $this->input->post('kompozicija');
            $autor = $this->input->post('autor');
            $izabraniDatum = $this->input->post('selectedDate');
            $izabranoVreme = $this->input->post('selectedHour');
            $idKorisnika = $this->session->userdata('korisnik')->id;
            $ubacivanjeNizaPodataka = array(
                "predmet" => $predmet,
                "tipCasa" => $tipCasa,
                "trajanjeCasa" => $trajanjeCasa,
                "nivoZnanja" => $nivoZnanja,
                "pohadjanjeMuzickeSkole" => $pohadjanjeMuzickeSkole,
                "nazivKompozicije" => $kompozicija,
                "nazivAutora" => $autor,
                "datumOdrzavanjaCasa" => $izabraniDatum,
                "vremeOdrzavanjaCasa" => $izabranoVreme,
                "idKorisnika" => $idKorisnika
            );

            $dodajCas = $this->ModelKorisnik->dodajCas($ubacivanjeNizaPodataka);
            if (!$dodajCas == 0) {
                $this->index();

                $this->load->library('email');

                $config = array(
                    'protocol' => 'mail',
                    'smtp_host' => 'ssl://mail.malaklavirskaakademija.com',
                    'smtp_port' => 587,
                    'smtp_user' => 'info@malaklavirskaakademija.com',
                    'smtp_pass' => 'password',
                    'mailtype' => 'html',
                    'charset' => 'utf-8'
                );
                $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->set_newline("\r\n");

                $this->email->to(array($this->session->userdata('korisnik')->email, 'info@malaklavirskaakademija.com', 'zorana.vladisavljevic@gmail.com'));
                $this->email->from('info@malaklavirskaakademija.com', 'Informacije sa sajta Mala klavirska akademija');
                $this->email->subject('Podaci o zakazanom času i uputstvo za uplatu');
                $this->email->message('Informacije o zakazanom casu: <br>Ime: <i>' . $this->session->userdata('korisnik')->ime . '</i><br>Prezime: <i>' . $this->session->userdata('korisnik')->prezime . '</i><br>E-mail: <i>' . $this->session->userdata('korisnik')->email . '</i><br>Telefon: <i>' . $this->session->userdata('korisnik')->telefon . '</i><br>Predmet: <i>' . $predmet . '</i><br>Tip časa: <i> ' . $tipCasa . '</i><br>Trajanje časa: <i> ' . $trajanjeCasa . '</i><br>Nivo znanja: <i> ' . $nivoZnanja . '</i><br>Pohađanje muzičke škole: <i> ' . $pohadjanjeMuzickeSkole . '</i><br>Kompozicija: <i> ' . $kompozicija . '</i><br>Autor: <i> ' . $autor . '</i><br>Datum održavanja časa: <i> ' . $izabraniDatum . '</i><br>Vreme održavanja časa: <i> ' . $izabranoVreme . '</i>');

                if ($this->email->send()) {
                    echo '<script language="javascript">';
                    echo 'alert("Uspešno ste zakazali čas. Detalji o času i uputstvo za uplatu su poslati na Vaš mejl.")';
                    echo '</script>';
                } else {
                                        echo '<script language="javascript">';
                    echo 'alert("Došlo je do greške pri zakazivanju časa.")';
                    //echo '</script>';
                    //show_error($this->email->print_debugger());
                }
            }
        }
    }

    public function availability() {
        $selectedDate = $this->input->post('selectedDate');
        $retrieveAvailableHours = $this->ModelKorisnik->availability($selectedDate);

//        foreach ($retrieveAvailableHours as $n) {
//            foreach ($n as $n2 => $value) {
//                $arrayNew[] = $value;
//            }
//        }

        $json = json_encode($retrieveAvailableHours);
        print_r($json);
//        return $json;
    }

    public function logOut() {
        $this->session->unset_userdata("korisnik");
        $this->session->sess_destroy();
        redirect("Gost");
    }

}
