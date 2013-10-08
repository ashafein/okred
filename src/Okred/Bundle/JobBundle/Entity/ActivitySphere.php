<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Область деятельности компании. Справочник.
 * @ORM\Entity
 * @ORM\Table(name="activity_sphere")
 */
class ActivitySphere
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="scope", type="string", length=200, nullable=true)
     */
    private $scope;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $value
     */
    public function setScope($value)
    {
        $this->scope = $value;
    }
}
