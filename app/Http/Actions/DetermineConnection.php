<?php


namespace App\Http\Actions;


class DetermineConnection
{

    private $connection_name;

    public function __construct($connection_name)
    {
        $this->connection_name=$connection_name;
    }

    public function setConnectionNamespace()
    {
        switch ($this->connection_name){
            case 'curl': return CurlConnection::class;
            case 'file_get_content': return FileGetContentConnection::class;
        }
    }

}
