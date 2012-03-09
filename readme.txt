=== Chinese Tag Names ===
Contributors: CoconutCN
Donate link: http://nutsland.cn
Tags: tags, chinese, link, url, 中文, 标签, 链接
Requires at least: 2.0.2
Tested up to: 3.3.1
Stable tag: 1.0.1

解决中文标签名(包括中文分类名,页面名)不能访问的问题

== Description ==

在Wordpress中设定了固定链接之后，有时（多见于Win主机）会出现中文标签（Tag）的固定链接不能访问的问题。
即`http://example.com/tag/中文`不能访问，而`http://example.com/?tag=中文`可以访问。

可以通过修改`wp-class.php`的方式来解决，但是每次Wordpress升级都要重新修改一次，比较麻烦。

本插件提供了便捷的解决方法。

== Installation ==

**手动安装**
1. 下载`chinese-tag-names.zip`。
2. 解压`chinese-tag-names.zip`得到`chinese-tag-names`文件夹，将其上传到Wordpress的`wp-content/plugins`目录下。
3. 在后台启用`Chinese Tag Names`插件。

**自动安装**
1. 登陆Wordpress后台，在插件安装中搜索`Chinese Tag Names`。
2. 点击“现在安装”。
3. 安装完毕后，启用`Chinese Tag Names`插件。

== Changelog ==

= 1.0.1 =
* 完善了插件文档。

= 1.0 =
* 第一个发布版本。
