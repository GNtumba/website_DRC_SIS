<?php
function connexion($name,$email,$subject, $message)
{
    $connexion = mysqli_connect('localhost', 'root', 'root') or die('Erreur');
    $membres = mysqli_query($connexion, 'SELECT *
                                        FROM membres
                                        WHERE name = "' . $name . '"
                                        AND email = "' . $email . '"');
    if (mysqli_num_rows($membres) == 1) {
        if ($membres = mysqli_fetch_array($membres)) {
?>
            <script>
                alert('Bonjour <?php echo $email; ?>');
                document.location.replace('xyz.php');
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Informations de compte non chargées');
            </script>
<?php
        }
    } else {
        echo 'Adresse mail ou mot de passe incorrect';
    }
}
