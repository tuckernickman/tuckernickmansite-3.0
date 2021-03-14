<?php 

    // $section = [
    //     "div" => 
    //     "item" =
    //     fill in html elements in this php array
    // ];

    // echo section containing $content 
    

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

    function loopThrough($strArray) {
        $imgElement = getElementById('imgMorph');
    
        foreach ($strArray as $i=>$strArray) {
            $imgElement.setAttribute('src', $strArray[$i]);
            // sleep(10);
        }
    }
    
    function prntImgArr($strArray)
    {
    foreach ($strArray as $i=>$strArray){
    $content[$i] = '<div class="col">'.'
    <a href="" class="field-group-link project-link d-block p-visible">'.'
        <div class="project-img bg">'.'
            <img id="imgMorph "class="img-fluid" src='.$strArray[$i].'alt="needles and sandstone">
        </div>
        <div class="project-year">
            <small>
                    Needles Biomorph, 2021
            </small>
        </div>
            <h3 class="font1 font-change">2021</h3>
    </a>
    </div>';
    }
    foreach($strArray as $i=>$strArray){
    $rowWrapper = '<div class="row">'.$content[$i].$content[$i+1].$content[$i+2].'</div>';
    }
    
    return $rowWrapper;
    }
?>