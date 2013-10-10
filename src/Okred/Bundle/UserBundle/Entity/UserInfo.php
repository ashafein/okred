<?php
namespace Okred\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_user_info")
 */
class UserInfo extends BaseUser
{

    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    protected $id;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_of_birth", type="datetime", nullable=true)
     */
    protected $dateOfBirth;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    protected $gender = UserInterface::GENDER_UNKNOWN; // set the default to unknown

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    protected $locale;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $timezone;


    /**
     * @var integer
     *
     * * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $residence_id;

    /**
     * @var integer
     *
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $citizenship_id;


    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=1024, nullable=true)
     */
    protected $avatar;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_visited_at", type="datetime", nullable=true)
     */
    protected $lastVisitedAt;


     /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=true)
     */
    protected $countryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer", nullable=true)
     */
    protected $cityId;


}
