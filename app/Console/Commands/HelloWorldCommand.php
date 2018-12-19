<?php

namespace App\Console\Commands;

use Phanda\Console\ConsoleCommand;

class HelloWorldCommand extends ConsoleCommand
{
	/**
	 * @var string
	 */
	protected $signature = "hello:world {name?}";

	/**
	 * @var string
	 */
	protected $description = "This is an example command that is provided in your /app/Console/Commands folder.";

	/**
	 * Handles the command when it is executed.
	 *
	 * Please refer to the Phanda docs for more information.
	 */
	public function handle()
	{
		$name = $this->getInputArgument('name') ?? "World";
		$this->info("Hello, {$name}!");
	}

}