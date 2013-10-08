<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Language
 *
 * @ORM\Entity
 * @ORM\Table(name="language")
 */
class Language
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
     * @ORM\Column(name="language", type="string", length=200, nullable=true)
     */
    private $language;


}
