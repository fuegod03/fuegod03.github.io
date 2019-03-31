
<style media="screen">
#top .container .play-button{
  padding: 5px 15px 5px 15px;
  margin-top:  20%;
  position: absolute;
    left: 50%;
    color: white;
    transition: all .4s ease-in-out;
    display: inline-block;
    *display: inline;
    border: solid 2px #fff;
    border-radius: 3px;
    line-height: 1.8em;
    font-size: 1em;
    color: #fff;
    text-align: center;
    text-decoration: none;
margin-left: 0 !important;
}
#top .container .play-button i{
  margin-left: 5px;
  display: inline-block;
}
#top .container .play-button:hover{
  color: #fc8e1b;
  border: solid 2px #fc8e1b;
}
</style>

<?php get_header(); ?>
<body>
    <!-- Start of second box -->


    <section class="main-about" data-aos="fade"
    data-aos-delay="100"
    data-aos-offset="200"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false">
      <div class="wraper">

      <h1>  Splendor is a full-service branding, custom web design, and marketing agency.
        We combine big picture strategic thinking with award-winning creativity to solve
        real-world business problems. Our expertise lies in delivering powerful,
         captivating messaging for today’s short attention span world.</h1>
        <h2>20 years in business • 217+ awards • Red Bank, NJ location </h2>
      </div>
    </section>

    <!-- Start of third box -->

    <section id="portfolio-section" data-aos="fade"
    data-aos-delay="100"
    data-aos-offset="200"
    data-aos-duration="1500"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false" >

      <div class="container">
        <div class="title">
          <div class="circle"></div>
          <h1>Work</h1>
        </div>


        <div class="portfolio-container">
<?php   include("loopingwp/work_loop.php")?>
        </div>
      </div>

    </section>

    <section id="services-section"     data-aos="fade"
    data-aos-delay="100"
    data-aos-offset="200"
    data-aos-duration="1500"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    >
      <div class="container">
        <div id="basic-waypoint" class="title">
          <div class="circle"></div>
          <h1>services</h1>
        </div>

        <div class="services-container">

<?php include("loopingwp/service_loop.php") ?>

        </div>
      </div>
    </section>

    <section id="brand-section" data-aos="fade"
    data-aos-delay="100"
    data-aos-offset="200"
    data-aos-duration="1500"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false">
      <?php include("loopingwp/brand_loop.php") ?>
      <div class="tittle">
        <h1>  Brands </h1>
      </div>


    </section>


    <section id="blog-section" data-aos="fade"
    data-aos-delay="100"
    data-aos-offset="200"
    data-aos-duration="1500"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false">
      <div class="container">
        <div class="title">
          <div class="circle"> </div>
          <h1>Blog</h1>
        </div>
        <div class="blog-container">

<?php include("loopingwp/blog_loop.php") ?>
        </div>
      </div>
    </section>


    <section  id="testimonials-section" data-aos="fade"
    data-aos-delay="100"
    data-aos-offset="200"
    data-aos-duration="1500"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false">
      <div class="container" >
        <div class="title">
          <div class="circle"></div>
          <h1>Testimonials</h1>
        </div>
<?php include("loopingwp/testimonial_loop.php") ?>
      </div>

    </section>
<?php get_footer(); ?>
<!-- request footer -->
