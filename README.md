# Contact Form Using PHPMailer and Dotenv

This project is a simple PHP contact form that allows users to send emails via Gmail's SMTP server. It utilizes the PHPMailer library for email composition and transport and the Dotenv library for managing environment variables.

## Prerequisites

Before you begin, ensure you have the following requirements in place:

1. PHP installed on your server or local development environment.
2. Composer installed to manage PHP dependencies.

## Installation

1. Clone this repository to your local machine or server.

   ```bash
   git clone https://github.com/sajithnsilvame/Gmail-API-with-PHP.git
   ```

2. Navigate to the project directory.

   ```bash
   cd Gmail-API-with-PHP
   ```

3. Use Composer to install the required dependencies (PHPMailer and Dotenv).

   ```bash
   composer install
   ```

## Configuration

1. Create a `.env` file in the project root directory and add your SMTP configuration details. You can refer to the `.env.example` file provided in the project for guidance.

   ```env
   SMTP_USERNAME=your_username@gmail.com
   SMTP_PASSWORD=your_password
   ```

   Replace `your_username@gmail.com` and `your_password` with your Gmail SMTP credentials.

## Usage

1. Open the `index.php` file in your code editor and customize the form as needed. You can modify form fields, styles, and error handling.

2. Ensure that the form fields in `index.php` match the expected POST data in `send_email.php` (e.g., `name`, `email`, `subject`, `message`).

3. In `send_email.php`, update the recipient email address and name as needed. By default, it sends emails to "dev.sajith@gmail.com" with the name "Sajith." You can change this to your preferred recipient.

4. Configure any additional settings in `send_email.php`, such as the SMTP server host, port, and encryption method, if necessary.

5. Once you've made your customizations, you can deploy the project to your web server or a local development environment with PHP support.

## Running the Contact Form

1. Access the contact form by opening it in a web browser or by navigating to the project's URL on your web server.

2. Fill out the form with your name, email, subject, and message.

3. Click the "Send" button to submit the form.

4. If the email is sent successfully, you will be redirected to a "sent.html" page. If there's an error, an error message will be displayed.

## Troubleshooting

If you encounter any issues or errors while using the contact form, refer to the error message displayed on the page. Additionally, you can check the PHP error log for more detailed information.

## Credits

- This project utilizes the [PHPMailer](https://github.com/PHPMailer/PHPMailer) library for sending emails.
- It also uses the [Dotenv](https://github.com/vlucas/phpdotenv) library for managing environment variables securely.

## Author

- [**Sajith N Silva**](https://sajithnsilvame.github.io/portfolio/)

## License

This project is open-source and available under the [MIT License](LICENSE). Feel free to modify and use it according to your needs.
