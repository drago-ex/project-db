## Drago Project with a database
The package extends the Drago Project to include database work.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-db.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-db)
[![Coding Style](https://github.com/drago-ex/project-db/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-db/actions/workflows/coding-style.yml)

## Install
```bash
composer config --no-plugins allow-plugins.drago-ex/project-db true
composer require drago-ex/project-db
composer remove drago-ex/project-db --no-interaction
```

## Docker update
```bash
docker-compose -f docker-compose-db.yml build
```
