<?php

return [

    'success' => [
        'added'             => ':type pievients!',
        'updated'           => ':type atjaunināts!',
        'deleted'           => ':type dzēsts!',
        'duplicated'        => ':type kopēts!',
        'imported'          => ':type importēts!',
        'import_queued'     => ':type importēšana ir ieplānota! Jūs saņemsit e-pasta ziņojumu, kad tas būs pabeigts.',
        'exported'          => ':type eksportēts!',
        'export_queued'     => ':type ir ieplānota pašreizējās lapas eksportēšana! Jūs saņemsit e-pasta ziņojumu, kad tas būs gatavs lejupielādei.',
        'enabled'           => ':type iespējots!',
        'disabled'          => ':type atspējots!',

        'clear_all'         => 'Lieliski! Jūs notīrījāt visas savas :type.',
    ],

    'error' => [
        'over_payment'      => 'Kļūda: maksājums nav pievienots! Ievadītā summa veido šādu kopsummu: :amount',
        'not_user_company'  => 'Kļūda: Jums nav tiesības strādāt ar šo uzņēmumu!',
        'customer'          => 'Kļūda: Lietotājs nav izveidots! :name jau lieto šādu e-pasta adresi.',
        'no_file'           => 'Kļūda: Fails nav izvēlēts!',
        'last_category'     => 'Kļūda: Nevar izdzēst pēdējo :type kategoriju!',
        'change_type'       => 'Kļūda: tipu nevar mainīt, jo tas ir saistīts ar tekstu!',
        'invalid_apikey'    => 'Kļūda: ievadītā API atslēga nav derīga!',
        'import_column'     => 'Kļūda: :message Lapas nosaukums: :sheet. Rindas numurs: :line.',
        'import_sheet'      => 'Kļūda: Lapas nosaukums nav pareizs. Lūdzu pārbaudiet parauga failu.',
    ],

    'warning' => [
        'deleted'           => 'Brīdinājums: Jums nav tiesību dzēst <b>:name</b> jo tas ir saistīts ar :text.',
        'disabled'          => 'Brīdinājums: Jums nav tiesību atspējot <b>:name</b> jo tas ir saistīts ar :text.',
        'reconciled_tran'   => 'Brīdinājums: jums nav atļauts mainīt/dzēst transakciju, jo tā ir saskaņota!',
        'reconciled_doc'    => 'Brīdinājums. Jums nav atļauts mainīt/dzēst: tips, jo tam ir saskaņotas transakcijas!',
        'disable_code'      => 'Brīdinājums. Jums nav atļauts atspējot vai mainīt šādu valūtu  <b>:nosaukums</b>, jo tam ir :text saistīts.',
        'payment_cancel'    => 'Brīdinājums. Jūs atcēlāt savu neseno :method maksājumu!',
    ],

];
