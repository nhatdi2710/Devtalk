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

Link lấy Mã Màu: https://colorhunt.co/palette/ffe6e6e1afd1ad88c67469b6

? NOTE:
    - Sd phpdotenv
    - Giải thích class validate-input
    - Format của kiểu dữ liệu Date: YYYY-MM-DD