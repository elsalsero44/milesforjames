<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    
    $context = json_decode('{
        "pageTitle": "Sponsorship",
        "contentTitle": "Be A Sponsor",
        "layout": "one-column"
    }');
        
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/sponsorship.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>