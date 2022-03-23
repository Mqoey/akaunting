<?php

return [

    'whoops'              => 'Whoops!',
    'hello'               => 'Sveicināts!',
    'salutation'          => 'Sveicināti,<br> : company_name',
    'subcopy'             => 'Ja rodas problēmas, noklikšķinot uz ": tekstu" pogu, nokopējiet šo URL un ielīmējiet to savā web pārlūkprogrammā: [: url](:url)',
    'reads'               => 'Lasīt|Lasa',
    'read_all'            => 'Lasīt visu',
    'mark_read'           => 'Atzīmēt kā izlasītu',
    'mark_read_all'       => 'Atzīmēt visu kā izlasītu',
    'new_apps'            => 'Jauna lietotne|Jaunas lietotnes',
    'upcoming_bills'      => 'Gaidāmie rēķini',
    'recurring_invoices'  => 'Periodiskās pavadzīmes',
    'recurring_bills'     => 'Periodiskie rēķini',

    'update' => [

        'mail' => [

            'subject' => '⚠️ Atjaunināšana neizdevās :domain',
            'message' => 'Šāda aizstājvārda atjaunināšana no :alias from :current_version uz :new_version neizdevās <strong>:step</strong> ar šādu ziņojumu: :error_message',

        ],

        'slack' => [

            'message' => 'Atjaunināšana neizdevās :domain',

        ],

    ],

    'import' => [

        'completed' => [

            'subject'           => 'Importēšana pabeigta',
            'description'       => 'Importēšana ir pabeigta, un ieraksti ir pieejami panelī.',

        ],

        'failed' => [

            'subject'           => 'Importēšana neizdevās',
            'description'       => 'Failu nevar importēt šādu problēmu dēļ:',

        ],
    ],

    'export' => [

        'completed' => [

            'subject'           => 'Eksportēšana ir pabeigta',
            'description'       => 'Eksportēšanas fails ir gatavs lejupielādei no šīs saites:',

        ],

        'failed' => [

            'subject'           => 'Eksportēšana neizdevās',
            'description'       => 'Nevar izveidot eksportēšanas failu šādas problēmas dēļ:',

        ],

    ],

    'messages' => [

        'mark_read'             => ':type ir izlasīts šis paziņojums!',
        'mark_read_all'         => ':type ir izlasīti visi paziņojumi!',
        'new_app'               => ':type programma ir publicēta.',
        'export'                => 'Jūsu <b>:type</b> eksportēšanas fails ir gatavs <a href=":url" target="_blank"><b>lejupielādei</b></a>.',
        'import'                => 'Jūsu <b>:type</b> līnijas <b>:count</b> dati ir veiksmīgi importēti.',

    ],
];
