<?php

trait MobileUserAuthentication {
  public string $mobil = 'mobil';

  public function authenticate(): void {
    if (strpos($this->login, $this->mobil) !== false) {
      echo 'Вы успешно авторизовались в мобильном приложении' . PHP_EOL;
    }
  }
}
