<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="geo_region")
 */
class Region
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
     * @var Region
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="regions")
     */
    private $country;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="City", mappedBy="region")
     */
    private $cities;


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
     * @return Region
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $value
     */
    public function setCountry(Country $value)
    {
        $this->country = $value;
    }

    /**
     * @return Collection
     */
    public function getCities()
    {
        return is_null($this->cities) ? new ArrayCollection() : $this->cities;
    }

    /**
     * @param Collection $value
     */
    public function setCities(Collection $value)
    {
        $this->cities = $value;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cities
     *
     * @param \Okred\Bundle\JobBundle\Entity\City $cities
     * @return Region
     */
    public function addCity(\Okred\Bundle\JobBundle\Entity\City $cities)
    {
        $this->cities[] = $cities;

        return $this;
    }

    /**
     * Remove cities
     *
     * @param \Okred\Bundle\JobBundle\Entity\City $cities
     */
    public function removeCity(\Okred\Bundle\JobBundle\Entity\City $cities)
    {
        $this->cities->removeElement($cities);
    }
}
