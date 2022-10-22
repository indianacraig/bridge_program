<?php
namespace MissionIndiana\bridgeCalculationsClass;

use ExternalModules\AbstractExternalModule;
use REDCapEntity\EntityDB;

class bridgeCalculationsClass extends AbstractExternalModule {
        
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
                'project_id' => [
                    'name' => 'Project ID',
                    'type' => 'project',
                    'required' => true,
                ],
            ],
            'special_keys' => [
                'project' => 'project_id', // "project_id" represents the project which the entity belongs to.
            ],
        ];

        return $types;
    }
    
}
