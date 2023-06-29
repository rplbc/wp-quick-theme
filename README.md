# Quick

Quick is a minimal WordPress theme starter. It includes support for TypeScript, SCSS, PostCSS (Tailwind by default), and Stylelint.

## Usage

### Clone

```bash
# in theme directory
git clone https://github.com/rplbc/wp-quick-theme
cd wp-quick-theme
```

### Install dependencies

```bash
yarn install
composer install # stubs and PHP_CS
```

### Development

In `functions.php` add (if not already present) something like this:

```php
define( 'QUICK_SERVE', true );

if ( defined( 'QUICK_SERVE' ) ) {
    require get_template_directory() . '/inc/dev-setup.php';
}
```

The code in `dev-setup.php` dequeues styles and scripts from `setup.php`, so make sure to add `dev-setup.php` after `setup.php`. Then, run `yarn serve` to start the development server (by default it runs on port 3003 - see `webpack.config.ts`).

`dev-setup.php` also adds (see `src/ts/dev.ts`):

- floating layout grid, toggle with <kbd>ctrl</kbd>+<kbd>shift</kbd>+<kbd>\]</kbd>
- modal with ACF `get_fields()`, toggle with <kbd>ctrl</kbd>+<kbd>shift</kbd>+<kbd>\[</kbd>

### Production

Run `yarn build` which:

- produces `dist` folder with things such as styles, fonts, JavaScript (to preview locally in production mode, remove `dev-setup.php` from `functions.php`)
- packs all necessary files into `.quick` folder which is ready to export

## Contributing

If you encounter any issues, have suggestions, or would like to contribute to this project, please open an issue or submit a pull request. Contributions are welcome and greatly appreciated!
