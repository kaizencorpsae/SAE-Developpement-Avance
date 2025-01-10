<?php

namespace Tests\Feature;

use App\Models\Plat;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use function PHPUnit\Framework\assertTrue;

class PerformanceTest extends TestCase
{

    protected function assertTime($table, int $count)
    {
        $startTime = microtime(true);
        $table::factory()->count($count)->make();
        DB::table('plats')->where('id', $count-1)->first();
        $endTime = microtime(true);
        echo "Résultat avec ". $count . " " . lcfirst(class_basename($table)) . "s : " . $endTime - $startTime;
        assertTrue(true);
    }

    public function test_time_when_search_one_good_user_with_100_plats(): void
    {
        $this->assertTime(Plat::class, 100);
    }

    public function test_time_when_search_one_good_user_with_1000_plats(): void
    {
        $this->assertTime(Plat::class, 1000);
    }
}
