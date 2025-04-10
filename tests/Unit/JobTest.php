<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // AAA [Arrange , Act , Assert]

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    // Act , Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tag', function () {
    // Arrang
    $job = Job::factory()->create();

    // Act
    $job->tag('Frontend');

    // Access
    expect($job->tags)->toHaveCount(1);
});
