<?php

return array(

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

    "accepted"             => ":attribute muss akzeptiert werden.",
    "active_url"           => ":attribute ist keine gültige URL.",
    "after"                => ":attribute muss ein Datum nach :date sein.",
    "alpha"                => ":attribute darf nur aus Buchstaben bestehen.",
    "alpha_dash"           => ":attribute darf nur aus Buchstaben, Ziffern und Bindestrichen bestehen.",
    "alpha_num"            => ":attribute darf nur aus Buchstaben und Ziffern bestehen.",
    "array"                => ":attribute muss ein Array sein.",
    "before"               => ":attribute muss ein Datum vor :date sein.",
    "between"              => array(
        "numeric" => ":attribute muss zwischen :min und :max sein.",
        "file"    => ":attribute muss zwischen :min und :max Kilobytes groß sein.",
        "string"  => ":attribute muss zwischen :min und :max Zeichen lan sein.",
        "array"   => ":attribute muss zwischen :min und :max Einträge besitzen.",
    ),
    "boolean"              => ":attribute Feld muss wahr oder falsch sein.",
    "confirmed"            => ":attribute stimmt nicht mit der Bestätigung überein.",
    "date"                 => ":attribute ist kein gültiges Datum.",
    "date_format"          => ":attribute passt nicht zu dem Format :format.",
    "different"            => ":attribute und :other müssen unterschiedlich sein.",
    "digits"               => ":attribute muss :digits Zeichen lang sein.",
    "digits_between"       => ":attribute muss zwischen :min und :max Zeichen lang sein.",
    "email"                => ":attribute muss eine gültige E-Mail-Adresse sein.",
    "exists"               => "Ausgewählt. :attribute ist ungültig.",
    "image"                => ":attribute muss ein Bild sein.",
    "in"                   => "Ausgewählt. :attribute ist ungültig.",
    "integer"              => ":attribute muss eine ganze Zahl sein.",
    "ip"                   => ":attribute muss eine gültige IP-Adresse sein.",
    "max"                  => array(
        "numeric" => ":attribute darf nicht größer sein als :max.",
        "file"    => ":attribute darf nicht größer sein als :max Kilobytes.",
        "string"  => ":attribute darf nicht länger sein als :max Zeichen.",
        "array"   => ":attribute darf nicht mehr als :max Einträge haben.",
    ),
    "mimes"                => ":attribute muss eine Datei des Typs :values sein.",
    "min"                  => array(
        "numeric" => ":attribute muss mindestens :min sein.",
        "file"    => ":attribute muss mindestens :min Kilobytes groß sein.",
        "string"  => ":attribute muss mindestens :min Zeichen lang sein.",
        "array"   => ":attribute muss mindestens :min Einträge haben.",
    ),
    "not_in"               => "Ausgewählt. :attribute ist ungültig.",
    "numeric"              => ":attribute muss eine Zahl sein.",
    "regex"                => ":attribute Formatierung ist ungültig.",
    "required"             => ":attribute Feld ist notwendig.",
    "required_if"          => ":attribute Feld ist notwendig, wenn :other :value ist.",
    "required_with"        => ":attribute Feld ist notwendig, wenn :values vorhanden ist.",
    "required_with_all"    => ":attribute Feld ist notwendig, wenn :values vorhanden ist.",
    "required_without"     => ":attribute Feld ist notwendig, wenn :values nicht vorhanden ist.",
    "required_without_all" => ":attribute Feld ist notwendig, wenn keine von :values vorhanden sind.",
    "same"                 => ":attribute und :other müssen übereinstimmen.",
    "size"                 => array(
        "numeric" => ":attribute muss :size groß sein.",
        "file"    => ":attribute muss :size Kilobytes groß sein.",
        "string"  => ":attribute muss :size Zeichen lang sein.",
        "array"   => ":attribute muss :size Einträge beinhalten.",
    ),
    "unique"               => ":attribute wurde bereits genommen.",
    "url"                  => ":attribute Formatierung ist ungültig.",
    "timezone"             => ":attribute muss eine gültige Zeitzone sein.",

    'dissimilar' => ":attribute und :other sind zu ähnlich.",
    'dissimilar_user' => ":attribute darf nicht so ähnlich sein wie :other.",
    'dissimilar_to_tracker_name' => ":attribute ist zu offensichtlich.", // They'll know why; no reason to advertise the reason to anyone looking over the user's shoulder
    'not_common_password' => ":attribute ist zu gängig.",

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

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

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

    'attributes' => [
        'irc_key' => "IRC Schlüssel",
    ],


    "sweetcaptcha" => 'Das Captcha ist ungültig.',

);
