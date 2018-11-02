FROM mattrayner/lamp:latest-1604
COPY mysqld.cnf /etc/mysql/mysql.conf.d/
COPY sites.conf /etc/apache2/sites-available/
RUN ln -s /etc/apache2/sites-available/sites.conf /etc/apache2/sites-enabled/sites.conf && \
rm /etc/apache2/sites-enabled/000-default.conf
CMD ["/run.sh"]
