<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Adulam Website</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/foundation.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/style.css">

  <script src="<?php echo base_url() ?>resources/js/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
  
  <header>
    <div class="row" id="logo"><img src="<?php echo base_url() ?>resources/images/adulam_logo.png"></div>
  </header>

  <div class="navigator">
    <div class="row nav-container">
      <nav>
        <ul class="" id="main_menu">
          <li><a href="#adulam" class="selected">Adulam</a></li>
          <li><a href="#discografy">Discography</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#media">Media</a></li>
          <li><a href="#shop">Shop</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="row">

    <section id="media">
        <div id="video_slider">
          <div class="media-video"><iframe src="http://www.youtube.com/embed/dRKIQFib1XY" frameborder="0" allowfullscreen></iframe></div>
          <div class="media-video"><iframe src="http://www.youtube.com/embed/mEdtVQAmWII" frameborder="0" allowfullscreen></iframe></div>
          <div class="media-video"><iframe src="http://www.youtube.com/embed/rEH03cQBEEM" frameborder="0" allowfullscreen></iframe></div>
        </div>
        
        <a id="prev2" class="prev" href="#">&lt;</a>
        <a id="next2" class="next" href="#">&gt;</a>
        <div id="pager2" class="pager"></div>
    </section>

    <!-- Main Blog Content -->
    <div class="nine columns" role="content">

      <article>

        <h3><a href="#">Blog Post Title</a></h3>
        <h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>

        <div class="row">
          <div class="six columns">
            <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
            <p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
          </div>
          <div class="six columns">
            <img src="http://placehold.it/400x240&text=[img]" />
          </div>
        </div>

        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

      </article>

      <hr />

      <article>

        <h3><a href="#">Blog Post Title</a></h3>
        <h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>

        <div class="row">
          <div class="six columns">
            <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
            <p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
          </div>
          <div class="six columns">
            <img src="http://placehold.it/400x240&text=[img]" />
          </div>
        </div>

        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

      </article>

    </div>

    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="three columns">

      <h5>Categories</h5>
      <ul class="side-nav">
        <li><a href="#">News</a></li>
        <li><a href="#">Code</a></li>
        <li><a href="#">Design</a></li>
        <li><a href="#">Fun</a></li>
        <li><a href="#">Weasels</a></li>
      </ul>

      <div class="panel">
        <h5>Featured</h5>
        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
        <a href="#">Read More &rarr;</a>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


  <!-- Footer -->

  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="six columns">
          <ul class="link-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- End Footer -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="<?php echo base_url() ?>resources/js/jquery.js"></script>
  <script src="<?php echo base_url() ?>resources/js/foundation.min.js"></script>
  <script src="<?php echo base_url() ?>resources/js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>resources/js/waypoints.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>resources/js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>resources/js/navbar.js" type="text/javascript"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?php echo base_url() ?>resources/js/app.js"></script>
  <script type="text/javascript">
   $(function(){

    $('#video_slider').carouFredSel({
          responsive: true,
          width: '100%',
          scroll: 1,
          items: {
            width: 400,
          //  height: '30%',  //  optionally resize item-height
            visible: {
              min: 1,
              max: 2
            }
          },
          auto: false,
          prev: '#prev2',
          next: '#next2',
          pagination: "#pager2"
        });
   });
  </script>
  
</body>
</html>
