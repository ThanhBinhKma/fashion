// document.addEventListener("DOMContentLoaded",function(){
// 	var clickLi = document.querySelectorAll('.hover-cusor');
// 	console.log(clickLi);
// 	var showUl = document.querySelectorAll('.hiddenUl');
// 	console.log(showUl);
// 	clickLi.onclick=function(){

// 		showUl[0].classList.remove('showUl');
// 	}
// });
// $('.hover-cusor').click(function(){
// 	alert('hihi');
// });
$('.hover-cusor').click(function(){
      $('ul.hiddenUl ').toggleClass("showUl");
});
$(".menu-drop-left div").click(function() {
            $(".ul-hihi-left").slideToggle();
            $(".sub-ul-drop-left").css("display", "none");
      });

      $(".ul-hihi-left li").click(function() {
            $(".sub-ul-drop-left").slideUp();
            $(this).find('.sub-ul-drop-left').slideToggle();
      });

      $(window).resize(function() {
            if($(window).width() > 768) {
                  $(".ul-hihi-left").removeAttr('style');
            }
 });

$(".menu-drop-right div").click(function() {
    $(".ul-hihi-right").slideToggle();
});


$(window).resize(function() {
    if($(window).width() > 768) {
          $(".ul-hihi").removeAttr('style');
    }
});
// $(window).reload(function(){

//   if($(window).width() > 990){
//     $('.jq-one').click(function(){
//       $(this).addClass('click-color-menu');
//       $('.jq-two').remove('click-color-menu');
//       $('.jq-three').remove('click-color-menu');
//       $('.jq-four').remove('click-color-menu');
//     });
//     $('.jq-two').click(function(){
//       $(this).addClass('click-color-menu');
//       $('.jq-one').remove('click-color-menu');
//       $('.jq-three').remove('click-color-menu');
//       $('.jq-four').remove('click-color-menu');
//     })
//     ;$('.jq-three').click(function(){
//       $(this).addClass('click-color-menu');
//       $('.jq-one').remove('click-color-menu');
//       $('.jq-two').remove('click-color-menu');
//       $('.jq-four').remove('click-color-menu');
//     })
//     ;$('.jq-four').click(function(){
//       $(this).addClass('click-color-menu');
//       $('.jq-one').remove('click-color-menu');
//       $('.jq-two').remove('click-color-menu');
//       $('.jq-three').remove('click-color-menu');
//     });
//   }
// });
if($(window).width()>990){
$(document).ready(function(){
  var a = window.location.href;
  var b = a.slice(22);
  console.log(b);
  if(b === 'san-pham'){
    $('.jq-one').removeClass('click-color-menu');
    $('.jq-two').addClass('click-color-menu');
  }
  if(b==='gioi-thieu'){
    $('.jq-one').removeClass('click-color-menu');
    $('.jq-three').addClass('click-color-menu');
  }
  if(b==='lien-he'){
    $('.jq-one').removeClass('click-color-menu');
    $('.jq-four').addClass('click-color-menu');
  }
  
});
}
