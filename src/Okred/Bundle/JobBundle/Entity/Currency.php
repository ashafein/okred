<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity
 */
class Currency
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=200, nullable=true)
     */
    private $currency;


}
