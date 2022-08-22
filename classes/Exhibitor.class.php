<?php
class Exhibitor
{
    private $information;
    private $text;
    private $email;
    private $title;
    private $firstName;
    private $lastName;
    private $jobTitle;
    private $compagnie;
    private $pays;
    private $telephoneNumber;
    private $telephone;
    private $workTelephone;
    private $aboutUs;
    private $personMaking;
    private $natureCompagnie;
    private $message;
    /**
     * Get the value of information
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set the value of information
     *
     * @return  self
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->title = $email;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of jobTitle
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set the value of jobTitle
     *
     * @return  self
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get the value of compagnie
     */
    public function getCompagnie()
    {
        return $this->compagnie;
    }

    /**
     * Set the value of compagnie
     *
     * @return  self
     */
    public function setCompagnie($compagnie)
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    /**
     * Get the value of pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of telephoneNumber
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * Set the value of telephoneNumber
     *
     * @return  self
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }

    /**
     * Get the value of telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of workTelephone
     */
    public function getWorkTelephone()
    {
        return $this->workTelephone;
    }

    /**
     * Set the value of workTelephone
     *
     * @return  self
     */
    public function setWorkTelephone($workTelephone)
    {
        $this->workTelephone = $workTelephone;

        return $this;
    }

    /**
     * Get the value of aboutUs
     */
    public function getAboutUs()
    {
        return $this->aboutUs;
    }

    /**
     * Set the value of aboutUs
     *
     * @return  self
     */
    public function setAboutUs($aboutUs)
    {
        $this->aboutUs = $aboutUs;

        return $this;
    }

    /**
     * Get the value of personMaking
     */
    public function getPersonMaking()
    {
        return $this->personMaking;
    }

    /**
     * Set the value of personMaking
     *
     * @return  self
     */
    public function setPersonMaking($personMaking)
    {
        $this->personMaking = $personMaking;

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

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }


    public function enregistrer($information, $text, $email, $title, $firstName, $lastName, $jobTitle, $compagnie, $telephoneNumber, $telephone, $workTelephone, $aboutUs, $personMaking, $natureCompagnie, $message)
    {
        $connexion = mysqli_connect('localhost', 'root', 'root', 'drc-sis') or die('Erreur');
        $this->setInformation($information);
        $this->setText($text);
        $this->setEmail($email);
        $this->setTitle($title);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setJobTitle($jobTitle);
        $this->setCompagnie($compagnie);
        $this->setTelephoneNumber($telephoneNumber);
        $this->setTelephone($telephone);
        $this->setWorkTelephone($workTelephone);
        $this->setAboutUs($aboutUs);
        $this->setPersonMaking($personMaking);
        $this->setNatureCompagnie($natureCompagnie);
        $this->setMessage($message);
        if ($this->getInformation() && $this->getText() && $this->getEmail() && $this->getTitle() && $this->getFirstName() && $this->getLastName() && $this->getJobTitle() && $this->getCompagnie()&& $this->getTelephoneNumber()&& $this->getTelephone()&& $this->getWorkTelephone()&& $this->getAboutUs()&& $this->getPersonMaking()&& $this->getNatureCompagnie()&& $this->getMessage()) {
            if (mysqli_query($connexion, 'INSERT INTO exhib VALUES ("", "' . $this->getInformation() . '", "' . $this->getText() . '", "' . $this->getEmail() . '", "' . $this->getTitle() . '", "' . $this->getFirstName() . '", "' . $this->getLastName() . '", "' . $this->getJobTitle() . '", "' . $this->getCompagnie() . '", "' . $this->getTelephoneNumber() . '", "' . $this->getTelephone() . '", "' . $this->getWorkTelephone() . '", "' . $this->getAboutUs() . '", "' . $this->getPersonMaking() . '", "' . $this->getNatureCompagnie() . '", "' . $this->getMessage() . '")')) {
?>
                <script>
                    alert('Super');
                    document.location.replace('listeEmail.php');
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

    public function listeEmail()
    {
        $connexion = mysqli_connect('localhost', 'root', 'root', 'drc-sis') or die('Erreur');
        $emails = mysqli_query($connexion, 'SELECT *
                                                    FROM exhib
                                                    ORDER BY email
                                                    ASC');
        while ($email = mysqli_fetch_array($emails)) {
            $this->setEmail($email['email']);
            echo $this->getEmail() . '<br>';
        }
    }
}
