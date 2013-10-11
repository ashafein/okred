<?php
namespace Okred\Bundle\JobBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Okred\Bundle\JobBundle\Entity\City;
use Okred\Bundle\JobBundle\Entity\Country;
use Okred\Bundle\JobBundle\Entity\Region;

class LoadGeoData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $data = array(
            'Россия' => array(
                'Москва и Московская область' => array(
                    'Москва',
                    'Апрелевка',
                    'Балашиха',
                    'Бронницы',
                    'Верея',
                    'Видное',
                    'Волоколамск',
                    'Воскресенск',
                    'Высоковск',
                    'Голицыно',
                    'Дедовск',
                    'Дзержинский',
                    'Дмитров',
                    'Долгопрудный',
                    'Домодедово',
                    'Дрезна',
                    'Дубна',
                    'Егорьевск',
                    'Железнодорожный',
                    'Жуковский',
                    'Зарайск',
                    'Звенигород',
                    'Ивантеевка',
                    'Истра',
                    'Кашира',
                    'Климовск',
                    'Клин',
                    'Коломна',
                    'Королёв',
                    'Котельники',
                    'Красноармейск',
                    'Красногорск',
                    'Краснозаводск',
                    'Краснознаменск',
                    'Кубинка',
                    'Куровское',
                    'Ликино-Дулёво',
                    'Лобня',
                    'Лосино-Петровский',
                    'Луховицы',
                    'Лыткарино',
                    'Люберцы',
                    'Можайск',
                    'Мытищи',
                    'Наро-Фоминск',
                    'Ногинск',
                    'Одинцово',
                    'Ожерелье',
                    'Озёры',
                    'Орехово-Зуево',
                    'Павловский Посад',
                    'Пересвет',
                    'Подольск',
                    'Протвино',
                    'Пушкино',
                    'Пущино',
                    'Раменское',
                    'Реутов',
                    'Рошаль',
                    'Руза',
                    'Сергиев Посад',
                    'Серпухов',
                    'Солнечногорск',
                    'Старая Купавна',
                    'Ступино',
                    'Талдом',
                    'Фрязино',
                    'Химки',
                    'Хотьково',
                    'Черноголовка',
                    'Чехов',
                    'Шатура',
                    'Щёлково',
                    'Электрогорск',
                    'Электросталь',
                    'Электроугли',
                    'Юбилейный',
                    'Яхрома',
                ),
                'Ленинградская область'       => array(
                    'Санкт-Петербург',
                )
            ),
        );
        foreach ($data as $countryName => $countryData) {
            $country = new Country();
            $country->setName($countryName);
            $manager->persist($country);
            foreach ($countryData as $regionName => $regionData) {
                $region = new Region();
                $region->setName($regionName);
                $region->setCountry($country);
                $manager->persist($region);
                foreach ($regionData as $cityName) {
                    $city = new City();
                    $city->setName($cityName);
                    $city->setRegion($region);
                    $manager->persist($city);
                }
            }
        }
        $manager->flush();
    }
}
