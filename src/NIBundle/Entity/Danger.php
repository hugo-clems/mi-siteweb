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
}

