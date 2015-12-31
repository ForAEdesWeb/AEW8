<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="<jdoc:include type="pageclass" />">

  <head>
    <jdoc:include type="head" />
    <?php $this->loadBlock ('head') ?>  
  </head>

  <body>

    <?php $this->loadBlock ('header') ?>

    <?php $this->loadBlock ('slideshow') ?>

    <?php $this->loadBlock ('masshead') ?>

    <?php $this->loadBlock ('spotlight-1') ?>

    <?php $this->loadBlock ('mainbody') ?>
    
    <?php $this->loadBlock ('spotlight-2') ?>

    <?php $this->loadBlock ('spotlight-3') ?>
    
    <?php $this->loadBlock ('navhelper') ?>
    
    <?php $this->loadBlock ('footer') ?>
    
  </body>

</html>