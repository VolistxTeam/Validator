<?php

namespace Volistx\Validation\Traits;

use Volistx\Validation\Modules\AdminLogModule;
use Volistx\Validation\Modules\PersonalTokensModule;
use Volistx\Validation\Modules\PlanModule;
use Volistx\Validation\Modules\SubscriptionModule;
use Volistx\Validation\Modules\UserLogModule;
use Volistx\Validation\Modules\UserModule;
use Volistx\Validation\Modules\ValidationBase;

trait HasKernelValidations
{
    public function GetModuleValidation(string $key): ?ValidationBase
    {
        return match ($key) {
            "user" => new UserModule(),
            "subscriptions" => new SubscriptionModule(),
            "personal-tokens" => new PersonalTokensModule(),
            "admin-logs" => new AdminLogModule(),
            "user-logs" => new UserLogModule(),
            "plans" => new PlanModule(),
            default => null,
        };
    }
}
