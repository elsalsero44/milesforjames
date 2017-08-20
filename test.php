<?
require_once 'vendor/autoload.php';
$context['site']['page'] = 'home';
$dust = new \Dust\Dust();
$template = $dust->compileFile('templates/pages/home.dust');
$output = $dust->renderTemplate($template, $context);
echo($output);
?>