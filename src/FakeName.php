<?php

namespace Sukanta\FakeNames;

use Faker\Factory;

class FakeName
{
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    /**
     * @var null|string $gender
     * @return string
     */

    public function title($gender = null)
    {
        return $this->faker->title($gender);
    }

    /**
     * @return string
     */

    public function titleMale()
    {
        return $this->faker->titleMale;
    }

    /**
     * @return string
     */

    public function titleFemale()
    {
        return $this->faker->titleFemale;
    }

    /**
     * @return string
     */

    public function firstName($gender = null)
    {
        return $this->faker->firstName($gender);
    }

    /**
     * @return string
     */

    public function firstNameFemale()
    {
        return $this->faker->firstNameFemale;
    }

    /**
     * @return string
     */

    public function firstNameMale()
    {
        return $this->faker->firstNameMale;
    }

    /**
     * @return string
     */

    public function name($gender = null)
    {
        return $this->faker->name($gender);
    }

    /**
     * @var int $count
     * @return array
     */
    public function names($count = 2)
    {
        $names = [];

        for ($i = 0; $i < $count; $i++) {
            $names[] = $this->faker->name;
        }

        return $names;
    }
}
