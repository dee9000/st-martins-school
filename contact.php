<?php include 'header.php';?>

  <!-- Jumbotron -->
<div class="jumbotron content-jumbotron-header p-5 text-center bg-image rounded-3">
  <div class="overlay">
    <div class="d-flex justify-content-center align-items-center">
      <div class="text-white pt-15">
        <h1 class="animate__animated animate__fadeInDown">Contact Us</h1>
      </div>
    </div>
  </div>
</div>
<!-- Jumbotron -->
<div class="svg-container">
  <div class="custom-shape-divider-bottom-1657125576">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
    </svg>
</div>
</div>
<!-- container and side menu -->
<section class="content-body animate__animated animate__fadeInUp">
<div class="container content-container col-sm-10">
<div class="jumbotron sidebar-container-text">
  <form >
  <div class="form-row font-weight-bold">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" placeholder="name">
    </div>
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="Email" placeholder="Email">
    </div>
  </div>
  <div class="form-row font-weight-bold">
  <div class="form-group col-md-6">
    <label for="Telephone">Telephone</label>
    <input type="number" class="form-control" id="Telephone" placeholder="Telephone">
  </div>
  <div class="form-group col-md-6">
    <label for="Subject">Subject</label>
    <input type="text" class="form-control" id="Subject" placeholder="Subject">
  </div>
</div>
<div class="form-group font-weight-bold">
    <label for="Message">Message</label>
    <textarea class="form-control" id="Message" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-danger">Submit</button>

  <div class="location-container pt-5">
    <!--google maps-->
  <div class="embed-responsive-item pb-0">

  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4810.697989718173!2d-1.477357!3d52.92414600000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b6cd427f228222b!2sAssembly%20Rooms%20Car%20Park%20Cathedral%20Quarter!5e0!3m2!1sen!2sus!4v1657465678499!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

 </div>
 <!--address-->
 <ul class="pt-5">
   <li><span class="font-weight-bold">Telephone:</span> 01332364202</li>
   <li><span class="font-weight-bold">Email:</span>admin@stmartins.derby.sch.uk</li>
   <li><span class="font-weight-bold">Address:</span>The Derwent Campus Bracknell Drive Alvaston Derby, DE24 0BT</li>
 </ul>
</div>
</form>

</div>
</div>



</section>
<?php include 'footer.php';?>
