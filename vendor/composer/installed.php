<?php return array(
    'root' => array(
        'name' => 'dasha/child',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'f54e8f443c7b37a2109641f58d30cf875f0e1d67',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'dasha/child' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'f54e8f443c7b37a2109641f58d30cf875f0e1d67',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'dasha/parent' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'a0178e76c9e60952c06b781a8d4d58828070e53f',
            'type' => 'project',
            'install_path' => __DIR__ . '/../dasha/parent',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
