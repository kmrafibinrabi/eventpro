<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EventPro
 */

?>


<!-- footer start  -->
<footer>
      <div class="container">
        <div class="main-footer">
          <div class="row">
            <div class="col-md-4 help-link">
              <h3>HELPFUL LINKS</h3>

              <div class="menu-footer-left-menu-container"><ul id="footer-left" class="menu"><li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a href="https://demo.hasan.online/moyen/my-orders/">My Orders</a></li>
<li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107"><a href="https://demo.hasan.online/moyen/lost-password/">Lost Password</a></li>
<li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="https://demo.hasan.online/moyen/submit-event-2/">Submit Event</a></li>
<li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-105"><a href="https://demo.hasan.online/moyen/help/">Help</a></li>
<li id="menu-item-104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104"><a href="https://demo.hasan.online/moyen/carrers/">Carrers</a></li>
</ul></div>
            </div>

            <div class="col-md-4 download-images">
            <h2>DOWNLOAD OUR APP!</h2>
              <img src="https://demo.hasan.online/moyen/wp-content/themes/eventpro/assets/images/App-Store.png" alt="">
              <img src="https://demo.hasan.online/moyen/wp-content/themes/eventpro/assets/images/play-store.png" alt="">
            </div>

            <div class="col-md-4">
              <form action="">
                <div class="form-mother">
                  <h2>SUBSCRIBE</h2>
                  <div class="email-add">
                    <label for="email">Email Address</label>
                    <br>
                    <input type="email" value name="email" class="email" id="email">
                  </div>
                  <div class="first-name">
                    <label for="name">First Name</label>
                    <br>
                    <input type="text" value name="f-name" class="f-name" id="name">
                  </div>
                  <div class="last-name">
                    <label for="name">Last Name</label>
                    <br>
                    <input type="text" value name="name" class="name" id="name">
                  </div>
                  <button type="submit" class="submit-button">SUBSCRIBE</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </footer> <!-- footer end  -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'eventpro' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'eventpro' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'eventpro' ), 'eventpro', '<a href="https://kmrafibinrabi.github.io/portfolio/">K M RAFI BIN ROBI</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
