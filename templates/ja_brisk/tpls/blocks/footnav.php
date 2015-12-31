<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('footnav')) : ?>
<!-- SPOTLIGHT 1 -->
<section class="wrap ja-footnav<?php $this->_c('footer')?>">
  <div class="container">

    <?php if($this->countModules('footnav')) : ?>
      <jdoc:include type="modules" name="<?php $this->_p('footnav') ?>" style="raw" />
    <?php endif; ?>

  </div>
</section>
<!-- //SPOTLIGHT 1 -->
<?php endif ?>