<?php

trait AppUserAuthentication {
  public string $app = 'app';

  public function authenticate(): void {
    if (strpos($this->login, $this->app) !== false) {
      echo 'Вы успешно авторизовались в приложении' . PHP_EOL;
    }
  }
}
