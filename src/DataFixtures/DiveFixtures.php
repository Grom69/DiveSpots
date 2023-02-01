<?php

namespace App\DataFixtures;

use App\Entity\Dive;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DiveFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i < 6; $i++) {
            $dive1 = new Dive();
            $dive1->setCountry('Mexique');
            $dive1->setCity('Cozumel');
            $dive1->setPicture('https://diveinblue.fr/wp-content/uploads/diveinblue.jpg');
            $dive1->setDescription("C'est tellement bleu ! sont les premiers mots prononcés par de nombreux plongeurs à Cozumel. Des coraux imposants, des températures agréables et une visibilité stellaire bénissent ce royaume sous-marin tandis qu'en haut, vous avez des habitants sympathiques, de la bonne nourriture, des plages de sable et des discothèques animées. Ce sont des vacances de plongée parfaites.
        La plongée à Cozumel est un pays des merveilles de murs luxuriants et de dérives à haute tension, où les grottes et les cavernes sont prêtes à être explorées. Assurez-vous que votre régulateur reste en place pendant que vous restez bouche bée devant la ménagerie de créatures flottant le long de ces récifs mésoaméricains.
        Les raies aigles, les tortues et les requins nourrices sont des ajouts courants aux journaux de bord après avoir plongé à Cozumel. Regardez attentivement et vous pouvez ajouter des homards, des mérous, des raies pastenagues et des sergents-majors à votre décompte. Photographes sous-marins : si vous recherchez du corail haute résolution, Cozumel en a en abondance.");
            $manager->persist($dive1);
        }

        for ($i = 0; $i < 6; $i++) {
            $dive2 = new Dive();
            $dive2->setCountry('Philippines');
            $dive2->setCity('Cebu');
            $dive2->setPicture('https://www.scubapro.com/sites/scubapro_site/files/scuba-diving-hawaii-united-states-20220207.jpg');
            $dive2->setDescription("Pour vos vacances plongée, je vous propose du dépaysement, des plongées multicolores, du gros, de la macro et des plages de carte postale. Bienvenue aux Philippines !
            Ce circuit plongée, accessible dès le niveau 1 ou l'open water, permet d'explorer deux des plus célèbres sites de plongée de l'archipel des Visayas : Malapascua et Moalboal.
            Au nord de Cebu, la petite île de Malapascua regorge de macro, sur de ravissants plateaux coralliens colorés. Les autonomes partent quant à eux en quête des majestueux requins renard, en s'enfonçant au-delà de 30 mètres. En seconde partie de votre séjour aux Philippines, Moalboal révèle ses merveilles, terrestres et sous-marines. Sur le fameux site de Pescador, on admire les gigantesques bancs de sardines en plongée de nuit.
            De retour à l’hôtel, on guette le requin baleine. À terre, on profite de délicieux massages et de visites culturelles. Un irrésistible voyage plongée aux Philippines !");
            $manager->persist($dive2);
        }

        $manager->flush();
    }
}
