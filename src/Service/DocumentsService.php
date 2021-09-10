<?php


namespace Dolibarr\Client\Service;


use Dolibarr\Client\Domain\Document\Document;
use Dolibarr\Client\Domain\Resource\ApiResource;
use Dolibarr\Client\Exception\ApiException;
use Dolibarr\Client\HttpClient\HttpClientInterface;
use GuzzleHttp\Exception\RequestException;
use JMS\Serializer\SerializerInterface;

/**
 * @author Rodolphe Veniel <rodolphe.veniel@gmail.com>
 */
class DocumentsService extends AbstractService
{
    /**
     * @param HttpClientInterface $httpClient
     * @param SerializerInterface $serializerInterface
     */
    public function __construct(HttpClientInterface $httpClient, SerializerInterface $serializerInterface)
    {
        parent::__construct($httpClient, $serializerInterface, new ApiResource('documents'));
    }

    /**
     * @param array $options
     *
     * @return bool|string
     *
     * @throws ApiException
     */
    protected function download(array $options = [])
    {
        try {
            return $this->httpClient
                ->get($this->resource->getResourceName() . '/download', $options)
                ->getBody()
                ->getContents()
            ;
        } catch (RequestException $exception) {
            throw new ApiException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    /**
     * @param string $lastMainDoc
     * @return Document
     * @throws ApiException
     */
    public function downloadInvoice(string $lastMainDoc)
    {
        $response = $this->download([
            "query" => [
                "modulepart"    => "facture",
                "original_file" => $lastMainDoc,
            ]
        ]);

        return $this->deserialize($response, Document::class);
    }
}
