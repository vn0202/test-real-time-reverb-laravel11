# Reverb Real-Time Notifications


when user create a post, The admin page will show message that notify that user X has created a post
1. run migrate 

```php
php artisan migrate
```
2. Setup Reverb & Echo Server


```php
php artisan install:broadcasting

npm install --save-dev laravel-echo

```

3 . Run 

```php 

npm run dev

php artisan serve

php artisan reverb:start
```
