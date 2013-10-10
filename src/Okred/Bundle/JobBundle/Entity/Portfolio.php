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

     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="workman_id", referencedColumnName="id")

     * @var integer
     *
     * @ORM\Column(name="portfolio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $portfolioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     */
    private $workman_id;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=1024, nullable=true)
     */
    private $fileName;


}
