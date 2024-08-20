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
      <script src="https://cdn.jsdelivr.net/npm/spellingcaptcha@1.0.0/dist/spellingcaptcha.min.js"></script>
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
<style>
.top-bar {
    background-color: #272733; /* Initial background color */
    color: #fff; /* Text color */
    text-align: center;
    padding: 10px;
    transition: background-color 0.3s ease; /* Smooth color transition */
}

.top-bar img {
    margin:6px 8px;
    width:18px;
    height:auto;

}

.topbar-text {
    font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: 20px;
}
</style>

   </head>
   <body>
      <!-- ======= Header ======= -->
      <div class="top-bar" id="myTopBar">
        <span class="topbar-text" id="barText"><img src="assets/img/star.svg" alt="star icon" width:"16px" height:"8px" >Fourth batch starting soon.<img src="assets/img/star.svg" alt="star icon"  width:"16px" height:"8px"></span>
    </div>
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

      <script>
      function updateTopBar() {
    const topBar = document.getElementById("myTopBar");
    const barText = document.getElementById("barText");

    if (topBar.style.backgroundColor === "rgb(203, 102, 79)") {
        // If the background color is as expected, change it to a new color and text
        topBar.style.backgroundColor = "#272733"; // New background color
        barText.innerText = "Fourth batch starting soon."; // New text
    } else {
        // Otherwise, revert to the original color and text
        topBar.style.backgroundColor = "#CB664F"; // Original background color
        barText.innerText = "Only 10 seats left."; // Original text
    }
}

setInterval(updateTopBar, 100000); // 10 seconds in milliseconds

      </script>