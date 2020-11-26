$(function() {
   $(window).on("scroll", function() {
           if($(window).scrollTop() > 100) {
               $(".navcolor").addClass("navactive");
           }
           else {
           //remove the background property so it comes transparent again (defined in your css)
               $(".navcolor").removeClass("navactive");
           }
       });
   });


   $('#myModal').on('shown.bs.modal', function () {
     $('#myInput').trigger('focus')
   })




function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunctions() {
  var dots = document.getElementById("dotss");
  var moreText = document.getElementById("moree");
  var btnText = document.getElementById("myBtns");

  if (dotss.style.display === "none") {
    dotss.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dotss.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunctionss() {
  var dots = document.getElementById("dotsss");
  var moreText = document.getElementById("moreee");
  var btnText = document.getElementById("myBtnss");

  if (dotsss.style.display === "none") {
    dotsss.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dotsss.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
$(document).ready(function(){
 // Add smooth scrolling to all links
 $("a").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
   if (this.hash !== "") {
     // Prevent default anchor click behavior
     event.preventDefault();

     // Store hash
     var hash = this.hash;

     // Using jQuery's animate() method to add smooth page scroll
     // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
     $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 800, function(){

       // Add hash (#) to URL when done scrolling (default click behavior)
       window.location.hash = hash;
     });
   } // End if
 });
});


/*$('#contact-form').submit (function(e){
  var name = document.getElementById('inputName'),
  email = document.getElementById('inputEmail'),
  message = document.getElementById('inputMessage');
)}
if (!name.value||!email.value||!message.value){
  alertify.error('Please check your entries')

}else{
  $.ajax({
    method: 'POST'
    url: 'https://formspree.io/xbjdnwnd'
    data: $(this).serialize()
    datatype: "json"
  });
  e.preventDefault()
  $(this).get(0).reset()
  alertify.success('Message sent')
}
*/
