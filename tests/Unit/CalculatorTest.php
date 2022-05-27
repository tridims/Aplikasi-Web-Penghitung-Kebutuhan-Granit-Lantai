<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\CalculatorController;
use App\Models\GraniteTile;

class CalculatorTest extends TestCase
{

    public function test_kalkulasi_jumlah_granit()
    {
        $panjangRuang = 4;
        $lebarRuang = 5;

        $panjangGranit = 60;
        $lebarGranit = 60;

        $kebutuhan_granit = CalculatorController::calculateAmountOfGraniteNeeded($panjangRuang, $lebarRuang, $panjangGranit, $lebarGranit);

        $this->assertEquals(56, $kebutuhan_granit);
    }

    public function test_kalkulasi_jumlah_kardus()
    {
        $test_data = array(
            [10, 5, 2],
            [56, 4, 14],
            [70, 25, 3],
            [1, 10, 1]
        );

        foreach ($test_data as $data) {
            $jumlah_kardus = CalculatorController::hitungJumlahKardus($data[0], $data[1]);

            $this->assertEquals($jumlah_kardus, $data[2]);
        }
    }

    public function test_halaman_index()
    {
        $response = $this->get('/calculator/1');

        $response->assertStatus(200);
    }

    public function test_halaman_calculate()
    {
        GraniteTile::factory(1)->create();
        $response = $this->post('/calculator/1', [
            'length' => 4,
            'width' => 5,
        ]);

        $response->assertStatus(200);
    }
}
