<?php

namespace Emotality\Nova;

use Laravel\Nova\Fields\Field;

class Summernote extends Field
{
    /**
     * The field's component.
     *
     * @var string $component
     */
    public $component = 'summernote-nova';

    /**
     * The field's options.
     *
     * @param array $options
     * @return mixed
     */
    public function options(array $options = [])
    {
        return $this->withMeta(['options' => $options]);
    }
}
