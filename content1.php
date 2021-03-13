<?php 

    $section = [
        "div" => 
        "item" =
        fill in html elements in this php array
    ];

    echo section containing $content 


    $domAttribute = $dom -> createAttribute('type');
    $domAttribute -> value = 'text/css';

    $div = $dom -> createElement('div', $content);
    $domAttribute = $dom -> createAttribute('id');
    $domAttribute -> value = 'vidDiv';
    $domAttribute = $dom -> createAttribute('class');
    $domAttribute -> value = 'col';
    $div -> appendChild($domAttribute);
    $dom -> appendChild($div);

    $content = $dom -> createElement('iframe', play($video));
    $domAttribute = $dom -> createAttribute('id');
    $domAttribute -> value = 'video';
    $domAttribute = $dom -> createAttribute('class');
    $domAttribute -> value = 'col';
    $div -> appendChild($domAttribute);
    $dom -> appendChild($div);

    $videos = [
    $videos21 = [
        "https://www.youtube.com/embed/jkGlOVjVbic",
        "https://www.youtube.com/embed/y8iatQlDi5Q"
    ];

    $biomorphs20 = [
        "https://www.youtube.com/embed/y8iatQlDi5Q",
        "https://www.youtube.com/embed/CKNP2zSgQPo",
        "https://www.youtube.com/embed/7fJJdFSSGn0",
        "https://www.youtube.com/embed/JE-GQxtVjGs",
        "https://www.youtube.com/embed/oeO8Jwg1vGo"
    ];

    ];

    $videos->loop()

?>