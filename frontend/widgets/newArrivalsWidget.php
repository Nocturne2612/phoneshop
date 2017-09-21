<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class newArrivalsWidget extends Widget
{
    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        return $this->render('newArrivalsWidget');
    }
}

?>