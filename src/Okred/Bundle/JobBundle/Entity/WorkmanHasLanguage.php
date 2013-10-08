<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WorkmanHasLanguage
 *
 * @ORM\Table(name="workman_has_language")
 * @ORM\Entity
 */
class WorkmanHasLanguage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_workman", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idWorkman;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_language", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLanguage;


}
