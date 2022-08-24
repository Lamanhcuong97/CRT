- Cần chạy php artisan storage:link
- Xử lý queue:
  Sửa env QUEUE_CONNECTION=database
  Chạy php artisan queue:table
  Chphp artisan migrate
- Xử lý chạy supervisor
