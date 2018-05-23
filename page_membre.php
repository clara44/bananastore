    <?php
    
    session_start ();

    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {

    	echo '<html>';
    	echo '<head>';
    	echo '<title>Page de notre section membre</title>';
    	echo '</head>';

    	echo '<body>';

    	echo 'Votre login est '.$_SESSION['email'].' et votre mot de passe est '.$_SESSION['password'].'.';
    	echo '<br />';

    	
    	echo '<a href="./logout.php"><button>Déconnection</button></a>';
    }
    else {
    	echo "nom d'utilisateur ou  mot de passe non reconnu";
    }
    ?>

