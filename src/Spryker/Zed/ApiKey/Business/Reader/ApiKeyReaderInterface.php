<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ApiKey\Business\Reader;

use Generated\Shared\Transfer\ApiKeyCollectionTransfer;
use Generated\Shared\Transfer\ApiKeyCriteriaTransfer;

interface ApiKeyReaderInterface
{
    public function getApiKeyCollection(ApiKeyCriteriaTransfer $apiKeyCriteriaTransfer): ApiKeyCollectionTransfer;
}
