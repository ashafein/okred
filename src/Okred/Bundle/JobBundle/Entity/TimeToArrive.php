<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TimeToArrive
 *
 * @ORM\Table(name="time_to_arrive")
 * @ORM\Entity
 */
class TimeToArrive
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_time_to_arrive", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTimeToArrive;

    /**
     * @var string
     *
     * @ORM\Column(name="time_to_arrive", type="string", length=200, nullable=true)
     */
    private $timeToArrive;


}
