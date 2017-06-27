# mikeevstropov/user-agent

The library provides a user agent string

## Installation

Add dependency [mikeevstropov/user-agent](https://packagist.org/packages/mikeevstropov/user-agent)

```bash
$ composer require mikeevstropov/user-agent
```

## Usage

```php
<?php

use Mikeevstropov\UserAgent\UserAgent;

// Getting of a desktop user agent
$desktopUserAgent = UserAgent::getDesktopRand();

gettype($desktopUserAgent); // string

// Getting of a mobile user agent
$mobileUserAgent = UserAgent::getMobileRand();

gettype($mobileUserAgent); // string
```

## Api Interface

- **getDesktopRand**
  
  _Get a random desktop user agent_
  
  Returns:
  - `string`
  
- **getMobileRand**
  
  _Get a random mobile user agent_
  
  Returns:
  - `string`
  
## Development

Clone

```bash
$ git clone https://github.com/mikeevstropov/user-agent
```

Go to project

```bash
$ cd user-agent
```

Install dependencies

```bash
$ composer install
```

Run the tests

```bash
$ composer test
```
  
## License
MIT