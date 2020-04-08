<?php 

function get_rates($id) {
    
    if(!$id) {
        $id = get_the_ID();
    }

    $rates = get_field('rates', $id);
    // Przenieść do funkcji
    if ($rates) {
        $deineBewertung = 0;
        $kundenservice = 0;
        $erreichbarkeit = 0;
        $preisLeistungsVerhaeltnis = 0;
        $sicherheitZuverlae = 0;
        $bankWeiterempfehlen = 0;
        $ratesCount = count($rates);
        foreach ($rates as $rate) {
            $content = $rate['content'];
            $deineBewertung += $content['deineBewertung'];
            $kundenservice += $content['kundenservice'];
            $erreichbarkeit += $content['erreichbarkeit'];
            $preisLeistungsVerhaeltnis += $content['preisLeistungsVerhaeltnis'];
            $sicherheitZuverlae += $content['sicherheitZuverlae'];
            $bankWeiterempfehlen += $content['bankWeiterempfehlen'];
        }
    
        $rateOveral = [
            'deineBewertung'=> round($deineBewertung / $ratesCount,1),
            'kundenservice'=> round($kundenservice / $ratesCount,1),
            'erreichbarkeit'=> round($erreichbarkeit / $ratesCount,1),
            'preisLeistungsVerhaeltnis'=> round($preisLeistungsVerhaeltnis / $ratesCount,1),
            'sicherheitZuverlae'=> round($sicherheitZuverlae / $ratesCount,1),
            'bankWeiterempfehlen'=> round($bankWeiterempfehlen / $ratesCount,1),
        ];
    }
    return $rateOveral;
}