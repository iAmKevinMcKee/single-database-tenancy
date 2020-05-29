# Single Database Multi Tenancy for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/iamkevinmckee/single-database-tenancy.svg?style=flat-square)](https://packagist.org/packages/iamkevinmckee/single-database-tenancy)
[![Total Downloads](https://img.shields.io/packagist/dt/iamkevinmckee/single-database-tenancy.svg?style=flat-square)](https://packagist.org/packages/iamkevinmckee/single-database-tenancy)

This is a package to help you create a multi-tenant application in Laravel with a single database. It is best used at the beginning of a new project.
## Installation

You can install the package via composer:

```bash
composer require iamkevinmckee/single-database-tenancy
```

## Usage

After installing the package, you will need to create a Tenant model.

```bash
php artisan make:model Tenant -m
```

You will also need to add a `tenant_id` to your `users` table.

```bash
php artisan make:migration add_tenant_id_to_users_table
```

Next you will want to publish the stubs. This will ensure every subsequent model has a migration with a `tenant_id`.

```bash
php artisan single-db-tenancy:stubs
```

At this point, you just need to make sure each User has a tenant_id assigned to them when they register and all Eloquent operations will be scoped to the tenant.

When inserting data into the database via Eloquent, the `tenant_id` will automatically be set to the `tenant_id` of the user submitting the data.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please open an issue before submitting a PR to ensure the feature will be accepted.

### Security

If you discover any security related issues, please email kevin@kevinmckee.me instead of using the issue tracker.

## Credits

- [Kevin McKee](https://github.com/iamkevinmckee)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
