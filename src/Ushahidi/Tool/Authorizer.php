<?php

/**
 * Ushahidi Platform Authorizer
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Tool;

use Ushahidi\Entity;

interface Authorizer
{
	/**
	 * Check if access to an entity is allowed
	 * @param  Entity  $entity     Entity being accessed
	 * @param  String  $privilege  Privilege that is requested
	 * @return Boolean
	 */
	public function isAllowed(Entity $entity, $privilege);

	/**
	 * Get the user for the current authorization context.
	 * @return Ushahidi\Entity\User
	 */
	public function getUser();

	/**
	 * Get the userid for the current authorization context.
	 * @return Integer
	 */
	public function getUserId();
}
