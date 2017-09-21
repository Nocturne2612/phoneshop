<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class yourCartWidget extends Widget
{
    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        return $this->render('yourCartWidget');
    }
}

?>