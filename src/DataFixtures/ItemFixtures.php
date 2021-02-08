<?php

namespace App\DataFixtures;

use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ItemFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $sabreLaser = new Item();
        $sabreLaser->setName('Sabre Laser');
        $sabreLaser->setPrice('220');
        $sabreLaser->setState('Bon état');
        $sabreLaser->setLocalisation('Étoile Noire');
        $sabreLaser->setDescription('Le sabre laser n’est ni plus ni moins qu’un sabre qui coupe beaucoup plus qu’une simple lame. C’est super pour terrasser ses ennemis et c’est hyper classe, il faut l’avouer. Surtout en rouge.');
        $manager->persist($sabreLaser);

        $gantDeLinfini = new Item();
        $gantDeLinfini->setName('Gant de l\'Infini');
        $gantDeLinfini->setPrice('1250');
        $gantDeLinfini->setState('Parfait état');
        $gantDeLinfini->setLocalisation('Planète Morag');
        $gantDeLinfini->setDescription('Si son possesseur réunit les 6 gemmes de l’infini, il peut manipuler l’espace, le temps, la réalité, l’esprit, la destruction, ainsi que la vie et la mort.');
        $manager->persist($gantDeLinfini);

        $deathNote = new Item();
        $deathNote->setName('Death Note');
        $deathNote->setPrice('825');
        $deathNote->setState('Très bon état');
        $deathNote->setLocalisation('Dans la cours de récré');
        $deathNote->setDescription('Tuer les personnes dont on inscrit le nom sur ce carnet. On peut choisir la cause de leur mort et la manière dont elle va se dérouler. La seule condition est de connaître leur visage.');
        $manager->persist($deathNote);

        $excalibur = new Item();
        $excalibur->setName('Excalibur');
        $excalibur->setPrice('300');
        $excalibur->setState('Usé');
        $excalibur->setLocalisation('Bretagne');
        $excalibur->setDescription('Elle est plus puissante que les autres épées et protège son porteur des blessures fatales. Excalibur ne révèle ses pouvoirs que dans la main de ceux qui en sont dignes.');
        $manager->persist($excalibur);

        $portalGun = new Item();
        $portalGun->setName('Portal gun');
        $portalGun->setPrice('399');
        $portalGun->setState('Bon état');
        $portalGun->setLocalisation('Aperture Science Enrichment Center');
        $portalGun->setDescription('Permet de créer un portail d’une dimension à une autre. Utile pour se déplacer, s’enfuir ou se débarrasser d’un ennemi en l’envoyant dans une autre dimension.');
        $manager->persist($portalGun);

        $mjolnir = new Item();
        $mjolnir->setName('Mjolnir');
        $mjolnir->setPrice('355');
        $mjolnir->setState('Très usé');
        $mjolnir->setLocalisation('Asgard');
        $mjolnir->setDescription('Augmente la force physique de son possesseur, contrôle le climat, manipule la foudre, permet de ressusciter des gens, permet de voler en le lançant et en s’y accrochant avec une lanière.');
        $manager->persist($mjolnir);

        $baguette = new Item();
        $baguette->setName('Baguette de Sureau');
        $baguette->setPrice('160');
        $baguette->setState('Bon état');
        $baguette->setLocalisation('Poudlard');
        $baguette->setDescription('Lancer des sorts pour tuer, faire souffrir, faire obéir, immobiliser, exploser, se protéger, faire la vaisselle et réparer des lunettes. Est meilleure que toutes les autres baguettes de sorciers.');
        $manager->persist($baguette);

        $kunai = new Item();
        $kunai->setName('Kunaï');
        $kunai->setPrice('25');
        $kunai->setState('Très bon état');
        $kunai->setLocalisation('Konoha');
        $kunai->setDescription('Un Kunaï est une arme couramment utilisée par les ninjas. Il s\'agit d\'une arme blanche destinée à blesser au corps à corps, bien qu\'il puisse servir d\'arme de jet.');
        $manager->persist($kunai);

        $manager->flush();
    }
}
