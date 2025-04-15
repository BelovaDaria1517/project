<?php return array(
    'root' => array(
        'name' => 'dasha/child',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '1846d0caaae12074cd11d8ef9e75367f687b4667',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'dasha/child' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '1846d0caaae12074cd11d8ef9e75367f687b4667',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'dasha/parent' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '49b086f8dbdf5f559ea779376edcab9917db6c37',
            'type' => 'project',
            'install_path' => __DIR__ . '/../dasha/parent',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
