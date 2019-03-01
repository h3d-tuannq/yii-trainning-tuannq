<?php
/**
 * Created by PhpStorm.
 * User: tuann
 * Date: 10/22/2018
 * Time: 18:44
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>