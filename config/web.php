<?php
  return [
      'id' =>'l-school',
      'basePath'=>realpath(__DIR__.'/../'),
      'bootstrap' => ['debug'],
      'components'=>[
          'urlManager' =>[
              'enablePrettyUrl'=>true,
              'showScriptName' =>false
          ],
          'request'=>['cookieValidationKey'=>'fkmj0k'],
          'db'=>require (__DIR__.'/db.php'),
          'user'=>[
              'identityClass'=>'app\models\UserIdentity'
          ]

      ]
      ,
      'modules' =>['debug'=>[
          'class' => 'yii\debug\Module',]
      ]


  ];
?>