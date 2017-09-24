<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Product;

class randomWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
    	$product = new Product();
    	$queryRandom = $product->getRandom();
        return $this->render('randomWidget',['queryRandom'=>$queryRandom]);
    }
}

?>