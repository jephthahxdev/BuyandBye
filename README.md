# BuyAndBye

A full-featured ecommerce platform built with modern web technologies, providing all essential features for online retail operations.

## Tech Stack

- **Backend**: Laravel (PHP)
- **Frontend**: Smarty Template Engine
- **JavaScript**: Node.js
- **Styling**: Tailwind CSS

## Features

- Product catalog management
- Shopping cart functionality
- User authentication and registration
- Order processing and management
- Payment gateway integration
- Admin dashboard
- Inventory management
- User profiles and order history
- Responsive design
- Search and filtering capabilities

## Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL or PostgreSQL database
- Web server (Apache/Nginx)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/buyandbye.git
cd buyandbye
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node.js dependencies:
```bash
npm install
```

4. Copy environment file and configure:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in `.env` file

7. Run database migrations:
```bash
php artisan migrate
```

8. Build frontend assets:
```bash
npm run build
```

## Usage

1. Start the Laravel development server:
```bash
php artisan serve
```

2. For development with hot reloading:
```bash
npm run dev
```

3. Access the application at `http://localhost:8000`

## Configuration

- Configure payment gateways in the admin panel
- Set up email settings for order notifications
- Configure shipping options and rates
- Customize theme and branding

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is licensed under the Apache License 2.0 - see the [LICENSE](LICENSE) file for details.

### Apache License 2.0

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

## Copyright

Copyright 2025 [Jephthahxdev]
