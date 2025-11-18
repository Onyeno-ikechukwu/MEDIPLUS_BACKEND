<p class="error">
    <?php
      if (isset($_SESSION["error"])) {
        echo $_SESSION["error"];
      }
    ?>
  </p>
<form class="form" method="post" action="core/control/appointment.php">
  
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <div class="form-group">
        <input name="name" type="text" placeholder="Name">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="form-group">
        <input name="email" type="email" placeholder="Email">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="form-group">
        <input name="phone" type="text" placeholder="Phone">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="form-group">
        <select class="nice-select form-control wide" tabindex="0" name="department">
            <option class="option selected ">DEPARTMENTs</option>
            <option value="cardiac" class="option">Cardiac Clinic</option>
            <option value="neurology" class="option">Neurology</option>
            <option value="dentistry" class="option">Dentistry</option>
            <option value="gastroenterology" class="option">Gastroenterology</option>
        </select>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="form-group">
        <select class="nice-select form-control wide" tabindex="0" name="doctor">
          <option class="option selected ">DOCTORS</option>
          <option value="Hossain" class="option">Dr. Akther Hossain</option>
          <option value="Alex" class="option">Dr. Dery Alex</option>
          <option value="Karon" class="option">Dr. Jovis Karon</option>
        </select>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="form-group">
        <input type="date" placeholder="Date" id="datepicker" name="date">
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
      <div class="form-group">
        <textarea name="message" placeholder="Write Your Message Here....."></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5 col-md-4 col-12">
      <div class="form-group">
        <div class="button">
          <button type="submit" class="btn">Book An Appointment</button>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-md-8 col-12">
      <p>( We will be confirm by an Text Message )</p>
    </div>
  </div>
</form>