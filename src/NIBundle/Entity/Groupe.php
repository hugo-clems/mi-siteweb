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
}

