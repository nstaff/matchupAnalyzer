<?php

use Illuminate\Database\Seeder;
use VoyagerBread\Traits\BreadSeeder;

class FormatsBreadSeeder extends Seeder
{
    use BreadSeeder;

    public function bread()
    {
        return [
            // usually the name of the table
            'name'                  => 'formats',
            'display_name_singular' => 'Format',
            'display_name_plural'   => 'Formats',
            'icon'                  => '',
            'model_name'            => 'App\Models\Format',
            'controller'            => '',
            'generate_permissions'  => 1,
            'description'           => '',
        ];
    }

    public function inputFields()
    {
        return [
            'id' => [
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ],
            'created_at' => [
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 2,
            ],
            'updated_at' => [
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ],
            'name'=>self::defaultField('text', 'Name', 4),
            'details'=>self::defaultField('text', 'Details', 5)
        ];
    }

    public function menuEntry()
    {
        return [
            'role'      => 'admin',
            'title'      => 'Formats',
            'url'        => '',
            'route'      => 'voyager.formats.index',
            'target'     => '_self',
            'icon_class' => 'voyager-basket',
            'color'      => null,
            'parent_id'  => null,
            'order'      => 8,
        ];
    }
}
