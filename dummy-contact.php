<?php include('header.php');?>
<!--End of main div-->
<style>.m-b-100{margin-bottom: 10px;
   margin-top: 100px}
   /*   .container.bgclr {
   background-color: #b6d6a6;
   }*/.col-lg-12.bgclr {
   /*    background-color: #b6d6a6;*/
   background-color: #f7f7f7;
   opacity: 0.8;
   /*padding-top: 70px;*/
   margin-top: 20px;
   }
   .circle-icon {
   background: #ffc0c0;
   width: 100px;
   height: 100px;
   border-radius: 50%;
   text-align: center;
   line-height: 100px;
   vertical-align: middle;
   padding: 30px;
   }
   .icon-background4 {
   color: #c0ffc0;
   }
   h3{
   color: #21a0da;
   /* text-decoration: underline;*/}
   .d-contact-page{margin-top: 120px;}
   .contact-details .item {
   border-bottom:none ! important;
   }
   .contact-details{
   border:none ! important;
  /* padding-top: 90px;*/
   background: none ! important;
   margin-left: 30px;
   /*background-color: #f7f7f7 ! important;*/
   }
</style>
   <div class="page-content enquiry-page">
         <div class="title-section container">
            <h2>
                                 <center>Contact us</center>
                              </h2>
                              <div class="underline" style="width:25%"></div>
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
<div class="page-content d-contact-page">
   <div class="container-fluid">
     <!--  <h2>
         <center>Contact us</center>
         <div class="underline" style="width:25%; margin-bottom: 80px;"></div>
      </h2> -->
      <div class="row">
         <div class="box">
            <div class="col-lg-12" style="position:relative;">
               <div class="col-md-12">
                  <iframe width="100%" height="50%" src="http://www.mapi.ie/create-google-map/map.php?width=100%&amp;height=800&amp;hl=en&amp;q=Natepute+(nes%20Group)&amp;ie=UTF8&amp;t=h&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ></iframe>
                  <div class="col-md-12 maptoggle" style=" position:absolute;top:0;left:0;width:100%;height:100%;background-color: #444141;opacity: 0.8;padding-top:50px">
                    <span class="on-map"> <div class="col-md-2 col-sm-12 col-xs-12 col-lg-2" style="text-align: center; ">
                        <img src="/nes/assets/images/diirection.png" alt="" width="58" height="58"/><br>
                        <h3>Direction</h3>
                        <span style="color:#1ab0d3;">Sector-128 Pune-411410<br />
                        </span>
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 col-lg-2" style="text-align: center;">
                        <img src="/nes/assets/images/mobile.png" alt="" width="58" height="58"/><br>
                        <h3>Mobile</h3>
                        <span style="color:#1ab0d3;">
                        (120) 4609000 <br />
                        (120) 2470800 </span>
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 col-lg-2" style="text-align: center;">
                        <img src="/nes/assets/images/mail.png" alt="" width="58" height="58"/><br>
                        <h3>Email</h3>
                        <span style="color:#1ab0d3;">nes@gmail.com</span>
                     </div></span>
                   <!--  <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6"style="text-align: center;padding-top:0px">
                        <h3>Go Gas Office</h3>
                        <br><span style="color:#1ab0d3;">314,Softinfology<br>Kharadi,World Trade center <br>Sector-128, Pune - 411410<br />
                        Maharashtra, India<br />
                        Ph No: (120) 4609000, 2470800<br />
                        Fax: (120) 4609464, 4609496 </span>
                     </div> -->
                       <!--<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6"style="margin-top:100px;text-align: center;">
                        <h3>Aqua Office</h3>
                        <br><span style="color:#1ab0d3;">314,Softinfology<br>Kharadi,World Trade center<br> Sector-128, Pune - 411410<br />
                        Maharashtra, India<br />
                        Ph No: (120) 4609000, 2470800<br />
                        Fax: (120) 4609464, 4609496 </span>
                     </div> -->
                  </div>
                  <div class="up" style="z-index: 1;    text-align: center;"><button class="contact-up">Show Map</button></div>
               </div>
               <div class="clearfix m-b-100"></div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<?php include('footer.php');?>