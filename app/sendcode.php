<?php
    namespace APP;
    class sendcode{
        public static function sendcode($phone){
            $code = rand(1111,9999);
            $nexmo = app('Nexmo\Client');
            $nexmo->message()->send([
                'to'=> '+880' . (init) . $phone,
                'from' => '' ,
                'text'  => 'verify code' . $code,
            ]);


        }
    }



?>
