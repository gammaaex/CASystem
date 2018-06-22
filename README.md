# CASystem

### 本番環境
- 新生さくらのレンタルサーバのスタンダードプラン環境を想定
- PHP 7.1系
- MySQL 5.7系

### 開発環境
- 開発の仮想環境としてDockerを導入
    - Laradock環境構築セットを利用
- Docker
    - MySQL 5.7系
    - Nginx latest
    - PHP 7.1系
    - phpMyadmin latest
- Laravel 5.6系

### 設計
- DB設計にはMWB（MySQL Workbench）のER図を利用
    - 複合主キーを用いないサロゲートキーでの設計
        - 複合主キーはDBがきれいになるが、Webアプリでは開発が大変
        - そもそもEloquent ORMは複合主キーをサポートしていない
    - マイグレーションファイルを書くのは大変なので既存DBから生成

### 開発手順
1. MWBにてDB設計
    1. ER図からDDL(SQLファイル)を生成
1. 開発環境の構築
    1. Laradockを利用して開発環境を構築
        1. Nginx、MySQL、phpMyadminのコンテナを利用
        1. コンテナ内でcomposerを使ってLaravelプロジェクトを作成
1. 開発
    1. データベースの準備
        1. DDLをDBに適用
        1. プラグインを利用してマイグレーションファイルを生成
        1. スカフォードを生成
        1. ファクトリーを定義
        1. シーダを定義
        1. DatabaseSeederに呼び出すシーダを定義
        1. マイグレーションとシーダを実行
    1.     

### 利用しているプラグイン

PHPのプラグインについては`composer.json`を見ることで導入しているプラグインがわかるが、
Laravelが自動的に導入したものも含まれるのでここでは明示的に自分で導入したプラグインを記す

- laravel-ide-helper
    - LaravelでIDEの補完機能を動作させるために利用
    - `composer update`で共同開発者が導入できるように`composer.json`に追記済み
    - 参考サイト：https://qiita.com/michiomochi@github/items/fc70230402972c99472f
    - https://github.com/barryvdh/laravel-ide-helper
    
- Xethron/migrations-generator 
  - 既存DBからマイグレーションファイルを生成できるプラグイン
  - Laravel5.6系に対応とは書いていなかったが、5.5系には対応してたので試したらいけた
  - https://github.com/Xethron/migrations-generator
    
- InfyOmLabs/laravel-generator
    - CRUDに関する一切を生成してくれる
    - https://github.com/InfyOmLabs/laravel-generator
    
- WildSideUK/Laravel-Userstamps
    - created_byやupdated_byの値を自動で入力してくれる
    - https://github.com/WildSideUK/Laravel-Userstamps