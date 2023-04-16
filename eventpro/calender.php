<?php

 /* Template Name:Event calender*/ 

get_header();




?>






<!-- display days -->
<section class="eventcalendar-all-button">
  <div class="container">

  <input type="text" id="search_box" onkeyup="search()" placeholder="Search Events...">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 filter-section">
          <div class="scrollToX">

          <span class="filter date" data-type="date" data-value="today"><a href="https://demo.hasan.online/limon/events/today/"> Today </a> </span><span class="filter date" data-type="date" data-value="this-weekend"><a href="https://demo.hasan.online/limon/events/this-weekend/"> This Weekend </a> </span><span class="filter date" data-type="date" data-value="this-week"><a href="https://demo.hasan.online/limon/events/this-week/"> This Week </a> </span><span class="filter date" data-type="date" data-value="next-week"><a href="https://demo.hasan.online/limon/events/next-week/"> Next Week </a> </span>
        </div>
        <div class="clearFilter"></div>

  <!-- display categories -->
          <div class="scrollToX indicator">

          <span class="filter category" data-filter="boat-cruise" data-type="category" data-value="5"><a href="https://demo.hasan.online/limon/category/boat-cruise/"> Boat Cruise </a> </span><span class="filter category" data-filter="carnival" data-type="category" data-value="6"><a href="https://demo.hasan.online/limon/category/carnival/"> Carnival </a> </span><span class="filter category" data-filter="charity" data-type="category" data-value="7"><a href="https://demo.hasan.online/limon/category/charity/"> Charity </a> </span><span class="filter category" data-filter="club" data-type="category" data-value="8"><a href="https://demo.hasan.online/limon/category/club/"> Club </a> </span><span class="filter category" data-filter="concert" data-type="category" data-value="9"><a href="https://demo.hasan.online/limon/category/concert/"> Concert </a> </span><span class="filter category" data-filter="conference" data-type="category" data-value="10"><a href="https://demo.hasan.online/limon/category/conference/"> Conference </a> </span><span class="filter category" data-filter="featured" data-type="category" data-value="3"><a href="https://demo.hasan.online/limon/category/featured/"> Featured </a> </span><span class="filter category" data-filter="food-drink" data-type="category" data-value="11"><a href="https://demo.hasan.online/limon/category/food-drink/"> Food &amp; Drink </a> </span><span class="filter category" data-filter="party" data-type="category" data-value="12"><a href="https://demo.hasan.online/limon/category/party/"> Party </a> </span><span class="filter category" data-filter="sports" data-type="category" data-value="13"><a href="https://demo.hasan.online/limon/category/sports/"> Sports </a> </span><span class="filter category" data-filter="uncategorized" data-type="category" data-value="1"><a href="https://demo.hasan.online/limon/category/uncategorized/"> Uncategorized </a> </span><span class="filter category" data-filter="upcoming" data-type="category" data-value="4"><a href="https://demo.hasan.online/limon/category/upcoming/"> Upcoming </a> </span>
        </div>
        <div class="clearFilter"></div>

  <!-- display months -->
          <div class="scrollToX">

            <span class="filter month" data-filter="april" data-type="month" data-value="april"> <a href="https://demo.hasan.online/limon/month/april/" > April </a> </span><span class="filter month" data-filter="august" data-type="month" data-value="august"> <a href="https://demo.hasan.online/limon/month/august/" > August </a> </span><span class="filter month" data-filter="december" data-type="month" data-value="december"> <a href="https://demo.hasan.online/limon/month/december/" > December </a> </span><span class="filter month" data-filter="february" data-type="month" data-value="february"> <a href="https://demo.hasan.online/limon/month/february/" > February </a> </span><span class="filter month" data-filter="january" data-type="month" data-value="january"> <a href="https://demo.hasan.online/limon/month/january/" > January </a> </span><span class="filter month" data-filter="july" data-type="month" data-value="july"> <a href="https://demo.hasan.online/limon/month/july/" > July </a> </span><span class="filter month" data-filter="june" data-type="month" data-value="june"> <a href="https://demo.hasan.online/limon/month/june/" > June </a> </span><span class="filter month" data-filter="march" data-type="month" data-value="march"> <a href="https://demo.hasan.online/limon/month/march/" > March </a> </span><span class="filter month" data-filter="may" data-type="month" data-value="may"> <a href="https://demo.hasan.online/limon/month/may/" > May </a> </span><span class="filter month" data-filter="november" data-type="month" data-value="november"> <a href="https://demo.hasan.online/limon/month/november/" > November </a> </span><span class="filter month" data-filter="october" data-type="month" data-value="october"> <a href="https://demo.hasan.online/limon/month/october/" > October </a> </span><span class="filter month" data-filter="september" data-type="month" data-value="september"> <a href="https://demo.hasan.online/limon/month/september/" > September </a> </span>
        </div>
        <div class="clearFilter"></div>

        </div>
    </div>

  </div>
</section> <!-- all categories end -->


	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
