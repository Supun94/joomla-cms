<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Cache
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JCacheStorageApc.
 * Generated by PHPUnit on 2009-10-08 at 21:44:48.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Cache
 * @since       11.1
 */
class JCacheStorageApcTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var    JCacheStorageApc
	 */
	protected $object;

	/**
	 * @var    boolean
	 */
	protected $extensionAvailable;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return  void
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->extensionAvailable = extension_loaded('apc');

		if ($this->extensionAvailable)
		{
			$this->object = JCacheStorage::getInstance('apc');
		}
		else
		{
			$this->markTestSkipped('This caching method is not supported on this system.');
		}
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGet().
	 *
	 * @return void
	 */
	public function testGet()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetAll().
	 *
	 * @return void
	 */
	public function testGetAll()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testStore().
	 *
	 * @return void
	 */
	public function testStore()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testRemove().
	 *
	 * @return void
	 */
	public function testRemove()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testClean().
	 *
	 * @return void
	 */
	public function testClean()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGc().
	 *
	 * @return void
	 */
	public function testGc()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Testing isSupported().
	 *
	 * @return  void
	 */
	public function testIsSupported()
	{
		$this->assertEquals(
			$this->extensionAvailable,
			$this->object->isSupported(),
			'Claims APC is not loaded.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testLock().
	 *
	 * @return void
	 */
	public function testLock()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement testUnlock().
	 *
	 * @return void
	 */
	public function testUnlock()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Test...
	 *
	 * @todo Implement test_getCacheId().
	 *
	 * @return void
	 */
	public function testGetCacheId()
	{
		$this->markTestIncomplete('This test has not been implemented yet.');
	}
}