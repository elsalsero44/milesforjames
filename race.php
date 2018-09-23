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
                'name' => '2018 Head For Safety 5K',
                'date' => 'September 22, 2018',
                'ageLink' => 'http://www.racetime.info/wp-content/uploads/2018/09/MFJ-Head-For-Safety-5K-Age-Group-Results.pdf',
                'overallLink' => 'http://www.racetime.info/wp-content/uploads/2018/09/MFJ-Head-For-Safety-5K-Overall-Results.pdf'
            ],
            [
                'name' => '2017 Head For Safety 5K',
                'date' => 'September 29, 2017',
                'ageLink' => 'http://www.racetime.info/wp-content/uploads/2017/10/Head-for-Safety-5K-Age-Group-Results-1.htm',
                'overallLink' => 'http://www.racetime.info/wp-content/uploads/2017/10/Head-for-Safety-5K-Overall-Results-1.htm'
            ],
            [
                'name' => '2016 Head For Safety 5K',
                'date' => 'October 1, 2016',
                'ageLink' => 'http://www.racetime.info/wp-content/uploads/2016/10/MFJ-Head-For-Safety-5K-Age-Group-Results.htm',
                'overallLink' => 'http://www.racetime.info/wp-content/uploads/2016/10/MFJ-Head-for-Safety-5K-Overall-Results.htm'
            ],
            [
                'name' => '2015 Miles For James 5K',
                'date' => 'September 19, 2015',
                'ageLink' => 'http://racetime.info/wp-content/uploads/2015/09/Miles-For-James-5K-Age-Group-Results.htm',
                'overallLink' => 'http://racetime.info/wp-content/uploads/2015/09/Miles-For-James-5K-Overall-Results.htm"'
            ],
            [
                'name' => '2014 Miles For James 5K',
                'date' => 'September 27, 2014',
                'ageLink' => 'http://racetime.info/wp-content/uploads/2014/09/Miles-For-James-5K-Age-Group-Results.htm',
                'overallLink' => 'http://racetime.info/wp-content/uploads/2014/09/Miles-For-James-5K-Overall-Results.htm'
            ],
            [
                'name' => '2013 Miles For James 5K',
                'date' => 'September 21, 2013',
                'ageLink' => 'http://www.racetime.info/wp-content/uploads/2013/09/MILES-FOR-JAMES-5K-AGE-GROUP-RESULTS.htm',
                'overallLink' => 'http://www.racetime.info/wp-content/uploads/2013/09/MILES-FOR-JAMES-5K-OVERALL-RESULTS.htm'
            ],
            [
                'name' => '2012 Miles For James 5K',
                'date' => 'September 22, 2012',
                'ageLink' => './documents/results/2012/MILES-FOR-JAMES-5K-AGE-GROUP-RESULTS.htm',
                'overallLink' => './documents/results/2012/MILES-FOR-JAMES-5K-OVERALL-RESULTS.htm'
            ],
            [
                'name' => '2011 Miles For James 5K',
                'date' => 'September 10, 2011',
                'ageLink' => './documents/results/2011/MFJ_AgeGroupResults.HTM',
                'overallLink' => './documents/results/2011/MFJ_OverallFinishlist.HTM'
            ],
            [
                'name' => '2010 Miles For James 5K',
                'date' => 'August 14, 2010',
                'ageLink' => './documents/results/2010/MILES_FOR_JAMESR.webarchive',
                'overallLink' => './documents/results/2010/MILES_FOR_JAMESO-1.webarchive'
            ]
        ]
    ];

    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/race.dust');
    $output = $dust->renderTemplate($template, $context);
    
    echo($output);
?>