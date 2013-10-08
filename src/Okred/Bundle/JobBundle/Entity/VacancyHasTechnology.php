<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * VacancyHasTechnology
 *
 * @ORM\Table(name="vacancy_has_technology")
 * @ORM\Entity
 */
class VacancyHasTechnology
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vacancy", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idVacancy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_technology", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTechnology;


}
