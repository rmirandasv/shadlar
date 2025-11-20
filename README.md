# Shadlar

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rmirandasv/shadlar.svg?style=flat-square)](https://packagist.org/packages/rmirandasv/shadlar)
[![Total Downloads](https://img.shields.io/packagist/dt/rmirandasv/shadlar.svg?style=flat-square)](https://packagist.org/packages/rmirandasv/shadlar)
[![License](https://img.shields.io/packagist/l/rmirandasv/shadlar.svg?style=flat-square)](https://packagist.org/packages/rmirandasv/shadlar)

A minimalist Blade component library for Laravel applications, inspired by shadcn/ui. Shadlar provides a collection of customizable UI components built with Blade templates and Alpine.js for interactive functionality.

## Features

- **Blade Components**: Native Laravel Blade components that integrate seamlessly with your application
- **Alpine.js Integration**: Interactive components powered by Alpine.js for client-side behavior
- **Tailwind CSS**: Styled with Tailwind CSS utility classes for easy customization.
- **Composable**: Build complex UIs by composing smaller components together

## Installation

You can install the package via Composer:

```bash
composer require rmirandasv/shadlar
```

### Publishing Assets

Publish the CSS assets to your application:

```bash
php artisan vendor:publish --tag="shadlar-assets"
```

This will copy the CSS file to `resources/css/vendor/shadlar.css`. Include it in your main CSS file or import it in your build process.

### Publishing Views (Optional)

If you need to customize the component templates, you can publish the views:

```bash
php artisan vendor:publish --tag="shadlar-views"
```

### Publishing Config (Optional)

Publish the configuration file:

```bash
php artisan vendor:publish --tag="shadlar-config"
```

## Usage

Once installed, you can use any Shadlar component in your Blade templates:

```blade
<x-shadlar::button variant="primary" size="md">
    Click me
</x-shadlar::button>

<x-shadlar::card>
    <x-shadlar::card-header>
        <x-shadlar::card-title>Card Title</x-shadlar::card-title>
    </x-shadlar::card-header>
    <x-shadlar::card-body>
        Card content goes here
    </x-shadlar::card-body>
</x-shadlar::card>
```

## Available Components

Shadlar includes a wide range of components:

- **Layout**: Card, Sidebar, Empty states
- **Navigation**: Breadcrumb, Navigation Menu, Pagination
- **Forms**: Input, Textarea, Select, Checkbox, Radio, Form Field
- **Overlays**: Dialog, Dropdown, Combobox
- **Data Display**: Table, Badge, Avatar, Alert
- **Interactive**: Button, Tabs, Accordion, Toggle
- **And more...**

## Documentation

For complete documentation, including component APIs, examples, and customization guides, visit:

**https://shadlar.ronaldmiranda.dev**

## Requirements

- PHP 8.4 or higher
- Laravel 11.0 or 12.0
- Livewire 3.6 or higher
- Alpine.js (for interactive components)
- Tailwind CSS (for styling)

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security-related issues, please email ronaldmirandasv@gmail.com instead of using the issue tracker.

## Credits

- [Ronald Miranda](https://github.com/rmirandasv)
- This package was created using the [Spatie Laravel Package Skeleton](https://github.com/spatie/package-skeleton-laravel)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

