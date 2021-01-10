<?php

class ModelKorisnik extends CI_Model {

    public $idCasa;
    public $predmet;
    public $tipCasa;
    public $trajanjeCasa;
    public $nivoZnanja;
    public $pohadjanjeMuzickeSkole;
    public $kompozicija;
    public $autor;
    public $izabraniDatum;
    public $izabranoVreme;
    public $ime;
    public $prezime;
    public $email;
    public $telefon;
    public $id;
    public $idKorisnika;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function proveriEmailReg($email) {
        $queryResult = $this->db->query("SELECT email FROM korisnik where email like '$email' ");
        $result = $queryResult->row_array();
        return $result;
    }

    public function dodajKorisnika($ubacivanjeNizaPodatakaOkorisniku) {
        $this->db->set("ime", $ubacivanjeNizaPodatakaOkorisniku['ime']);
        $this->db->set("prezime", $ubacivanjeNizaPodatakaOkorisniku['prezime']);
        $this->db->set("email", $ubacivanjeNizaPodatakaOkorisniku['email']);
        $this->db->set("brojTelefona", $ubacivanjeNizaPodatakaOkorisniku['brojTelefona']);
        $this->db->set("password", $ubacivanjeNizaPodatakaOkorisniku['passwordHashed']);


        $this->db->insert("korisnik");
    }

    public function postojiEmail() {
        $this->db->where('email', $this->email);
        $result = $this->db->get('korisnik');
        if ($result->result())
            return TRUE;
        else
            return false;
    }

    public function ispravanPassword($password) {
        $this->db->where('email', $this->email);
        $result = $this->db->get('korisnik');
        $korisnik = $result->row_array();
        $dbPassword = $korisnik['password'];

        if ($korisnik != NULL && password_verify($password, $dbPassword)) {
            $this->ime = $korisnik['ime'];
            $this->prezime = $korisnik['prezime'];
            $this->id = $korisnik['id'];
            $this->telefon = $korisnik['brojTelefona'];
            $this->email = $korisnik['email'];
            $this->idKorisnika = $korisnik['id'];


            return TRUE;
        } else
            return false;
    }

    public function dodajCas($ubacivanjeNizaPodataka) {
        $this->db->set("predmet", $ubacivanjeNizaPodataka['predmet']);
        $this->db->set("tipCasa", $ubacivanjeNizaPodataka['tipCasa']);
        $this->db->set("trajanjeCasa", $ubacivanjeNizaPodataka['trajanjeCasa']);
        $this->db->set("nivoZnanja", $ubacivanjeNizaPodataka['nivoZnanja']);
        $this->db->set("pohadjanjeMuzickeSkole", $ubacivanjeNizaPodataka['pohadjanjeMuzickeSkole']);
        $this->db->set("nazivKompozicije", $ubacivanjeNizaPodataka['nazivKompozicije']);
        $this->db->set("nazivAutora", $ubacivanjeNizaPodataka['nazivAutora']);
        $this->db->set("datumOdrzavanjaCasa", $ubacivanjeNizaPodataka['datumOdrzavanjaCasa']);
        $this->db->set("vremeOdrzavanjaCasa", $ubacivanjeNizaPodataka['vremeOdrzavanjaCasa']);
        $this->db->set("idKorisnika", $ubacivanjeNizaPodataka['idKorisnika']);
//        $this->db->insert("cas");
        if ($this->db->insert("cas")) {
            $korisnikId = $this->session->userdata('korisnik')->idKorisnika;
            $query = $this->db->query("SELECT a.* FROM cas a INNER JOIN (SELECT idKorisnika, MAX(id) id FROM cas 
            WHERE idKorisnika = '$korisnikId'
            GROUP BY idKorisnika
            ) b ON a.idKorisnika = b.idKorisnika AND a.id = b.id");
            $cas = $query->row_array();


            $this->predmet = $cas['predmet'];
            $this->idCasa = $cas['id'];
            $this->tipCasa = $cas['tipCasa'];
            $this->trajanjeCasa = $cas['trajanjeCasa'];
            $this->nivoZnanja = $cas['nivoZnanja'];
            $this->pohadjanjeMuzickeSkole = $cas['pohadjanjeMuzickeSkole'];
            $this->kompozicija = $cas['nazivKompozicije'];
            $this->autor = $cas['nazivAutora'];
            $this->izabraniDatum = $cas['datumOdrzavanjaCasa'];
            $this->izabranoVreme = $cas['vremeOdrzavanjaCasa'];
            return $cas;
        } else {
            return false;
        }
    }
   /* if(!query) {
    echo mysql_error();
} */ 
    public function availability($selected) {
//        var_dump($selected);
        $query = $this->db->query("SELECT vremeOdrzavanjaCasa FROM cas WHERE datumOdrzavanjaCasa='$selected'");
         $notAvailable = $query->result_array();
    return $notAvailable;
    
    }


    public function brojZakazanihCasova() {
        $korisnikId = $this->session->userdata('korisnik')->idKorisnika;
        $query2 = $this->db->query("SELECT * FROM `cas` WHERE idKorisnika='$korisnikId'");
        $sviCasoviKorisnika = $query2->row_array();
        return $sviCasoviKorisnika;
    }

    public function primaocMaila($idgrupe) {
        $query = $this->db->query("SELECT email FROM clanovigrupe where id_grupe like '$idgrupe'");
        $result = $query->result_array();
        return $result;
    }

}
