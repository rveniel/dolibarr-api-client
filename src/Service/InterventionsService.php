<?php


namespace Dolibarr\Client\Service;


use Dolibarr\Client\Domain\Interventions\Intervention;
use Dolibarr\Client\Domain\Resource\ApiResource;
use Dolibarr\Client\Exception\ApiException;
use Dolibarr\Client\HttpClient\HttpClientInterface;
use JMS\Serializer\SerializerInterface;

class InterventionsService extends AbstractService
{
    /**
     * @param HttpClientInterface $httpClient
     * @param SerializerInterface $serializerInterface
     */
    public function __construct(HttpClientInterface $httpClient, SerializerInterface $serializerInterface)
    {
        parent::__construct($httpClient, $serializerInterface, new ApiResource('interventions'));
    }

    /**
     * @param int $id
     *
     * @return Intervention
     *
     * @throws ApiException
     */
    public function getById(int $id)
    {
        $response = parent::get($id);

        return $this->deserialize($response, Intervention::class);
    }

    /**
     * @param int $thirdPartyId
     * @param int $limit
     * @param int $page
     * @param string $sortField
     * @param bool $sortAsc
     *
     * @return Intervention[]
     *
     * @throws ApiException
     */
    public function getByThirdParty(int $thirdPartyId, int $limit = 100, int $page = 0, $sortField = "t.rowid", $sortAsc = true)
    {
        $response = parent::getList([
            "query" => [
                "sortfield"      => $sortField,
                "sortorder"      => $sortAsc ? "ASC" : "DESC",
                "limit"          => $limit,
                "page"           => $page,
                "thirdparty_ids" => $thirdPartyId,
            ]
        ]);

        return $this->deserializeCollection($response, Intervention::class);
    }
}
