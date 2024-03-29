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

Gợi ý commit: [type]: summary in present tense 
    - type: chore (thay đổi code nhưng không liên quan trực tiếp đến chức năng của mã nguồn), 
            feat (thêm chức năng mới cho mã nguồn)
            style (sửa lỗi style)
    - summary in present tense : tóm tắt nội dung commit
    
? NOTE:
    - Sd phpdotenv
    - Giải thích class validate-input (Trả lời: tui định làm validate cho input nhưng đã bỏ, quên xóa trước khi push)
    - Format của kiểu dữ liệu Date: YYYY-MM-DD
