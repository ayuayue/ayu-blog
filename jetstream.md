安装

```
composer require laravel/jetstream
```

初始化

```bash
php artisan jetstream:install livewire

php artisan jetstream:install livewire --teams
```

```bash
php artisan jetstream:install inertia

php artisan jetstream:install inertia --teams
```

加载前端资源并迁移数据库，token改为 db方式

```bash
npm install
npm run dev
php artisan migrate
```