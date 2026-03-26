<div class="login-container">

    <h1>Inloggen</h1>

    <div class="no-account-container">
        <p>Nog geen account?</p>
        <a href="index.php?page=register">Aanmelden</a>
    </div>

    <form class="login-form" method="POST" action="php/login.php">

        <label for="username">Gebruikersnaam</label>
        <input type="username" id="username" name="username">

        <label for="password">Wachtwoord</label>
        <input type="password" id="password" name="password">

        <button type="submit">Inloggen</button>
    </form>

    <a class="forgot-password" href="#">Wachtwoord vergeten?</a>

</div>