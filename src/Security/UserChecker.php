<?php 

namespace App\Security;

use App\Exception\AccountDeletedException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

use App\Entity\Users;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof Users) {
            return;
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
        if (!$user instanceof Users) {
            return;
        }

        // user account is expired, the user may be notified
        // if ($user->isExpired()) {
        //     throw new AccountExpiredException('...');
        // }

        if($user->getActive() != 1){
            throw new CustomUserMessageAuthenticationException('Votre compte n\'est pas actif. Vous devez activer votre compte en cliquant sur le lien que nous vous avons envoyé par email.');
        }
    }
}