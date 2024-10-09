<?php
return [
    "agent" => [
        "id" => true,
        "name" => true,
        "phone" => false,
        "fax" => false,
        'email' => false,
        'code' => false,
        'description' => false,
        'inn' => false,
        'legalTitle' => false,
        'legalAddress' => false,
        'okpo' => false,
        'ogrnip' => false,
        'certificateNumber' => false,
        'certificateDate' => false,
        'legalLastName' => false,
        'legalFirstName' => false,
        'legalMiddleName' => false,
        'updated' => true,
        'created' => true,
        'companyType' => false,
        'actualAddress' => false,
        'salesAmount' => false,
        'tags' => false
    ],

    "organization" => [
        "id" => true,
        "name" => true,
        "inn" => false,
        'email' => false,
        'phone' => false,
        "fax" => false,
        'isEgaisEnable' => false,
        'payerVat' => false,
        'director' => false,
        'directorPosition' => false,
        'chiefAccountant' => false,
        'legalTitle' => false,
        'legalAddress' => false,
        'actualAddress' => false,
        'companyType' => false,
        'archived' => false,
        'created' => false,
        'updated' => false,
    ],
    "store" => [
        'id' => true,
        'name' => true,

        'address' => false,
        'pathName' => false,
        'archived' => false,
        'updated' => false,
    ],
    "contract" => [
        'id' => true,
        'name' => true,

        'sum' => false,
        'contractType' => false,

        'archived' => false,
        'moment' => false,
        'updated' => false,
    ],
    "salesChannel" => [
        'id' => true,
        'name' => true,
        'archived' => false,
        'updated' => false,
    ],
    "project" => [
        'id' => true,
        'name' => true,
        'archived' => false,
        'updated' => false,
    ],
    "assortment" => [
        'id' => true,
        'name' => true,
        'description' => false,

        'code' => false,
        'article' => false,
        'paymentItemType' => false,

        'barcodes' => false,

        'archived' => true,
        'updated' => true,
    ],

    "documentRelationships" => [
        "customerorder" => [
            "purchaseOrders",
            "demands",
            "payments",
            "invoicesOut",
            "moves",
        ],
        "purchaseorder" => [
            "customerOrders",
            "invoicesIn",
            "payments",
            "supplies",
        ],
        "demand" => [
            "customerOrder",
            "factureOut",
            "returns",
            "payments",
            "invoicesOut"
        ],
        "facturein" => [
            "payments",
            "supplies",
        ],
        'factureout' => [
            "demands",
            "payments",
            "returns"
        ],
        "supply" => [
            'purchaseOrder',
            'factureIn',
            'invoicesIn',
            'payments',
            'returns'
        ],
        "purchasereturn" => [
            "supply",
            'factureOut',
            'factureIn',
            'payments',
        ],
        "salesreturn" => [
            'demand',
            'payments',
            'factureOut',	
        ],
        "invoicein" => [
            'payments',
            'purchaseOrder',
            "supplies"
        ],
        "invoiceout" => [
            'customerOrder',
            'payments',
            'demands',	
        ],
        "cashin" => [
            'factureIn',
            'operations'
        ],
        "cashout" => [
            'factureIn',
            'operations'
        ],
        "paymentin" => [
            'factureOut',
            'operations'
        ],
        "paymentout" => [
            'factureIn',
            'operations'
        ]

    ]
];