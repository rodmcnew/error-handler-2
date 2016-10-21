<?php
/**
 * dependencies.php
 */
return [
    'invokables' => [
        \Zend\Expressive\Helper\BodyParams\BodyParamsMiddleware::class
        => \Zend\Expressive\Helper\BodyParams\BodyParamsMiddleware::class,
    ],
    'factories' => [
        /**
         * Config
         */
        \RcmErrorHandler2\Core\DefaultFormatterConfig::class
        => \RcmErrorHandler2\Factory\DefaultFormatterConfigFactory::class,
        \RcmErrorHandler2\Core\ObserverConfig::class
        => \RcmErrorHandler2\Factory\ObserverConfigFactory::class,
        \RcmErrorHandler2\Core\RcmErrorHandler2Config::class
        => \RcmErrorHandler2\Factory\RcmErrorHandler2ConfigFactory::class,

        /**
         * Handlers
         */
        \RcmErrorHandler2\Handler\Error::class
        => \RcmErrorHandler2\Factory\HandlerErrorFactory::class,
        \RcmErrorHandler2\Handler\Throwable::class
        => \RcmErrorHandler2\Factory\HandlerThrowableFactory::class,

        /**
         * Formatter Services
         */
        // Default
        \RcmErrorHandler2\Formatter\Formatter::class
        => \RcmErrorHandler2\Factory\HtmlFormatterFactory::class,
        \RcmErrorHandler2\Formatter\HtmlFormatter::class
        => \RcmErrorHandler2\Factory\HtmlFormatterFactory::class,
        // Default
        \RcmErrorHandler2\Formatter\SummaryFormatter::class
        => \RcmErrorHandler2\Factory\HtmlSummaryFormatterFactory::class,
        // Default
        \RcmErrorHandler2\Formatter\TraceFormatter::class
        => \RcmErrorHandler2\Factory\HtmlTraceFormatterFactory::class,

        /**
         * Observers
         */
        \RcmErrorHandler2\Log\LoggerObserver::class
        => \RcmErrorHandler2\Factory\LoggerObserverFactory::class,

        /**
         * Middleware
         */
        \RcmErrorHandler2\Middleware\ErrorDisplayFinalBasic::class
        => \RcmErrorHandler2\Factory\ErrorDisplayFinalBasicFactory::class,
        \RcmErrorHandler2\Middleware\ErrorDisplayFinalDump::class
        => \RcmErrorHandler2\Factory\ErrorDisplayFinalDumpFactory::class,
        \RcmErrorHandler2\Middleware\ErrorDisplayFormatted::class
        => \RcmErrorHandler2\Factory\ErrorDisplayFormattedFactory::class,
        \RcmErrorHandler2\Middleware\ErrorDisplayJson::class
        => \RcmErrorHandler2\Factory\ErrorDisplayJsonFactory::class,
        \RcmErrorHandler2\Middleware\FinalHandler::class
        => \RcmErrorHandler2\Factory\MiddlewareFinalHandlerFactory::class,
        \RcmErrorHandler2\Middleware\PhpErrorOverride::class
        => \RcmErrorHandler2\Factory\MiddlewarePhpErrorOverrideFactory::class,

        /**
         * Services
         */
        \RcmErrorHandler2\Service\PhpErrorOverride::class
        => \RcmErrorHandler2\Factory\ServicePhpErrorOverrideFactory::class,
    ],
];