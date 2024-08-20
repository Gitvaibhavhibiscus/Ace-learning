<style>
input:not(:placeholder-shown):invalid{
  background-color:pink;
  box-shadow:0 0 0 2px red;
}
</style>
<form action="certificate_submit2.php" method="post" name="certificateForm-2" id="certificate_form-2" onsubmit="return validateForm();">
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
    
    <input 
  type="email"
  name="email"
  lang="en"
  maxlength="254"
  value=""
  placeholder="example@domain.com"
  autocapitalize="off" spellcheck="false" autocorrect="off"
  autocomplete="on"
  required=""
  inputmode="email"
  pattern="[^@\s]+@[^@\s]+\.[a-zA-Z]{2,14}">
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
    <input type="submit" value="Submit" onclick="verifyCaptcha()">
  </div>
</form>
