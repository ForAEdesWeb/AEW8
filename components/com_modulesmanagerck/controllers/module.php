<?php
/**
 * @name		Modules Manager CK
 * @package		com_modulesmanagerck
 * @copyright	Copyright (C) 2013. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Cedric Keiflin - http://www.template-creator.com - http://www.joomlack.fr
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');
/**
 * Module controller class.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_modules
 * @since       1.6
 */
class ModulesmanagerckControllerModule extends JControllerForm
{
	/**
	 * Override parent add method.
	 *
	 * @return  mixed  True if the record can be added, a JError object if not.
	 *
	 * @since   1.6
	 */
	public function add()
	{
		$app = JFactory::getApplication();

		// Get the result of the parent method. If an error, just return it.
		$result = parent::add();
		if ($result instanceof Exception)
		{
			return $result;
		}

		// Look for the Extension ID.
		$extensionId = $app->input->get('eid', 0, 'int');
		if (empty($extensionId))
		{
			$this->setRedirect(JRoute::_('index.php?option='.$this->option.'&view='.$this->view_item.'&layout=edit', false));
			return JError::raiseWarning(500, JText::_('COM_MODULES_ERROR_INVALID_EXTENSION'));
		}

		$app->setUserState('com_modules.add.module.extension_id', $extensionId);
		$app->setUserState('com_modules.add.module.params', null);

		// Parameters could be coming in for a new item, so let's set them.
		$params = $app->input->get('params', array(), 'array');
		$app->setUserState('com_modules.add.module.params', $params);
	}

	/**
	 * Override parent cancel method to reset the add module state.
	 *
	 * @param   string  $key  The name of the primary key of the URL variable.
	 *
	 * @return  boolean  True if access level checks pass, false otherwise.
	 *
	 * @since   1.6
	 */
	public function cancel($key = null)
	{
		$app = JFactory::getApplication();

		$result = parent::cancel();

		$app->setUserState('com_modules.add.module.extension_id', null);
		$app->setUserState('com_modules.add.module.params', null);

		return $result;
	}

	/**
	 * Override parent allowSave method.
	 *
	 * @param   array   $data  An array of input data.
	 * @param   string  $key   The name of the key for the primary key.
	 *
	 * @return  boolean
	 *
	 * @since   1.6
	 */
	protected function allowSave($data, $key = 'id')
	{
		// use custom position if selected
		if (empty($data['position']))
		{
			$data['position'] = $data['custom_position'];
		}

		unset($data['custom_position']);

		return parent::allowSave($data, $key);
	}

	/**
	 * Method to run batch operations.
	 *
	 * @param   string  $model  The model
	 *
	 * @return  boolean  True on success.
	 *
	 * @since   1.7
	 */
	public function batch($model = null)
	{
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

		// Set the model
		$model	= $this->getModel('Module', '', array());

		// Preset the redirect
		$this->setRedirect(JRoute::_('index.php?option=com_modules&view=modules'.$this->getRedirectToListAppend(), false));

		return parent::batch($model);
	}

	/**
	 * Function that allows child controller access to model data after the data has been saved.
	 *
	 * @param   JModelLegacy  $model      The data model object.
	 * @param   array         $validData  The validated data.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function postSaveHook(JModelLegacy $model, $validData = array())
	{
		$app = JFactory::getApplication();
		$task = $this->getTask();

		switch ($task)
		{
			case 'save2new':
				$app->setUserState('com_modules.add.module.extension_id', $model->getState('module.extension_id'));
				break;

			default:
				$app->setUserState('com_modules.add.module.extension_id', null);
				break;
		}

		$app->setUserState('com_modules.add.module.params', null);
	}

	public function save($key = null, $urlVar = null)
	{
		parent::save($key, $urlVar);
//		$redirect = JRoute::_('index.php?option=com_modulesmanagerck&view=module&layout=message&tmpl=component');
		// if (parent::save($key, $urlVar) === TRUE)
		// {
			// $redirect .= "&status=1";
		// }
		// else
		// {
			// $redirect .= "&status=0";
		// }
//		$this->setRedirect(JRoute::_($redirect, false));
	}
}