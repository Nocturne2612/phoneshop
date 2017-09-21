<?php 
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class latestNewsWidget extends Widget
{
    public function initlatestNewsWidget()
    {
        parent::init();
        
    }

    public function run()
    {
        return $this->render('latestNewsWidget');
    }
}

?>