<?php

return [
    'pdf' => [
        'enabled' => true,
        // 'binary'  => base_path('vendor/kindling/pdf/bin/wkhtmltopdf-osx'),
        'binary' => base_path(env('WKHTMLTOPDF_PATH', 'vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64')),
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],
    'image' => [
        'enabled' => true,
        'binary'  => '/usr/local/bin/wkhtmltoimage',
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],
];
