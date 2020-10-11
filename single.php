<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@600&display=swap" rel="stylesheet">

        <title><?php echo $post['title']; ?> | PRAPOSAL</title>
    </head>
    <body>
        <!-- Facebook Page Plugin SDK -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" 
         src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="cvdBJeVX">
        </script>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

             <!-- Content -->
             <div class="content clearfix">

                <!-- Main Content Wrapper -->
                <div class="main-content-wrapper">
                <div class="main-content single">
                 <h1 class="post-title"><?php echo $post['title']; ?></h1>
                
                  <div class="post-content">
                      <?php echo html_entity_decode($post['body']); ?>
                  </div>

                
                </div>
             </div>
                 <!-- // Main Content -->  

                 <!-- Sidebar -->
                <div class="sidebar single">
                    

                    <div class="fb-page" data-href="https://www.facebook.com/Sellex-Lanka-106138471247404" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Sellex-Lanka-106138471247404" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Sellex-Lanka-106138471247404">Sellex Lanka</a></blockquote></div>

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                 <?php foreach ($posts as $p): ?>
                 <div class="post clearfix">
                     <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                     <a href="" class="title">
                     <h4><?php echo $p['title'] ?></h4>
                     </a>
                 </div>
                 <?php endforeach; ?>
                 
                 
                </div>

                  <div class="section topics">
                      <h2 class="section-title">Topic</h2>
                      <ul>
                          <?php foreach ($topics as $topic): ?>
                               <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                          <?php endforeach; ?>
                          
                         
                      </ul>
                  </div>

                </div>
                <!-- // Sidebar -->
             </div>
             <!-- // Content -->

        </div>
        <!-- // Page Wrapper -->

        <!-- footer -->
        <div class="footer">
            <div class="footer-content">

                <div class="footer-section about">
                    <h1 class="logo-text"><span>PRAPOSAL</span></h1>
                    <p>
                        We Help Sell Your Product..
                    </p>
                    <div class="contact">
                        <span><i class="fa fa-phone"></i> &nbsp; 075-0891409</span>
                        <span><i class="fa fa-envelope"></i> &nbsp; getmarriagelk@gmail.com</span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <br>
                    <ul>
                        <a href="#"><li>Events</li></a>
                        <a href="#"><li>Team</li></a>
                        <a href="#"><li>Mentores</li></a>
                        <a href="#"><li>Gallery</li></a>
                        <a href="#"><li>Term & Conditions</li></a>
                        
                    </ul>
                </div>

                <div class="footer-section contact-form">
                    <h2>Contact us</h2>
                    <br>
                    <form action="index.php" method="post">
                        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                        <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                        <button type="submit" class="btn btn-big contact-btn">
                            <i class="fa fa-envelope"></i>
                            send
                        </button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; codingpoets.com | Designed by SELLEX GROUP
            </div>
        </div>
        

        <!-- JQuary -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Slick Carousel -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- Custem Script -->
        <script src="js/scripts.js"></script>

    </body>
</html>
