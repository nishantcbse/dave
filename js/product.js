// JavaScript Document
$(document).ready(function(){ 

$(function() {

    var bar = $('#product-cart');
    var top = bar.css('top');
    $(window).scroll(function() {

        if($(this).scrollTop() > 100) {
			//alert('hi');
			bar.css('position','fixed');
			bar.css('top','0px');
            bar.stop().animate({'top' : '5px'}, 500);
        } else {
			//alert('hi1');
            bar.stop().animate({'top' : top}, 500);
        }
    });
});

});

function addtocart(){
	
	//console.log($(k).find('.Home:checked'));
	$('#product-cart').fadeIn(2000);
	var i = 0;
	var totalProductSelected = $('.homeProduct').find('.Home:checked').length;
	$('.productCount').html(totalProductSelected);
	var price = 0;
	$('.homeProduct').find('.Home:checked').each(function(){
		var productVal = $(this).val();
		var value = productVal.split('|');
		console.log(parseFloat(value[1]) + parseFloat(value[1]) );
		price +=  parseFloat(value[1]);
		
	});
	price =  formatDollar(price);
	$('#totalProductPrice').html(price);
	
	$.get('classes/product.class.php',{cart:true,price:price,count:totalProductSelected});
}

