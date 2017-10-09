<?php

namespace frontend\controllers;
use Yii;
use yii\web\session;
use frontend\models\Product;
use frontend\common\Cart;

class ShoppingController extends \yii\web\Controller
{

    // public $infoCart;
    // public function actionAddcart($id){
    //     $product = new Product();
    //     $data = $product->getProductByAttr($id);
    //     $qty = Yii::$app->getRequest()->getQueryParam('qty');
    //     $cart = new cart();
    //     $cart->addCart($id,$data,$qty);
        
    // }

    public function actionAddcart($id)
    {
        
    	$cart = new Cart();
    	
        $qty = Yii::$app->getRequest()->getQueryParam('qty');
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
        $cart->addcart($id,$qty);
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

    public function actionViewcart(){
        $session= yii::$app->session;
        return $this->render('viewCart',['cart'=>$session['cart']]);
    }
    public function actionUpdatecart($id){
        $session = Yii::$app->session;
        $amount= Yii::$app->getRequest()->getQueryParam('amount');
        $cart = new Cart();
        $cart= $cart->updateItem($id,$amount);
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
?>