# 日進市の公園API
本APIは，日進市のオープンデータを利用して，市内の公園を検索することができるAPIです．

# 開発の背景
オープンデータを活用して何かAPIを開発してみたかった．

# 利用データ
http://opendata.city.nisshin.lg.jp/dataset/p_8006_8006

# 環境構築手順
以下を実行
```
$ git clone git@github.com:lunain84/NisshinParksAPI.git
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```

# 開発の進捗
## 2021-05-06
`/api/park` で日進市の公園データを全件取得できるようになった．
