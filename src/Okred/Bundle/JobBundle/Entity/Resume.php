<?php

// src/Okred/Bundle/JobBundle/Entity/Resume.php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="resume")
 * @ORM\Entity
 */

class Resume
{
    /**
     * @var integer
     * @ORM\Column(type="bigint")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     */
    private $workmanId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="avatar", type="boolean", nullable=true)
     */
    private $avatar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="birth_date", type="boolean", nullable=true)
     */
    private $birthDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=true)
     */
    private $gender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="residence", type="boolean", nullable=true)
     */
    private $residence;

    /**
     * @var integer
     *
     * @ORM\Column(name="movement_id", type="integer", nullable=false)
     */
    private $movementId;

    /**
     * @var integer
     *
     * @ORM\Column(name="business_trip_id", type="integer", nullable=false)
     */
    private $businessTripId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="citizenship", type="boolean", nullable=true)
     */
    private $citizenship;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_allow", type="boolean", nullable=true)
     */
    private $jobAllow;

    /**
     * @var integer
     *
     * @ORM\Column(name="time_to_arrive", type="integer", nullable=true)
     */
    private $timeToArriveId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="email", type="boolean", nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="phone", type="boolean", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="position_wanted", type="string", length=1024, nullable=true)
     */
    private $positionWanted;

    /**
     * @var integer
     *
     * @ORM\Column(name="scope_id", type="integer", nullable=false)
     */
    private $scopeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary", type="integer", nullable=true)
     */
    private $salary;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_id", type="integer", nullable=false)
     */
    private $currencyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="employment_id", type="integer", nullable=false)
     */
    private $employmentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="schedule_id", type="integer", nullable=false)
     */
    private $scheduleId;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_info", type="string", length=1024, nullable=true)
     */
    private $additionalInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

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

