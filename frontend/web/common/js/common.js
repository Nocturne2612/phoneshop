function addWishlist(id){
        $.get('<?php echo Yii::$app->homeUrl.'wishlist/add' ?>',{'id':id},function(data){
            alert("Thêm Thành Công Vào Wishlist")
        });
    }

    function addCart(id){

        qty = $("#Qty").val();
        if(qty<1){
            alert('Số lượng phải lớn hơn 0');
            location.reload();
        }else{
            img = $('#img_'+ id).attr("src");
            // alert(img);
            $('#imgPreview').attr({
                'src':img,
            });

            namePro= $('#txtName_'+ id).text();
            $('#nameProduct').text(namePro);

            specialPrice= $('#specialPrice_'+ id).text();
            $('#specialPrice').text(specialPrice);

            regularPrice= $('#regularPrice_'+ id).text();
            $('#regularPrice').text(regularPrice);

            $('#shoppingcart').modal();
                $.get('<?php echo Yii::$app->homeUrl.'shopping/addcart/?id=' ?>'+id+"&qty="+qty,function(data){
                val=data.split("-");
                $(".amount").text(val[0]);
                $(".total").text(val[1]);
                // $("#qtyCart").load("http://localhost:8080/PH1704LM/yii/product/detail/"+id+" #qtyCart");
                location.reload();
                });
        }
        
    }
    function delCart(id){
         // $.get('http://localhost:8080/PH1704LM/yii/product/addcart/'+id+"?qty="+qty, function(data) {
        

        $.get('<?php echo Yii::$app->homeUrl.'shopping/delcart' ?>',{'id':id},function(data){
           //xoa sp trong cart
            val=data.split("-"); // tách làm 2 phần của giá trị echo ($cartInfo); trong shopping/cart.php
            $(".amount").text(val[0]); // gán giá trị thứ nhất
            $(".total").text(val[1]); // gán giá trị thứ hai
            $("#item_"+id).remove();
            
        });
    }

    function updateCart(id){
        amount= $('#amount-'+id).val();
        $.get('<?php echo Yii::$app->homeUrl.'shopping/updatecart' ?>',{'id':id,'amount':amount},function(data){
           //xoa sp trong cart
            val=data.split("-"); // tách làm 2 phần của giá trị echo ($cartInfo); trong shopping/cart.php
            $(".amount").text(val[0]); // gán giá trị thứ nhất
            $(".total").text(val[1]); // gán giá trị thứ hai
            
        });       
    }