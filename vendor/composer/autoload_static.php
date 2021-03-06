<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6acf70f55d73c13cf3415050eb505122
{
    public static $files = array (
        'f3aa7b7144782f87569c3edc35345318' => __DIR__ . '/../..' . '/constants.php',
        '2103505bbe7570df6ee41c7999dc0165' => __DIR__ . '/../..' . '/admin/ajax.php',
        'fbd22bd5a67ba99bf16533e6fa1ac7fd' => __DIR__ . '/../..' . '/includes/options.php',
        '5c12ad85804d852690b7282a337a7c27' => __DIR__ . '/../..' . '/includes/qr.php',
        'a4047f4ec7d53dbfbc2ce3bdcedd8774' => __DIR__ . '/../..' . '/includes/functions.php',
        '912fe4d7a122084dc571e63e99c4671d' => __DIR__ . '/../..' . '/includes/shortcodes.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'StellarCanna_Munchies\\Admin\\Init' => __DIR__ . '/../..' . '/admin/class-init.php',
        'StellarCanna_Munchies\\Includes\\Assets' => __DIR__ . '/../..' . '/includes/class-assets.php',
        'StellarCanna_Munchies\\Includes\\Elementor' => __DIR__ . '/../..' . '/includes/class-elementor.php',
        'StellarCanna_Munchies\\Includes\\Init' => __DIR__ . '/../..' . '/includes/class-init.php',
        'StellarCanna_Munchies\\Includes\\Monkey_Treat_Widget' => __DIR__ . '/../..' . '/includes/class-stellarcanna-munchies-widget.php',
        'StellarCanna_Munchies\\QR8BitByte' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRAlphaNum' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRBitBuffer' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRCode' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRData' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRKanji' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRMath' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRNumber' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRPolynomial' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRRSBlock' => __DIR__ . '/../..' . '/includes/qr.php',
        'StellarCanna_Munchies\\QRUtil' => __DIR__ . '/../..' . '/includes/qr.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6acf70f55d73c13cf3415050eb505122::$classMap;

        }, null, ClassLoader::class);
    }
}
