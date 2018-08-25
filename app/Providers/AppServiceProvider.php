<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // 追加

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191); // mysql5.7で、バージョン5.7.7以下の場合は必要
        /*
        Laravelはデータベース中への「絵文字」保存をサポートするため、デフォルトでutf8mb4文字セットを使っています。バージョン5.7.7より古いMySQLや、バージョン10.2.2より古いMariaDBを使用している場合、マイグレーションにより生成されるデフォルトのインデックス用文字列長を明示的に設定する必要があります。

        引用元: インデックス長とMySQL／MariaDB
        */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
