# dev-template-0001

## 概要

CakePHP2.6.7とgulp3.9.1とwebpack1.13.1で作る開発雛型です。

- CentOS 6.7
- Apache 2.2.15
- MySQL 5.1.73
- PHP 5.3.3



## リモートリポジトリを作成して、ローカルにcloneする

例として、sample-project-0001リポジトリ

## vagrant box add する

1. package__20160721をダウンロードする。
2. package__20160721のあるディレクトリで`vagrant box add centos67box-20160721 package__20160721.box`を実行する。

## vagrant up をする

1. GitBashなどで、sample-project-0001ディレクトリに移動し`vagrant init centos67box-20160721`する。
2. Vagrantfileの`#config.vm.network "private_network", ip: "192.168.33.10"`の#を削除してコメント解除する。
3. `vagrant up`する。
4. たぶん vagrant up でエラーが出るので、 http://motomichi-works.hatenablog.com/entry/2014/12/16/130302 の手順を実行する。
5. 一旦`vagrant halt`する。

## ひな形zipをダウンロードして配置し、ローカル環境のブラウジング

1. dev-template-0001-master.zip をダウンロード
2. zipを展開すると`dev-template-0001-master/dev-template-0001-master/中身`みたいな構造になっている。
3. 中身のVagrantfile以外を、sample-project-0001リポジトリに移動する。
4. dev-template-0001-master/dev-template-0001-master/Vagrantfile の中の`config.vm.synced_folder "./var/www/webroot", "/var/www/webroot", owner: 'vagrant', group: 'apache', mount_options: ['dmode=777', 'fmode=666']`と`config.vm.synced_folder "./var/www/cake", "/var/www/cake", owner: 'vagrant', group: 'apache', mount_options: ['dmode=777', 'fmode=666']`の二行を、sample-project-0001/Vagrantfileの`# config.vm.synced_folder "../data", "/vagrant_data"`の下にコピペする。
5. `vagrant up`する。
6. http://192.168.33.10/ にアクセスするとCakePHPのスタートページが表示されたら環境構築はおおよそできたことになる。
7. gitのブランチ切って、開発ひな形をコミットしてプッシュする。
8. リモートリポジトリ上でmasterにマージする。
9. `git pull origin master`する。

## HeidiSQLまたはSequelproで、MySQLホストに接続する

### Macの場合
http://motomichi-works.hatenablog.com/entry/2015/01/03/154630

### Windowsの場合
http://motomichi-works.hatenablog.com/entry/2016/07/20/043950

## データベースを作成する

CREATE DATABASE データベース名 CHARACTER SET utf8;

みたいな感じで、SQLを実行して作成するので、sample_dbというデータベース名の場合は以下の通り。

CREATE DATABASE sample_db CHARACTER SET utf8;

## CakePHPの初期設定をする

1. Security.saltを編集する
2. Security.cipherSeedを編集する
3. database.php.defaultを複製して、database.phpを作成し編集をする

## 環境構築完了

開発を始める
