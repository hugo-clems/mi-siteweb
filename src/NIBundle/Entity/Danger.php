<?php

namespace NIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Danger
 *
 * @ORM\Table(name="danger")
 * @ORM\Entity(repositoryClass="NIBundle\Repository\DangerRepository")
 */
class Danger
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
     * @var int
     *
     * @ORM\Column(name="nombreNon", type="integer")
     */
    private $nombreNon;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text")
     */
    private $detail;

    /**
    * @ORM\ManyToOne(targetEntity="TypeDanger",inversedBy="dangerList")
    */
    private $typeDanger;

    /**
    * @ORM\ManyToOne(targetEntity="Localisation",inversedBy="dangerList")
    */
    private $localisation;

    public static function generateDanger($nombreNom, $detail, $typeDanger, $localisation) {
        $danger = new Danger();
        $danger->setNombreNon($nombreNom);
        $danger->setDetail($detail);
        $danger->setTypeDanger($typeDanger);
        $danger->setLocalisation($localisation);

        return $danger;
    }

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
     * Set nombreNon
     *
     * @param integer $nombreNon
     *
     * @return Danger
     */
    public function setNombreNon($nombreNon)
    {
        $this->nombreNon = $nombreNon;

        return $this;
    }

    /**
     * Get nombreNon
     *
     * @return int
     */
    public function getNombreNon()
    {
        return $this->nombreNon;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return Danger
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set typeDanger
     *
     * @param \NIBundle\Entity\TypeDanger $typeDanger
     *
     * @return Danger
     */
    public function setTypeDanger(\NIBundle\Entity\TypeDanger $typeDanger = null)
    {
        $this->typeDanger = $typeDanger;

        return $this;
    }

    /**
     * Get typeDanger
     *
     * @return \NIBundle\Entity\TypeDanger
     */
    public function getTypeDanger()
    {
        return $this->typeDanger;
    }

    /**
     * Set localisation
     *
     * @param \NIBundle\Entity\Localisation $localisation
     *
     * @return Danger
     */
    public function setLocalisation(\NIBundle\Entity\Localisation $localisation = null)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return \NIBundle\Entity\Localisation
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }
}
