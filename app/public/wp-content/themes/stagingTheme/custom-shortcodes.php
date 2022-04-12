<?php 

function particles_shortcode() {
   

   return '
   <div class="particles">
      <img class="particles_image" src="http://stagingsite.local/wp-content/uploads/2022/04/upwork1-redone6.png" id="particles" alt="particles" />

      <!-- PARTICLES JS -->
      <canvas class="background"></canvas>
    </div>
   ';
}
add_shortcode('particles', 'particles_shortcode');
?>
