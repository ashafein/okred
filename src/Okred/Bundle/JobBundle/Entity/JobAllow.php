<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobAllow
 *
 * @ORM\Table(name="job_allow")
 * @ORM\Entity
 */
class JobAllow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $workmanId;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $countryId;



    /**
     * Set workmanId
     *
     * @param integer $workmanId
     * @return WorkmanJobAllow
     */
    public function setWorkmanId($workmanId)
    {
        $this->workmanId = $workmanId;

        return $this;
    }

    /**
     * Get workmanId
     *
     * @return integer 
     */
    public function getWorkmanId()
    {
        return $this->workmanId;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return WorkmanJobAllow
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
}
