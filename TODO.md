# to-do-list

### 环境搭建
- [x] 后台系统搭建基础框架
- [x] 后端php框架搭建，环境准备
  - [x] 使用docker搭建lamp环境，部署tp5
- [x] 使用工具连接mysql数据库
  - [x] 可以使用phpMyAdmin访问，账号admin
  - [x] 尝试使用navicat连接
- [x] 生产环境路径改写, 隐藏掉`pulbic/index.php`
  - [x] 使用nginx作反向代理服务器
  - [x] 不要暴露lamp的端口出来, lamp只能通过nginx访问

### 持续集成
- [x] 使用travis ci做持续集成
- [ ] 使用travis ci自动部署react前端和后端服务

### api接口
- [ ] 注册接口
- [ ] 登录接口

### react前端编码
- [ ] 登录/注册页面
- [ ] 拓展fetch封装,增加put,delete请求,增加拦截器

### thinkphp后端编码
- [x] thinkphp全局异常处理, 日志处理
- [x] 集成jwt扩展库lcobucci/jwt
- [ ] 如何访问接口的方法有误，应抛出自定义异常告诉客户端处理，而不是抛出没头没脑的内部异常

### mysql数据表设计
- [x] 用户表设计pm_user
- [ ] 密码表设计