$(function(){
   var $show = $(".App-main .UserArea .UserArea-container .UserArea-mainColumn .body-area .profile-editfields .field .field-content .show")
   var $hide = $show.next();
   var $modify = $show.find(".modify");
   var $save = $hide.find(".edit-button .buttons .save");
   var $cancle = $save.next();
   var value;
   $modify.on("click",function(){
       $(this).parent().hide(100).next().show(100);
   });
   $save.on("click",function(){
       value=$(this).parents(".edit-button").prev().find(".input").val();
       $(this).parents(".hide").prev().children(".field-text").html(value);
       $(this).parents(".hide").hide(100).prev().show(100);
   });
   $cancle.on("click",function(){
       $(this).parents(".hide").hide(100).prev().show(100);
       $(this).parents(".edit-button").prev().find(".input").val($(this).parents(".hide").prev().children(".field-text").html());
   });
});