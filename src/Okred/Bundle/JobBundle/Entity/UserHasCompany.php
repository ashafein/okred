<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UserHasCompany
 *
 * @ORM\Table(name="user_has_company")
 * @ORM\Entity
 */
class UserHasCompany
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_company", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCompany;


}
