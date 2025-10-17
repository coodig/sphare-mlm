# SphareMLM 🚀

A modern, open-source MLM (Multi-Level Marketing) software solution built with the Laravel framework. SphareMLM provides a robust platform for managing user networks, calculating commissions, and handling financial transactions seamlessly.

![SphareMLM Dashboard Screenshot](https://user-images.githubusercontent.com/username/repo/screenshot.png) ---

## 📖 Table of Contents

- [SphareMLM 🚀](#spharemlm-)
  - [📖 Table of Contents](#-table-of-contents)
  - [🌟 About The Project](#-about-the-project)
  - [✨ Key Features](#-key-features)
  - [🛠️ Tech Stack](#️-tech-stack)
  - [🚀 Getting Started](#-getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
  - [🎮 Usage](#-usage)
  - [🤝 Contributing](#-contributing)
  - [📜 License](#-license)
  - [✉️ Contact](#️-contact)

---

## 🌟 About The Project

SphareMLM is designed to provide a reliable and scalable foundation for any MLM business. It simplifies the complexities of network marketing by automating user registration, genealogy tracking, commission calculations, and e-wallet management. This project is built with clean code practices, making it easy for developers to customize and extend.

---

## ✨ Key Features

- **👤 User Management:** Secure registration, profile management, and KYC verification.
- **🌳 Genealogy Tree:** Interactive visualization of the user network (Downline/Upline).
- **💰 Commission System:** Automated calculation for various commission types (e.g., Direct, Binary, Level).
- **💳 E-Wallet:** Integrated wallet for users to manage earnings, check statements, and withdraw funds.
- **🔗 Referral System:** Easy-to-use referral link generation and tracking.
- **🖥️ Admin Dashboard:** A powerful backend for admins to manage users, view reports, and configure settings.
- **🎨 Modern UI:** Clean, responsive, and user-friendly interface built with Tailwind CSS.

---

## 🛠️ Tech Stack

This project is built using the following technologies:

- **Backend:** PHP 8.2+, Laravel 11.x
- **Frontend:** Blade, Tailwind CSS, Vite
- **Database:** MySQL
- **Server:** Apache / Nginx

---

## 🚀 Getting Started

Follow these steps to set up the project locally on your machine.

### Prerequisites

Make sure you have the following installed on your system:
- PHP >= 8.2
- Composer
- Node.js & npm
- A local server environment (like XAMPP, WAMP, or Laravel Valet)
- MySQL

### Installation

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/your-username/sphare-mlm.git](https://github.com/your-username/sphare-mlm.git)
    cd sphare-mlm
    ```

2.  **Install PHP dependencies:**
    ```bash
    composer install
    ```

3.  **Install JavaScript dependencies:**
    ```bash
    npm install
    ```

4.  **Create your environment file:**
    ```bash
    cp .env.example .env
    ```

5.  **Generate a new application key:**
    ```bash
    php artisan key:generate
    ```

6.  **Configure your `.env` file:**
    Open the `.env` file and update your database credentials (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

7.  **Run database migrations and seeders:**
    The seeder will create default user statuses (Active, Banned, etc.) and an admin account.
    ```bash
    php artisan migrate --seed
    ```

8.  **Build frontend assets:**
    ```bash
    npm run dev
    ```

9.  **Start the development server:**
    ```bash
    php artisan serve
    ```
    Your application will be running at `http://127.0.0.1:8000`.

---

## 🎮 Usage

Once the application is running, you can log in with the default admin credentials:

- **Email:** `admin@spharemlm.com`
- **Password:** `password`

From the dashboard, you can start managing users, viewing the genealogy, and exploring other features.

---

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

---

## 📜 License

This project is licensed under the MIT License. See the `LICENSE` file for more information.

---

## ✉️ Contact

Email: sphare@hotmail.com

Project Link: [https://github.com/coodig/sphare-mlm](https://github.com/coodig/sphare-mlm)
