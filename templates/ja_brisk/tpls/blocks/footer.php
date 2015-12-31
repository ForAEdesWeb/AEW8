<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- FOOTER -->
<footer id="ja-footer" class="wrap ja-footer">

  <section class="ja-copyright">
    <div class="container">
      <div class="copyright<?php $this->_c('footer')?>">
          <jdoc:include type="modules" name="<?php $this->_p('footer') ?>" />
      </div>
      <?php if($this->getParam('t3-rmvlogo', 1)): ?>
        <div class="poweredby">
            <a class="t3-logo t3-logo-light" target="_blank" title="Powered By T3 Framework" href="http://t3-framework.org" style="display:inline-block" <?php echo method_exists('T3', 'isHome') && T3::isHome() ? '' : 'rel="nofollow"' ?>>Powered by<strong>T3 Framework</strong></a>
        </div>
      <?php endif; ?>
    </div>
  </section>

</footer>
<!-- //FOOTER -->