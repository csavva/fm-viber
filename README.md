# fm-viber
> A Viber to FileMaker webhook app

---
## Purpose

This repo is to hold a simple webhook app that will get data from Viber when it is called and pass them on to a FileMaker database

---
## Installation

- Download and host the Sample.fmp12 to a FileMaker User
- Setup a user account
- Download the rest of the code and update settings.php file with your configuration
- Add all the code files under `FileMaker Server/HTTPServer/htdocs/httpsRoot/fm-viber`
- Create app in Viber and provide link to webhook `https://<your-host>/fm-viber/webhook.php`
