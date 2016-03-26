<?php
/**
 * View/Group/editのテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsControllerTestCase', 'Groups.Test/Case');

/**
 * View/Group/editのテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\View\Group\Edit
 */
class GroupsViewGroupEditTest extends GroupsControllerTestCase {

/**
 * View/Group/editのテスト
 *
 * @return void
 */
	public function testEdit($data = []) {
		$this->controller->set('isModal', true);
		$view = $this->_createViewClass();
		$view->render('Groups.Groups/edit');
	}
}
