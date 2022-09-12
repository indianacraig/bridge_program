<?php
namespace MissionIndiana\BridgeCalculationsClass;

use ExternalModules\AbstractExternalModule;
use REDCapEntity\EntityDB;

class BridgeCalculationsClass extends AbstractExternalModule {
        
    function redcap_entity_types() {
        $types = [];

        $types['bridge'] = [
            'label' => 'Bridge Calculation',
            'label_plural' => 'Bridge Calculations',
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
            'special_keys' => [
                'label' => 'name', // "name" represents the entity label.
            ],
        ];

        return $types;
    }
    
    //function redcap_module_system_enable($version) {
    //    EntityDB::buildSchema($this->PREFIX);
    //}

}
