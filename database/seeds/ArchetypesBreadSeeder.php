<?php

use Illuminate\Database\Seeder;
use VoyagerBread\Traits\BreadSeeder;

class ArchetypesBreadSeeder extends Seeder
{
    use BreadSeeder;

    public function bread()
    {
        return [
            // usually the name of the table
            'name'                  => 'archetypes',
            'display_name_singular' => 'Archetype',
            'display_name_plural'   => 'Archetypes',
            'icon'                  => '',
            'model_name'            => 'App\Models\Archetype',
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
            'format_id' => [
                'type'         => 'number',
                'display_name' => 'Format ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 10,
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
            'name' => self::defaultField('text', "Deck Name", 4),
            'notes'=> self::defaultField('text', "Notes", 5),
            'sample_decklist' => self::defaultField('text', 'Sample Decklist', 6),
            'hyperlink'=> self::defaultField('text', 'Hyperlink', 7)
        ];
    }



    public function menuEntry()
    {
        return [
            'role'      => 'admin',
            'title'      => 'Archetypes',
            'url'        => '',
            'route'      => 'voyager.archetypes.index',
            'target'     => '_self',
            'icon_class' => 'voyager-basket',
            'color'      => null,
            'parent_id'  => null,
            'order'      => 8,
        ];
    }
}
