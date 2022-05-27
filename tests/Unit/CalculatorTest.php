<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\CalculatorController;

class CalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
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
}
