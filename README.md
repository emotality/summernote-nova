# Summernote for Laravel Nova (archived)

[![Packagist License](https://poser.pugx.org/emotality/summernote-nova/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/emotality/summernote-nova/version.png)](https://packagist.org/packages/emotality/summernote-nova)
[![Total Downloads](https://poser.pugx.org/emotality/summernote-nova/d/total.png)](https://packagist.org/packages/emotality/summernote-nova)

[Summernote WYSIWYG editor](https://github.com/summernote/summernote) for [Laravel Nova](https://nova.laravel.com).

## PLEASE NOTE: This repo has been archived and will not be updated!

## Installation

1. `composer require emotality/summernote-nova`
2. `php artisan vendor:publish --provider="Emotality\Nova\SummernoteServiceProvider"`

---

Laravel 5.5+ will use the auto-discovery function but for Laravel 5.4 and lower, you will need to include the service provider manually in `config/app.php`:

```php
'providers' => [
    ...,
    /*
     * Package Service Providers...
     */
    Emotality\Nova\SummernoteServiceProvider::class,
    ...,
];
```

## Usage

Import class inside your Nova resource:

```php
use Emotality\Nova\Summernote;
```

Then add it to your fields array:

```php
public function fields(Request $request)
{
    return [
        ...,
        Summernote::make('Body'),
        ...
    ];
}
```


## License

summernote-nova is released under the MIT license. See [LICENSE](https://github.com/emotality/summernote-nova/blob/master/LICENSE) for details.
