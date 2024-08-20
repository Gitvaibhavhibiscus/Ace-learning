<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>ACE Learning</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/ace-favicon.png" rel="icon">
      <link href="assets/img/ace-favicon.png" rel="apple-touch-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!--Bootstarp CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Style CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
      <!-- recaptcha File -->
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <!-- Google tag manager -->
       <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-574B8SZ');</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-281TRQJ50J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-281TRQJ50J');
</script>

<!-- Microsoft Clarity Tag -->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "hh3usx4bre");
</script>

   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="header sticky-top d-flex align-items-center">
         <div class="container d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="assets/img/acelogo.svg" alt="">
            </a>
            <nav id="navbar" class="navbar d-none d-lg-block">
               <ul>
                  <li><a href="#courses">Certified Professional Coder</a></li>
                  <li><a href="#courses">Certified Risk Adjustment Coder</a></li>
                  <li><a href="#training">Training Space</a></li>
               </ul>
            </nav>
         </div>
      </header>
      <!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="hero d-flex align-items-center section-bg">
         <div class="container">
            <div class="row justify-content-between gy-5">
               <div class="col-lg-6 d-flex flex-column justify-content-center">
                  <h2>Become a <br>Certified Medical Coder</h2>
                  <div class="d-flex">
                     <h5>Expert Training in <br>collaboration with</h5>
                     <a href="https://www.aapc.com/" target="new"><img src="assets/img/aapc-logo.svg" alt="AAPC" style="
                        padding-left: 15px;"></a>
                  </div>
                  <p>Certified Professional Trainers.<br> 100% Certification and Job Placement Assistance. </p>
                  <!-- mobile offcanvas start -->
                  <button class="btn btn-primary d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Request a callback <img src="assets/img/request-call.svg"></button>
                  <div class="offcanvas offcanvas-end d-block d-lg-none" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                     <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Earn a Professional Certificate</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body">
                        <form action="" method="post" name="certificateForm" id="certificate_form">
                           <div class="pb-2">
                              <label for="name">Your Name<span class="required">*</span></label>
                              <input type="text" id="name" name="name" required="required" placeholder="E.g., John Doe">
                           </div>
                           <div style="padding-bottom:3.5rem;">
                              <label for="phone">Your WhatsApp Number<span class="required">*</span></label>
                              <input type="tel" id="phone" pattern="[0-9]{10}" name="whatsapp_number" onkeypress="phoneno()" maxlength="10" required="required" placeholder="E.g., 3840923094">
                              <p style="width: 100%;float:right;color: #071735;opacity: 70%;font-size: 12px;margin-top: 0px;">By giving us your number you agree to let us contact you via WhatsApp</p>
                           </div>
                           <div class="pb-2">
                              <label for="email">Your E-mail Address<span class="required">*</span></label>
                              <input type="email" id="email" name="email" required="required" placeholder="E.g., JohnDoe127@gmail.com">
                           </div>
                           <div class="pb-2">
                              <label for="checkbox form-check-inline">Do you have Experience in the US RCM industry before?<span class="required">*</span></label>
                              <input type="radio" name="experience" value="1">
                              Yes
                              <input type="radio" name="experience" value="0">
                              No
                           </div>
                           <!-- CAPTCHA Section -->
                           <input type="submit" value="Submit">
                           <input type="reset" value="Clear Form" id="clearForm">
                        </form>
                         <div class="col form-msg success text-center" style="display:none">
                        We have received your details. We will contact you shortly. 
                     </div>
                     <div class="col form-msg error text-center" style="display:none">
                        Something went wrong!. Try again Later.
                     </div>
                     </div>
                  </div>
                  <!-- mobile offcanvas end -->
               </div>
               <div id="sidebar" class="col-lg-6 form-fixed order-1 order-lg-2 text-center text-lg-start">
                  <div class="form-container">
                     <h2>Request a Call Back</h2>
                     <p>Share your details here and our team will reach out to you shortly.</p>
                     <hr>
                     <form action="" method="post" name="certificateForm-2" id="certificate_form-2">
                        <div class="pb-2">
                           <label for="name">Your Name<span class="required">*</span></label>
                           <input type="text" id="name" name="name" required="required" placeholder="E.g., John Doe">
                        </div>
                        <div style="padding-bottom:3.5rem;">
                           <label for="phone">Your WhatsApp Number<span class="required">*</span></label>
                          <input type="text" id="phone" pattern="[0-9]{10}" name="whatsapp_number" onkeypress="phoneno()" oninput="restrictNonNumeric(this)" maxlength="10" required="required" placeholder="E.g., 3840923094">
                           <p style="width: 53%;float:right;color: #071735;opacity: 70%;font-size: 12px;">By giving us your number you agree to let us contact you via WhatsApp</p>
                        </div>
                        <div class="pb-2">
                           <label for="email">Your E-mail Address<span class="required">*</span></label>
                           <input type="email" id="email" name="email" required="required" placeholder="E.g., JohnDoe127@gmail.com">
                        </div>
                        <div class="pb-2">
                           <label for="checkbox form-check-inline">Do you have Experience in the US RCM industry before?<span class="required">*</span></label>
                           <input type="radio" name="experience" value="1">
                           Yes
                           <input type="radio" name="experience" value="0">
                           No
                        </div>
                        <!-- CAPTCHA Section -->
                        <div style="
                           float: right;
                           width: 50%;
                           ">
                           <input type="reset" value="Clear Form" id="clearForm2">
                          <input type="submit" value="Submit">
                        </div>
                     </form>
                     <div class="col form-msg success text-center" style="display:none">
                        We have received your details. We will contact you shortly. 
                     </div>
                     <div class="col form-msg error text-center" style="display:none">
                        Something went wrong!. Try again Later.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Hero Section -->
      <!-- ======= Courses Section ======= -->
      <section id="courses" class="courses d-flex align-items-center section-bg">
         <div class="container">
         <div class="row justify-content-between gy-5">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
               <h2 class="d-none d-lg-block">Our Courses</h2>
               <div class="card course-details p-4 mb-sm-4">
                  <div class="d-flex justify-content-between">
                     <h3>Certified Professional Coder (CPC)</h3>
                     <h6>(16 weeks)</h6>
                  </div>
                  <!-- mobile resp  -->
                  <button class="mobile-accordion d-block d-lg-none">CPC Fee Structure</button>
                  <div class="mbpanel">
                     <div class="fee-details d-flex justify-content-between d-block d-lg-none ">
                        <span>Course Fee</span>
                        <span>₹ 25,000</span>
                     </div>
                     <div class="fee-details d-flex justify-content-between d-block d-lg-none " >
                        <span>Exam + Membership</span>
                        <span>₹ 55,000</span>
                     </div>
                  </div>
                  <button class="mobile-accordion mt-3 d-block d-lg-none">Course Structure </button>
                  <div class="mbpanel">
                     <table class="table d-lg-none">
                        <thead>
                           <tr class="dtls_tab_top">
                              <th scope="col">Weeks </th>
                              <th scope="col">Topic Covered</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td style="
                                 width: 25%;
                                 ">Day 1</td>
                              <td>Introduction to Medical Coding and the US healthcare System</td>
                           </tr>
                           <tr>
                              <td>Week 1 and 2</td>
                              <td>Anatomy & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 3</td>
                              <td>General ICD-10 Guidelines & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 4</td>
                              <td>ICD-10, Chapter Specific Guidelines 1 to 5 & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 5</td>
                              <td>ICD-10, Chapter Specific Guidelines 6 to 10 & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 6</td>
                              <td>ICD-10, Chapter Specific Guidelines 11 to 15 & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 7</td>
                              <td>ICD-10, Chapter Specific Guidelines 15 to 21 & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 8</td>
                              <td>CPT Guidelines</td>
                           </tr>
                           <tr>
                              <td>Week 9</td>
                              <td>CPT Guidelines</td>
                           </tr>
                           <tr>
                              <td>Week 10</td>
                              <td>CPT Guidelines</td>
                           </tr>
                           <tr>
                              <td>Week 11</td>
                              <td>CPT Guidelines (Radiology & Pathology)</td>
                           </tr>
                           <tr>
                              <td>Week 12</td>
                              <td>CPT Guidelines (E&M Medicine)</td>
                           </tr>
                           <tr>
                              <td>Week 13</td>
                              <td>HCPCS/Compliance</td>
                           </tr>
                           <tr>
                              <td>Week 14</td>
                              <td>Combined Practice of CPC & ICD-10 Questions. (Exam Preparation through the sample papers)</td>
                           </tr>
                           <tr>
                              <td>Week 15-16</td>
                              <td>Exam Preparation (For Students, who required the additional time)</td>
                           </tr>
                           <tr>
                              <td>Week 17</td>
                              <td>Soft skills Training</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <button class="mobile-accordion mt-3 d-block d-lg-none">FAQs </button>
                  <div class="mbpanel">
                     <div class="accordion pt-sm-4 d-block d-lg-none" id="accordionExample">
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Will the classes be held online or offline?
                              </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 The classes are held offline at Sector 136, Noida, 201305.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Who is eligible to attend the classes?
                              </button>
                           </h2>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 Graduates with a background in PCB (Physics, Chemistry, Biology) disciplines such as B.Pharmacy, Nursing, Biotechnology, etc.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Will there be an entrance exam for the program?
                              </button>
                           </h2>
                           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 No, there will not be an entrance exam. However, there will be a telephonic interview to assess your eligibility.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingfour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapseThree">
                              Will I receive a certificate upon course completion?
                              </button>
                           </h2>
                           <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 Yes, upon successful completion of the course, you will receive a certificate from ACE.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingfive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapseThree">
                              What are the payment methods available for the course? Can I pay in installments?
                              </button>
                           </h2>
                           <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 The payment for the course is a one-time payment, which can be done online through UPI or NEFT (National Electronic Funds Transfer).
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button class="mobile-accordion mt-3 d-block d-lg-none">Our Faculty</button>
                  <div class="mbpanel">
                     <div class="faculty_exp pt-sm-4 d-block d-lg-none">
                        <div class="row">
                           <div class="col-sm-12 mb-3 mb-sm-4">
                              <div class="card">
                                 <div class="card-body mfaculty_details">
                                    <div class="fac_name justify-content-between">
                                       <h3 class="card-title">AJEET COC, CRC</h3>
                                       <h4>12+ years of experience</h4>
                                    </div>
                                    <p class="card-text">Specializing in Coding and Billing (including Charge Posting, Payment Posting), AR and Denials Management</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 mb-3 mb-sm-4">
                              <div class="card">
                                 <div class="card-body mfaculty_details">
                                    <div class="fac_name justify-content-between">
                                       <h3 class="card-title">KUNAL CPC, CRC</h3>
                                       <h4>12+ years of experience</h4>
                                    </div>
                                    <p class="card-text">specializing in Coding and AR</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 mb-3 mb-sm-4">
                              <div class="card">
                                 <div class="card-body mfaculty_details">
                                    <div class="fac_name justify-content-between">
                                       <h3 class="card-title">AKASH CPC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                       <h4>14+ years of experience</h4>
                                    </div>
                                    <p class="card-text">Specializing in Coding and Billing (including Charge Posting, Payment Posting), and Denials Management</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- mobile resp end -->
              <hr class="d-none d-lg-block">
                  <h2 class="d-none d-lg-block">CPC Fee Structure</h2>
                  <div class="fee-details d-flex justify-content-between d-none d-lg-block ">
                        <span>Course Fee</span>
                        <span>₹ 25,000</span>
                     </div>
                     <div class="fee-details d-flex justify-content-between d-none d-lg-block " >
                        <span>Exam + Membership</span>
                        <span>₹ 55,000</span>
                     </div>
                  <p class="d-none d-lg-block">Conversion rates may vary. These are approximate values.</p>
                  <div class="offcanvas offcanvas-end d-none d-lg-block" id="demo">
                     <div class="offcanvas-header">
                        <h2 class="offcanvas-title">Certified Professional Coder (CPC)</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                     </div>
                     <div class="offcanvas-body">
                        <table class="table">
                           <h2 class="course-head">Course Structure</h2>
                           <thead>
                              <tr class="dtls_tab_top">
                                 <th scope="col">Weeks </th>
                                 <th scope="col">Topic Covered</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td style="
                                    width: 25%;
                                    ">Day 1</td>
                                 <td>Introduction to Medical Coding and the US healthcare System</td>
                              </tr>
                              <tr>
                                 <td>Week 1 and 2</td>
                                 <td>Anatomy & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 3</td>
                                 <td>General ICD-10 Guidelines & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 4</td>
                                 <td>ICD-10, Chapter Specific Guidelines 1 to 5 & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 5</td>
                                 <td>ICD-10, Chapter Specific Guidelines 6 to 10 & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 6</td>
                                 <td>ICD-10, Chapter Specific Guidelines 11 to 15 & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 7</td>
                                 <td>ICD-10, Chapter Specific Guidelines 15 to 21 & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 8</td>
                                 <td>CPT Guidelines</td>
                              </tr>
                              <tr>
                                 <td>Week 9</td>
                                 <td>CPT Guidelines</td>
                              </tr>
                              <tr>
                                 <td>Week 10</td>
                                 <td>CPT Guidelines</td>
                              </tr>
                              <tr>
                                 <td>Week 11</td>
                                 <td>CPT Guidelines (Radiology & Pathology)</td>
                              </tr>
                              <tr>
                                 <td>Week 12</td>
                                 <td>CPT Guidelines (E&M Medicine)</td>
                              </tr>
                              <tr>
                                 <td>Week 13</td>
                                 <td>HCPCS/Compliance</td>
                              </tr>
                              <tr>
                                 <td>Week 14</td>
                                 <td>Combined Practice of CPC & ICD-10 Questions. (Exam Preparation through the sample papers)</td>
                              </tr>
                              <tr>
                                 <td>Week 15-16</td>
                                 <td>Exam Preparation (For Students, who required the additional time)</td>
                              </tr>
                              <tr>
                                 <td>Week 17</td>
                                 <td>Soft skills Training</td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="accordion pt-sm-4" id="accordionExample">
                           <h2>FAQs</h2>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Will the classes be held online or offline?
                                 </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The classes are held offline at Sector 136, Noida, 201305.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                 Who is eligible to attend the classes?
                                 </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    Graduates with a background in PCB (Physics, Chemistry, Biology) disciplines such as B.Pharmacy, Nursing, Biotechnology, etc.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                 Will there be an entrance exam for the program?
                                 </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    No, there will not be an entrance exam. However, there will be a telephonic interview to assess your eligibility.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingfour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapseThree">
                                 Will I receive a certificate upon course completion?
                                 </button>
                              </h2>
                              <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    Yes, upon successful completion of the course, you will receive a certificate from ACE.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingfive">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapseThree">
                                 What are the payment methods available for the course? Can I pay in installments?
                                 </button>
                              </h2>
                              <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The payment for the course is a one-time payment, which can be done online through UPI or NEFT (National Electronic Funds Transfer).
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="faculty_exp pt-sm-4">
                           <h2>Our Faculty</h2>
                           <div class="row">
                              <div class="col-sm-12 mb-3 mb-sm-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="fac_name d-flex justify-content-between">
                                          <h3 class="card-title">AJEET COC, CRC</h3>
                                          <h4>12+ years of experience</h4>
                                       </div>
                                       <p class="card-text">Specializing in Coding and Billing (including Charge Posting, Payment Posting), AR and Denials Management</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 mb-3 mb-sm-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="fac_name d-flex justify-content-between">
                                          <h3 class="card-title">KUNAL CPC, CRC</h3>
                                          <h4>12+ years of experience</h4>
                                       </div>
                                       <p class="card-text">specializing in Coding and AR</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 mb-3 mb-sm-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="fac_name d-flex justify-content-between">
                                          <h3 class="card-title">AKASH CPC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                          <h4>14+ years of experience</h4>
                                       </div>
                                       <p class="card-text">Specializing in Coding and Billing (including Charge Posting, Payment Posting), and Denials Management</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="courses-button mt-3 d-none d-lg-block">
                     <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                     More Details
                     </button>
                  </div>
               </div>
               <div class="card course-details p-4 mt-sm-4">
                  <div class="d-flex justify-content-between">
                     <h3>Certified Risk Adjustment Coder (CRC)</h3>
                     <h6>(14 weeks)</h6>
                  </div>
                  <!-- mobile resp  -->
                  <button class="mobile-accordion d-block d-lg-none">CRC Fee Structure</button>
                  <div class="mbpanel">
                     <div class="fee-details d-flex justify-content-between d-block d-lg-none ">
                        <span>Course Fee</span>
                        <span>₹ 25,000</span>
                     </div>
                     <div class="fee-details d-flex justify-content-between d-block d-lg-none " >
                        <span>Exam + Membership</span>
                        <span>₹ 55,000</span>
                     </div>
                  </div>
                  <button class="mobile-accordion mt-3 d-block d-lg-none">Course Structure </button>
                  <div class="mbpanel">
                     <table class="table d-lg-none">
                        <thead>
                           <tr class="dtls_tab_top">
                              <th scope="col">Weeks </th>
                              <th scope="col">Topic Covered</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td style="
                                 width: 25%;
                                 ">Day 1</td>
                              <td>Introduction to Medical Coding and the US healthcare System</td>
                           </tr>
                           <tr>
                              <td>Week 1</td>
                              <td>Anatomy & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 2</td>
                              <td>General ICD-10 Guidelines & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 3</td>
                              <td>General ICD-10 Guidelines & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 4</td>
                              <td>ICD-10, Chapter Specific Guidelines 1 to 5 & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 5</td>
                              <td>ICD-10, Chapter Specific Guidelines 6 to 10 & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 6</td>
                              <td>ICD-10, Chapter Specific Guidelines 11 to 15 & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 7</td>
                              <td>ICD-10, Chapter Specific Guidelines 15 to 21 & Tutorials</td>
                           </tr>
                           <tr>
                              <td>Week 8</td>
                              <td>CRC Book Chapter 1 to 5</td>
                           </tr>
                           <tr>
                              <td>Week 9</td>
                              <td>CRC Book Chapter 6 to 10</td>
                           </tr>
                           <tr>
                              <td>Week 10</td>
                              <td>Practice of ICD-10 Questions (At least five Practice set)</td>
                           </tr>
                           <tr>
                              <td>Week 11</td>
                              <td>Practice of CRC Sample Papers.</td>
                           </tr>
                           <tr>
                              <td>Week 12</td>
                              <td>Combined Practice of CRC theoretical & ICD-10 Questions (Exam Preparation through the sample papers)</td>
                           </tr>
                           <tr>
                              <td>Week 13</td>
                              <td>Exam Preparation (For Students, who required the additional time)</td>
                           </tr>
                           <tr>
                              <td>Week 14</td>
                              <td>Exam Preparation (For Students, who required the additional time)</td>
                           </tr>
                           <tr>
                              <td>Week 15</td>
                              <td>Soft Skills Training</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <button class="mobile-accordion mt-3 d-block d-lg-none">FAQs </button>
                  <div class="mbpanel">
                     <div class="accordion pt-sm-4 d-block d-lg-none" id="accordionExample">
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Will the classes be held online or offline?
                              </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 The classes are held offline at Sector 136, Noida, 201305.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Who is eligible to attend the classes?
                              </button>
                           </h2>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 Graduates with a background in PCB (Physics, Chemistry, Biology) disciplines such as B.Pharmacy, Nursing, Biotechnology, etc.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Will there be an entrance exam for the program?
                              </button>
                           </h2>
                           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 No, there will not be an entrance exam. However, there will be a telephonic interview to assess your eligibility.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingfour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapseThree">
                              Will I receive a certificate upon course completion?
                              </button>
                           </h2>
                           <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 Yes, upon successful completion of the course, you will receive a certificate from ACE.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingfive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapseThree">
                              What are the payment methods available for the course? Can I pay in installments?
                              </button>
                           </h2>
                           <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 The payment for the course is a one-time payment, which can be done online through UPI or NEFT (National Electronic Funds Transfer).
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button class="mobile-accordion mt-3 d-block d-lg-none">Our Faculty</button>
                  <div class="mbpanel">
                     <div class="faculty_exp pt-sm-4 d-block d-lg-none">
                        <div class="row">
                           <div class="col-sm-12 mb-3 mb-sm-4">
                              <div class="card">
                                 <div class="card-body mfaculty_details">
                                    <div class="fac_name justify-content-between">
                                       <h3 class="card-title">AJEET COC, CRC</h3>
                                       <h4>12+ years of experience</h4>
                                    </div>
                                    <p class="card-text">Specializing in Coding and Billing (including Charge Posting, Payment Posting), AR and Denials Management</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 mb-3 mb-sm-4">
                              <div class="card">
                                 <div class="card-body mfaculty_details">
                                    <div class="fac_name justify-content-between">
                                       <h3 class="card-title">KUNAL CPC, CRC</h3>
                                       <h4>12+ years of experience</h4>
                                    </div>
                                    <p class="card-text">specializing in Coding and AR</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 mb-3 mb-sm-4">
                              <div class="card">
                                 <div class="card-body mfaculty_details">
                                    <div class="fac_name justify-content-between">
                                       <h3 class="card-title">AKASH CPC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                       <h4>14+ years of experience</h4>
                                    </div>
                                    <p class="card-text">Specializing in Coding and Billing (including Charge Posting, Payment Posting), and Denials Management</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- mobile resp end -->
                  <hr class="d-none d-lg-block">
                  <h2 class="d-none d-lg-block">Fee Structure (CRC)</h2>
                  <div class="fee-details d-flex justify-content-between d-none d-lg-block">
                        <span>Course Fee</span>
                        <span>₹ 25,000</span>
                     </div>
                     <div class="fee-details d-flex justify-content-between d-none d-lg-block" >
                        <span>Exam + Membership</span>
                        <span>₹ 55,000</span>
                     </div>
                  <p class="d-none d-lg-block">Conversion rates may vary. These are approximate values.</p>
                  <div class="offcanvas offcanvas-end d-none d-lg-block" id="demo2">
                     <div class="offcanvas-header">
                        <h2 class="offcanvas-title">Certified Risk Adjustment Coder (CRC)</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                     </div>
                     <div class="offcanvas-body">
                        <table class="table">
                           <h2 class="course-head">Course Structure</h2>
                           <thead>
                              <tr class="dtls_tab_top">
                                 <th scope="col">Weeks </th>
                                 <th scope="col">Topic Covered</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td style="
                                    width: 25%;
                                    ">Day 1</td>
                                 <td>Introduction to Medical Coding and the US healthcare System</td>
                              </tr>
                              <tr>
                                 <td>Week 1</td>
                                 <td>Anatomy & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 2</td>
                                 <td>General ICD-10 Guidelines & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 3</td>
                                 <td>General ICD-10 Guidelines & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 4</td>
                                 <td>ICD-10, Chapter Specific Guidelines 1 to 5 & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 5</td>
                                 <td>ICD-10, Chapter Specific Guidelines 6 to 10 & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 6</td>
                                 <td>ICD-10, Chapter Specific Guidelines 11 to 15 & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 7</td>
                                 <td>ICD-10, Chapter Specific Guidelines 15 to 21 & Tutorials</td>
                              </tr>
                              <tr>
                                 <td>Week 8</td>
                                 <td>CRC Book Chapter 1 to 5</td>
                              </tr>
                              <tr>
                                 <td>Week 9</td>
                                 <td>CRC Book Chapter 6 to 10</td>
                              </tr>
                              <tr>
                                 <td>Week 10</td>
                                 <td>Practice of ICD-10 Questions (At least five Practice set)</td>
                              </tr>
                              <tr>
                                 <td>Week 11</td>
                                 <td>Practice of CRC Sample Papers.</td>
                              </tr>
                              <tr>
                                 <td>Week 12</td>
                                 <td>Combined Practice of CRC theoretical & ICD-10 Questions (Exam Preparation through the sample papers)</td>
                              </tr>
                              <tr>
                                 <td>Week 13</td>
                                 <td>Exam Preparation (For Students, who required the additional time)</td>
                              </tr>
                              <tr>
                                 <td>Week 14</td>
                                 <td>Exam Preparation (For Students, who required the additional time)</td>
                              </tr>
                              <tr>
                                 <td>Week 15</td>
                                 <td>Soft Skills Training</td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="accordion pt-sm-4" id="accordionExample">
                           <h2>FAQs</h2>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Will the classes be held online or offline?
                                 </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The classes are held offline at Sector 136, Noida, 201305.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                 Who is eligible to attend the classes?
                                 </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    Graduates with a background in PCB (Physics, Chemistry, Biology) disciplines such as B.Pharmacy, Nursing, Biotechnology, etc.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                 Will there be an entrance exam for the program?
                                 </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    No, there will not be an entrance exam. However, there will be a telephonic interview to assess your eligibility.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingfour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapseThree">
                                 Will I receive a certificate upon course completion?
                                 </button>
                              </h2>
                              <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    Yes, upon successful completion of the course, you will receive a certificate from ACE.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingfive">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapseThree">
                                 What are the payment methods available for the course? Can I pay in installments?
                                 </button>
                              </h2>
                              <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The payment for the course is a one-time payment, which can be done online through UPI or NEFT (National Electronic Funds Transfer).
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="faculty_exp pt-sm-4">
                           <h2>Our Faculty</h2>
                           <div class="row">
                              <div class="col-sm-12 mb-3 mb-sm-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="fac_name d-flex justify-content-between">
                                          <h3 class="card-title">AJEET COC, CRC</h3>
                                          <h4>12+ years of experience</h4>
                                       </div>
                                       <p class="card-text">Specializing in Coding and Billing (including Charge Posting, Payment Posting), AR and Denials Management</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 mb-3 mb-sm-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="fac_name d-flex justify-content-between">
                                          <h3 class="card-title">KUNAL CPC, CRC</h3>
                                          <h4>12+ years of experience</h4>
                                       </div>
                                       <p class="card-text">specializing in Coding and AR</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 mb-3 mb-sm-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="fac_name d-flex justify-content-between">
                                          <h3 class="card-title">AKASH CPC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                          <h4>14+ years of experience</h4>
                                       </div>
                                       <p class="card-text">Specializing in Coding and Billing (including Charge Posting, Payment Posting), and Denials Management</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="courses-button mt-3 d-none d-lg-block">
                     <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo2">
                     More Details
                     </button>
                  </div>
               </div>
               <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                  <div class="form-container d-none">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Courses Section -->
      <!-- ======= Training Section ======= -->
      <section id="training" class="training d-flex align-items-center section-bg">
         <div class="container">
            <div class="row justify-content-between gy-5">
               <div class="col-lg-6 d-flex flex-column justify-content-center">
                  <h2>Our Training Space</h2>
                  <div class="row">
                     <div class="training-details mb-4">
                        <img src="assets/img/training-session.jpg">
                     </div>
                     <div class="training-details mt-4">
                        <img src="assets/img/training-session2.jpg">
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                  <div class="form-container d-none">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End training Section -->
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row gy-3">
               <div class="col-lg-6 col-md-6 d-flex">
                  <div>
                     <img src="assets/img/acelogowhite.svg" alt="ace learning">
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 footer-links d-flex">
                  <div>
                     <span><img src="assets/img/location.svg"></span><a href="https://goo.gl/maps/pA2Ba21JrekfsaGX6" style="
    color: #fff;
" target="new"> A - 76, Sector 136, Noida, Uttar Pradesh 201305</a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- End Footer -->
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
     
     <script>
         jQuery(document).ready(function(){
                 jQuery('#certificate_form').submit(function(){
                     jQuery.ajax({
                         type: "POST",
                         url:  "certificate_submit.php",
                         data:  jQuery("#certificate_form").serialize(), 
                         success: function(response){
                           var data = $.parseJSON(response);
                           if(data==1){
                             $('.success').show();
                           } else{
                             $('.success').hide();
                             $('.error').show();
                           }
                         },
                         error: function(response){
                             console.log(response);
                         } 
                     });
                 return false;
                 });
         }); 
      </script>
      <script>
         jQuery(document).ready(function(){
                 jQuery('#certificate_form-2').submit(function(){
                     jQuery.ajax({
                         type: "POST",
                         url:  "certificate_submit2.php",
                         data:  jQuery("#certificate_form-2").serialize(), 
                         success: function(response){
                           var data = $.parseJSON(response);
                           if(data==1){
                             $('.success').show();
                             $( "#clearForm2" ).trigger( "click" );
                           } else{
                             $('.success').hide();
                             $('.error').show();
                           }
                         },
                         error: function(response){
                             console.log(response);
                         } 
                     });
                 return false;
                 });
         }); 
      </script>
      <!-- <script>
         function renderCaptcha() {
           grecaptcha.render('captchaContainer', {
             'sitekey': 'YOUR_SITE_KEY',
             'theme': 'light'
           });
         }
         
         // Wait for the page to load before rendering the CAPTCHA
         document.addEventListener('DOMContentLoaded', renderCaptcha);
         </script> -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/$/3.7.0/jquery.min.js"></script> 
      <script>
         var acc = document.getElementsByClassName("mobile-accordion");
         var i;
         
         for (i = 0; i < acc.length; i++) {
           acc[i].addEventListener("click", function() {
             this.classList.toggle("active");
             var mbpanel = this.nextElementSibling;
             if (mbpanel.style.display === "block") {
               mbpanel.style.display = "none";
             } else {
               mbpanel.style.display = "block";
             }
           });
         }
      </script> 

      <script>
      document.addEventListener('DOMContentLoaded', function() {
  var phoneInput = document.getElementById('phone');
  phoneInput.addEventListener('input', function() {
    if (phoneInput.validity.patternMismatch) {
      phoneInput.setCustomValidity("Please enter a 10-digit phone number");
    } else {
      phoneInput.setCustomValidity("");
    }
  });
});
 </script> 
  <script>        
           function phoneno(){          
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
       </script>
       <script>function restrictNonNumeric(element) {
  element.value = element.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
}</script>
<script>
  // Add event listener to all anchor links on the page
  var anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach(function(anchorLink) {
    anchorLink.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default anchor link behavior
      var targetId = this.getAttribute('href').substr(1); // Get the ID from the href attribute
      var targetElement = document.getElementById(targetId); // Find the target element by ID
      if (targetElement) {
        // Scroll to the target element smoothly
        targetElement.scrollIntoView({
          behavior: 'smooth'
        });

        // Replace the URL without the anchor ID
        history.replaceState(null, null, window.location.pathname + window.location.search);
      }
    });
  });
</script>

<!-- google tag no script-file -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-574B8SZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
   </body>
</html>