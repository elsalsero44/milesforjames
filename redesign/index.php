<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    include ("php/constants.php");
    
    $context = [
        'pageTitle' => 'Home',
        'contentTitle' => ''
    ];
    
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/home.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>