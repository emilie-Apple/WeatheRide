<?php

namespace WeatherideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activities
 */
class Activities
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $activity;

    /**
     * @var string
     */
    private $weather;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set activity
     *
     * @param string $activity
     * @return Activities
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return string 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set weather
     *
     * @param string $weather
     * @return Activities
     */
    public function setWeather($weather)
    {
        $this->weather = $weather;

        return $this;
    }

    /**
     * Get weather
     *
     * @return string 
     */
    public function getWeather()
    {
        return $this->weather;
    }
}
