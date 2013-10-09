<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="business_trip")
 */
class BusinessTrip
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="business_trip", type="string", length=200, nullable=true)
     */
    private $businessTrip;



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
     * Set businessTrip
     *
     * @param string $businessTrip
     * @return BusinessTrip
     */
    public function setBusinessTrip($businessTrip)
    {
        $this->businessTrip = $businessTrip;

        return $this;
    }

    /**
     * Get businessTrip
     *
     * @return string 
     */
    public function getBusinessTrip()
    {
        return $this->businessTrip;
    }
}
