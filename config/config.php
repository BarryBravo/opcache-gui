<?php
return [
    'auth' => [
        'username' => 'test',
        'password' => 'test',
    ],
    'options' => [
        'allow_filelist'   => true,  // show/hide the files tab
        'allow_invalidate' => true,  // give a link to invalidate files
        'allow_reset'      => true,  // give option to reset the whole cache
        'allow_realtime'   => true,  // give option to enable/disable real-time updates
        'refresh_time'     => 5,     // how often the data will refresh, in seconds
        'size_precision'   => 2,     // Digits after decimal point
        'size_space'       => false, // have '1MB' or '1 MB' when showing sizes
        'charts'           => true,  // show gauge chart or just big numbers
        'debounce_rate'    => 250    // milliseconds after key press to send keyup event when filtering
    ],
    'staic_domain' => '127.0.0.1'
];
