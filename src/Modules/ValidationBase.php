<?php

namespace Volistx\Validation\Modules;


use Illuminate\Contracts\Validation\Validator;

abstract class ValidationBase
{
    public abstract function generateCreateValidation(array $inputs): Validator;

    public abstract function generateUpdateValidation(array $inputs): Validator;

    public abstract function generateGetValidation(array $inputs): Validator;

    public abstract function generateGetAllValidation(array $inputs): Validator;

    public abstract function generateDeleteValidation(array $inputs): Validator;
}
