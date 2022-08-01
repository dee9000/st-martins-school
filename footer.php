
  <!-- FOOTER -->
  <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top"><i>Up</i></button>

    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="my-5 footer-container">

  <footer class="text-center text-lg-start text-white footer">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <div class="shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto">
            <img src="img/logo-transp.png" height="150" alt="">

          </div>

          <p class="text-center text-white">St Martins School Derby</p>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fa fa-twitter" style="font-size:24px"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fa fa-instagram" style="font-size:24px"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fa fa-youtube" style="font-size:24px"></i>
              </a>
            </li>
          </ul>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-justify">
          <h5 class="text-uppercase mb-4">OUR SCHOOL</h5>

          <ul class="list-unstyled medium">
            <li class="mb-2">
              <a href="#!" class="text-white">Outcomes</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Gallery</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">School Information Report</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Lettings</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Ofsted Report & Information</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Our Ethos & Values</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Policies</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-justify">
          <h5 class="text-uppercase mb-4">Parents</h5>

          <ul class="list-unstyled medium">
            <li class="mb-2">
              <a href="#!" class="text-white">General information</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">After School Clubs</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Next Steps Post 16</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Newsletter</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Complaints Procedure</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Family Support</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-justify">
          <h5 class="text-uppercase mb-4">Contact</h5>

          <ul class="list-unstyled medium">
            <li class="pb-2">The Derwent Campus, Bracknell Drive, DE24 0BT.</li>
            <li class="pb-2">+ 01 234 567 89</li>
            <li class="pb-2">contact@example.com</li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 copyright-container">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">schudio</a>
      <!-- Back to top button -->

    </div>
    <!-- Copyright -->



<!-- End of .container -->
</footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
  offset:100,
  duration:1000
});
</script>
<script> $(window).scroll(function(){ $('nav').toggleClass('scrolled', $(this).scrollTop() > 200); }); </script>
<script>
//Get the button fast button to take you to top of screen
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


  </body>
</html>
