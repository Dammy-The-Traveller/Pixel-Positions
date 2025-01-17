<?php

test('it belongs to an employer', function () {
    //expect(true)->toBeTrue();

    //Arrange
$employer = \App\Models\Employer::factory()->create();
$job = \App\Models\Job::factory()->create([
    'employer_id' => $employer->id,
]);

    //Act
    expect($job->employer->is($employer))->toBeTrue();
    // Assert
});

test('can have tags', function(){

    $job = \App\Models\Job::factory()->create();
    $job->tag('frontend');

    expect($job->tags)->toHaveCount(1);
});