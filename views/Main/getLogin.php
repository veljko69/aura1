
<?php
?>

<div class="registracija">

    <form action="postlogin" method="post">


        <div>

            <label for="input_username" >Username:</label>
            <input type="text" id="input_username" name="log_username" required class="form"
                   placeholder="Unesite korisnicko ime">
        </div>
        <br>

        <div>
            <label for="input_password" >Password:</label>
            <input type="text" id="input_password" name="log_password" required class="form"
                   placeholder="Unesite lozinku">
        </div>

        <br>

        <div>
            <button type="submit" class="form" id="button">
                Login
            </button>
        </div>

    </form>



</div>

