# Quick

Quick helps you easily create custom WordPress themes using TypeScript, AlpineJS, and TailwindCSS.

## Quick start

1. Clone the repository into your _wp-content/themes_ directory.
2. Install dependencies by running `pnpm install` and `composer install`.
3. Generate the autoload file with `composer dump-autoload`.
4. Activate the theme from the WP admin panel.

### Development

The development process involves three main files:

- **main.ts**: The main TypeScript file.
- **main.css**: The main CSS file.

To start the development server, run `pnpm dev`. Make sure to set `QUICK_ENVIRONMENT`:

```php
# functions.php
define('QUICK_ENVIRONMENT', 'development');
```

### Production

Run `pnpm build` to generate `dist` folder with compiled styles and JS files. Make sure to set `QUICK_ENVIRONMENT`:

```php
# functions.php
define('QUICK_ENVIRONMENT', 'production');
```

### AlpineJS

Using [Alpine](https://github.com/alpinejs/alpine) is optional.

## Contributing

If you encounter any issues, have suggestions, or would like to contribute to this project, please open an issue or submit a pull request. Contributions are welcome and greatly appreciated!
