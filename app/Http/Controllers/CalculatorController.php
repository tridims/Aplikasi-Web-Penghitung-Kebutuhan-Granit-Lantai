<?php

namespace App\Http\Controllers;

use App\Models\GraniteTile;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(GraniteTile $graniteTile)
    {
        return view('calculator.index', [
            'listing' => $graniteTile,
        ]);
    }

    public function calculate(GraniteTile $graniteTile, Request $request)
    {
        $formFields = $request->validate([
            'length' => 'required|numeric|min:1',
            'width' => 'required|numeric|min:1',
        ]);

        $jumlahGranitDibutuhkan = $this::calculateAmountOfGraniteNeeded(
            $formFields['length'],
            $formFields['width'],
            $graniteTile->length,
            $graniteTile->width
        );

        $jumlahKardus = $this::hitungJumlahKardus($jumlahGranitDibutuhkan, $graniteTile->amount);

        return view('calculator.result', [
            'panjang_ruangan' => $formFields['length'],
            'lebar_ruangan' => $formFields['width'],
            'luas' => $formFields['length'] * $formFields['width'],
            'listing' => $graniteTile,
            'jumlah_granit' => $jumlahGranitDibutuhkan,
            'jumlah_kardus' => $jumlahKardus,
            'total_harga' => $jumlahKardus * $graniteTile->price,
        ]);
    }

    public static function calculateAmountOfGraniteNeeded(
        float $panjangRuangMeter,
        float $lebarRuangMeter,
        float $panjangGranitCm,
        float $lebarGranitCm
    ): int {
        $luasDaerah = $panjangRuangMeter * $lebarRuangMeter; // m2
        $luasGranit = $panjangGranitCm * $lebarGranitCm / 10000; // m2

        // dd($luasDaerah, $luasGranit);

        return intval(ceil($luasDaerah / $luasGranit));
    }

    public static function hitungJumlahKardus(float $kebutuhanGranit, float $jumlahGranitPerdus): int
    {
        return intval(ceil($kebutuhanGranit / $jumlahGranitPerdus));
    }
}
