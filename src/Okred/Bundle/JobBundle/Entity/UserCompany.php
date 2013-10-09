<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserHasCompany
 *
 * @ORM\Entity
 * @ORM\Table(name="user_has_company")
 */
class UserCompany
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_company", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCompany;



    /**
     * Set id
     *
     * @param integer $id
     * @return UserHasCompany
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set idCompany
     *
     * @param integer $idCompany
     * @return UserHasCompany
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;

        return $this;
    }

    /**
     * Get idCompany
     *
     * @return integer 
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }
}
