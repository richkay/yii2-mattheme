<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }
    richkay\web\AdminMatAssets::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/richkay/materialize/assets');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
		
        <?php $this->head() ?>
		<script type="text/javascript">
			var baseUrl = "<?= Yii::$app->getUrlManager()->getBaseUrl() ?>";
		</script>
    </head>
  <!-- BEGIN BODY -->
  <body class="fixed-topbar fixed-sidebar theme-sdtl color-default">
  <?php $this->beginBody() ?>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
	  <?= $this->render(
            'sidebar.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
		<?= $this->render(
            'topbar.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-thin">
		  <div class="header">
            <h2><strong>Page Title</strong></h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Module</a>
                </li>
                <li class="active">Controller</li>
              </ol>
            </div>
          </div>
			<?= $this->render(
					'content.php',
					['content' => $content, 'directoryAsset' => $directoryAsset]
			) ?>
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
    </section>
		<!-- BEGIN QUICKVIEW SIDEBAR -->
		
		<!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- END PRELOADER -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
	
   
    
    <script>
      $.material.init();
    </script>
	 <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
