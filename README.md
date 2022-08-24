- Cần chạy php artisan storage:link
- Xử lý queue:
php artisan queue:table
php artisan migrate
Sửa env QUEUE_CONNECTION=database
- Xử lý chạy supervisor
