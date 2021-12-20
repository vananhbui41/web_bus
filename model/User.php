<?php
    class User extends Model 
    {
        //Hàm kiểm tra đăng nhập
        function checkUser($username, $password)
        {
            // Câu truy vấn
            $sql="SELECT * FROM KhachHang WHERE SĐT = '{$username}' AND MatKhau = '{$password}'";
            // thực thi
            $q = $this->db->QueryResult($sql);

            // Trả về kết quả
            return $q->fetchAll(PDO::FETCH_CLASS);
        }
        
        // Hàm tạo
        function addUser($username, $password)
        {
            $sql= "insert into KhachHang values ('{$user}','{$password}'";

            // thực thi
            $q = $this->db->ExeQuery($sql);

            // Trả về kết quả
             return $q;
        }
        //Hàm cập nhật thông tin tài khoản
		function update($SĐT,$Name,$lName,$gender,$birthDay,$email,$phone,$address,$picture,$role,$status,$note)
		{
			//Câu truy vấn
			$sql = "UPDATE KhachHang SET SĐT = '{$SĐT}, HoTen = '{$HoTen}', NgaySinh = '{$NgaySinh}', DiaChi = '{$DiaChi}' WHERE SĐT = '{$SĐT}'";
			//Thực thi câu truy vấn
			$q = $this->db->ExeQuery($sql);

			//Trả về kết quả
			return $q;
		}

		//Hàm xoá tài khoản
		function remove($user)
		{
			//Câu truy vấn
			$sql = "DELETE FROM KhachHang WHERE SĐT = '{$SĐT}'";

			//Thực thi câu truy vấn
			$q = $this->db->ExeQuery($sql);

			//Trả về kết quả
			return $q;
		}

		//Hàm lấy thông tin tài khoản
		function getInfo($user)
		{
			//Câu truy vấn
			$sql = "SELECT userName,firstName,lastName,gender,birthday,email,phone,address,picture,id_role,status,note FROM account WHERE userName = '{$user}'";

			//Thực thi câu truy vấn
			$q = $this->db->QueryResult($sql);

			//Trả về kết quả
			return $q->fetchAll(PDO::FETCH_CLASS);
		}

		//Hàm lấy danh sách tài khoản
		function selectAccount($role = null)
		{
			//Nếu không truyền tham số thì sẽ hiển thị toàn bộ danh sách
			if($role == null)
				$sql = "SELECT userName,firstName,lastName,gender,birthday,email,phone,address,picture,id_role,status,note FROM account";
			else
				$sql = "SELECT userName,firstName,lastName,gender,birthday,email,phone,address,picture,id_role,status,note FROM account WHERE id_role = {$role} AND status = 1";
			//Thực thi câu truy vấn
			$q = $this->db->QueryResult($sql);

			//Trả về giá trị
			return $q->fetchAll(PDO::FETCH_CLASS);
		}

		//Hàm đổi mật khẩu
		function changePassword($user,$pass)
		{
			//Câu truy vấn
			$sql = "UPDATE account SET passWord = '{$pass}' WHERE userName = '{$user}'";

			//Thực thi câu truy vấn
			$q = $this->db->ExeQuery($sql);

			//Trả về kết quả
			return $q;
		}
    }