var host = window.location.href;//backend
host = host.split("backend");
////////////////
$(document).ready(function(){
	$("#startSale").datepicker({
		 dateFormat: "dd-mm-yy"
	});
	$("#endSale").datepicker({
		 dateFormat: "dd-mm-yy"
	});
});
/////////////////

 tinymce.init({
    selector: 'textarea',theme: "modern",
    height: "",
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
    relative_urls: true,
    remove_script_host : true,
    external_filemanager_path:host[0]+"file/",
    filemanager_title:"Quan ly file" ,
    external_plugins: { "filemanager" : host[0]+"file/plugin.min.js"},
});
/////////////
jQuery(document).ready(function($) {
  $('#imageFile').click(function() {
    $('#media-modal').modal('show');
      // alert("âff");
  });
  $('#media-modal').on('hidden.bs.modal', function () {
    imgSrc = $("#imageFile").val(); //lấy giá trị link trong textFile
    //gán ngược giá trị lại form ô img
    $("#previewImg").attr({ 
      'src':imgSrc
    });
  });
});