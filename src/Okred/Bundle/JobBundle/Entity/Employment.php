<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Employment
 *
 * @ORM\Table(name="employment")
 * @ORM\Entity
 */
class Employment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_employment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmployment;

    /**
     * @var string
     *
     * @ORM\Column(name="employment", type="string", length=200, nullable=true)
     */
    private $employment;


}
