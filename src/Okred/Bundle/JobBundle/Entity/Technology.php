<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Technology
 *
 * @ORM\Table(name="technology")
 * @ORM\Entity
 */
class Technology
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_technology", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTechnology;

    /**
     * @var string
     *
     * @ORM\Column(name="technology", type="string", length=200, nullable=true)
     */
    private $technology;


}
