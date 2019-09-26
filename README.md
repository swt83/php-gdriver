# GDriver

A PHP library for converting GDrive links.

## Install

Normal install via Composer.

## Usage

When you copy a link to a remote GDrive file, the link provided will be to a GDrive page.  This package converts the URL provided into a link that takes you to the actual file instead.

```php

// link provided
$provided = 'https://drive.google.com/open?id=YOURFILEID&authuser=YOUREMAIL&usp=drive_fs';

// link converted
$converted = GDriver::convert($provided);

// https://drive.google.com/uc?export=download&id=YOURFILEID
echo $converted;
```