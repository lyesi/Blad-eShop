<?php

namespace App\DataFixtures;

use App\Entity\Item;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ItemFixtures extends Fixture implements DependentFixtureInterface
{

    const ITEMS = [
        'Sabre Laser' => [
                            'price' => 220,
                            'state' => 'Bon état',
                            'localisation' => 'Étoile Noire',
                            'description' => 'Le sabre laser n’est ni plus ni moins qu’un sabre qui coupe beaucoup plus qu’une simple lame. C’est super pour terrasser ses ennemis et c’est hyper classe, il faut l’avouer. Surtout en rouge.',
                            ],
        'Gant de l\'Infini' => [
                            'price' => 1250,
                            'state' => 'Parfait état',
                            'localisation' => 'Planète Morag',
                            'description' => 'Si son possesseur réunit les 6 gemmes de l’infini, il peut manipuler l’espace, le temps, la réalité, l’esprit, la destruction, ainsi que la vie et la mort.',
                            ],
        'Death Note' => [
                            'price' => 825,
                            'state' => 'Très bon état',
                            'localisation' => 'Dans la cours de récré',
                            'description' => 'Tuer les personnes dont on inscrit le nom sur ce carnet. On peut choisir la cause de leur mort et la manière dont elle va se dérouler. La seule condition est de connaître leur visage.',
                            ],
        'Excalibur' => [
                            'price' => 300,
                            'state' => 'Usé',
                            'localisation' => 'Bretagne',
                            'description' => 'Elle est plus puissante que les autres épées et protège son porteur des blessures fatales. Excalibur ne révèle ses pouvoirs que dans la main de ceux qui en sont dignes.',
                            ],
        'Portal gun' => [
                            'price' => 399,
                            'state' => 'Bon état',
                            'localisation' => 'Aperture Science Enrichment Center',
                            'description' => 'Permet de créer un portail d’une dimension à une autre. Utile pour se déplacer, s’enfuir ou se débarrasser d’un ennemi en l’envoyant dans une autre dimension.',
                            ],
        'Mjolnir' => [
                            'price' => 355,
                            'state' => 'Très usé',
                            'localisation' => 'Asgard',
                            'description' => 'ugmente la force physique de son possesseur, contrôle le climat, manipule la foudre, permet de ressusciter des gens, permet de voler en le lançant et en s’y accrochant avec une lanière.',
                            ],
        'Baguette de Sureau' => [
                            'price' => 160,
                            'state' => 'Bon état',
                            'localisation' => 'Poudlard',
                            'description' => 'Lancer des sorts pour tuer, faire souffrir, faire obéir, immobiliser, exploser, se protéger, faire la vaisselle et réparer des lunettes. Est meilleure que toutes les autres baguettes de sorciers.',
                            ],
        'Kunaï' => [
                            'price' => 25,
                            'state' => 'Très bon état',
                            'localisation' => 'Konoha',
                            'description' => 'Un Kunaï est une arme couramment utilisée par les ninjas. Il s\'agit d\'une arme blanche destinée à blesser au corps à corps, bien qu\'il puisse servir d\'arme de jet.',
                            ],
    ];

    public function getDependencies()  
    {
        return [UserFixtures::class];  
    }

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach(self::ITEMS as $title => $data) {
            $sabreLaser = new Item();
            $sabreLaser->setName($title);
            $sabreLaser->setPrice($data['price']);
            $sabreLaser->setState($data['state']);
            $sabreLaser->setLocalisation($data['localisation']);
            $sabreLaser->setDescription($data['description']);
            $sabreLaser->setSeller($this->getReference('seller_1'));
            $manager->persist($sabreLaser);
            $i++;
        }
        $manager->flush();
    }
}
