<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }
}
