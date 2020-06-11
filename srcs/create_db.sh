service mysql start
echo "CREATE DATABASE wpdb;" | mysql -u root
echo "CREATE USER 'admin' identified by '111';" | mysql -u root
echo "GRANT USAGE ON wpdb.* TO 'admin'@'localhost' identified by '111';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wpdb.* TO 'admin'@'localhost' identified by '111';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root