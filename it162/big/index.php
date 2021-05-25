<?php include "includes/header.php";?>

<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>
 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hanaaneooo@gmail.com";  //place your/your client's email address here
        $toName = "Hanan"; //place your client's name here
        $website = "Form Test";  //place NAME of your client's website

        echo loadContact('multiple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</section>

<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <br><h3>Basic Website Design Cycle</h3>
 <ul>
    <li><a href="https://webflow.com/blog/the-web-design-process-in-7-simple-steps">The web design process</a></li>
    <li><a href="https://xbsoftware.com/blog/website-development-process-full-guide/">Guide to the web developmental process</a></li>
    <li><a href="https://elementor.com/blog/website-design-questionnaire/">A guide to web client surveys</a></li>
  </ul>
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>
