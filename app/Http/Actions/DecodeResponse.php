<?php


namespace App\Http\Actions;


use App\Http\Actions\Contracts\DecodeResponseInterface;

class DecodeResponse implements DecodeResponseInterface
{

   public function handle($response)

   {

       return json_decode($response,true);
   }

}
