<?php
  return [
      'id' =>'l-school',
      'basePath'=>realpath(__DIR__.'/../'),
      'components'=>[
          'urlManager' =>[
              'enablePrettyUrl'=>true,
              'showScriptName' =>false
          ]
      ]
   ];
?>