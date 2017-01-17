<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // ... other components
	     'authManager' => [
	        'class' => 'yii\rbac\DbManager',
	    ],
    ],
    'name' => 'My-Yii Blog',

    
];
