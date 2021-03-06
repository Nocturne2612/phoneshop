$(document).ready(function(){
    /* slider price */
var currencies = "$";
var toolbar_status = "1";
var rate = "1";
var min = "99"
min = Number(min);
var max = "999"
max = Number(max);
var currentMinPrice = "99"
currentMinPrice = Number(currentMinPrice);
var currentMaxPrice = "999"
//alert('min: '+min+'--max: '+ max+ 'currentMin: '+currentMinPrice);
currentMaxPrice = Number(currentMaxPrice);
var params = "";
params = $.trim(params);
//slider
$( "#slider-range" ).slider({
    range: true,
    min: min,
    max: max,
    values: [ currentMinPrice, currentMaxPrice ],
    slide: function( event, ui ) {
        $( "#amount" ).val( currencies + ui.values[ 0 ] + " - "+ currencies + ui.values[ 1 ] );
        $('input[name="first_price"]').val(ui.values[0]);
        $('input[name="last_price"]').val(ui.values[1]);
    },
    stop: function( event, ui ) {
    }
});

$( "#amount" ).val( currencies + $( "#slider-range" ).slider( "values", 0 ) +
    " - "+currencies + $( "#slider-range" ).slider( "values", 1 ) );
$('input[name="first_price"]').val($( "#slider-range" ).slider( "values", 0 ));
$('input[name="last_price"]').val($( "#slider-range" ).slider( "values", 1 ));   

//search price from input box
$('#search_price').each(function(){
    $(this).live('click',function(){
        return false;
    })
});
$('#slider-range a:first').addClass('first_item');
$('#slider-range a:last').addClass('last_item');
});
$(window).load(function() {
    $(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
        $('.ma-banner7-container .timethai').addClass('pos_hover');
    });
    $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
        $('.ma-banner7-container .timethai').removeClass('pos_hover');
    });
});

$(window).load(function() {
    $('#ma-inivoslider-banner7').nivoSlider({
        effect: 'random',
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 1000,
        pauseTime: 6000,
        startSlide: 0,
        controlNav: false,
        controlNavThumbs: false,
        pauseOnHover: true,
        manualAdvance: false,
        prevText: 'Prev',
        nextText: 'Next',
        afterLoad: function(){
        },     
        beforeChange: function(){ 
        }, 
        afterChange: function(){ 
        }
    });
});

$(document).ready(function(){
    /* timely-owl */
    $("#timely-owl .owl").owlCarousel({
        autoPlay : false,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [991,1],
        itemsTablet: [767,2],
        itemsMobile : [480,1],
        slideSpeed : 1000,
        paginationSpeed : 1000,
        rewindSpeed : 1000,
        navigation : true,
        stopOnHover : true,
        pagination : false,
        scrollPerPage:true,
    });
    /* special-offer slider */
    $("#special-offer .owl").owlCarousel({
        autoPlay : false,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [991,1],
        itemsTablet: [767,2],
        itemsMobile : [480,1],
        slideSpeed : 3000,
        paginationSpeed : 3000,
        rewindSpeed : 3000,
        navigation : true,
        stopOnHover : true,
        pagination : false,
        scrollPerPage:true,
    });
    /* latest-news slider */
    $("#latest-news .owl").owlCarousel({
        autoPlay : false,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [991,1],
        itemsTablet: [767,2],
        itemsMobile : [480,1],
        slideSpeed : 1000,
        paginationSpeed : 1000,
        rewindSpeed : 1000,
        navigation : true,
        stopOnHover : true,
        pagination : false,
        scrollPerPage:true,
    });
    /* clients-say slider */
    $("#clients-say .owl").owlCarousel({
        autoPlay : false,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [991,1],
        itemsTablet: [767,2],
        itemsMobile : [480,1],
        slideSpeed : 3000,
        paginationSpeed : 3000,
        rewindSpeed : 3000,
        navigation : true,
        stopOnHover : true,
        pagination : false,
        scrollPerPage:true,
    });
    /* featured-products slider */
    $("#featured-products .owl").owlCarousel({
        autoPlay : false,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [991,2],
        itemsTablet: [767,2],
        itemsMobile : [480,1],
        slideSpeed : 3000,
        paginationSpeed : 3000,
        rewindSpeed : 3000,
        navigation : true,
        stopOnHover : true,
        pagination : false,
        scrollPerPage:true,
    });
    /* new-products slider */
    $("#new-products .owl").owlCarousel({
        autoPlay : false,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [991,2],
        itemsTablet: [767,2],
        itemsMobile : [480,1],
        slideSpeed : 3000,
        paginationSpeed : 3000,
        rewindSpeed : 3000,
        navigation : true,
        stopOnHover : true,
        pagination : false,
        scrollPerPage:true,
    });

    var dthen1 = new Date("12/25/33 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if(CountStepper>0)
        ddiff= new Date((dnow1)-(dthen1));
    else
        ddiff = new Date((dthen1)-(dnow1));
    gsecs1 = Math.floor(ddiff.valueOf()/1000);
    
    var iid1 = "countbox_1";
    CountBack_slider(gsecs1,"countbox_1", 1);

    var dthen2 = new Date("05/21/26 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow2 = new Date(start_date);
    if(CountStepper>0)
        ddiff= new Date((dnow2)-(dthen2));
    else
        ddiff = new Date((dthen2)-(dnow2));
    gsecs2 = Math.floor(ddiff.valueOf()/1000);
    
    var iid2 = "countbox_2";
    CountBack_slider(gsecs2,"countbox_2", 2);

    var dthen3 = new Date("05/21/33 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow3 = new Date(start_date);
    if(CountStepper>0)
        ddiff= new Date((dnow3)-(dthen3));
    else
        ddiff = new Date((dthen3)-(dnow3));
    gsecs3 = Math.floor(ddiff.valueOf()/1000);
    
    var iid3 = "countbox_3";
    CountBack_slider(gsecs3,"countbox_3", 3);

    /* slider price */
    var currencies = "$";
    var toolbar_status = "1";
    var rate = "1";
    var min = "99"
    min = Number(min);
    var max = "999"
    max = Number(max);
    var currentMinPrice = "99"
    currentMinPrice = Number(currentMinPrice);
    var currentMaxPrice = "999"
    //alert('min: '+min+'--max: '+ max+ 'currentMin: '+currentMinPrice);
    currentMaxPrice = Number(currentMaxPrice);
    var params = "";
    params = $.trim(params);

});
$("#special-offer .owl").owlCarousel({
    autoPlay : false,
    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [991,1],
    itemsTablet: [767,2],
    itemsMobile : [480,1],
    slideSpeed : 3000,
    paginationSpeed : 3000,
    rewindSpeed : 3000,
    navigation : true,
    stopOnHover : true,
    pagination : false,
    scrollPerPage:true,
});

