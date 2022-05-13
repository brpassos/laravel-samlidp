<?php

namespace Brpassos\SamlIdp\Traits;

trait EventMap
{
    /**
     * All of the Laravel SAML IdP event / listener mappings.
     *
     * @var array
     */
    protected $default_events = [
        'Brpassos\SamlIdp\Events\Assertion' => [],
        'Illuminate\Auth\Events\Logout' => [
            'Brpassos\SamlIdp\Listeners\SamlLogout',
        ],
        'Illuminate\Auth\Events\Authenticated' => [
            'Brpassos\SamlIdp\Listeners\SamlAuthenticated',
        ],
        'Illuminate\Auth\Events\Login' => [
            'Brpassos\SamlIdp\Listeners\SamlLogin',
        ],
    ];
}
