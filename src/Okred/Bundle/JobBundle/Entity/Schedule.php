<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Table(name="schedule")
 * @ORM\Entity
 */
class Schedule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_schedule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSchedule;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule", type="string", length=200, nullable=true)
     */
    private $schedule;


}
