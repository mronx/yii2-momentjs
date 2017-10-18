# moment asset for Yii2
Provides the asset bundle for easy integration of [moment](http://momentjs.com/) into your Yii2 application.


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist "uz/yii2-momentjs:*"
```

or add

```
"uz/yii2-momentjs": "*"
```

to the `require` section of your `composer.json` file.


## Usage

In the view file register the asset:

```php
// Register only core momentjs with no locale data
\uz\momentjs\MomentJsAsset::register($this);

// Register core momentjs with current app locale. Current locale is activated on DOM ready.
\uz\momentjs\MomentJsLocaleAsset::register($this);

// Register core momentjs with all locales supported by the momentjs.
\uz\momentjs\MomentJsAllLocalesAsset::register($this);
```


## License

The MIT License. Please see [License File](LICENSE.md) for more information.
