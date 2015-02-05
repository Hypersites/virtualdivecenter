<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 05/02/15
 * Time: 09:32
 */

namespace AppBundle\Command;

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand;


class CreateCommand extends GenerateDoctrineCrudCommand
{
    protected function configure()
    {
        $this->setName('divecenter:generate:crud')
            ->setDescription('Generate a Crud using the application template')
            ->setDefinition(array(
                new InputArgument('entity', InputArgument::OPTIONAL, 'The entity class name to initialize (shortcut notation)'),
                new InputOption('entity', '', InputOption::VALUE_REQUIRED, 'The entity class name to initialize (shortcut notation)'),
                new InputOption('route-prefix', '', InputOption::VALUE_REQUIRED, 'The route prefix'),
                new InputOption('with-write', '', InputOption::VALUE_NONE, 'Whether or not to generate create, new and delete actions'),
                new InputOption('format', '', InputOption::VALUE_REQUIRED, 'Use the format for configuration files (php, xml, yml, or annotation)', 'annotation'),
                new InputOption('overwrite', '', InputOption::VALUE_NONE, 'Do not stop the generation if crud controller already exist, thus overwriting all generated files'),
            ));
    }


}