<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;
use Symfony\Contracts\Cache\CacheInterface;

class StepInfoCommand extends Command
{
    protected static $defaultName = 'app:step:info';
    private $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Show tag Git in the commit now')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $process = new Process(['git', 'tag', '-l', '--points-at', 'HEAD']);
        $process->mustRun();
        $output->write($process->getOutput());
        return 0;
    }
}
