<?php

namespace MainBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Application
 */
class Application
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $applied;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $occupation;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \MainBundle\Entity\Image
     */
    private $image;

    public function __construct()
    {
        $this->date = new \Datetime();
        $this->titles = new ArrayCollection();
    }

    /**
     * @var \MainBundle\Entity\Title
     */
    private $title;


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
     * Set applied
     *
     * @param boolean $applied
     *
     * @return Application
     */
    public function setApplied($applied)
    {
        $this->applied = $applied;

        return $this;
    }

    /**
     * Get applied
     *
     * @return bool
     */
    public function getApplied()
    {
        return $this->applied;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Application
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Application
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Application
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set occupation
     *
     * @param string $occupation
     *
     * @return Application
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Application
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Application
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Application
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set image
     *
     * @param \MainBundle\Entity\Image $image
     *
     * @return Application
     */
    public function setImage(\MainBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \MainBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set title
     *
     * @param \MainBundle\Entity\Title $title
     *
     * @return Application
     */
    public function setTitle(\MainBundle\Entity\Title $title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return \MainBundle\Entity\Title
     */
    public function getTitle()
    {
        return $this->title;
    }
}
