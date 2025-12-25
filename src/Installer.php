<?php

declare(strict_types=1);

namespace Drago;


final class Installer
{
	public static function install(): void
	{
		$root = self::getProjectRoot();

		self::copy(
			__DIR__ . '/../resources/docker/docker-compose-db.yml',
			$root . '/docker-compose-db.yml',
		);

		self::copy(
			__DIR__ . '/../resources/docker/Dockerfile-db',
			$root . '/docker/Dockerfile-db',
		);

		self::copy(
			__DIR__ . '/../resources/app/db.neon',
			$root . '/app/db.neon',
		);

		echo "[project-db] Database support installed\n";
	}


	private static function getProjectRoot(): string
	{
		// vendor/drago-ex/project-db/src → ROOT
		return dirname(__DIR__, 4);
	}


	private static function copy(string $from, string $to): void
	{
		if (file_exists($to)) {
			echo "[project-db] Skipped (exists): $to\n";
			return;
		}

		@mkdir(dirname($to), 0o777, true);
		copy($from, $to);
	}
}
