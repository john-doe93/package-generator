<?php

namespace JrAhmet\PackageGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-generator:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the package-generator components and resources';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // started..
        $this->writeln('------------------------------------');

        // configFile(s)..
        $this->configFiles();

        // info..
        $this->info('packageGenerator scaffolding installed successfully.');

        // comment..
        $this->comment('The installation process was carried out successfully. Please visit your web page.');

        // finished..
        $this->writeln('------------------------------------');
    }

    /**
     * Write ln.
     */
    protected function writeln(string $line): void
    {
        echo $line.PHP_EOL;
    }

    /**
     * Config file(s).
     */
    protected function configFiles(): void
    {
        (new Filesystem)->copy(__DIR__.'/../../config/package-generator.php', config_path('package-generator.php'));

        $this->writeln('Config file copy completed successfully.');
    }
}
