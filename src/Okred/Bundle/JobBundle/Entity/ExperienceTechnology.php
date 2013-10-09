<?php

namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExperienceHasTechnology
 */
class ExperienceHasTechnology
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $technologyId;


    /**
     * Set id
     *
     * @param integer $id
     * @return ExperienceHasTechnology
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set technologyId
     *
     * @param integer $technologyId
     * @return ExperienceHasTechnology
     */
    public function setTechnologyId($technologyId)
    {
        $this->technologyId = $technologyId;

        return $this;
    }

    /**
     * Get technologyId
     *
     * @return integer 
     */
    public function getTechnologyId()
    {
        return $this->technologyId;
    }
}
