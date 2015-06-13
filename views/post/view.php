<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
?>
<div class="post-view col-md-8 col-md-offset-2">

    <h1><?= Html::encode($this->title) ?></h1>

    <small><?php echo $model->creation_date ?></small>

    <p>
        <?php echo $model->content ?>
    </p>

</div>
