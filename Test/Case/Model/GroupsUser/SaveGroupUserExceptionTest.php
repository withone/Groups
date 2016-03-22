<?php
/**
 * GroupsUser::saveGroupUser()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuna Miyashita <butackle@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('GroupsControllerTestCase', 'Groups.Test/Case');

/**
 * GroupsUser::saveGroupUser()のテスト
 *
 * @author Yuna Miyashita <butackle@gmail.com>
 * @package NetCommons\Groups\Test\Case\Model\GroupsUser
 */
class GroupsUserSaveGroupUserExceptionTest extends GroupsControllerTestCase {

/**
 * Fixtures Setting
 *
 * @param string $name
 * @param array $data
 * @param string $dataName
 * @var array
 */
	public function __construct($name = null, array $data = array(), $dataName = '') {
		unset($this->fixtures['GroupsUser']);
		$this->fixtures[] = 'plugin.groups.groups_user_exception';

		parent::__construct($name, $data, $dataName);
	}

/**
 * saveGroupUser()のExceptionテスト
 *
 * @return void
 */
	public function testSaveGroupUserException() {
		$inputData = [ 'user_id' => '3', 'group_id' => '1'];

		$this->setExpectedException('InternalErrorException');
		$this->_classGroupsUser->saveGroupUser($inputData);

		array_pop($this->fixtures);
	}

}
