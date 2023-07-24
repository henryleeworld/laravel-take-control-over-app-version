# Laravel 9 控制應用程式版本

引入 pragmarx 的 version 套件來擴增應用程式版本，遵循一套語義化版本控制規範，一般主版本號遞增代表當做了不相容的修改，次版本號遞增代表當做了向下相容的功能性新增，修訂號遞增則當做了向下相容的問題修正。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/version` 來進行應用程式版本取得。

----

## 畫面截圖
![](https://i.imgur.com/jcmmpXe.png)
> 由左到右依序比較每個標識符號，第一個差異值用來決定優先層級