<?php
namespace Okred\Bundle\UserBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as FOSUser;
use Sonata\UserBundle\Model\UserInterface;

/**
 * @ORM\MappedSuperclass()
 * @ORM\HasLifecycleCallbacks()
 */
abstract class BaseUser extends FOSUser implements UserInterface
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
     * @ORM\Column(name="two_step_code", type="string", length=255, nullable=true)
     */
   protected $twoStepVerificationCode;

    /**
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the expiration date
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Returns the credentials expiration date
     *
     * @return \DateTime
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }

    /**
     * Sets the credentials expiration date
     *
     * @param \DateTime|null $date
     * @return \FOS\UserBundle\Model\User|void
     */
    public function setCredentialsExpireAt(\DateTime $date = null)
    {
        $this->credentialsExpireAt = $date;
    }

    /**
     * Returns a string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getUsername() ? : '-';
    }

    /**
     * Sets the user groups
     *
     * @param array $groups
     */
    public function setGroups($groups)
    {
        foreach ($groups as $group) {
            $this->addGroup($group);
        }
    }

    /**
     * Sets the two-step verification code
     *
     * @param string $twoStepVerificationCode
     * @return string|void
     */
    public function setTwoStepVerificationCode($twoStepVerificationCode)
    {
        $this->twoStepVerificationCode = $twoStepVerificationCode;
    }

    /**
     * Returns the two-step verification code
     *
     * @return string
     */
    public function getTwoStepVerificationCode()
    {
         return $this->twoStepVerificationCode;
    }

    /**
     * Hook on pre-persist operations
     * @ORM\PrePersist()
     */
    public function prePersist()
    {
        $this->createdAt = new DateTime;
        $this->updatedAt = new DateTime;
    }

    /**
     * Hook on pre-update operations
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this->updatedAt = new DateTime;
    }
}
