<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Okred\Bundle\UserBundle\Entity\User;

/**
 * @ORM\Entity()
 * @ORM\Table(name="candidate_info")
 */
class CandidateInfo
{
    /**
     * @var User
     * @ORM\OneToOne(targetEntity="Okred\Bundle\UserBundle\Entity\User")
     * @ORM\Id()
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
     * @ORM\Column(name="citizenship_id", type="string", length=64, nullable=true)
     */
    private $citizenshipId;

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
     * @ORM\ManyToMany(targetEntity="Resume", mappedBy="candidate")
     */
    private $resumeList;

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
    public function getResumeList()
    {
        return is_null($this->resumeList) ? new ArrayCollection() : $this->resumeList;
    }

    /**
     * @param Collection $value
     */
    public function setResumeList(Collection $value)
    {
        $this->resumeList = $value;
    }
}
