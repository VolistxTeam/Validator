<?php

namespace Volistx\Validation\Modules;

use Illuminate\Support\Facades\Validator;

class PlanModule extends ValidationBase
{
    public function generateCreateValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'name' => ['bail', 'required', 'string'],
            'tag' => ['bail', 'required', 'string', 'unique:plans,tag'],
            'description' => ['bail', 'required', 'string'],
            'data' => ['bail', 'required', 'array'],
            'price' => ['bail', 'required', 'numeric'],
            'tier' => ['bail', 'required', 'integer', 'unique:plans,tier'],
            'custom' => ['bail', 'required', 'boolean'],
        ], [
            'name.required' => trans('volistx::name.required'),
            'name.string' => trans('volistx::name.string'),
            'tag.required' => trans('volistx::tag.required'),
            'tag.string' => trans('volistx::tag.string'),
            'tag.unique' => trans('volistx::tag.unique'),
            'description.required' => trans('volistx::description.required'),
            'description.string' => trans('volistx::description.string'),
            'data.required' => trans('volistx::data.required'),
            'data.array' => trans('volistx::data.array'),
            'price.required' => trans('volistx::price.required'),
            'price.numeric' => trans('volistx::price.numeric'),
            'tier.required' => trans('volistx::tier.required'),
            'tier.integer' => trans('volistx::tier.integer'),
            'tier.unique' => trans('volistx::tier.unique'),
            'custom.required' => trans('volistx::custom.required'),
            'custom.boolean' => trans('volistx::custom.boolean'),
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
            'plan_id.required' => trans('volistx::plan_id.required'),
            'plan_id.uuid' => trans('volistx::plan_id.uuid'),
            'plan_id.exists' => trans('volistx::plan_id.exists'),
            'name.string' => trans('volistx::name.string'),
            'tag.unique' => trans('volistx::tag.unique'),
            'description.string' => trans('volistx::description.string'),
            'data.array' => trans('volistx::data.array'),
            'price.numeric' => trans('volistx::price.numeric'),
            'tier.integer' => trans('volistx::tier.integer'),
            'custom.boolean' => trans('volistx::custom.required'),
            'is_active.boolean' => trans('volistx::is_active.boolean'),
        ]);
    }

    public function generateGetValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'plan_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:plans,id' : ''],
        ], [
            'plan_id.required' => trans('volistx::plan_id.required'),
            'plan_id.uuid' => trans('volistx::plan_id.uuid'),
            'plan_id.exists' => trans('volistx::plan_id.exists'),
        ]);
    }

    public function generateGetAllValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'page' => ['bail', 'sometimes', 'integer'],
            'limit' => ['bail', 'sometimes', 'integer'],
        ], [
            'page.integer' => trans('volistx::page.integer'),
            'limit.integer' => trans('volistx::limit.integer'),
        ]);
    }

    public function generateDeleteValidation(array $inputs): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($inputs, [
            'plan_id' => ['bail', 'required', 'uuid', $this->db_checks ? 'exists:plans,id' : ''],
        ], [
            'plan_id.required' => trans('volistx::plan_id.required'),
            'plan_id.uuid' => trans('volistx::plan_id.uuid'),
            'plan_id.exists' => trans('volistx::plan_id.exists'),
        ]);
    }
}
