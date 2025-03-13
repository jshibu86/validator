

# Schema Validation Generator

**Schema Validation Generator** is a Laravel package designed to simplify the creation of validation rules for database tables. This package dynamically generates a validation array based on the schema of a specified table, helping you reduce manual effort and improve consistency.

---

## Features

- Generate validation rules for any database table with a single command.
- Automatically detects column properties such as `nullable`, `type`, and `length` to create appropriate rules.
- Supports common validation rules like `required`, `nullable`, `string`, `integer`, `numeric`, `boolean`, `date`, and more.
- Provides a clean, readable output in PHP array format.

---

## Installation

To install the package, run:

```bash
composer require jshibu86/validator
composer require jshibu86/validator:^2.0

```

---

## Usage

Once installed, you can use the provided artisan command to generate validation rules for any table in your database.

### Command

```bash
php artisan validate-table {tableName}
```

Replace `{tableName}` with the name of the table you want to validate.

### Example

For a table named `users` with the following schema:

| Column     | Type      | Nullable | Length | Extra          |
| ---------- | --------- | -------- | ------ | -------------- |
| id         | BIGINT    | NO       | -      | Auto Increment |
| name       | VARCHAR   | NO       | 255    |                |
| email      | VARCHAR   | YES      | 255    |                |
| phone      | VARCHAR   | NO       | 255    |                |
| note       | TEXT      | YES      | -      |                |
| created_at | TIMESTAMP | YES      | -      |                |
| updated_at | TIMESTAMP | YES      | -      |                |

Running the command:

```bash
php artisan validate-table users
```

Will output:

```php
[
    'name' => ['required', 'string', 'max:255'],
    'email' => ['nullable', 'string', 'max:255'],
    'phone' => ['required', 'string', 'max:255'],
    'note' => ['nullable', 'string'],
]
```

---

## Customization

This package is designed to work out of the box, but you can extend or modify it if needed by publishing the config file.

```bash
php artisan vendor:publish
```

Select the `Provider: Schema\ValidationGenerator\ValidationGeneratorServiceProvider` option. Then edit the `resources/vendor/Schema-validation-generator/validationGeneratorConfig.json` to match your database's column types.

---

## Contributing

Contributions are welcome! Feel free to fork the repository and submit pull requests for improvements.

---

## License

This package is open-source and licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

## Support

For issues or questions, please open an issue on the [GitHub repository](https://github.com/jshibu86/validator) .

---

## Credits

Developed with ❤️

---

Let me know if you’d like to refine this further!
