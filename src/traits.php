<?php
trait HostInfo {
    public function getHostName()
    {
        return gethostname();
    }
    public function getCurrentUsername()
    {
        return get_current_user();
    }
}

class Host { public function getCurrentUsername() { return 'root'; } }

class Localhost extends Host {
    use HostInfo;

    public function getHostName()
    {
        return "localhost";
    }
}

$localhost = new Localhost();
echo $localhost->getHostName() . PHP_EOL;
echo $localhost->getCurrentUsername() . PHP_EOL;