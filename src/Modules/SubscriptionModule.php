<?php

namespace Volistx\Validation\Modules;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SubscriptionModule extends ValidationBase
{
    public function generateCreateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs,
            [
                'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
                'plan_id' => ['bail', 'required', 'uuid', 'exists:plans,id'],
                'activated_at' => ['bail', 'required', 'date'],
                'expires_at' => ['bail', 'present', 'date', 'nullable'],
            ],
            [
                'user_id.required' => trans('volistx::user_id.required'),
                'user_id.uuid' => trans('volistx::user_id.uuid'),
                'user_id.exists' => trans('volistx::user_id.exists'),
                'plan_id.required' => trans('volistx::plan_id.required'),
                'plan_id.uuid' => trans('volistx::plan_id.uuid'),
                'plan_id.exists' => trans('volistx::plan_id.exists'),
                'activated_at.date' => trans('volistx::activated_at.date'),
                'activated_at.required' => trans('volistx::activated_at.required'),
                'expires_at.date' => trans('volistx::expires_at.date'),
                'expires_at.present' => trans('volistx::expires_at.present'),
            ]
        );
    }

    public function generateUpdateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'subscription_id' => ['bail', 'required', 'uuid', 'exists:subscriptions,id'],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
            'plan_id' => ['bail', 'sometimes', 'uuid', 'exists:plans,id'],
            'status' => ['bail', 'sometimes', Rule::in([0, 1, 2, 3, 4])],
            'activated_at' => ['bail', 'sometimes', 'date'],
            'expires_at' => ['bail', 'present', 'date', 'nullable'],
            'cancels_at' => ['bail', 'sometimes', 'date'],
            'cancelled_at' => ['bail', 'sometimes', 'date'],
        ], [
            'subscription_id.required' => trans('volistx::subscription_id.required'),
            'subscription_id.uuid' => trans('volistx::subscription_id.uuid'),
            'subscription_id.exists' => trans('volistx::subscription_id.exists'),
            'hmac_token.max' => trans('volistx::hmac_token.max'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
            'plan_id.uuid' => trans('volistx::plan_id.uuid'),
            'activated_at.date' => trans('volistx::activated_at.date'),
            'expires_at.date' => trans('volistx::expires_at.date'),
            'cancels_at.date' => trans('volistx::cancels_at.date'),
            'cancelled_at.date' => trans('volistx::cancelled_at.date'),
        ]);
    }

    public function generateGetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'subscription_id' => ['bail', 'required', 'uuid', 'exists:subscriptions,id'],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
        ], [
            'subscription_id.required' => trans('volistx::subscription_id.required'),
            'subscription_id.uuid' => trans('volistx::subscription_id.uuid'),
            'subscription_id.exists' => trans('volistx::subscription_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
        ]);
    }

    public function generateGetAllValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
            'page' => ['bail', 'sometimes', 'integer'],
            'limit' => ['bail', 'sometimes', 'integer'],
        ], [
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
            'page.integer' => trans('volistx::page.integer'),
            'limit.integer' => trans('volistx::limit.integer'),
        ]);
    }

    public function generateDeleteValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'subscription_id' => ['bail', 'required', 'uuid', 'exists:subscriptions,id'],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
        ], [
            'subscription_id.required' => trans('volistx::subscription_id.required'),
            'subscription_id.uuid' => trans('volistx::subscription_id.uuid'),
            'subscription_id.exists' => trans('volistx::subscription_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
        ]);
    }

    public function generateCancelValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'subscription_id' => ['bail', 'required', 'uuid', 'exists:subscriptions,id'],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
            'cancels_at' => ['bail', 'sometimes', 'date'],
        ], [
            'subscription_id.required' => trans('volistx::subscription_id.required'),
            'subscription_id.uuid' => trans('volistx::subscription_id.uuid'),
            'subscription_id.exists' => trans('volistx::subscription_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
            'cancels_at.date' => trans('volistx::cancels_at.date'),
        ]);
    }

    public function generateUncancelValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'subscription_id' => ['bail', 'required', 'uuid', 'exists:subscriptions,id'],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
            'cancels_at' => ['bail', 'sometimes', 'date'],
        ], [
            'subscription_id.required' => trans('volistx::subscription_id.required'),
            'subscription_id.uuid' => trans('volistx::subscription_id.uuid'),
            'subscription_id.exists' => trans('volistx::subscription_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
            'cancels_at.date' => trans('volistx::cancels_at.date'),
        ]);
    }

    public function generateGetLogsValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'subscription_id' => ['bail', 'required', 'uuid', 'exists:subscriptions,id'],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
            'page' => ['bail', 'sometimes', 'integer'],
            'limit' => ['bail', 'sometimes', 'integer'],
        ], [
            'subscription_id.required' => trans('volistx::subscription_id.required'),
            'subscription_id.uuid' => trans('volistx::subscription_id.uuid'),
            'subscription_id.exists' => trans('volistx::subscription_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
            'page.integer' => trans('volistx::page.integer'),
            'limit.integer' => trans('volistx::limit.integer'),
        ]);
    }

    public function generateGetUsageValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'subscription_id' => ['bail', 'required', 'uuid', 'exists:subscriptions,id'],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
        ], [
            'subscription_id.required' => trans('volistx::subscription_id.required'),
            'subscription_id.uuid' => trans('volistx::subscription_id.uuid'),
            'subscription_id.exists' => trans('volistx::subscription_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
        ]);
    }
}
