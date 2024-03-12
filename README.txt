Cài đặt Web Root:
-> Điều chỉnh Path to /public folder
<VirtualHost *:80>
    DocumentRoot "Path to /public folder"
    ServerName devtalk.localhost

    <Directory "Path to /public folder">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

Phiên bản Bootstrap: v5.0.2

Link lấy Icon: https://www.flaticon.com/
