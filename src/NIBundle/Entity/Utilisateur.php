<?php

namespace NIBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="NIBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var object
     *
     * @ORM\OneToMany(targetEntity="Message", mappedBy="utilisateur")
     */
    private $messagesList;

    /**
     * @var object
     *
     * @ORM\OneToMany(targetEntity="Evenement", mappedBy="organisateur")
     */
    private $evenementsListe;


    /**
     * @var int
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="utilisateursList")
     */
    private $groupesList;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Add messagesList
     *
     * @param \NIBundle\Entity\Message $messagesList
     *
     * @return Utilisateur
     */
    public function addMessagesList(\NIBundle\Entity\Message $messagesList)
    {
        $this->messagesList[] = $messagesList;

        return $this;
    }

    /**
     * Remove messagesList
     *
     * @param \NIBundle\Entity\Message $messagesList
     */
    public function removeMessagesList(\NIBundle\Entity\Message $messagesList)
    {
        $this->messagesList->removeElement($messagesList);
    }

    /**
     * Get messagesList
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessagesList()
    {
        return $this->messagesList;
    }

    /**
     * Add evenementsListe
     *
     * @param \NIBundle\Entity\Evenement $evenementsListe
     *
     * @return Utilisateur
     */
    public function addEvenementsListe(\NIBundle\Entity\Evenement $evenementsListe)
    {
        $this->evenementsListe[] = $evenementsListe;

        return $this;
    }

    /**
     * Remove evenementsListe
     *
     * @param \NIBundle\Entity\Evenement $evenementsListe
     */
    public function removeEvenementsListe(\NIBundle\Entity\Evenement $evenementsListe)
    {
        $this->evenementsListe->removeElement($evenementsListe);
    }

    /**
     * Get evenementsListe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvenementsListe()
    {
        return $this->evenementsListe;
    }

    /**
     * Add groupesList
     *
     * @param \NIBundle\Entity\Utilisateur $groupesList
     *
     * @return Utilisateur
     */
    public function addGroupesList(\NIBundle\Entity\Utilisateur $groupesList)
    {
        $this->groupesList[] = $groupesList;

        return $this;
    }

    /**
     * Remove groupesList
     *
     * @param \NIBundle\Entity\Utilisateur $groupesList
     */
    public function removeGroupesList(\NIBundle\Entity\Utilisateur $groupesList)
    {
        $this->groupesList->removeElement($groupesList);
    }

    /**
     * Get groupesList
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupesList()
    {
        return $this->groupesList;
    }
}
