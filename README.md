# Avatar Generator

Generate avatar for user by his name, file or url.

[![Latest Stable Version](https://poser.pugx.org/zertex/avatar-generator/v/stable.png)](https://packagist.org/packages/zertex/avatar-generator)
[![Total Downloads](https://poser.pugx.org/zertex/avatar-generator/downloads.png)](https://packagist.org/packages/zertex/avatar-generator)

## Features
- Saving to PNG format
- Generate avatar by username
- Generate avatar from file or url (http only)
- Auto select background color by username
- Contrast color for text
- Font face and size customize 
- PNG Textures for background

## Dependencies

* PHP 7
* PHP GD

## Installation

Install with composer:

```bash
composer require zertex/avatar-generator
```

or add

```bash
"zertex/avatar-generator": "*"
```

to the require section of your `composer.json` file.

## Configuration

```php
$options = AvatarOptions::create()
			->setFont('path to ttf font')
			->setWidth(300)
			->setFontSize(200)
			->setTexturesFolder('path to textures folder')
			->setImagesFolder('path to generated images folder')
			->setImagesUrl('url to images folder')
			->setSalt('random salt');
```

* setFont - Path to TTF font
* setWidth - Width & height avatar image file. Default: 300
* setFontSize - Font size. Default: 200
* setTexturesFolder - Path to textures folder. Used only PNG textures
* setImagesFolder - Path to image folder.
* setImagesUrl - Url for generating complete link to image
* setSalt - Random text for new image file name

## Using

Generate avatar image by username
```php
$image_src = Avatar::init('John Smith', $options, [result file name])
			   ->username()
			   ->texture('TEXTURE_NAME')
			   ->text()
			   ->get_file_name();
```
Generate avatar image from file
```php
$image_src = Avatar::init('John Smith', $options, [result file name])
			   ->file('/path/to/file')
			   ->texture('TEXTURE_NAME')
			   ->text()
			   ->get_file_name();
```
Generate avatar image from url
```php
$image_src = Avatar::init('John Smith', $options, [result file name])
			   ->file('http://your-site.com/image.jpg')
			   ->texture('TEXTURE_NAME')
			   ->text()
			   ->get_file_name();
```

You can exclude texture or text from chain for exclude them

## Textures

You can use PNG texture with transparancy.
Every texture must consist of **2 files** (back & white).
His names myst be: 
```php
TEXTURE_NAME . '-' . COLOR . '.png'
```
* TEXTURE_NAME - Any words. In texture() method you can use array of TEXTURE_NAME for random
* COLOR - Must be `black` or `white`

## Screenshot 

![alt text](http://zertex.ru/ext-banner-a3.png)

## Yii2 extension

Avater generator extension for Yii2 here: https://github.com/zertex/yii2-avatar-generator

There you can find 2 textures and Play-Bold.ttf font

## Examples

https://zertex.ru/yii2-avatar-generator