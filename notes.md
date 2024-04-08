In PHP, you don't technically need to close the PHP tag (`?>`) at the end of a file if the file contains only PHP code. It's actually recommended to omit the closing tag in such cases to avoid accidental whitespace or newlines that may be output after the closing tag, which could cause issues, especially in cases where you need to send headers to the browser.

However, if your PHP file contains a mix of PHP and HTML, it's necessary to close the PHP tag when you switch from PHP to HTML, and then open it again when you switch back to PHP. This helps to clearly separate PHP and HTML sections in your code.





### Composer
- composer is a dependency manager for PHP
- different between dependency manager and package manager is that package manager is for installing packages globally, while dependency manager is for installing packages locally in a project. However composer can also install packages globally.

example of `composer.json` file:
```json
{
    "require": {
        "monolog/monolog": "1.0.*"
    }
}
```



when installing dependencies, composer will create a `vendor` directory in the project root directory, and it will store all the dependencies in this directory.
- composer install:  will install all the dependencies listed in the `composer.json` file, however if the `composer.lock` file is present, it will install the dependencies listed in the `composer.lock` file.
- composer update: will update and install the latest version of the dependencies listed in the `composer.json` file.

#### How composer install dependencies:
- composer will first take the name of the package in the `require` section
- first composer will check if you have any  repositories defined in the `repositories` section in the `composer.json` file
- if not it will check the default repository which is packagist.org

#### Autoloding
- composer will generate an autoloader file called `autoload.php` in the `vendor` directory
```
require __DIR__ . '/vendor/autoload.php';
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->warning('Foo');
```
the result of this snippet is that it will create a app.log file at the root of the project directory and it will write the message `Foo` in it.

`composer dump-autoload` will regenerate the autoloader file.








