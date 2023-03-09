<?php

use Illuminate\Support\Str;

if (! function_exists('packageName')) {
    /**
     * Package name.
     *
     * @throws Exception
     */
    function packageName(string $package = 'package-generator'): mixed
    {
        $packageGenerator = app('package-generator');

        return match ($package) {
            'package-generator' => $packageGenerator->packageName(),
            default => throw new Exception(
                message: $package.' is not supported yet.',
            ),
        };
    }
}

if (! function_exists('packageVersion')) {
    /**
     * Package version.
     *
     * @throws Exception
     */
    function packageVersion(string $package = 'package-generator'): mixed
    {
        $packageGenerator = app('package-generator');

        return match ($package) {
            'package-generator' => $packageGenerator->packageVersion(),
            default => throw new Exception(
                message: $package.' is not supported yet.',
            ),
        };
    }
}

if (! function_exists('configValue')) {
    /**
     * Config value.
     *
     * @throws Exception
     */
    function configValue(string $configKeyName, string $package = 'package-generator'): mixed
    {
        $packageGenerator = app('package-generator');

        $configKeyName = Str::of($configKeyName)->lower()->snake();

        return match ($package) {
            'package-generator' => $packageGenerator->configValue($configKeyName),
            default => throw new Exception(
                message: $package.' is not supported yet.',
            ),
        };
    }
}
