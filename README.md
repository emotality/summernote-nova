# Summernote Nova

[Summernote WYSIWYG editor](https://github.com/summernote/summernote) for [Laravel Nova](https://nova.laravel.com).

## Installation

1. `composer require emotality/summernote-nova`
2. `php artisan vendor:publish --provider="Emotality\Nova\SummernoteServiceProvider"`

## Usage

Inside your Nova resource:

`use Emotality\Nova\Summernote;`

Then add it to your fields array:

```
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
