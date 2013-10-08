<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LegalType
 *
 * @ORM\Table(name="legal_type")
 * @ORM\Entity
 */
class LegalType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_legal_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLegalType;

    /**
     * @var string
     *
     * @ORM\Column(name="legal_type", type="string", length=200, nullable=true)
     */
    private $legalType;


}
