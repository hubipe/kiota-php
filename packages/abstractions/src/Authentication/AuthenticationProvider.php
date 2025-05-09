<?php
namespace Microsoft\Kiota\Abstractions\Authentication;

use Microsoft\Kiota\Abstraction\Promise\Promise;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Interface AuthenticationProvider
 *
 * Authenticates the application request
 *
 * @package Microsoft\Kiota\Abstractions\Authentication
 * @copyright 2022 Microsoft Corporation
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://developer.microsoft.com/graph
 */
interface AuthenticationProvider {
    /**
     * @param RequestInformation $request
     * @param array<string, mixed> $additionalAuthenticationContext
     * @return Promise<RequestInformation>
     */
    public function authenticateRequest(
        RequestInformation $request,
        array $additionalAuthenticationContext = []
    ): Promise;
}
