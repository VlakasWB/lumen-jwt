#ENGLISH
This project already has an auth token sanctum register, login and logout

HOW TO WORK
1. cp .env.example .env
2. Edit .env
3. DB_DATABASE=your-database-name
4. DB_USERNAME=your-database-username
5. DB_PASSWORD=your-database-password
6. composer update
7. php artisan jwt:secret
8. php -S localhost:8000 -t public
9. Check on Postman
10. Don't forget uncomment code route get /key (in folder routes file web.php) for APP KEY
11. Open browser http://localhost:8000/key
12. Copy to .env in APP_KEY=
13. Finish!

============

#INDONESIA

Proyek ini sudah memiliki auth token sanctum register, login dan logout

CARA MENGGUNAKAN
1. cp .env.example .env
2. Edit DB_DATABASE=nama-database-kamu
3. composer update
4. php artisan serve
5. Cek di Postman
6. composer update
7. php artisan jwt:secret
8. php -S localhost:8000 -t public
9. Check on Postman
10. Jangan lupa buka comment kode route yang get /key (Di dalam folder routes file web.php) untuk nanti di isi pada APP_KEY
11. Open browser http://localhost:8000/key
12. Copy to .env in APP_KEY=
13. Selesai!

#POSTMAN

- REGISTER

![image](https://user-images.githubusercontent.com/77152618/142194895-b3d569b9-bb78-44cf-bf2b-f53fc58e4e73.png)

- LOGIN

![image](https://user-images.githubusercontent.com/77152618/142194934-38d58e27-4618-4fc6-a970-ef62bf0173d2.png)

- LOGOUT

![image](https://user-images.githubusercontent.com/77152618/142195031-b4c1f086-02e9-48a0-a2b5-e05a09051432.png)

- GET USER

![image](https://user-images.githubusercontent.com/77152618/142194986-af84fefa-efa3-49c6-8d19-a6ae098ac3ec.png)
