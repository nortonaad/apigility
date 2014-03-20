<?php
return [
    'router' => [
        'routes' => [
            'albumrest.rest.album' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/albumrest[/:album_id]',
                    'defaults' => [
                        'controller' => 'albumrest\\V3\\Rest\\Album\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'albumrest.rest.album',
        ],
    ],
    'zf-rest' => [
        'albumrest\\V3\\Rest\\Album\\Controller' => [
            'listener' => 'albumrest\\V3\\Rest\\Album\\AlbumResource',
            'route_name' => 'albumrest.rest.album',
            'route_identifier_name' => 'album_id',
            'collection_name' => 'album',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'albumrest\\V3\\Rest\\Album\\AlbumEntity',
            'collection_class' => 'albumrest\\V3\\Rest\\Album\\AlbumCollection',
            'service_name' => 'album',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'albumrest\\V3\\Rest\\Album\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'albumrest\\V3\\Rest\\Album\\Controller' => [
                0 => 'application/vnd.albumrest.v3+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'albumrest\\V3\\Rest\\Album\\Controller' => [
                0 => 'application/vnd.albumrest.v3+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            'albumrest\\V3\\Rest\\Album\\AlbumEntity' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'albumrest.rest.album',
                'route_identifier_name' => 'album_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ],
            'albumrest\\V3\\Rest\\Album\\AlbumCollection' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'albumrest.rest.album',
                'route_identifier_name' => 'album_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'albumrest\\V3\\Rest\\Album\\AlbumResource' => [
                'adapter_name' => 'wpzf2Database',
                'table_name' => 'album',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'albumrest\\V3\\Rest\\Album\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'albumrest\\V3\\Rest\\Album\\AlbumResource\\Table',
            ],
        ],
    ],
    'zf-content-validation' => [
        'albumrest\\V3\\Rest\\Album\\Controller' => [
            'input_filter' => 'albumrest\\V3\\Rest\\Album\\Validator',
        ],
    ],
    'input_filters' => [
        'albumrest\\V3\\Rest\\Album\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [],
                'validators' => [],
                'allow_empty' => false,
                'continue_if_empty' => true,
            ],
            1 => [
                'name' => 'artist',
                'required' => true,
                'filters' => [],
                'validators' => [],
                'allow_empty' => false,
                'continue_if_empty' => true,
            ],
            2 => [
                'name' => 'title',
                'required' => true,
                'filters' => [],
                'validators' => [],
                'allow_empty' => false,
                'continue_if_empty' => true,
            ],
        ],
    ],
];
