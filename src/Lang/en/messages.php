<?php

return [
    'error' => [
        'e400' => 'One or more invalid parameters were specified.',
        'e401' => 'You have insufficient permissions to access this resource.',
        'e403' => 'You don\'t have permission to access this resource.',
        'e404' => 'The requested resource could not be found.',
        'e409' => 'The request could not be completed due to a conflict with the current state of the resource.',
        'e429' => 'You have exceeded the rate limit for this resource.',
        'e500' => 'An unexpected error occurred.',
    ],
    'log_id' => [
        'required' => 'The log ID is required.',
        'uuid' => 'The log ID must be a valid uuid.',
        'exists' => 'The log with the given ID was not found.',
    ],
    'page' => [
        'integer' => 'The page must be an integer.',
    ],
    'limit' => [
        'integer' => 'The limit must be an integer.',
    ],
    'invalid_search_column' => 'Not able to search with the given parameters.',
    'user_id' => [
        'required' => 'The user ID is required.',
        'exists' => 'The user does not exist',
        'uuid' => 'The user ID must be a valid UUID.',
    ],
    'duration' => [
        'required' => 'The duration is required.',
    ],
    'expires_at' => [
        'date' => 'The expiry date must be a valid date.',
        'present' => 'The expiry date field must be present.',
    ],
    'rate_limit_mode' => [
        'required' => 'The rate limit mode is required.',
        'enum' => 'The rate limit mode must be a valid type.',
    ],
    'permissions' => [
        'array' => 'The permissions must be an array.',
        '*.string' => 'The permissions must be a string.',
    ],
    'ip_rule' => [
        'required' => 'The IP rule is required.',
        'enum' => 'The IP rule must be a valid type.',
    ],
    'ip_range' => [
        'required_if' => 'The IP range is required when the IP rule is 1 or 2.',
        'array' => 'The IP range must be an array.',
        '*.ip' => 'The IP range must be a valid IP address.',
    ],
    'country_rule' => [
        'required' => 'The country rule is required.',
        'enum' => 'The country rule must be a valid type.',
    ],
    'country_range' => [
        'required_if' => 'The country range is required when the country rule is 1 or 2.',
        'array' => 'The country range must be an array.',
        '*.required_if' => 'The country range item must be a valid country short name.',
    ],
    'disable_logging' => [
        'boolean' => 'The disable logging must be a boolean.',
    ],
    'hmac_token' => [
        'max' => 'HMAC token must be less than 255 characters.',
    ],
    'token_id' => [
        'required' => 'The token ID is required.',
        'uuid' => 'The token ID must be a valid uuid.',
        'exists' => 'The token with the given ID was not found.',
    ],
    'plan_id' => [
        'required' => 'The plan ID is required.',
        'uuid' => 'The plan ID must be a valid UUID.',
        'exists' => 'The plan with the given ID was not found.',
    ],
    'activated_at' => [
        'date' => 'The activated date must be a valid date.',
        'required' => 'The activated date is required.',
    ],
    'cancels_at' => [
        'date' => 'The cancellation date must be a valid date.',
    ],
    'cancelled_at' => [
        'date' => 'The cancelled date must be a valid date.',
    ],
    'subscription_id' => [
        'required' => 'The subscription ID is required.',
        'uuid' => 'The subscription ID must be a valid UUID.',
        'exists' => 'The subscription with the given ID was not found.',
    ],
    'name' => [
        'required' => 'The name is required.',
        'string' => 'The name must be a string.',
        'max' => 'The name may not be greater than 255 characters.',
    ],
    'tag' => [
        'required' => 'The tag is required.',
        'string' => 'The tag must be a string.',
        'unique' => 'The tag has already been taken.',
    ],
    'description' => [
        'required' => 'The description is required.',
        'string' => 'The description must be a string.',
    ],
    'data' => [
        'required' => 'The data is required.',
        'array' => 'The data must be an array.',
    ],
    'price' => [
        'required' => 'The price is required.',
        'numeric' => 'The price must be a number.',
    ],
    'tier' => [
        'required' => 'The tier is required.',
        'integer' => 'The tier must be an integer.',
        'unique' => 'The tier has already been taken.',
    ],
    'custom' => [
        'required' => 'The custom is required.',
        'boolean' => 'The custom must be a boolean.',
    ],
    'is_active' => [
        'boolean' => 'The activation status must be a boolean.',
    ],
    'service' => [
        'not_allowed_to_access_from_your_ip' => 'This service is not allowed to access from your IP address.',
        'not_allowed_to_access_from_your_country' => 'This service is not allowed to access from your country.',
    ],
    'token' => [
        'expired' => 'Your token has been expired.',
    ],
    'request_count' => [
        'can_not_retrieve' => 'The request count could not be retrieved.',
        'exceeded_limit' => 'You have reached the limit of requests for this plan.',
    ],
    'subscription' => [
        'expired' => 'Your subscription has been expired.',
        'can_not_uncancel' => 'You cannot uncancel the subscription.',
        'can_not_cancel_subscription' => 'The subscription cannot be cancelled.',
    ],
    'user' => [
        'inactive_user' => 'The user is inactive.',
    ],
];
