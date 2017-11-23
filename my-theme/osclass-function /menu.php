     <!-- header.php -->
      <ul class="links">
        <?php
        osc_reset_static_pages();
        while( osc_has_static_pages() ) { ?>
        <li> <a href="<?php echo osc_static_page_url(); ?>"><?php echo osc_static_page_title(); ?></a> </li>
        <?php}?>

        <li> <a href="<?php echo osc_contact_url(); ?>">
          <?php _e('Contact', OSCLASSWIZARDS_THEME_FOLDER); ?>
          </a> </li>
      </ul>