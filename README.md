# blog

### 介绍

根据后盾网的项目自己搭建了一遍博客系统，包括前端验证和后台管理。

### 技术

thinkphp5搭建博客的前端和后台

### 工具

macOS 10.12 

1. MAMP Pro Apache + Mysql + PHP + Mac OS X 10
2. phpstorm 编程
3. 数据库设计 mySQL work bench
4. 数据库管理 navicat

### 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─admin              模块目录
│  │  ├─controller 
│  │  │    ├——Common.php 控制器
│  │  │    ├——Entry.php  入口
│  │  │    └─—Login.php  登陆控制器
│  │  ├─validate 
│  │  │    └─—Admin.php  验证
│  │  └──view 
│  │       ├——entry
│  │       │    ├——index.html
│  │       │    └——pass.html 
│  │       ├——login
│  │       │    └——login.html  
│  │       └─—base.html  
│  │
│  ├─command.php        命令行工具配置文件
│  ├─common.php         公共函数文件
│  ├─config.php         公共配置文件
│  ├─route.php          路由配置文件
│  ├─tags.php           应用行为扩展定义文件
│  └─database.php       数据库配置文件
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Think类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
│
├─extend                扩展类库目录             
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
~~~

### 没有搭建完成，持续更新中


