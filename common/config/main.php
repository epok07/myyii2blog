<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'name' => 'My-Yii Blog',
    
    // ... other components
     'authManager' => [
        'class' => 'yii\rbac\DbManager',
    ],
];
