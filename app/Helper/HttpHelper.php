<?php


namespace App\Helper;


class HttpHelper
{
    public static function sendRequest($url, $data, $type, $header = null)
    {
        $headers = [
            "cache-control: no-cache",
            "accept: application/json",
            "content-type: application/json",
        ];

        try {
            if ($header) {
                if (is_array($header)) {
                    $headers = array_merge($headers, $header);
                } else {
                    $headers[] = $header;
                }
            }

            $jsonData = json_encode($data);
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSLKEYPASSWD => '',
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 600,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $type,
                CURLOPT_POSTFIELDS => "{$jsonData}",
                CURLOPT_HTTPHEADER => $headers
            ));
            $resp = curl_exec($curl);
            if ($resp === false) {
                return array('curl_error' => curl_error($curl), 'curerrno' => curl_errno($curl));
            }
            curl_close($curl);
            return json_decode($resp);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }

}
