<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EducationLvl
 *
 * @ORM\Entity
 * @ORM\Table(name="education_lvl")
 */
class EducationLvl
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
     * @ORM\Column(name="education_lvl", type="string", length=200, nullable=true)
     */
    private $educationLvl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;



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
     * Set educationLvl
     *
     * @param string $educationLvl
     * @return EducationLvl
     */
    public function setEducationLvl($educationLvl)
    {
        $this->educationLvl = $educationLvl;

        return $this;
    }

    /**
     * Get educationLvl
     *
     * @return string 
     */
    public function getEducationLvl()
    {
        return $this->educationLvl;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return EducationLvl
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }
}
