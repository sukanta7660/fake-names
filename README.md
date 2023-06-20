# Fake Name Package for PHP Composer #

The Fake Names is a tool or service that generates realistic, fictional identities or names. It is often used for various purposes, including testing, prototyping, anonymity, and data privacy.

## Usage ##

```bash
$ composer require sukanta/fake-names
```

```php
<?php
require_once "vendor/autoload.php";

$faker = new Sukanta\FakeNames\FakeName();
echo $faker->name();
```

It will print a random name.
