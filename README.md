# Project Name

## Description
This project is a web application that allows users to view a list of products, view product details, add products to a cart, view a list of invoices, and view invoice details. The application is built using Laravel for the API and Vue.js for the client-side.

## Features
- View list of products
- View product details
- Add products to cart
- View list of invoices
- View invoice details

## Prerequisites
- PHP (>=7.3)
- Composer
- Node.js
- NPM

## Installation

### Backend (Laravel)

1. Clone the repository:
    ```bash
    https://github.com/boakyezitek/shopping-app.git
    cd yourproject
    ```

2. Install the PHP dependencies:
    ```bash
    composer install
    ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```

4. Generate the application key:
    ```bash
    php artisan key:generate
    ```

5. Run the database migrations (and seed the database if applicable):
    ```bash
    php artisan migrate --seed
    ```

### Frontend (Vue.js)

1. Navigate to the `client` directory:
    ```bash
    cd client
    ```

2. Install the JavaScript dependencies:
    ```bash
    npm install
    ```

## Running the Application

### Backend (Laravel)

To start the Laravel development server, run:
```bash
php artisan serve
```

### Frontend (Vue.js)

To compile and hot-reload the Vue.js application for development, run:
```bash
npm run dev
```

## Usage

1. Ensure both the Laravel server and the Vue.js development server are running.
2. Open your browser and navigate to `http://localhost:8000` for the Laravel API.
3. Open your browser and navigate to `http://localhost:8080` (or the specified port) for the Vue.js client.

## Contributing
If you would like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/AmazingFeature`).
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the branch (`git push origin feature/AmazingFeature`).
5. Open a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact
If you have any questions, feel free to reach out to [tonacode@gmail.com](mailto:tonacode@gmail.com).

---

Happy coding!
