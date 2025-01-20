<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plats')->insert([
            [
                'nom' => 'Pizza saumon',
                'description' => 'Pizza avec du saumon',
                'image_id' => 2,
                'preparation' => "Étalez la pâte à pizza, ajoutez de la sauce tomate.
                                  Disposez les morceaux de saumon.
                                  Enfournez à 220°C pendant 10-15 minutes jusqu’à ce que la pâte soit dorée.
                                  Ajoutez des herbes fraîches et dégustez chaud."
            ],
            [
                'nom' => 'Pâtes bolognaise',
                'description' => 'Pâtes bolognaise composé de pâtes et de sauce bolognaise',
                'image_id' => 3,
                'preparation' => "Faire cuire les pâtes dans de l'eau salée selon les instructions du paquet.
                                 Faire chauffer la sauce bolognaise dans une poêle. Si vous n'avez pas de sauce prête, faites cuire de la viande hachée avec de la sauce tomate et des épices.
                                 Laisser mijoter pendant quelques minutes.
                                 Égoutter les pâtes et les mélanger avec la sauce bolognaise.
                                 Servir chaud, avec du fromage râpé si souhaité."
            ],
            [
                'nom' => 'Tacos',
                'description' => 'Un taco est un mets de la cuisine mexicaine qui se compose d\'une tortilla de maïs avec des garnitures au goût et optionnelles.',
                'image_id' => 4,
                'preparation' => "Cuire le poulet dans une poêle, coupé en petits morceaux, jusqu'à ce qu'il soit bien cuit.
                                  Réchauffer les tortillas dans une poêle chaude ou au micro-ondes.
                                  Garnir les tortillas avec le poulet cuit et ajouter des tranches de tomate.
                                  Ajouter de la crème selon vos préférences.
                                  Rouler les tortillas et servir."
            ],
            [
                'nom' => 'Riz cantonnais',
                'description' => 'Riz frit avec des oeufs, petit pois et jambon de porc',
                'image_id' => 5,
                'preparation' => "Faire chauffer de l'huile dans une poêle à feu moyen.
                                  Ajouter les oeufs battus dans la poêle et les brouiller jusqu'à ce qu'ils soient cuits.
                                  Ajouter le riz cuit et les petits pois dans la poêle. Mélanger bien.
                                  Ajouter le jambon de porc coupé en morceaux et faire sauter le tout pendant quelques minutes.
                                  "
            ],
            [
                'nom' => 'Shakshuka',
                'description' => 'Plat à base d’oeufs poché, de tomates et d’autres légumes tel que des poivrons',
                'image_id' => 6,
                'preparation' => "Coupez les tomates et les poivrons en dés puis émincez les oignons.
                                    Dans une poêle, faites chauffer un peu d'huile et ajoutez les oignons, puis les poivrons et les tomates. Laissez mijoter jusqu'à obtenir une sauce épaisse.
                                    Salez, poivrez, et ajoutez des épices selon vos goûts (paprika, cumin, piment, etc.).
                                    Creusez des petits nids dans la sauce et cassez un œuf dans chaque creux.
                                    Couvrez la poêle et laissez cuire jusqu’à ce que les œufs soient cuits à votre goût."
            ],
            [
                'nom' => 'Hamburger',
                'description' => 'Pain de hamburger, steak haché, tranche de fromage, salade, tomate, oignons',
                'image_id' => 7,
                'preparation' => "Lavez la salade, coupez les tomates en rondelles, émincez les oignons.
                                  Faites cuire le steak haché et ajoutez le fromage pour le faire fondre.
                                  Placez salade,, steak , fromage,  tomate, oignons , salade et refermez avec le pain.
                                  "
            ],
            [
                'nom' => 'Mac n Cheese',
                'description' => 'Des pâtes aux fromages très crémeuses',
                'image_id' => 8,
                'preparation' => "Faites bouillir de l'eau salée et cuisez les pâtes selon les instructions sur l'emballage.
                                    Dans une casserole, faites fondre le beurre, ajoutez la farine et mélangez pour former un roux.
                                    Versez progressivement le lait dans le roux tout en fouettant, jusqu'à obtenir une sauce lisse et épaisse.
                                    Incorporez le fromage dans la sauce et mélangez jusqu’à ce qu’il soit bien fondu.
                                    Ajoutez les pâtes cuites dans la sauce au fromage et mélangez bien. Servez chaud.
                                    "
            ],
            [
                'nom' => 'Jambon fromage',
                'description' => 'Sandwich jambon fromage pour les pique-niques et autre',
                'image_id' => 9,
                'preparation' => "Coupez la baguette en deux.
                      Tartinez généreusement de beurre.
                      Ajoutez les tranches de jambon, de fromage et cornichons.
                      Refermez et servez."
            ],
            [
                'nom' => 'Blanquette de veau',
                'description' => 'Ragoût de veau mijoté dans une sauce crémeuse',
                'image_id' => 10,
                'preparation' => "Dans une grande casserole, faites revenir les morceaux de veau dans du beurre jusqu'à ce qu'ils soient dorés.
                      Ajoutez des oignons, des carottes et des champignons émincés, puis couvrez avec de l'eau.
                      Laissez mijoter pendant 1h30 à 2h jusqu'à ce que la viande soit tendre.
                      Retirez la viande et préparez la sauce avec du bouillon, de la crème et du beurre.
                      Remettez la viande dans la sauce, rectifiez l'assaisonnement, et servez chaud."
            ],
            [
                'nom' => 'Pâtes carbonara',
                'description' => 'Pâtes avec une sauce crémeuse à base d\'œufs, de fromage et de pancetta',
                'image_id' => 11,
                'preparation' => "Faites cuire les pâtes dans de l'eau salée selon les instructions du paquet.
                      Dans une poêle, faites dorer la pancetta dans un peu d\'huile.
                      Dans un bol, battez des œufs avec du fromage râpé, du sel et du poivre.
                      Égouttez les pâtes et mélangez-les immédiatement avec la pancetta.
                      Ajoutez le mélange d'œufs et de fromage, puis remuez pour obtenir une sauce crémeuse.
                      Servez chaud."
            ],
            [
                'nom' => 'Tarte au thon',
                'description' => 'Tarte salée à base de thon, de légumes et de fromage',
                'image_id' => 12,
                'preparation' => "Préchauffez le four à 180°C. Étalez la pâte brisée dans un moule à tarte.
                      Égouttez le thon en conserve et émiettez-le. Mélangez-le avec des œufs, de la crème fraîche et des légumes coupés en petits morceaux.
                      Assaisonnez avec du sel, du poivre et des herbes de Provence.
                      Versez ce mélange sur la pâte et enfournez pendant 30-35 minutes, jusqu'à ce que la tarte soit dorée."
            ],
            [
                'nom' => 'Hachis Parmentier',
                'description' => 'Gratin de viande hachée et de purée de pommes de terre',
                'image_id' => 13,
                'preparation' => "Faites cuire les pommes de terre dans de l'eau salée, puis écrasez-les avec du beurre et du lait pour faire une purée.
                      Faites revenir de la viande hachée avec des oignons, de l'ail, du sel et du poivre.
                      Dans un plat à gratin, disposez la viande hachée et recouvrez de purée.
                      Saupoudrez de fromage râpé et enfournez à 180°C pendant 20-25 minutes, jusqu'à ce que le dessus soit doré."
            ],
            [
                'nom' => 'Steak tartare',
                'description' => 'Viande crue hachée mélangée avec des condiments et des épices',
                'image_id' => 14,
                'preparation' => "Hachez finement le bœuf et placez-le dans un bol.
                      Ajoutez de la moutarde, de l\'huile d\'olive, des câpres, des cornichons et des échalotes finement coupées.
                      Assaisonnez avec du sel, du poivre, et quelques gouttes de sauce Worcestershire.
                      Mélangez bien et formez un joli tas à servir avec un jaune d'œuf cru sur le dessus."
            ],
            [
                'nom' => 'Galette bretonne',
                'description' => 'Galette à base de farine de sarrasin, garnie de divers ingrédients',
                'image_id' => 15,
                'preparation' => "Préparez la pâte en mélangeant la farine de sarrasin, l’eau et le sel. Laissez reposer pendant 1h.
                      Chauffez une poêle à crêpes et versez une louche de pâte pour former une galette.
                      Ajoutez des ingrédients comme du jambon, du fromage, un œuf, ou des champignons au centre de la galette.
                      Pliez les bords et laissez cuire jusqu’à ce que la galette soit dorée des deux côtés."
            ],
            [
                'nom' => 'Gratin dauphinois',
                'description' => 'Gratin de pommes de terre crémeux, cuit au four',
                'image_id' => 16,
                'preparation' => "Préchauffez le four à 180°C. Épluchez et coupez les pommes de terre en fines rondelles.
                      Dans une casserole, faites chauffer la crème avec de l'ail écrasé, du sel, du poivre et de la noix de muscade.
                      Disposez les rondelles de pommes de terre dans un plat à gratin, versez la crème par-dessus et ajoutez du fromage râpé.
                      Enfournez pendant 45-50 minutes, jusqu'à ce que le gratin soit doré et fondant."
            ],
            [
                'nom' => 'Bœuf bourguignon',
                'description' => 'Ragoût de bœuf mijoté dans du vin rouge avec des légumes',
                'image_id' => 17,
                'preparation' => "Faites dorer les morceaux de bœuf dans une grande casserole avec du beurre.
                      Ajoutez des oignons, des carottes, de l'ail et du thym. Versez le vin rouge et laissez mijoter pendant 2-3 heures.
                      Ajoutez des champignons, des lardons et des pommes de terre en fin de cuisson.
                      Servez chaud avec du pain frais ou des pâtes."
            ],
            [
                'nom' => 'Cassoulet',
                'description' => 'Plat à base de haricots blancs, de saucisses et de viande confite',
                'image_id' => 18,
                'preparation' => "Faites cuire les haricots blancs dans de l'eau avec du laurier et du thym.
                      Dans une grande cocotte, faites dorer de la saucisse et des morceaux de viandes.
                      Ajoutez les haricots cuits, recouvrez de bouillon et laissez mijoter pendant 2 à 3 heures.
                      Servez chaud avec du pain de campagne."
            ],
            [
                'nom' => 'Tomates farcies',
                'description' => 'Tomates creusées et garnies de viande hachée',
                'image_id' => 19,
                'preparation' => "Coupez le dessus des tomates et évidez-les.
                      Mélangez de la viande hachée, des oignons et des herbes. Assaisonnez.
                      Farcissez les tomates de ce mélange, puis placez-les dans un plat à gratin.
                      Couvrez de sauce tomate et enfournez pendant 30-40 minutes à 180°C."
            ],
            [
                'nom' => 'Rôti de bœuf (rosbif)',
                'description' => 'Pièce de bœuf rôtie au four, souvent accompagnée de légumes',
                'image_id' => 20,
                'preparation' => "Préchauffez le four à 220°C. Assaisonnez le rôti de bœuf avec du sel, du poivre et de l'ail haché.
                      Faites dorer le rôti dans une poêle chaude avec de l'huile.
                      Placez-le ensuite au four pendant 20-30 minutes pour un rôti saignant, ou plus longtemps pour un rôti bien cuit.
                      Servez avec des légumes rôtis tels que des tomates ou poivrons et une sauce."
            ],
            [
                'nom' => 'Ratatouille',
                'description' => 'Mélange de légumes d\'été cuits en ragoût',
                'image_id' => 21,
                'preparation' => "Coupez des courgettes, des aubergines, des tomates et des poivrons en dés.
                      Faites chauffer de l'huile d'olive dans une poêle, ajoutez l'ail, puis tous les légumes.
                      Laissez mijoter à feu doux pendant 30-40 minutes, en remuant de temps en temps.
                      Servez chaud, avec du pain ou du riz."
            ],
            [
                'nom' => 'Croque-monsieur',
                'description' => 'Sandwich grillé avec du jambon et du fromage',
                'image_id' => 22,
                'preparation' => "Beurrez deux tranches de pain de mie. Placez une tranche de jambon et une tranche de fromage entre les deux tranches de pain.
                      Faites griller le sandwich dans une poêle chaude ou au four jusqu'à ce qu'il soit bien doré."
            ],
            [
                'nom' => 'Les sushi',
                'description' => 'Bouchées de poisson cru ou cuit accompagnées de riz vinaigré',
                'image_id' => 23,
                'preparation' => "Préparez le riz à sushi en le cuisant et en l'assaisonnant avec du vinaigre, du sucre et du sel.
                      Coupez le poisson en fines tranches.
                      Sur une petite boule de riz, disposez une tranche de poisson et servez immédiatement."
            ],
            [
                'nom' => 'Quiche Lorraine',
                'description' => 'Tarte salée garnie de lardons, d\'œufs et de crème',
                'image_id' => 24,
                'preparation' => "Préchauffez le four à 180°C. Étalez la pâte brisée dans un moule à tarte.
                      Dans un bol, mélangez des œufs, de la crème, des lardons et du fromage râpé.
                      Versez ce mélange sur la pâte et enfournez pendant 30-35 minutes, jusqu'à ce que la quiche soit dorée."
            ],
            [
                'nom' => 'Poulet basquaise',
                'description' => 'Poulet mijoté avec des poivrons, des tomates et des épices',
                'image_id' => 25,
                'preparation' => "Faites revenir les morceaux de poulet dans une poêle jusqu'à ce qu'ils soient dorés.
                      Ajoutez des oignons, des poivrons et des tomates en dés. Assaisonnez avec du piment d'Espelette et des herbes.
                      Laissez mijoter pendant 40-50 minutes, jusqu'à ce que le poulet soit bien cuit."
            ],
            [
                'nom' => 'Paella',
                'description' => 'Plat espagnol à base de riz, de fruits de mer et de légumes',
                'image_id' => 26,
                'preparation' => "Dans une grande poêle, faites chauffer de l'huile d'olive et ajoutez des légumes, comme des poivrons et des tomates.
                      Ajoutez du riz, du bouillon et des épices comme du safran.
                      Laissez cuire le riz, puis ajoutez des fruits de mer et du poulet. Couvrez et laissez cuire jusqu'à ce que le riz soit tendre."
            ]
        ]);
    }
}
