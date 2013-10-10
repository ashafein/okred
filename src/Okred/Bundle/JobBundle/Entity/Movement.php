<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movement
 *
 * @ORM\Entity
 * @ORM\Table(name="movement")
 */
class Movement
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
     * @ORM\Column(name="movement", type="string", length=200, nullable=true)
     */
    private $movement;



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
     * Set movement
     *
     * @param string $movement
     * @return Movement
     */
    public function setMovement($movement)
    {
        $this->movement = $movement;

        return $this;
    }

    /**
     * Get movement
     *
     * @return string 
     */
    public function getMovement()
    {
        return $this->movement;
    }
}
