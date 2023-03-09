<?php

namespace JrAhmet\PackageGenerator;

class PackageGenerator
{
    /**
     * The package name.
     */
    private string $packageName = 'package-generator';

    /**
     * The package version.
     */
    private string $packageVersion = 'v0.0.0';

    /**
     * Get the name of the package.
     */
    public function packageName(): string
    {
        return $this->packageName;
    }

    /**
     * Get the version number of the package.
     */
    public function packageVersion(): string
    {
        return $this->packageVersion;
    }

    /**
     * The config value.
     */
    public function configValue(string $configKeyName)
    {
        return config($this->packageName().'.'.$configKeyName);
    }
}
