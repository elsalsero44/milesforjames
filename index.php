<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    include ("php/constants.php");
    
    $context = [
        'pageTitle' => 'Home',
        'contentTitle' => '',
        'raceResult' => [
            'name' => '2018 Head For Safety 5K',
            'date' => 'September 22, 2018',
            'ageLink' => 'http://www.racetime.info/wp-content/uploads/2018/09/MFJ-Head-For-Safety-5K-Age-Group-Results.pdf',
            'overallLink' => 'http://www.racetime.info/wp-content/uploads/2018/09/MFJ-Head-For-Safety-5K-Overall-Results.pdf'
        ]
    ];
    
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/home.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>