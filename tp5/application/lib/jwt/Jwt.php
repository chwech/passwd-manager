<?php
namespace app\lib\jwt;

use Lcobucci\JWT\Builder;
use Lcobucci\JWT\ValidationData;

class Jwt 
{
    public static function buildToken()
    {
        $token = (new Builder())->setIssuer('http://example.com') // Configures the issuer (iss claim)
            ->setAudience('http://example.org') // Configures the audience (aud claim)
            ->setId('4f1g23a12aa', true) // Configures the id (jti claim), replicating as a header item
            ->setIssuedAt(time()) // Configures the time that the token was issue (iat claim)
            ->setNotBefore(time() + 60) // Configures the time that the token can be used (nbf claim)
            ->setExpiration(time() + 3600) // Configures the expiration time of the token (exp claim)
            ->set('uid', 1) // Configures a new claim, called "uid"
            ->getToken(); // Retrieves the generated token

        // $token->getHeaders(); // Retrieves the token headers
        // $token->getClaims(); // Retrieves the token claims

        // echo $token->getHeader('jti'); // will print "4f1g23a12aa"
        // echo $token->getClaim('iss'); // will print "http://example.com"
        // echo $token->getClaim('uid'); // will print "1"
        return $token; // The string representation of the object is a JWT string (pretty easy, right?)
    }

    public static function validateToken($token)
    {

        $data = new ValidationData(); // It will use the current time to validate (iat, nbf and exp)
        $data->setIssuer('http://example.com');
        $data->setAudience('http://example.org');
        $data->setId('4f1g23a12aa');
        
        var_dump($token->validate($data)); // false, because we created a token that cannot be used before of `time() + 60`
        
        $data->setCurrentTime(time() + 60); // changing the validation time to future
        
        var_dump($token->validate($data)); // true, because validation information is equals to data contained on the token
        
        $data->setCurrentTime(time() + 4000); // changing the validation time to future
        
        var_dump($token->validate($data)); // false, because token is expired since current time is greater than exp
    }
}