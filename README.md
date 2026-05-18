# Modern Vue Starter Kit

<p>
    <a href="https://github.com/shipfastlabs/modern-vue-starter-kit/actions"><img src="https://github.com/shipfastlabs/modern-vue-starter-kit/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
    <a href="https://github.com/shipfastlabs/modern-vue-starter-kit/blob/main/LICENSE.md"><img src="https://img.shields.io/github/license/shipfastlabs/modern-vue-starter-kit" alt="License"></a>
    <a href="https://github.com/shipfastlabs/modern-vue-starter-kit"><img src="https://img.shields.io/github/stars/shipfastlabs/modern-vue-starter-kit" alt="GitHub Stars"></a>
</p>


This starter kit brings updates the base laravel starter kit with opinionated modern tooling setup.

**What's Included:**
- **Laravel Latest**: Built with the latest Laravel version (requires PHP 8.4+ and support 8.5)
- **Essential Packages**: Pre-configured with Laravel Essentials and Laravel Boost
- **Code Quality**: Integrated Pint, Rector, and PHPStan
- **Testing Ready**: Pest testing framework included
- **IDE Support**: Laravel IDE Helper for better development experience

## 🚀 Quick Start

> **Requires [PHP 8.4+](https://php.net/releases/)**.

### Using Laravel Installer (Recommended)

```bash
# Create a new project using Laravel installer
laravel new larasonic --using=shipfastlabs/modern-vue-starter-kit

composer run dev
```

### Using Git Clone

```bash
# Clone the repository via github 
git clone git@github.com:shipfastlabs/modern-vue-starter-kit.git
cd modern-vue-starter-kit

# Install dependencies
composer install
npm install

# Set up environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Start development server
composer run dev
```

## 📦 Included Packages

### Production
- `nunomaduro/essentials` - Essential Laravel packages

### Development
- `larastan/larastan` - PHP static analysis
- `rector/rector` - Code refactoring and upgrades
- `barryvdh/laravel-ide-helper` - IDE autocompletion
- `laravel/boost` - Laravel-focused MCP server

## 🛠️ Development Tools

```bash
# Code formatting with Pint
./vendor/bin/pint

# Static analysis with PHPStan/Larastan
./vendor/bin/phpstan analyse --memory-limit=-1

# Code refactoring with Rector
./vendor/bin/rector

# Run tests
php artisan test
```

## 📝 License

This project is open-sourced software licensed under the [MIT license](LICENSE.md).

Credits: 
- [Laravel Starter Kit](https://github.com/laravel/laravel-starter-kit)
- [Nuno's Strict Laravel Starter Kit](https://github.com/nunomaduro/laravel-starter-kit)
