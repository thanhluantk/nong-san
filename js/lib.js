(function ($, root, undefined) {
// JavaScript Document
$(document).ready(function() {	

var width_sc 	= 	$( window ).width();
	
$('#doi-tac .container-doitac .full').owlCarousel({
items: 6,
navigation: true,
navigationText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],                   	
slideSpeed : 300,
autoPlay :true,
pagination: false,
paginationSpeed : 400,
singleItem:false
});

if (width_sc <768) {
  $('.nav').toggleClass('ccodon');    
  var menuList = $(".ccodon").find("li");
  menuList.find("ul").hide();
  menuList.on("click", function(e){
                                var childUl = $(this).find("ul");
                                if (childUl.length < 1 || childUl.is(':visible')) {
                                    return;
                                }
                                e.preventDefault();
                menuList.removeClass("open");
                menuList.find("ul").slideUp(400);
                childUl.slideDown(400);
                $(this).addClass("open");
                });

}  

        $(".form_callaction").submit(function(){  
          var domain_f = window.location.href;
            $("#entry_482933254").val(domain_f);   
            //alert(domain_f);              
            alert("Cáº£m Æ¡n báº¡n. ChĂºng tĂ´i sáº½ gá»i láº¡i ngay." );
            location.reload();
        });


});//end main ready
})(jQuery, this);
