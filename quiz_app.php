<?php

// questions
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'What wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

// answers from the user
$answers = [];
foreach($questions as $index => $question){
    echo ($index+1) . "." . $question['question'] . "\n";
    $answers[] = trim(readLine("Your Answer: "));
}

// Evaluate Function
function evaluateQuiz(array $questions, array $answers): int{
    $score = 0;
    foreach($questions as $index => $question){
        if($answers[$index] === $question['correct']){
            $score++;
        }
    }
    return $score;
}

// Calculate Score
$score = evaluateQuiz($questions, $answers);

echo "You scored $score out of ". count($questions). ".\n";

if($score === count($questions)){
    echo "Excellent Job! \n";
}elseif($score > 1){
    echo "Good Effort! \n";
}else{
    echo "Better Luck Next Time!";
}