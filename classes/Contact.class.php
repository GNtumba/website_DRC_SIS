<?php
class Contact
{
    private $name;
    private $mail;
    private $subject;
    private $message;

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Get the value of subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the value of subject
     *
     * @return  self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

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

    public function create($name, $mail, $subject, $message)
    {
        $connexion = mysqli_connect('localhost', 'root', 'root', 'drc-sis') or die('Erreur');
        $this->setName($name);
        $this->setMail($mail);
        $this->setSubject($subject);
        $this->setMessage($message);
        if ($this->getName() && $this->getMail() && $this->getSubject() && $this->getMessage()) {
            if (mysqli_query($connexion, 'INSERT INTO membres VALUES ("", "' . $this->getName() . '", "' . $this->getMail() . '", "' . $this->getSubject() . '", "' . $this->getMessage() . '")')) {
?>
                <script>
                    alert('Enregistré');
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Non enregistré');
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
}
