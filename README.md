

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
Latest Version:
```bash

composer require jshibu86/validator

```

---
Latest 1.x.x version:
```bash
composer require jshibu86/validator:^1.0

```

---
Version 1.0.0:
```bash

composer require jshibu86/validator:1.0.0

```

---
Latest 2.x.x version:
```bash

composer require jshibu86/validator:^2.0

```

---
## Usage

After Installed Follow the steps.
##Step1:
Add the Service provider to app.php,
```bash

'providers' => [
    // Other providers...
    Shibu\ValidationGenerator\Services\ValidationGeneratorServiceProvider::class,
],

```
##Step1:
Use the service to the controller ,
```bash
use Shibu\ValidationGenerator\Services\ValidationGeneratorService;

class YourController extends Controller
{
    protected $validationService;

    public function __construct(ValidationGeneratorService $validationService)
    {
        $this->validationService = $validationService;
    }

    public function store(Request $request)
    {
        $tableName = 'students'; // Pass the table name dynamically or hardcoded
        $data = $request->all();

        $rules = $this->validationService->generateValidationRules($tableName);

        // Perform validation
        $validator = \Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // If validation passes, save the data
        // Example:
        // Student::create($data);

        return response()->json(['message' => 'Data saved successfully']);
    }
}

```
### Command(only for older versions : 1.0,1.0.0)

```bash
php artisan validate-table {tableName}
```

Replace `{tableName}` with the name of the table you want to validate.

### Example (only for older versions : 1.0,1.0.0)

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
