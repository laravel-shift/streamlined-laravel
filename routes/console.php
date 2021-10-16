<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| Here you may define all of your Closure based console commands.
| Each Closure is bound to a command instance allowing a simple
| approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

/*
|--------------------------------------------------------------------------
| Console Schedule
|--------------------------------------------------------------------------
|
| Here you may schedule any of your console commands to run.
| You may pass the name of the command or a closure
| to be run at a specific time or day.
|
*/
Artisan::schedule('inspire')->hourly();
