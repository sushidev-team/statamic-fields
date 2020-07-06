<?php

namespace Ambersive\StatamicFields\FieldTypes;

use Statamic\Fields\Fieldtype;

class TemplateFiltered extends Fieldtype
{

    protected function configFieldItems(): array
    {
        return [
            'folder' => [
                'display' => __('Folder'),
                'instructions' => __('ambersive-sf::fields.folder'),
                'type' => 'text',
                'width' => 100,
            ]
        ];
    }
    
    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }
}
