<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeToArrive
 *
 * @ORM\Entity
 * @ORM\Table(name="time_to_arrive")
 */
class TimeToArrive
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
     * @ORM\Column(name="time_to_arrive", type="string", length=200, nullable=true)
     */
    private $timeToArrive;



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
     * Set timeToArrive
     *
     * @param string $timeToArrive
     * @return TimeToArrive
     */
    public function setTimeToArrive($timeToArrive)
    {
        $this->timeToArrive = $timeToArrive;

        return $this;
    }

    /**
     * Get timeToArrive
     *
     * @return string 
     */
    public function getTimeToArrive()
    {
        return $this->timeToArrive;
    }
}
