<?php

return [
    'connections' => [
        'couchbase' => [
            'name'       => '127.0.0.1',
            'driver'     => '127.0.0.1',
            'port'       => '8091',
            'host'       => 'couchbase',
            'bucket'     => 'testing',
            'user'       => 'Administrator',
            'password'   => 'password',
            'n1ql_hosts' => ['http://127.0.0.1:8093']
        ]
    ]
];