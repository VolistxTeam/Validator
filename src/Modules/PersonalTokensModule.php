<?php

namespace Volistx\Validation\Modules;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Volistx\Validation\Rules\CountryRequest;

class PersonalTokensModule extends ValidationBase
{
    public function generateCreateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'user_id' => ['required', 'uuid', 'bail', $this->db_checks ? 'exists:users,id' : ''],
            'name' => ['required', 'string', 'max:255'],
            'expires_at' => ['bail', 'present', 'nullable', 'date'],
            'rate_limit_mode' => ['bail', 'sometimes', Rule::in([0, 1])],
            'permissions' => ['bail', 'sometimes', 'array'],
            'permissions.*' => ['bail', 'required_if:permissions,array', 'string'],
            'ip_rule' => ['bail', 'required', Rule::in([0, 1, 2])],
            'ip_range' => ['bail', 'required_if:ip_rule,1,2', 'array'],
            'ip_range.*' => ['bail', 'required_if:ip_rule,1,2', 'ip'],
            'country_rule' => ['bail', 'required', Rule::in([0, 1, 2])],
            'country_range' => ['bail', 'required_if:ip_rule,1,2', 'array', new CountryRequest()],
            'disable_logging' => ['bail', 'sometimes', 'nullable', 'boolean'],
            'hmac_token' => ['bail', 'sometimes', 'max:255'],
        ], [
            'user_id.required' => trans('volistx::messages.user_id.required'),
            'name.required' => trans('volistx::messages.name.required'),
            'name.max' => trans('volistx::messages.name.max'),
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
            'user_id.exists' => trans('volistx::messages.user_id.exists'),
            'duration.required' => trans('volistx::messages.duration.required'),
            'expires_at.date' => trans('volistx::messages.expires_at.date'),
            'rate_limit_mode.required' => trans('volistx::messages.rate_limit_mode.required'),
            'rate_limit_mode.enum' => trans('volistx::messages.rate_limit_mode.enum'),
            'permissions.array' => trans('volistx::messages.permissions.array'),
            'permissions.*.string' => trans('volistx::messages.permissions.*.string'),
            'ip_rule.enum' => trans('volistx::messages.ip_rule.enum'),
            'ip_range.required_if' => trans('volistx::messages.ip_range.required_if'),
            'ip_range.array' => trans('volistx::messages.ip_range.array'),
            'ip_range.*.ip' => trans('volistx::messages.ip_range.*.ip'),
            'country_rule.required' => trans('volistx::messages.country_rule.required'),
            'country_rule.enum' => trans('volistx::messages.country_rule.enum'),
            'country_range.required_if' => trans('volistx::messages.country_range.required_if'),
            'country_range.array' => trans('volistx::messages.country_range.array'),
            'country_range.*.required_if' => trans('volistx::messages.country_range.*.required_if'),
            'disable_logging.boolean' => trans('volistx::messages.disable_logging.boolean'),
            'hmac_token.max' => trans('volistx::messages.hmac_token.max'),
        ]);
    }

    public function generateUpdateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make(array_merge($inputs), [
            'token_id' => ['required', 'uuid', 'bail', $this->db_checks ? 'exists:personal_tokens,id' : ''],
            'name' => ['bail', 'sometimes', 'max:255'],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],
            'expires_at' => ['bail', 'sometimes', 'date', 'nullable'],
            'permissions' => ['bail', 'sometimes', 'array'],
            'rate_limit_mode' => ['bail', 'sometimes', Rule::in([0, 1])],
            'permissions.*' => ['bail', 'required_if:permissions,array', 'string'],
            'ip_rule' => ['bail', 'sometimes', Rule::in([0, 1, 2])],
            'ip_range' => ['bail', 'required_if:ip_rule,1,2', 'array'],
            'ip_range.*' => ['bail', 'required_if:ip_rule,1,2', 'ip'],
            'country_rule' => ['bail', 'sometimes', Rule::in([0, 1, 2])],
            'country_range' => ['bail', 'required_if:ip_rule,1,2', 'array', new CountryRequest()],
            'disable_logging' => ['bail', 'sometimes', 'nullable', 'boolean'],
            'hmac_token' => ['bail', 'sometimes', 'max:255'],
        ], [
            'token_id.required' => trans('volistx::messages.token_id.required'),
            'token_id.uuid' => trans('volistx::messages.token_id.uuid'),
            'token_id.exists' => trans('volistx::messages.token_id.exists'),
            'user_id.required' => trans('volistx::messages.user_id.required'),
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
            'user_id.exists' => trans('volistx::messages.user_id.exists'),
            'name.required' => trans('volistx::messages.name.required'),
            'name.max' => trans('volistx::messages.name.max'),
            'expires_at.date' => trans('volistx::messages.expires_at.date'),
            'permissions.array' => trans('volistx::messages.permissions.array'),
            'permissions.*.string' => trans('volistx::messages.permissions.*.string'),
            'rate_limit_mode.enum' => trans('volistx::messages.rate_limit_mode.enum'),
            'ip_rule.required' => trans('volistx::messages.ip_rule.required'),
            'ip_rule.enum' => trans('volistx::messages.ip_rule.enum'),
            'ip_range.required_if' => trans('volistx::messages.ip_range.required_if'),
            'ip_range.array' => trans('volistx::messages.ip_range.array'),
            'ip_range.*.ip' => trans('volistx::messages.ip_range.*.ip'),
            'country_rule.required' => trans('volistx::messages.country_rule.required'),
            'country_rule.enum' => trans('volistx::messages.country_rule.enum'),
            'country_range.required_if' => trans('volistx::messages.country_range.required_if'),
            'country_range.array' => trans('volistx::messages.country_range.array'),
            'country_range.*.required_if' => trans('volistx::messages.country_range.*.required_if'),
            'disable_logging.boolean' => trans('volistx::messages.disable_logging.boolean'),
            'hmac_token.max' => trans('volistx::messages.hmac_token.max'),
        ]);
    }

    public function generateGetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'token_id' => ['required', 'uuid', 'bail', $this->db_checks ? 'exists:personal_tokens,id' : ''],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],

        ], [
            'token_id.required' => trans('volistx::messages.token_id.required'),
            'token_id.uuid' => trans('volistx::messages.token_id.uuid'),
            'token_id.exists' => trans('volistx::messages.token_id.exists'),
            'user_id.required' => trans('volistx::messages.user_id.required'),
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
            'user_id.exists' => trans('volistx::messages.user_id.exists'),
        ]);
    }

    public function generateGetAllValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs,
            [
                'page' => ['bail', 'sometimes', 'integer'],
                'limit' => ['bail', 'sometimes', 'integer'],
            ],
            [
                'page.integer' => trans('volistx::messages.page.integer'),
                'limit.integer' => trans('volistx::messages.limit.integer'),
            ]
        );
    }

    public function generateDeleteValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'token_id' => ['required', 'uuid', 'bail', $this->db_checks ? 'exists:personal_tokens,id' : ''],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],

        ], [
            'token_id.required' => trans('volistx::messages.token_id.required'),
            'token_id.uuid' => trans('volistx::messages.token_id.uuid'),
            'token_id.exists' => trans('volistx::messages.token_id.exists'),
            'user_id.required' => trans('volistx::messages.user_id.required'),
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
            'user_id.exists' => trans('volistx::messages.user_id.exists'),
        ]);
    }


    public function generateResetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'token_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:personal_tokens,id' : ''],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],

        ], [
            'token_id.required' => trans('volistx::messages.token_id.required'),
            'token_id.uuid' => trans('volistx::messages.token_id.uuid'),
            'token_id.exists' => trans('volistx::messages.token_id.exists'),
            'user_id.required' => trans('volistx::messages.user_id.required'),
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
            'user_id.exists' => trans('volistx::messages.user_id.exists'),
        ]);
    }

    public function generateSyncValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'user_id' => ['required', 'uuid', 'bail', $this->db_checks ? 'exists:users,id' : ''],
        ], [
            'user_id.required' => trans('volistx::messages.user_id.required'),
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
            'user_id.exists' => trans('volistx::messages.user_id.exists'),
        ]);
    }
}
