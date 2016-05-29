<?php

/**
 * Created by PhpStorm.
 * User: lars
 * Date: 18.03.15
 * Time: 20:00.
 */

namespace Zf3Php7Recaptcha;

return array(
    'service_manager' => array(
        'invokables' => array(
            'Zf3Php7Recaptcha\Service\ReCaptcha' => Service\ReCaptchaService::class,
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'zf3Php7ReCaptcha' => Helper\ReCaptcha::class,

        ),
    ),
);
