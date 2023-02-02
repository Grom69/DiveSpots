<?php

namespace App\DataFixtures;

use App\Entity\Dive;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\DocBlock\Description;

class DiveFixtures extends Fixture
{
    public const SPOTS = [
        'Malaisie' => [
            'Sipadan',
            'iles perhentian',
        ],
        'Indonésie' => [
            'Rajat Ampat',
            'Nusa Penida'
        ],
        'Polynésie Française' => [
            'Rangiroa',
            'Fakarava'
        ],
        'Thaïlande' => [
            'Phuket',
            'Khao Lak'
        ],
        'Egypte' => [
            'Hurghada',
            'Taba'
        ],
        'Mexique' => [
            'Mahahual',
            'Cozumel'
        ],
        'Philippines' => [
            'Malapascua',
            'Ile de gato'
        ],
        'Belize' => [
            'Ambergris Caye',
            'Caye Caulker'
        ],
    ];



    public const DESCRIPTION = [
        'Une situation luxuriante au nord-est au large de la partie malaise de Bornéo. Elle a été rendue célèbre par le commandant Cousteau.
    Elle est « très bien protégée ». Un quota strict limite le nombre de plongeurs autorisés par jour. 
    On ne peut pas y dormir et les militaires veillent à ce que les touristes qui débarquent ne s’aventurent pas au-delà de la limite autorisée. 
    Ces mesures assurent une préservation exceptionnelle du lieu, aussi bien sur terre que sous l’eau.
    Sur une dizaine de sites, le long d’un tombant où l’essentiel se passe à moins de 20 mètres de profondeur, on voit en particulier des bancs énormes de barracudas, de véritables boules compactes de centaines de carangues, de nombreux poissons-perroquets à bosse, des tortues ou encore de petits requins de récifs par dizaines, parfois des requins-marteaux et même une grotte insolite, « Turtle Tomb », remplie de squelettes de tortues.',
        'C\'est un archipel de près de 1500 îles, généralement montagneuses, qui se situe en Indonésie à l’ouest de la Papouasie occidentale.
    Il est au centre du « Triangle de Corail » considéré comme la zone la plus riche en biodiversité marine au monde.
    Les îles de Raja Ampat sont très peu habitées et très peu touristiques. Il s’y dégage un véritable parfum de bout de monde sauvage et luxuriant. Les sites de plongée sont très nombreux et tous exceptionnels, que ce soit vers le détroit de Dampier ou vers l’île de Misool. La faune marine y est très abondante et le corail parfaitement préservé est d’une variété inégalée.', 'Rangiroa est un atoll corallien de l’archipel des Tuamotu-Gambier en Polynésie française qui fait partie du groupement des Îles Palliser.
    Rangira est le deuxième plus grand atoll du monde. La vie marine y est exceptionnellement dense. On peut en particulier y plonger avec des dauphins, d’innombrables requins dont le marteau et le tigre. Le courant y est fort par endroit, ce qui permet d’admirer les fonds sous-marins comme sur un tapis roulant.', 'Komodo est une île en centre-sud de l’archipel indonésien. Elle est connue pour ses fameux dragons de Komodo et bien sûr pour ses sites de plongée de classe mondiale.
    L’endroit est idéal pour y observer de grandes populations des plus grands animaux marins et tout particulièrement les raies mantas et les requins marteaux.
    Les sites sont nombreux et souvent assez éloignés de la côte. Pour profiter à fond de cette zone exceptionnelle, beaucoup choisissent d’embarquer pour des croisières de plongée de plusieurs jours à bord de bateaux « liveaboard » qui sont souvent là-bas de magnifiques bateaux traditionnels en bois.'
    ];

    public const PICTURES = [
        'https://images.unsplash.com/photo-1544551763-92ab472cad5d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        'https://images.unsplash.com/photo-1603370671351-ce85bc0ec91e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        'https://images.unsplash.com/photo-1484507175567-a114f764f78b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
        'https://images.unsplash.com/photo-1545604698-568084db231c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80',
        'https://images.unsplash.com/photo-1642703745618-4ae3da19ffc2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80',
        'https://images.unsplash.com/photo-1606862417230-03908d3118ad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80',
        'https://images.unsplash.com/photo-1602475508643-735a79b7cbb6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
        'https://images.unsplash.com/photo-1550016681-60a1d9d23bf7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1163&q=80',
        'https://images.unsplash.com/photo-1580699391788-8a3d0cc2ea7b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
        'https://images.unsplash.com/photo-1633978077821-6b1b16a176a4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        'https://images.unsplash.com/photo-1637308108204-ccb17fca29ec?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80',
        'https://images.unsplash.com/photo-1637308106367-f73370eb6026?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80',
        'https://images.unsplash.com/photo-1637308106886-d3a6f22eac9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80',
        'https://images.unsplash.com/photo-1514568354136-3f4399400146?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        'https://images.unsplash.com/photo-1605315416167-614ff43936ad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1135&q=80',
        'https://images.unsplash.com/photo-1513039464749-94912b3841ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1115&q=80'
    ];

    public function load(ObjectManager $manager): void
    {
        $x = 0;

        foreach (self::SPOTS as $country => $fields) {
            for ($i = 0; $i < 2; $i++) {
                $dive = new Dive();
                $dive->setCountry($country);
                $dive->setCity($fields[$i]);
                $dive->setPicture(self::PICTURES[$x++]);
                $dive->setDescription(self::DESCRIPTION[rand(0, 3)]);
                $manager->persist($dive);
            }
        }


        // for ($i = 0; $i < 6; $i++) {
        //     $dive2 = new Dive();
        //     $dive2->setCountry('Philippines');
        //     $dive2->setCity('Cebu');
        //     $dive2->setPicture('https://www.scubapro.com/sites/scubapro_site/files/scuba-diving-hawaii-united-states-20220207.jpg');
        //     $dive2->setDescription("Pour vos vacances plongée, je vous propose du dépaysement, des plongées multicolores, du gros, de la macro et des plages de carte postale. Bienvenue aux Philippines !
        //     Ce circuit plongée, accessible dès le niveau 1 ou l'open water, permet d'explorer deux des plus célèbres sites de plongée de l'archipel des Visayas : Malapascua et Moalboal.
        //     Au nord de Cebu, la petite île de Malapascua regorge de macro, sur de ravissants plateaux coralliens colorés. Les autonomes partent quant à eux en quête des majestueux requins renard, en s'enfonçant au-delà de 30 mètres. En seconde partie de votre séjour aux Philippines, Moalboal révèle ses merveilles, terrestres et sous-marines. Sur le fameux site de Pescador, on admire les gigantesques bancs de sardines en plongée de nuit.
        //     De retour à l’hôtel, on guette le requin baleine. À terre, on profite de délicieux massages et de visites culturelles. Un irrésistible voyage plongée aux Philippines !");
        //     $manager->persist($dive2);
        // }

        $manager->flush();
    }
}
