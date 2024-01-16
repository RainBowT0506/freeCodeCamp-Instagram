實作影片 [Laravel PHP Framework Tutorial - Full Course for Beginners (2019)](https://www.youtube.com/watch?v=ImtZ5yENzgE)

Github：
[freeCodeCamp-Instagram](https://github.com/RainBowT0506/freeCodeCamp-Instagram)


| 環境 | 版本 | 
| -------- | -------- | 
|node.js|v11.14.0| 
|npm|6.7.0|
|laravel|2.0.1|
|Laravel Doc|5.8|

# Introduction
# What is Laravel?
# Installing Laravel
* 安裝 Composer（PHP 依賴套件管理器）。
* 安裝 Node.js 並確保安裝了 npm（JavaScript 的套件管理器）。
    node -v
* 使用 Composer 安裝 Laravel 安裝器（Laravel Installer）。
* 確保 Composer 的 bin 目錄在系統的 PATH 變數中。
    `echo $PATH`
# First look at the project
composer.json
# Intro to php artisan
1. `php artisan` 是 Laravel 的命令行工具，用於執行各種命令。
2. Laravel 的命令分為根級命令和命名空間命令，根級命令使用 `php artisan`，而命名空間命令使用 `php artisan [namespace]:[command]`。
3. Laravel 內建 PHP 伺服器，可使用 `php artisan serve` 啟動，並在指定地址查看應用程式。
4. Laravel 使用 Blade 模板引擎，允許在視圖中嵌入 PHP 代碼，但建議保持視圖中的 HTML 結構。
5. 資源視圖位於 `resources/views`，並有一個 `welcome.blade.php` 文件，用於顯示初始歡迎頁面。
6. Laravel 內建身份驗證系統，可使用 `php artisan make:auth` 生成身份驗證相關的視圖和控制器。

`php artisan`

`php artisan serve`

`composer install`

影片中的 php version:7.2

到 [release](https://www.php.net/releases/) 找要得 version

移到 xampp 裡面
![image](https://hackmd.io/_uploads/SkCEa-PuT.png)

將 php.ini-development 改為
php.ini

將以下的註解拿掉
```
extension=curl
extension=openssl
extension=fileinfo
extension=mbstring
```

更改 extension_dir 位置
```
extension_dir = "C:\xampp\php\php-7.2.9\ext"
```

`php --ini`

```
composer config --global cafile "C:\Users\UserName\Downloads\cacert.pem"
```

`composer diagnose`
# Generating login flow with make:auth
Laravel 8 及以後的版本中實現身份驗證
```
composer require laravel/ui
php artisan ui bootstrap --auth
```
```
npm install && npm run dev
```
# Setting Up the Front End with Node and NPM
## 1. 前端開發工具和框架：
- Laravel是一個全面的開發框架，包含前端和後端開發工具。
- Laravel包含Twitter Bootstrap和Vue.js，用於前端開發。
## 2. NPM和Node.js：
- 使用NPM（Node Package Manager）進行前端開發依賴管理。
- NPM和Node.js是必須的工具，用於管理JavaScript相關的套件和執行前端編譯。
## 3. NPM安裝和編譯：
- 使用`npm install`命令安裝前端相依套件。
- 使用`npm run dev`命令進行前端編譯，將前端資源編譯成可用的文件。
## 4. 前端資源位置：
- 編譯後的前端資源文件（如app.js和app.css）位於`public`目錄中。
- 開發者主要在`resources`目錄下的相應檔案（如app.js和app.scss）進行編寫。
## 5. View和Home頁面：
- Laravel的View是前端展示的地方，`home`是當用戶登入應用程序時加載的頁面。
- 提到要先設定數據庫，才能創建用戶。
## 6. 簡易錯誤處理：
- 提到可能需要刪除`node_modules`並重新安裝，以解決NPM相關的錯誤。
# Migrations and Setting Up SQLite
`vim database/database.sqlite`
out to vim : `wq`
## 1. Migrations（遷移）：
- Migrations是描述數據庫結構的文件，以便進行版本控制和協作。
- 通過遷移，開發者能夠使用文件描述數據庫變更，而不是直接在數據庫中進行修改。
## 2. 為什麼使用Migrations：
- Migrations提供了一種系統性的方式，記錄每個數據庫更改。
- 避免在生產環境中手動進行相同的更改，並確保每個步驟都被執行。
- 有助於團隊合作，所有開發者都能夠了解數據庫的結構變更。
## 3. 遷移概念：
- 遷移是包含創建數據庫的所有指令的文件，告訴數據庫如何創建自己。
- 遷移是在整個項目中修改數據庫的方法，但通過遷移文件，而不是直接修改數據庫。
## 4. SQL Lite數據庫設置：
- 選擇使用SQL Lite作為數據庫，並在`database`目錄下創建一個`database.sqlite`文件。
- 使用`.env`文件進行數據庫配置，設置`DB_CONNECTION`為SQL Lite。
## 5. 遷移命令：
- 使用`php artisan migrate`命令執行遷移，將數據庫結構更新到最新狀態。
- 檢查遷移後的結果，可以看到已創建了`users`表和`password_resets`表。
## 6. 註冊和登錄：
- 通過註冊新用戶，驗證遷移是否正常工作。
- 登錄後，檢查`home`頁面的可訪問性，確保只有登錄用戶才能訪問。
## 7. 環境配置：
- 使用`.env`文件配置應用程序的環境變量，特別是數據庫連接部分。
## 8. 錯誤處理：
- 在更改`.env`文件後，需要停止並重新運行伺服器，以確保變更生效。
- 使用`Ctrl+C`停止運行中的伺服器進程。
# Designing the UI from Instagram

## 1. Logo 與標題：
- 複製 Instagram 頁面的設計，開始製作應用程式。
- 使用 Laravel 的 Blade 模板，在 `layouts/app.blade.php` 中更改應用程式標題。
- 添加 Free Code Camp 的 logo（使用 SVG 格式），調整大小並顯示在應用程式上方。
## 2. 前端排版：
- 創建包含頭像、統計數字（帖文、追蹤者、追蹤中）、Free Code Camp 連結的前端布局。
- 使用 Bootstrap 的 Grid System 切割列，以實現網頁排版。
- 運用 CSS 調整間距、字體粗細等樣式。
## 3. 字體和顏色調整：
- 使用 Google Fonts API 將 Open Sans 字體引入專案，包括正常（400）和粗體（700）兩個權重。
- 透過 Sass 變數文件調整字體設定。
- 更改背景色為白色。
## 4. 帖文區域：
- 在應用程式中建立新的區塊以顯示帖文。
- 使用 Bootstrap 的列和列內容設定，以實現網頁排版。
- 複製 Instagram 的帖文區域的前三篇帖文。
## 5. 前端排版調整：
- 使用 Bootstrap 的 `W-100` 類別使圖片寬度填滿容器。
- 透過 CSS 調整間距，確保帖文之間有足夠的空間。
# Adding Username to the Registration Flow
## 1. 註冊流程中新增使用者名稱（Username）：
- 在註冊流程中，原始表單僅包含姓名（name）、電子郵件（email）、密碼（password）等欄位，現在需要新增使用者名稱的欄位。
- 透過修改註冊表單（register.blade.php）的 HTML 標記，添加使用者名稱的相關欄位。
## 2. 註冊表單驗證：
- 使用 Laravel 的表單驗證器（validator）來確保使用者輸入的資料符合要求。
- 在註冊控制器（RegisterController.php）中，使用 Laravel 提供的 Validator 類別來定義對使用者名稱的驗證規則，包括必填（required）、字串（string）、最大長度（max:255）和唯一性（unique）。
## 3. 資料庫遷移（Migration）的修改：
- 修改資料庫遷移檔案（create_users_table.php），新增使用者名稱的欄位。
- 設定使用者名稱的唯一性約束，確保不會有重複的使用者名稱存在。
## 4. 註冊控制器的修改：
- 在註冊控制器中，修改新增使用者的邏輯，將使用者名稱納入建立新使用者的過程。
## 5. 模型（Model）的修改：
- 修改使用者模型（User.php），將使用者名稱列為可批量賦值的屬性，確保該屬性能夠被正確寫入資料庫。
## 6. 資料庫遷移和 Tinker 操作：
- 使用 `php artisan migrate:refresh` 重新建立資料庫，以便套用對使用者名稱的修改。
- 使用 Laravel Tinker 進行實際操作，確認資料庫中新增的使用者名稱欄位。
```
php artisan tinker

User::all()
```
## 7. 視圖（View）的修改：
- 修改應用程式的導覽列（navbar），將原本顯示使用者姓名的地方改為顯示使用者名稱。
## 8. 重點提醒：
- 適時使用 Laravel Artisan 指令，如 `make:auth`、`migrate`、`migrate:refresh`，以快速生成所需檔案和進行資料庫操作。
- 注意模型、控制器和視圖的分離，遵循 MVC 架構，確保程式碼的結構清晰。

# Creating the Profiles Controller
## 1. 修改導覽列顯示使用者名稱：
- 在導覽列中，原本是顯示使用者的姓名，但透過修改對應的 Blade 檔案，改為顯示使用者的使用者名稱。
## 2. 建立 Profiles Controller：
- 創建一個新的控制器（Profiles Controller）來處理使用者個人資料的顯示。
- 使用 `php artisan make:controller ProfilesController` 命令創建新的控制器。

```
php artisan help make:controller
```
## 3. 修改路由和控制器：
- 在 `web.php` 中，將原本使用的 `HomeController` 改為使用新建的 `ProfilesController`，並呼叫其 `index` 方法。
- 調整 `ProfilesController` 中的 `index` 方法，將原本的內容移入，確保頁面顯示正常。
## 4. 資料的取得：
- 提及從已驗證的使用者中取得使用者名稱，以及在 Blade 檔案中使用這些資料來顯示對應的內容。
- 強調使用 Laravel Tinker 進行實際操作，並確認資料的正確性。
## 5. 建立 Profiles Blade 檔案：
- 提到設計 `profiles.blade.php` 檔案，用來呈現使用者的個人資料。
- 考慮在個人資料頁面顯示使用者的名稱、簡介等相關資訊。
## 6. 控制器中的方法命名：
- 強調 RESTful 風格中 `index` 方法的意義，代表顯示所有資源的行為，而非顯示單一資源。
- 討論不同 RESTful 方法在控制器中的命名慣例，例如 `show` 方法用於顯示單一資源。
## 7. 特別注意權限：
- 指出原本的 `HomeController` 有驗證使用者，但在這個情境下，可能需要開放給未登入的使用者瀏覽個人資料頁面。
## 8. 使用 Laravel Artisan 指令：
- 介紹 `php artisan help` 用來查看 Artisan 指令的說明。
- 使用 `php artisan make:controller` 來創建新的控制器。

# RESTful Resource Controller
## 1. Laravel 文件
- 遵循 RESTful 控制器慣例的重要性
- 預定義的動詞，用於不同操作（例如，show、index等）
- 操作與 URL、動詞、行動的匹配
## 2. Show 操作
- 顯示特定使用者的個人檔案
- 區分 show 與 index 操作
- 路由中表示變數的慣例（大括號）
## 3. 在 Web 路由中實現
- 定義帶有變數的路由（例如，profile/{user}）
- 連結到 profiles 控制器的 show 方法（profile.show）
## 4. 獲取使用者資料
- 存取控制器方法中的變數（例如，$user）
- 長格式：使用 User 模型檢索使用者資料
- 命名空間考慮事項（使用 `app\User` 或使用 `use App\User` 進行導入）
## 5. 實際演示
- 演示將使用者資料傳遞到視圖
- 了解模型在表示資料庫行中的角色
- 遵循慣例以寫出更清晰的程式碼

# Passing Data to the View
資料傳遞至視圖：

傳遞資料至視圖的方式是透過第二個參數，你可以將一個陣列傳遞進去。例如，我們設定 `user` 變數等於我們的使用者（user）。`user` 就是在我們的 Home 視圖中將要使用的變數名稱。在 PHP 中，你可能熟悉使用 `< ?` 作為 Echo 的簡寫，然後你可以放入 `user`，例如像這樣。然而，在 Laravel 中，有更優雅的方法來進行這個動作。

在 Laravel 中，為了在視圖中輸出任何內容，你可以使用雙大括號的 Mustache 語法。所以，我們可以寫成 `{{ user }}`，然後我們需要的是使用者名稱。讓我們看看這樣是否可行，儲存並重新整理網頁。如此一來，我們成功地將資料傳遞到了視圖中。
# Adding the Profiles Mode, Migration and Table
## 1. 創建 Profile 模型和遷移
- Model (模型): 
  - Profile 模型，繼承 Eloquent Model。
  - Eloquent：Laravel ORM 實現。
- Migration (遷移): 
  - 使用 `php artisan make:model Profile -m` 指令。
  - 生成 `create_profiles_table` 遷移檔案。
## 2. 編輯 Profile 資料表遷移
- 遷移內容:
  - 欄位：title（標題）、description（描述）、URL（連結）。
  - 資料類型：string 和 text。
  - 將欄位設為 nullable。
- 關聯 User 資料表:
  - `unsignedBigInteger` 欄位儲存 User 的 ID，即 user_id。
  - 一對一關聯，需連結至 User 資料表。
  - 添加索引（index）。
## 3. 遷移資料庫
- 使用 `php artisan migrate`，建立 Profiles 資料表。
4. Eloquent 模型
- Profile 模型:
  - 位於 app/Profile.php。
  - 定義 Profile 資料表的關聯和操作。
## 5. 資料庫遷移 Down 方法
- Down 方法:
  - 用於回復遷移，刪除 Profiles 資料表。
## 6. Eloquent 關聯性
- 一對一關聯:
  - Profile 屬於 User，User 有一個 Profile。
  - 使用 user_id 欄位建立關聯。
## 7. Artisan 指令
- Artisan Commands:
  - 使用 Artisan 提供的指令簡化模型和遷移的創建過程。
## 8. ORM (物件關聯映射)
- ORM (Object-Relational Mapping):
  - Eloquent 是 Laravel 的 ORM 實現，將資料庫操作映射到物件操作。
## 9. Migration 的雙向執行
- Up and Down Methods:
  - 遷移可以正向執行（up）以應用變更，也可以反向執行（down）以還原變更。
10. Laravel 框架
- Laravel Framework:
  - 提供 Artisan 工具、Eloquent ORM 等功能，簡化開發流程。

# Adding Eloquent Relationships
## 1. 在 Laravel 中定義關聯:
- Laravel 允許我們使用清晰的英文概念來定義模型之間的關聯。
- 例如：一個使用者擁有一個個人檔案，而個人檔案屬於一個使用者。
## 2. 實作於程式碼中:
- 在 Profile 模型中定義與 User 模型的關聯。
- 使用 `belongsTo` 方法建立關聯。
- 遵循命名慣例（例如：使用 `User::class`）。
## 3. 程式碼範例 - Profile 模型:
   ```php
   // 在 Profile 模型中
   public function user()
   {
       return $this->belongsTo(User::class);
   }
   ```
## 4. 逆向關聯 - User 模型:
- 在 User 模型中建立逆向關聯。
- 使用 `hasOne` 方法定義一對一關聯。
- 如果模型在相同的命名空間中，則不需要完整的命名空間。
## 5. 程式碼範例 - User 模型:
   ```php
   // 在 User 模型中
   public function profile()
   {
       return $this->hasOne(Profile::class);
   }
   ```
## 6. 手動新增個人檔案:
- 使用 Laravel Tinker 互動式工具與應用程式進行互動。
- 示範如何創建新的個人檔案並將其與使用者關聯。
- 使用 `push` 方法將變更保存到資料庫。
## 7. 在視圖中使用動態資料:
- 更新 Blade 視圖以顯示動態使用者個人檔案資料。
- 使用雙大括號語法存取使用者和個人檔案屬性。
- 處理可為空的欄位並設定默認值。
## 8. 進階用法 - `push` 方法:
- `push` 方法允許保存對整個模型的變更，包括關聯。
- 在處理模型上的多個關聯時非常有用。
- 消除單獨保存每個關聯的需求。
## 9. 學習成果:
- 了解在 Laravel 中如何定義模型之間的關聯。
- 實現逆向關聯以實現無縫導航。
- 使用 Tinker 進行手動測試和數據操作。
- 將動態數據集成到 Blade 視圖中。
```
php artisan tinker
$profile = new \App\Models\Profile();
$profile->title = 'Cool Title'
$profile->description = "我的描述"
$profile->user_id=1
$profile->save();

$profile -> user

$user = \App\Models\User::find(1);
$user -> profile->url="https://github.com/RainBowT0506"

$user->push()
```
# Fetching the Record From The Database
## 1. 引言:
- 確保在應用程式中妥善處理擷取記錄的過程。
- 考慮使用者可能進行的錯誤輸入或濫用情況。
## 2. 引發問題:
- 示範當使用者輸入無效資料時，程式可能發生崩潰的情況。
- 使用 `profile` 查詢時，如果找不到對應的使用者，系統會拋出例外，導致應用程式崩潰。
## 3. 解決方法:
- 使用 `findOrFail` 方法，這是更為健全的選擇。
- `findOrFail` 方法會檢查是否找到對應的資料，如果沒有，則會返回適當的 404 錯誤回應，而非拋出例外。
## 4. 程式碼範例 - 原本的 `find` 方法:
   ```php
   // 原本的方式
   $user = User::find($userId);
   ```
## 5. 程式碼範例 - 使用 `findOrFail` 方法:
   ```php
   // 更為健全的方式
   $user = User::findOrFail($userId);
   ```
## 6. 404 錯誤回應:
- 顯示如何返回正確的 404 錯誤回應。
- 避免傳統的例外拋出，改用 Laravel 的錯誤處理機制。
- 提供使用者明確的資源未找到的訊息。
## 7. 防禦性程式碼:
- 強調使用 `findOrFail` 來預防應用程式因資源不存在而崩潰。
- 使用者輸入可能不可靠，應考慮各種情境。

# Adding Posts to the Database & Many To Many Relationship
## 建立 Posts Model 與 Migration：
- 使用 `php artisan make:model Post -m` 創建 Post Model 並生成 Migration。
- 在 Post Migration 中建立 posts 資料表，包含 user_id（關聯使用者）、caption（標題）、image（圖片）等欄位。
- 利用 `php artisan migrate` 完成資料表的建立。
## 建立 Posts 與 Users 之間的一對多關係：
- 在 User Model 中使用 `public function posts()` 定義一對多關係，表示一個使用者可以擁有多個貼文。
- 在 Post Model 中使用 `public function user()` 定義與使用者的屬性，表示一個貼文屬於一個使用者。
## 建立 Posts Controller 與相對應的視圖：
- 在 Posts Controller 中新增 `create` 方法，該方法將返回用於新增貼文的表單視圖。
- 在 resources/views/posts 目錄下新增 `create.blade.php` 視圖，該視圖包含一個表單，允許使用者輸入貼文標題和上傳圖片。
- 在 web.php 中新增 `post/create` 路由，將其指向 Posts Controller 中的 `create` 方法。
## 提交貼文表單：
- 在 `create.blade.php` 視圖中的表單中，指定 `enctype="multipart/form-data"` 以支援檔案上傳。
- 在 web.php 中新增 `post` 路由，將其指向 Posts Controller 中的 `store` 方法，該方法處理接收到的貼文資料。
## 進一步補充：
- 在 Post Migration 中，可以使用外鍵約束和 `onDelete('cascade')` 來設定資料庫層面的關聯性，以便在刪除使用者時同時刪除其所有貼文。
- 在實際應用中，可能需要進行檔案驗證、儲存上傳的圖片，以及處理其他複雜的邏輯。此處僅為基本實現。 
- 提到「419 Page Expired」錯誤，解釋這實際上是 CSRF（Cross-Site Request Forgery）錯誤，為了防止不授權的提交，Laravel 使用 CSRF token 進行驗證。
- 說明 CSRF 攻擊可能讓不授權的使用者透過 curl 指令直接提交表單，而 Laravel 的解決方式是為每個表單添加一個大型的 CSRF token。
## 解決方案：
- 在 Blade 模板中使用 `@csrf` 指令，自動生成 CSRF token，確保表單提交是合法的。
## 表單驗證：
- 在 Controller 中使用 `request()->validate()` 方法進行表單驗證。
- 示範驗證 `caption` 和 `image` 兩個欄位，確保它們都是必填的，並使用 `image` 驗證規則確保 `image` 是圖片檔。
## Mass Assignment 保護：
- 解釋 Mass Assignment 的保護機制，當嘗試大量指派屬性時，需要在 Model 中設定 `fillable` 或 `guarded` 屬性。
- 示範取消保護，使用 `guarded` 屬性設為空陣列，允許大量指派。
## 外鍵關係與模型關聯：
- 使用 Eloquent Model 開始儲存資料，透過 `Post::create($data)` 方法新增資料。
- 提到外鍵 `user_id`，並解釋 Laravel 的 Eloquent Model 關聯，透過 `auth()->user()->posts()` 存取該使用者的所有文章。

### Adding Posts to the Database
## 1. Introduction to Adding Posts:
- 此部分介紹如何將帖子添加到數據庫中。
- 涉及到與數據庫互動的基本概念。
## 2. Database Models:
- 定義了數據庫模型，確保帖子的相關信息能夠被適當地存儲。
- 涉及模型的屬性，如標題、內容、時間戳等。
## 3. ORM (Object-Relational Mapping):
- 使用ORM的概念，將應用程序中的對象映射到數據庫表。
- 帖子對象如何通過ORM與數據庫進行交互。
## 4. CRUD Operations:
- 詳細介紹CRUD（創建、讀取、更新、刪除）操作，以便在應用程序中對帖子進行各種數據操作。
## 5. Form Handling:
- 如何通過表單來處理用戶輸入的帖子信息。
- 表單驗證和數據處理相關的技術。
## 6. Database Migrations:
- 介紹數據庫遷移，確保模型的更改能夠同步到數據庫中。

### Many To Many Relationship

1. Introduction to Many To Many Relationship:
- 解釋多對多關係的概念，即一個實體可以與多個其他實體相關聯，反之亦然。

2. Database Models for Many To Many Relationship:
- 如何定義和實現支持多對多關係的數據庫模型。
- 中介表（Intermediate Table）的使用，描述實體之間的聯繫。

3. ORM Handling of Many To Many Relationship:
- 使用ORM處理多對多關係的技術。
- 操作ORM以確保在應用程序和數據庫之間正確地處理多對多的關聯。

4. Querying Many To Many Relationships:
- 如何查詢和操控多對多關係，以檢索相關數據。

5. Practical Examples:
- 提供實際的例子，演示如何在代碼中應用多對多關係。


# Creating Through a Relationship
## 1. Context Setting:
- 介紹了在帖子模型中建立關聯，特別是使用 Laravel 中的 ORM（Object-Relational Mapping）。
## 2. Code Structure:
- 使用箭頭函數將 `posts` 與 `create` 關聯起來，確保可以透過這個關係添加帖子。
## 3. Authentication Handling:
- 強調程式會抓取已驗證的使用者，然後進入其帖子並進行創建。
- Laravel 在後台處理使用者 ID 的添加，這是因為它了解模型之間的關係。
## 4. Middleware Implementation:
- 解釋如何使用 Laravel 中的中介層（middleware）來確保只有已授權的使用者可以執行操作。
- 在應用程序控制器的構造函數中添加 `auth` 中介層，以確保整個控制器的路由都需要授權。
## 5. Handling Unauthenticated Users:
- 提到如果未經身份驗證的用戶嘗試訪問受保護的路由，將被重定向到登錄頁面。
## 6. Image Handling and File Upload:
- 引入對上傳圖片的需求，指出 Tinker 中的私有變量不是正確的存儲位置。
- 討論了將圖片上傳的必要性以及後續處理，包括對圖片進行調整大小以滿足 Instagram 的特定要求（正方形）。
## 7. Implementation in Tinker:
- 使用 Tinker 演示實際保存帖子到數據庫的過程，確保帖子和相關的用戶 ID 被正確存儲。
## 8. Code Cleanup:
- 提到需要進一步優化圖片處理，因為目前的實現還不夠完整。

# Uploading/Saving the Image to the Project
## 1. Introduction to Handling Uploaded Files:
- 講解在驗證數據後處理上傳的圖片，提到上傳的圖片實際上是 `uploaded file` 類的實例。
## 2. Usage of `uploaded file` Class:
- 示範如何透過 `request image` 獲取上傳的圖片，並且強調這是 Laravel 中的 `uploaded file` 類的實例。
- 提及 `uploaded file` 類的功能包括 `store` 方法，可簡化檔案存儲的過程。
## 3. Storing the Image:
- 使用 `store` 方法將圖片存儲在指定的路徑，並討論第一個參數是存儲路徑，第二個參數是存儲驅動程序的概念。
- 指出目前僅使用本地存儲，因此選擇 `public` 目錄。
## 4. Public Accessibility Issue:
- 指出 Laravel 將檔案移至 `public` 目錄，但該目錄內的檔案對公共訪問不可用。
- 引入 `php artisan storage:link` 命令，以在 `public` 目錄創建符號連結，從而解決此問題。
## 5. Artisan Command `storage:link`:
- 解釋如何運行 `php artisan storage:link` 以建立 `public/storage` 到 `storage/app/public` 的符號連結。
- 此步驟僅需在項目的生命周期內運行一次。
## 6. Image Path Retrieval and Handling:
- 在代碼中演示如何取得上傳圖片的文件路徑。
- 強調 `uploaded file` 實例返回的是文件路徑而不是直接的 URL。
## 7. Updating the Database with Image Path:
- 更改代碼以將上傳圖片的文件路徑保存到數據庫，替換先前直接傳遞數據的方式。
- 返回重定向而不是 `dd` 語句，以確保用戶被重新導向至其個人檔案頁面。
## 8. Ordering Posts by Creation Time:
- 在用戶模型中添加 `orderBy` 條件，以確保用戶的帖子按創建時間降序排列。
- 討論 Laravel 的 `timestamps` 遷移自動添加的 `created_at` 和 `updated_at` 欄位。
## 9. Dynamic Post Count in the View:
- 將在視圖中的硬編碼帖子數更改為使用實際的帖子計數。
## 10. View Styling Adjustment:
- 在視圖中調整樣式，增加帖子之間的底部填充，以改善外觀。
## 11. Summary and Next Steps:
- 總結這一階段的代碼實現，強調正在取得進展，並提到將來將處理其他功能和問題。

# Resizing Images with Intervention Image PHP Library
## 1. Introduction to Image Resizing:
- 引入概念，希望所有上傳的圖片都符合正方形的要求。
- 提到 Laravel 中的 Intervetion Image 库，這是一個優秀的 PHP 圖片處理庫。
## 2. Composer Package Installation:
- 使用 Composer 安裝 Intervetion Image，示範 `composer require intervention/image` 命令。
- 強調 Laravel 的 Package Auto Discovery 功能，可以自動發現並整合此類庫。
## 3. Namespace and Facade Import:
- 演示如何使用 Laravel 的 Facades 來引用 Intervetion Image 的功能。
- 確保命名空間正確，使用 `use Intervention\Image\Facades\Image;`。
## 4. Image Resizing Process:
- 使用 `Image::make()` 方法包裝上傳的圖片，以便後續進行操作。
- 使用 `fit` 方法將圖片裁剪和調整為指定的正方形大小（例如 1200x1200）。
## 5. Public Path Helper and Image Path:
- 使用 `public_path` 助手函數獲取圖片的完整路徑，以供 Intervetion Image 使用。
- 強調文件路徑而不是 URL 的概念。

## 6. Saving the Resized Image:
- 使用 `save` 方法保存調整大小後的圖片。

## 7. Viewing the Resized Image:
- 進行測試，展示調整大小的效果，以確保每張圖片都符合預定的正方形尺寸。

## 8. Linking Resized Images in the Show View:
- 更新 `show.blade.php` 視圖，將每個圖片包裝在錨點標籤中，連接到相應的帖子詳細信息。

## 9. Creating a Show Route and Controller Method:
- 創建一個 `show` 方法來處理單個帖子的顯示。
- 使用路由模型繫結，Laravel 會自動將帖子 ID 與相應的帖子實例關聯。

## 10. Route Model Binding and Show View Preparation:
- 介紹 Laravel 的路由模型繫結，讓控制器方法更直觀地接受相應的模型實例。
- 在 `show.blade.php` 中暫時輸出帖子，以確保路由模型繫結正常工作。

# Route Model Binding
## 1. Introduction to Route Model Binding:
- 說明 Route Model Binding 的概念，能夠自動將 URI 中的參數與相應的模型實例進行綁定。
## 2. Parameter Naming Conventions:
- 強調參數名稱的重要性，當 URI 參數的名稱與控制器方法的參數名稱相同時，Laravel 會自動進行繫結。
## 3. Automatic Fetching of Resources:
- 示範如何在控制器方法中直接使用模型作為參數，Laravel 會自動嘗試從數據庫中獲取相應的資源。
## 4. Handling 404 Not Found Automatically:
- 演示如果指定的資源不存在，Laravel 會自動回應 404 Not Found 錯誤。
## 5. Explicitly Specifying Model Type:
- 當需要顯示指定模型類型時，展示在路由參數中添加 `{post}` 作為 Post 模型的實例。
## 6. Using Compact Function for View Data:
- 介紹 `compact` 函數，作為簡潔的方式將模型實例傳遞到視圖中。
## 7. Building the Show View:
- 在 `show.blade.php` 中建構一個顯示單個帖子內容的視圖。
- 使用傳遞的模型實例顯示相應的用戶名和標題。
## 8. HTML Structure for Displaying Post Details:
- 使用 HTML 和 Blade 語法建構在 `show.blade.php` 中顯示帖子詳細信息的結構。
- 包括用戶名、圖片和標題等元素。
## 9. Responsive Image Styling:
- 添加 CSS 類別以確保圖片在視圖中的適應性，例如 `w-100`。
## 10. Testing Route Model Binding:
 - 測試 Route Model Binding 功能，點擊不同帖子後，展示相應的帖子內容。


# Editing the Profile
## 1. Introduction:
- 建立了編輯個人檔案的需求，並且創建了相應的 Edit View。
## 2. Creating Edit Link:
- 在使用者個人檔案頁面下方新增了 "Edit Profile" 的超連結。
- 討論了超連結的顯示條件，僅在瀏覽自己的檔案時才顯示。
## 3. Setting Up Edit Route:
- 在 `web.php` 中新增了 `/profile/{user}/edit` 的路由，將其對應到 `ProfilesController@edit` 方法。
## 4. ProfilesController Edit Method:
- 在 `ProfilesController` 中新增了 `edit` 方法，負責顯示編輯個人檔案的視圖。
- 使用 Route Model Binding 自動獲取使用者模型。
## 5. Edit View Structure:
- 在 `profiles/edit.blade.php` 中建立了編輯檔案的 HTML 頁面，基於先前的新增檔案頁面進行修改。
- 用 Blade 語法和 HTML 架構建立了編輯表單，顯示現有個人檔案的資訊。
## 6. Pre-filling Form Fields:
- 使用 `old` 方法和現有個人檔案的資訊，將表單預先填充，以方便編輯。
## 7. Validation:
- 加入表單驗證規則，確保必填項目（標題、描述、URL）的合法性。
## 8. Update Route and Method:
- 在 `web.php` 中新增了 `patch` 路由，將其對應到 `ProfilesController@update` 方法。
## 9. ProfilesController Update Method:
- 在 `ProfilesController` 中新增了 `update` 方法，處理編輯檔案的資訊，進行更新。
- 利用 `auth()->user()` 取得當前認證的使用者，以強化安全性。
## 10. Revisiting Mass Assignment Protection:
 - 回顧了模型的 `$guarded` 屬性，解釋了為什麼這個屬性在這個情境中被修改，以允許大量指派。
## 11. Additional Layer of Protection:
 - 強調使用 `auth()->user()` 作為取得當前使用者的方式，以加強安全性，並預防任意用戶ID的攻擊。
## 12. Testing and Security Measures:
 - 透過測試確保編輯檔案功能正確運作，並強調安全性措施，如保護只允許授權使用者進行操作。
## 13. Future Implementation - Policies:
 - 預告未來會實施授權策略（policies）以進一步保護檔案編輯功能。

# Restricting/Authorizing Actions with a Model Policy
## 1. 導入:
- 提到了編輯個人檔案的問題，強調如果不是正確的使用者，不應顯示編輯選項，引入了使用「策略（policies）」來實現這種授權控制。
## 2. 策略概念:
- 解釋了「策略」是一種簡單的方式，用來限制使用者對特定資源進行的操作。
- 策略與特定模型相關聯，此處選擇建立「檔案（profile）」的策略。
## 3. 建立 Profile Policy:
- 使用 `php artisan make:policy` 命令創建新的策略類別。
- 介紹了策略類別中的方法，每個方法代表對特定資源執行的不同操作。
## 4. Update 方法的實作:
- 重點介紹了 `update` 方法的實作，用以確認使用者是否有權更新特定檔案。
- 透過比較使用者 ID 與檔案使用者 ID 來確認是否擁有權限。
## 5. 在控制器中使用授權:
- 在 `ProfilesController` 的 `edit` 方法中使用 `authorize` 方法，確保只有授權的使用者才能訪問編輯頁面。
## 6. 保護其他相關路由:
- 強調需要保護其他相關的路由，如 `update` 與 `add new post`，以確保只有擁有權限的使用者能夠執行相應操作。
## 7. Blade Directive 的應用:
- 引入 Blade 指令 `@can`，用於在 Blade 模板中根據授權情況動態顯示或隱藏特定內容。
- 透過 `@can` 包裝新增文章連結，確保僅擁有權限的使用者才能看到。
## 8. 處理路由衝突:
這段敘述主要講解在 Laravel 應用程式中，定義的兩個路由（routes）可能產生衝突的問題，以及解決這個問題的方式。以下是重點整理：
### 1. 路由衝突問題：
- 兩個路由的定義如下：
     ```php
     Route::get('/create', 'PostController@create');
     Route::get('/{post}', 'PostController@show');
     ```
- 第一個路由 `/create` 處理新增文章的頁面，而第二個路由 `/{post}` 處理顯示單一文章的頁面。由於第二個路由使用了可變參數 `{post}`，可能與 `/create` 產生衝突。
### 2. 解決方法：
- 表示這兩個路由發生衝突的原因是因為 `{post}` 可以匹配任何路徑。為了解決這個問題，需要調整路由的順序。
- 建議將 `/create` 的路由擺在 `{post}` 路由之前，這樣當有 `/create` 的請求時，會先匹配到 `/create` 而不會被 `{post}` 吃掉。
- 調整路由的順序可避免產生 404 錯誤或其他路由衝突相關的問題。
### 3. 注意事項：
- 教學強調了路由順序的重要性，特別是對於使用可變參數的路由。確保放置有可變參數的路由在較後面，以避免它影響到其他路由的匹配。
### 4. 範例展示：
- 示範了將 `/create` 路由擺在 `{post}` 路由之前，以確保新增文章的頁面可以正確運作。

總結來說，這一部分的教學強調了 Laravel 路由的順序對於避免衝突以及確保正確匹配的重要性。


## 9. 驗證實現:
- 透過示例驗證策略的實際效果，展示了根據使用者權限動態隱藏或顯示頁面元素的功能。

# Editing the Profile Image
## 1. 問題背景:
- 提到了先前圖片是硬編碼的問題，希望能夠進一步優化編輯個人檔案的功能，實現圖片的動態編輯。
## 2. 編輯個人檔案圖片流程:
- 開始介紹如何處理更新個人檔案時的圖片操作。
## 3. 處理圖片更新:
- 在 `ProfilesController` 中的 `update` 方法中，加入對圖片的處理條件。
- 如果請求中包含圖片，則執行特殊處理，否則保留原有圖片。
## 4. 圖片處理邏輯:
- 借鑑 `PostController` 的圖片處理邏輯，將新圖片保存在 `public/profile` 路徑下，同時進行大小調整。
- 考慮使用者未選擇新圖片的情況，以避免每次儲存檔案都要求提供新圖片。
## 5. 更新資料庫記錄:
- 在圖片處理完成後，確保已更新使用者資料庫記錄。
- 使用 `array_merge` 函數，以確保 `image` 鍵在資料陣列中的正確位置。
## 6. 資料庫欄位調整:
- 需要在 `create_profiles_table` 遷移檔案中添加 `image` 欄位，以便納入新的圖片訊息。
- 由於修改了資料表結構，需使用 `php artisan migrate fresh` 重新建立資料表，進行從頭開始的遷移。
## 7. 遷移資料庫:
- 進行資料庫遷移，並確保一切正確。
## 8. 演示更新:
- 測試註冊新用戶，更新個人檔案，並觀察資料庫中的相應變化。
 
# Automatically Creating A Profile Using Model Events
## 1. 問題背景:
- 使用者註冊後，進入個人檔案頁面時，若使用者尚未有個人檔案，會遭遇錯誤，因為尚未創建相應的個人檔案紀錄。
## 2. 模型事件介紹:
- 使用 `boot` 方法覆寫模型的啟動，利用 `created` 事件，在每次建立新使用者時觸發。
- 可以在 `created` 事件的回調中執行額外的操作，這裡選擇在使用者創建時同時創建對應的個人檔案。
## 3. 設置 `boot` 方法:
- 在 User 模型中覆寫 `boot` 方法，呼叫父類別的 `boot` 方法。
- 利用 `created` 事件，建立一個新的個人檔案紀錄。
## 4. 使用模型關聯創建個人檔案:
- 使用模型關聯 `user()->profile()->create()`，以簡單而清晰的方式創建相對應的個人檔案。
- 設定一些預設值，例如使用者名稱作為標題。
## 5. 重新遷移資料庫:
- 由於調整了資料表結構，需使用 `php artisan migrate fresh` 重新遷移資料庫，使變更生效。
## 6. 測試創建使用者與個人檔案:
- 測試註冊新使用者，觀察是否同時創建相應的個人檔案。
- 進入個人檔案頁面，確認個人檔案被創建。


# Default Profile Image
## 1. 背景:
- 在註冊時，使用者可能沒有提供個人檔案圖片，因此需要設定預設圖片。
## 2. 新增 Profile Model 方法:
- 在 `Profile` 模型中新增 `profileImage` 方法。
- 這個方法用於返回個人檔案圖片，如果使用者提供了圖片，則使用者提供的圖片，否則使用預設圖片。
## 3. 修正 View 顯示圖片的部分:
- 在 View 中調整顯示個人檔案圖片的地方，呼叫 `profileImage` 方法。
- 如果有提供圖片，則顯示使用者提供的圖片，否則顯示預設圖片。
## 4. 修復可能的錯誤:
- 修正了在編輯個人檔案時可能出現的錯誤，確保在沒有提供新圖片的情況下不會刪除原有圖片。
## 5. 預設圖片設置:
- 上傳了一張簡單的 "no image available" 圖片，作為預設圖片。
- 該圖片可在使用者未提供個人檔案圖片時顯示。
## 6. 使用 `array_merge` 重構:
- 使用 `array_merge` 重新構造程式碼，避免在沒有提供新圖片時出現未定義變數錯誤。
## 7. 測試:
- 進行多個測試，包括新增使用者、編輯個人檔案、查看不同使用者的個人檔案等，以確保功能正常運作。
## 8. 解釋變更:
- 在 View 中的顯示個人檔案圖片的地方進行修改，確保正確處理提供圖片和未提供圖片的情況。
- 在 `Profile` 模型中新增方法，提高代碼的可讀性並支持更好的代碼結構。

# Follow/Unfollow Profiles Using a Vue.js Component
## 1. 引言:
- 目標是實現在用戶個人檔案和搜尋結果中添加「追蹤」按鈕，並使用 Vue.js 組件處理點擊事件，實現與後端的通信。
## 2. UI 調整:
- 在個人檔案和搜尋結果中添加 "追蹤" 按鈕，以便用戶可以追蹤其他用戶。
- 使用 Vue.js 組件包裝按鈕，以實現點擊時的即時反應而無需重新整理整個頁面。
## 3. Vue.js 組件創建:
- 創建名為 "FollowButton.vue" 的 Vue.js 組件，將追蹤按鈕的代碼放入其中。
- 在組件中使用 `v-on:click` 監聽點擊事件，並調用 `followUser` 方法處理點擊。
## 4. 前端通信:
- 使用 Axios 來發送 POST 請求到後端，告知後端用戶想要追蹤的目標。
- 在 `FollowButton.vue` 中，使用 `window.axios` 或 `axios` 對 `/follow/{user}` 端點發送 POST 請求。
## 5. 後端設置:
- 在 `web.php` 中添加 `/follow/{user}` 的 POST 路由，指向 `FollowsController@store`。
- 在 `FollowsController` 中的 `store` 方法處理接收到的請求，開始建立用戶之間的追蹤關係。
## 6. 動態屬性傳遞:
- 在 Vue.js 組件中通過 `props` 屬性接收從上層元件（如 Blade 模板）傳遞的數據。
- 使用 `v-bind` 將用戶 ID 動態傳遞到 Vue.js 組件中，以確保正確識別目標用戶。
## 7. Vue.js 監聽事件:
- 在 Vue.js 組件中使用 `v-on:click` 監聽點擊事件，觸發 `followUser` 方法。
- `followUser` 方法內部使用 Axios 發送 POST 請求到後端 `/follow/{user}`，接收並處理後端的回應。
## 8. 測試與驗證:
- 通過在瀏覽器中點擊追蹤按鈕，觀察 Vue.js 組件是否成功發送請求到後端 `/follow/{user}`。
- 確保後端能夠正確處理追蹤請求，並返回相應的成功消息。
## 9. 擴展與改進:
- 未來可以擴展此功能，例如添加取消追蹤按鈕，實現更豐富的用戶追蹤體驗。
- 可以改進用戶界面，提供更具吸引力的按鈕樣式和用戶反饋。

# Many To Many Relationship
```
php artisan make:migration create_profile_user_pivot_table --create=profile_user
```
## 1. 背景：
- 探討如何處理多對多關係，以實現用戶之間的追蹤關係，其中一個用戶可以追蹤多個檔案，而一個檔案也可以被多個用戶追蹤。
## 2. 多對多關係：
- 多對多關係需要創建樞紐表（Pivot Table），該表記錄了兩個相關模型的ID。
- 命名慣例：將相關模型按字母順序排列，使用底線連接，例如 `profile_user`。
- 使用 `php artisan make:migration` 創建樞紐表的遷移。
## 3. 樞紐表遷移：
- 在遷移中創建兩個欄位：`profile_id` 和 `user_id`，分別是檔案和用戶的ID。
- 遷移後運行 `php artisan migrate`。
## 4. 模型關係設置：
- 在用戶模型（User Model）中，使用 `belongsToMany` 定義 `following` 關係。
- 在檔案模型（Profile Model）中，使用 `belongsToMany` 定義 `followers` 關係。
## 5. 控制器操作：
- 在 `FollowsController` 中，使用 `toggle` 方法切換用戶與檔案之間的追蹤關係。
- 判斷用戶是否已登入，如果未登入，則返回 401 未授權錯誤。
- 在前端處理 401 錯誤，將用戶重新導向到登入頁面。
## 6. 前端互動：
- 在 Vue.js 組件中，使用 `v-on:click` 監聽追蹤按鈕點擊事件。
- 使用 Axios 發送 POST 請求到後端 `/follow/{user}`。
- 更新前端狀態以反映用戶是否已追蹤。
## 7. 錯誤處理：
- 使用 Laravel 中間件 `auth` 確保只有已登入的用戶才能執行追蹤操作。
- 捕獲未授權錯誤（401）並將用戶導向登入頁面，提供友好的用戶體驗。
## 8. 動態屬性傳遞：
- 在控制器中確定用戶是否已追蹤特定檔案，將該狀態作為屬性傳遞給 Vue.js 組件。
- 在 Vue.js 組件中使用 `v-bind` 動態綁定按鈕文本和狀態。
## 9. 用戶界面更新：
- 在成功接收後端回應後，更新前端狀態，以實現即時反饋用戶是否成功追蹤或取消追蹤。
## 10. 安全性考慮：
 - 通過 Laravel 中間件確保只有授權的用戶可以訪問追蹤操作，提高應用程序的安全性。
 - 使用 Axios 來處理後端請求，確保前端和後端之間的安全通信。
## 11. 擴展與改進：
 - 未來可擴展功能，例如添加取消追蹤按鈕，改進用戶介面以提供更優雅的追蹤體驗。

# Calculating Followers Count and Following Count
## 1. 功能需求：
- 實現獲取特定用戶的追蹤者（followers）和正在追蹤的人數（following count）功能。
## 2. 更新 `index.blade.php`：
- 在 `index.blade.php` 中，替換原本的 `23k` 文字，使用動態方式顯示用戶的追蹤者數量。
- 以及正在追蹤的人數。例如：`user->profile->followers->count()` 和 `user->following->count()`。
## 3. 前端即時更新：
- 由於目前僅在頁面刷新時才更新數量，提到 JavaScript 的即時更新，但認為超出 Laravel 課程的範疇。
- 在實際應用中，可能使用 Vue.js 或其他前端框架實現即時數據更新。
## 4. 實際操作示例：
- 透過 Laravel 提供的 Eloquent 模型關係，可以輕鬆地計算用戶的追蹤者數量和正在追蹤的人數。
- 在用戶模型中，`user->profile->followers->count()` 返回追蹤者的數量。
- 在用戶模型中，`user->following->count()` 返回正在追蹤的人數。
## 5. 後續展望：
- 介紹 Laravel 提供的一些實用工具和功能，進一步擴展應用的能力。
- 強調 Laravel 框架的直觀性和效能，以實現複雜功能的簡便開發。

# Laravel Telescope
## 1. 工具介紹：
- Laravel Telescope 是一個用於監控和記錄應用程序活動的工具，提供直觀的 UI，方便開發者深入了解應用內部運作。

## 2. 安裝過程：
```
composer require laravel/telescope

```
```
php artisan telescope:install
 
php artisan migrate
```
- 使用 `composer require` 安裝 Laravel Telescope，然後執行 `php artisan telescope:install` 進行安裝。
- 最後執行 `php artisan migrate` 以創建 Telescope 相關數據表。
## 3. 應用界面：
```
http://127.0.0.1:8000/telescope/requests
```
- 進入 `your-app-url/telescope`，即可訪問 Laravel Telescope 的 UI。
## 4. 功能概覽：
- Telescope 追蹤應用程序活動，包括請求、模型、事件、命令等多方面的操作。
- 提供清晰的活動分類，包括命令、排程任務、異常、日誌、數據庫查詢等。
## 5. 常見活動分類：
- 命令（Commands）： 顯示執行的 Artisan 命令，包括時間戳和相關詳細信息。
- 排程任務（Scheduled Jobs）： 追蹤預定的任務，提供執行時間和詳細資訊。
- 異常（Exceptions）： 紀錄應用程序崩潰或異常情況，方便除錯。
- 數據庫查詢（Queries）： 顯示執行的數據庫查詢，提供完整的 SQL 查詢內容。
- 請求（Requests）： 記錄 Web 請求的詳細信息，包括路由、狀態碼、頭部等。
- 模型（Models）： 顯示與模型相關的活動，如創建、更新、刪除等操作。
## 6. 進階功能：
- 提供查看完整數據庫查詢和請求的功能，方便深入了解應用內部運作。
- 支援其他活動分類，如事件、郵件、通知、Gate 權限、緩存等，進一步擴展工具應用範圍。
## 7. 應用場景：
- Laravel Telescope 提供了豐富的工具集，適用於開發環境中追蹤和優化應用程序的性能和行為。
# Showing Posts from Profiles The User Is Following
## 1. 路由與導向調整：
- 在登入後，原本的路由 `/home` 不再適用，進行調整。
- 在 `LoginController` 中修改重導向路徑為 `/`，導向至新的首頁。
## 2. 新的首頁設計：
- 原本的歡迎視圖不再需要，將路由改為呼叫 `PostsController` 的 `index` 方法。
- 在 `PostsController` 的 `index` 方法中，取得使用者正在追蹤的其他使用者的所有帖子，按照時間倒序排列。
- 使用 Laravel 的 Eloquent ORM 操作，先取得正在追蹤的使用者的 ID，再擷取這些使用者發布的所有帖子。
- 顯示這些帖子在新的 `posts.index` 視圖中。
## 3. 視圖設計：
- `posts.index` 視圖中，使用適當的 Bootstrap 格線系統，將每則帖子分為圖片區域與文字區域。
- 增加可點擊的連結，使使用者能夠點擊頭像查看使用者的個人檔案。
- 調整圖片的大小及樣式，以達到較為美觀的顯示效果。
## 4. 帖子排版與分頁：
- 對帖子進行時間倒序排序，確保最新的帖子會優先顯示。
- 處理分頁：由於可能會有大量的帖子，考慮將其分頁顯示，以提高使用者體驗。
## 5. Laravel Eloquent 操作：
- 使用 `pluck` 方法從關聯表中取得指定欄位的集合，例如獲取正在追蹤的使用者的 ID。
- 利用 `whereIn` 方法擷取符合指定條件的資料，例如擷取指定使用者發布的所有帖子。
## 6. 視圖優化：
- 調整圖片大小、排版和樣式，以提供更良好的視覺體驗。
- 為頭像添加可點擊的連結，使使用者能夠方便地查看發布帖子的使用者的個人檔案。
## 7. 未來優化建議：
- 考慮實作帖子分頁，以改進大量帖子的顯示效果。
- 檢討並優化視圖和介面，以提供更好的使用者體驗。



# Pagination with Eloquent
## 1. Pagination 簡介：
- Pagination 是將大量數據分割成小塊，以提高用戶體驗的一種技術。
- Laravel 提供了簡單而強大的 Eloquent 分頁功能，使分頁實現變得輕鬆。
## 2. 實作分頁功能：
- 在 `PostsController` 中，使用 `paginate` 方法替代 `get` 方法，並傳遞每頁帖子數量，例如每頁五條帖子。
- 使用 `paginate(5)` 來限制每頁顯示的帖子數。
## 3. 視圖修改：
- 在 `posts.index` 視圖中，使用 `posts->links()` 來顯示分頁連結。
- Laravel 的 `links` 方法會自動生成包含上一頁、下一頁及分頁數字的 HTML。
## 4. 用戶體驗優化：
- 分頁連結會顯示在帖子列表的底部，讓用戶可以輕鬆切換到不同的頁面。
- 使用者可以點擊分頁連結以查看更多帖子，使整個瀏覽體驗更加流暢。
## 5. 自定義樣式：
- 在視圖中使用 Bootstrap 或其他樣式框架來美化分頁樣式。
- 本例中，使用 Bootstrap 的 `display: flex` 和 `justify-content: center` 來使分頁居中顯示。
## 6. 易於實現：
- Laravel 的 Eloquent 分頁功能使分頁實現變得簡單且直觀。
- 簡單地替換 `get` 方法為 `paginate` 方法，並指定每頁顯示的數量，即可完成分頁。
## 7. 未來擴展建議：
- 根據實際需求，進一步優化分頁樣式和交互體驗。
- 考慮在分頁中添加其他元素，例如顯示總頁數、跳轉到特定頁面等。
 

# N + 1 Problem & Solution
## 1. N + 1 問題簡介：
- N + 1 問題是一種性能優化的挑戰，特別是在使用 ORM（例如 Eloquent）時容易遇到。
- 問題發生在關聯數據的獲取中，每個主要模型擁有 N 個關聯模型，導致額外的 N + 1次查詢。
## 2. 問題描述：
- 使用 Laravel Telescope 觀察時，發現重複的查詢，每次都帶有 `limit 1`，這是 N + 1 問題的表現。
- 在遍歷結果時，對每個項目都單獨加載了相關的用戶（relationship），導致多次單獨查詢。
## 3. 解決方案 - Eager Loading：
- 使用 Laravel 的「Eager Loading」機制來解決 N + 1 問題。
- 在控制器中使用 `with` 方法，指定要預先加載的關聯，此處是 `user`。
- 例如：`$posts = Post::with('user')->paginate(5);`
## 4. Eager Loading 的實現：
- `with` 方法中的 `user` 指的是模型中定義的關聯名稱，即 `Post` 模型中的 `user` 方法。
- 通過一次 SQL 查詢預先加載所有相關的用戶數據，而不是在循環中逐個加載。
## 5. Laravel Telescope 的清理：
- Laravel Telescope 提供 `telescope clear` 命令，用於清理和重置所有 Telescope 的監測數據。
- 清理可以在開發過程中幫助保持監測信息的整潔。
## 6. 監測數據展示：
- Laravel Telescope 的界面直觀展示了每次查詢的詳細信息，有助於快速識別和解決性能問題。
- 透過 Telescope，我們能夠觀察到由於 Eager Loading 的實現，消除了 N + 1 問題。
## 7. 性能優化建議：
- 在使用 ORM 時，總是考慮使用 Eager Loading 來預先加載關聯數據，提高性能。
- 定期清理 Telescope 數據，確保監測數據的可讀性和準確性。

# Make Use of Cache for Expensive Query
## 1. 簡介：
- 使用 Laravel Cache 可以優化應用程序的性能，特別是對於需要重複計算的昂貴查詢。
- 這部分示範如何將頻繁計算的用戶統計信息進行緩存，以減輕對數據庫的壓力。
## 2. 問題描述：
- 在用戶訪問個人檔案時，需要計算該用戶的帖子數、粉絲數和追蹤數。
- 這樣的查詢，如果每次請求都重新計算，會給數據庫帶來不必要的負擔。
## 3. Laravel Cache 的使用：
- 使用 `cache` 的 `remember` 方法，將查詢結果緩存，以便在一定時間內返回緩存而不重新計算。
## 4. 範例：
- 將計算帖子數的邏輯移到控制器，並使用 Cache 进行緩存。
   ```php
   $postCount = cache()->remember('count.posts.' . $user->id, now()->addSeconds(30), function () use ($user) {
       return $user->posts()->count();
   });
   ```
## 5. 緩存 Key 的建立：
- 緩存 key 通常包括一些唯一標識，以確保每個用戶的緩存是唯一的。
- 例如：`'count.posts.' . $user->id`，這樣可以區分不同用戶的帖子數緩存。
## 6. Laravel Telescope 監控：
- 使用 Laravel Telescope 可以方便地觀察緩存的命中與未命中情況，以及緩存的生命週期。
## 7. 適用範圍：
- 緩存適用於具有某種時效性且相對不經常更改的數據。
- 在這個例子中，30 秒的緩存時效性是合理的，避免了每次查詢都重新計算的開銷。
## 8. Remember Forever 選項：
- `remember` 的對應版本是 `rememberForever`，它不需要時間參數，將永久保留緩存。
## 9. 性能提升：
- 通過緩存昂貴的查詢，減輕了對數據庫的壓力，從而提升了應用程序的性能。
- 該方法可以應用於其他需要頻繁計算的數據統計情境。

# Sending Emails to New Registered Users
## 1. 使用 Model Event 觸發郵件發送：
- 使用 Laravel 中的 Model Event，具體來說是 `created` 方法，來觸發郵件發送。
- 在 User Model 中，當新用戶註冊時，同時觸發 Model Event 並生成歡迎郵件。
## 2. Mailtrap.io 服務：
- 使用 `mailtrap.io` 作為開發環境中的郵件測試服務。
- 提供虛擬收件箱，用於測試郵件發送，以避免實際發送郵件至真實收件箱。
## 3. 郵件模板使用 Markdown：
- Laravel 提供了 Mailables 功能，支援使用 Markdown 撰寫郵件內容，而不需要 HTML。
- Mailables 具有美觀的預設模板，可快速應用在項目中。
## 4. 生成 Mailable：
- 使用 `php artisan make:mail` 命令生成 Mailable 類。
- Mailable 類和郵件模板會存放在 `app/Mail` 和 `resources/views/emails` 目錄下。
## 5. 郵件模板修改：
- 根據項目需求修改郵件模板，支援 Markdown 語法進行文本格式化。
- 示例中修改了歡迎郵件內容，包括歡迎詞、簽名等。
## 6. 發送郵件：
- 在 User Model 中使用 `Mail` facade 發送郵件。
- 發送歡迎郵件給新註冊的用戶，郵件內容使用剛剛修改的郵件模板。
## 7. 設置 Mail 驅動：
- 在 `.env` 文件中設置郵件發送的驅動，示例中使用 `smtp` 作為郵件發送的驅動。
- 透過 Mailtrap 提供的 SMTP 服務來捕獲發送的郵件。
## 8. 監控郵件發送情況：
- 使用 Laravel Telescope 或其他監控工具來追蹤郵件的發送情況。
## 9. 注意事項：
- 開發環境中可能需要停止和重新啟動服務來使 `.env` 文件的更改生效。
## 10. 總結：
- 這部分示範了如何在 Laravel 中使用 Model Event 和 Mailables 功能，實現用戶註冊後發送歡迎郵件。

# Wrapping Up
## 1. 修改註冊後的重新導向：
- 登記新使用者後，預設導向的路徑被修改為 `/`，而非 `/home`。
- 在 `RegisterController` 中進行調整，避免在註冊後直接導向到 `/home`。
## 2. 重新測試整個流程：
- 重新示範了整個使用者註冊流程，包括修改郵件模板、發送歡迎郵件等步驟。
- 透過 Mailtrap 監控郵件的發送情況。
## 3. 設定預設顯示內容：
- 提及在首次使用者註冊後，即使尚未追蹤任何人，也應該顯示一些預設的內容，讓使用者有更好的體驗。
## 4. 相關調整和提示：
- 強調 `.env` 文件的更改可能需要重新啟動服務，以確保新的設定生效。
- 指出在實際項目中，可能會進行更複雜的郵件模板定製和邏輯設計。
## 5. 總結及下一步：
- 提及專案的主要功能已經實現，並且透過 Laravel 提供的工具和功能，建立了一個基本的社交媒體應用。
- 提示下一步可能的擴充，例如改進前端使用者介面、增加更多功能、或進行性能優化等。

# Closing Remarks & What's Next In your Learning

# 額外
## Setting up Tailwind CSS in a Laravel project
```
npm install -D tailwindcss postcss autoprefixer

```

# 問題
## CSS
```
<div class="pr-1"/>
```

在我 laravel 專案裡面是無效的
折衷方法
```
<div style="padding-right: 5px"/>
```
所以我要導入 TailwindCSS

# 快捷鍵
## 標籤
```
.row>.col-3
```
```
<div class="row">
    <div class="col-3"></div>
</div>
```
---
```
div*3
```
```
<div></div>
<div></div>
<div></div>
```
## copy the current line
Shift + Alt + Up/Down.


---
# 錯誤訊息
```
Illuminate \ Foundation \ ViteManifestNotFoundException

Vite manifest not found at: C:\Users\RainBowT\freeCodeCamp-Instagram\public\build/manifest.json
```

# 關鍵字
- .env 文件
- 30 秒緩存
- 404 錯誤回應
- Additional Layer of Protection（額外的保護層）
- Anchor Tag（錨點標籤）
- Array Merge Refactoring（`array_merge` 重構）
- Array Merge（陣列合併）
- Artisan Command（Artisan 命令）
- Artisan 命令
- Artisan 指令
- Artisan 指令
- Authentication
- Authentication Layer（驗證層）
- Authentication（身份驗證）
- Authorization Logic（授權邏輯）
- Authorization Policies（授權策略）
- Authorization（授權）
- Automatic Fetching of Resources（自動獲取資源）
- Axios（前端 HTTP 請求庫）
- BelongsTo 與 HasMany: Laravel 中用於建立一對多關係的 Eloquent 模型方法，BelongsTo 表示屬於某一模型，HasMany 表示擁有多個相關的模型。
- Blade Directive（Blade 指令）
- Blade 模板引擎
- Blade 模板：Laravel 框架中的模板引擎，用於簡化 PHP 語法，提高模板的可讀性和編寫效率。
- Blade 視圖中的動態數據
- Boot Method（啟動方法）
- Bootstrap
- Bootstrap 格線系統
- Bootstrap 樣式框架
- Building the Show View（建構 Show 視圖）
- CRUD操作（CRUD Operations）
- CSRF Token：為了防止 CSRF 攻擊，網站在每個表單中生成的一個隨機 token，用於驗證表單提交的合法性。
- CSRF（Cross-Site Request Forgery）：一種網站應用程式的安全漏洞，攻擊者通過引誘受害者進行未授權的操作，如在其帳戶下進行資金轉移等。
- CSS Styling
- Code Cleanup（代碼整理）
- Code Readability（代碼可讀性）
- Code Refinement（代碼精煉）
- Compact Function（`compact` 函數）
- Composer
- Composer Require（Composer 安裝）
- Constructor（構造函數）
- Controller Method（控制器方法）
- Created Event（created 事件）
- Database Migration（資料庫遷移）
- Database Schema（資料庫結構）
- Default Profile Image（預設個人檔案圖片）
- Default Profile Image（預設個人檔案圖片）
- Default Profile Title（預設個人檔案標題）
- Dynamic Count（動態計數）
- Dynamic Display（動態顯示）
- Dynamic Image Editing（動態圖片編輯）
- Eager Loading
- Edit Profile Link（編輯個人檔案的超連結）
- Eloquent
- Eloquent Model：Laravel 的 ORM（Object-Relational Mapping）實現，用於與資料庫互動，簡化對資料的操作。
- Eloquent ORM
- Eloquent Relationships（Eloquent 關聯）
- Eloquent 模型
- Eloquent 模型關係（Eloquent Model Relationships）
- Explicitly Specifying Model Type（明確指定模型類型）
- File Path（文件路徑）
- File Upload（檔案上傳）
- Form Validation（表單驗證）
- Fresh Migration（重新遷移）
- Frontend Design
- Gate 權限
- GitHub
- Google Fonts API
- Grid System
- HTML Structure for Displaying Post Details（顯示帖子詳細信息的 HTML 結構）
- HTML 生成
- Handling 404 Not Found Automatically（自動處理 404 Not Found）
- Home頁面
- Image File Handling（圖片檔案處理）
- Image Handling（圖片處理）
- Image Resizing（圖片調整大小）
- Image Size Adjustment（圖片大小調整）
- Image::make()（Intervention Image 中的方法）
- Instagram Clone
- Instagram Features
- Intervention Image（Intervention Image 套件）
- Intervention Image（Intervention Image）
- Intervention Library
- JavaScript
- Laravel
- Laravel
- Laravel
- Laravel Blade
- Laravel Cache
- Laravel Facades（Laravel Facades）
- Laravel Installer
- Laravel ORM
- Laravel Storage（Laravel 存儲系統）
- Laravel Telescope
- Laravel Telescope
- Laravel Telescope 監控
- Laravel Tinker
- Laravel Tinker
- Laravel 提供的實用工具（Laravel Utility Tools）
- Laravel 框架
- Laravel 路由
- Laravel 開發伺服器
- Laravel 關聯
- MVC 架構
- Mailables
- Mailtrap 監控
- Mailtrap.io
- Markdown
- Mass Assignment Protection（大量指派保護）
- Mass Assignment：指在 Eloquent 模型中一次性指定多個屬性，需謹慎處理以避免安全風險。
- Middleware（中介層）
- Migrate Fresh（重新遷移）
- Migration: 資料庫遷移，用於定義資料庫結構的 Laravel Artisan 指令，透過 PHP 程式碼定義資料表的結構。
- Migrations
- Model Callbacks（模型回調）
- Model Event
- Model Events（模型事件）
- Model Policy（模型策略）
- N + 1 問題
- NPM
- NPM (Node Package Manager)
- Node.js
- Node.js
- Nullable Column（可為空的欄位）
- ORM（Object-Relational Mapping）
- ORM（Object-Relational Mapping）
- ORM（對象-關聯映射）
- Open Sans Font
- PHP Applications
- PHP Artisan
- PHP Framework
- PHPStorm
- POST 方法: HTTP 協議中的一種請求方法，用於提交資料給指定的資源，通常用於表單提交。 
- POST 請求（POST Request）
- Package Auto Discovery（Package 自動發現）
- Pagination 分頁
- Parameter Naming Conventions（參數命名慣例）
- Policies Methods（策略方法）
- Pre-filling Form Fields（預先填充表單領域）
- Private Variables（私有變量）
- Profile Creation Test（個人檔案創建測試）
- Profile Image Display（個人檔案圖片顯示）
- Profile Image Editing（編輯個人檔案圖片）
- Profile Model Method（Profile 模型方法）
- Profile Update Logic（檔案更新邏輯）
- Public Path Helper（`public_path` 助手）
- Public Path vs. URL（公共路徑與 URL 的區別）
- Public Path（公共路徑）
- RESTful Controller
- Registration
- Resized Image（調整大小的圖片）
- Responsive Image Styling（響應式圖片樣式）
- Route Conflict（路由衝突）
- Route Model Binding（路由模型繫結）
- Route Model Binding（路由模型繫結）
- Route Model Binding（路由模型繫結）
- Route Order（路由順序）
- Route Protection（路由保護）
- SMTP 服務
- SQL Lite
- SQL 查詢
- SVG
- Sass
- Sass
- Show Route（顯示路由）
- Storage Link（存儲連結）
- Symbolic Link（符號連結）
- Telescope 清理
- Testing Route Model Binding（測試路由模型繫結）
- Testing and Security Measures（測試和安全措施）
- Testing and Validation（測試與驗證）
- Tinker（Artisan Tinker 工具）
- Twitter Bootstrap
- UI (User Interface)
- Undefined Variable Error（未定義變數錯誤）
- Up and Down Methods
- Update Route and Method（更新路由和方法）
- Uploaded File（上傳的文件）
- User Actions Authorization（使用者行動授權）
- User Profile Image Handling（使用者個人檔案圖片處理）
- User Registration Test（使用者註冊測試）
- User Registration（使用者註冊）
- User-Profile Relationship（使用者-個人檔案關聯）
- View
- View Adjustment（View 調整）
- View Styling（視圖樣式）
- Vue.js
- Vue.js
- Vue.js 組件（Vue.js Component）
- Web Development
- Web 請求
- [Intervention Image](https://image.intervention.io/v3)
- `.env` 文件
- `.env` 文件
- `/` 路徑
- `/home` 路徑
- `LoginController`
- `Mail` facade
- `PostsController`
- `RegisterController`
- `belongsTo` 和 `hasOne` 方法
- `cache` 门面
- `composer require`
- `created_at`（Laravel 時間戳記）
- `created` 方法
- `display: flex` 樣式屬性
- `findOrFail` 方法
- `get` 方法
- `home` 路由
- `justify-content: center` 樣式屬性
- `paginate` 方法
- `php artisan make:mail`
- `php artisan migrate`
- `php artisan telescope:install`
- `pluck` 方法
- `posts->links()` 方法
- `posts.index` 視圖
- `push` 方法用於保存變更
- `rememberForever` 方法
- `remember` 方法
- `updated_at`（Laravel 時間戳記）
- `whereIn` 方法
- `{post}` as Model Instance（`{post}` 作為模型實例）
- enctype="multipart/form-data": HTML 表單屬性，用於指定表單內容類型，以支援檔案上傳。
- fit Method（`fit` 方法）
- make:auth
- orderBy（排序條件）
- php artisan
- php artisan serve
- show.blade.php（`show` 視圖）
- store Method（`store` 方法）
- 一對一關聯
- 一對多關係 (One-to-Many Relationship): 資料庫模型之間的一種關係，表示一個資料模型的實例可以對應到多個相關聯的另一個模型的實例。
- 中介表（Intermediate Table）
- 事件
- 事件監聽（Event Listening）
- 交互體驗增強
- 使用者可能的錯誤輸入
- 使用者名稱（Username）
- 使用者模型
- 使用者追蹤功能
- 使用者體驗
- 依賴管理
- 分頁效果
- 分頁連結
- 分頁（Pagination）
- 前端互動（Frontend Interaction）
- 前端使用者介面
- 前端框架（Frontend Framework）
- 前端編譯
- 前端資源
- 前端開發
- 功能擴充
- 動態屬性傳遞（Dynamic Props Passing）
- 動態屬性（Dynamic Props）
- 動態更新（Real-time Update）
- 即時數據更新（Real-time Data Update）
- 取消追蹤按鈕（Unfollow Button）
- 可讀性
- 命名空間
- 命名空間命令
- 唯一性約束
- 圖片排版與樣式
- 外鍵約束 (Foreign Key Constraint): 資料庫設計中的概念，表示一個資料表的欄位是另一個資料表的主鍵，用於建立資料表之間的關聯。
- 外鍵（Foreign Key）：在資料庫中，用於建立表格之間關聯的欄位，通常用於指向另一表格的主鍵。
- 多對多關係（Many To Many Relationship）
- 多對多關係（Many To Many Relationship）
- 安全性考慮（Security Considerations）
- 完整 SQL 查詢
- 帖子數據提取
- 帖子時間倒序排序
- 帖子的連結與顯示
- 帖子顯示順序
- 帖子（Posts）
- 強化錯誤處理
- 後端通信（Backend Communication）
- 性能優化
- 性能優化
- 性能優化
- 性能提升
- 慣例優於配置
- 應用程序
- 應用程序活動監控
- 應用程式視圖（View）
- 控制器操作（Controller Operations）
- 控制器操作（show、index）
- 擴展功能（Feature Expansion）
- 擴展建議
- 擴展與改進（Extension and Improvement）
- 效能（Performance）
- 整潔性
- 數據庫
- 數據庫優化
- 數據庫查詢
- 數據庫模型（Database Models）
- 數據庫結構
- 數據庫設置
- 數據庫遷移（Database Migrations）
- 數據統計情境
- 昂貴查詢
- 時效性
- 查詢多對多關係（Querying Many To Many Relationships）
- 框架
- 樞紐表（Pivot Table）
- 模型關係設置（Model Relationship Setup）
- 樣式優化
- 正在追蹤的人數（Following Count）
- 活動分類
- 準確性
- 物件關聯映射
- 環境配置
- 用戶反饋（User Feedback）
- 用戶界面優化（UI Enhancement）
- 用戶界面更新（UI Update）
- 用戶統計信息
- 用戶體驗（UX）
- 用戶體驗（UX）
- 登錄
- 監測信息
- 監測數據
- 直觀性（Intuitiveness）
- 簡單且直觀的實現
- 編譯
- 緩存
- 緩存 key
- 處理請求（Request Handling）
- 表單處理（Form Handling）
- 表單驗證器（Validator）
- 視圖 (View): Laravel 中的 Blade 視圖，用於定義應用程式的前端呈現，允許嵌入 PHP 代碼，並有助於前後端分離。
- 視圖資料傳遞
- 視圖連結
- 註冊
- 資料庫層面的關聯性 (Database-level Relationship): 在資料庫中透過外鍵約束等手段實現的資料表之間的關聯，有助於維護資料的完整性。
- 資料庫模型（Model）
- 資料庫遷移
- 資料庫遷移（Migration）
- 資源未找到的明確訊息
- 資源視圖
- 路由參數
- 路由命名
- 路由（Route）
- 路由衝突
- 身份驗證系統
- 追蹤按鈕（Follow Button）
- 追蹤者數量（Followers Count）
- 逆向關聯
- 通知
- 遷移命令
- 遷移文件
- 遷移（Migration）
- 郵件
- 郵件模板
- 郵件模板
- 郵件發送提示
- 郵件發送監控
- 重新導向
- 重複計算
- 錯誤處理
- 錯誤處理
- 錯誤處理（Error Handling）
- 開發環境
- 開發過程
- 關聯中的可為空欄位
- 關聯名稱
- 防禦性編碼
- 頁數顯示
- 預定任務
- 預設內容
- 點擊事件（Click Event）
##### tags: `Video Note` `Laravel`
