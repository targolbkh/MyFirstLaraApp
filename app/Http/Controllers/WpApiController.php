<?php

namespace App\Http\Controllers;

use App\Http\Actions\Contracts\ConnectionInterface;
use App\Http\Actions\Contracts\DecodeResponseInterface;
use App\Http\Actions\DetermineConnection;
use Illuminate\Http\Request;

class WpApiController extends Controller
{

    //get connection name space
    private $connection_namespace;
    public $connection_obj;
    private $final_response;

    public function show()
    {
        $this->connection_namespace = $this->getConnectionNamespace();
        $this->connection_obj = $this->setConnection();
        $this->final_response = $this->setDecodeResponse();
        return view('welcome', ['title' => 'I did it!']);




    }

    public function getConnectionNamespace()
    {

         return  (new DetermineConnection('curl'))->setConnectionNamespace();

    }

    public function setConnection()

    {
          $connection_obj =  app(ConnectionInterface::class);
         return $connection_obj->handle();
    }

    public function setDecodeResponse()
    {
        $final_response = app(DecodeResponseInterface::class);
       return $final_response->handle($this->connection_obj);

    }

}
