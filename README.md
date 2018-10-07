# Firebase-PHP

## このリポジトリについて
このリポジトリはただFirebaseのRealtimeDBで遊んでみるためだけに作られました。\
Profileを管理できるコードになっています

## 起動してみよう
```
1, Firebaseのプロジェクトからjson形式の秘密鍵をダウンロードしてきます

2, ダウンロードしてきた秘密鍵をconfigディレクトリ下にぶち込みます

3, setting.iniに秘密鍵のファイル名を記載します

4, コンソールで composer install を実行します

5, 最後にコンソールで php -S localhost:8000 と実行しましょう
```

これでブラウザから localhost:8000 にアクセスすれば情報が出てくるはずです！ \
DBに挿入するデータを変更したい場合は index.php を変更してください

※ デフォルトで入っている filename.json は削除しても問題ありません