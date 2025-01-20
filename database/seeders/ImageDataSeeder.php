<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Images pour les plats
        DB::table('Images')->insert([
            [
                'id' => 1,
                'url' => ('./images/unknownimage.png')
            ],
            [
                'id' => 2,
                'url' => ('https://i.pinimg.com/736x/a8/3a/f8/a83af885b290905d426dc04c414fa945.jpg')
            ],
            [
                'id' => 3,
                'url' => ('https://i.pinimg.com/736x/6c/82/bb/6c82bbcc024742add3bfb9b15638a2d0.jpg')
            ],
            [
                'id' => 4,
                'url' => ('https://croc-gourmand.fr/wp-content/uploads/2021/04/french-tacos-2048x1638.jpeg')
            ],
            [
                'id' => 5,
                'url' => ('https://i.pinimg.com/736x/b2/af/0c/b2af0c44e34eb24d33a0538fe1406598.jpg')
            ],
            [
                'id' => 6,
                'url' => ('https://fatsecretfrance.fr/wp-content/uploads/2023/12/Shakshuka-1.png'),
            ],
            [
                'id' => 7,
                'url' => ('https://api.toutlevin.com/images/5246262ff9b387d2dae7e4f1579af965.jpg?width=1200&quality=100')
            ],
            [
                'id' => 8,
                'url' => ('https://images.services.kitchenstories.io/FQPoYXqopSF8apn6ZCB6uEaXVyk=/3840x0/filters:quality(85)/images.kitchenstories.io/wagtailOriginalImages/R3072-final-photo-2.jpg')
            ],
            [
                'id' => 9,
                'url' => ('https://fabriquedelices.com/wp-content/uploads/2020/10/jambon-beurre-recipe-picture-900x899.png')
            ],
            [
                'id' => 10,
                'url' => 'https://chacunsapart.fr/wp-content/uploads/2024/09/Recette-blanquette-de-veau.webp'
            ],
            [
                'id' => 11,
                'url' => 'https://static.750g.com/images/1200-675/f6ad72f2ac5f330143bd9bc27566dee6/comment-realiser-des-pates-carbonara-comme-en-italie.jpg'
            ],
            [
                'id' => 12,
                'url' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/DAE632BC-FB50-43CE-AE83-22CC6A1D55CF/Derivates/3016D477-35C6-46EB-8FD1-8D24161E33EF.jpg'
            ],
            [
                'id' => 13,
                'url' => 'https://legarconboucher.com/modules/akrecipes/views/img/r/53.jpeg'
            ],
            [
                'id' => 14,
                'url' => 'https://www.culturemiam.fr/wp-content/uploads/2024/07/steak-tartare.jpg'
            ],
            [
                'id' => 15,
                'url' => 'https://www.lespepitesdenoisette.fr/wp-content/uploads/2021/10/Recette-galette-butternut-cajou-ricotta.jpg'
            ],
            [
                'id' => 16,
                'url' => 'https://cache.marieclaire.fr/data/photo/w1000_ci/6d/idees-accompagnements-gratin-dauphinois.jpg'
            ],
            [
                'id' => 17,
                'url' => 'https://jemangefrancais.com/img/cms/Photos%20Blog/boeuf%20bourguignon.jpg'
            ],
            [
                'id' => 18,
                'url' => 'https://recettes-multicuiseurs.com/wp-content/uploads/2023/06/cassoulet_ninja_foodi-transformed-2000x1327.jpeg'
            ],
            [
                'id' => 19,
                'url' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/f2232eb0-0c06-4179-911e-524e1e8b60ce/Derivates/2bdecf7b-b1a5-47d7-a480-7b6cc6bbd7c3.jpg'
            ],
            [
                'id' => 20,
                'url' => 'https://s1.elespanol.com/2019/12/03/cocinillas/recetas/carne/ternera-carne_449216243_139529112_1024x576.jpg'
            ],
            [
                'id' => 21,
                'url' => ('https://belorta.be/uploads/resized/recipes/147981/Ratatouille_56472f26a16b6e2c774a2b7d0d87eb4d.jpg')
            ],
            [
                'id' => 22,
                'url' => ('https://www.fourchettenutrition.com/wp-content/uploads/2021/07/Capture-decran-2021-07-16-a-15.25.58.png')
            ],
            [
                'id' => 23,
                'url' => ('https://adc-dev-images-recipes.s3.eu-west-1.amazonaws.com/shutterstock_299177891.jpg')
            ],
            [
                'id' => 24,
                'url' => ('https://img.cuisine-etudiant.fr/image/recette/800500/06d18d35e2d99654fc80c79e51b74cc042929dad-recipe.jpg')
            ],
            [
                'id' => 25,
                'url' => ('https://www.lessaveursdejeanmarie.com/wp-content/uploads/elementor/thumbs/poulet-basquaise-cookeo-qmhyvfl383wens94demtmyjh4uphkitgv8pv7s4rb4.jpg')
            ],
            [
                'id' => 26,
                'url' => ('https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/f3d7d1b4-4df6-4d72-b2f0-acf05cccae08/Derivates/4513fa48-f03c-4f8e-bea0-18385dd4bdd0.jpg')
            ]
        ]);

        // Images pour les ingrédients
        DB::table('Images')->insert([
            [
                'id' => 100,
                'url' => ('https://www.bioalaune.com/img/article/10280-saumon.jpg')
            ],
            [
                'id' => 101,
                'url' => ('https://cuisine-test.com/wp-content/uploads/2020/07/P%C3%A2te-%C3%A0-pizza-levure-fra%C3%AEche-scaled.jpg')
            ],
            [
                'id' => 102,
                'url' => ('https://www.cuisineetsentiments.com/images/pates_1.jpg')
            ],
            [
                'id' => 103,
                'url' => ('https://cache.marieclaire.fr/data/photo/w1200_h630_ci/cuisine/4t/bolognaise.jpg')
            ],
            [
                'id' => 104,
                'url' => ('https://img.passeportsante.net/1200x675/2022-11-29/shutterstock-275512886.jpg')
            ],
            [
                'id' => 105,
                'url' => ('https://buenprovecho.hn/wp-content/uploads/2020/09/tomate-1024x680-1.jpg')
            ],
            [
                'id' => 106,
                'url' => ('https://thumbs.dreamstime.com/b/le-blanc-de-poulet-coup%C3%A9-avec-le-couteau-japonais-sur-la-table-76103479.jpg')
            ],
            [
                'id' => 107,
                'url' => 'https://www.papillesetpupilles.fr/wp-content/uploads/2016/03/Riz-basmati-%C2%A9-teleginatania-shutterstock.jpg'
            ],
            [
                'id' => 108,
                'url' => 'https://th.bing.com/th/id/OIP.6RasdM21jcApKkiztyQtUQHaE8?rs=1&pid=ImgDetMain'
            ],
            [
                'id' => 109,
                'url' => 'https://th.bing.com/th/id/OIP.fOSR3IBsy-WTa9eXWXRNsAHaE7?rs=1&pid=ImgDetMain'
            ],
            [
                'id' => 110,
                'url' => 'https://www.charte-origine-montagne.com/wp-content/uploads/2019/04/580321.jpg'
            ],
            [
                'id' => 111,
                'url' => 'https://images.pexels.com/photos/594137/pexels-photo-594137.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'id' => 112,
                'url' => 'https://images.pexels.com/photos/872400/pexels-photo-872400.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'id' => 113,
                'url' => 'https://fridg-front.s3.amazonaws.com/media/products/1583.jpg'
            ],
            [
                'id' => 114,
                'url' => 'https://image.babydestination.com/wp-content/uploads/2017/12/cheese-slice-source-extra-crispy-Copy.png'
            ],
            [
                'id' => 115,
                'url' => 'https://images.pexels.com/photos/1756061/pexels-photo-1756061.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'id' => 116,
                'url' => 'https://img-3.journaldesfemmes.com/PCUC6URcqMRZNca0KCo2qfYu8Q8=/910x607/smart/432c5298182d45818c7a1b140e6b21f1/ccmcms-jdf/10662027.jpg'
            ],
            [
                'id' => 117,
                'url' => 'https://cache.marieclaire.fr/data/photo/w1000_c17/cuisine/4p/photo-de-farine-1234.jpg'
            ],
            [
                'id' => 118,
                'url' => 'https://www.regal.fr/sites/art-de-vivre/files/lait-thinkstockphotos-149151468.jpg'
            ],
            [
                'id' => 119,
                'url' => 'https://img.passeportsante.net/1200x675/2021-05-03/i102021-cornichon.webp'
            ],
            [
                'id' => 120,
                'url' => 'https://images-ca-1-0-1-eu.s3-eu-west-1.amazonaws.com/photos/original/1339/creme-fraiche-produit-AdobeStock_56409659.jpg'
            ],
            [
                'id' => 121,
                'url' => 'https://img-3.journaldesfemmes.fr/SFp-8xzyuMZZLC59bRuGHZvoohQ=/1500x/smart/a9e53b751f6a47748c6dd5b64c93a8af/ccmcms-jdf/35554472.jpg'
            ],
            [
                'id' => 122,
                'url' => 'https://sf1.lechasseurfrancais.com/wp-content/uploads/2024/01/dddd.jpg'
            ],
            [
                'id' => 123,
                'url' => 'https://www.likeachef.fr/dimg/34031/xcourgette.png.pagespeed.ic.0V9DMiiGTb.png'
            ],
            [
                'id' => 124,
                'url' => 'https://i.notretemps.com/1400x787/smart/2020/07/30/dietetique-les-bienfaits-de-laubergine.jpeg'
            ],
            [
                'id' => 125,
                'url' => 'https://static.750g.com/images/1200-630/2019cfba636548bba409b2c2c45b7d8d/thinkstockphotos-508746492.jpg'
            ],
            [
                'id' => 126,
                'url' => 'https://www.1001cocktails.com/wp-content/uploads/1001cocktails/2023/10/shutterstock_1672733095-1-scaled.jpg'
            ],
            [
                'id' => 127,
                'url' => 'https://img-3.journaldesfemmes.fr/P1J__Ly7dxVrXIA1XScKV3rKqfM=/1500x/smart/67209cc7f65a434eb3bdbdc01162ac47/ccmcms-jdf/18913882.jpg'
            ],
            [
                'id' => 128,
                'url' => 'https://www.dergam.com/wp-content/themes/yootheme/cache/ce/safran-bienfaits-anxiete-ce65b3da.jpeg'
            ],
            [
                'id' => 129,
                'url' => 'https://cdn.prod.website-files.com/667190662793e72f66036f67/667365b09c260af428f0954f_patates_blanches_960.jpg'
            ],
            [
                'id' => 130,
                'url' => 'https://www.papillesetpupilles.fr/opengraph_image/145361'
            ],
            [
                'id' => 131,
                'url' => 'https://www.medoucine.com/blog/wp-content/uploads/1970/01/carottes-bienfaits.jpg'
            ],
            [
                'id' => 132,
                'url' => 'https://www.etal-des-epices.com/wp-content/uploads/2022/06/recette-moutarde-ancienne-maison-facile.jpg'
            ],
            [
                'id' => 133,
                'url' => 'https://cache.magicmaman.com/data/photo/w1000_ci/6l/thon-en-boite-enceinte.jpg'
            ],
            [
                'id' => 134,
                'url' => 'https://terrypomerantzcooking.com/wp-content/uploads/2021/03/terry-pomerantz-b%C5%93uf-bourguignon-3.jpg'
            ],
            [
                'id' => 135,
                'url' => 'https://bisons-auvergne.fr/432-thickbox_default/saucisses-bison.jpg'
            ],
            [
                'id' => 136,
                'url' => 'https://ferme-ambias.fr/wp-content/uploads/2024/02/roti-de-boeuf-min.webp'
            ],
            [
                'id' => 137,
                'url' => 'https://pataks.ca/wp-content/uploads/2022/05/mussels-and-shrimp-in-light-curry-1.jpg'
            ],
            [
                'id' => 138,
                'url' => 'https://www.bienmanger.com/tinyMceData/images/contents/627/content_lg.jpg'
            ]
        ]);
    }
}
