# Donate The Blood

A blood donation website built with PHP and MySQL. People can sign up as blood donors, and anyone who needs blood can look for donors by district and blood group. It covers all 64 districts of Bangladesh.

**Live preview:** https://alokr85.github.io/Donate-the-Blood/

[![Live preview](https://img.shields.io/badge/Live%20preview-Open%20website-E74C3C?style=for-the-badge)](https://alokr85.github.io/Donate-the-Blood/)

> The live preview shows every page and the full design. It runs on GitHub Pages, which cannot run PHP, so the forms there do not save data. To try the database features, run the project on XAMPP as shown below.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

## Pages

| Page | File | What it does |
|---|---|---|
| Home | `index.php` | Intro, quick donor search by district and blood group, and the site's vision, goal and mission |
| Donate | `donate.php` | Sign-up form for new donors |
| Donors | `donor.php` | List of registered donors |
| Search | `search.php` | Search donors by district and blood group |
| Sign in | `signin.php` | Donor login with email or phone |
| About | `about.php` | About the project |
| Register | `donet1.php` | Simple donor registration that saves to the database |
| Dashboard | `user/index.php` | Donor's own page with a "Save The Life" button |
| Update profile | `user/update.php` | Edit donor details |

## Built with

- **Front end:** HTML, CSS, Bootstrap, JavaScript (jQuery), Font Awesome
- **Back end:** PHP
- **Database:** MySQL
- **Local server:** XAMPP (Apache + MySQL)

## Run it on your computer

1. Install [XAMPP](https://www.apachefriends.org/) and start **Apache** and **MySQL** from the XAMPP Control Panel.
2. Copy this project into `C:\xampp\htdocs\donatetheblood`.
3. Open `http://localhost/phpmyadmin`, go to **Import**, choose `database/donatetheblood.sql` and click **Go**.
4. Open `http://localhost/donatetheblood` in your browser.

The database settings are in `config.php`. They use the XAMPP defaults (user `root`, no password). Change them if your MySQL setup is different.

## Folder structure

```
donate-the-blood/
├── index.php, donate.php, donor.php, search.php, signin.php, about.php, donet1.php, 404.php
├── config.php          # database connection
├── include/            # shared header, navigation and footer
├── user/               # donor dashboard and profile update
├── css/                # custom styles
├── img/                # images
├── bootstrap/, fontawesome/, jquery/   # front-end libraries
└── database/
    └── donatetheblood.sql   # database table
```

## Status

This is a student project. Donor registration (`donet1.php`) saves to the MySQL database. The sign-in, search and donor list pages have their layout ready, and connecting them to the database is the next step.

## Author

**Alok Roy**
[LinkedIn](https://www.linkedin.com/in/alok-roy-1022642b0/) · ralok3915@gmail.com
