<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Accesso con Sessione in PHP</title>
</head>

<body>
    <h1>Accesso con Sessione in PHP</h1>
    <?php
    // Inizilizziamo la variabile di sessione
    session_start();
    // Controlliamo se siamo già nello stato di utente loggato
    if (isset($_SESSION['username'])) {
        echo '<p>Ciao ' . $_SESSION['username'] . '!</p>';
        // Lascio anche un link alla pagina di logout
        echo '<a href="logout.php">Logout</a>';
    } else {
        ?>
        <form method="post" action="login.php">
            <label for="username">Nome utente:</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Accedi">
        </form>
    <?php
    }
    ?>
</body>

</html>