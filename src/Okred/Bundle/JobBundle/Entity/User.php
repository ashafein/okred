<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=100, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=200, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=1024, nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=200, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="patronymic", type="string", length=200, nullable=true)
     */
    private $patronymic;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=200, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="birth_date", type="string", length=20, nullable=true)
     */
    private $birthDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=true)
     */
    private $idCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_city", type="integer", nullable=true)
     */
    private $idCity;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=20, nullable=true)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_visited_at", type="datetime", nullable=true)
     */
    private $lastVisitedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}
