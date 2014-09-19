# Class: database
#
#
class database {

    exec { 'update apt-get pre database provisioning':
        command => '/usr/bin/apt-get update',
    }
    ->
    class {'mysql::server':
      root_password => 'password',
      override_options => {
        mysqld => {
          bind_address => '0.0.0.0',
          "skip-external-locking" => "false",
        }
      }
    }
    ->
    mysql_user { 'user@localhost':
      ensure                   => 'present',
      max_connections_per_hour => '0',
      max_queries_per_hour     => '0',
      max_updates_per_hour     => '0',
      max_user_connections     => '0',
      password_hash            => '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19',
    }
    ->
    mysql_grant { 'user@localhost/*.*':
      ensure     => 'present',
      options    => ['GRANT'],
      privileges => ['ALL'],
      table      => '*.*',
      user       => 'user@localhost',
    }
    ->
    mysql_grant { 'user@%/*.*':
      ensure     => 'present',
      options    => ['GRANT'],
      privileges => ['ALL'],
      table      => '*.*',
      user       => 'user@%',
    }
    ->
    mysql::db { 'development':
      user     => 'user',
      password => 'password',
      host     => '%',
      grant    => ['ALL'],
    }
    ->
    exec { "install development database":
        command => "/usr/bin/mysql -u user --password=password development < /vagrant/data/mysql.nutv.ca.sql",
        unless => "/usr/bin/mysqlshow -u user --password=password development | grep wp_comments",
    }

}
