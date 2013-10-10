<?php
namespace Okred\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_user_user")
 */
class User extends BaseUser
{
    public function setEmail($value)
    {
        $this->email = $value;
        $this->username = $value;
        return $this;
    }

    public function setEmailCanonical($value)
    {
        $this->emailCanonical = $value;
        $this->usernameCanonical = $value;
    }

    public function getShortName()
    {
        if ($this->firstname) {
            $name = $this->firstname;
            return $this->lastname ? ($name . ' ' . $this->lastname) : $name;
        } else {
            return $this->username;
        }
    }

    public function getFullname()
    {
        return implode(' ', array_filter(array($this->firstname, $this->lastname, $this->middlename)));
    }
}
