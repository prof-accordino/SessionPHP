<?php
    session_start();
    // eliminiamo la variabile di sessione (non necessario in questo caso ma più sicuro)
    session_unset();
    // distruggiamo la sessione
    session_destroy();
    // reindirizziamo l'utente alla pagina di login
    header('Location: index.php');
?>
