# 🎬 CultMovies

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

A Laravel application for managing cult movies, series, and their iconic characters.
</div>

## ✨ Features

- 🎥 Browse and manage movies and TV series
- 👥 Track characters across different productions
- 🔍 Filter movies by:
  - All Movies/Series
  - Past Releases
  - Upcoming Releases
  - Recent Releases
- 💜 Purple-themed responsive design
- 🖼️ Image management for movies and characters

## 🎯 Tech Stack

- Laravel 9.0
- PHP 8.0+
- TailwindCSS
- MySQL/MariaDB

## 🚀 Installation

1. Clone the repository
```bash
git clone https://github.com/ssubaro/CultMovies.git
cd CultMovies
```

2. Install dependencies
```bash
composer install
npm install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Set up database
```bash
php artisan migrate
php artisan db:seed
```

5. Create storage link
```bash
php artisan storage:link
```

6. Start the development server
```bash
php artisan serve
```

## 📸 Screenshots

[Add your application screenshots here]

## 🗄️ Database Structure

### Movies Table
- Name
- Classification (drama, action, thriller, etc.)
- Release Date
- General Review
- Season (for TV series)
- Image

### Characters Table
- Name
- Description
- Image
- Movie Relations (Many-to-Many)

## 🎨 Color Theme
The application uses a purple-based color scheme:
- Primary: `#6B46C1` (Purple)
- Secondary: `#9F7AEA` (Light Purple)
- Background: `#FAF5FF` (Purple 50)
- Text: `#553C9A` (Purple 800)

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
