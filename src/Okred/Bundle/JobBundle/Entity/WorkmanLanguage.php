<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkmanHasLanguage
 *
 * @ORM\Table(name="workman_has_language")
 * @ORM\Entity
 */
class WorkmanHasLanguage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $workmanId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;



    /**
     * Set workmanId
     *
     * @param integer $workmanId
     * @return WorkmanHasLanguage
     */
    public function setWorkmanId($workmanId)
    {
        $this->workmanId = $workmanId;

        return $this;
    }

    /**
     * Get workmanId
     *
     * @return integer 
     */
    public function getWorkmanId()
    {
        return $this->workmanId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     * @return WorkmanHasLanguage
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer 
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }
}
