<?php
namespace MissionIndiana\ExternalModule;

use ExternalModules\AbstractExternalModule;
use REDCapEntity\EntityDB;

class ExternalModule extends AbstractExternalModule {

    function redcap_module_system_enable($version) {
        \REDCapEntity\EntityDB::buildSchema($this->PREFIX);
    }

    function redcap_entity_types() {
        $types = [];

        $types['bridge_program_calculations'] = [
            'label' => 'Bridge Program Calculation',
            'label_plural' => 'Bridge Program Calculations',
            'icon' => 'home_pencil',
            'properties' => [
                'adults_served' => [
                    'name' => 'Adults Served In Program',
                    'type' => 'integer',
                    'required' => false,
                ],
                'children_served' => [
                    'name' => 'Children Served In Program',
                    'type' => 'integer',
                    'required' => false,
                ],
                'adults_working' => [
                    'name' => 'Adults Working In Program',
                    'type' => 'integer',
                    'required' => false,
                ],
                'children_working' => [
                    'name' => 'Children Working In Program',
                    'type' => 'integer',
                    'required' => false,
                ],
            ],
            //'special_keys' => [
            //    'label' => 'name', // "name" represents the entity label.
            //],
        ];

        return $types;
    }
}
