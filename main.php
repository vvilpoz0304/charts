<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "e2ea5ab570585eaefec2", // Replace with 'key' from dashboard
    "5c409230ae0065b8159f", // Replace with 'secret' from dashboard
    "1949040", // Replace with 'app_id' from dashboard
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