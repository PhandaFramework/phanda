<?php

namespace Core\Model\Entity;

use Phanda\Bear\Entity\Entity;

/**
 * Class User
 *
 * This is an example of providing a custom Entity class.
 * For basic use cases, Phanda also provides the base 'Table' and 'Entity' class
 * which can be used when no custom Entity/Table classes have been created.
 * Please consult the Phanda docs for further information
 *
 * An entity class must always be the singular name of the table. In this case,
 * the table that this entity corresponds to is 'users', which also means that
 * Phanda can automatically assign this class to the UsersTable results when
 * a query is executed. This of course, can all be customised if you don't like
 * the automatic resolution. Please consult the Phanda docs for further information
 * on the BearORM provided.
 *
 * @package Core\Model\Entity
 *
 * @property int    $id
 * @property string $email
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $password
 *
 * @property string $full_name
 */
class User extends Entity
{

	// Hides the password field from being shown whenever this Entity is printed out
	// or converted to an array.
	protected $hiddenProperties = ['password'];

	public function initialize()
	{
		// This is shown being performed in the initialize function as an example
		// If you prefer, you can also do this like the hidden field above and add
		// it to the virtual array. Please refer to the Phanda docs for a full list
		// of Entity configuration options.
		$this->setVirtual(['full_name']);
	}

	protected function _getFullName()
	{
		return $this->firstname . " " . $this->lastname;
	}

}