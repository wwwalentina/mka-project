
<form name="formaLogIn" method="post" action="<?php echo site_url("Gost/zaboravljenaLozinka") ?>">
        <p><?php
            if (isset($poruka)) {
                echo "<font color='red'>$poruka</font>";
            }
            ?></p>
        <input type="email" name="email" placeholder="E-mail" required><br><br>
        <br><br>
        <button type="submit">Pošalji</button><br><br>
    </form>