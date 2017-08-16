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
          'request'=>['cookieValidationKey'=>'fkmj0k']

      ]
      ,
      'modules' =>['debug'=>[
          'class' => 'yii\debug\Module',]
      ]


  ];
?>