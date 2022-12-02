<?php

return [
    'mail_providers' => [
        'common' => [
            'from_email' => 'From Email',
            'from_phone' => 'From Phone',
            'from_name'  => 'From Name',
        ],

        'aws' => [
            'access_key'     => 'AWS Access Key',
            'secret_key'     => 'AWS Secret Key',
            'default_region' => 'AWS Default Region',
            'token'          => 'AWS Token',
            'sender_id'      => 'AWS Sns Sender ID',
        ],
    ],

    "wallet_providers" => [
        "endpoint"         => "Endpoint",
        "x_api_key"        => "X-API-Key",
        "ssl_key_content" => "SSL Key Content",
        "ssl_csr_content" => "SSL CSR Content",
    ],

    "wallet"      => "Wallet",
    "country"     => "Country",
    "currency"    => "Currency",
    "newsletter"  => "Newsletter",
    "company"     => "Company",
    "language"    => "Language",
    "transaction" => "Transaction",
    "balance"     => "Balance",
    "address"     => "Address",

    "third_party_service" => "Third Party Service",
];
