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
INSERT INTO KhachHang (SĐT, MatKhau, HoTen, GioiTinh, DiaChi, NgaySinh) VALUES ('0985020034','123', 'Chu Hien', '1', 'Nghệ An', '2000-02-04');
create table TuyenXe (
MaTuyen varchar(5) NOT NULL primary key,
SoXe int(3) NOT NULL,
TGChay time,
TGDung time,
TGGianCach int(2),
GiaVe float NOT NULL
);
insert into TuyenXe (MaTuyen, SoXe, TGChay, TGDung, TGGianCach, GiaVe) values
('TX01', '01','05:00:00', '21:00:00', '30', '7000'),
('TX02', '02','05:00:00', '21:00:00', '30', '7000'),
('TX03', '03','05:00:00', '21:00:00', '30', '7000'),
('TX04', '04','05:00:00', '21:00:00', '30', '7000');
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