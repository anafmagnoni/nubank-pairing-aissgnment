# Nubank pairing assignment

This is an implementation of the pairing assignment from Nubank.

The chosen language for this project is PHP 8.

## Development

The development process is based on Docker:

```shell
docker-compose up
```

To enter the interactive shell of the PHP container:

```shell
docker-compose exec php bash
```

Inside this PHP container, composer is available and ready to use.

## Testing

### Running tests
PHPUnit is the test framework. To run the entire test suite, run the following command inside the PHP container:

```shell
composer test
```
