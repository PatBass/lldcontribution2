<?php

namespace MainBundle\Entity;

/**
 * Title
 */
class Title
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     *
     * @return Title
     */
    public function setName($name)
    {
        $this->mister = $name;

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

}
