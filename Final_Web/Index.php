<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="./Assets/Favicon.ico">
    <link rel="stylesheet" href="./CSS/all.css">
    <link rel="stylesheet" href="./CSS/owl.carousel.min.css">
    <link rel="stylesheet" href="./CSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="./CSS/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Poem Hub</title>
  </head>

  <body>
  <!-------------------Navigator------------------------->
  <nav class="nav">
    <div class="nav_menu flex_row">
      <img src="Assets/Logo.png" alt="Logo Picture" class="nav_brand">
      <div class="toggle_collapse">
        <div class="toggle_icons">
          <i class="fas fa-bars"></i>
        </div>
      </div>
      <div>
        <ul class="nav_item">
          <li class="nav_link"><a href="#Home">Home</a></li>
          <li class="nav_link"><a href="#Samples">Bloggs</a></li>
          <li class="nav_link"><a href="#About">About Us</a></li>
          <li class="nav_link"><a href="#Submit">Send Now?</a></li>
        </ul>
      </div>
      <div class="social">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fas fa-envelope"></i></a>
      </div>
    </div>
  </nav>

  <!-------------------Home ------------------------------>
  <main>
    <a name="Home"></a>
    <section class="site_title">
      <div class="site_background">
        <img src="Assets/Avatar.svg" alt="avatar" class="site_avatar">
        <h1>POEM HUB</h1>
        <h3>"Basta Kapampangan, Manyaman Susulat."</h3>
        <h3>Kapampangan Writers Guild Site</h3>
      </div>
    </section>
    
  <!-------------------Samples------------------------->
    <section>
      <div class="blog">
        <a name="Samples"></a>
          <div class="container">
              <div class="owl-carousel owl-theme blog_post">
                <div class="blog_content">
                  <img src="./Assets/Blog-Post/Sample (1).jpg" alt="Sample1">
                  <div class="blog_title">
                    <h4>Pen Name: Jose Chan</h4>
                    <h4>City/Municipality: Angeles City</h4>
                    <h4>Date Submitted: March 03, 2020</h4>
                    <button class="btn btn_blog">Browse</button>
                  </div>
                </div>
                <div class="blog_content">
                  <img src="./Assets/Blog-Post/Sample (2).jpg" alt="Sample2">
                  <div class="blog_title">
                    <h4>Pen Name: Jeffry</h4>
                    <h4>City/Municipality: San Fernando</h4>
                    <h4>Date Submitted: December 21, 2019</h4>
                  </div>
                </div>
                <div class="blog_content">
                  <img src="./Assets/Blog-Post/Sample (3).jpg" alt="Sample3">
                  <div class="blog_title">
                    <h4>Pen Name: PoemSnipe</h4>
                    <h4>City/Municipality: Mabalacat</h4>
                    <h4>Date Submitted: April 12, 2020</h4>
                    <button class="btn btn_blog">Browse</button>
                  </div>
                </div>
                <div class="blog_content">
                  <img src="./Assets/Blog-Post/Sample (4).jpg" alt="Sample4">
                  <div class="blog_title">
                    <h4>Pen Name: Cabbie</h4>
                    <h4>City/Municipality: Floridablanca</h4>
                    <h4>Date Submitted: May 10, 2021</h4>
                    <button class="btn btn_blog">Browse</button>
                  </div>
                </div>
                <div class="blog_content">
                  <img src="./Assets/Blog-Post/Sample (5).jpg" alt="Sample5">
                  <div class="blog_title">
                    <h4>Pen Name: hiNoon</h4>
                    <h4>City/Municipality: Apalit</h4>
                    <h4>Date Submitted: Apri 10, 2019</h4>
                    <button class="btn btn_blog">Browse</button>
                  </div>
                </div>
                <div class="blog_content">
                  <img src="./Assets/Blog-Post/Sample (6).jpg" alt="Sample6">
                  <div class="blog_title">
                    <h4>Pen Name: Mr. Yoso</h4>
                    <h4>City/Municipality: Magalang</h4>
                    <h4>Date Submitted: June 25, 2021</h4>
                    <button class="btn btn_blog">Browse</button>
                  </div>
                </div>
              </div>
              <div class="owl-navigation">
                  <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left" ></i></span>
                  <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
              </div>
          </div>
      </div>
    </section>

  <!-------------------About us------------------------->
  <a name="About"></a>
    <section class="container2">
      <div class="site_content">
          <div class="posts">
              <div class="post_content" data-aos="zoom-in" data-aos-delay="200">
                  <div class="post_image">
                      <div>
                          <img src="./Assets/cca.png" class="img" alt="About">
                      </div>
                      <div class="post_info flex_row">
                          <span><i class="fas fa-user text-gray"></i>&nbsp;Developers:&nbsp;&nbsp;Jemrick Santos, Karl Juarez, Jefferson Mengullo</span>
                      </div>
                  </div>
                  <div class="post_title">
                      <h1>About Us</h1>
                      <p><b>Poem Hub</b> is based on the idea that Kapampangans, in general, are wordsmiths  whether it be in prose or in poetry.
                      </p>
                      <p>Site visitors can see the submitted and filtered entries from other Kapampangan writers, and they can also submit their own entries that can be featured in the site.</p>
  <!-------------------Submit------------------------->
                      <form action="create.php" >
                      <a name="Submit"></a>
                      <button type="submit" class="btn btn-info">Submit</button>
                      </form>
                  </div> 
              </div>
          </div>
            </div>
          </aside>
      </div>
    </section>
  </main>


  <!-- Jquery -->
    <script src="./JS/jquery.min.js"></script>
    <script src="./JS/owl.carousel.min.js"></script>
  <!-- Javascript -->
  <script src="./JS/main.js"></script>
  </body>
</html>