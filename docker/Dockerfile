FROM mattrayner/lamp:latest-1604
COPY mysqld.cnf /etc/mysql/mysql.conf.d/
COPY sites.conf /etc/apache2/sites_available/
RUN ["ln", "-s", "/etc/apache2/sites-available/sites.conf", "/etc/apache2/sites-enabled/sites.conf"]
CMD ["/run.sh"]
