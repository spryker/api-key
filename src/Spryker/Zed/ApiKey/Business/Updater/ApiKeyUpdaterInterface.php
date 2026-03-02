<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ApiKey\Business\Updater;

use Generated\Shared\Transfer\ApiKeyCollectionRequestTransfer;
use Generated\Shared\Transfer\ApiKeyCollectionResponseTransfer;

interface ApiKeyUpdaterInterface
{
    public function update(ApiKeyCollectionRequestTransfer $apiKeyCollectionRequestTransfer): ApiKeyCollectionResponseTransfer;
}
