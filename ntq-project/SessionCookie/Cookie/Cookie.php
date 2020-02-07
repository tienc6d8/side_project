                        Cookie
1. Cookie là gì
    - Cookie là những file nhỏ được lưu trữ trên thư mục trình duyệt hoặc thư mục dữ liệu chương trình của máy tính người dùng.
    - Cookie sử dụng với mục đích để theo dõi hoạt động truy cập. Vị dụ nhớ tên người dùng truy cập vào website.
    - Cookie dùng để lưu trữ dự liệu tạm thời trên hệ thống.
    - Cookie lưu trữ dữ liệu trên máy Client.
2. Cơ chế hoạt động
    - Thiết lập Cookie : setcookie("tên cookie","giá trị", thời gian sống);
    - Sử dụng Cookie   : $_COOKIE["tên cookies"];  cookie là tên mà chúng ta thiết lập phía trên.
    - Hủy Cookie ta sử dụng 1 trong 2 cách
         + Sử dụng cú pháp: setcookie("Tên cookie");
         + Dùng thời gian hết hạn cookie là thời điểm trong quá khứ.
             Ví dụ: setcookie("username", "", time()-3600);