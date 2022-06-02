<?php

define('SESSION_SAVE_PATH', dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'SESSIONS');

class AppSessionHandler extends SessionHandler
{
    private $session_name = "DEVSESSID";
    private $sessionSavePath = SESSION_SAVE_PATH;
    private $session_max_lifetime = 0;
    private $sessionOnPath = '/';
    private $sessionDomain = 'localhost';
    private $sessionSSL = FALSE;
    private $sessionHttpOnly = TRUE;
    private $TTL = 10;

    public function __construct()
    {
        ini_set('session.save_handler', 'files');
        ini_set('session.use_only_cookies', 1);
        ini_set('session.use_cookies', 1);
        ini_set('session.use_trans_sid', 0);

        session_name($this->session_name);
        session_save_path($this->sessionSavePath);

        session_set_cookie_params(
            $this->session_max_lifetime,
            $this->sessionOnPath,
            $this->sessionDomain,
            $this->sessionSSL,
            $this->sessionHttpOnly
        );

        session_set_save_handler($this, true);
    }

    public function __get($key)
    {
        return false !== $_SESSION[$key] ? $_SESSION[$key] : false;
    }

    public function __set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function __isset($key)
    {
        return isset($_SESSION[$key]) ? true : false;
    }

    public function read($id): string
    {
        return base64_decode(parent::read($id));
    }

    public function write($id, $data): bool
    {
        return parent::write($id, base64_encode($data));
    }

    public function start()
    {
        if ('' === session_id()) {
            if (session_start()) {
                $this->setSessionStartTime();
                $this->checkSessionValidat();
            }
        }
    }

    private function setSessionStartTime(): void
    {
        if (!isset($this->sessionStartTime)) {
            $this->sessionStartTime = time();
        }
    }

    private function checkSessionValidat(): void
    {
        if ((time() - $this->sessionStartTime) > ($this->TTL * 60)) {
            $this->reNewSession();
            $this->generateFingerPrint();
        }
    }

    private function reNewSession()
    {
        $this->sessionStartTime = time();
        return session_regenerate_id(true);
    }

    public function kill()
    {
        session_unset();
        setcookie(
            $this->session_name,
            '',
            time() - 1000,
            $this->sessionOnPath,
            $this->sessionDomain,
            $this->sessionSSL,
            $this->sessionHttpOnly
        );
        session_destroy();
    }

    private function generateFingerPrint()
    {
        $userAgentId = $_SERVER['HTTP_USER_AGENT'];
        $this->cipher = random_bytes(16);
        $sessionId = session_id();
        $this->fingerprint = crypt($userAgentId . $this->cipher . $sessionId, CRYPT_BLOWFISH);
    }

    public function isValidFingerPrint()
    {
        if (!isset($this->fingerprint))
            $this->generateFingerPrint();

        $fingerprint = crypt($_SERVER['HTTP_USER_AGENT'] . $this->cipher . session_id(), CRYPT_BLOWFISH);

        if ($fingerprint === $this->fingerprint)
            return true;

        return false;
    }
}

$session = new AppSessionHandler();
$session->start();
var_dump($session);
// $session->kill();
if (!$session->isValidFingerPrint()) {
    $session->kill();
}