<?php

return [
    'not_found_item_exception' => 'The :item is you looking for is not found.',
    'not_found_user_exception' => 'User could not found. Please check your credentials.',
    'update_fail_exception'    => ':item update failed.',
    'save_fail_exception'      => 'Create :item failed.',

    'kyc_verification_required' => 'Action is unauthorized without KYC verification. Please verify KYC first.',

    'invalid_argument' => [
        'wrong_user' => 'Wrong user passed to parameter.',
        'wrong_pair' => 'Wrong pair entered: :pair.',

        'could_not_find_channel' => 'Could not find in channel :channel',
    ],

    'auth' => [
        'user_passive'  => 'This user passive.',
        'access_denied' => 'Access denied.',
        'wrong_otp'     => 'One Time Password not verified.',

        'unrestricted_area_not_accessible' => 'You can not access to unrestricted area.',

        'authentication_failed' => 'Authentication failed. Please check your login credentials.',
        'otp_method_not_set'    => 'One Time Password method not set.',

        'register_failed' => 'Registration failed.',
        'invalid_token'   => 'Your otp token is invalid.',
    ],

    'not_implemented_method' => 'Please implement this method.',

    'general'             => 'A server error occured. Please try again later',
    'model_not_found'     => 'Model not found.',
    'unauthorized'        => 'Unauthorized',
    'token_expired'       => 'TOKEN_EXPIRED',
    'duplicate_entry'     => 'DUPLICATE_ENTRY',
    'no_default_value'    => 'No default value provided.',
    'convert_validation'  => 'Error message could not translate.',
    'cant_update_english' => 'You cant update English language.',

    'validations' => [
        'sms_providers' => [
            'from_required'          => 'From field must be provided.',
            'token_required'         => '`token` field required for sinch sms provider.',
            'no_default_service'     => 'No default service for sms.',
            'undefined_service_code' => 'Undefined service definition code: :code',

            'infobip' => [
                'from_required'         => '`from` field required for infobip sms provider.',
                'api_key_required'      => '`api_key` field required for infobip sms provider.',
                'api_prefix_required'   => '`api_prefix` field required for infobip sms provider.',
                'base_url_required'     => '`base_url` field required for infobip sms provider.',
                'phone_number_required' => 'Receiver phone number must be provided.',
                'sms_content_provider'  => 'Sms content must be provided.',
            ],

            'mdm' => [
                'api_key_required'      => '`api_key` field required for sinch sms provider.',
                'phone_number_required' => 'Receiver phone number must be provided.',
                'sms_content_required'  => 'Sms content must be provided.',
            ],

            'sinch' => [
                'from_required'            => '`from` field required for sinch sms provider.',
                'service_plan_id_required' => '`service_plan_id` field required for sinch sms provider.',
                'api_key_required'         => '`api_key` field required for sinch sms provider.',
                'validate_phone_number'    => 'Receiver phone number must be provided.',
                'validate_sms_content'     => 'Sms content must be provided.',
            ],

            'whatsapp' => [
                'token_required'        => '`token` field is required.',
                'from_required'         => '`from` field is required.',
                'phone_number_required' => '`phone number` field is required.',
                'sms_content_required'  => '`sms content` field is required.',
            ],

            'sns' => [
                'from_name_required'    => '`From Name` field required for sns sms provider.',
                'sender_id_required'    => '`Sender ID` field required for sns sms provider.',
                'api_key_required'      => '`API key` field required for sns sms provider.',
                'api_secret_required'   => '`API secret` field required for sns sms provider.',
                'api_token_required'    => '`API token` field required for sns sms provider.',
                'to_phone_required'     => 'Receiver phones must be provided.',
                'content_required'      => 'Sms content must be provided.',
                'credentials_wrong'     => 'Your credentials is wrong for sns sms provider.',
                'validate_phone_number' => 'Receiver phone number must be provided.',
                'validate_sms_content'  => 'Sms content must be provided.',
            ],
        ],

        'recaptcha' => [
            'please_confirm' => 'Please confirm the captcha.',
        ],

        'belongs_to_authenticated_user' => [
            'unknown_table_specified' => 'Unknown table specified.',
            'data_not_belongs_to_you' => 'This is not belongs to you.',
        ],

        'email_providers' => [
            'no_default_email'  => 'No default service for e-mail.',
            'required_fields'   => ':field is must be provided for :provider', // when we use this Service Tests should be changed. All exceptExceptionMessages will be same.
            'undefined_service' => 'Undefined service definition code: :code',
            'unione'            => [
                'from_name_required'    => '`From Name` field required for unione mail provider.',
                'from_email_required'   => '`From Email` field required for unione mail provider.',
                'api_key_required'      => '`API key` field required for unione mail provider.',
                'endpoint_required'     => '`Endpoint` field required for unione mail provider.',
                'email_required'        => 'Receiver emails must be provided.',
                'mail_content_required' => 'Mail content must be provided.',
            ],
            'ses'               => [
                'from_name_required'    => '`From Name` field required for ses mail provider.',
                'from_email_required'   => '`From Email` field required for ses mail provider.',
                'api_key_required'      => '`API key` field required for ses mail provider.',
                'api_secret_required'   => '`API secret` field required for ses mail provider.',
                'api_region_required'   => '`API region` field required for ses mail provider.',
                'email_required'        => 'Receiver emails must be provided.',
                'mail_content_required' => 'Mail content must be provided.',
                'credentials_wrong'     => 'Your credentials is wrong for ses mail provider.',
            ],
        ],

        "wallet_providers" => [
            "no_default_email"  => "No default wallet service found.",
            "undefined_service" => "Undefined wallet service.",
        ],
        'id_analyzer'      => [
            'document_type_invalid'   => 'Document type is invalid.',
            'different_photo'         => 'Your photo looks different to the photo on document',
            'suspicious_document'     => 'The document uploaded looks little bit suspicious',
            'fake_document'           => 'The document uploaded is fake',
            'blurry_data'             => "The document uploaded is too blurry, we couldn't capture some of the data",
            'invalid_api_key'         => 'Invalid API Key',
            'out_of_quota'            => 'Out of API quota',
            'not_recognized_document' => 'Document not recognized',
            'something_went_wrong'    => 'Something went wrong',
        ],
    ],

    'wrong_google_auth_code' => 'Google authentication code is wrong.',
    'blank_queue_name'       => 'Queue name must be filled.',

    'beonpay' => [
        'not_working' => 'BeOnPay payout service is not working.',
    ],

    'argument' => [
        'wrong_arguments_passed' => 'Wrong arguments passed.',
    ],

    'email_already_verified' => "Email already verified.",
    'expired_url'            => "Invalid/Expired url provided.",
    'user_already_verified'  => "User aldready verified",
    'verify_email'           => 'Please verify your email address.',
    'verify_cellphone'       => 'Please verify your cellphone.',
    'no_user_found'          => 'No user found.',

    'crypto' => [
        'account_not_found' => 'Cant find user wallet account.',
    ],

    'wallet' => [
        'unknown_related_wallet'     => 'Related Wallet unknown.',
        'cant_create_wallet_account' => 'Cant create wallet account.',
    ],

    'trading' => [
        'wrong_pair' => 'Trading pair not found. Please check base currency code and quote currency code.',

        'your_balance_not_enough' => 'Your :currencyCode balance not enough.',
        'default_service_not_set' => 'Default trading service not set.',

        'exchange_service_not_implemented' => 'Exchange service not implemented.',
        'unknown_exchange_service'         => 'Unknown exchange service :code',
    ],
];
