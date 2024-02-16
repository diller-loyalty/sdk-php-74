<?php

namespace DillerAPI;

use InvalidArgumentException;
use JsonSerializable;
use Psr\Http\Message\ResponseInterface;

class AccessToken implements JsonSerializable {

    /**
     * @var string
     */
    protected string $token;

    /**
     * When token will expire.
     *
     * Please, pay attention that Diller API always returns "expires in" time,
     * which is amount of seconds before token will expire since now.
     *
     * @var int
     */
    protected int $expiresAt;

    /**
     * AccessToken constructor.
     *
     * @param string $token
     * @param int $expiresAt
     */
    public function __construct(string $token = '', int $expiresAt = 0)
    {
        $this->setToken($token);
        $this->setExpiresAt($expiresAt);
    }

    /**
     * Get token string
     *
     * @return string
     */
    public function getToken(): string {
        return $this->token;
    }

    /**
     * Set token string
     *
     * @param string $token
     *
     * @return AccessToken
     */
    public function setToken(string $token): AccessToken {
        $this->token = $token;
        return $this;
    }

    /**
     * The number of seconds remaining, from the time it was requested, before the token will expire.
     *
     * @return int seconds
     */
    public function getExpiresIn(): int {
        return $this->expiresAt - time();
    }

    /**
     * Dynamically typecast token object into string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getToken();
    }

    /**
     * Get Unix epoch time when token will expire
     *
     * @return int
     */
    public function getExpiresAt(): int {
        return $this->expiresAt;
    }

    /**
     * Set Unix epoch time when token will expire
     *
     * @param int $expiresAt seconds, unix time
     *
     * @return AccessToken
     */
    public function setExpiresAt(int $expiresAt): AccessToken {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * Convert API response into AccessToken
     *
     * @param ResponseInterface $response
     *
     * @return self
     */
    public static function fromResponse(ResponseInterface $response): AccessToken {
        return static::fromResponseArray(
                DillerAPI::responseToArray($response)
        );
    }

    /**
     * Instantiate access token object
     *
     * @param $responseArray
     *
     * @return AccessToken
     */
    public static function fromResponseArray($responseArray): AccessToken {
        if (!is_array($responseArray)) {
            throw new InvalidArgumentException(
                    'Argument is not array'
            );
        }
        if (!isset($responseArray['access_token'])) {
            throw new InvalidArgumentException(
                    'Access token is not available'
            );
        }
        if (!isset($responseArray['expires_in'])) {
            throw new InvalidArgumentException(
                    'Access token expiration date is not specified'
            );
        }
        return new static(
                $responseArray['access_token'],
            $responseArray['expires_in'] + time()
        );
    }

    /**
     * Specify data format for json_encode()
     */
    public function jsonSerialize(): array {
        return [
                'token' => $this->getToken(),
            'expiresAt' => $this->getExpiresAt(),
        ];
    }
}