
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
          'brandUrl' => '#',
          'options' =>[
                  'class'=>'navbar navbar-default'
          ]
      ]);
      NavBar::end();
    ?>
 <div class="container">
     <?=$content?>
 </div>



</body>
<?php $this->endBody(); ?>
<?php $this->endPage(); ?>