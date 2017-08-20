<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    
    $context = json_decode('{
        "pageTitle": "Donations",
        "contentTitle": "How To Donate",
        "layout": "two-column"
    }');
        
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/donations.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>