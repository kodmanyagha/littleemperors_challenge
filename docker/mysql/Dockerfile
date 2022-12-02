FROM mysql/mysql-server:8.0

RUN chown -R mysql:root /var/lib/mysql/

#COPY my.cnf /etc/mysql/conf.d/my.cnf
COPY my.cnf /etc/my.cnf.d/10-app.cnf

RUN chmod 0444 /etc/my.cnf.d/10-app.cnf

CMD ["mysqld"]

EXPOSE 3306
