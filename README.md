# Ansible Role - Docker for Ubuntu
[![Build Status](https://travis-ci.org/rlunar/ansible-role-docker.svg?branch=master)](https://travis-ci.org/rlunar/ansible-role-docker)

Ansible Role - Docker for Ubuntu.

## Requirements
This role requires Ansible 2.0 or higher, and platform requirements are listed in the metadata file.

## Supported Distributions
- Ubuntu 14.04 (Trusty Tahr)
- Ubuntu 16.04 (Xenial Xerus)

## Install and configure Docker.

Role Variables
--------------

### `docker_config`

A dict of options that are written into docker's `daemon.json` config file. See [the docs for dockerd](https://docs.docker.com/engine/reference/commandline/dockerd/) for a full list of available options.

Default values: (set them in your `docker_config` to overwrite)

    storage-driver: devicemapper
    log-level: info

### `docker_version`

Specify the version of Docker to install, e.g. `1.12.6`, `17.05`.

Default value: `17.06`

### `setup_script_md5_sum`

Default value: md5 checksum of default `docker_version` setup script (see `defaults/main.yml` for exact default value)

**If you intend to install a version of Docker other than the default, you must provide an appropriate override value for this variable.**

Either:

1. Generate an md5 checksum for the desired version's install script
1. If you know what you are doing and are not worried about security, set this variable to "no" or "false" to disable checksum verification of the setup script.

### `setup_script_url`

URL pointing to a Docker setup script that will install the specified `docker_version`. 

Default value: `https://releases.rancher.com/install-docker/{{ docker_version }}.sh` 

The default URL utilizes [Rancher Labs' version-specific, OS-agnostic setup scripts](https://github.com/rancher/install-docker), which in turn just install the appropriate version of `docker-ce` or `docker-engine` from the official Docker `apt` and `yum` repositories.

Dependencies
------------

None

Example Playbook
----------------
Install Docker
```yaml
- hosts: servers
  roles:
    - rlunar.docker
```

Install and configure docker
```yaml
- hosts: servers
  roles:
    - role: rlunar.docker
      docker_config:
        live-restore: true
        userland-proxy: false
```

Testing
-------
For development, we use Vagrant.
Bring the VM up with

```
$ vagrant up
```

This will automatically run the playbooks against the virtual machine once it's up.  
After making changes to any playbook, you can test the provisioning with

```
$ vagrant provision
```

## Dependencies
None.

##  License
MIT

##  Author Information
This role was created in 2017 by [Roberto Luna](https://github.com/rlunar/) original from [mongrelion](https://github.com/mongrelion/)