<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio")
 * @ORM\Entity
 */
class Portfolio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_portfolio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPortfolio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_workman", type="integer", nullable=false)
     */
    private $idWorkman;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=1024, nullable=true)
     */
    private $fileName;


}
