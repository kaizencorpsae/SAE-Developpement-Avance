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
        DB::table('Plats')->insert([
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
            ]
        ]);
    }
}
