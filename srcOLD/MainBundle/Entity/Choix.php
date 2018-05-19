<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choix
 *
 * @ORM\Table(name="choix")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\ChoixRepository")
 */
class Choix
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
     * @ORM\Column(name="proposition", type="string", length=255)
     */
    private $proposition;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count = 0;


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
     * Set proposition
     *
     * @param string $proposition
     *
     * @return Choix
     */
    public function setProposition($proposition)
    {
        $this->proposition = $proposition;

        return $this;
    }

    /**
     * Get proposition
     *
     * @return string
     */
    public function getProposition()
    {
        return $this->proposition;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return Choix
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    public function __toString() {
        return $this->name;
    }
}
