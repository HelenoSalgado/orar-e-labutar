var hamburguer = document.querySelector(".hamburguer"); 
  hamburguer.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("show-menu");
});

// var lastScrollTop = 30;
// $(window).scroll(function(event){
//   var st = $(this).scrollTop();
//   if (st > lastScrollTop || st === 30){
//     $('#header').slideUp("fast");
//   } else {
//     $('#header').slideDown("fast");
//   }
//   lastScrollTop = st;
// });
