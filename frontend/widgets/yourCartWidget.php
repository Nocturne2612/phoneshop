<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use Yii;
use yii\web\session;

class yourCartWidget extends Widget
{
    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
    	$session= yii::$app->session;
    	$infoCart= $session['cart'];
        return $this->render('yourCartWidget',['infoCart'=>$infoCart]);
    }
}

?>