@servers(['web' => 'localhost'])

@task('docker')
    # 1. Update the apt package index
    sudo apt-get update;
    
    # 2. Install packages to allow apt to use a repository over HTTPS
    sudo apt-get install apt-transport-https;
    sudo apt-get install ca-certificates;
    sudo apt-get install curl;
    sudo apt-get install software-properties-common;
    
    # 3. Add Docker’s official GPG key
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -;
    sudo apt-key fingerprint 0EBFCD88;

    # 4. Use the following command to set up the stable repository
    
    # 5. 
@endtask
