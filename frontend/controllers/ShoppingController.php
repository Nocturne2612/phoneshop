<?php

namespace frontend\controllers;
use Yii;
use yii\web\session;
use frontend\models\Product;
use frontend\common\cart;

class ShoppingController extends \yii\web\Controller
{

    // public $infoCart;
    public function actionAddcart($id)
    {
        
    	$cart = new Cart();
    	$cart->addcart($id);
        $session= yii::$app->session;
        $infoCart= $session['cart'];
      	$totalAmount=$total=0;
    	if (is_array($infoCart) || is_object($infoCart)){
            foreach (($infoCart) as $key => $value) 
            {
                $totalAmount +=$value['sl'];
                $total+=$value['price'] * $value['sl'];
            }
        }
    	return $this->renderAjax('cart',['infoCart'=> $infoCart,'cartInfo'=>$totalAmount."-".$total]);
    }
    public function actionDelcart($id)
    {
      
        $cart = new Cart();
        $cart->delcart($id);
        $session= yii::$app->session;
        $infoCart= $session['cart'];
        $totalAmount=$total=0;
         if (is_array($infoCart) || is_object($infoCart)){
            foreach (($infoCart) as $key => $value) 
            {
                $totalAmount +=$value['sl'];
                $total+=$value['price'] * $value['sl'];
            }
        }
        return $this->renderAjax('cart',['cartInfo'=>$totalAmount."-".$total]);
    }

}
