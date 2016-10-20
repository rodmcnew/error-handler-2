<?php

namespace RcmErrorHandler2\Middleware;

use RcmErrorHandler2\Http\ErrorRequest;
use RcmErrorHandler2\Http\ErrorResponse;

/**
 * Class ErrorDisplay
 *
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2016 Reliv International
 * @license   License.txt
 * @link      https://github.com/reliv
 */
interface ErrorDisplay
{
    /**
     * getName
     *
     * @return string
     */
    public function getName();

    /**
     * __invoke
     *
     * @param ErrorRequest  $request
     * @param ErrorResponse $response
     * @param callable|null $next
     *
     * @return callable
     */
    public function __invoke(ErrorRequest $request, ErrorResponse $response, callable $next = null);
}
