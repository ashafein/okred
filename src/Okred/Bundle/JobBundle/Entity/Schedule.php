<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Entity
 * @ORM\Table(name="schedule")
 */
class Schedule
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
     * @ORM\Column(name="schedule", type="string", length=200, nullable=true)
     */
    private $schedule;


}
