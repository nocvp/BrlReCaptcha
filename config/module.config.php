<?php

/**
 * Created by PhpStorm.
 * User: lars
 * Date: 18.03.15
 * Time: 20:00.
 */

return array(

    'service_manager' => array(
        'invokeables' => array(
            'Zf3Php7Recaptcha\Service\ReCaptcha' => 'Zf3Php7Recaptcha\Service\ReCaptchaService',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'zf3Php7ReCaptcha' => 'Zf3Php7Recaptcha\Helper\ReCaptcha',

        ),
    ),
);
