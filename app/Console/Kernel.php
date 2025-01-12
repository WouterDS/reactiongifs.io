<?php namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'App\Console\Commands\Harvest',
		'App\Console\Commands\HarvestTheCodingLove',
		'App\Console\Commands\HarvestUXReactions',
		'App\Console\Commands\Scrape',
		'App\Console\Commands\Normalize',
		'App\Console\Commands\NormalizeTheCodingLove',
		'App\Console\Commands\NormalizeUXReactions',
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		$schedule->command('harvest')->hourly()/*->skipWhenAlreadyRunning()*/;
		$schedule->command('scrape')->hourly()/*->skipWhenAlreadyRunning()*/;
		$schedule->command('normalize')->everyThirtyMinutes()/*->skipWhenAlreadyRunning()*/;
	}

}
