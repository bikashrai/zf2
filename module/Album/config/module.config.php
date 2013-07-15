<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bikashrai
 * Date: 7/14/13
 * Time: 10:03 PM
 * To change this template use File | Settings | File Templates.
 */
//return array(
//    'controllers' => array(
//        'invokables' => array(
//            'Album\Controller\Album' => 'Album\Controller\AlbumController',
//        ),
//    ),
//    'view_manager' => array(
//        'template_path_stack' => array(
//            'album' => __DIR__ . '/../view',
//        ),
//    ),
//);


return array(
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/album[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Album\Controller\Album',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);