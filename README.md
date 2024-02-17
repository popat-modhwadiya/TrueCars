# TrueCars
TrueCars is a web-based project in which you can add cars, remove cars,buy cars, and fire mail locally using an SMTP server.

## Features

- Add cars. 
- Remove cars.
- Buy cars.
- Change car prices.
- Fires mail locally using SMTP

## Deployment

Steps to run the project

- 1 : Download and install XAMPP server
- 2 : Open xampp folder then open htdocs folder and paste truecar  folder. Open XAMPP and start Apache and Mysql
- 3 : Open browser and search url "localhost/phpmyadmin"
- 4 : create database named 'truecar'
- 4 : Click on import and choose file "cars.sql" and import database
- 5 : Now open browser and search url "localhost/truecar/index.php"

Steps to fire mail locally

- 1: Open the XAMPP installation directory.

- 2: Navigate php.ini file from C:\xampp\php
 
- 3: Press ctrl + f to find the mail function
 
- 4: Search & pass the below-mentioned values.

```bash

› SMTP=smtp.gmail.com

› smtp_port=587

› sendmail_from = xxxxxxxxxxxxxxxxx@gmail.com

› sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
```

- 5: Open sendmail.ini file from C:\xampp\sendmail.

- 6: Press ctrl + f & find sendmail.
 
- 7: Search & pass the below-mentioned values.

```bash

› smtp_server=smtp.gmail.com

› smtp_port=587

› error_logfile=error.log

› debug_logfile=debug.log

›  auth_username=***************@gmail.com

› auth_password=**************** //first create your password
```

## Screenshots
![1](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/c8467e60-4507-436c-9b5e-67ef8d8eba41)
![2](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/d8073a97-6ceb-4038-930e-6e3a0855c52e)
![3](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/0ee7d2cd-aa1a-4d59-8ab9-da16de5b577a)
![4](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/4af4c902-cbc3-4207-bc90-9f7f33fbb83f)
![5](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/533934be-8a04-4c3f-8200-6b620e49ace3)
![6](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/f465db9b-b708-4054-8b45-bf42326761a4)
![7](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/0eb8a4f3-5f0a-4654-a277-04a9b4cce024)
![8](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/e3328bf5-9e90-41b4-ae7e-bb2d0098287b)
![9](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/a1faff62-d131-4645-902d-e11026a5858e)
![10](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/42eadb22-2257-40b3-849a-0531befa1d4a)
![11](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/1ab30e77-f8d0-4fbc-8512-30149ef3ddb6)
![12](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/15182dfd-9e37-42b1-9b83-c3b7d4f0450f)
![13](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/474b7e26-44ed-4907-ab9c-30a76bf62002)
![14](https://github.com/popat-modhwadiya/TrueCars/assets/159280000/b08010be-b3e6-44a1-ae97-223a59848f67)






