<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity
 */
class Region
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_region", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="region_name_ru", type="string", length=255, nullable=false)
     */
    private $regionNameRu;

    /**
     * @var string
     *
     * @ORM\Column(name="region_name_en", type="string", length=255, nullable=false)
     */
    private $regionNameEn;


}
