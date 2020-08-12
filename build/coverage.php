<?php
require_once(__DIR__ . '/../vendor/autoload.php');

$cli = new \League\CLImate\CLImate();

$xmlStr = @file_get_contents(__DIR__ . '/test-results/clover.xml');
if ($xmlStr===false){
    $cli->error('Could not read ' .__DIR__ . '/test-results/clover.xml');
    return 0;
}

/** @noinspection PhpComposerExtensionStubsInspection */
$xml = new \SimpleXMLElement($xmlStr);
$metrics = $xml->project->metrics;
$statements = (int)$metrics['statements'];
$coveredStatements = (int)$metrics['coveredstatements'];


if ($statements === 0) {
    $cli->yellow('There are 0 statement in to cover');
    return 0;
}

$ratio = $coveredStatements / $statements * 100;
$ratio = round($ratio, 2);

$trigger = (count($argv) === 2) ? $argv[1] : 90;

if ($ratio < $trigger) {
    $cli->error("Less than $trigger% of statements are covered: $ratio%");
    throw new \Exception("Less than $trigger% of statements are covered: $ratio%");
}

$cli->green("Congrats $trigger% of statements or more are covered: $ratio%");
return 0;
