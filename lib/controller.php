<?php
/**
 * @author Thomas Tanghus
 * @author Thomas Tanghus
 * @copyright 2013-2014 Thomas Tanghus (thomas@tanghus.net)
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OCA\Tasks;

use OCP\AppFramework\IAppContainer;
use OCP\AppFramework\Controller as BaseController;
use OCP\IRequest;

/**
 * Base Controller class for Issues App
 */
class Controller extends BaseController {

	/**
	* @var Api
	*/
	protected $api;

	/**
	* @var IRequest
	*/
	protected $request;

	/**
	* @var OCP\IServerContainer
	*/
	protected $server;

	public function __construct(IAppContainer $container) {
		$this->api = $container->query('API');
		$this->request = $container->query('Request');
		$this->server = $container->getServer();
	}

}
