<?php
namespace Okred\Bundle\JobBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Okred\Bundle\UserBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="candidate_info")
 */
class CandidateInfo
{
    const GENDER_UNKNOWN = 0;
    const GENDER_FEMALE = 1;
    const GENDER_MALE = 2;

    const TRANSFER_IMPOSSIBLE = 0;
    const TRANSFER_POSSIBLE = 1;
    const TRANSFER_DESIRED = 2;

    const TRIP_NEVER = 0;
    const TRIP_READY = 1;
    const TRIP_SOMETIMES = 2;

    const TIME_TO_OFFICE_ANY = 0;
    const TIME_TO_OFFICE_HOUR = 1;
    const TIME_TO_OFFICE_HOUR_AND_HALF = 2;

    /**
     * @var User
     * @ORM\OneToOne(targetEntity="Okred\Bundle\UserBundle\Entity\User")
     * @ORM\Id()
     */
    private $user;

    /**
     * @var int
     * @ORM\Column(type="smallint")
     */
    private $gender = CandidateInfo::GENDER_UNKNOWN;

    /**
     * @var bool
     * @ORM\Column(name="bitrh_date_hide", type="boolean")
     */
    private $birthDateHide = false;

    /**
     * @var DateTime
     * @ORM\Column(name="birth_date", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var string
     * @ORM\Column(type="string", length=11, nullable=true)
     */
    private $phone1;

    /**
     * @var string
     * @ORM\Column(type="string", length=11, nullable=true)
     */
    private $phone2;

    /**
     * @var string
     * @ORM\Column(type="string", length=11, nullable=true)
     */
    private $phone3;

    /**
     * @var City
     * @ORM\ManyToOne(targetEntity="City")
     */
    private $city;

    /**
     * @var int
     * @ORM\Column(type="smallint")
     */
    private $transfer;

    /**
     * @var int
     * @ORM\Column(type="smallint")
     */
    private $trip;

    /**
     * @var int
     * @ORM\Column(name="time_to_office", type="smallint")
     */
    private $timeToOffice;

    /**
     * @var Country
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumn(name="citizen_country_id")
     */
    private $citizenship;

    /**
     * @var Country
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumn(name="work_permit_country_id")
     */
    private $workPermit;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Resume", mappedBy="candidate")
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

    /**
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param int $value
     */
    public function setGender($value)
    {
        $this->gender = $value;
    }

    /**
     * @return boolean
     */
    public function getBirthDateHide()
    {
        return $this->birthDateHide;
    }

    /**
     * @param boolean $value
     */
    public function setBirthDateHide($value)
    {
        $this->birthDateHide = $value;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param DateTime $value
     */
    public function setBirthDate($value)
    {
        $this->birthDate = $value;
    }

    /**
     * @return string
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * @param string $value
     */
    public function setPhone1($value)
    {
        $this->phone1 = $value;
    }

    /**
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * @param string $value
     */
    public function setPhone2($value)
    {
        $this->phone2 = $value;
    }

    /**
     * @return string
     */
    public function getPhone3()
    {
        return $this->phone3;
    }

    /**
     * @param string $value
     */
    public function setPhone3($value)
    {
        $this->phone3 = $value;
    }

    /**
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param City $value
     */
    public function setCity($value)
    {
        $this->city = $value;
    }

    /**
     * @return int
     */
    public function getTransfer()
    {
        return $this->transfer;
    }

    /**
     * @param int $value
     */
    public function setTransfer($value)
    {
        $this->transfer = $value;
    }

    /**
     * @return int
     */
    public function getTrip()
    {
        return $this->trip;
    }

    /**
     * @param int $value
     */
    public function setTrip($value)
    {
        $this->trip = $value;
    }

    /**
     * @return int
     */
    public function getTimeToOffice()
    {
        return $this->timeToOffice;
    }

    /**
     * @param int $value
     */
    public function setTimeToOffice($value)
    {
        $this->timeToOffice = $value;
    }

    /**
     * @return Country
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * @param Country $value
     */
    public function setCitizenship($value)
    {
        $this->citizenship = $value;
    }

    /**
     * @return Country
     */
    public function getWorkPermit()
    {
        return $this->workPermit;
    }

    /**
     * @param Country $value
     */
    public function setWorkPermit($value)
    {
        $this->workPermit = $value;
    }
}
