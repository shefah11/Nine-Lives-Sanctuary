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

## Features and Functionalities

1. Public/Adopter Features
   - Adoption Gallery Access: Dynamic browsing of all cats available for adoption. Users can view profiles containing names, age, gender, and descriptions.
   - Adoption Application Submission: An interactive form workflow allowing authenticated users to submit formal adoption requests for specific cats, establishing a link between the user and the chosen animal.
   - Educational Healthcare Hub: A static/dynamic reading repository displaying essential cat care guidelines, rescue handling tips, and wellness documentation.
  
2. Good Samaritan/Reporter Features
   - Incident Logging & Rescue Reporting: A specialized reporting form where users can upload details of stray, injured, or abandoned cats.
   - Metadata Capturing: The form requires critical data entry including visual evidence uploads (images), specific location descriptions, and a structured structural severity marker (e.g., critical, injured, stable) to help the sanctuary prioritize rescues.
  
3. Sanctuary Administrator Features
   - Cat Record Management (Full CRUD): Elevated administrative access to create, read, update, and delete cat profiles within the adoption gallery.
   - Incident Queue Processing: An administrative dashboard panel to review, update, and manage public rescue submissions and track the pipeline of incoming animals.

4. User Authentication System
   - Engine Framework: Implemented a secure user access mechanism using standard hashing guidelines (Bcrypt) to guard login parameters safely inside the database server.
   - Session Security: All post-registration and access routes require token-matched verifications using Laravel's native session state storage engine.

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

## Database Design

### Database Schema Overview

Our database consists of 5 main tables designed to handle user accounts, cat adoption management, rescue reporting, and healthcare information.

### Core Tables

**User**

* Stores customer and administrator account information.
* Handles authentication and role management.

**Cat**

* Stores cat profiles available for adoption.
* Contains details such as name, age, gender, description, image, and adoption status.

**Adoption**

* Stores adoption applications submitted by users.
* Records the relationship between users and cats.

**Report**

* Stores rescue reports submitted by users regarding stray, injured, or missing cats.

**Health**

* Stores educational healthcare information and cat care guidelines displayed on the Healthcare Guide page.

### Entity Relationship Diagram (ERD)

### ERD AND SEQUENCE DIAGRAM LINK

**[(https://docs.google.com/document/d/1xsPjiVA2Fji6vPBLexrRZMJJuoausI2G94RjeouU_Jw/edit?usp=sharing)]**

### Key Relationships

* A User can submit multiple Reports (One-to-Many).
* A User can submit multiple Adoption applications (One-to-Many).
* A Cat can be associated with an Adoption application.
* Each Adoption record belongs to one User and one Cat.
* The Health table functions independently as a reference table for healthcare information.

### Laravel Components Implementation

#### Models and Relationships

**User Model**

* Stores user account information.
* Has many Reports.
* Has many Adoption applications.

**Cat Model**

* Stores cat adoption information.
* Has one or many Adoption records.

**Adoption Model**

* Belongs to User.
* Belongs to Cat.

**Report Model**

* Belongs to User.

**Health Model**

* Stores healthcare guide information.

## Challenges Faced and Solutions

### Challenge 1: Designing Database Relationships

**Problem:**
Determining the appropriate relationships between users, cats, adoption applications, and rescue reports while maintaining data consistency.

**Solution:**
The team designed an Entity Relationship Diagram (ERD) before implementation and established primary key and foreign key constraints to ensure data integrity.

### Challenge 2: Implementing Laravel MVC Architecture

**Problem:**
Integrating Models, Views, and Controllers while maintaining a clear separation of responsibilities across the system.

**Solution:**
Laravel's MVC architecture was applied consistently by separating business logic into controllers, database operations into models, and user interfaces into Blade templates.

### Challenge 3: Team Collaboration and Version Control

**Problem:**
Multiple team members worked on different modules simultaneously, creating the possibility of file conflicts and inconsistent project versions.

**Solution:**
GitHub was used for version control, allowing team members to manage updates, track changes, and collaborate efficiently throughout development.

## Future Enhancements

* Email notification system for adoption application updates.
* Appointment scheduling for cat adoption visits.
* Interactive map integration for rescue reporting.
* Advanced search and filtering in the Adoption Gallery.
* Administrator analytics dashboard.
* Real-time adoption application status tracking.
* Veterinary clinic directory and recommendation feature.
* Mobile-responsive enhancements for improved user experience.

## References

1. Laravel Documentation. (2025). Laravel Framework Documentation. https://laravel.com/docs

2. MySQL Documentation. (2025). MySQL Reference Manual. https://dev.mysql.com/doc

3. Lucid Software Inc. Entity Relationship Diagram (ERD) Guide. https://www.lucidchart.com

4. Munir, S., Mohd Istajib Mokhtar, & Ahmad Firdhaus Arham. (2023). Public perspectives on strays and companion animal management in Malaysia. BMC Public Health.

5. SPCA Penang. Life as a Stray is Always Hard. https://spcapenang.net

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
