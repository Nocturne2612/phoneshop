<?php

namespace frontend\common;
use Yii;
use Yii\web\Session;
use frontend\models\Product;
class Cart 
{
    public function addcart($id)
    {
    	$data = new Product();
    	$dataProduct=$data->getProductById($id);
        if(!isset(Yii::$app->session['cart'])){// chưa tồn tại session thì lần đây là lầ mua đầu tiên sp có sl =1
        	$cart[$id]=[
        		'proName'=>$dataProduct['proName'],
        		'images'=>$dataProduct['images'],
        		'price'=>$dataProduct['saleOf'],
        		'color'=>$dataProduct['color'],
        		'ram'=>$dataProduct['ram'],
        		'rom'=>$dataProduct['rom'],
        		'sl'=>1,
        	];
        }else{
        	$cart= Yii::$app->session['cart']; //lần mua tiếp theo session['cart'] đã tồn tại sp đã có trong cart +1
        	if(array_key_exists($id,$cart)){
        		$cart[$id]=[
        			'proName'=>$dataProduct['proName'],
	        		'images'=>$dataProduct['images'],
	        		'price'=>$dataProduct['saleOf'],
	        		'color'=>$dataProduct['color'],
	        		'ram'=>$dataProduct['ram'],
	        		'rom'=>$dataProduct['rom'],
	        		'sl'=>(int)$cart[$id]['sl'] + 1,

        		];
        	}else{    // lần mua khi session['cart'] đã tồn tại và sp chưa có trong cart thì sp sẽ có sl bằng 1
        		$cart[$id] = [
	        		'proName'=>$dataProduct['proName'],
	        		'images'=>$dataProduct['images'],
	        		'price'=>$dataProduct['saleOf'],
	        		'color'=>$dataProduct['color'],
	        		'ram'=>$dataProduct['ram'],
	        		'rom'=>$dataProduct['rom'],
	        		'sl'=> 1,
        		];
        	}
        }
        Yii::$app->session['cart'] = $cart;
         //return kết quả trả về để đẩy qua controller

    }

    public function delcart($id){
        $session=Yii::$app->session;
        if(isset($session['cart'])){ // kiểm tra nếu tồn tại $session['cart'] thì gán   $cart=$session['cart']; hiện tại rồi xóa sp tại vị trí thứ id ta get đc vê trên url, rồi ta sẽ gán ngược lại $session['cart']=$cart
            $cart=$session['cart'];
            unset($cart[$id]);
            $session['cart']=$cart;
        }
    }

}
