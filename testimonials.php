<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    include ("php/constants.php");
    
    $context = [
        'pageTitle' => 'Testimonials',
        'contentTitle' => 'We heart James!'
    ];
    
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/testimonials.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>