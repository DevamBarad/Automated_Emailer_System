📧 Automated Emailer System (PHP)

An Automated Emailer System built using PHP that allows users to send bulk personalized emails efficiently. This system is ideal for agencies and businesses that need to send customized emails to multiple recipients with different content and attachments.

🚀 Features
📂 Upload Excel file with recipient data
📨 Send bulk emails automatically
🧾 Attach PDF brochures to emails
🎨 Select and use email templates
🔄 Dynamic content for each recipient
⚡ Fast and efficient email delivery using PHPMailer
🛠️ Technologies Used
PHP
HTML / CSS
JavaScript
MySQL (optional for storing data)
PHPMailer
📁 How It Works
Upload an Excel file containing user details (emails, names, etc.)
Select a PDF brochure to attach
Choose an email template
Click Send
System automatically sends personalized emails to all recipients
⚙️ Installation

Clone the repository:

git clone https://github.com/your-username/automated-emailer.git
Move the project to your server directory (e.g., htdocs for XAMPP)

Install dependencies (PHPMailer):

Download from: https://github.com/PHPMailer/PHPMailer
Or use Composer:
composer require phpmailer/phpmailer

Configure your email settings in the PHP file:

$mail->Host = 'smtp.example.com';
$mail->Username = 'your-email@example.com';
$mail->Password = 'your-password';
Start your local server and run the project
📌 Requirements
PHP 7.0 or higher
Web server (XAMPP / WAMP / LAMP)
SMTP email account
🎯 Use Cases
Marketing campaigns
Agency email automation
Newsletter distribution
Client communication
👨‍💻 Author

Devam Barad

📜 License

This project is open-source and free to use for educational purposes.
