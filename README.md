# BIPOP - Image Creation Application

BIPOP is a web application for image creation, similar to Photoshop, developed using Laravel, HTML, CSS, and JavaScript.

## Features

- **Image Creation Tool:** Allows users to intuitively create and edit images.
- **Layer Management:** Ability to add, remove, and manipulate layers for advanced editing.
- **Filters and Effects:** A range of filters and effects to enhance and customize images.
- **Export:** Export your creations in various image formats.

## Prerequisites

Before getting started, make sure you have the following installed on your machine:

- [Laravel](https://laravel.com/docs/8.x/installation)
- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/bipop.git
    cd bipop
    ```

2. **Install Laravel dependencies:**

    ```bash
    composer install
    ```

3. **Install npm dependencies:**

    ```bash
    npm install
    ```

4. **Copy the `.env.example` file to `.env`. Configure the database information and generate the application key:**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Migrate the database:**

    ```bash
    php artisan migrate
    ```

6. **Run the application:**

    ```bash
    php artisan serve
    ```

    The application should be accessible at [http://localhost:8000](http://localhost:8000).

## Usage

1. Log in to the application.
2. Explore the image creation and editing features.
3. Save and export your creations.

## Contributing

If you want to contribute to BIPOP, please follow these steps:

1. **Fork the repository ([link to your forked repository]).**
2. **Create a branch for your feature (`git checkout -b amazing-feature`).**
3. **Commit your changes (`git commit -m 'Added amazing feature'`).**
4. **Push to the branch (`git push origin amazing-feature`).**
5. **Create a new Pull Request.**

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
