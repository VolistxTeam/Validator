<?php

namespace Volistx\Validation\Modules;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Config;

abstract class ValidationBase
{
    protected bool $db_checks;

    public function __construct()
    {
        $this->db_checks = Config::get('volistx-validation.db_checks', true);
    }

    public abstract function generateCreateValidation(array $inputs): Validator;

    public abstract function generateUpdateValidation(array $inputs): Validator;

    public abstract function generateGetValidation(array $inputs): Validator;

    public abstract function generateGetAllValidation(array $inputs): Validator;

    public abstract function generateDeleteValidation(array $inputs): Validator;
}
