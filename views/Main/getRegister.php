<?php
require_once 'views/_global/header.php';
?>



<div class="reg">
<div class="registracija">

    <form action="http://localhost/aura1/postregister" method="POST">

    <div>
        <label for="input_email" >E-mail:</label>
        <input type="email" id="input_email" name="reg_email" required class="form"
        placeholder="Unesite svoju E-mail adresu o ovo polje">
    </div>
<br>
        <div>

            <label for="input_forename" >Forename:</label>
            <input type="text" id="input_forename" name="reg_forename" required class="form"
                   placeholder="Unesite svoje ime">
        </div>
        <br>

        <div>

            <label for="input_surname" >Surname:</label>
            <input type="text" id="input_surname" name="reg_surname" required class="form"
                   placeholder="Unesite svoje prezime ">
        </div>
        <br>

        <div>

        <label for="input_username" >Username:</label>
        <input type="text" id="input_username" name="reg_username" required class="form"
               placeholder="Unesite zeljeno korisnicko ime">
    </div>
        <br>

    <div>
        <label for="input_password_1" >Password:</label>
        <input type="password" id="input_password_1" name="reg_password1" required class="form"
               placeholder="Unesite zeljenu lozinku">
    </div>
        <br>

    <div>

        <label for="input_password_2" >Repeat your password:</label>
        <input type="text" id="input_password_2" name="reg_password2" required class="form"
               placeholder="Unesite zeljenu lozinku jos jednom">

    </div>
        <br>

        <div>
         <button type="submit" class="form" id="button">
             Register
         </button>
     </div>

    </form>



</div>
</div>
</body>
</html>