<?php
namespace Okred\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_user_user")
 */
class User extends BaseUser
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $phone;


    /**
     * @var string
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $firstname;

    /**
     * @var string
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $lastname;

    /**
     * @var string
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $middlename;

    /**
     * @var DateTime
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var DateTime
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;

    /**
     * @var integer
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $emailverified;


    /**
     *
     * @ORM\OneToOne(targetEntity = "UserInfo")
     * joinColumns={@ORM\JoinColumn(name="id", referencedColumnName="id")},
     *
     */
    protected $userInfo;


    /**
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFullname()
    {
        return sprintf("%s %s", $this->getFirstname(), $this->getLastname());
    }

    /**
     * @return array
     */
    public function getRealRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRealRoles(array $roles)
    {
        $this->setRoles($roles);
    }

}
