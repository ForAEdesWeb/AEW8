<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<?php if ($this->countModules('slideshow')) : ?>
<!-- SLIDESHOW -->
<section class="wrap ja-slideshow<?php $this->_c('slideshow') ?>">
  <div class="container">

    <?php if($this->countModules('slideshow')) : ?>
      <jdoc:include type="modules" name="<?php $this->_p('slideshow') ?>" style="raw" />
    <?php endif; ?>

  </div>
</section>
<!-- //SLIDESHOW -->
<?php endif ?>