<?php

declare(strict_types=1);

namespace Drago\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Installer\PackageEvent;
use Drago\Installer;


final class Plugin implements PluginInterface, EventSubscriberInterface
{
	public function activate(Composer $composer, IOInterface $io): void
	{
		// TODO: Implement activate() method.
	}


	public static function getSubscribedEvents(): array
	{
		return [
			'post-package-install' => 'onPackageInstall',
			'post-package-update'  => 'onPackageInstall',
		];
	}


	public function onPackageInstall(PackageEvent $event): void
	{
		$package = $event->getOperation()->getPackage();
		if ($package->getName() === 'drago-ex/project-db') {
			Installer::install();
		}
	}


	public function deactivate(Composer $composer, IOInterface $io)
	{
		// TODO: Implement deactivate() method.
	}


	public function uninstall(Composer $composer, IOInterface $io)
	{
		// TODO: Implement uninstall() method.
	}
}
