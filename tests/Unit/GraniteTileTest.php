<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\GraniteTile;

class GraniteTileTest extends TestCase
{
    public function test_index_page()
    {
        $this->get('/')->assertStatus(200);
    }
}
