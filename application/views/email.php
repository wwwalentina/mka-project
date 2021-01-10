
    <center>
        <div  id="dodavanjeDis">
            <form method="post" action="<?php echo site_url("$controller/email/" . $idgrupe); ?>">
                <label>CC:</label><br>

                <input type="text" name="cc" required class="novaDisNas"/><br><br>

                <label>Sadržaj Vaseg email-a:</label><br>

                <textarea name="sadrzaj" required class="novaDis"></textarea><br></br>

                <input type="submit" name="posalji email" value="Posaljite email" class="btn" />
            </form>
        </div>
    </center>

