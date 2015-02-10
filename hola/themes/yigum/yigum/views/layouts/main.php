<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->  
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Responsive Theme | YiGum</title>
    <meta name="description" content="YiGumb theme for yii" />
    

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />

    
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/gumby.css" />
    

    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/libs/modernizr-2.6.2.min.js'); ?>
    <style>
      .navbar {
        background: none repeat scroll 0 0 #38163A;
        display: block;
        margin-bottom: 20px;
        min-height: 60px;
        width: 100%;
      }
      #footer{
        background: #000000;                
      }
      .gumby-no-touch .navbar ul li:hover > a,
      .gumby-touch .navbar ul li.active > a {
        position: relative;
        background: #553857;
        z-index: 1000;
      }
    a {
      color: #A62397;
      line-height: inherit;
      outline: 0 none;
      text-decoration: none;
    }
    a:hover{
      color: #C5003C;
    }
    </style>
  </head>

  <body>
    <nav id="navbar-main-nav" class="navbar">
    <div class="row">
      <a class="toggle" gumby-trigger="#navbar-main-nav #main-nav" href="#"><i class="icon-menu"></i></a>
      <h1 class="four columns logo">
      <a href="/"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/yigum.png" gumby-retina /></a>
    </h1>
    <nav class="ten columns pull_right">
      <?php $this->widget('zii.widgets.CMenu',array(
        'id'=>'main-nav',
      'items'=>array(
        array('label'=>'Home', 'url'=>array('/site/index')),
        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
        array('label'=>'Contact', 'url'=>array('/site/contact')),
        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    )); ?>
    
    
    </nav>
  </div>
</nav>


    <div class="wrapper nopad">
      <div class="row">    
        <h1><?php echo $this->pageTitle;?></h1>
          <?php echo $content; ?>
    </div>
  </div>

  <div id="footer" class="wrapper">
    <footer class="row" >
      <div class="six columns">
        <p><span class="nobr">Yii Theme by <a href="http://www.brygom.com/" target="_blank" title="BryGom">BryGom</a></span></p>    
        
        <a href="#"><i class="icon-twitter"></i></a>
        <a href="#"><i class="icon-facebook"></i></a>
        <a href="#"><i class="icon-gplus"></i></a>
      </div>
      <div class="eight columns">
        <div class="row">
          <?php $this->widget('zii.widgets.CMenu',array(
        'id'=>'main-nav',
      'items'=>array(
        array('label'=>'Home', 'url'=>array('/site/index')),
        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
        array('label'=>'Contact', 'url'=>array('/site/contact')),
        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
      'htmlOptions'=>array('style'=>'float:right; text-align:right;'),
    )); ?>

        </div>
      </div>
    </footer>
  </div>

  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/libs/jquery-2.0.2.min.js'); ?>  
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/libs/gumby.min.js'); ?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/plugins.js'); ?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/main.js'); ?>
  </body>
</html>

