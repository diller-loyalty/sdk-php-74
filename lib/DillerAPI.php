<?php

namespace DillerAPI;

use DillerAPI\Api\CouponsApi;
use DillerAPI\Api\InvitationsApi;
use DillerAPI\Api\MembersApi;
use DillerAPI\Api\MembershipLevelApi;
use DillerAPI\Api\StampCardsApi;
use DillerAPI\Api\StoresApi;
use DillerAPI\Api\TransactionsApi;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;

class DillerAPI extends Configuration {
    private string $store_uid;
    private string $api_key;

    private Configuration $config;

    public StoresApi $Stores;
    public MembersApi $Members;
    public MembershipLevelApi $MembershipLevel;
    public CouponsApi $Coupons;
    public StampCardsApi $StampCards;
    public InvitationsApi $Invitations;
    public TransactionsApi $Transactions;

    public function __construct($store_uid, $api_key, $configs = null) {
        $this->store_uid = $store_uid;
        $this->api_key = $api_key;
        $this->config = $configs ?? clone Configuration::getDefaultConfiguration();

        // get access token (from temp or generate a new one)
        $this->getAccessToken();

        $this->Stores = new StoresApi(new GuzzleClient(),$this->config);
        $this->Members = new MembersApi(new GuzzleClient(),$this->config);
        $this->MembershipLevel = new MembershipLevelApi(new GuzzleClient(),$this->config);
        $this->Coupons = new CouponsApi(new GuzzleClient(),$this->config);
        $this->StampCards = new StampCardsApi(new GuzzleClient(),$this->config);
        $this->Invitations = new InvitationsApi(new GuzzleClient(),$this->config);
        $this->Transactions = new TransactionsApi(new GuzzleClient(),$this->config);
    }

    public function getStoreUid(): string {
        return $this->store_uid;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return bool
     */
    public function setAccessToken($accessToken): bool {
        if (is_object($accessToken) && !$accessToken instanceof AccessToken) {
            $accessToken = new AccessToken($accessToken->token, $accessToken->expiresAt);
        }
        if (is_string($accessToken)) {
            $accessToken = new AccessToken($accessToken);
        }
        if ($accessToken instanceof AccessToken) {
            $this->config->setAccessToken($accessToken->getToken());
            return true;
        }
        throw new InvalidArgumentException('$accessToken must be instance of \DillerAPI\AccessToken class');
    }

    public function getAccessToken(){
        // Get access token from temp
        if($access_token = $this->getAccessTokenFromTempFile()){
            $this->setAccessToken($access_token);
        }

        // Check if access token exists and if it is valid
        if(!$this->accessToken instanceof AccessToken || $this->accessToken->getExpiresIn() < 0){
            $this->unsetAccessTokenFromTemp();

            $client = new GuzzleClient(["base_uri" => $this->config->getHost()]);
            try {
                $response = $client->post("/connect/token", array(
                    'headers' => array(
                        'Authorization' => 'Basic ' . base64_encode("$this->store_uid:$this->api_key"),
                        'Content-Type'      => 'application/x-www-form-urlencoded',
                        'Accept'            => 'application/json',
                    ),
                    'form_params' => array(
                        'grant_type'    => 'client_credentials',
                        'scope'         => 'api.retailer'
                    )
                ));

                $this->setAccessToken(
                    AccessToken::fromResponse($response)
                );
                $this->setAccessTokenToTemp($this->accessToken);
            } catch(RequestException $e){
                $this->accessToken = false;
            }
        }
        return $this->accessToken;
    }

    /**
     * Convert API response into Array
     *
     * @param ResponseInterface $response
     *
     * @return array
     */
    public static function responseToArray(ResponseInterface $response): array {
        return \GuzzleHttp\json_decode(
            $response->getBody()->getContents(),
            true
        );
    }

    /**
     * @return mixed
     */
    private function getAccessTokenFromTempFile() {
        $temp_files = scandir($this->config->getTempFolderPath());
        foreach ($temp_files as $filename) {
            if (strpos($filename, $this->getStoreUid()) !== false) {
                $file = $this->config->getTempFolderPath()."/".$filename;
                if(file_exists($file) && filesize($file) > 0){
                    $handle = fopen($file, "r");
                    if($access_token = fread($handle, filesize($file))){
                        fclose($handle);
                        return json_decode($access_token);
                    }
                }
            }
        }
        return false;
    }

    private function setAccessTokenToTemp(string $accessToken) {
        $tmp_access_token_file = tempnam($this->config->getTempFolderPath(), $this->getStoreUid()."_");
        $handle = fopen($tmp_access_token_file, "w");
        fwrite($handle, json_encode($accessToken));
        fclose($handle);
    }

    private function unsetAccessTokenFromTemp(){
        foreach (glob($this->config->getTempFolderPath()."/".$this->getStoreUid()."*") as $filename) {
            unlink($filename);
        }
    }
}