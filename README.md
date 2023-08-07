# Quick

Quick is a minimal WordPress theme starter that provides a straightforward setup for building custom WordPress themes. It includes support for TypeScript, SCSS, and PostCSS (Tailwind by default).

## Usage

### Clone the repository

```bash
# in theme directory
git clone https://github.com/rplbc/wp-quick-theme
cd wp-quick-theme
```

### Install dependencies

```bash
pnpm install
composer install # stubs and PHP_CS
```

### Development

To enable the development environment, in `functions.php` add (if not already present) something like this:

```php
define( 'QUICK_SERVE', true );

if ( defined( 'QUICK_SERVE' ) ) {
    require get_template_directory() . '/inc/dev-setup.php';
}
```

**Note**: Ensure that `dev-setup.php` is added after `setup.php` to correctly dequeue styles and scripts. Next, run `pnpm dev` to start the development server (default port: 3003, see webpack.config.ts).

`dev-setup.php` also adds the following features (refer to `src/ts/dev.ts`):

- floating layout grid (toggle with <kbd>ctrl</kbd>+<kbd>shift</kbd>+<kbd>\]</kbd>)
- modal with ACF `get_fields()` (toggle with <kbd>ctrl</kbd>+<kbd>shift</kbd>+<kbd>\[</kbd>)

### Production

Run `pnpm build` to generate the following:

- `dist` folder with compiled styles, fonts, and JavaScript files (to preview locally in production mode, remove `dev-setup.php` from `functions.php`)
- `.quick` folder containing all necessary files ready for export

## Contributing

If you encounter any issues, have suggestions, or would like to contribute to this project, please open an issue or submit a pull request. Contributions are welcome and greatly appreciated!
