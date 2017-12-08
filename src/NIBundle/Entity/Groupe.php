<?php

namespace NIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="NIBundle\Repository\GroupeRepository")
 */
class Groupe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var object
     *
     * @ORM\ManyToMany(targetEntity="Message", mappedBy="message")
     */
    private $messagesList;

    /**
     * @var object
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", inversedBy="groupesList")
     * @ORM\JoinTable(name="groupes_utilisateurs")
     */
    private $utilisateursList;

    /**
     * @var object
     *@ORM\ManyToOne(targetEntity="Evenement", inversedBy="groupeList")
     * @ORM\JoinColumn(name="evenement", referencedColumnName="id")
     */
    private $evenement;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Groupe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messagesList = new \Doctrine\Common\Collections\ArrayCollection();
        $this->utilisateursList = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add messagesList
     *
     * @param \NIBundle\Entity\Message $messagesList
     *
     * @return Groupe
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
     * Add utilisateursList
     *
     * @param \NIBundle\Entity\Utilisateur $utilisateursList
     *
     * @return Groupe
     */
    public function addUtilisateursList(\NIBundle\Entity\Utilisateur $utilisateursList)
    {
        $this->utilisateursList[] = $utilisateursList;

        return $this;
    }

    /**
     * Remove utilisateursList
     *
     * @param \NIBundle\Entity\Utilisateur $utilisateursList
     */
    public function removeUtilisateursList(\NIBundle\Entity\Utilisateur $utilisateursList)
    {
        $this->utilisateursList->removeElement($utilisateursList);
    }

    /**
     * Get utilisateursList
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtilisateursList()
    {
        return $this->utilisateursList;
    }

    /**
     * Set evenement
     *
     * @param \NIBundle\Entity\Evenement $evenement
     *
     * @return Groupe
     */
    public function setEvenement(\NIBundle\Entity\Evenement $evenement = null)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \NIBundle\Entity\Evenement
     */
    public function getEvenement()
    {
        return $this->evenement;
    }
}
