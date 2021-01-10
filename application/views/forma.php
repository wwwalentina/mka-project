
    <?php
    if (isset($poruka) && ($this->session->userdata('korisnik')) == NULL) {
        echo $poruka."<br><br>";
    } else {
//        foreach ($this->session->userdata('korisnik') as $key => $polje) {
//            echo "Ovo je KEY: " . $key . " | " . "Ovo je POLJE: " . $polje . "<br>";
//        }
//        print_r($this->session->userdata('korisnik')->id);
        ?>
        <form name="forma" method="post" action="<?php echo site_url("Korisnik/zakaziCas"); ?>">
            <br><br>
            <p class="w3-panel w3-pale-green w3-border-green w3-border w3-text-green" style="margin: auto; width: 60%; padding: 15px;">Molimo Vas da popunite prva tri polja kako biste videli cenu časa.</p><br><br>
            <b>Koji predmet biste želeli da pohađate?</b><br>
            <input type="radio" name="predmet" class="predmet" id="klavir" value="klavir" required><label for="klavir">Klavir</label><br>
            <input type="radio" name="predmet" class="predmet" id="teorija" value="teorija"><label for="teorija">Teorija</label><br><br>
            <b>Kako želite da pohađate čas?</b><br>
            <input type="radio" name="tipCasa" id="prekoSkajpa" value="prekoSkajpa" required><label for="prekoSkajpa">Preko skajpa</label><br>
            <input type="radio" name="tipCasa" id="kodProfesora" value="kodProfesora"><label for="kodProfesora">Kod profesora</label><br><br>
            <b>Koliko minuta želite da Vaš čas traje?</b><br>
            <input type="radio" name="trajanjeCasa" id="30min" value="30" required><label for="30min">30 minuta</label><br>
            <input type="radio" name="trajanjeCasa" id="45min" value="45"><label for="45min">45 minuta</label><br>
            <input type="radio" name="trajanjeCasa" id="60min" value="60"><label for="60min">60 minuta</label><br><br>
            Cena: <b><output name="cena" id="cena" style="color: #169c38" for="predmet tipCasa trajanjeCasa"></output></b><br><br>
           <!-- Godina:
            <select id="year"></select>
            Mesec: 
            <select name="selectedMonth" id="months"></select>
            Dan:
            <select name="selectedDay" id="days"></select> 
            <br>-->
            <b>Izaberite datum:</b>
            <input type="date" id="date" name="selectedDate" value="" required/><br/><br/>
            <b>Izaberite vreme:</b>
            <select required name="selectedHour" id="hours" ></select>
            <br><br> 
            <b>Nivo znanja</b><br>
            <input type="radio" name="nivoZnanja" id="pocetni" value="pocetni"><label for="pocetni">Početni</label><br>
            <input type="radio" name="nivoZnanja" id="srednji" value="srednji"><label for="srednji">Srednji</label><br>
            <input type="radio" name="nivoZnanja" id="napredni" value="napredni"><label for="napredni">Napredni</label><br><br>
            <b>Ukoliko učenik pohađa muzičku školu označite koji je razred, u suprotnom označite "Učenik ne pohađa muzičku školu".</b><br>
            <select name="pohadjanjeMuzickeSkole">
                <option>Učenik ne pohađa muzičku školu</option>
                <option>I razred osnovne muzičke škole</option>
                <option>II razred osnovne muzičke škole</option>
                <option>III razred osnovne muzičke škole</option>
                <option>IV razred osnovne muzičke škole</option>
                <option>V razred osnovne muzičke škole</option>
                <option>VI razred osnovne muzičke škole</option>
                <option>Učenik je završio osnovnu muzičku školu</option>
                <option>I razred srednje muzičke škole</option>
                <option>II razred srednje muzičke škole</option>
                <option>III razred srednje muzičke škole</option>
                <option>IV razred srednje muzičke škole</option>
                <option>Učenik je završio srednju muzičku školu</option>
            </select>
            <p>
                <b>Upišite naziv kompozicije koju biste želeli da se obradi na času</b><br>
                <input type="text" name="kompozicija"><br>
                <b>Upišite ime autora čiju biste kompoziciju želeli da obradite na času</b><br>
                <input type="text" name="autor"><br>
            </p>
            <button type="submit">Pošaljite podatke</button>
        </form>
    <?php  } ?>



