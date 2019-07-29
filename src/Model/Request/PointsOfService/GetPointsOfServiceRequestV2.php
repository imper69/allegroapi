<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:52
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\PointsOfService;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;
use function GuzzleHttp\Psr7\build_query;

class GetPointsOfServiceRequestV2 extends Request
{
    use RequestTrait;

    public function __construct(Token $token)
    {
        parent::__construct(
            'GET',
            "/points-of-service?" . build_query(['seller.id' => $token->getClaim('user_name')]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}