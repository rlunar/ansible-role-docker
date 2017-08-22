# Ansible Role - Docker for Ubuntu
[![Build Status](https://travis-ci.org/rlunar/ansible-role-docker.svg?branch=master)](https://travis-ci.org/rlunar/ansible-role-docker)

Ansible Role - Docker for Ubuntu.

## Requirements
This role requires Ansible 2.0 or higher, and platform requirements are listed in the metadata file.

## Supported Distributions
- Ubuntu 14.04 (Trusty Tahr)
- Ubuntu 16.04 (Xenial Xerus)

## Role Variables
- [`defaults/main.yml`](https://github.com/rlunar/ansible-role-docker/blob/master/defaults/main.yml)
- [`vars/main.yml`](https://github.com/rlunar/ansible-role-docker/blob/master/vars/main.yml)
- [`vars/ubuntu14.yml`](https://github.com/rlunar/ansible-role-docker/blob/master/vars/ubuntu14.yml)
- [`vars/ubuntu16.yml`](https://github.com/rlunar/ansible-role-docker/blob/master/vars/ubuntu16.yml)
- Variables prefixed with __ (2 Underscores) are Defaults, overwrite them by writing without the Underscores

## Example Playbook
```
- hosts: localhost
  roles:
    - role: rlunar.docker
```

## Dependencies
None.

##  License
MIT

##  Author Information
This role was created in 2017 by [Roberto Luna](https://github.com/rlunar/) original from [elnebuloso](https://github.com/elnebuloso/)