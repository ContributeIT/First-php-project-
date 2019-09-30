# QuanLyKhoMay
| Tasks needed |   Status   |
| ---------------- | ---------- |
| Kiểm tra toàn bộ tất cả mã số của từng chi tiết - bắt buộc phải là chữ số nguyên dương | Đã hoàn thành |
| Kiểm tra cân nặng và đơn giá của từng chi tiết | Đã hoàn thành |
| Tính tổng đơn giá và tổng trọng lượng của các chi tiết đơn trong một chi tiết phức | Đã hoàn thành |
| Tính tổng đơn giá và tổng trọng lượng của toàn bộ các chi tiết trong một máy | Đã hoàn thành |
| Tính tổng đơn giá và tổng trọng lượng của các máy trong một kho | Đã hoàn thành |
| Khởi tạo một chi tiết đơn | Đã hoàn thành | 
| Khởi tạo một chi tiết phức | Đã hoàn thành | 
| Khởi tạo một máy là tổ hợp của các chi tiết đơn lẫn chi tiết phức | Đã hoàn thành |
| Khởi tạo một kho là tổ hợp của các máy đang có | Đã hoàn thành | 
| Khởi tạo một bảng menu chính cho phép người dùng lựa chọn chi tiết muốn nhập | Đã hoàn thành | 

# CHECKLIST
_ Kiểm tra chi tiết của một máy:
  + Kiểm tra mã số từng loại chi tiết khi nhập vào:
    . Sẽ báo lỗi khi người dùng nhập kí tự, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập số âm, yêu cầu nhập lại.
  + Sẽ chỉ duyệt kết quả và chấm dứt yêu cầu nhập lại khi mã số là số dương - không quan trọng là số nguyên hay số thập phân.

_ Kiểm tra chi tiết đơn: 
  + Kiểm tra đơn giá của từng loại chi tiết khi nhập vào: 
    . Sẽ báo lỗi khi người dùng nhập kí tự, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập số âm, yêu cầu nhập lại.
  + Sẽ chỉ duyệt kết quả và chấm dứt yêu cầu nhập lại khi đơn giá là số dương - không quan trọng là số nguyên hay số thập phân. 

  + Kiểm tra cân nặng của từng loại chi tiết khi nhập vào: 
    . Sẽ báo lỗi khi người dùng nhập kí tự, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập số âm, yêu cầu nhập lại.
  + Sẽ chỉ duyệt kết quả và chấm dứt yêu cầu nhập lại khi cân nặng là số dương - không quan trọng là số nguyên hay số thập phân.

_ Kiểm tra chi tiết phức: 
  + Kiểm tra số lượng chi tiết của một chi tiết phức khi nhập vào: 
    . Số lượng chi tiết bắt buộc phải là số nguyên dương, không được là số thập phân hoặc số âm.
    . Sẽ báo lỗi khi người dùng nhập kí tự, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập số âm, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập chữ số thập phân, yêu cầu nhập lại.
  + Sẽ chỉ duyệt kết quả và chấm dứt yêu cầu nhập lại khi số lượng chi tiết là số nguyên dương.
  
_ Kiểm tra máy: 
  + Kiểm tra số lượng các chi tiết của một máy khi nhập vào:
    . Số lượng chi tiết bắt buộc phải là số nguyên dương, không được là số thập phân hoặc số âm.
    . Sẽ báo lỗi khi người dùng nhập kí tự, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập số âm, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập chữ số thập phân, yêu cầu nhập lại.
  + Sẽ chỉ duyệt kết quả và chấm dứt yêu cầu nhập lại khi số lượng chi tiết là số nguyên dương.
  
_ Kiểm tra kho: 
  + Kiểm tra số lượng các máy của một kho khi nhập vào:
    . Số lượng máy bắt buộc phải là số nguyên dương, không được là số thập phân hoặc số âm.
    . Sẽ báo lỗi khi người dùng nhập kí tự, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập số âm, yêu cầu nhập lại.
    . Sẽ báo lỗi khi người dùng nhập chữ số thập phân, yêu cầu nhập lại.
  + Sẽ chỉ duyệt kết quả và chấm dứt yêu cầu nhập lại khi số lượng máy là số nguyên dương.

_ Kiểm tra lựa chọn nhập vào tại menu chính: 
  + Số nhập trong menu để lựa chọn phải là số nguyên , trong khoảng từ 1 -> 4.
  + Sẽ báo lỗi khi người dùng nhập kí tự, yêu cầu nhập lại.
  + Sẽ báo lỗi khi người dùng nhập số âm, yêu cầu nhập lại.
  + Sẽ báo lỗi khi người dùng nhập chữ số thập phân, yêu cầu nhập lại.
  + Sẽ báo lỗi khi người dùng nhập số vượt quá phạm vi của menu (trong khoảng từ 1 -> 4).
_ Sẽ chỉ duyệt kết quả và chấm dứt yêu cầu nhập lại khi kết quả lựa chọn là số nguyên dương và nằm trong khoảng từ 1 -> 4.
