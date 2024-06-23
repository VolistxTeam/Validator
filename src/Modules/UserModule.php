<?php

namespace Volistx\Validation\Modules;


use Illuminate\Support\Facades\Validator;

class UserModule extends ValidationBase
{

    public function generateCreateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'user_id' => ['sometimes', 'uuid'],
        ], [
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
        ]);
    }

    public function generateUpdateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'user_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:users,id' : ''],
            'is_active' => ['bail', 'sometimes', 'nullable', 'boolean'],
        ], [
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
            'user_id.integer' => trans('volistx::messages.user_id.integer'),
            'is_active.boolean' => trans('volistx::messages.is_active.boolean'),
        ]);
    }

    public function generateGetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'user_id' => ['bail', 'required', 'uuid'],
        ], [
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
        ]);
    }

    public function generateGetAllValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make([], []);
    }

    public function generateDeleteValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'user_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:users,id' : ''],
            'is_active' => ['bail', 'sometimes', 'nullable', 'boolean'],
        ], [
            'user_id.uuid' => trans('volistx::messages.user_id.uuid'),
            'user_id.integer' => trans('volistx::messages.user_id.integer'),
            'is_active.boolean' => trans('volistx::messages.is_active.boolean'),
        ]);
    }
}
