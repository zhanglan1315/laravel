# README

## Docker

docker 环境下通过 `docker-compose` 文件启动所有容器，
再 attach 到对应的 php 容器内，最后进入 /app 目录执行命令

首次安装项目需要执行以下命令来修改 storage 目录权限，
原因：从安全角度，php 不允许访问本机的文件，但 php 有时需要写入一些日志，为此我们给出这个目录。

```
chmod -R 777 storage bootstrap/cache
```

## 依赖安装

```
composer install
```

## 自动加载

如果新加入的文件无法被找到，可能是它使用了 [composer autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading)， 请手动运行命令来重新生成 `/vendor/autoload.php` 文件。

```
composer dump
```

## 数据库

```
// 运行数据库脚本
php artisan migrate

// 插入数据
php artisan db:seed

// migrate + db:seed
php artisan db:rebuild
```

## 运行测试

```
phpunit
```
