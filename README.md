# Bucket List Project

## Description

This project is a web application for creating and managing Bucket Lists. Using Symfony and Twig, the application allows users to authenticate, add wishes to their list, and view the details of different wishes.

## Features

- **User Authentication**: Secure registration, login, and logout.
- **Wish Management**:
  - Add a wish to a Bucket List.
  - View the list of wishes.
  - View the details of a wish.

## Prerequisites

- PHP 7.4 or newer
- Composer
- Symfony CLI (optional but recommended)
- Web server (Apache)
- Database (MySQL)

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/bucket-list.git
   cd bucket-list
2. **Install dependencies**:
   ```bash
   composer install

3. **Configure environment**:
   ```bash
   cp .env.example .env

4. **Create the database and schema**:
   ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:schema:update --force

5. **Start the development server**:
    ```bash
   symfony serve




