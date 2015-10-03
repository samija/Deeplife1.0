<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => '127.0.0.1',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => '',
                    'dbname'   => 'samuser',
                    'driverOptions' => array(1002 => 'SET NAMES utf8')
                ),
            ),
        ),
    ),
);