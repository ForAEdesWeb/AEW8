<?php
/**
 * ------------------------------------------------------------------------
 * JA Brisk Template for J25 & J33
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

defined('_JEXEC') or die;
$app = JFactory::getApplication();
$theme = JFactory::getApplication()->getTemplate(true)->params->get('theme', '');

$twofactormethods = array();

if (version_compare(JVERSION, '3.2', 'ge'))
{
	// Add JavaScript Frameworks
	JHtml::_('bootstrap.framework');
   require_once JPATH_ADMINISTRATOR . '/components/com_users/helpers/users.php';
   $twofactormethods = UsersHelper::getTwoFactorMethods();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/offline.css" type="text/css" />
	<?php if($theme && is_file(T3_TEMPLATE_PATH . '/css/themes/' . $theme . '/offline.css')):?>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/themes/<?php echo $theme ?>/offline.css" type="text/css" />
	<?php endif; ?>
</head>
<body>

	<div id="frame" class="outline">
		<?php if ($app->getCfg('offline_image') && file_exists($app->getCfg('offline_image'))) : ?>
		<img src="<?php echo $app->getCfg('offline_image'); ?>" alt="<?php echo htmlspecialchars($app->getCfg('sitename')); ?>" />
		<?php endif; ?>
		
		<div class="wrap-offline-message">
			<h1>
				<?php echo htmlspecialchars($app->getCfg('sitename')); ?>
			</h1>
			
			
		</div>
		<div class="error-form">
			<form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="form-login">
			<div class="description">
				<?php if ($app->getCfg('display_offline_message', 1) == 1 && str_replace(' ', '', $app->getCfg('offline_message')) != ''): ?>
					<p>
						<?php echo $app->getCfg('offline_message'); ?>
					</p>
					<?php elseif ($app->getCfg('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != ''): ?>
					<p>
						<?php echo JText::_('JOFFLINE_MESSAGE'); ?>
					</p>
				<?php  endif; ?>
			</div>
			<fieldset class="input">
				<div class="wrap-input">
					<p id="form-login-username">
						<label for="username"><?php echo JText::_('JGLOBAL_USERNAME') ?></label>
						<input name="username" id="username" type="text" class="inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME') ?>" size="18" />
					</p>
					
					<p id="form-login-password">
						<label for="passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
						<input type="password" name="password" class="inputbox" size="18" alt="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" id="passwd" />
					</p>
				</div>
				
				<?php if (count($twofactormethods) > 1) : ?>
				<p id="form-login-secretkey">
					<label for="secretkey"><?php echo JText::_('JGLOBAL_SECRETKEY') ?></label>
					<input type="text" name="secretkey" class="inputbox" size="18" alt="<?php echo JText::_('JGLOBAL_SECRETKEY') ?>" id="secretkey" />
				</p>
				<?php endif; ?>
				<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
				<p id="form-login-remember">
					
					<input type="checkbox" name="remember" class="inputbox" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" id="remember" />
					<label for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME') ?></label>
				</p>
				<?php endif; ?>
				
				<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGIN') ?>" />
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="user.login" />
				<input type="hidden" name="return" value="<?php echo base64_encode(JURI::base()) ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</fieldset>
			</form>
		
			<jdoc:include type="message" />
		  </div>
		
	</div>
</body>
</html>
