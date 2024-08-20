<?php include ('component/header.php'); ?>
<div>
<div class="tttt">
<div class="container"> 
   <div class="row p-layout">
      <div class="col-lg-6 col-md-12 col-sm-12">
         <section id="hero" class="hero d-flex align-items-center">
               <div class="row justify-content-between gy-5">
                  <div class="col-lg-12 d-flex flex-column">
                     <h2>Become a Certified <br>Medical Coder</h2>
                     <div class="d-flex">
                        <h5>Expert Training in <br>collaboration with</h5>
                        
                        <a href="https://www.aapc.com/" target="new"><img src="assets/img/aapc-logo.svg" alt="AAPC" style="
                           padding-left: 15px;"></a>
                     </div>
                     <p>Certified Professional Trainers. 100% Certification and Job Placement Assistance. </p>
                     <!-- mobile offcanvas start -->
                     <button class="btn btn-primary d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Request a callback <img src="assets/img/request-call.svg"></button>
                     <div class="offcanvas offcanvas-end d-block d-lg-none" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                           <h5 id="offcanvasRightLabel">Earn a Professional Certificate</h5>
                           <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                           <?php include ('component/form/mobile_form.php'); ?>
                        </div>
                     </div>
                     <!-- mobile offcanvas end -->
                  </div>
               </div>
         </section>
         <!-- ======= courses Section ======= -->
         <?php include ('component/courses.php'); ?>
         <!-- ======= end courses Section ======= -->
         <!-- ======= Training Section ======= -->
         <?php include ('component/training.php'); ?>
         <!-- End training Section -->
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 d-none d-lg-block">
         <div id="sidebar" class="col-lg-12 form-fixed order-1 order-lg-2 text-center text-lg-start">
            <div class="form-container">
               <h2>Request a Call Back</h2>
               <p>Share your details here and our team will reach out to you shortly.</p>
               <hr>
               <?php include ('component/form/desktop_form.php'); ?>
               
               <div class="col form-msg success text-center" style="display:none">
                  Your request has been received and we shall contact you soon! Thanks.
               </div>
               <div class="col form-msg error text-center" style="display:none">
                  Something went wrong!. Try again Later.
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div>
<!-- <------ footer ------>
<?php include ('component/footer.php'); ?>
<!-- <------ end footer ------>
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
                             $( "#clearForm" ).trigger( "click" );
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


<script>
    // Function to generate a random word for the captcha challenge
    function generateRandomWord(length = 6) {
        const characters = 'abCdEfghijkLmnoPqrsTuvwxyz';
        let word = '';
        for (let i = 0; i < length; i++) {
            word += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        return word;
    }

    // Generate the spelling captcha
    function generateCaptcha() {
        const captchaContainer = document.getElementById('captchaContainer');
        const randomWord = generateRandomWord();

        // Render the captcha challenge
        captchaContainer.innerHTML = `
            <div class="d-flex">
                <label for="captcha_input">Please enter the letters you see below<span class="required">*</span></label>
                <div>
                    <input type="text" id="captcha_input" name="captcha_input" required="required">
                    <p>Enter the captcha: <span style="color:#013399;">${randomWord}</span></p>
                </div>
            </div>
        `;

        // Store the correct answer in a data attribute
        captchaContainer.dataset.captchaAnswer = randomWord;
    }

    // Function to validate the captcha on form submission
    function validateCaptcha(event) {
        const userInput = document.getElementById('captcha_input').value.toLowerCase();
        const captchaAnswer = document.getElementById('captchaContainer').dataset.captchaAnswer.toLowerCase();

        if (userInput !== captchaAnswer) {
            // Captcha validation failed, prevent form submission
            event.preventDefault();

            // Display alert with option to re-enter captcha
            const reEnterCaptcha = confirm('Please enter the correct answer for the captcha challenge. Click OK to re-enter the captcha.');
            if (reEnterCaptcha) {
                generateCaptcha(); // Regenerate the captcha
                document.getElementById('captcha_input').value = ''; // Clear the previous user input
            }
        }
    }

    // Attach an event listener to the clear form button to regenerate the captcha
    document.getElementById('clearForm2').addEventListener('click', generateCaptcha);

    // Generate the initial captcha
    generateCaptcha();
</script>


<!-- google tag no script-file -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-574B8SZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>