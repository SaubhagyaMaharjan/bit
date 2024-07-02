<html>
<head>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .10} 
  to {opacity: 10}
}

@keyframes fade {
  from {opacity: .10} 
  to {opacity: 10}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 20</div>
  <img src="1.jpg" style="width:100%">
  <div class="text">Nepal banepa polytechnic Institute</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 20</div>
  <img src="opendra.jpg" style="width:100%">
  <div class="text">Opendra Giri</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 20</div>
  <img src="3.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 20</div>
  <img src="4.jpg" style="width:100%">
  <div class="text">Opendra Giri(Radio Nepal)</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 20</div>
  <img src="5.jpg" style="width:100%">
  <div class="text">Raju Mainali(Ghandruk)</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 20</div>
  <img src="6.jpg" style="width:100%">
  <div class="text">Amrit Singtan</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 20</div>
  <img src="7.jpg" style="width:100%" height="80%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 20</div>
  <img src="8.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">9 / 20</div>
  <img src="9.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">10 / 20</div>
  <img src="10.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">11 / 20</div>
  <img src="11.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">20 / 20</div>
  <img src="12.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">13 / 20</div>
  <img src="13.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">14 / 20</div>
  <img src="14.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">15 / 20</div>
  <img src="15.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">16 / 20</div>
  <img src="16.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">17 / 20</div>
  <img src="17.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">18 / 20</div>
  <img src="18.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">19 / 20</div>
  <img src="19.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">20 / 20</div>
  <img src="20.jpg" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
    <span class="dot"></span> 
     <span class="dot"></span> 
      <span class="dot"></span> 
       <span class="dot"></span> 
        <span class="dot"></span>
         <span class="dot"></span>
          <span class="dot"></span>
           <span class="dot"></span>
            <span class="dot"></span>
             <span class="dot"></span>
              <span class="dot"></span>
               <span class="dot"></span>
                <span class="dot"></span>
             <span class="dot"></span>
              <span class="dot"></span>
               <span class="dot"></span>
             

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
</body>
</html> 
