<?php

namespace Volistx\Validation\Modules;

use Illuminate\Support\Facades\Validator;

class PlanModule extends ValidationBase
{
    public function generateCreateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'name' => ['bail', 'required', 'string'],
            'tag' => ['bail', 'required', 'string', $this->db_checks ? 'unique:plans,tag' : ''],
            'description' => ['bail', 'required', 'string'],
            'data' => ['bail', 'required', 'array'],
            'price' => ['bail', 'required', 'numeric'],
            'tier' => ['bail', 'required', 'integer', $this->db_checks ? 'unique:plans,tier' : ''],
            'custom' => ['bail', 'required', 'boolean'],
        ], [
            'name.required' => trans('volistx::messages.name.required'),
            'name.string' => trans('volistx::messages.name.string'),
            'tag.required' => trans('volistx::messages.tag.required'),
            'tag.string' => trans('volistx::messages.tag.string'),
            'tag.unique' => trans('volistx::messages.tag.unique'),
            'description.required' => trans('volistx::messages.description.required'),
            'description.string' => trans('volistx::messages.description.string'),
            'data.required' => trans('volistx::messages.data.required'),
            'data.array' => trans('volistx::messages.data.array'),
            'price.required' => trans('volistx::messages.price.required'),
            'price.numeric' => trans('volistx::messages.price.numeric'),
            'tier.required' => trans('volistx::messages.tier.required'),
            'tier.integer' => trans('volistx::messages.tier.integer'),
            'tier.unique' => trans('volistx::messages.tier.unique'),
            'custom.required' => trans('volistx::messages.custom.required'),
            'custom.boolean' => trans('volistx::messages.custom.boolean'),
        ]);
    }

    public function generateUpdateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'plan_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:plans,id' : ''],
            'name' => ['bail', 'sometimes', 'string'],
            'tag' => ['bail', 'sometimes', 'string', 'unique:plans,tag'],
            'description' => ['bail', 'sometimes', 'string'],
            'data' => ['bail', 'sometimes', 'array'],
            'price' => ['bail', 'sometimes', 'numeric'],
            'tier' => ['bail', 'sometimes', 'integer'],
            'custom' => ['bail', 'sometimes', 'boolean'],
            'is_active' => ['bail', 'sometimes', 'boolean'],
        ], [
            'plan_id.required' => trans('volistx::messages.plan_id.required'),
            'plan_id.uuid' => trans('volistx::messages.plan_id.uuid'),
            'plan_id.exists' => trans('volistx::messages.plan_id.exists'),
            'name.string' => trans('volistx::messages.name.string'),
            'tag.unique' => trans('volistx::messages.tag.unique'),
            'description.string' => trans('volistx::messages.description.string'),
            'data.array' => trans('volistx::messages.data.array'),
            'price.numeric' => trans('volistx::messages.price.numeric'),
            'tier.integer' => trans('volistx::messages.tier.integer'),
            'custom.boolean' => trans('volistx::messages.custom.required'),
            'is_active.boolean' => trans('volistx::messages.is_active.boolean'),
        ]);
    }

    public function generateGetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'plan_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:plans,id' : ''],
        ], [
            'plan_id.required' => trans('volistx::messages.plan_id.required'),
            'plan_id.uuid' => trans('volistx::messages.plan_id.uuid'),
            'plan_id.exists' => trans('volistx::messages.plan_id.exists'),
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
        return Validator::make($inputs, [
            'plan_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:plans,id' : ''],
        ], [
            'plan_id.required' => trans('volistx::messages.plan_id.required'),
            'plan_id.uuid' => trans('volistx::messages.plan_id.uuid'),
            'plan_id.exists' => trans('volistx::messages.plan_id.exists'),
        ]);
    }
}
