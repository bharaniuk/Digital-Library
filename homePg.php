
<?php
session_start();
if (isset($_SESSION['email'])){
    echo file_get_contents("header2.html");
}
else {
  echo file_get_contents("header.html");
}
?>

<style>
   * {box-sizing: border-box}
   body {font-family: "Comic Sans MS";margin:0;}
   .mySlides {display: none}
    <!--background-image: url("books_img.jpg");-->
   img {vertical-align: middle;}

   /* Slideshow container */
   .slideshow-container {
   max-width: 1000px;
   position: relative;
   margin: auto;
   }

   /* Next & previous buttons */
   .prev, .next {
   cursor: pointer;
   position: absolute;
   top: 50%;
   width: auto;
   padding: 16px;
   margin-top: -22px;
   color: white;
   font-weight: bold;
   font-size: 18px;
   transition: 0.6s ease;
   border-radius: 0 3px 3px 0;
   }

   /* Position the "next button" to the right */
   .next {
   right: 0;
   border-radius: 3px 0 0 3px;
   }

   /* On hover, add a black background color with a little bit see-through */
   .prev:hover, .next:hover {
   background-color: rgba(0,0,0,0.8);
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
   .home > p{
     font-family: 'Comic Sans MS';
     font-size: 15px;
     font-weight: 200;
   }
   /* The dots/bullets/indicators */
   .dot {
   cursor: pointer;
   height: 15px;
   width: 15px;
   margin: 0 2px;
   background-color: #bbb;
   border-radius: 50%;
   display: inline-block;
   transition: background-color 0.6s ease;
   }

   .active, .dot:hover {
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
   from {opacity: .4}
   to {opacity: 1}
   }

   @keyframes fade {
   from {opacity: .4}
   to {opacity: 1}
   }

   /* On smaller screens, decrease text size */
   @media only screen and (max-width: 300px) {
   .prev, .next,.text {font-size: 11px}
   }
   </style>




<div class="slideshow-container">
  <div class="mySlides fade">
    <br><br>
     <div class = "topPart">
       <p id = "home">
       <h1 align = "center">Welcome to BookHunters ! </h1>
       <p>Your very own online library.Nowadays, the internet is a major tool to find products we need. With more and more content going digital, you don’t have to go to a library to rent a book.We've got everything you are looking for. From fiction to mystery to education, You name it, we've got it!<br><br><br><em> So what are you waiting for ? Begin your book hunt! Get your first book now!</em></p>

     </div>
   </div>


     <div class="mySlides fade">
       <br><br>

     <div class = "topPart">
       <p><blockquote><h2>Looking for motivation to develop reading as a habit?</h2>Wildly successful people — those with schedules ten times busier than ours — make reading a mandatory part of their daily routines.

     Warren Buffett reads 500 pages a day. Gates and Zuckerberg each read one book a week. When Elon Musk was asked how he learned to build rockets he answered, “I read.” Oprah discusses her favorite books with readers in her online book club each month.
     </blockquote></p>
     <br><br><br>
     </div>
   </div>

<div class="mySlides fade">
  <br>
  <br>
     <div class = "topPart"><h2>Benefits of reading books</h2>
       <p>#1. Reading is stress-relieving. <br>#2. Reading helps you sleep better.<br>#3. Reading increases empathy.<br>#4. Reading increases intelligence.<br> #5. Reading transports you to a different world.
       </p>
       <br>
       <br>
     </div>
   </div>

     <div class="mySlides fade">
       <br><br>

     <div class = "topPart" style="padding-left:50px"><br><br> <p>Now as you are on this page, why don't you go ahead and start reading!  You've probably already got a book in mind!<br>If you have, type it out in the search bar and we'll take you right to it.<br>If not, then this is a great place to start searching for one!</p>
       <br><br>
       <br><br>
       <br><br>

     </div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
     <br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
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
    setTimeout(showSlides,  7000); // Change image every 2 seconds
}
</script>
-

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<script>
  window.onscroll = function() {myFunction()};
  var header = document.getElementsByClassName("header");

  // Get the offset position of the navbar
  var sticky = header.offsetTop;

  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
      if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")}
    else {
          navbar.classList.remove("sticky");}
    }
</script>


  </body>
     </html>
