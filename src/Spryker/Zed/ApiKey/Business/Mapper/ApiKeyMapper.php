<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ApiKey\Business\Mapper;

use Generated\Shared\Transfer\ApiKeyCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ApiKeyCollectionResponseTransfer;
use Generated\Shared\Transfer\ApiKeyTransfer;

class ApiKeyMapper
{
    public function mapApiKeyIdsToApiKeyCollectionResponseTransfer(
        ApiKeyCollectionDeleteCriteriaTransfer $apiKeyCollectionDeleteCriteriaTransfer,
        ApiKeyCollectionResponseTransfer $apiKeyCollectionResponseTransfer
    ): ApiKeyCollectionResponseTransfer {
        foreach ($apiKeyCollectionDeleteCriteriaTransfer->getApiKeyIds() as $idApiKey) {
            $apiKeyCollectionResponseTransfer->addApiKey(
                (new ApiKeyTransfer())
                    ->setIdApiKey($idApiKey),
            );
        }

        return $apiKeyCollectionResponseTransfer;
    }
}
