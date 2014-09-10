file { 'create tmp directory': 
    path   => '/vagrant/tmp',
    ensure => directory,
    before => Exec['download wordpress'],
}

exec { 'download wordpress':
    command => '/usr/bin/wget http://wordpress.org/latest.tar.gz',
    cwd     => '/vagrant/tmp',
    creates => '/vagrant/tmp/latest.tar.gz',
    before => Exec['unzip wordpress'],
}

exec { 'unzip wordpress':
    command => '/bin/tar xvf latest.tar.gz',
    cwd     => '/vagrant/tmp',
    before  => File['/vagrant/tmp/wordpress/wp-content'],
}

file { '/vagrant/tmp/wordpress/wp-content/':
    ensure => 'absent',
    force  => true,
    before  => Exec['copy wordpress files into place'],
}

exec { 'copy wordpress files into place':
    command => '/bin/cp -R /vagrant/tmp/wordpress/* .',
    cwd     => '/vagrant',
    creates => '/vagrant/index.php',
}

file {'/var/www/vhosts':
  ensure => 'directory'
}

include apache2
include php5

# Database
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

mysql::db { 'development':
  user     => 'user',
  password => 'password',
  host     => '%',
  grant    => ['ALL'],
}

include database

file { '/vagrant/wp-config.php':
  ensure => file,
  source => '/vagrant/config-template.php',
}