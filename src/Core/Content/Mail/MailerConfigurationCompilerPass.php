<?php declare(strict_types=1);

namespace Shopware\Core\Content\Mail;

use Shopware\Core\Content\Mail\Service\MailerTransportLoader;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @package core
 *
 * @interal
 */
class MailerConfigurationCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        $container->getDefinition('mailer.default_transport')->setFactory([
            new Reference(MailerTransportLoader::class),
            'fromString',
        ]);

        $container->getDefinition('mailer.transports')->setFactory([
            new Reference(MailerTransportLoader::class),
            'fromStrings',
        ]);
    }
}
