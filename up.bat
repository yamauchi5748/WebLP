@echo off
rem このファイルの場所をカレントディレクトリとする
cd /d %~dp0

rem 各コンテナを起動
docker-compose up -d

rem npmインストール
docker-compose exec node npm install

rem サーバ起動
docker-compose exec node npm run watch