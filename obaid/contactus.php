<?php
require('top.php');
$Name='';
$Email='';
$Mobile='';
$message='';
$msg='';
// if(isset($_GET['id'])&& $_GET['id']!=''){
//     $id=get_safe_value($con,$_GET['id']);
//    $res= mysqli_query($con,"select * from contact_us where id=$id ");
//    $check=mysqli_num_rows($res);
//  if($check>0){
//    $row=mysqli_fetch_assoc($res);
//    $Name=$row['name'];
//    $Email=$row['email'];
//    $Mobile=$row['mobile'];
//    $message=$row['comment'];
//   }
//    else{
//     header('location:contactus.php');
//     die();
//    }
//  }


 if(isset($_POST['submit'])){
    $Name=get_safe_value($con,$_POST['Name']);
    $Email=get_safe_value($con,$_POST['Email']);
    $Mobile=get_safe_value($con,$_POST['Mobile']);
    $message=get_safe_value($con,$_POST['message']);
   $res= mysqli_query($con,"select * from contact_us where name='$Name' ");
  $check=mysqli_num_rows($res);
if($check>0){
	if(isset($_GET['id']) && $_GET['id']!=''){
      $getData=mysqli_fetch_assoc($res);
      if($id==$getData['id']){
      
      }else{
         $msg="Agent already exist";
      }
   }else{
      $msg="Agent already exist";
   }
}

if($msg==''){
   if(isset($_GET['id'])&& $_GET['id']!=''){
      mysqli_query($con,"update contact_us set name='$Name',email='$Email',mobile='$Mobile',
      comment='$message' where id='$id'");
    }else{
    mysqli_query($con,"insert into contact_us(name,email,
    mobile,comment) values('$Name','$Email',
    '$Mobile','$message')");
   }
    header('location:contactus.php');
    die();
}
}
?>

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Contact Us</h1>
                    <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
                <div class="property-location mb-5">
                    <h3>Our Location</h3>
                    <div class="divider-fade"></div>
                    <div id="map-contact" class="contact-map"></div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Contact Us</h3>
                        <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                            <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" id="name" name="name" placeholder="Name" required value="<?php echo $Name?>">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full"id="email" name="email" placeholder=" Email" required value="<?php echo $Email?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" id="mobile" name="mobile" placeholder="Mobile" required value="<?php echo $Mobile?>">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="message" name="message" required rows="8" placeholder="Message" required value="<?php echo $message?>"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">95 South Park Ave, USA</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">+456 875 369 208</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">support@findhouses.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->

        <!-- START FOOTER -->
        <?php
require('footer.php');

?>