<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Movement
 *
 * @ORM\Table(name="movement")
 * @ORM\Entity
 */
class Movement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_movement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMovement;

    /**
     * @var string
     *
     * @ORM\Column(name="movement", type="string", length=200, nullable=true)
     */
    private $movement;


}
