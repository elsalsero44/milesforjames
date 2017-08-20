<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    
    $context = [
        'pageTitle' => 'Events',
        'contentTitle' => 'Join Us...'
    ];
    
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/events.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>