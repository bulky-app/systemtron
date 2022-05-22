<?php include('config/header.php');
include('config/navbar.php'); ?>


<section class="background">
  <img src="images/backgrd.jpg" alt="background">
  <div class="welcome">
    <h2>BE YOUR OWN BOSS <br><span>Time is limited, Learn here ,Lead anywhere</span></h2>
  </div>
</section>

<main class="sectionmain">
  <div>
    <h3>Want to start your own business?</h3>

    <p>Be your own boss is the website to be at.<br>-We provide essential tools and information on how one can start and maintain their business.<br>
      -We provide full support and learnership programs on starting your own business with full support from the government.<br>
      -The learnership program includes how to write a business plan and how to grow it once opened, how the funding from the government goes and the registering of the business.<br>
      -We offer various kinds of support programs to anyone whose intrested
    </p>
  </div>
  <div class="row row2">
    <img class="homeimage image2" src="images/growth2.jpg" alt="bob-growth2">

    <img class="homeimage image2" src="images/growth.jpg" alt="bob-growth">
  </div>
  <div class="row row2">
    <p>-We pride ourselves in providing excellence through our programs.<br>
      -Over 90% of our students have completed our modules.<br>
      -Our students stand a greater chance to be great entreprenenurs with successful businesses.<br>
      -We encourage students to engage with thier peers and think creatively and spot opportunities.<br>
    </p>
    <img class="homeimage" src="images/creativ.jpg" alt="bob-creativ">
  </div>
  <div class="row row2">

    <img class="homeimage" src="images/creative2.jpg" alt="bob-creative2">
    <p>
      -Be Your Own Boss offers exceptional flexibility providing you with excellent programs.<br>
      -We have a dedicated team that provides easily accesible support that will help .<br>
      -Our programs are aimed at building students.<br>
      -We provide essential skills required for a successful entreprenenurship journey.
    </p>
  </div>
  </section>
  <section class="home4">
    <hr size="1" width="100%" color="grey">
    <div class="home3">
      <p>
      <h2>Great Environment , fruitful results </h2>
      </p>
      <p>BOB is diverse and skillfil enough to help anyone of any age.Once in youll never regret it.</p>
      <li><a href=" ">Learn More</a></li>
    </div>
    <img src="images/homeimg.jpg" alt="bob-students"></li>
    <img src="images/youth.jpg" alt="bob-images"></li>
    <img src="images/hstudents.jpg" alt="bob-image"></li>
  </section>
</main>
<section class="register">
  <div class="home-pop-up">
    <center>
      <h2>Subscribe to our newsletters</h2>
    </center>
    <form class="login-form conf-form " action="manual/subscribe.php" method="post">
      <input type="text" placeholder="Enter name" name="name" required>
      <input type="text" placeholder="Enter Email" name="email" required>
      <br>
      <?php

if (!empty($_GET['submassage'])) {
    echo "<p class='success'>" . $_GET['submassage'] . "</p> ";
} ?>
      <input class='button' type="submit" value="Submit">
    </form>
  </div>
</section>




<!-- This inserts the footer -->
<?php include('config/footer.php') ?>
<!-- Do not add any content below this line. -->