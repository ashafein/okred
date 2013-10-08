<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyType
 *
 * @ORM\Entity
 * @ORM\Table(name="company_type")
 */
class CompanyType
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
     * @ORM\Column(name="company_type", type="string", length=200, nullable=true)
     */
    private $companyType;


}
