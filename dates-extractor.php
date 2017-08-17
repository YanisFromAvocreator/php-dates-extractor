<?php
function find_date($text){

    $months_model = [
        "FR" => [
            "long" => [
                "accent" => [
                    "janvier",
                    "février",
                    "mars",
                    "avril",
                    "mai",
                    "juin",
                    "juillet",
                    "août",
                    "septembre",
                    "octobre",
                    "novembre",
                    "décembre"
                ],
                "no_accent" => [
                    "janvier",
                    "fevrier",
                    "mars",
                    "avril",
                    "mai",
                    "juin",
                    "juillet",
                    "aout",
                    "septembre",
                    "octobre",
                    "novembre",
                    "decembre"
                ]
            ],
            "short" => [
                "accent" => [
                    "janv",
                    "fév",
                    "mars",
                    "avr",
                    "mai",
                    "juin",
                    "juill",
                    "août",
                    "sept",
                    "oct",
                    "nov",
                    "déc"
                ],
                "no_accent" => [
                    "janv",
                    "fev",
                    "mars",
                    "avr",
                    "mai",
                    "juin",
                    "juill",
                    "aout",
                    "sept",
                    "oct",
                    "nov",
                    "dec"
                ]
            ]
        ],
        "EN" => [
            "long" => [
                "january",
                "febuary",
                "march",
                "april",
                "may",
                "june",
                "july",
                "august",
                "september",
                "november",
                "december"
            ],
            "short" => [
                "jan",
                "feb",
                "mar",
                "apr",
                "may",
                "june",
                "july",
                "aug",
                "sept",
                "nov",
                "dec"
            ]
        ]
    ];
            
    $cluster = array();

    $cluster['FR_LG_ACC'] = implode('|', $months_model['FR']['long']['accent']);
    $cluster['FR_LG_NOACC'] = implode('|', $months_model['FR']['long']['no_accent']);
    $cluster['FR_SH_ACC'] = implode('|', $months_model['FR']['short']['accent']);
    $cluster['FR_SH_NOACC'] = implode('|', $months_model['FR']['short']['no_accent']);
    $cluster['EN_LG'] = implode('|', $months_model['EN']['long']);
    $cluster['EN_SH']= implode('|', $months_model['EN']['short']);

    $BIG_cluster = implode('|', $cluster);

    $regex = "/(\d{1,2}|\d{4})(\/|\-|\.|\s)(\d{1,2}|".$BIG_cluster.")(\/|\-|\.|\s)(\d{4}|\d{1,2})/i";    

    preg_match_all($regex, $text, $matches, PREG_SET_ORDER, 0);

    $rslt = null;
    if( count($matches) > 0 ){
        $rslt = array();
        foreach( $matches as $matche ){
            $rslt[] = trim($matche[0]);
        }
    }

    return $rslt;

}
?>
