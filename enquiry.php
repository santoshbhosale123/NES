<?php include('header.php');?>
      <!--End of main div-->
      <div class="page-content enquiry-page">
         <div class="title-section container">
            <h1 class="text-center">Enquiry</h1>
            <div class="underline"></div>
            <p class="text-center text-muted">Have a question, comment, or just want to say hi? Drop us a line!</p>
         </div>
         <div class="contact-form">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <form  name="enquiryform" id="enquiryform" name="enquiryform" method="POST" action="#" >
                        <div class="form-group">
                          
                           <!-- <h4 class="text-center">Enquiry Form</h4> -->
                         
                        </div>
                        <div class="form-group">
                           <label for="name">Full Name:</label>
                           <input class="form-control" id="name" type="text" name="fname" placeholder="Enter Name">
                     <span id="errormsg"></span>
                        </div>




                        <div class="form-group">
                           <label for="email">Email:</label>
                           <input class="form-control" id="email" type="text" name="email" placeholder="Enter Email">
                     <span id="emailerrormsg"></span>
                        </div>
                  <div class="form-group">
                           <label for="number">Number:</label>
                           <input class="form-control" id="number" type="text" name="number" placeholder="Enter Mobile Number">
                     <span id="numbererrormsg"></span>
                        </div>
                        <div class="form-group">
                            <label for="enquiryabout">Enquiry About</label>
                            <select class="form-control" id="enquiryabout" >
                               <option></option>
                              <option>Go Gas</option>
                              <option>Aqua</option>
                               <option>Other</option>
                            </select>
                          </div>
                        <!-- <div class="form-group">
                           <label for="subject">Subject:</label>
                           <input class="form-control" id="subject" type="text" name="subject" placeholder="Enter Subject">
                     <span id="suberrormsg"></span>
                        </div> -->
                        <div class="form-group">
                           <label for="message">Enquiry Details:</label>
                           <textarea name="message" id="message" class="form-control" rows="3"></textarea>
                     <span id="msgerrormsg"></span>
                        </div>
                        <button type="submit" id="contactsubmit" class="btn btn-default">Submit</button>
                     </form>
                  </div>
                  <div class="col-md-offset-2 col-md-4">
                     <div class="row contact-details">
                        <div class="item">
                           <div class="icon">
                              <i class="fa fa-map-marker"></i>
                           </div>
                           <div class="content">
                              Softinfology Pvt. Ltd.<br/>
                              #314, World Trade Center<br/>
                              Near EON IT Park,<br/>
                              Kharadi Pune-41453<br/>
                           </div>
                        </div>
                        <div class="item">
                           <div class="icon">
                              <i class="fa fa-phone"></i>
                           </div>
                           <div class="content">
                              Softinfology Pvt. Ltd.<br/>
                              #314, World Trade Center<br/>
                              Near EON IT Park,<br/>
                              Kharadi Pune-41453<br/>
                           </div>
                        </div>
                        <div class="item">
                           <div class="icon">
                              <i class="fa fa-envelope-o"></i>
                           </div>
                           <div class="content">
                              Softinfology Pvt. Ltd.<br/>
                              #314, World Trade Center<br/>
                              Near EON IT Park,<br/>
                              Kharadi Pune-41453<br/>
                           </div>
                        </div>
                        <div class="social-shares">
                           <h2>Share</h2>
                           <ul class="contact-social-list">
                              <li>
                                 <a href="#" class="facebook">
                                 <i class="fa fa-facebook"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="twitter">
                                 <i class="fa fa-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="linkedin">
                                 <i class="fa fa-linkedin"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="google">
                                 <i class="fa fa-google-plus"></i>
                                 </a>
                              </li>
                             <!--  <li>
                                 <a href="#" class="rss">
                                 <i class="fa fa-rss"></i>
                                 </a>
                              </li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  <!-- <div class="footer-cta-section">
	  <div class="container">
	  <div class="row">
	  <div class="col-md-9">
	  <h3>Click Here To Contact!</h3>
	  </div>
	  <div class="col-md-3">
	  <a class="footer-cta-btn btn btn-lg" href="#">Contact Us</a>
	  </div>
	  </div>
	  </div>
	  </div> -->
      
      <?php include('footer.php');?>
   </body>
   </html>
