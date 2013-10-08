<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EducationLvl
 *
 * @ORM\Table(name="education_lvl")
 * @ORM\Entity
 */
class EducationLvl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_education_lvl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEducationLvl;

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
