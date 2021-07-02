<?php


namespace App\Http\Actions;


use App\Http\Actions\Contracts\GetResponseInterface;

class GetResponse implements GetResponseInterface
{
    /**
     * @var bool|string
     */
    private $response;

    public function handle()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://elasterfoam.com/blog/wp-json/wp/v2/posts',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $this->response = curl_exec($curl);

        curl_close($curl);
        return $this->response;

    }
}
