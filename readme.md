## Drago Project with a database
The package extends the Drago Project to include database work.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-db.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-db)
[![Coding Style](https://github.com/drago-ex/project-db/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-db/actions/workflows/coding-style.yml)

## Requirements
- PHP >= 8.3
- Nette Framework
- Drago Project core packages

## The package does the following
- Copies a configured Neon file with database settings preconfigured for Docker.
- Adds Docker files for database setup.
- Integrates Dibi for database interaction.

## Install
```bash
composer config --no-plugins allow-plugins.drago-ex/project-db true
composer require drago-ex/project-db
```

## Docker Setup
```bash
docker-compose -f docker-compose-db.yml build
```
