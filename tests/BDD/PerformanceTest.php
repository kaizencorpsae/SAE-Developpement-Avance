<?php

namespace Tests\BDD;

use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Plat;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use function PHPUnit\Framework\assertTrue;

class PerformanceTest extends TestCase
{

// Permet de partir avec une BDD sans données, mais besoin de les remettre après
// use RefreshDatabase;

    protected function assertTimeSearch($table, int $count)
    {
        $table::factory()->count($count)->make();
        $startTime = microtime(true);
        DB::table('plats')->where('id', $count-1)->first();
        $endTime = microtime(true);
        echo "Résultat avec ". $count . " " . lcfirst(class_basename($table)) . "s : " . $endTime - $startTime . "\n";
        assertTrue(true);
    }

    protected function assertTimeImage($table, int $nbimage, int $count)
    {
        $table::factory()->count($count)->make();
        $startTime = microtime(true);
        for ($i=1; $i <= $nbimage; $i++) {
            DB::table('plats')->where('id', $count-$i)->first();
        }
        $endTime = microtime(true);
        echo "Résultat avec ". $count . " " . lcfirst(class_basename($table)) . "s : " . $endTime - $startTime . "\n";
        assertTrue(true);
    }

    protected function assertCreatePlats(int $count)
    {
        $startTime = microtime(true);

        // Créer un plat, associé à 2 ou 5 ingrédients (relation avec plat_ingredient).
        // On considère que les ingrédients sont déja créés, car l'utilisateur est censé choisir dans une liste d'ingrédients
        // Par la suite, on pourrait considérer qu'il peut créer des ingrédients en meme temps que le plat
        for ($i=1; $i <= $count; $i++) {
            Plat::factory()->hasAttached(Ingredient::factory(random_int(2,5)))->create();
        }

        $endTime = microtime(true);
        echo "Résultat avec ". $count . " plats : " . $endTime - $startTime . "\n";
        assertTrue(true);
    }

    public function test_time_when_search_one_good_user_with_100_plats(): void
    {
        $this->assertTimeSearch(Plat::class, 100);
    }

    public function test_time_when_search_one_good_user_with_1000_plats(): void
    {
        $this->assertTimeSearch(Plat::class, 1000);
    }

    public function test_time_when_search_one_good_user_with_10000_plats(): void
    {
        $this->assertTimeSearch(Plat::class, 10000);
    }

    public function test_time_when_search_one_image_with_100_plats(): void
    {
        $this->assertTimeImage(Image::class, 1, 100);
    }

    public function test_time_when_search_one_image_with_1000_plats(): void
    {
        $this->assertTimeImage(Image::class, 1, 1000);
    }

    public function test_time_when_search_one_image_with_10000_plats(): void
    {
        $this->assertTimeImage(Image::class, 1, 10000);
    }

    public function test_time_when_search_10_images_with_10000_plats(): void
    {
        $this->assertTimeImage(Image::class, 10, 10000);
    }

    public function test_time_when_create_10_plats(): void
    {
        $this->assertCreatePlats(10);
    }

    public function test_time_when_create_100_plats(): void
    {
        $this->assertCreatePlats(100);
    }

    public function test_time_when_create_1000_plats(): void
    {
        $this->assertCreatePlats(1000);
    }
}
