<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Okred\Bundle\UserBundle\Entity\User;

/**
 * @ORM\Entity()
 * @ORM\Table(name="employer_info")
 */
class EmployerInfo
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;


    /**
     * @var User
     * @ORM\OneToOne(targetEntity="Okred\Bundle\UserBundle\Entity\User")
     */
    private $user;

    /**
     * @var string
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var integer
     * * @ORM\Column(name="residence_id", type="string", length=64, nullable=true)
     */
    private $residenceId;

    /**
     * @var integer
     * @ORM\Column(name="country_id", type="integer", nullable=true)
     */
    private $countryId;

    /**
     * @var integer
     * @ORM\Column(name="city_id", type="integer", nullable=true)
     */
    private $cityId;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Vacancy", mappedBy="employer")
     */
    private $vacancyList;

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="Company", mappedBy="employer")
     */
    private $companyList;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $value
     */
    public function setUser($value)
    {
        $this->user = $value;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $value
     */
    public function setAvatar($value)
    {
        $this->avatar = $value;
    }

    /**
     * @return Collection
     */
    public function getVacancyList()
    {
        return is_null($this->vacancyList) ? new ArrayCollection() : $this->vacancyList;
    }

    /**
     * @param Collection $value
     */
    public function setVacancyList(Collection $value)
    {
        $this->vacancyList = $value;
    }
}
