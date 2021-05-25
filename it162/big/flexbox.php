<?php include "includes/header.php";?>

<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flexbox is a layout module that changes the alignment and layout of elements, and 
    manipulates the distribution of space around elements. Flexbox could be described as 
    one-dimensional, meaning that it approaches layout one dimension at a time [1]. Flexbox 
    works by controlling the width and height of the container of an element so that the 
    spacing between and around the elements can be altered [2].</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The flex layout is composed of two axes: the main axis and the cross-axis. The main-axis’ 
   direction depends on its flex-direction property. The main-start and main-end properties 
   define the start and end of where the flex items will reside in the container. The main 
   size property defines the width or height of the container, whichever is indicated by the 
   flex-direction property (row or column). The opposite axis would be the cross axis. The cross 
   axis would be perpendicular to the main axis, so if the main axis was horizontal, the cross-axis 
   would be vertical, and vice versa. Like the main axis, the axis has start and end and size 
   properties called the cross-start, the cross-end and the cross size.</p>
   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are two categories of properties: the parent properties and the child properties. 
    The parent properties are the properties that apply to the container. Examples of parent 
    properties include display, flex-direction, flex-wrap, flex-flow, justify-content, align-content, 
    and align-items. The display property allows you to define the container as either block or 
    inline. Flex-wrap lets you change the way the flex items are warped into lines. Justify-content
    allows you to choose the alignment of the flex-items and the space distribution. Align-items 
    allows you to align the items on the cross-axis in the container while align-content aligns, 
    similar to justify-content. The child properties are the properties that apply to the flex 
    items. They consist of order, flex-grow, flex-shrink, flex-basis, flex, and align-self.</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
            <h3>Citations</h3>
            <div class="citation">
              <dl>
                  <dt>[1]</dt>
                  <dd> “Basic Concepts of Flexbox - CSS: Cascading Style Sheets: MDN.” <em>MDN Web Docs</em>, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox. </dd>
              </dl>
              <dl>
                  <dt>[2]</dt>
                  <dd>Damme, Tim Van, et al. “A Complete Guide to Flexbox: CSS-Tricks.” <em>CSS-Tricks</em>, 7 Apr. 2021, css-tricks.com/snippets/css/a-guide-to-flexbox/. </dd>
              </dl>
            </div>
        </aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>
