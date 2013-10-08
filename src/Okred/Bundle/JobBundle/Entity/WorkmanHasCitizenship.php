<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkmanHasCitizenship
 *
 * @ORM\Table(name="workman_has_citizenship")
 * @ORM\Entity
 */
class WorkmanHasCitizenship
{
    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $workmanId;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $countryId;


}
