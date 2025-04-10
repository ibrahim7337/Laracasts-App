<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use function Pest\Laravel\{get, post, actingAs};

// Share traits in tests
uses(Tests\TestCase::class, RefreshDatabase::class, WithFaker::class)->in('Feature');
uses(Tests\TestCase::class)->in('Unit');
