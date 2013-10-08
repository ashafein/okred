<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technology
 *
 * @ORM\Entity
 * @ORM\Table(name="technology")
 */
class Technology
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="technology_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $technologyId;


}
