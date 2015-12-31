<?php
/**
 * ------------------------------------------------------------------------
 * JA Brisk Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' );
?>

<?php if( $this->countModules('masshead') ): ?>
<section class="wrap ja-masshead">
	<div class="container">
    <div class="row">
      <div class="span12">
        <?php $this->spotlight ('masshead', 'masshead') ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>