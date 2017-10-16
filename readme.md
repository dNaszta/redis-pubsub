# Install
    1. install redis
        1. sudo apt-get update
        2. sudo apt-get install build-essential tcl
        3. cd /tmp
        4. curl -O http://download.redis.io/redis-stable.tar.gz
        5. tar xzvf redis-stable.tar.gz
        6. cd redis-stable
        7. make
        8. make test
        9. sudo make install
        10. sudo mkdir /etc/redis
        11. sudo cp /tmp/redis-stable/redis.conf /etc/redis
        12. sudo nano /etc/redis/redis.conf
        
            supervised systemd
        13. sudo nano /etc/redis/redis.conf
        
            dir /var/lib/redis
        14. sudo nano /etc/systemd/system/redis.service
        
            [Unit]
            Description=Redis In-Memory Data Store
            After=network.target
            
            [Service]
            User=redis
            Group=redis
            ExecStart=/usr/local/bin/redis-server /etc/redis/redis.conf
            ExecStop=/usr/local/bin/redis-cli shutdown
            Restart=always
            
            [Install]
            WantedBy=multi-user.target
        15. sudo adduser --system --group --no-create-home redis
        16. sudo mkdir /var/lib/redis
        17. sudo chown redis:redis /var/lib/redis
        18. sudo chmod 770 /var/lib/redis
        19. sudo systemctl start redis
    2. sudo apt install python3-pip
    3. pip3 install virtualenv
    4. python3 -m virtualenv redis-pubsub
    5. cd redis-pubsub
    6. source bin/activate
    7. python src/demo.py
    
# Install php core
    1. composer install
    2. cd src/
    3. php publish.php