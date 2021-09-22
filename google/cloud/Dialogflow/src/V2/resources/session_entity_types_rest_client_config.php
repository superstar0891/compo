<?php

return [
    'interfaces' => [
        'google.cloud.dialogflow.v2.SessionEntityTypes' => [
            'DeleteSessionEntityType' => [
                'method' => 'delete',
                'uriTemplate' => '/v2/{name=projects/*/agent/sessions/*/entityTypes/*}',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v2/{name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListSessionEntityTypes' => [
                'method' => 'get',
                'uriTemplate' => '/v2/{parent=projects/*/agent/sessions/*}/entityTypes',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2/{parent=projects/*/agent/environments/*/users/*/sessions/*}/entityTypes',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetSessionEntityType' => [
                'method' => 'get',
                'uriTemplate' => '/v2/{name=projects/*/agent/sessions/*/entityTypes/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2/{name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateSessionEntityType' => [
                'method' => 'post',
                'uriTemplate' => '/v2/{parent=projects/*/agent/sessions/*}/entityTypes',
                'body' => 'session_entity_type',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2/{parent=projects/*/agent/environments/*/users/*/sessions/*}/entityTypes',
                        'body' => 'session_entity_type',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateSessionEntityType' => [
                'method' => 'patch',
                'uriTemplate' => '/v2/{session_entity_type.name=projects/*/agent/sessions/*/entityTypes/*}',
                'body' => 'session_entity_type',
                'additionalBindings' => [
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v2/{session_entity_type.name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}',
                        'body' => 'session_entity_type',
                    ],
                ],
                'placeholders' => [
                    'session_entity_type.name' => [
                        'getters' => [
                            'getSessionEntityType',
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
