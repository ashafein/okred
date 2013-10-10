<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technology
 *
 * @ORM\Entity
 * @ORM\Table(name="technology")
 */
class Technology
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
     * @ORM\Column(name="technology", type="string", length=200, nullable=true)
     */
    private $technology;



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
     * Set technology
     *
     * @param string $technology
     * @return Technology
     */
    public function setTechnology($technology)
    {
        $this->technology = $technology;

        return $this;
    }

    /**
     * Get technology
     *
     * @return string 
     */
    public function getTechnology()
    {
        return $this->technology;
    }
}
