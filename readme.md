
## 部署步骤

1. 替换域名

当前使用的域名：http://shop.ihui365.cn/
修改为你的域名，为确保所有文件都修改成功，可在当前目录使用全局搜索替换。<br>
示例：http://shop.ihui365.cn/shopnc替换为http://shop.umq.com,因目前多了一层目录，可通过这种方式去掉。

2. 执行shopnc-16052603脚本

切记sql脚本同其他文件一样先替换域名，替换完再去执行。已经包含create database语句。

3. 配置网站根目录到shopnc

如：http://shop.umq.com 指向shopnc目录。

4. 修改数据连接配置

    修改数库相关据配置信息
   /shopnc/data/config/config.ini.php



<br><br><br>
测试过php5.2.6与php5.5.12都没报错;


