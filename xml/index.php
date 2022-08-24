<?php

    $xml = simplexml_load_file('example.xml');

    // echo $xml->producer[1]->name.' is '.$xml->producer[1]->age;

    foreach($xml -> producer as $producer){
        echo $producer->name.' ('.$producer->age.')<br>';


        foreach($producer->show as $show){
            echo $show->showname.' on '.$show->showdate.'<br>';
        }
    }



    $video = simplexml_load_file('http://gdata.youtube.com/feeds/api/videos/ILczf4lcvz8');
    echo '<strong>Title:</strong> <br>'.$video->title;
    echo '<strong>Description</strong>: <br>'.$video->content;

?>