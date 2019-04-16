# Trim Behavior for cakephp3

A simple behavior for trim string data before save it in database.

## Requirements
  - CakePHP 3.1.x
  - PHP >= 5.4.16
  
## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
  composer require gransfall/trim-behavior
```
or add the plugin to your project's ``` composer.json ``` like this:

```javascript
    {
        "require": {
            "gransfall/trim-behavior": "dev-master"
        }
    }
```

## Usage

To start sanitizing your data, you need to attach the behavior to your table in the initialization function and pass in the fields that you want to be sanitized: 

```php
    $this->addBehavior('Gransfall/TrimBehavior.Trim');
```

## License

The MIT License (MIT)

Copyright (c) 2018 Gransfall

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
