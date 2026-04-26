<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function getCaptchaQuestion() {
    $n1 = rand(1, 5);
    $n2 = rand(1, 5);
    $sum = $n1 + $n2;

    $map = [
        0=>'nula',1=>'jedan',2=>'dva',3=>'tri',4=>'četiri',
        5=>'pet',6=>'šest',7=>'sedam',8=>'osam',9=>'devet',10=>'deset'
    ];

    if (isset($map[$sum])) {
        $_SESSION['captcha_answer'] = $map[$sum];
    } else {
        $_SESSION['captcha_answer'] = 'nepoznato';
    }

    return "$n1 + $n2 = ?";
}