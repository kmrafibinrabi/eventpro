<?php
 /* Template Name:Homepage*/ 

get_header();

?>
<!-- banner start -->
<main class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 banner-content">
                <h1>Cayman Classic 2022 </h1>
                <p>Join us on November 21 for an international preseason men's division 1 college basketball tournament</p>
                <button class="btn">Buy Tickets</button>
            </div>
        </div>
    </div>
</main> <!-- banner end -->

    <!-- featured start -->
<section class="featured">
  <div class="container">
    <h1 class="featured-text"> Featured </h1>
    <div class="main-featured">
      <div class="row">
<!--POST QUERY FEATURED -->
<?php
$wpevent=array(

  'post_type'=> 'events',
  'category_name'  => 'featured',
  'post_status' => 'publish'
);

$eventsquery=new Wp_Query($wpevent);
while($eventsquery->have_posts()){ 
  $eventsquery->the_post();
	$imagepath=
  wp_get_attachment_image_src(
    get_post_thumbnail_id(),'large'
  );
?>

          
            <div class="col-md-6 col-lg-4">
              <div class="featured-mother">
                <div class="featured-date">
                    <div class="part-a">
                <h3>
                       <?php echo get_the_date('j');?>                 </h3>
                <h2>
                        Dec                </h2>
                  </div>
                  <div class="part-b">
                    <i class="fas fa-map-marker-alt"></i>
                   <p><?php the_title()?> </p>
                  </div>
                </div>
                <div class="featured-image">
                  <img src= "<?php echo $imagepath[0]?>"/>
                  <h1 class="text-image"><a href=""><?php the_title()?></a></h1>
                </div>
              </div>
            </div>
          <?php }?>

               
          </div>
        </div>
      </div>
    </section> <!-- featured end  -->


 <!-- upcoming start  -->

<section class="upcoming">
    <div class="container">
    <div class="main-upcoming">
        <div class="row">
        <div class="col-md-12 border-1">
            <h1 class="upcoming-title"> UPCOMING </h1>
            </div>

            <!--- Today --->
            <div class="col-md-4 upcoming-text">
            <h2>TODAY</h2>

                            <a href="https://demo.hasan.online/moyen/event/b-y-o-b-all-white-cooler-fete/"><p>B.Y.O.B all white cooler fete</p></a>
                <a href="https://demo.hasan.online/moyen/events/today/"><i class="fas fa-arrow-right"></i></a>
                    </div>


        <!--- This Weekend --->
        <div class="col-md-4 upcoming-text">
            <h2>THIS WEEKEND</h2>

            <p> No Events This Weekend! </p><a href=' https://demo.hasan.online/moyen/events/this-weekend/ '><i class='fas fa-arrow-right'></i></a>        </div>


        <!--- Next Week --->
        <div class="col-md-4 upcoming-text">
            <h2>IN THE NEXT 7 DAYS</h2>

                            <a href="https://demo.hasan.online/moyen/event/b-y-o-b-all-white-cooler-fete/"><p>B.Y.O.B all white cooler fete</p></a>
                <a href="https://demo.hasan.online/moyen/events/this-week/"><i class="fas fa-arrow-right"></i></a>
                    </div>

        </div>
    </div>
    </div>
</section> <!-- upcoming end  -->

<!-- JUST ANNOUNCED start  -->


<section class="featured">
  <div class="container">
    <h1 class="featured-text"> Just Announced </h1>
    <div class="main-featured">
      <div class="row">
        <!--POST QUERY  JUST ANNOUNCED -->
<?php
$wpevent=array(

  'post_type'=> 'events',
  'category_name'  => 'just-announced',
  'post_status' => 'publish'
);

$eventsquery=new Wp_Query($wpevent);
while($eventsquery->have_posts()){ 
  $eventsquery->the_post();
	$imagepath=
  wp_get_attachment_image_src(
    get_post_thumbnail_id(),'large'
  );
?>

          
            <div class="col-md-6 col-lg-4">
              <div class="featured-mother">
                <div class="featured-date">
                    <div class="part-a">
                <h3>
                <?php echo get_the_date('j');?></h3>
                <h2>
                  Mar                </h2>
                  </div>
                  <div class="part-b">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>
                    <?php the_title()?>  </p>
                  </div>
                </div>
                <div class="featured-image">
                  <img src="<?php echo $imagepath[0]?>"/>
                  <h1 class="text-image"><a href=""><?php the_title()?></a></h1>
                </div>
              </div>
            </div>
                    
            <?php }?>
                    
                           
          </div>
        </div>
      </div>
    </section> <!-- JUST ANNOUNCED end  -->

<!-- Most Popular start  -->
<section class="featured">
  <div class="container">
    <h1 class="featured-text"> Just Announced </h1>
    <div class="main-featured">
      <div class="row">
        <!--POST QUERY  Most Popular -->
<?php
$wpevent=array(

  'post_type'=> 'events',
  'category_name'  => 'most-popular',
  'post_status' => 'publish'
);

$eventsquery=new Wp_Query($wpevent);
while($eventsquery->have_posts()){ 
  $eventsquery->the_post();
	$imagepath=
  wp_get_attachment_image_src(
    get_post_thumbnail_id(),'large'
  );
?>

          
            <div class="col-md-6 col-lg-4">
              <div class="featured-mother">
                <div class="featured-date">
                    <div class="part-a">
                <h3>
                <?php echo get_the_date('j');?></h3>
                <h2>
                  Mar                </h2>
                  </div>
                  <div class="part-b">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>
                    <?php the_title()?>  </p>
                  </div>
                </div>
                <div class="featured-image">
                  <img src="<?php echo $imagepath[0]?>"/>
                  <h1 class="text-image"><a href=""><?php the_title()?></a></h1>
                </div>
              </div>
            </div>
                    
            <?php }?>
                    
                           
          </div>
        </div>
      </div>
    </section> <!-- Most Popular end  -->

   

    

<?php
get_sidebar();
get_footer();
