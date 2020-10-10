<?php

declare(strict_types=1);

// 2 комментария
// рейтинги "Долговечность", "Скорость реза"
//$comments = [
//
//    101 => [
//        'name' => 'имя1',
//        'description' => 'описание1',
//        'ratings' =>[
//           1 => [
//               'name' => 'рейтинкомент1.1',
//               'value' => 'рейтинкомент1.2'
//           ]
//        ]
//    ],
//    935 => [
//        'name' => 'имя2',
//        'description' => 'описание2',
//        'ratings' => [
//            1 => [
//                'name' => '2.2',
//                'value' => '3.3'
//            ],
//            2 => [
//                'name' => '333',
//                'value' => '444'
//            ],
//            3 => [
//                'name' => '55',
//                'value' => '66'
//            ]
//        ]
//
//    ]
//
//];
//
//foreach ($comments as $key => $comment) {
//    echo "<h2>".$comment['name']."</h2>";
//    foreach ($comment['ratings'] as $rating) {
//        echo "<div>".$rating['name']."</div>";
//       echo "<div>".$rating['value']."</div>";
//    }
//    echo "<div>".$comment['description']."</div>";
//}

$orders = [
    [
        'name' => 'заказ',
        'user_id' => 2,
    ],
    [
        'name' => 'заказ',
        'user_id' => 2,
    ],
    [
        'name' => 'заказ',
        'user_id' => 2,
    ]

];
$users = [
    'count' => 3,
    'items' => [
        [
            'id' => 2,
            'name' => 'Вася',
        ],
        [
            'id' => 2,
            'name' => 'Вася',
        ],
        [
            'id' => 2,
            'name' => 'Вася',
        ],
    ],

];
// $orderResult = [
//   'name' => 'заказ',
//   'user' =>[
//       'id' => '2',
//       'name' => 'Вася',
//   ]
// ];
$orderResult = [
    'name' => $order['name'],
    'user' => $order['user_id'] === $user['id'] ? $user : [],
];
if ($order['user_id'] === $user['id']) {
    $orderResult['user'] = $user;
}
