<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Het :attribute moet geaccepteerd worden.',
    'active_url'           => 'Het :attribute is geen geldige URL.',
    'after'                => 'Het :attribute moet een datum na :date zijn.',
    'after_or_equal'       => 'Het :attribute moet een datum na of gelijk aan :date zijn.',
    'alpha'                => 'Het :attribute mag alleen letters bevatten.',
    //todo zoek naam op van - (dash)
    'alpha_dash'           => 'Het :attribute mag alleen letters, nummers en - bevatten.',
    'alpha_num'            => 'Het :attribute mag alleen letters en nummbers bevatten.',
    'array'                => 'Het :attribute moet een lijst zijn (array).',
    'before'               => 'Het :attribute moet een datum zijn voor :date.',
    'before_or_equal'      => 'Het :attribute moet een datum zijn voor of gelijk aan :date',
    'between'              => [
        'numeric' => 'Het :attribute moet tussen :min en :max zitten.',
        'file'    => 'Het :attribute moet binnen :min en :max kilobytes zitten.',
        'string'  => 'Het :attribute moet binnen :min en :max tekens zitten.',
        //todo verzin een betere naam dan opties voor items
        'array'   => 'Het :attribute moet binnen :min en :max opties zitten.',
    ],
    'boolean'              => 'Het :attribute moet of waar of niet waar zijn. (true/false)',
    'confirmed'            => 'Het :attribute bevestiging komt niet overeen.',
    'date'                 => 'Het :attribute is geen geldige datum.',
    //todo vertaal format
    'date_format'          => 'Het :attribute komt niet overeen met het format :format.',
    'different'            => 'Het :attribute en :other moeten verschillend zijn.',
    'digits'               => 'Het :attribute moet :digits cijfers hebben.',
    'digits_between'       => 'Het :attribute moet tussen de :min en :max cijfers zitten.',
    'dimensions'           => 'Het :attribute heeft ongeldige formaten in de afbeelding.',
    'distinct'             => 'Het :attribute heeft een dubbele waarde.',
    'email'                => 'Het :attribute moet een geldig email adres zijn.',
    'exists'               => 'Het geselecteerde :attribute is ongeldig.',
    'file'                 => 'Het :attribute moet een bestand zijn.',
    'filled'               => 'Het :attribute veld moet een waarde hebben.',
    'image'                => 'Het :attribute moet een afbeelding zijn.',
    'in'                   => 'Het geselecteerde :attribute is ongeldig.',
    'in_array'             => 'Het :attribute veld bestaat niet in :other.',
    'integer'              => 'Het :attribute moet een heel getal zijn (geen komma getal).',
    'ip'                   => 'Het :attribute moet een geldig IP adres zijn.',
    'ipv4'                 => 'Het :attribute moet een geldig IPv4 adres zijn.',
    'ipv6'                 => 'Het :attribute moet een geldig IPv6 adres zijn.',
    //todo verzin een betere naam dan JSON string voor JSON string
    'json'                 => 'Het :attribute moet een geldige JSON string zijn.',
    'max'                  => [
        'numeric' => 'Het :attribute mag niet groter zijn dan :max.',
        'file'    => 'Het :attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => 'Het :attribute mag niet langer zijn dan :max tekens.',
        //todo verzin een betere naam dan opties voor items
        'array'   => 'Het :attribute mag niet meer dan :max opties hebben.',
    ],
    'mimes'                => 'Het :attribute moet een bestand van het type :values zijn.',
    'mimetypes'            => 'Het :attribute moet een bestand van het type :values zijn.',
    'min'                  => [
        'numeric' => 'Het :attribute moet op zijn minst :min zijn.',
        'file'    => 'Het :attribute moet op zijn minst :min kilobytes zijn.',
        'string'  => 'Het :attribute moet op zijn minst :min tekens lang zijn.',
        //todo verzin een betere naam dan opties voor items
        'array'   => 'Het :attribute moet op zijn minst :min opties hebben.',
    ],
    'not_in'               => 'Het geselecteerde :attribute is ongeldig.',
    'numeric'              => 'Het :attribute moet een getal zijn.',
    'present'              => 'Het :attribute veld moet aanwezig zijn.',
    //todo vertaal format
    'regex'                => 'Het :attribute format is ongeldig.',
    'required'             => 'Het :attribute veld is verplicht.',
    'required_if'          => 'Het :attribute veld is verplicht als :other :value is.',
    'required_unless'      => 'Het :attribute veld is verplicht tenzij :other in :values zit.',
    'required_with'        => 'Het :attribute veld is verplicht als :values aanwezig is.',
    'required_with_all'    => 'Het :attribute veld is verplicht als :values aanwegig is.',
    'required_without'     => 'Het :attribute veld is verplicht als :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer er niets uit :values aanwezig zijn.',
    'same'                 => 'Het :attribute en :other moeten overeen komen.',
    'size'                 => [
        'numeric' => 'Het :attribute moet :size groot zijn.',
        'file'    => 'Het :attribute moet :size kilobytes groot zijn.',
        'string'  => 'Het :attribute moet :size tekens hebben.',
        //todo verzin een betere naam dan opties voor items
        'array'   => 'Het :attribute moet :size opties bevatten.',
    ],
    'string'               => 'Het :attribute moet een zin zijn.',
    'timezone'             => 'Het :attribute moet een geldige tijdzone zijn.',
    'unique'               => 'Het :attribute is al in gebruik.',
    'uploaded'             => 'Het :attribute is gefaald om te uploaden.',
    //todo vertaal format
    'url'                  => 'Het :attribute format is ongeldig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
