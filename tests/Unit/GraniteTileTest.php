<?php

namespace Tests\Unit;

use Tests\TestCase;

class GraniteTile extends TestCase
{
    public function test_index_page()
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_show_page()
    {
        $this->get('/granite_tiles/1')->assertStatus(200);
    }
}
