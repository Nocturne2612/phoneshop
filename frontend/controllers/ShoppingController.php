<?php

namespace frontend\controllers;
use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\session;
use frontend\models\Product;
use frontend\common\Cart;
use frontend\models\Province;
use frontend\models\District;
use frontend\models\Ward;
use frontend\models\Order;
use frontend\models\OrderDetail;
use frontend\models\OrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\libs\sendEmail;
use common\libs\PHPMailer;


class ShoppingController extends \yii\web\Controller
{

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
    public function actionCheckout(){
        // $this->layout='login';
        $time=time();
        $cart= yii::$app->session['cart'];
       
     
        $model = new Order();
        $total=0;
        if($cart){//loai bo loi khi gio hang =0
            foreach ($cart as $key => $value) {
                $total +=$value['sl'] + $value['price'];
            }
        }
        $model->totalMoney=$total;
        $model->status=1;
        $model->created_at=$time;
       
        
        
        // echo "<pre>";
        // print_r();
        // die();
        if(!Yii::$app->user->isGuest){
            $model->fullName=Yii::$app->user->identity->fullName;
            $model->phone=Yii::$app->user->identity->phone;
            $model->email=Yii::$app->user->identity->email;
            $model->province=Yii::$app->user->identity->province;
            $model->district=Yii::$app->user->identity->dictrict;
            $model->ward=Yii::$app->user->identity->ward;
            $model->address=Yii::$app->user->identity->address;
            $model->userId=Yii::$app->user->identity->id;
            
        }
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            
            if(!$model->save()){
                    echo("<pre>");
                    print_r($mode->errors);
                    
                }
            // save order, orderdetail
            // echo("<pre>");
            // print_r($model);
            // die();
            $infoPost = Yii::$app->request->post();
            $order_id=$model->idOrder;
            $Body = '<table>
                        <tr class="cart_menu">
                            <td>Item</td>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Image</td>
                            <td>Total</td>
                        </tr>';
            $i=1;


            foreach ($cart as $key => $value) {
                $Body .= '<tr>';
                $Body .= '<td width="200">'.$i++.'</td>';
                $Body .= '<td width="200">'.$value["proName"].'</td>';
                $Body .= '<td width="200">'.$value["price"].'</td>';
                $Body .= '<td width="200">'.$value["sl"].'</td>';
                $Body .= '<td width="200"><img src="'.$value["images"].'"/></td>';
                $Body .= '<td width="200">'.$value["price"]*$value["sl"].'</td>';
                $Body .= '</tr>';
                $Body .= '</table>';

                $orderDetail= new OrderDetail();
                $orderDetail->productId=$key;
                $orderDetail->productName=$value['proName'];
                $orderDetail->price=$value['price'];
                $orderDetail->quantity=$value['sl'];
                $orderDetail->status=1;
                $orderDetail->created_at=$time;
                $orderDetail->totalMoney=$value['sl']*$value['price'];
                $orderDetail->order_id=$order_id;
                // $orderDetail->save();
                if(!$orderDetail->save()){
                    echo("<pre>");
                    print_r($orderDetail->errors);

                }  
            }

            $emailSend = [
                $infoPost["Order"]["email"],
            ];
            $email = new sendEmail($emailSend,'Thông tin đặt hàng',$body);

            $mail = new PHPMailer();
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'buixuanthangcntt1@gmail.com';                 // SMTP username
            $mail->Password = 'buixuanthang1994';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            $mail->isHTML(true); 
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('from@example.com', 'PhoneShop'); 
            $mail->addAddress($infoPost["Order"]["email"]); 
            $mail->Subject = "Thông tin đặt hàng của bạn tại Phone Shop";
            $mail->Body    = $Body;
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
                // $email->sendEmail();

        }

        return $this->render('checkOut',['cart'=>$cart,'model' => $model]);
    }
}
?>