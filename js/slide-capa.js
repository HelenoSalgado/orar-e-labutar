var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("meuSlide-capa");
      var dots = document.getElementsByClassName("tap-capa");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "flex";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" acao-capa", "");
      }
      slides[slideIndex-1].style.display = "none";  
      dots[slideIndex-1].className += " acao-capa";
      setTimeout(showSlides, 4000); // Change image every 4 seconds
    }