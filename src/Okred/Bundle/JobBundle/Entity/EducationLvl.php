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


}
