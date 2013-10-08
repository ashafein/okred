<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Entity
 * @ORM\Table(name="currency")
 */
class Currency
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
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=200, nullable=true)
     */
    private $symbol;

}
