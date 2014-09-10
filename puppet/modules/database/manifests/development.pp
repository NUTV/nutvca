# Class: development
#
#
class development {

    exec { "install development database":
        command => "/usr/bin/mysql -u user --password=password development < /vagrant/data/mysql.nutv.ca.sql",
        unless => "/usr/bin/mysqlshow -u user --password=password development | grep wp_comments",
    }

}
