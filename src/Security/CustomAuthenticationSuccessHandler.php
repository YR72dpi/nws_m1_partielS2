<?php

// src/Security/CustomAuthenticationSuccessHandler.php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class CustomAuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{

    public function __construct(private RouterInterface $router)
    {
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): RedirectResponse
    {
        $roles = $token->getRoleNames();
        if (in_array('ROLE_SPONSOR', $roles)) return new RedirectResponse($this->router->generate('app_sponsor'));
        if (in_array('ROLE_MANAGER', $roles)) return new RedirectResponse($this->router->generate('app_manager'));
        if (in_array('ROLE_USER', $roles))    return new RedirectResponse($this->router->generate('app_event'));
        return new RedirectResponse($this->router->generate('homepage'));
    }
}
