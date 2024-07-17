<?php

namespace BrainGames\BrainEven;

use function \cli\line;
use function \cli\prompt;

function brain_even (){
	line('Welcome to the Brain Game!');
	$user_name = prompt('May I have your name?');
	line("Hello, %s!", $user_name);
	line("Answer \"yes\" if number even otherwise answer \"no\".");
	for ($i = 1; $i <= 3; $i++) {
		$question = rand (1, 100);
        line("Question: $question");
        $answer = prompt('Your answer');
        	if ($question % 2 == 0 and $answer == 'yes'){
            line('Correct!');
             }
            elseif ($question % 2 != 0 and $answer == 'no'){
            	 line('Correct!');
        } else {
            line("\"yes\" is wrong answer ;(. Correct answer was \"no\".");
            line("Let's try again, $user_name!");
            return;
        }
    }
      line("Congratulations, $user_name!");
  }

