<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Product;

class featuredWidget extends Widget
{
	public $type;
    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$type = $this->type;
    	$product = new Product();
    	$data = $product->getProductBy($type);
        $queryRandom = $product->getRandom();
        return $this->render('featuredWidget',['type'=>$this->type,'data'=>$data,'queryRandom'=>$queryRandom]);
    }
}

?>