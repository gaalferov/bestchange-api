# BestChange API (php 7.2 and above)
A simple package for working with the pseudo API of the bestchage.ru


## Features
- Save memory by using generators

## Requirements

- PHP 7.2 or above (**decreased from 7.4**)
- [ZIP extension](http://php.net/manual/en/zip.installation.php)

## Installation

Add into your composer.json
```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/gaalferov/bestchange-api"
        }
    ],
```
After that you run install command
```
composer require korkoshko/bestchange-api
```

## Usage

### Initial
```php 
$bestChange = new BestChange();
$bestChange->setArchivePath(__DIR__); // If param is not set, a tmp directory is used 

$bestChange->download(); // Downloading archive with data
```

### Get base info of API
```php
foreach($bestChange->getInfo() as $info) { // The generator returns (https://www.php.net/manual/ru/language.generators.php)
    var_dump($info);
}

// Or using sugar method

var_dump(
    $bestChange->getArray(InfoMethod::class);
);
```

### Get exchangers

```php
foreach ($bestChange->getExchangers() as $exchanger) {
    var_dump($exchanger);
}
```

## License
[MIT](https://opensource.org/licenses/MIT)

Thanks, @korkoshko
