
    <form name="formaRegistracija" method="post" action="<?php echo site_url("Gost/registrovanje"); ?>">
        <p><?php if(isset($poruka)) {
            echo "<p class='w3-panel w3-pale-red w3-border-red w3-border w3-text-red' style='margin: auto; width: 60%; padding: 15px;'>$poruka</p>";
        } 
        echo validation_errors();
        ?></p>
<b>Ime<font style="color: #c639a1;">*</font></b><br>
        <input type="text" name="name" required><br>
        <b>Prezime<font style="color: #c639a1;">*</font></b><br>
        <input type="text" name="surname" required><br>
        <b>E-mail<font style="color: #c639a1;">*</font></b><br>
        <input type="email" name="email" required><br>
        <b>Broj telefona<font style="color: #c639a1;">*</font></b><br>
        <input type="tel" name="phoneNumber" required><br>
        <b>Lozinka<font style="color: #c639a1;">*</font></b><br>
        <input type="password" name="password" required><br>
        <b>Ponovite lozinku<font style="color: #c639a1;">*</font></b><br>
        <input type="password" name="confirmPassword" required><br><br>
        <button type="submit">Registrujte se</button>
    </form>


