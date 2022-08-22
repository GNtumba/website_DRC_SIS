<?php
class RegisterVip
{
    private $prix;
    private $mail;
    private $nomCompagnie;
    private $siteWebCompagnie;
    private $telephoneCompagnie;
    private $cityCompagnie;
    private $paysCompagnie;
    private $natureCompagnie;


    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of nomCompagnie
     */
    public function getNomCompagnie()
    {
        return $this->nomCompagnie;
    }

    /**
     * Set the value of nomCompagnie
     *
     * @return  self
     */
    public function setNomCompagnie($nomCompagnie)
    {
        $this->nomCompagnie = $nomCompagnie;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of siteWebCompagnie
     */
    public function getSiteWebCompagnie()
    {
        return $this->siteWebCompagnie;
    }

    /**
     * Set the value of siteWebCompagnie
     *
     * @return  self
     */
    public function setSiteWebCompagnie($siteWebCompagnie)
    {
        $this->siteWebCompagnie = $siteWebCompagnie;

        return $this;
    }

    /**
     * Get the value of telephoneCompagnie
     */
    public function getTelephoneCompagnie()
    {
        return $this->telephoneCompagnie;
    }

    /**
     * Set the value of telephoneCompagnie
     *
     * @return  self
     */
    public function setTelephoneCompagnie($telephoneCompagnie)
    {
        $this->telephoneCompagnie = $telephoneCompagnie;

        return $this;
    }

    /**
     * Get the value of cityCompagnie
     */
    public function getCityCompagnie()
    {
        return $this->cityCompagnie;
    }

    /**
     * Set the value of cityCompagnie
     *
     * @return  self
     */
    public function setCityCompagnie($cityCompagnie)
    {
        $this->cityCompagnie = $cityCompagnie;

        return $this;
    }

    /**
     * Get the value of paysCompagnie
     */
    public function getPaysCompagnie()
    {
        return $this->paysCompagnie;
    }

    /**
     * Set the value of paysCompagnie
     *
     * @return  self
     */
    public function setPaysCompagnie($paysCompagnie)
    {
        $this->paysCompagnie = $paysCompagnie;

        return $this;
    }

    /**
     * Get the value of natureCompagnie
     */
    public function getNatureCompagnie()
    {
        return $this->natureCompagnie;
    }

    /**
     * Set the value of natureCompagnie
     *
     * @return  self
     */
    public function setNatureCompagnie($natureCompagnie)
    {
        $this->natureCompagnie = $natureCompagnie;

        return $this;
    }

    public function enregistrer($prix, $mail, $nomCompagnie, $siteWebCompagnie, $telephoneCompagnie, $cityCompagnie, $paysCompagnie, $natureCompagnie)
    {
        $connexion = mysqli_connect('localhost', 'root', 'root', 'drc-sis') or die('Erreur');
        $this->setPrix($prix);
        $this->setMail($mail);
        $this->setNomCompagnie($nomCompagnie);
        $this->setSiteWebCompagnie($siteWebCompagnie);
        $this->setTelephoneCompagnie($telephoneCompagnie);
        $this->setCityCompagnie($cityCompagnie);
        $this->setPaysCompagnie($paysCompagnie);
        $this->setNatureCompagnie($natureCompagnie);
        if ($this->getPrix() && $this->getMail() && $this->getNomCompagnie() && $this->getSiteWebCompagnie() && $this->getTelephoneCompagnie() && $this->getCityCompagnie() && $this->getPaysCompagnie() && $this->getNatureCompagnie()) {
            if (mysqli_query($connexion, 'INSERT INTO register_vip VALUES ("", "' . $this->getPrix() . '", "' . $this->getMail() . '", "' . $this->getNomCompagnie() . '", "' . $this->getSiteWebCompagnie() . '", "' . $this->getTelephoneCompagnie() . '", "' . $this->getCityCompagnie() . '", "' . $this->getPaysCompagnie() . '", "' . $this->getNatureCompagnie() . '")')) {
?>
                <script>
                    alert('Super');
                    document.location.replace('listecompagnies.php');
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Problème');
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert('Champs requis');
            </script>
<?php
        }
    }

    public function listeCompagnies()
    {
        $connexion = mysqli_connect('localhost', 'root', 'root', 'drc-sis') or die('Erreur');
        $compagnies = mysqli_query($connexion, 'SELECT *
                                                    FROM register_vip
                                                    ORDER BY nomCompagnie
                                                    ASC');
        while ($compagnie = mysqli_fetch_array($compagnies)) {
            $this->setNomCompagnie($compagnie['nomCompagnie']);
            echo $this->getNomCompagnie() . '<br>';
        }
    }
}
