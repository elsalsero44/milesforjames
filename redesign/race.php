<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    include ("php/constants.php");
    
    $context = [
        'pageTitle' => 'Head For Safety 5K',
        'contentTitle' => 'Head For Safety 5K',
        'raceYear' => $c_szRaceYear,
        'raceId' => $c_szRaceId,
        'registrationOpen' => $c_bRegistrationOpen,
        'showPledgeChallenge' => $c_bShowPledgeChallenge,
        'raceResults' => [
            [
                'name' => '2016 Head For Safety 5K',
                'date' => 'October 1, 2016',
                'ageLink' => 'http://www.racetime.info/wp-content/uploads/2016/10/MFJ-Head-For-Safety-5K-Age-Group-Results.htm',
                'overallLink' => 'http://www.racetime.info/wp-content/uploads/2016/10/MFJ-Head-for-Safety-5K-Overall-Results.htm'
            ],
            [
                'name' => '2015 Miles For James 5K',
                'date' => 'September 19, 2015',
                'ageLink' => '',
                'overallLink' => ''
            ],
            [
                'name' => '2014 Miles For James 5K',
                'date' => 'September 27, 2014',
                'ageLink' => '',
                'overallLink' => ''
            ],
            [
                'name' => '2013 Miles For James 5K',
                'date' => 'September 21, 2013',
                'ageLink' => '',
                'overallLink' => ''
            ],
            [
                'name' => '2012 Miles For James 5K',
                'date' => 'September 22, 2012',
                'ageLink' => '',
                'overallLink' => ''
            ],
            [
                'name' => '2011 Miles For James 5K',
                'date' => 'September 10, 2011',
                'ageLink' => '',
                'overallLink' => ''
            ],
            [
                'name' => '2010 Miles For James 5K',
                'date' => 'August 14, 2010',
                'ageLink' => '',
                'overallLink' => ''
            ]
        ]
    ];
    
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/race.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>