<?php

namespace IAmKevinMcKee\SingleDatabaseTenancy\Traits;

use IAmKevinMcKee\SingleDatabaseTenancy\TenantScope;

trait BelongsToTenant
{
    protected static function bootBelongsToTenant()
    {
        static::addGlobalScope(new TenantScope);

        static::creating(function ($user) {
            if(session()->has('tenant_id')) {
                $user->tenant_id = session()->get('tenant_id');
            }
        });
    }
}
