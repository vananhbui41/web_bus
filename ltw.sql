create database bus;
use bus;
create table KhachHang (
MaKH int(6) auto_increment NOT NULL primary key,
SĐT varchar(10) not null,
Matkhau varchar(15) not null,
HoTen varchar(30),
GioiTinh int(1),
DiaChi varchar(30),
NgaySinh date,
MaThe varchar(10)
);

create table TuyenXe (
MaTuyen varchar(5) NOT NULL primary key,
SoXe int(3) NOT NULL,
TGDen time,
TGXuat time,
TGGianCach int(4),
GiaVe float NOT NULL
);
create table VeThuong (
MaVe int(5) auto_increment not null primary key,
MaTuyen varchar(5) NOT NULL,
MaKH int(6) NOT NULL,
ThoiGian timestamp,
FOREIGN KEY (MaTuyen) REFERENCES TuyenXe(MaTuyen),
foreign key (MaKH) references KhachHang(MaKH)
);
create table DiemDung (
DiemDung varchar(30) not null primary key,
MaTuyen varchar(5) not null,
foreign key(MaTuyen) references TuyenXe(MaTuyen)
);
create table TheXeBuyt (
MaThe varchar(10) not null primary key,
SoDu float not null,
TheVatLy int(3) not null
);
create table TheNganHang (
SoThe varchar(15) not null primary key,
NganHang varchar(50) not null,
MaKH int(6) not null auto_increment,
MaThe varchar(10),
foreign key(MaKH) references KhachHang(MaKH),
foreign key(MaThe) references TheXeBuyt(MaThe)
);
create table QuanLy (
MaQL varchar(15) not null primary key,
MatKhau varchar(15) not null,
HoTen varchar(30),
NgaySinh date
);