<?php

// Sab kuch yahin se control hota hai - yahan badlo, poori site badal jayegi.
return [
    'name'    => 'Lab Work 4',
    'tagline' => 'Blade Template Inheritance',
    'footer'  => 'BCA Laravel Lab Work 4',

    // Sidebar menu is list se loop chalake banta hai
    'menu' => [
        ['label' => 'Homepage', 'route' => 'home'],
        ['label' => 'About',    'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Contact',  'route' => 'contact'],
    ],

    // Dynamic theme colours (user sidebar se change kar sakta hai)
    'default' => 'red',
    'colors' => [
        'red'    => ['accent' => '#f56a6b', 'hover' => '#f78586'],
        'blue'   => ['accent' => '#4a90e2', 'hover' => '#6aa7ea'],
        'green'  => ['accent' => '#3fae6a', 'hover' => '#5cc085'],
        'purple' => ['accent' => '#8e5ac8', 'hover' => '#a47ad6'],
    ],
];
