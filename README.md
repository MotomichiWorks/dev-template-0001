# dev-template-0001

## 概要

CakePHP2.6.7とgulp3.9.1とwebpack1.13.1で作る開発雛型です。

- CentOS 6.7
- Apache 2.2.15
- MySQL 5.1.73
- PHP 5.3.3

Sass、React.jsやVue.jsがすぐに使用できます。

## リモートリポジトリを作成して、ローカルにcloneする

例として、sample-project-0001リポジトリ

1. GitHubでリモートリポジトリを作成する。
2. リポジトリをローカルにcloneする。

## vagrant box add をする

1. http://utility.sakura.ne.jp/package-box/index.html でvagrant用のpackage--dev-template-0001.boxをダウンロードする。
2. package--dev-template-0001.boxのあるディレクトリで`vagrant box add centos67box--dev-template-0001 package--dev-template-0001.box`を実行する。

## vagrant up をする

1. GitBashなどで、sample-project-0001ディレクトリに移動し`vagrant init centos67box--dev-template-0001`する。
2. `vagrant up`コマンドで起動する。
3. `vagrant ssh`コマンドで仮想サーバにログインする。
4. `su`コマンドで管理者にスイッチする。
5. 管理者パスワード`vagrant`を入力する。
6. `ln -s -f /dev/null /etc/udev/rules.d/70-persistent-net.rules`コマンドを実行する。
7. `exit`で管理者から通常ユーザーにスイッチする。
8. `exit`で仮想サーバからログアウトする。
9. Vagrantfileの`#config.vm.network "private_network", ip: "192.168.33.10"`の#を削除してコメント解除する。
10. `vagrant reload`で仮想サーバを再起動する。
11. ブラウザで http://192.168.33.10 にアクセスして、apacheのテストページが閲覧できたら成功です。

上記はエラーが出ないように、前もって以下の記事内容を実行したという感じです。  
http://motomichi-works.hatenablog.com/entry/2014/12/16/130302

## 開発ひな形のzipをダウンロードして配置し、ローカル環境のブラウジング

1. https://github.com/MotomichiWorks/dev-template-0001 から dev-template-0001-master.zip をダウンロードする。
2. zipを展開すると`dev-template-0001-master/dev-template-0001-master/中身`みたいな構造になっている。
3. 中身の Vagrantfile と README.md 以外を、sample-project-0001リポジトリに移動する。
4. 展開した dev-template-0001-master/dev-template-0001-master/ に残しておいた Vagrantfile を開いて  
`config.vm.synced_folder "./var/www/webroot", "/var/www/webroot", owner: 'vagrant', group: 'apache', mount_options: ['dmode=777', 'fmode=666']`  
`config.vm.synced_folder "./var/www/cake", "/var/www/cake", owner: 'vagrant', group: 'apache', mount_options: ['dmode=777', 'fmode=666']`  
`config.vm.synced_folder "./var/www/react-router__webroot", "/var/www/react-router__webroot", owner: 'vagrant', group: 'apache', mount_options: ['dmode=777', 'fmode=666']`  
の三行を、sample-project-0001/Vagrantfileの `# config.vm.synced_folder "../data", "/vagrant_data"` の行の下にコピペする。
5. `vagrant reload`する。
6. http://192.168.33.10/ にアクセスするとCakePHPのスタートページが表示されたらここまでは成功です。
7. `npm install`を実行すると、package.jsonに記載されているパッケージがインストールされる。
8. gitのブランチを切って、開発ひな形をプッシュする。
9. リモートリポジトリ上でmasterにマージする。
10. `git pull origin master` して、ローカルのmasterを最新状態にします。

## HeidiSQLまたはSequelproで、MySQLホストに接続する

### Macの場合
http://motomichi-works.hatenablog.com/entry/2015/01/03/154630

### Windowsの場合
http://motomichi-works.hatenablog.com/entry/2016/07/20/043950

## データベースを作成する

CREATE DATABASE データベース名 CHARACTER SET utf8;

みたいな感じで、SQLを実行して作成するので、sample_dbというデータベース名の場合は以下の通り。

`CREATE DATABASE sample_db CHARACTER SET utf8;`

## CakePHPの初期設定をする

1. Security.saltを編集する
2. Security.cipherSeedを編集する
3. database.php.defaultを複製して、database.phpを作成し編集をする

## hostsに二行追記して、仮想サーバに設定してあるドメインにアクセスできるようにする

C:/Windows/System32/drivers/etc/hosts に下記の二行を追記する。
`192.168.33.10 example.com`  
`192.168.33.10 react-router.example.com`

vagrantの仮想サーバ内のhostsやconfファイルは設定済みなので、以下のURLの閲覧ができるようになります。

- http://example.com
- https://example.com
- http://react-router.example.com
- https://react-router.example.com

## 環境構築完了

開発を始める
