<?php

namespace Drupal\hello\Access;

use Drupal\Core\Access\AccessCheckInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;


class HelloAccessCheck implements AccessCheckInterface {

  public function applies(Route $route) {
    return array('_access_hello');
  }

  public function access(Route $route, Request $request, AccountInterface $account) {
    if ($account->hasPermission('access hello')) {
    	return self::ALLOW;
    }
    return self::DENY;
  }
}