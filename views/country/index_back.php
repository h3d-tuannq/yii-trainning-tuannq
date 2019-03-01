<?php
/**
 * Created by PhpStorm.
 * User: tuann
 * Date: 10/23/2018
 * Time: 00:45
 */
    use yii\helpers\Html;
    use yii\widgets\LinkPager;
?>

<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->code} ({$country->name})") ?>:
            <?= $country->population ?>
        </li>
    <?php endforeach; ?>

    <?= LinkPager::widget(['pagination' => $pagination])  ?>

</ul>
