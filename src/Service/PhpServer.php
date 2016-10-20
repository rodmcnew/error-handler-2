<?php

namespace RcmErrorHandler2\Service;

/**
 * Class PhpServer
 *
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2016 Reliv International
 * @license   License.txt
 * @link      https://github.com/reliv
 */
class PhpServer
{
    /**
     * getRequestUri
     *
     * @return string
     */
    public static function getRequestUri()
    {
        // @todo filter_input( INPUT_SERVER, 'REQUEST_URI' )
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * getRequestMethod
     *
     * @return mixed
     */
    public static function getRequestMethod()
    {
        // @todo filter_input( INPUT_SERVER, 'REQUEST_METHOD' )
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * getRequestBody
     *
     * @return resource
     */
    public static function getRequestBody()
    {
        $rawInput = fopen('php://input', 'r');
        $tempStream = fopen('php://temp', 'r+');
        stream_copy_to_stream($rawInput, $tempStream);
        rewind($tempStream);

        return $tempStream;
    }

    /**
     * getRequestHeaders
     *
     * @return array|false
     */
    public static function getRequestHeaders()
    {
        if (function_exists('getallheaders')) {
            $headers = getallheaders();
        } else {
            $headers = [];
            foreach ($_SERVER as $name => $value) {
                if (substr($name, 0, 5) == 'HTTP_') {
                    $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))]
                        = $value;
                }
            }

            return $headers;
        }

        if ($headers === false) {
            $headers = [];
        }

        return $headers;
    }

    /**
     * setResponseHeaders
     *
     * @param $headers
     *
     * @return void
     */
    public static function setResponseHeaders($headers)
    {
        foreach ($headers as $name => $headerValues) {
            $header = $name . ": " . implode(", ", $headerValues);
            header($header);
        }
    }
}
