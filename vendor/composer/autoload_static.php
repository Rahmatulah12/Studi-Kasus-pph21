<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf85623f3b9aa89a9cc293f45aa34a3dc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StudiKasus\\PPH21\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StudiKasus\\PPH21\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'StudiKasus\\PPH21\\AbstractCalculator' => __DIR__ . '/../..' . '/src/AbstractCalculator.php',
        'StudiKasus\\PPH21\\CalculatorInterface' => __DIR__ . '/../..' . '/src/CalculatorInterface.php',
        'StudiKasus\\PPH21\\FirstRuleCalculator' => __DIR__ . '/../..' . '/src/FirstRuleCalculator.php',
        'StudiKasus\\PPH21\\FourthRuleCalculator' => __DIR__ . '/../..' . '/src/FourthRuleCalculator.php',
        'StudiKasus\\PPH21\\PPH21Calculator' => __DIR__ . '/../..' . '/src/PPH21Calculator.php',
        'StudiKasus\\PPH21\\SecondRuleCalculator' => __DIR__ . '/../..' . '/src/SecondRuleCalculator.php',
        'StudiKasus\\PPH21\\ThirdRuleCalculator' => __DIR__ . '/../..' . '/src/ThirdRuleCalculator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf85623f3b9aa89a9cc293f45aa34a3dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf85623f3b9aa89a9cc293f45aa34a3dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf85623f3b9aa89a9cc293f45aa34a3dc::$classMap;

        }, null, ClassLoader::class);
    }
}
