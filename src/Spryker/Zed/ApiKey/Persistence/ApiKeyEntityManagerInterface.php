<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ApiKey\Persistence;

use Generated\Shared\Transfer\ApiKeyTransfer;

interface ApiKeyEntityManagerInterface
{
    public function createApiKey(ApiKeyTransfer $apiKeyTransfer): ApiKeyTransfer;

    public function updateApiKey(ApiKeyTransfer $apiKeyTransfer): ApiKeyTransfer;

    /**
     * @param array<int> $apiKeyIds
     *
     * @return void
     */
    public function deleteApiKeys(array $apiKeyIds): void;
}
