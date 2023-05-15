<?php

class User {
  protected string $login;
  protected string $password;

  use AppUserAuthentication, MobileUserAuthentication {
    AppUserAuthentication::authenticate as appAuthenticate;
    MobileUserAuthentication::authenticate as mobilAuthenticate;
  }

  public function __construct(string $login, string $password) {
    $this->login = $login;
    $this->password = $password;
  }

  public function authenticate(): void {
    $this->appAuthenticate();
    $this->mobilAuthenticate();
  }
}
