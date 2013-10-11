<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="geo_country")
 */
class Country
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Region", mappedBy="country")
     */
    private $regions;


    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $value
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return Collection
     */
    public function getRegions()
    {
        return is_null($this->regions) ? new ArrayCollection() : $this->regions;
    }

    /**
     * @param Collection $value
     */
    public function setRegions(Collection $value)
    {
        $this->regions = $value;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add regions
     *
     * @param \Okred\Bundle\JobBundle\Entity\Region $regions
     * @return Country
     */
    public function addRegion(\Okred\Bundle\JobBundle\Entity\Region $regions)
    {
        $this->regions[] = $regions;

        return $this;
    }

    /**
     * Remove regions
     *
     * @param \Okred\Bundle\JobBundle\Entity\Region $regions
     */
    public function removeRegion(\Okred\Bundle\JobBundle\Entity\Region $regions)
    {
        $this->regions->removeElement($regions);
    }
}
