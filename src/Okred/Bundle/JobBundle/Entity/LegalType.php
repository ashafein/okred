<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegalType
 *
 * @ORM\Entity
 * @ORM\Table(name="legal_type")
 */
class LegalType
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
     * @ORM\Column(name="legal_type", type="string", length=200, nullable=true)
     */
    private $legalType;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set legalType
     *
     * @param string $legalType
     * @return LegalType
     */
    public function setLegalType($legalType)
    {
        $this->legalType = $legalType;

        return $this;
    }

    /**
     * Get legalType
     *
     * @return string 
     */
    public function getLegalType()
    {
        return $this->legalType;
    }
}
