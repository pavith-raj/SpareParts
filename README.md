# Spare Parts Depot

Spare Parts Depot is a web application designed to streamline the procurement process for spare parts in the automotive industry, catering specifically to garage dealers. The application provides a user-friendly platform where dealers can browse, select, and order high-quality spare parts for vehicle repairs and maintenance. Key features include real-time inventory management, secure payment integration, and efficient order handling to enhance operational efficiency and customer satisfaction.

## Project Features

### Modules:
1. **Admin**: 
   - Manage garages, products, orders, and employees.
   - Oversee inventory, confirm or reject orders, and assign delivery tasks to employees.
   - Access reports and analytics on inventory and sales.

2. **Employee**:
   - Manage and update delivery status for assigned orders.
   - Collect payments and handle order returns if necessary.

3. **Garage/Dealer**:
   - Browse and order spare parts.
   - Track order status and request order cancellations before they are processed.

### Core Features:
- **Spare Parts Procurement**: Dealers can browse parts catalogs, check availability, and place orders.
- **Order Tracking**: Real-time tracking and updates on order status.
- **Inventory Management**: Track stock levels with notifications for low inventory.
  
## Technology Stack

- **Front-end**: HTML, CSS, JavaScript
- **Back-end**: PHP
- **Database**: MySQL
- **Web Server**: Apache (via XAMPP)
- **Operating System**: Windows, compatible with Chrome, Firefox, and Edge browsers

## Installation

1. **Prerequisites**:
   - XAMPP installed on your local system.
   - Clone or download the repository.

2. **Setup**:
   - Open XAMPP and start the Apache and MySQL servers.
   - Import the database using the `spareparts.sql` file provided in the repo.
   - Place the project folder in the `htdocs` directory of your XAMPP installation.

3. **Running the Application**:
   - Navigate to `http://localhost/[project-folder-name]` in your web browser to start the application.

## Usage

- **Admin Login**: Admins can log in to manage garages, products, and employees.
- **Employee Login**: Employees can log in to view and update order deliveries.
- **Garage Login**: Garages can log in to browse products, place orders, and view order status.

## Future Enhancements

- **Mobile Application**: Developing a mobile version for easier access.
- **International Expansion**: Localization and multi-language support for international markets.
- **Automated Inventory Management**: Real-time stock updates and automated reordering.
