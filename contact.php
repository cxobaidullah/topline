<?php
  $contact_active='active';
include('header.php');
?>

<!--===== CONTACT US =====-->
<section id="contact-us">
  <div class="container">
    <div class="row padding">
        <div id="success"></div>
      <div class="col-md-8">
        <div class="bottom40">
          <h2 class="text-uppercase">Send us<span class="color_red"> a message </span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </div>
        <div class="agent-p-form p-t-30">

          <div class="row">
            <form class="callus padding-bottom" id="contactus" method="POST">

              <div class="col-md-12">
                <div class="single-query">
                  <input type="text" class="keyword-input" placeholder="Name" name="name" id="name" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                  <input type="text" class="keyword-input" placeholder="Phone" name="phone" id="phone" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                  <input type="email" class="keyword-input" placeholder="E - mail" name="email" id="email" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                  <textarea name="message" placeholder="Message" id="message" required></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn_fill" id="btn_submit" name="btn_submit">Submit</button>
              </div>
            </form>

          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="bottom40">
          <h2 class="text-uppercase">get in<span class="color_red"> touch</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </div>

        <div class="agent-p-contact p-t-30">
          <div class="agetn-contact-2">
            <p><i class="icon-telephone114"></i> (+92) 3345131288</p>
            <a href="mailto:hafeezullah7@gmail.com">
              <p><i class=" icon-icons142"></i>hafeezullah7@gmail.com</p>
            </a>
            <a href="https://www.toplinepropertysolution.com/" target="_blank">
              <p><i class="icon-browser2"></i>www.toplinepropertysolution.com</p>
            </a>
            <p><i class="icon-icons74"></i> Ghori Town Phase 5 Koral Town, Islamabad,

</p>
          </div>
          <ul class="socials">
            <li><a href="https://www.facebook.com/ToplinePropertySolution/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
            <li><a href="#."><i class="fa fa-youtube"></i></a></li>
            <li><a href="#."><i class="fa fa-instagram"></i></a></li>
            <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>

</section>
<!--===== #/CONTACT US =====-->
<script>
  $(document).ready(function() {
    $('#contactus').submit(function(e) {
      var name = $('#name').val();
      var phone = $('#phone').val();
      var email = $('#email').val();
      var message = $('#message').val();
      e.preventDefault();
      $.ajax({
        url: "contactSubmit.php",
        type: "post",
        data: {
          'name': name,
          'phone': phone,
          'email': email,
          'message': message
        },
        success: function(response) {
          $("#contactus").trigger('reset');
          $('#success').append('<span style="color:green">' + response + '</span>')
        },
        error: function(response) {
          console.log(response);
        }
      });
    })
  })
</script>

<?php
include('footer.php');
?>