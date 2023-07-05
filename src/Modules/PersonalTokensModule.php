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
            'user_id.required' => trans('volistx::user_id.required'),
            'name.required' => trans('volistx::name.required'),
            'name.max' => trans('volistx::name.max'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
            'duration.required' => trans('volistx::duration.required'),
            'expires_at.date' => trans('volistx::expires_at.date'),
            'rate_limit_mode.required' => trans('volistx::rate_limit_mode.required'),
            'rate_limit_mode.enum' => trans('volistx::rate_limit_mode.enum'),
            'permissions.array' => trans('volistx::permissions.array'),
            'permissions.*.string' => trans('volistx::permissions.*.string'),
            'ip_rule.enum' => trans('volistx::ip_rule.enum'),
            'ip_range.required_if' => trans('volistx::ip_range.required_if'),
            'ip_range.array' => trans('volistx::ip_range.array'),
            'ip_range.*.ip' => trans('volistx::ip_range.*.ip'),
            'country_rule.required' => trans('volistx::country_rule.required'),
            'country_rule.enum' => trans('volistx::country_rule.enum'),
            'country_range.required_if' => trans('volistx::country_range.required_if'),
            'country_range.array' => trans('volistx::country_range.array'),
            'country_range.*.required_if' => trans('volistx::country_range.*.required_if'),
            'disable_logging.boolean' => trans('volistx::disable_logging.boolean'),
            'hmac_token.max' => trans('volistx::hmac_token.max'),
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
            'token_id.required' => trans('volistx::token_id.required'),
            'token_id.uuid' => trans('volistx::token_id.uuid'),
            'token_id.exists' => trans('volistx::token_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
            'name.required' => trans('volistx::name.required'),
            'name.max' => trans('volistx::name.max'),
            'expires_at.date' => trans('volistx::expires_at.date'),
            'permissions.array' => trans('volistx::permissions.array'),
            'permissions.*.string' => trans('volistx::permissions.*.string'),
            'rate_limit_mode.enum' => trans('volistx::rate_limit_mode.enum'),
            'ip_rule.required' => trans('volistx::ip_rule.required'),
            'ip_rule.enum' => trans('volistx::ip_rule.enum'),
            'ip_range.required_if' => trans('volistx::ip_range.required_if'),
            'ip_range.array' => trans('volistx::ip_range.array'),
            'ip_range.*.ip' => trans('volistx::ip_range.*.ip'),
            'country_rule.required' => trans('volistx::country_rule.required'),
            'country_rule.enum' => trans('volistx::country_rule.enum'),
            'country_range.required_if' => trans('volistx::country_range.required_if'),
            'country_range.array' => trans('volistx::country_range.array'),
            'country_range.*.required_if' => trans('volistx::country_range.*.required_if'),
            'disable_logging.boolean' => trans('volistx::disable_logging.boolean'),
            'hmac_token.max' => trans('volistx::hmac_token.max'),
        ]);
    }

    public function generateGetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'token_id' => ['required', 'uuid', 'bail', $this->db_checks ? 'exists:personal_tokens,id' : ''],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],

        ], [
            'token_id.required' => trans('volistx::token_id.required'),
            'token_id.uuid' => trans('volistx::token_id.uuid'),
            'token_id.exists' => trans('volistx::token_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
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
                'page.integer' => trans('volistx::page.integer'),
                'limit.integer' => trans('volistx::limit.integer'),
            ]
        );
    }

    public function generateDeleteValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'token_id' => ['required', 'uuid', 'bail', $this->db_checks ? 'exists:personal_tokens,id' : ''],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],

        ], [
            'token_id.required' => trans('volistx::token_id.required'),
            'token_id.uuid' => trans('volistx::token_id.uuid'),
            'token_id.exists' => trans('volistx::token_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
        ]);
    }


    public function generateResetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'token_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:personal_tokens,id' : ''],
            'user_id' => ['bail', 'required', 'uuid', 'exists:users,id'],

        ], [
            'token_id.required' => trans('volistx::token_id.required'),
            'token_id.uuid' => trans('volistx::token_id.uuid'),
            'token_id.exists' => trans('volistx::token_id.exists'),
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
        ]);
    }

    public function generateSyncValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'user_id' => ['required', 'uuid', 'bail', $this->db_checks ? 'exists:users,id' : ''],
        ], [
            'user_id.required' => trans('volistx::user_id.required'),
            'user_id.uuid' => trans('volistx::user_id.uuid'),
            'user_id.exists' => trans('volistx::user_id.exists'),
        ]);
    }
}
