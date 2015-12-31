<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<?php if ($this->countModules('position-1') || $this->checkSpotlight('spotlight-1', 'position-2, position-3, position-4')) : ?>
<!-- SPOTLIGHT 1 -->
<section class="wrap ja-sl ja-sl-1">
  <div class="container">

    <?php if($this->countModules('position-1')) : ?>
     <div class="<?php $this->_c('position-1') ?>"> 
      <jdoc:include type="modules" name="<?php $this->_p('position-1') ?>" style="raw" />
     </div> 
    <?php endif; ?>

    <?php 
      $this->spotlight ('spotlight-1', 'position-2, position-3, position-4')      
    ?>
  </div>
</section>
<!-- //SPOTLIGHT 1 -->
<?php endif ?>