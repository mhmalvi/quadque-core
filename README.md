# Quadque Core

The core platform module for **Quadque Technologies**. Built with Laravel 8 and Vue 3, this application provides the foundational services and shared functionality that other Quadque platform components depend on, including content management, user services, and API infrastructure.

Part of the **Quadque digital platform ecosystem**.

---

## Features

- Core service layer providing shared APIs for the Quadque ecosystem
- Vue 3 frontend with rich text editing via Vue Quill
- Tailwind CSS utility-first styling with form plugin support
- SweetAlert2 for user-friendly confirmation dialogs and notifications
- Laravel Sanctum API token authentication
- Laravel Breeze for lightweight authentication scaffolding
- Image upload and processing with Intervention Image
- Modular architecture designed for cross-service integration
- Database migrations and seeders for consistent schema management
- Alpine.js for lightweight interactive UI enhancements

## Tech Stack

| Layer        | Technology                                       |
|--------------|---------------------------------------------------|
| Backend      | PHP 7.3+/8.0, Laravel 8                          |
| Frontend     | Vue 3, Alpine.js                                  |
| Auth         | Laravel Sanctum, Laravel Breeze                   |
| Styling      | Tailwind CSS 2                                    |
| Rich Text    | Vue Quill                                         |
| Alerts       | SweetAlert2                                       |
| Images       | Intervention Image                                |
| Build        | Laravel Mix 6, Webpack                            |
| Testing      | PHPUnit 9, Mockery, Faker                         |

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js >= 14
- MySQL

### Installation

```bash
git clone https://github.com/mhmalvi/quadque-core.git
cd quadque-core
composer install
npm install
```

### Environment Configuration

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with your database credentials and application settings.

### Database Setup

```bash
php artisan migrate
php artisan db:seed
```

### Development

```bash
php artisan serve
npm run dev
```

### Production Build

```bash
npm run production
```

## Project Structure

```
quadque-core/
├── app/                 # Core application logic
├── bootstrap/           # Framework bootstrap
├── config/              # Configuration files
├── database/
│   ├── factories/       # Model factories
│   ├── migrations/      # Database migrations
│   └── seeders/         # Database seeders
├── public/              # Compiled assets and entry point
├── resources/
│   ├── js/              # Vue 3 components
│   ├── views/           # Blade templates
│   ├── css/             # Stylesheets
│   └── lang/            # Localization files
├── routes/
│   ├── api.php          # API routes
│   └── web.php          # Web routes
├── storage/             # Logs, cache, and uploads
├── tailwind.config.js   # Tailwind CSS configuration
├── tests/               # Test suites
└── webpack.mix.js       # Laravel Mix configuration
```

## License

Proprietary — Quadque Technologies. All rights reserved.
