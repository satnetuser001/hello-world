<?php

namespace App\Models;

use Faker\Factory as Faker;

class User
{
    protected $faker;

    protected $name;
    protected $jobTitle;

    public function __construct()
    {
        $this->faker = Faker::create('uk_UA');

        $this->name = $this->faker->name;
        $this->jobTitle = $this->faker->jobTitle;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getJobTitle()
    {
        return $this->jobTitle;
    }
}