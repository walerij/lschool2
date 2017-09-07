
<head>
    <title>
        school

    </title>
 <?php $this->head();

 use yii\bootstrap\NavBar;
 ?>
</head>
<body>
<?php $this->beginBody(); ?>
    <?php
    NavBar::begin([
         'brandLabel' =>'School',
          'brandUrl' =>Yii::$app->homeUrl,
          'options' =>[
                  'class'=>'navbar navbar-default'
          ]
      ]);
    if(Yii::$app->user->isGuest)
        $menu= [
                ['label'=>'Join', 'url'=>['/user/join']],
                ['label'=>'Login', 'url'=>['/user/login']]
        ];
    else
        $menu= [
            ['label'=>Yii::$app->user->getIdentity()->name],
            ['label'=>'Logout', 'url'=>['/user/logout']]
        ];
    echo \yii\bootstrap\Nav::widget([
            'options' => ['class'=>'nav navbar-nav navbar-right'], 'items'=>$menu
    ]);
      NavBar::end();
    ?>
 <div class="container">
     <?=$content?>
 </div>



</body>
<?php $this->endBody(); ?>
<?php $this->endPage(); ?>