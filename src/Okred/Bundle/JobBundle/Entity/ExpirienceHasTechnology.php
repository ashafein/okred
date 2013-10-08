<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ExpirienceHasTechnology
 *
 * @ORM\Table(name="expirience_has_technology")
 * @ORM\Entity
 */
class ExpirienceHasTechnology
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_expirience", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpirience;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_technology", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTechnology;


}
