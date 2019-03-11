# 创建数据库
CREATE DATABASE IF NOT EXISTS password_manager CHARACTER SET utf8;

# 选择数据库
USE password_manager;

# 创建用户表
CREATE TABLE IF NOT EXISTS pm_user (
  id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  username VARCHAR(32) NOT NULL COMMENT '用户名',
  password VARCHAR(32) NOT NULL COMMENT '密码',
  avatar VARCHAR(255) COMMENT '头像',
  status TINYINT DEFAULT 1 COMMENT '状态，0禁用，1正常',
  register_time TIMESTAMP DEFAULT NOW() COMMENT '注册时间',
  register_ip INT UNSIGNED COMMENT '注册ip',
  login_ip INT UNSIGNED COMMENT '登录ip',
  login_time TIMESTAMP NULL COMMENT '登录时间'
);

# 创建帐号密码表
CREATE TABLE IF NOT EXISTS pm_account (
  id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  account VARCHAR(255) NOT NULL COMMENT '账号',
  password VARCHAR(255) NOT NULL COMMENT '密码',
  update_time TIMESTAMP DEFAULT NOW() COMMENT '更新时间'
);