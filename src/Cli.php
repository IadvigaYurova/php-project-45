<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;


function brain_games(){

line('Welcome to the Brain Game!');
$user_name = prompt('May I have your name?');
line("Hello, %s!", $user_name);
}