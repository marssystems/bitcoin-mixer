<?php

/**
 * @version 1.5
 * @author bitmixbiz@protonmail.com
 * @copyright BitMix.Biz
 */

namespace App;

class Exception extends \Exception
{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null)
    {
        parent::__construct(sprintf('BitMix Exception occurred: %s', $message), $code, $previous);
    }
}

class Order
{
    private $data;

    public function __construct(Response $object, $fromGetRequest = false)
    {
        $this->data = $fromGetRequest ? $object->getData() : (object)['order' => $object->getData()];
    }

    public function isCreated(): bool
    {
        return !isset($this->data->order->errors);
    }

    public function getErrors(): array
    {
        return (array) $this->data->order->errors;
    }

    public function getId(): string
    {
        return $this->data->order->id;
    }

    public function getInputAddress(): string
    {
        return $this->data->order->input_address;
    }

    public function getCode(): string
    {
        return $this->data->order->code;
    }

    public function getAll(): \stdClass
    {
        return $this->data;
    }
}

interface Response
{
    /**
     * @return string|\stdClass
     */
    public function getData();

    public function isObject(): bool;

    public function isString(): bool;
}

class ObjectResponse implements Response
{
    private $return;

    public function __construct(\stdClass $object)
    {
        $this->return = $object;
    }

    public function isObject(): bool
    {
        return true;
    }

    public function isString(): bool
    {
        return false;
    }

    public function getData(): \stdClass
    {
        return $this->return;
    }
}

class StringResponse implements Response
{
    private $return;

    public function __construct(string $string)
    {
        $this->return = $string;
    }

    public function isObject(): bool
    {
        return false;
    }

    public function isString(): bool
    {
        return true;
    }

    public function getData(): string
    {
        return $this->return;
    }

    public function __toString()
    {
        return $this->return;
    }
}

class BitMix
{
    private $refKey = null, $fee = 2., $coin = 'bitcoin', $delay = [180], $proxy, $code, $randomize = 1;
    private $apiKey = null, $shopId = 0;
    private $receiveAddresses = [];
    private $distribution = [100];
    private $useWithTor = false;

    private $apiHost = 'https://bitmix.biz/api';

    /**
     * BitMix constructor.
     * @param $coin
     * @param $code
     * @param string $refKey
     * @throws Exception
     */
    public function __construct(string $coin, string $code, string $refKey = null)
    {
        if (!extension_loaded('curl')) {
            throw new Exception('CURL not loaded');
        }
        $this->coin = $coin;
        $this->code = $code;
        $this->refKey = $refKey;
    }

    /**
     * @param string $proxy
     * @return BitMix
     */
    public function switchToTor(string $proxy): BitMix
    {
        $this->useWithTor = true;
        $this->setProxy($proxy);
        $this->setApiHost('http://bitmixbizymuphkc.onion/api');
        return $this;
    }

    /**
     * @param mixed $proxy
     * @return $this
     */
    public function setProxy(string $proxy): BitMix
    {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefKey(): string
    {
        return $this->refKey;
    }

    /**
     * @return float
     */
    public function getFee(): float
    {
        return $this->fee;
    }

    /**
     * @param mixed $fee
     * @return BitMix
     */
    public function setFee(float $fee): BitMix
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return BitMix
     */
    public function setApiKey(string $apiKey): BitMix
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return array
     */
    public function getDistribution(): array
    {
        return $this->distribution;
    }

    /**
     * @param array $distribution
     * @return BitMix
     */
    public function setDistribution(array $distribution): BitMix
    {
        $this->distribution = $distribution;
        return $this;
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     * @return BitMix
     */
    public function setShopId(int $shopId): BitMix
    {
        $this->shopId = $shopId;
        return $this;
    }

    /**
     * @param float $min
     * @param float $max
     * @return $this
     * @throws \Exception
     */
    public function generateRandomFee(float $min = 0.4, float $max = 4): BitMix
    {
        $this->fee = \random_int($min * 1000, $max * 1000) / 1000;
        return $this;
    }

    /**
     * @return array
     */
    public function getReceiveAddresses(): array
    {
        return $this->receiveAddresses;
    }

    /**
     * @param string|array $receiveAddresses
     * @return BitMix
     */
    public function setReceiveAddresses($receiveAddresses): BitMix
    {
        $this->receiveAddresses = (array)$receiveAddresses;
        return $this;
    }

    /**
     * @return array
     */
    public function getDelay(): array
    {
        return $this->delay;
    }

    /**
     * @param int|array $delay
     * @return BitMix
     */
    public function setDelay($delay): BitMix
    {
        $this->delay = (array)$delay;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRandomize(): bool
    {
        return $this->randomize;
    }

    /**
     * @param bool $randomize
     * @return BitMix
     */
    public function setRandomize(bool $randomize): BitMix
    {
        $this->randomize = $randomize;
        return $this;
    }

    /**
     * @return string
     */
    public function getProxy(): string
    {
        return $this->proxy;
    }

    /**
     * @return string
     */
    public function getApiHost(): string
    {
        return $this->apiHost;
    }

    /**
     * @param string $apiHost
     * @return BitMix
     */
    public function setApiHost(string $apiHost): BitMix
    {
        $this->apiHost = $apiHost;
        return $this;
    }

    /**
     * @return Order
     * @throws Exception
     */
    public function createOrder(): Order
    {
        $data = [
            'tax' => $this->fee,
            'delay' => $this->delay,
            'code' => $this->code,
            'coin' => $this->coin,
            'address' => $this->receiveAddresses,
            'distribution' => array_map(function ($distribution) {
                return $distribution * 100;
            }, $this->distribution),
            'randomize' => (int)$this->randomize
        ];
        if ($this->refKey) {
            $data['ref'] = $this->refKey;
        }

        if ($this->getShopId() > 0) {
            if (\is_null($this->getApiKey()))
                throw new Exception('API key not set for shop!');

            $data['shop_id'] = $this->getShopId();
            $data['key'] = $this->getApiKey();
        }
        return new Order($this->sendRequest('create', true, $data, true));
    }

    /**
     * @param string $method
     * @param bool $isPost
     * @param bool $data
     * @param bool $isJson
     * @return Response
     * @throws Exception
     */
    private function sendRequest($method, $isPost = false, $data = false, $isJson = true): Response
    {
        if ($curl = curl_init()) {
            curl_setopt($curl, CURLOPT_URL, $this->apiHost . '/order/' . $method);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            if ($isPost) {
                curl_setopt($curl, CURLOPT_POST, true);
            }
            if ($data) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            }

            if ($this->useWithTor && $this->proxy) {
                curl_setopt($curl, CURLOPT_PROXY, $this->proxy);
                curl_setopt($curl, CURLOPT_PROXYTYPE, 7);
            }

            curl_setopt($curl, CURLOPT_HTTPHEADER, ['Accept: application/json']);

            $data = curl_exec($curl);
            curl_close($curl);
            if ($isJson) {
                $object = json_decode($data);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    throw new Exception('Failed to decode response data: ' . $data);
                }

                return new ObjectResponse($object);
            }
            return new StringResponse($data);
        }

        throw new Exception('Failed to init CURL!');
    }

    /**
     * @param $id
     * @return Order
     * @throws Exception
     */
    public function getOrder(string $id): Order
    {
        return new Order($this->sendRequest('view/' . $id, false, false, true), true);
    }

    /**
     * @param $id
     * @return StringResponse
     * @throws Exception
     */
    public function deleteOrder(string $id): Response
    {
        return $this->sendRequest('delete', true, ['id' => $id]);
    }

    /**
     * @param $id
     * @return StringResponse
     * @throws Exception
     */
    public function getLetter(string $id): Response
    {
        return $this->sendRequest('letter/' . $id, false, false, false);
    }
}

// // create an instance with unique code
// $mixer = new \BitMix\BitMix('bitcoin', str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT));

// $mixer
//     // set delay in minutes for each address
//     ->setDelay([180, 120])
//     // set random fee between 0.5 and 3.5
//     ->generateRandomFee(.5, 3.5)
//     // set distribution percentage
//     ->setDistribution([49.5, 50.5])
//     // set receive addresses
//     ->setReceiveAddresses(['1HJMFd8skGcw3jcgPy6E3RsuE5ofG3owD9', '1BUjTvV3w5bbyABXfCdsNCcDqvCozNAh9w']);


// // if you wanna use TOR mirror with API
// //$mixer->switchToTor('192.168.0.1:9050');

// $order = $mixer->createOrder();
// if(!$order->isCreated())
//     print_r($order->getErrors());
// else {
//     print_r($order->getAll());
//     print_r($mixer->getOrder($order->getId())->getAll());
//     print_r((string)$mixer->getLetter($order->getId()));
//     //print_r($mixer->deleteOrder($order->id)->getData());
// }