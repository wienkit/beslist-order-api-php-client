<?php

namespace Wienkit\BeslistOrdersClient;

class BeslistOrdersClient
{
  const BASE_URL = 'https://www.beslist.nl/xml/shoppingcart/shop_orders/';

  private $testMode = false;
  private $testNumberOfOrders = 1;
  private $skipSslVerification = false;

  private $personalKey;

  private $shopId;

  private $clientId;

  /**
   * BeslistOrdersClient constructor.
   * @param $personalKey
   */
  public function __construct($personalKey, $shopId, $clientId)
  {
    $this->personalKey = $personalKey;
    $this->shopId = $shopId;
    $this->clientId = $clientId;
  }

  /**
   * Enable or disable testmode (default disabled)
   * @param $mode boolean
   */
  public function setTestMode($mode)
  {
    $this->testMode = $mode;
  }

  /**
   * The the limit of the retrieved orders (Default 1)
   * @param $total int
   */
  public function setTestModeTotalOrders($total)
  {
    $this->testNumberOfOrders = $total;
  }

  /**
   * Get BeslistShoppingCart object
   * @return BeslistShoppingCart the data
   */
  public function getShoppingCartData($fromDate, $toDate)
  {
    $apiResult = $this->makeRequest($fromDate, $toDate);
    $cart = BeslistDataParser::createEntityFromResponse('BeslistShoppingCart', $apiResult);
    return $cart;
  }

  /**
   * Makes the request to the server and processes errors
   *
   * @param string $dateTo the
   * @param string $dateFrom the
   * @return string XML
   * @throws BolPlazaClientException
   * @throws BolPlazaClientRateLimitException
   */
  protected function makeRequest($dateFrom, $dateTo)
  {
    $method = 'GET';
    $contentType = 'application/xml';
    $url = self::BASE_URL;

    $data = $this->getRequestData($dateTo, $dateFrom);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Wienk IT Beslist.nl PHP Client');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-type: ' . $contentType
    ]);

    if (in_array($method, ['POST', 'PUT', 'DELETE']) && ! is_null($data)) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    } elseif ($method == 'GET' && !empty($data)) {
        $suffix = "?";
        foreach ($data as $key => $value) {
          $suffix .= "&" . $key . '=' . $value;
        }
        curl_setopt($ch, CURLOPT_URL, $url . $suffix);
    }

    if ($this->skipSslVerification) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    }

    $result = curl_exec($ch);
    $headerInfo = curl_getinfo($ch);

    // $this->checkForErrors($ch, $headerInfo, $result);

    curl_close($ch);

    return $result;
  }

  /**
   * Get the data for the request
   *
   * @param string $dateFrom
   * @param string $dateTo
   * @return array of paramaters
   */
  protected function getRequestData($dateFrom, $dateTo)
  {
    $checksum = md5($this->personalKey . $this->clientId . $this->shopId . $dateFrom . $dateTo);
    $result = [
      'checksum' => $checksum,
      'shop_id' => $this->shopId,
      'client_id' => $this->clientId,
      'date_from' => $dateFrom,
      'date_to' => $dateTo
    ];

    if($this->testMode) {
      $result['output_type'] = 'test';
      $result['test_orders'] = $this->testNumberOfOrders;
    }

    return $result;
  }
}
