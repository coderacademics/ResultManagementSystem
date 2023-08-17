
# School Result Management System

The School Result Management System is a web application designed to manage student results. It allows students to log in and view their results, while teachers can log in to perform CRUD (Create, Read, Update, Delete) operations on the student result database.

## Features

- **Student Login:**
  - Students can log in using their credentials.
  - Once logged in, students can view their result details.

- **Teacher Login:**
  - Teachers can log in using their credentials.
  - Teachers have access to perform CRUD operations on the student result database.

- **CRUD Operations:**
  - Teachers can create new student result entries.
  - Teachers can view and update existing student result details.
  - Teachers can delete student result entries.

## Technologies Used

- HTML: Front-end structure and user interface.
- CSS: Styling and layout of the application.
- PHP: Back-end scripting for data processing and server-side logic.
- XAMPP: Local server environment for testing and development.
- MySQL: Database management system to store student result data.

## Setup and Installation

1. Install XAMPP: Download and install XAMPP, which provides Apache, MySQL, and PHP for local development.

2. Database Setup:
   - Open the XAMPP control panel and start the Apache and MySQL services.
   - Access phpMyAdmin and create a new database named `results`.
   - Import the provided SQL script to create the necessary tables and structure for the database.

3. Application Files:
   - Clone or download this repository to your local machine.
   - Copy the project files to the `htdocs` directory of your XAMPP installation.

4. Configuration:
   - Open the `config.php` file and update the database connection details (hostname, username, password) to match your local setup.

5. Run the Application:
   - Open a web browser and navigate to `http://localhost/school-result-management`.

## Usage

1. Student Login:
   - Visit the login page and enter your student credentials.
   - After successful login, you will be redirected to your result page.

2. Teacher Login:
   - Visit the teacher login page and enter your teacher credentials.
   - Once logged in, you will have access to the teacher dashboard.
   - Use the dashboard to perform CRUD operations on student results.

## Contributing

Contributions to the School Result Management System are welcome! Please fork the repository, make your changes, and submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For questions or support, please contact Saikat Mohanta at saikatmohanta43434@gmail.com.

---