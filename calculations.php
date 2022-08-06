<?php
use REDCapEntity\EntityList;

$list = new EntityList('bridge_program_calculations', $module);
$list->setOperations(['create', 'update', 'delete']) // Enabling all operations.
    ->render('control_center'); // Context: Control Center.
