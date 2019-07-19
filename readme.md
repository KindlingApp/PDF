# Kindling PDF

## Description

This is a pretty simple package that mostly wraps around Laravel-Snappy, and adds the MacOS `wkhtmltopdf` binary in the `/bin` folder. This is because there is no composer package for the Mac OS binary.

This uses `h4cc/wkhtmltopdf-amd64` package which provides/adds the Linux binary for Ubuntu.

## Installation

Pretty simple, `composer require kindling/pdf`.

> You will have to add an ENV variable: 

> `WKHTMLTOPDF_PATH="vendor/kindling/pdf/bin/wkhtmltopdf-osx"` 

> Which you can specify, but because this package is trying to make this quick/easy, the path needs to be in the `base_path()` of your app. If you're on Linux (Ubuntu), you probably don't need to worry about this ENV variable, it should work out of the box.

The idea here is that this makes it quick and easy to be able to add a single package to a Kindling app, and be able to generate PDF files almost instantly.

The config file, when published will be `config/snappy.php` this is due to this package wrapping Laravel Snappy.

Publish the config with `php artisan vendor:publish` and choose the Kindling\PDF package.
