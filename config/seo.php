<?php 

return [
    'noindex_paths' => [
        // Preview & testing
        '_preview/*',

        // Filament internal actions
        'filament/*',

        // Livewire internal
        'livewire/*',

        // File system
        'storage/*',

        // Auth (jika ada)
        'login',
        'register',
        'password/*',

        //page thank you trial class
        'thank-you',
    ],
];
