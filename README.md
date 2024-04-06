# Quick

Quick is a minimal WordPress theme starter that provides a straightforward setup for building custom WordPress themes. It includes support for TypeScript, AlpineJS, and TailwindCSS.

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

### AlpineJS

Use of [Alpine](https://github.com/alpinejs/alpine) is optional. By default, [focus](https://alpinejs.dev/plugins/focus) plugin is included. See _header.php_ and _src/ts/alpine_.

### Production

Run `pnpm build` to generate the following:

- `dist` folder with compiled styles, fonts, and JS files,
- `.quick` folder containing all necessary files ready for export

## Contributing

If you encounter any issues, have suggestions, or would like to contribute to this project, please open an issue or submit a pull request. Contributions are welcome and greatly appreciated!
