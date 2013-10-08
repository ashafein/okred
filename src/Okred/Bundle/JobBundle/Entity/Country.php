<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity
 */
class Country
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="name_ru", type="string", length=200, nullable=true)
     */
    private $nameRu;

    /**
     * @var string
     *
     * @ORM\Column(name="name_en", type="string", length=200, nullable=true)
     */
    private $nameEn;


}
