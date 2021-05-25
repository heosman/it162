<?php include "includes/header.php";?>

<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When displaying images on a website, you typically want to display the image and 
     allow it to function beautifully on your website. This could range from your images having 
     borders and being aligned with your other images to having a slideshow with multiple of 
     your images. This is when we would try to create a responsive image gallery. There are 
     multiple ways we can do this. We could use CSS or jquery. Online we can find many image 
     galleries to use that have already been made. </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image galleries made with CSS are easy to make yourself and are simple. You can choose 
    the behaviors and appearances of your image(s) when hovered on or clicked. For example, in 
    a tutorial by W3schools, you can create a slideshow gallery by using CSS. With HTML, you code 
    the image with IDs. Then with CSS you can change the behavior of the images by calling those 
    IDs and the image tag. Using the .prev and .next classes allows you to choose what your image(s) 
    look like before they are interacted with and what they look like after they are interacted 
    with. The :hover selector combined with the .prev and .next classes is what allows you to change 
    the behavior and appearance of the image before and after they are hovered on [1].</p>
   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jQuery is a Javascript library which offers features to advance your HTML and use 
       Javascript much more easily. With jQuery, you can manipulate your HTML documents. For example, 
       you can animate your elements, and etc [2]. This is another way you can script an image 
       gallery. A lot of jQuery galleries can be found online. Some examples are the S3Slider image 
       slideshow and the Lightbox image gallery [3].</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
            <h3>Citations</h3>
            <div class="citation">
              <dl>
                  <dt>[1]</dt>
                  <dd> “How TO - Slideshow Gallery.” <em>W3schools</em>, Refsnes Data, www.w3schools.com/howto/howto_js_slideshow_gallery.asp. </dd>
              </dl>
              <dl>
                  <dt>[2]</dt>
                  <dd> <em>JQuery</em>, Js.foundation, jquery.com/. </dd>
              </dl>
              <dl>
                  <dt>[3]</dt>
                  <dd>“Top 50 JQuery Gallery & Image Sliders for 2020.”  <em>1stWebDesigner</em>, 26 Aug. 2020, 1stwebdesigner.com/jquery-gallery/. </dd>
              </dl>
            </div>
        </aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>
