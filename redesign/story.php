<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    include ("php/constants.php");
    
    $context = json_decode('{
        "pageTitle": "James\'s Story",
        "contentTitle": "The Right Time: James\'s Story"
    }');
        
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/story.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>