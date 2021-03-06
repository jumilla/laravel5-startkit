## Laravel PHPフレームワーク マルチランゲージスタートキット

### インストール方法

#### Laravel 5.3
```Console
$ composer create-project laravel-plus/laravel5 <directory>
```

#### Laravel 5.2
```Console
$ composer create-project laravel-plus/laravel5=5.2.* <directory>
```

#### Laravel 5.1
```Console
$ composer create-project laravel-plus/laravel5=5.1.* <directory>
```

#### Laravel 5.0
```Console
$ composer create-project laravel-plus/laravel5=5.0.* <directory>
```

### 本家版との違い

以下のものが標準で組み込まれています。
- パッケージ指定
	- [Extension Pack - laravel-plus/extension](https://github.com/jumilla/laravel-extension)
	- [Addomnipot - jumilla/laravel-addomnipot](https://github.com/jumilla/laravel-addomnipot)
	- [Versionia - jumilla/laravel-versionia](https://github.com/jumilla/laravel-versionia)
	- [Socialite - laravel/socialite](https://github.com/laravel/socialite)
	- [GuzzleHttp - guzzlehttp/guzzle](https://github.com/guzzle/guzzle)
	- [Debugbar - barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
	- [Faker - fzaninotto/faker](https://github.com/fzaninotto/faker)
	- [PHP Coding Standards Fixer - friendsofphp/php-cs-fixer](https://github.com/friendsofphp/php-cs-fixer)
- アドオン
	- **auth** Laravel 5.3に添付されている標準認証MVCキット
	- **debug** デバッグ支援キット
	- **generator** ファイル生成コマンド **php artisan make:xxx** のスタブファイルカスタマイズキット
- 追加コマンド (Extension Pack)
	- make:addon
	- make:command
	- make:controller
	- make:event
	- make:job
	- make:lisener
	- make:mail
	- make:middleware
	- make:migration
	- make:model
	- make:notification
	- make:policy
	- make:provider
	- make:request
	- make:seeder
	- make:test
	- database:status
	- database:upgrade
	- database:clean
	- database:refresh
	- database:rollback
	- database:again
	- database:seed
	- addon:list
	- addon:status
	- addon:name
	- addon:check
	- addon:remove
	- app:container
	- hash:make
	- hash:check
	- tail (Laravel4互換、`app.log=daily`対応)
- 日本語リソース (resources/lang/ja)

## 著者

Fumio Furukawa / 古川 文生 (Laravel Tokyo)

## ライセンス

MIT
