<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Product;

class newArrivalsWidget extends Widget
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
    	$data = $product->getProductByDesc($type);
        return $this->render('newArrivalsWidget',['type'=>$this->type,'data'=>$data]);
    }
}

?>