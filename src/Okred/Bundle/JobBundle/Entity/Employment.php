<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employment
 *
 * @ORM\Entity
 * @ORM\Table(name="employment")
 */
class Employment
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
     * @ORM\Column(name="employment", type="string", length=200, nullable=true)
     */
    private $employment;


}
