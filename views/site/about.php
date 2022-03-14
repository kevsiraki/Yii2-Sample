<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is my first Yii Framework website! I am editing the views file found in:
    </p>

    <code><?= __FILE__ ?></code>
	<br><br>
	<p>
        A Couple Other Stacks/Frameworks I Use:
		<ul>
	<li>Laravel</li>
	<li>LAMP</li>
	<li>LEMP</li>
</ul>
    </p>
</div>
