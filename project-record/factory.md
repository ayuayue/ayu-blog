伪造数据

php artisan tinker



namespace App\Models

User::factory()->create();

User::factory()->count(10)->create();



User::factory()->hasPosts(10)->create();



Post::factory()->create();

Post::factory()->count(10)->create();



可以自定义每个字段的生成规则

User::factory()->vip()->create()

```
    public function vip()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => 'vip',
            ];
        });
    }
```

