<?php
    #returns a fontawesome icon
    function i($code){
        $icon = '<i class="fa fa-'.$code.'"></i>';
        return $icon;
    };

    function structured_date($timestamp){
        // var_dump($timestamp);
        return date("M D Y H:i A", $timestamp);
    };

    
    function structured_time($seconds){
        $h = floor(($seconds/60)/60);
        $m = round(($seconds/60)-($h * 60));

        return $h.' hrs : '.$m.' mins';
    };

    function save($data){
        $json = json_encode($data);
        $file = fopen('data.json', 'w');
        fwrite($file, $json);
    };

?>