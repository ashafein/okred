<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BusinessTrip
 *
 * @ORM\Table(name="business_trip")
 * @ORM\Entity
 */
class BusinessTrip
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_business_trip", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBusinessTrip;

    /**
     * @var string
     *
     * @ORM\Column(name="business_trip", type="string", length=200, nullable=true)
     */
    private $businessTrip;


}
