<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    include ("php/constants.php");
    
    $context = [
        'pageTitle' => 'Home',
        'contentTitle' => '',
        'raceResult' => [
            'name' => '2016 Head For Safety 5K',
            'date' => 'October 1, 2016',
            'ageLink' => 'http://www.racetime.info/wp-content/uploads/2016/10/MFJ-Head-For-Safety-5K-Age-Group-Results.htm',
            'overallLink' => 'http://www.racetime.info/wp-content/uploads/2016/10/MFJ-Head-for-Safety-5K-Overall-Results.htm'
        ]
    ];
    
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/home.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>