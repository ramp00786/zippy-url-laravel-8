# ZippyURL

## Description

ZippyURL is a free URL shortening service built with Laravel. This application allows users to create shorter URLs from long ones, similar to services like [TinyURL](https://tinyurl.com/). With ZippyURL, you can easily manage, track, and share your links with ease.

## Features

- Fast and easy link shortening process
- Secure and reliable platform
- Customizable short links
- Analytics to track link performance
- API integration for seamless use across platforms

## Demo

Check out the live demo: [ZippyURL Demo](https://pro.intactautomation.com/zippy-url/)

## Requirements

- PHP >= 7.4
- Composer
- Laravel 8.x
- MySQL
- Node.js and npm

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/ramp00786/zippy-url-laravel-8.git
    ```

2. **Navigate to the project directory:**
    ```bash
    cd zippyurl
    ```

3. **Install dependencies:**
    ```bash
    composer install
    npm install
    npm run dev
    ```

4. **Set up the environment file:**
    ```bash
    cp .env.example .env
    ```

5. **Generate the application key:**
    ```bash
    php artisan key:generate
    ```

6. **Configure your database in the `.env` file:**
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

7. **Run the database migrations:**
    ```bash
    php artisan migrate
    ```

8. **Start the development server:**
    ```bash
    php artisan serve
    ```

## Usage

1. **Visit the application in your browser:**
    ```
    http://localhost:8000
    ```

2. **Create short URLs:**
    - Enter a long URL in the input field.
    - Click the "Shorten" button to generate a short URL.
    - Share the generated short URL.

3. **Track URL performance:**
    - View the analytics for each short URL to see how it is performing.

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch: `git checkout -b feature-branch-name`
3. Make your changes.
4. Commit your changes: `git commit -m 'Add some feature'`
5. Push to the branch: `git push origin feature-branch-name`
6. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions or suggestions, please contact us at [ramp00786@gmail.com](mailto:ramp00786@gmail.com).

---

**ZippyURL** - Link Less, Achieve More.
