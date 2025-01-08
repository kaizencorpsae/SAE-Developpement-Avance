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
                'preparation' => "1. Étalez la pâte à pizza, ajoutez de la sauce tomate. 
                                  2. Disposez les morceaux de saumon. 
                                  3. Enfournez à 220°C pendant 10-15 minutes jusqu’à ce que la pâte soit dorée.  
                                  4. Ajoutez des herbes fraîches et dégustez chaud."
            ],
            [
                'nom' => 'Pâtes bolognaise',
                'description' => 'Pâtes bolognaise composé de pâtes et de sauce bolognaise',
                'image_id' => 3,
                'preparation' =>"1. Faire cuire les pâtes dans de l'eau salée selon les instructions du paquet.
                                 2. Faire chauffer la sauce bolognaise dans une poêle. Si vous n'avez pas de sauce prête, faites cuire de la viande hachée avec de la sauce tomate et des épices.
                                 3. Laisser mijoter pendant quelques minutes.
                                 4. Égoutter les pâtes et les mélanger avec la sauce bolognaise.
                                 5. Servir chaud, avec du fromage râpé si souhaité."
            ],
            [
                'nom' => 'Tacos',
                'description' => 'Tacos trois viandes, salade, tomate, oignons',
                'image_id' => 4,
                'preparation' => "1. Cuire le poulet dans une poêle, coupé en petits morceaux, jusqu'à ce qu'il soit bien cuit.
                                  2. Réchauffer les tortillas dans une poêle chaude ou au micro-ondes.
                                  3. Garnir les tortillas avec le poulet cuit et ajouter des tranches de tomate.
                                  4. Ajouter de la crème selon vos préférences.
                                  5. Rouler les tortillas et servir."
            ],
            [
                'nom' => 'Riz cantonnais',
                'description' => 'Riz frit avec des oeufs, petit pois et jambon de porc',
                'image_id' => 5,
                'preparation' => "1. Faire chauffer de l'huile dans une poêle à feu moyen.
                                  2. Ajouter les oeufs battus dans la poêle et les brouiller jusqu'à ce qu'ils soient cuits.
                                  3. Ajouter le riz cuit et les petits pois dans la poêle. Mélanger bien.
                                  4. Ajouter le jambon de porc coupé en morceaux et faire sauter le tout pendant quelques minutes.
                                  "
            ],
            [
                'nom' => 'Shakshuka',
                'description' => 'Plat à base d’oeufs poché, de tomates et d’autres légumes tel que des poivrons',
                'image_id' => 6, 
                'preparation' =>   "1. Coupez les tomates et les poivrons en dés puis émincez les oignons.  
                                    2. Dans une poêle, faites chauffer un peu d'huile et ajoutez les oignons, puis les poivrons et les tomates. Laissez mijoter jusqu'à obtenir une sauce épaisse.  
                                    3. Salez, poivrez, et ajoutez des épices selon vos goûts (paprika, cumin, piment, etc.).  
                                    4. Creusez des petits nids dans la sauce et cassez un œuf dans chaque creux. 
                                    5. Couvrez la poêle et laissez cuire jusqu’à ce que les œufs soient cuits à votre goût."
            ],
            [
                'nom' => 'Hamburger',
                'description' => 'Pain de hamburger, steak haché, tranche de fromage, salade, tomate, oignons',
                'image_id' => 7, 
                'preparation' => "1. Lavez la salade, coupez les tomates en rondelles, émincez les oignons.  
                                  2. Faites cuire le steak haché et ajoutez le fromage pour le faire fondre. 
                                  3. Placez salade,, steak , fromage,  tomate, oignons , salade et refermez avec le pain.  
                                  "
            ],
            [
                'nom' => 'Mac n Cheese',
                'description' => 'Des pâtes aux fromages très crémeuses',
                'image_id' => 8,
                'preparation' =>   "1. Faites bouillir de l'eau salée et cuisez les pâtes selon les instructions sur l'emballage.  
                                    2. Dans une casserole, faites fondre le beurre, ajoutez la farine et mélangez pour former un roux.  
                                    3. Versez progressivement le lait dans le roux tout en fouettant, jusqu'à obtenir une sauce lisse et épaisse.  
                                    4. Incorporez le fromage dans la sauce et mélangez jusqu’à ce qu’il soit bien fondu.  
                                    5. Ajoutez les pâtes cuites dans la sauce au fromage et mélangez bien. Servez chaud.  
                                    "
            ]
        ]);
    }
}
