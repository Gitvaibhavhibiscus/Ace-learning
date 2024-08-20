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