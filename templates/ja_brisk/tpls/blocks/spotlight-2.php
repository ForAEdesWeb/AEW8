<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<?php if ($this->checkSpotlight('spotlight-2', 'position-6, position-8, position-9')) : ?>
<!-- SPOTLIGHT 2 -->
<section class="wrap ja-sl ja-sl-2">
  <div class="container">

    <?php 
      $this->spotlight ('spotlight-2', 'position-6, position-8, position-9')
    ?>
  </div>
</section>
<!-- //SPOTLIGHT 2 -->
<?php endif ?>