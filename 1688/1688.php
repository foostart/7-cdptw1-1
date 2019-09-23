<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/1688.less', 'css/1688.css');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1688</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />   
        <link href="<?php echo $url_path ?>/css/1688.css" rel="stylesheet" type="text/css" /> 
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" ></script>  
        <script src="<?php echo $url_path ?>/js/jquery.min.js" ></script>
        <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
        <script src="<?php echo $url_path ?>/js/jquery.star-rating-svg.js"></script>
        <link href="<?php echo $url_path ?>/css/star-rating-svg.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include $dir_block.'/1688-content.php';?>
        <script src="<?php echo $url_path ?>/js/1688.js"></script>
    </body>
</html>