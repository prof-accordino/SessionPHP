<?php
    // Aggianciamoci alla sessione già esistente (o creiamone una nuova)
    session_start();
    
    // controlliamo se l'utente ha inviato i dati di accesso
    if(isset($_POST['username']) && isset($_POST['password'])) {
        // eseguiamo la verifica dei dati dell'utente
        $username = $_POST['username'];
        $password = $_POST['password'];
        // generalmente qui si fa un controllo con una query sul database
        // attenzione, non memorizzare la password ma un suo HASH!
        if($username == 'admin' && $password == 'password') {
            // autenticazione riuscita, impostiamo la variabile di sessione
            $_SESSION['username'] = $username;
            header('Location: index.php');
        } else {
            // autenticazione fallita, mostriamo un messaggio di errore
            echo 'Username o password non validi';
        }
    } else {
        // redirect alla pagina di accesso
        header('Location: index.php');
    }
?>
