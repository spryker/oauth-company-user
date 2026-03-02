<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OauthCompanyUser\Business\CompanyUser;

use Generated\Shared\Transfer\OauthUserTransfer;

interface CompanyUserProviderInterface
{
    public function getOauthCompanyUser(OauthUserTransfer $oauthUserTransfer): OauthUserTransfer;
}
