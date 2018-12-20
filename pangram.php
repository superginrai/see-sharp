<?php

/**
 * pangram.php
 *
 * Self-Documenting Pangram Generator
 * CATS Software, Inc. Developer Quiz
 *
 * Author:
 * Date:
 */

class Pangram
{
    private $input;

    public function __construct(string $input)
    {
        $this->input = $input;
    }

    public function solve(): string
    {
        // Implement your solution here!

        
    }
}

class Timer
{
    private $startTime;

    public function start()
    {
        $this->startTime = microtime(true);
    }

    public function stop(): float
    {
        return microtime(true) - $this->startTime;
    }

    public function format(float $seconds)
    {
        return sprintf('%d:%02d:%07.4f', (int) ((int) $seconds / 3600), (int) $seconds, $seconds);
    }
}

$usage = "Usage: {$argv[0]} <sample|puzzle|stdin> " . PHP_EOL .
         '    sample: solve for the sample sentence' . PHP_EOL .
         '    puzzle: solve for the puzzle' . PHP_EOL .
         '    stdin:  solve for standard-in' . PHP_EOL;

if ($argc < 2) {
    echo $usage;
    exit(1);
}

$input = '';

switch ($argv[1]) {
    case 'stdin':
        $stdin = fopen('php://stdin', 'r');
        while (!feof($stdin))
        {
            $input = $input . fgets($stdin, 4096);
        }

        $input = trim($input) . ' ';

        fclose($stdin);
        break;

    case 'sample':
        $input = 'Only a fool would check that this sentence contains exactly ';
        break;

    case 'puzzle':
        $input = 'The solution to the CATS problem contains precisely ';
        break;

    default:
        echo $usage;
        exit(1);
}

$timer = new Timer();
$timer->start();

$pangram = new Pangram($input);
$output = $pangram->solve();

echo $output . PHP_EOL . PHP_EOL;

echo 'Execution time: ' . $timer->format($timer->stop()) . PHP_EOL;

// This is for you to implement!
// echo 'Iterations: ' . $pangram->getIterations() . PHP_EOL;