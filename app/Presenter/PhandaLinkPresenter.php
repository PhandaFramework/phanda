<?php

namespace App\Presenter;

use Phanda\Presenter\AbstractPresenter;

class PhandaLinkPresenter extends AbstractPresenter
{

	/**
	 * As Phanda configures and handles all the dependencies for providers, we provide this function which gets called
	 * immediately after the constructor has completed resolving. You can use this function to configure further any
	 * specific customization needs you might have for your presenter.
	 *
	 * We do this as to avoid accidental logic mistakes when updating/overriding the constructor.
	 *
	 * Being a presenter, this class has a property set on it called $scene which can be used to modify, and affect the
	 * scene as needed. You can simply access this by calling `$this->scene` at any time. Any public functions defined
	 * in this presenter can also be called by using `@present` in the bamboo file. These functions can either return
	 * content which will be injected into the scene, or alternatively can inject variables and other data into the
	 * scene, for the scene to be able to use.
	 *
	 * A presenter should be used strictly for handling view logic, and is a way to avoid including raw PHP in your
	 * scene files.
	 *
	 * It's import to note however, that in the current version of Phanda, any variables that you define by using
	 * $this->scene->share('variable', 'value'), can only be accessed in the scene by using `$this->variable`.
	 * Currently there is no global way of sharing a variable after the scene has started rendering.
	 *
	 * @return void
	 */
	protected function initialize()
	{
		$this->scene->share('hello', 'world!');
	}

	/**
	 * Defines a links variable with all of the handy links someone can use when first starting a project in Phanda
	 *
	 * Finally, it outputs a 'Handy Links:' message at the end of this function.
	 *
	 * @return string
	 */
	public function getLinks()
	{
		$this->scene->share('links', [
			'Phanda Website' => 'https://phandaframework.com',
			'Documentation' => 'https://phandaframework.com/docs',
			'News' => 'https://phandaframework.com/news',
			'Source Code' => 'https://gitlab.com/phanda/framework'
		]);

		// Rather than returning a hard coded string, you could return another stage too.
		return "<strong>Handy Links: </strong>";
	}
}