<?php

namespace NIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDanger
 *
 * @ORM\Table(name="type_danger")
 * @ORM\Entity(repositoryClass="NIBundle\Repository\TypeDangerRepository")
 */
class TypeDanger
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="rayon", type="integer")
     */
    private $rayon;

    /**
     * @var string
     *
     * @ORM\Column(name="pageInstruction", type="string", length=255)
     */
    private $pageInstruction;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
    * @ORM\OneToMany(targetEntity="Danger",mappedBy="typeDanger")
    *
    */
    private $dangerList;

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
     * @return TypeDanger
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
     * Set description
     *
     * @param string $description
     *
     * @return TypeDanger
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set rayon
     *
     * @param integer $rayon
     *
     * @return TypeDanger
     */
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get rayon
     *
     * @return int
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set pageInstruction
     *
     * @param string $pageInstruction
     *
     * @return TypeDanger
     */
    public function setPageInstruction($pageInstruction)
    {
        $this->pageInstruction = $pageInstruction;

        return $this;
    }

    /**
     * Get pageInstruction
     *
     * @return string
     */
    public function getPageInstruction()
    {
        return $this->pageInstruction;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return TypeDanger
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }
}

