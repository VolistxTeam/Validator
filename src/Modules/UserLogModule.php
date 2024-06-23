<?php

namespace Volistx\Validation\Modules;


use Illuminate\Support\Facades\Validator;

class UserLogModule extends ValidationBase
{

    public function generateCreateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'log_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:user_logs,id' : ''],
        ], [
            'log_id.required' => trans('volistx::messages.log_id.required'),
            'log_id.uuid' => trans('volistx::messages.log_id.uuid'),
            'log_id.exists' => trans('volistx::messages.log_id.exists'),
        ]);
    }

    public function generateUpdateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make([], []);
    }

    public function generateGetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'log_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:user_logs,id' : ''],
        ], [
            'log_id.required' => trans('volistx::messages.log_id.required'),
            'log_id.uuid' => trans('volistx::messages.log_id.uuid'),
            'log_id.exists' => trans('volistx::messages.log_id.exists'),
        ]);
    }

    public function generateGetAllValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'page' => ['bail', 'sometimes', 'integer'],
            'limit' => ['bail', 'sometimes', 'integer'],
        ], [
            'page.integer' => trans('volistx::messages.page.integer'),
            'limit.integer' => trans('volistx::messages.limit.integer'),
        ]);
    }

    public function generateDeleteValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make([], []);
    }
}
