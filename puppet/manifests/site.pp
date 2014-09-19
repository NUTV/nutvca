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
include database

file { '/vagrant/wp-config.php':
  ensure => file,
  source => '/vagrant/config-template.php',
}