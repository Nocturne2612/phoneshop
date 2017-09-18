var host = window.location.href;//backend
host = host.split("backend");
$(document).ready(function(){
	$("#product-startsale").datepicker({
		 dateFormat: "yy-mm-dd"
	});
	$("#product-endsale").datepicker({
		 dateFormat: "dd-mm-yy"
	});
});

    tinymce.init({
		// selector: 'textarea#content',
		selector:  'textarea#description',
		height: 350,
		width:"",
		plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
    ],
    toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
    toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
    image_advtab: true,
    menubar: false,
    toolbar_items_size: 'small',
    relative_urls: false,
    remove_script_host : false,
        external_filemanager_path:host[0]+"file/",
    	filemanager_title:"Quan ly file" ,
   		external_plugins: { "filemanager" : host[0]+"file/plugin.min.js"},
    	//filemanager_access_key:csrf(),
    });

tinymce.init({
		selector: 'textarea#content',
		// selector:  'textarea#description',
		height: 350,
		width:"",
		plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
    ],
    toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
    toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
    image_advtab: true,
    menubar: false,
    toolbar_items_size: 'small',
    relative_urls: false,
    remove_script_host : false,
    
      external_filemanager_path:host[0]+"file/",
    	filemanager_title:"Quan ly file" ,
   		external_plugins: { "filemanager" : host[0]+"file/plugin.min.js"},
      // external_filemanager_path:"http://test.albertoperipolli.com/secondaryserver/rfm0123/",
      // external_plugins: { "filemanager" : "http://test.albertoperipolli.com/secondaryserver/rfm0123/plugin.min.js"},
    	//filemanager_access_key:csrf(),
	   // image_advtab: true,
	   // toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
	   // toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview"
    });


	jQuery(document).ready(function($) {
		//$('#imageFile').click(function() {
			//$('#media-modal').modal('show');
			// $('input#image').attr('value','sรก');;
			// $('#media-modal').on('hide.bs.modal',function(){
			// 	var imgUrrl = $('#image').val();
			// 	$('img#show-img').attr('src',imgUrrl);
			// 	$('input#image').attr('value',imgUrrl);;
			// 	// alert(imgUrrl);
			// });
		//});

		 $('#imageFile').click(function() {
		 	$('#media-modal').modal('show');
		});
	});