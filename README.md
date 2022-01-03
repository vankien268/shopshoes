# SHOPSHOES - Shop bán giày lớn nhất Vịnh Bắc Bộ

### CONVENTION
- Quy ước tên file:
  + Model: 
     - Tên số ít
     - Viết hoa chữ cái đầu (CapitalizeCase)
     - Ví dụ: `Category, ProductVagrant`
  + Controller:
    - Luôn có chữ controller ở cuối
    - Đặt tên theo cụm chức năng hoặc Tên của model nào đó nếu thực hiện CRUD(Thêm, sửa, xóa, xem(đọc))
    - Ví dụ: `CategoryController, ProductController`
  + View(blade):
    - Viết theo resource controller hoặc theo route name(index,edit,show,update,destroy,restore,create,store,...)
    - phân cách nhau bằng dấu `-`
    - viết thường(normal-case)
    - Ví dụ: `product-vagrant.blade.php,...`
- Quy ước route:
`https://viblo.asia/p/restful-api-trong-laravel-cho-nguoi-moi-bat-dau-ByEZkNaqKQ0`
  + WEB:
    - viết theo resful api (/,show/{id},edit/{id},update/{id},...) hoặc dùng static method `resource`
    ```php
    Route::resource("...",...);
    ```
  + API:
- Vấn đề về `status` trong source code: Tránh trường hợp sử dụng các key-value khác nhau, value khác nhau hoặc do thay đổi requirement của project cũng như tránh việc `hardcode` ta nên sử dụng các `constant` (hằng số) để khai báo các đối tượng này
  + Ví dụ:
  ```php
  // Trong project ta sử dụng 2 `status` cho user là : 1 - đã xác thực và 0 - chưa xác thực.
  // Thì trong project tránh việc sử dụng tràn lan các ký dự 0 hoặc 1 hoặc tránh việc debug khó khăn cũng như việc
  // người khác đọc code khó khăn ta sẽ khai báo 2 contant mang giá trị của 0 và 1
  public const VERIFIED = 1;// đã xác thực
  public const UNVERIFIED = 0;// chưa xác thực
  // Tại các nơi cần check điều kiện ta sẽ gọi tới constant này thay vì giá trị 0 và 1
  ```

### Chức năng

#### Client

- [ ] Authentication(Đăng nhập/Đăng ký/Đăng xuất/Đổi/Quên mật khẩu)
- [ ] Xác nhận nhận tài khoản(email)
- [ ] Danh mục/ Chi tiết sản phẩm
- [ ] Đánh giá/Bình luận
- [ ] Tìm kiếm/Sắp xếp(theo tên, giá, danh mục)
- [ ] Quản lý giỏ hàng/Đơn hàng(CRUD sản phẩm trong giỏ hàng, Kiểm tra đơn hàng)
- [ ] Quản lý thông tin cá nhân(trang cá nhân)
- [ ] Liên hệ shop(email,fb,zalo)

#### Admin(Phải là tài khoản admin)

- [ ] Quản lý khách hàng
- [ ] Quản lý danh mục/ sản phẩm
- [ ] Quản lý đơn hàng
- [ ] Phân quyền (quản lý quyền, người dùng admin)
- [ ] Quản lý banner
- [ ] Quản lý nhà cung cấp sản phẩm
- [ ] Báo cáo thông kê
- [ ] Quản lý kho

