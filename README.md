# NUTV wordpress site

## Development environment installation

1. Install vagrant

2. Add precise64 box locally
```
vagrant box add \
  precise64 http://files.vagrantup.com/precise64.box
```

3. clone this repo

4. cd into the local repo directory

5. run `vagrant up`

6. Log in to wordpress admin at http://192.168.33.10/wp-admin and save the 
permalinks
```
Username: admin
password: test
```

Notes:
Vagrant commands:
- vagrant up
- vagrant reload
- vagrant halt
- vagrant provision
- vagrant destroy

