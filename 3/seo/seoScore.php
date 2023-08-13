<?php
require_once "page/index.php";
function titleGetContent(string $html){
    $titleContent = "";
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<title>') && str_contains($decodedHtml, '</title>')) {
        for ($i=strpos($decodedHtml, "<title>") + 7; $i < strpos($decodedHtml, "</title>"); $i++) { 
            $titleContent .= $decodedHtml[$i];
        }
    }
    return  trim($titleContent);
}


function metaDescription(string $html){
    $metaContent = "";
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<meta name="description"')) {
        echo "bolobl2";
        }
}
// metaDescription($page);


function metaViewport(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<meta name="viewport" content="viewport-content"')) {
        return true;
        }
}
function metaRobots(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<meta charset="robots-content"')) {
        return true;
        }
}
function metaCharset(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<meta charset="charset-value">')) {
        return true;
        }
}

function include_h1(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<h1>') && str_contains($decodedHtml, '</h1>')) {
        return true;
        }
}

function include_h2(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<h2>') && str_contains($decodedHtml, '</h2>')) {
        return true;
        }
}

function include_h3(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<h3>') && str_contains($decodedHtml, '</h3>')) {
        return true;
        }
}

function include_header(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<header>') && str_contains($decodedHtml, '</header>')) {
        return true;
        }
}
function include_section(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<section>') && str_contains($decodedHtml, '</section>')) {
        return true;
        }
}
function include_footer(string $html){
    global $page;
    $decodedHtml = html_entity_decode(htmlentities($page));
    if (str_contains($decodedHtml, '<footer>') && str_contains($decodedHtml, '</footer>')) {
        return true;
        }
}

function seoScore(string $html){
    $score = 0;
    global $page;
    strlen(titleGetContent($page)) <= 60 ? $score = 10 : $score = 7;
    metaViewport($page) ? $score = 10 : $score;
    metaRobots($page) ? $score = 10 : $score;
    metaCharset($page) ? $score = 10 : $score;
    include_h1($page) ? $score = 10 : $score;
    include_h2($page) ? $score = 5 : $score;
    include_h3($page) ? $score = 5 : $score;
    include_header($page) ? $score = 10 : $score;
    include_section($page) ? $score = 10 : $score;
    include_footer($page) ? $score = 10 : $score;


    return $score;
}









?>