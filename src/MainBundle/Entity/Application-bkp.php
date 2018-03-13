<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Application 
 *
 * @ORM\Table(name="application ")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Application Repository")
 */

class Application 
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
     * @var bool
     * @ORM\Column(name="applied", type="boolean"
     *
     */
    private $applied = true;

    /**
     * @var string
     * @ORM\Column(name="name" type="string" length=100)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="email" type="string" length=100 unique=true)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="phone" type="string" length=14)
     */
    private $phone;

    /**
     * @var string
     * @ORM\Column(name="position" type="string" length=100)
     */
    private $position;

    /**
     * @var string
     * @ORM\Column(name="country" type="string")
     */
    private $country;

    /**
     * @var
     * @ORM\Column(name="message" type="text")
     */
    protected $message;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="MainBundle\Entity\Image" cascade={"persist"})
     */
    private $image;

    /**
     * @var
     * @ORM\Column(name="date" type="datetime")
     */
    private $date;

    public function __construct()
    {
        $this->date = new \Datetime();
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
}

