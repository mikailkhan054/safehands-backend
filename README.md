# SafeHands Insurance - Database Schema & Migrations

This repository contains the database structure, Laravel migrations, and sample seeders for Task 2 of the SafeHands Insurance Platform.

## Database Schema Structure

### 1. `users` Table
- `id` (Primary Key)
- `name` (String)
- `email` (String, Unique)
- `phone` (String)
- `password` (String)
- `timestamps`

### 2. `packages` Table
- `id` (Primary Key)
- `name` (String)
- `type` (String)
- `description` (Text)
- `price` (Decimal)
- `timestamps`

### 3. `bookings` Table
- `id` (Primary Key)
- `user_id` (Foreign Key referencing `users.id`)
- `package_id` (Foreign Key referencing `packages.id`)
- `preferred_date` (DateTime)
- `status` (String, Default: 'pending')
- `notes` (Text, Nullable)
- `timestamps`

## Relationships
- A **User** has many **Bookings** (`1:N`).
- A **Package** has many **Bookings** (`1:N`).
- A **Booking** belongs to a single **User** and a single **Package**.

## Seeders
`PackageSeeder.php` populates 3 default insurance packages (Health, Auto, Property).
