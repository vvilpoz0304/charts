<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "xxxxxx", // Replace with 'key' from dashboard
    "xxxxxxx", // Replace with 'secret' from dashboard
    "xxx", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for ($i =0 ; $i <= 20 ; $i++) {
    $pusher->trigger('datos', 'chart', array(
        rand(1000, 2000), rand(1500, 2500), rand(2000, 2500), rand(2500, 3000),rand(3000, 3500), rand(3500, 4000)
    ));
   time_nanosleep(1, 0);
}
