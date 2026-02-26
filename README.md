# CRUD Package for Laravel

A simple and easy-to-use CRUD package for Laravel projects.

## Installation
```bash
composer require devrabbi/crudpackage
```

## Usage

After installation, the package routes are automatically loaded.

Visit:
- `/crud` - List all items
- `/crud/create` - Create new item
- `/crud/{id}/edit` - Edit item

## Publishing Assets

To publish views to your project:
```bash
php artisan vendor:publish --provider="Devrabbi\Crudpackage\CrudpackageServiceProvider" --tag="views"
```

## License

MIT License
```

---

## Step 4: Register on Packagist

1. Go to https://packagist.org
2. Click "Sign Up" and create an account
3. Use the same email as your GitHub account
4. Verify your email

---

## Step 5: Submit Your Package to Packagist

1. After login, click "Submit Package" button
2. Paste your GitHub repository URL:
```
   https://github.com/devrabbi/crudpackage
