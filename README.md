# Nine Lives Sanctuary

# Nine Lives Sanctuary - Cat Adoption and Rescue Portal System

## Group Information

**Group Name**: MEOW
**Section**: 2

**Group Members** :
- NUR ALYAA BINTI MHD RASDI - 2218622
- ALIYAH KHAIRANI BINTI ADNAN - 2313068
- BALQIS BINTI AHMAD KAMAL ARIFFIN - 2313728
- SHARIFAH KHALISAH BINTI SH MOHD AJIS - 2317322
- WAN JULIANIS BINTI WAN AZWAR ZAIHAN - 2312012

## Project Overview

Introduction:
Nine Lives Sanctuary is a web-based cat adoption and rescue portal system developed using the Laravel framework. The application is explicitly designed to address the growing issue of stray, abandoned, and injured cats within our local communities by connecting them with compassionate individuals looking to adopt. By compiling rescue reporting tools, detailed adoption galleries, educational resources, and embedded data handling workflows into a centralized environment, the portal streamlines operations that are traditionally scattered across unstructured social media platforms.

## Project Objectives

- **Primary Goal:** Provide a unified community platform to browse adoptable cats, report strays needing immediate medical attention, and promote responsible pet ownership.
- **Technical Goal:** Build a secure, structured web application implementing the Laravel MVC (Model-View-Controller) architecture blueprint.
- **Data Management Goal:** Integrate robust Eloquent CRUD operations and database architectures to store, update, and manage cat records and public rescue submissions safely.
- **User Experience Goal:** Provide a clean, highly responsive interface utilizing modern styling, drop-down modules, and interactive elements across all target screens.

## Target Users

- **Public Visitors / Adopters:** Community members browsing available pets, completing adoption requests, or checking care advice.
- **Good Samaritans / Reporters:** Individuals reporting local stray or injured cats by uploading visual evidence, locations, and structural severity markers.
- **Sanctuary Administrators:** Internal personnel with elevated access privileges to manage cat records, perform administrative CRUD actions, and process incident queues.

#






















































































































































































































## Installation and Setup Instructions

### Prerequisites
- PHP >= 8.2
- Composer Dependency Manager
- MySQL / SQLite Database Server
- Node.js & NPM Installation

### Step-by-Step System Activation

1. Clone the Repository

git clone https://github.com/shefah11/Nine-Lives-Sanctuary.git
cd nine-lives-sanctuary

2. Install Dependencies

composer install
npm install

3. Environment Configuration

cp .env.example .env
Configure the .env file to:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nine_lives_db
DB_USERNAME=root
DB_PASSWORD=

php artisan key:generate

4. Database Setup, type the following in the terminal:

php artisan migrate
php artisan db:seed

5. Start Development Server

//Laravel backend
php artisan serve

//Frontend
npm run dev







## Conclusion

The Nine Lives Sanctuary website successfully demonstrates the implementation of a Laravel-based web application for cat adoption, rescue reporting, and healthcare information management. The system provides secure user authentication, efficient adoption application management, and a user-friendly platform for both administrators and users to support animal welfare initiatives.

### Key Achievements

- Developed a responsive and intuitive user interface for cat adoption and rescue reporting.
- Applied Laravel MVC architecture to ensure organized and maintainable system development.
- Implemented secure user authentication and authorization features.
- Designed a structured relational database to manage users, cats, adoption applications, reports, and healthcare information.
- Produced comprehensive project documentation, including database design and system architecture.

### Project Impact

This project provided valuable experience in developing a complete web application using Laravel while working collaboratively as a team. Through the implementation of adoption management, rescue reporting, and healthcare awareness features, the system contributes to promoting responsible pet adoption and improving support for stray and abandoned cats. The technical and teamwork skills gained throughout this project can be applied to future software development projects.

- Project Completion Date:12 June 2026
- Course: INFO 3305 Web Application Development
