<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    
    $context = json_encode('{}');
    
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/testimonials.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>