## アプリケーション名
Amazon風のショッピングアプリ
<br>
## アプリケーション概要
認証機能のあるショッピングサイトを作成しました。
管理画面も作成したので、管理者での編集や商品登録も可能です。
<br>
## URL
https://samuraimart-nh.herokuapp.com/  

※検証用アカウント<br>
メールアドレス：aaaaa@yahoo.co.jp<br>
パスワード：00000000<br>
テストカード：4242424242424242<br>
カード有効期限：現在よりも未来の値<br>
CVC番号	任意の3桁の数字<br>
カード名前	任意の文字列<br>
<br>
## 習得した技術
CRUD機能の実装方法を学習しました。  
MVCモデルを採用することにより、コードが整理されて管理しやすくなるほか、開発効率を上げられることを学び、作成しました。  
bootstrapを使い、スマートフォン等でも表示が崩れないようなデザインを効率的に実装しました。  
laravel-adminを使用し、効率的に管理画面を作成できました。  
その他多数のライブラリを使用することにより、さまざまな機能の追加ができました。  
また、Tinkerを使用しデータベースの中身の確認を行うことを学習しました。  
<br>
商品一覧ページ：  
- 商品一覧のページネーション機能  
- カテゴリ絞り込み機能、ソート（並び替え）機能  
※ライブラリ名：Kyslik/column-sortableを使用しました。  
- トップページに新着商品一覧・おすすめ商品一覧の表示機能を追加    
  
商品詳細ページ：
- 商品のカート追加機能
- レビュー機能(星5つの評価機能も追加)
- お気に入り登録機能  
※ライブラリ名：laravel-favoriteを使用しました。
   
認証ページ：
- ユーザーを認証するためのログイン機能
- アカウント作成機能  
  
お気に入り商品一覧ページ：
- お気に入り登録した商品を一覧表示する機能  
  
ショッピングカートページ：
- ショッピングカート機能  
※ライブラリ名：bumbummen99/shoppingcartを使用しました。
- 商品購入機能
- 商品購入時の確認ボタンを追加  
   
マイページ：
- ユーザー情報編集機能
- パスワード再設定機能
- ログアウト機能
- ECサイトからの退会機能
- 決済機能の追加  
※ライブラリ名：payjp/payjp-phpを使用しました。
  
管理画面：
- 商品、カテゴリ、親カテゴリ、ユーザ、売上などを管理する管理者用の画面追加  
※ライブラリ名：laravel-adminを使用しました。
- CSVのインポート機能追加  
※ライブラリ名：goodby/csvを使用しました。
- 購入履歴の追加

