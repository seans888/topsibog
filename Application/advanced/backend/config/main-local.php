<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
<<<<<<< HEAD
            'cookieValidationKey' => 'TAY89g3hOwlqiK6BJIvH3LdsMXgEtuMt',
=======
            'cookieValidationKey' => 'fPWx5ISRyz5Pi2DhP6USIesk8a19sacF',
>>>>>>> 3874b29f26447399964dda52807b5a953761cf81
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
