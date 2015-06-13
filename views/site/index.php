<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Yii2 Blog</h1>

    </div>

    <div class="body-content">

        <?php foreach ($posts as $post) { ?>
            <div class="col-lg-4">
                <h2><?php echo $post->title ?></h2>
                <a class="btn btn-default" href="<?php echo yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>">Read</a></p>
            </div>
        <?php } ?>


    </div>
</div>
