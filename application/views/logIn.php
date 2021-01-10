
<form name="formaLogIn" method="post" action="<?php echo site_url("Gost/logIn") ?>">
        <p><?php
            if (isset($poruka)) {
                echo "<font color='red'>$poruka</font>";
            }
            ?></p>
        <input type="email" name="email" placeholder="E-mail" required><br><br>
        <input type="password" name="password" placeholder="Lozinka" required><br><br>
        <button type="submit">Prijavite se</button><br><br>
        <a href="<?php echo site_url('Gost/zaboravljenaLozinkaUcitavanjeStr'); ?>">Zaboravili ste lozinku?</a>
    </form>


