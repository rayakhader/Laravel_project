<?php

test('it is belong to employer', function () {

    $employer = \App\Models\Employer::factory()->create();
    $job = \App\Models\Job::factory()->create(['employer_id' => $employer->id]);

    expect($job->employer->is($employer))->toBeTrue();
});

test('it can have tags ', function () {

  $job = \App\Models\Job::factory()->create();

  $job->tag('frontend');

  expect($job->tags)->toHaveCount(1);

});



