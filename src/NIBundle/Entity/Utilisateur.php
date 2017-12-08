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


}

