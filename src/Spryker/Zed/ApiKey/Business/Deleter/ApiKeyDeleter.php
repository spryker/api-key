<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ApiKey\Business\Deleter;

use Generated\Shared\Transfer\ApiKeyCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ApiKeyCollectionResponseTransfer;
use Spryker\Zed\ApiKey\Business\Mapper\ApiKeyMapper;
use Spryker\Zed\ApiKey\Persistence\ApiKeyEntityManagerInterface;

class ApiKeyDeleter implements ApiKeyDeleterInterface
{
    /**
     * @var \Spryker\Zed\ApiKey\Persistence\ApiKeyEntityManagerInterface
     */
    protected ApiKeyEntityManagerInterface $entityManager;

    /**
     * @var \Spryker\Zed\ApiKey\Business\Mapper\ApiKeyMapper
     */
    protected ApiKeyMapper $mapper;

    public function __construct(
        ApiKeyEntityManagerInterface $entityManager,
        ApiKeyMapper $mapper
    ) {
        $this->entityManager = $entityManager;
        $this->mapper = $mapper;
    }

    public function delete(ApiKeyCollectionDeleteCriteriaTransfer $apiKeyCollectionDeleteCriteriaTransfer): ApiKeyCollectionResponseTransfer
    {
        if ($apiKeyCollectionDeleteCriteriaTransfer->getApiKeyIds() === []) {
            return new ApiKeyCollectionResponseTransfer();
        }

        $this->entityManager->deleteApiKeys($apiKeyCollectionDeleteCriteriaTransfer->getApiKeyIds());

        return $this->mapper->mapApiKeyIdsToApiKeyCollectionResponseTransfer(
            $apiKeyCollectionDeleteCriteriaTransfer,
            new ApiKeyCollectionResponseTransfer(),
        );
    }
}
