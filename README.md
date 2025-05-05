
Built by https://www.blackbox.ai

---

# Facebook Ads Campaign Poster Generator

## Project Overview
The Facebook Ads Campaign Poster Generator is a web application that allows users to create customizable posters for their Facebook advertising campaigns. Users can modify text, upload images, select features, and apply different themes to create visually engaging posters. This tool aims to simplify the process of poster creation with a user-friendly interface and flexible design options.

## Installation
To set up this project on your local machine, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd facebook-ads-campaign-poster-generator
   ```

2. **Run the project**: 
   You can run it using any local or remote server that can handle PHP. If you do not have a server set up, you can use a tool like XAMPP, MAMP, or WAMP. 
   - Place the project folder in the server's document root (e.g., `htdocs` for XAMPP).
   - Access it via `http://localhost/facebook-ads-campaign-poster-generator/index.php`.

## Usage
1. Navigate to the application's home URL.
2. Customize your poster by filling in the form with the desired details such as badge text, main title, campaign text, and profile image.
3. Choose the features you want to include by modifying the feature inputs.
4. Preview the poster on the right side and click "Update Preview" to see changes.
5. Download your completed poster by clicking the "Download Poster" button.

## Features
- **Customizable Text**: Change the badge text, main title, and campaign text.
- **Image Upload**: Upload a profile image to personalize your poster.
- **Feature Selection**: Add up to four unique features to your poster and display them with icons.
- **Themed Layouts**: Select from various themes including "Classic Blue & Yellow", "Modern Dark", "Gradient Purple", and more.
- **Animations and Backgrounds**: Choose different animation effects and background patterns for your poster.
- **File Download**: Download the generated poster as a PNG file.

## Dependencies
This project relies on the following libraries:
- [Tailwind CSS](https://tailwindcss.com/) for styling.
- [Font Awesome](https://fontawesome.com/) for icons.
- [html2canvas](https://html2canvas.hertzen.com/) for capturing the poster as an image.

## Project Structure
The project contains the following key files:

```
/facebook-ads-campaign-poster-generator
│
├── index.html               # Main HTML file for the application interface.
├── poster_generator.php      # PHP script handling poster generation and template management.
├── index.php                # Redirects to the main poster generation page.
├── manifest.json            # Web app manifest for PWA configuration.
```

### Additional Files
- `uploads/` (optional): This directory is created automatically to store any uploaded images.

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License
This project is open-source and available under the [MIT License](LICENSE).