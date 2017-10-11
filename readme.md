### 项目搭建

该项目使用laravel5.4框架，php版本高于5.6.4。

- 克隆laravel-comment项目

```
git clone https://github.com/PLDaily/laravel-comment.git
```

- 安装composer依赖

```
composer install
```

- 生成laravel的APP_KEY

```
php artisan key:generate
```

- 数据库迁移

```
php artisan migrate
```

### l5-repository

L5-repository是一个为laravel5提供的数据库抽象层，目的是为了将应用的数据库操作和核心的业务逻辑分离开，保证controller的精致。项目地址：[中文](https://github.com/zhaohehe/z-repository)   [英文](https://github.com/andersao/l5-repository)

- Criteria用于发起复杂的查询
- transformer用于包装数据库及redis查询出来的结果。可使用skipTransformer()跳过安装

### 事件系统

使用php artisan event:generate生成项目文件，需要在EventServiceProvider类中注册事件。