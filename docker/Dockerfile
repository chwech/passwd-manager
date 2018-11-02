# 基础镜像
FROM mattrayner/lamp:latest-1604
# 配置mysql bind-address为0.0.0.0
COPY mysqld.cnf /etc/mysql/mysql.conf.d/
# 配置apache2 web根目录
COPY sites.conf /etc/apache2/sites-available/
RUN ln -s /etc/apache2/sites-available/sites.conf /etc/apache2/sites-enabled/sites.conf && \
rm /etc/apache2/sites-enabled/000-default.conf
CMD ["/run.sh"]
