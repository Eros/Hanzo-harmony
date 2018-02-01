<?php

class Server {

    protected $hostname;
    protected $port;

    public function __construct($hostname = "127.0.0.1", $port = 25565){
        if(stristr(':', $hostname)){
            list($hostname, $port) = explode(':', $hostname);
        }
        $this->setHostname($this->hostname);
        $this->setPort($this->port);
    }

    /**
     * @return mixed
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @param mixed $hostname
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }


}
