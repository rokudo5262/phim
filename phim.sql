-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 11, 2020 lúc 08:18 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `MaAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `TenAdmin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`MaAdmin`, `TenAdmin`, `username`, `password`) VALUES
(1, 'Trịnh Quang Trường', 'truong12345', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Nguyễn Văn Vui', 'vui12345', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Nguyễn Văn Buồn', 'buon12345', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Nguyễn Văn Bình Thường', 'normie123', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daodien`
--

DROP TABLE IF EXISTS `daodien`;
CREATE TABLE IF NOT EXISTS `daodien` (
  `MaDaoDien` int(11) NOT NULL AUTO_INCREMENT,
  `TenDaoDien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh_daodien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaDaoDien`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `daodien`
--

INSERT INTO `daodien` (`MaDaoDien`, `TenDaoDien`, `hinhanh_daodien`) VALUES
(1, 'Shane Black', 'Shane_Black.jpg'),
(2, 'Alan Taylor', 'Alan_Taylor.jpg'),
(3, 'Anthony Russo', 'Anthony_Russo.jpg'),
(4, 'Joe Russo', 'Joe_Russo.jpg'),
(5, 'James Gunn', 'James_Gunn.jpg'),
(6, 'Peyton Reed', 'Peyton_Reed.jpg'),
(7, 'Jon Favreau', 'Jon_Favreau_Deauville.jpg'),
(8, 'Louis Leterrier', 'Louis_Leterrier.jpg'),
(13, 'Scott Derrickson', 'Scott_Derrickson'),
(10, 'Kenneth Branagh', 'Kenneth_Branagh.jpg'),
(11, 'Joe Johnston', 'Joe_Johnston.jpg'),
(12, 'Joss Whedon', 'Joss_Whedon.jpg'),
(14, 'Jon Watts', 'Jon_Watts.jpg'),
(15, 'Taika Waititi', 'Taika_Waititi.jpg'),
(16, 'Ryan Coogler', 'Ryan_Coogler.jpg'),
(17, 'Anna Boden', 'Ryan-fleck-anne-boden.jpg'),
(18, 'Ryan Fleck', 'Ryan-fleck-anne-boden.jpg'),
(19, 'Johan Renck', 'Johan_Renck.jpg'),
(37, 'James Wan', ''),
(34, 'Kevin Feige', 'Kevin_Feige.jpg'),
(32, 'Zach Snyder', 'Zach_Snyder.jpg'),
(33, 'David Ayer', 'David_Ayer.jpg'),
(38, 'David F. Sandberg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienvien`
--

DROP TABLE IF EXISTS `dienvien`;
CREATE TABLE IF NOT EXISTS `dienvien` (
  `MaDienVien` int(11) NOT NULL AUTO_INCREMENT,
  `TenDienVien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh_dienvien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaDienVien`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienvien`
--

INSERT INTO `dienvien` (`MaDienVien`, `TenDienVien`, `hinhanh_dienvien`) VALUES
(1, 'Samuel L. Jackson', 'Samuel_L._Jackson.jpg'),
(2, 'Robert Downey Jr.', 'Robert_Downey_Jr.jpg'),
(3, 'Christopher Robert Evans', 'Chris_Evans.jpg'),
(4, 'Scarlett Johansson', 'Scarlett_Johansson.jpg'),
(5, 'Jeremy Renner', 'Jeremy_Renner.jpg'),
(6, 'Chris Hemsworth', 'Chris_Hemsworth.jpg'),
(7, 'Tom Hiddleston', 'Tom_Hiddleston.jpg'),
(8, 'Mark Ruffalo', 'Mark_Ruffalo.jpg'),
(11, 'Chris Pratt', 'Chris_Pratt.jpg'),
(9, 'Paul Rudd', 'Paul_Rudd.jpg'),
(10, 'Benedict Cumberbatch', 'Benedict_Cumberbatch.jpg'),
(13, 'Tom Holland', 'Tom_Holland.jpg'),
(12, 'Gwyneth Paltrow', 'Gwyneth_Paltrow.jpg'),
(14, 'Clark Gregg', 'Clark_Gregg.jpg'),
(15, 'Brie Larson', 'Brie_Larson.jpg\r\n'),
(16, 'Zoe Saldana', 'Zoe_Saldana.jpg'),
(17, 'Sebastian Stan', 'Sebastian_Stan.jpg'),
(18, 'Anthony Mackie', 'Anthony_Mackie.jpg'),
(19, 'Michael Douglas', 'Michael_Douglas.jpg'),
(20, 'Will Smith', 'Will_Smith.jpg'),
(22, 'Evangeline Lilly', 'Evangeline_Lilly.jpg'),
(23, 'Tessa Thompson', 'Tessa_Thompson.jpg'),
(24, 'Cate Blanchett', 'Cate_Blanchett.jpg'),
(25, 'Dave Bautista', 'Dave_Bautista.jpg'),
(26, 'Bradley Cooper', 'Bradley_Cooper.jpg'),
(27, 'Lee Pace', 'Lee_Pace.jpg'),
(28, 'Keanu Reeves', 'Keanu_Reeves.jpg'),
(29, 'Paul Bettany', 'Paul_Bettany.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphim`
--

DROP TABLE IF EXISTS `loaiphim`;
CREATE TABLE IF NOT EXISTS `loaiphim` (
  `MaLoaiPhim` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoaiPhim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoaiPhim`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphim`
--

INSERT INTO `loaiphim` (`MaLoaiPhim`, `TenLoaiPhim`) VALUES
(1, 'Phim Lẻ'),
(2, 'Phim Bộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT,
  `HoNguoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenNguoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`MaNguoiDung`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `HoNguoiDung`, `TenNguoiDung`, `username`, `password`, `email`, `ngaytao`) VALUES
(1, 'Trịnh Quang', 'Trường', 'truong12345', '827ccb0eea8a706c4c34a16891f84e7b', 'rokudo5262@gmail.com', '2019-07-25 06:58:58'),
(4, 'Nguyễn Văn', 'Vui', 'vui123456', '827ccb0eea8a706c4c34a16891f84e7b', '3001160129@ittc.edu.vn', '2019-08-03 14:35:54'),
(5, 'Nguyễn Văn', 'Buồn', 'buon12345', '827ccb0eea8a706c4c34a16891f84e7b', '3001160@ittc.edu.vn', '2019-08-04 15:50:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

DROP TABLE IF EXISTS `phim`;
CREATE TABLE IF NOT EXISTS `phim` (
  `MaPhim` int(11) NOT NULL AUTO_INCREMENT,
  `TenPhim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NamXuatBan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NhaXuatBan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` varchar(9999) COLLATE utf8_unicode_ci NOT NULL,
  `ThoiLuong` int(11) NOT NULL,
  `TrangThai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiPhim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`MaPhim`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`MaPhim`, `TenPhim`, `HinhAnh`, `Trailer`, `NamXuatBan`, `NhaXuatBan`, `TomTat`, `ThoiLuong`, `TrangThai`, `LoaiPhim`, `NgayDang`) VALUES
(1, 'The Incredible Hulk', 'TheIncredibleHulk.jpg', 'xbqNb2PFKKA', '2008', 'Marvel Studios', 'Sau nhiều năm bị biến thành kẻ nửa người nửa quái vật The Hulk, nhà khoa học Bruce Banner vẫn phải lần trốn trong rừng rậm Nam Mỹ, tìm cách chữa trị cho chính bản thân mình. Cùng lúc đó anh vẫn bị sự truy lùng của quân đội Mỹ, dẫn dắt bởi tướng Ross và tên Emil Blonsky, kẻ muốn sử dụng sức mạnh của The Hulk. Chính tên này sau đó đã tự lặp lại tai nạn của Bruce Banner, với hy vọng biến mình thành siêu nhân. Nhưng Emil phát hiện ra rằng hắn bị biến thành một con quái vật - the Abomination- và không bao giờ trở lại thành dạng người như Bruce được nữa. Đổ lỗi cho Bruce vì sự đột biến của mình, hắn truy sát anh để trả thù.', 112, 'Hoàn Thành', '1', '2019-07-22 04:04:37'),
(7, 'Captain America: The First Avenger', 'CaptainAmerica1.jpg', 'JerVrbLldXw', '2011', 'Marvel Studios', 'Bối cảnh phim bắt đầu năm 1942, khi Mỹ đang tham gia Thế chiến II và cần tới những chiến binh can trường. Chàng trai Steve Rogers (Chris Evans) là một người như vậy, nhưng thể hình quá thấp bé khiến anh không thể đạt được ước mơ tòng quân. Cơ may đến với Rogers khi anh được chọn tham gia một thí nghiệm của chính phủ, giúp biến người thường trở thành siêu chiến binh.  Mọi việc diễn ra suôn sẻ, biến Rogers thành một người cao to vạm vỡ, đầu óc tiếp thu mọi kỹ năng chiến đấu nhanh và vẫn giữ được trái tim nhân hậu.Anh trở thành Captain America, biểu tượng của nước Mỹ kể từ đó. Đối thủ của anh là phe Phát-xít, với quái nhân Red Skull, kẻ không chỉ quyền năng mà còn rất tàn ác.', 124, 'Hoàn Thành', '1', '2019-07-22 04:05:35'),
(6, 'Thor', 'Thor.jpg', 'JOddp-nlNvQ', '2011', 'Marvel Studios', 'Phim Thần Sấm là bộ phim được chuyển thể từ bộ truyện tranh nổi tiếng cùng tên của Marvel. Nhân vật chính, Thor là một chiến binh dũng cảm và đầy quyền năng nhưng lại kiêu ngạo của vương quốc Asgard.   Chính những hành động không suy tính của Thor đã gây ra một cuộc chiến kéo dài nhiều năm, vì lẽ đó, cha của anh, thần Odin, vị vua của những vị thần đã tước hết sức mạnh của anh và đẩy anh sống cùng loài người.   Một nữ khoa học gia trẻ, Jane Foster, dành một tình cảm đặc biệt cho Thor khi cô phát hiện ra anh, và cô trở thành mối tình đầu của Thor. Cô đã có ảnh hưởng sâu sắc đến con người Thor và trở thành mà người Thor yêu say đắm.Trong khi đó, các thế lực đen tối của Asgardlại đang âm mưu xâm chiếm Trái Đất.   Để bảo vệ cho những người mình yêu thương, Thor buộc phải đứng lên đương đầu với đoàn quân đến từ Asgard, mà đứng đằng sau chính là kẻ nguy hiểm và độc ác nhất tại thế giới của anh', 115, 'Hoàn Thành', '1', '2019-07-22 04:05:16'),
(8, 'Marvel\'s The Avengers', 'Avenger1.jpg', 'eOrNdBpGMv8', '2012', 'Marvel Studios', 'Marvel’s The Avengers là bộ phim giả tưởng kể về một nhóm siêu anh hùng với những khả năng đặc biệt, họ bao gồm: Người Sắt, Thor, Captain America, và Người Khổng Lồ được gọi chung với cái tên SHIELD. Mục đích của SHIELD là nhằm bảo vệ Trái đất khỏi âm mưu hủy hoại của những thế lực xấu từ ngoài địa cầu mà kẻ cầm đầu là Loki. Marvel’s The Avengers Là một trong những phim được mong đợi nhất hè 2012, phim quy tụ dàn diễn viên đẹp với những cảnh quay sống động đã mang về cho nhà sản xuất hơn 1 tỷ USD. Nếu bạn đã từng là Fan của những siêu phẩm như: Spider-Man, Batman thì Marvel’s The Avengers quả là một bộ phim khó có thể bỏ qua.', 143, 'Hoàn Thành', '1', '2019-07-22 04:05:55'),
(2, 'Iron Man', 'IronMan.jpg', '8hYlB38asDY', '2008', 'Marvel Studios', 'Tony Stark vừa là chủ tập đoàn công nghệ, vừa là một tay chơi kỳ dị. Trong chuyến thị sát Afghanistan, ông bị nhóm khủng bố bắt cóc. Chúng đòi Tony chế tạo thứ vũ khí hủy diệt để tấn công nước Mỹ.  Nhận ra sự thật phũ phàng rằng, những vũ khí do mình chế tạo đang quay ngược lại tấn công chính mình, Tony bắt tay chế tạo bộ giáp công nghệ cao. Tẩu thoát khỏi nơi giam cầm, Tony trở thành đại diện công lý dưới biệt danh Người sắt. Trong khi đó, người đồng sự trong tập đoàn Stark âm mưu lật đổ Tony.   Bộ phim mở ra câu chuyện trong tương lai về nhóm siêu anh hùng Avenger khi tổ chức bí mật SHIELD bắt đầu lộ diện. ', 126, 'Hoàn Thành', '1', '2019-07-21 14:17:39'),
(5, 'Iron Man 2', 'Ironman2.jpg', 'nS8aKzfIyGY', '2010', 'Marvel Studios', 'Tony Stark tự hé lộ thân phận Người sắt của mình cho công chúng và chìm trong hào quang danh vọng. Một kẻ lạ mặt xuất hiện tấn công anh trên đường đua Monte Carlo. Tony bị hiện tượng nhiễm trùng máu đe dọa mạng sống, còn tên sát thủ kia bắt tay với đối thủ của tập đoàn Stark hòng thôn tính Tony.  Phần 2 của Người sắt là lần đầu tiên trợ thủ Warmachine xuất hiện. Phim cũng tiết lộ những bí mật về cha của Tony, Howard Stark, trước khi dẫn dắt câu chuyện sang nhân vật Captain America, đồng đội tương lai của Người sắt tại tổ chức SHIELD. ', 124, 'Hoàn Thành', '1', '2019-07-22 04:05:01'),
(9, 'Iron Man 3', 'ironman3.jpg', 'YLorLVa95Xo', '2013', 'Marvel Studios', 'Từ sau những sự kiện và những trận chiến đầy ám ảnh trong The Avengers, Tony Stark quay về ở ẩn trong căn biệt thự sang trọng của mình, tạm thời chờ đợi trong tư cách một tỷ phú giàu có được yêu mến và gác danh phận siêu anh hùng sang một bên.  Tuy nhiên, những hiểm họa mới lại tiếp tục xuất hiện dưới bóng ma bao trùm của một quái nhân, đồng thời cũng là một thiên tài về công nghệ - The Mandarin. Người bạn thân trong lực lượng quân đội Hoa Kỳ của Tony - James Rhodes cần tới sự giúp đỡ của anh và những bộ giáp siêu việt.  Mọi chuyện không hề dễ dàng như Tony và James tưởng tượng: dưới sức mạnh thần bí của mười chiếc nhẫn vũ trụ, The Mandarin đã đánh bại \"Người Sắt\", đồng thời khiến siêu anh hùng - tỷ phú trở thành kẻ mất trí nhớ...', 190, 'Hoàn Thành', '1', '2019-07-22 04:07:09'),
(10, 'Thor: The Dark World', 'thor2.jpg', 'npvJ9FTgZbM', '2013', 'Marvel Studios', 'Thần Sấm 2 nói tiếp về quãng thời gian khi Thor trở thành vua xứ Asgard, lúc này anh phải đối mặt với một kẻ thù vô cùng nguy hiểm và mạnh mẽ, đó là The Dark Elves. Hắn thậm chí còn mạnh hơn cả Odin. Trong tình thế vô cùng nguy cấp, Thor đành phải nhờ đến Loki. Cả hai gác bỏ hiềm khích cùng nhau vượt qua một thế giới đen tối và vô cùng lạnh lẽo, nơi được gọi là The Dark Wold.', 112, 'Hoàn Thành', '1', '2019-07-22 04:07:28'),
(11, 'Captain America: The Winter Soldier', 'CapTainAmerica2.jpg', '7SlILk2WMTI', '2014', 'Marvel Studios', 'Bộ phim là câu chuyện tiếp nối bộ phim The Avengers, khi Steve Rogers phải tìm cách hòa nhập vào thế giới hiện đại và kết hợp với Natasha Romanoff/Black Widow để chiến đấu chống lại một kẻ thù nguy hiểm ở Washington, D.C. Sau cuộc chiến cùng đội The Avengers tại New York, Captain America (hay còn gọi là Steve Rogers) có một cuộc sống khá thầm lặng tại Washington và anh phải vật lộn để thích nghi với cuộc sông ở thế giới hiện đại.   Tuy nhiên, khi một người bạn trong SHIELD bị rơi vào vòng nguy hiểm, anh đã bị kéo vào một âm mưu đen tối có thể phá hủy cả nhân loại. Cùng với Black Widow, anh phải ngăn cản âm mưu này đồng thời chiến đấu chống lại nhừng sát thủ chuyên nghiệp được cử tới để thủ tiêu mình. Cặp đôi Captain, Black Widow còn tranh thủ sự giúp đỡ từ người bạn mới, Falcon . Tuy nhiên,một kẻ thù vô cùng nguy hiểm và bí ẩn lúc này lại xuất hiện: The Winter Soldier (Chiến binh mùa Đông)', 136, 'Hoàn Thành', '1', '2019-07-22 04:07:44'),
(12, 'Guardians of the Galaxy	', 'GuardiansoftheGalaxy1.jpg	', 'd96cjJhvlMA', '2014', 'Marvel Studios', 'Phim nói về một phi công phản lực được bị mắc kẹt trong không gian, và anh phải đoàn kết một nhóm người ngoài hành tinh để tạo thành một đội quân đủ khả năng đánh bại các mối đe dọa từ vũ trụ. Phim có sự tham gia diễn xuất của Karen Gillan, Bradley Cooper, Zoe Saldana… và sự chỉ đạo của đạo diễn James Gunn.', 100, 'Hoàn Thành', '1', '2019-07-22 04:08:15'),
(13, 'Avengers: Age of Ultron', 'Avengers2.jpg', 'tmeOjFno6Do', '2015', 'Marvel Studios', 'Trong phần này, biệt đội siêu anh hùng của chúng ta sẽ phải chiến đấu với binh đoàn robot được biết đến với cái tên là Ultron.', 150, 'Hoàn Thành', '1', '2019-07-22 04:08:36'),
(14, 'Ant-Man', 'Antman1.jpg', 'pWdKf3MneyI', '2015', 'Marvel Studios', 'Ant-Man kể về câu chuyện của một người đàn ông tên là Scott Lang, có khả năng thu nhỏ về kích thước nhưng lại tăng sức mạnh. Điều này buộc Scott Lang phải đón nhận yếu tố \"anh hùng\" trong mình và giúp cố vấn là Tiến sĩ Hank Pym bảo vệ bí mật đằng sau bộ trang phục Ant-Man, thoát khỏi một mối đe dọa khủng khiếp. Đối mặt với những rào cản khổng lồ, Scott Lang và Hank Pym phải lên kế hoạch hoàn thành một vụ cướp để có thể cứu thế giới.', 117, 'Hoàn Thành', '1', '2019-07-22 04:08:52'),
(15, 'Captain America: Civil War', 'CaptainAmerica3.jpg', 'dKrVegVI0Us', '2016', 'Marvel Studios', 'Captain America: Civil War là câu chuyện theo sau sự kiện Avengers: Age Of Ultron, các liên minh chính phủ trên toàn thế giới thông qua một hiệp ước được thiết lập để điều chỉnh hoạt động của tất cả siêu anh hùng. Điều này gây ra sự phân cực trong nội bộ nhóm Avengers, tạo nên hai phe gồm Iron Man và Captain America, gây ra một trận chiến sử thi giữa những người đồng đội.', 147, 'Hoàn Thành', '1', '2019-07-22 04:12:27'),
(16, 'Doctor Strange', 'DoctorStrange1.jpg', 'HSzx-zryEgM', '2016', 'Marvel Studios', 'DOCTOR STRANGE là câu chuyện về bác sĩ Giải Phẫu Thần Kinh tên Stephen Vincent Strange. Cuộc đời anh thay đổi từ sau một tai nạn xe hơi khủng khiếp. Sau tai nạn đó, Stephen nhận ra mình có những năng lực bí ẩn cũng như biết thêm về thế giới ma thuật huyền bí. Từ một vị bác sĩ bình thường, Stephen Strange dần nhận được nhiều siêu năng lực để cứu trái đất khỏi những tai họa.', 130, 'Hoàn Thành', '1', '2019-07-22 04:12:45'),
(17, 'Guardians of the Galaxy Vol. 2', 'GuardiansoftheGalaxy2.jpg', 'wUn05hdkhjM', '2017', 'Marvel Studios', 'Guardians Of The Galaxy - Vệ binh dải ngân hà Phần 2 tiếp tục câu chuyện về bộ tứ huyền thoại của thiên hà. Lần này, cả nhóm sẽ bắt đầu cuộc phiêu lưu mới nhằm tìm ra bí ẩn thân thế của Star Lord – Peter Quill và viên Power Infinity Gem sở hữu sức mạnh vô song. Nhân vật anti-hero Yondu sẽ có vai trò quan trọng hơn nữa trong phần này, bên cạnh đó cô em gái Nebula của Gamora cũng sẽ trở lại. ', 136, 'Hoàn Thành', '1', '2019-07-22 04:13:09'),
(18, 'Spider-Man: Homecoming', 'spiderman1.jpg', '39udgGPyYMg', '2017', 'Marvel Studios', 'Tạm biệt hai franchise về thời sinh viên, Spider-Man: Homecoming sẽ lần đầu tiên đưa các khán giả đến với cuộc sống trung học của Peter Paker – siêu anh hùng Người Nhện. Liệu một cậu bé chưa trưởng thành sẽ làm thế nào để cân bằng cuộc sống bình thường và trách nhiệm của một anh hùng giải cứu thế giới.  Sau những sự kiện ở Captain America: Civil War, Peter Parker trở về cuộc sống thường nhật, tiếp tục làm cậu học sinh trung học nhút nhát trong mắt bạn bè. Song song đó, chàng thiếu niên 15 tuổi vẫn có thể làm người hùng bảo vệ New York nhờ bộ giáp do Tony Stark / Iron Man (Robert Downey Jr.) tặng cho và nằm dưới sự giám sát từ xa của Happy Hogan (Jon Favreau).', 133, 'Hoàn Thành', '1', '2019-07-22 04:13:26'),
(19, 'Thor: Ragnarok', 'thor3.jpg', 'ue80QwXMRHg', '2017', 'Marvel Studios', 'Ragnarok ám chỉ “tận cùng của vũ trụ”, đồng nghĩa với trận chiến sống còn của chín cõi (Nine Realms). Sau khi Loki Loki soán ngôi cha Odin, vị thần tinh quái này tiếp tục mở đường nhiễu loạn tiến từ cầu Bifrost vào trong Asgard.  Ở bên kia vũ trụ, Thor (Chris Hemsworth) phải bước vào một cuộc chiến đầy khốc liệt với đối thủ mà anh sẽ gặp là một đồng đội cũ đến từ biệt đội Avenger – Hulk. Cuộc tìm kiếm sự sống còn của Thor khiến anh phải chạy đua với thời gian để ngăn chặn Hela (Cate Blanchett) tiêu diệt cả thế giới anh đang sống cùng nền văn minh Asgard.', 130, 'Hoàn Thành', '1', '2019-07-22 04:13:41'),
(20, 'Black Panther', 'BlackPanther1.jpg', 'xjDjIWPwcPU', '2018', 'Marvel Studios', 'Vương quốc Wakanda, quê hương của Black Panther/ T\'Challa hiện ra qua lời kể của một nhân chứng sống sót trở về. Đây là quốc gia khá khép kín và sở hữu lượng Vibranium lớn nhất trên thế giới. Black Panther - người cầm quyền của Wakanda sở hữu bộ áo giáp chống đạn và móng vuốt sắc nhọn, anh được miêu tả là “người tốt với trái tim nhân hậu”.   Nhưng cũng chính vì những đức tính tốt này mà Black Panther gặp khó khăn khi kế thừa ngai vàng sau khi vua cha băng hà. Đối mặt với sự phản bội và hiểm nguy, vị vua trẻ phải tập hợp các đồng minh và phát huy toàn bộ sức mạnh của Black Panther để đánh bại kẻ thù, đem lại an bình cho nhân dân của mình.', 134, 'Hoàn Thành', '1', '2019-07-22 04:14:47'),
(21, 'Avengers: Infinity War', 'Avenger3.jpg', '6ZfuNTqbHE8', '2018', 'Marvel Studios', 'Sau chuyến hành trình độc nhất vô nhị không ngừng mở rộng và phát triển vụ trũ điện ảnh Marvel, bộ phim Avengers: Cuộc Chiến Vô Cực sẽ mang đến màn ảnh trận chiến cuối cùng khốc liệt nhất mọi thời đại. Biệt đội Avengers và các đồng minh siêu anh hùng của họ phải chấp nhận hy sinh tất cả để có thể chống lại kẻ thù hùng mạnh Thanos trước tham vọng hủy diệt toàn bộ vũ trụ của hắn.', 149, 'Hoàn Thành', '1', '2019-07-22 04:14:11'),
(22, 'Ant-Man and the Wasp', 'Antman2.jpg', 'UUkn-enk2RU', '2018', 'Marvel Studios', 'Sau trận nội chiến khốc liệt, Scott Lang – anh hùng Người Kiến với khả năng phóng to, thu nhỏ lại phải đối mặt với sự lựa chọn khó khăn trong cuộc sống đời thường: làm siêu anh hùng gánh vác những trách nhiệm nặng nề của thế giới hay làm một người cha có trách nhiệm. Trong lúc ấy, Scott được tiến sĩ Hank Pym và Hope Van Dyne – Chiến Binh Ong triệu tập để thực hiện một nhiệm vụ cấp bách mới. Scott sẽ phải mặc vào bộ áo Người Kiến một lần nữa và chiến đấu bên cạnh chiến binh ong để lật mở những bí ẩn trong quá khứ.', 118, 'Hoàn Thành', '1', '2019-07-22 04:14:29'),
(23, 'Captain Marvel', 'CaptainMarvel1.jpg', 'Z1BCujX3pw8', '2019', 'Marvel Studios', 'Lấy bối cảnh những năm 90s, Captain Marvel là một cuộc phiêu lưu hoàn toàn mới đến với một thời kỳ chưa từng xuất hiện trong vũ trụ điện ảnh Marvel. Bộ phim kể về con đường trở thành siêu anh hùng mạnh mẽ nhất vũ trụ của Carol Danvers. Bên cạnh đó, trận chiến ảnh hưởng đến toàn vũ trụ giữa tộc Kree và tộc Skrull đã lan đến Trái Đất, liệu Danvers và các đồng minh có thể ngăn chặn binh đoàn Skrull cũng như các thảm họa tương lai?', 123, 'Hoàn Thành', '1', '2019-07-22 04:15:16'),
(24, 'Avengers: Endgame', 'Avenger4.jpg', 'TcMBFSGVi1c', '2019', 'Marvel Studios', 'Biệt Đội Siêu Anh Hùng 4: Tàn Cuộc (Avengers 4: Endgame) ra mắt vào tháng 4/2019 sẽ giải quyết triệt để những khúc mắc đã vạch ra suốt 22 bộ phim trước đó của Vụ trụ điện ảnh Marvel (MCU). Hai tháng sau đó, Người Nhện 2 là khởi đầu hoàn toàn mới dành cho MCU.  Sau sự kiện Thanos làm cho một nửa vũ trụ tan biến và khiến cho biệt đội Avengers thảm bại, những siêu anh hùng sống sót phải tham gia trận chiến cuối cùng trong Avengers: Endgame.', 181, 'Hoàn Thành', '1', '2019-07-22 04:14:14'),
(25, 'Chernobyl (Season 1)', 'Chernobyl.jpg', 's9APLXM9Ei8', '2019', 'HBO', 'Vào tháng 4 năm 1986, một vụ nổ tại nhà máy điện hạt nhân nguyên tử ở Liên bang Xô Viết đã trở thành một trong những thảm họa kinh hoàng nhất thế giới do con người gây nên.', 64, 'Hoàn Thành', '2', '2019-07-22 04:15:31'),
(27, 'Batman v Superman: Dawn of Justice', 'bvs.jpg', 'fis-9Zqu2Ro', '2016', 'Warner Bros. Pictures', 'Nội dung bộ phim sẽ xoay quanh cuộc đối đầu có 1-0-2 của vị hiệp sĩ mạnh mẽ, đáng gờm nhất của thành phố Gotham với biểu tượng được tôn sùng nhất của thành phố Metropolis. Nguyên nhân của “cuộc chiến” này bắt nguồn từ việc họ đang lo lắng vì không thể kiểm soát được siêu anh hùng mới có sức mạnh thần thánh. Tuy nhiên, trong lúc họ “mải miết” chiến đấu với nhau thì có một mối đe dọa khác đã nổi lên và đẩy nhân loại vào tình thế nguy hiểm hơn bao giờ hết.', 184, 'Hoàn Thành', '1', '2019-07-22 04:15:45'),
(28, 'Suicide Squad', 'squad1.jpg', 'CmRih_VtVAs', '2016', 'Warner Bros. Pictures', 'Suicide Squad xoay quanh nhóm ác nhân mang tên Biệt đội Cảm tử. Đây là tổ chức đánh thuê gồm toàn những kẻ thù của Batman, được chính phủ tập hợp lại để chuyên thực hiện các nhiệm vụ tối mật. Điều gây tò mò nhất cho công chúng về Suicide Squad hẳn là nhân vật Joker.  Mọi chuyện bắt đầu từ trò đùa tai quái của Joker, khi hắn gửi tới Harley một lá thư tình rất đẹp chứa trong chiếc hộp đen cùng một con chuột-còn-sống-nhăn trong đó. Và rồi cậu ấy gửi cho Will Smith một băng đạn thật có kèm tâm thư. Hắn còn gửi cho các đồng đội một món quà dưới dạng... một con heo chết, kèm với đó là cuốn băng ghi lại lời của Leto trong hình dạng của Joker: \"Mấy người, tôi không thể ở đó cùng các bạn nhưng tôi muốn mấy người biết là tôi cũng đang tập luyện vất vả y như mấy người vậy\".', 135, 'Hoàn Thành', '1', '2019-07-22 04:16:03'),
(29, 'Justice League', 'Justiceleague1.jpg', '3cxixDgHUYw', '2017', 'Warner Bros. Pictures', 'Justice League hay còn được biết đến với cái tên Liên Minh Công Lý, là tập hợp những siêu anh hùng mang trong mình sức mạnh phi thường để giải cứu thế giới khỏi những thế lực đen tối trong vũ trụ DC. Lần này, nhân loại phải đối mặt với tên ác quỷ vô cùng tàn độc – Steppenwolf. Hắn là một trong những tay sai đắc lực của Darksied – một ác nhân và cũng chính là kẻ thù lớn nhất của Liên Minh Công Lý.   Steppenwolf đã phô trương năng lực siêu phàm của mình, gieo rắc nỗi sợ hãi và bóng tối tới xứ Themyscira – quê hương của Wonder Woman và loài người.', 120, 'Hoàn Thành', '1', '2019-08-02 09:53:39'),
(30, 'Aquaman', 'Aquaman.jpg', 'WDkg3h8PCVU', '2018', 'Warner Bros. Pictures', 'Sau những sự kiện trong Justice League, Arthur Curry / Aquaman trở về biển cả và bắt đầu đảm nhận quyền thừa kế vương quốc Atlantis dưới sự cố vấn của công chúa Mera. Thế nhưng, đế chế huyền thoại bao năm ẩn mình dưới lòng biển sâu Atlantics sắp phải dậy sóng khi Orm quyết tâm thu phục 7 chủng tộc nơi đáy đại dương để tiêu diệt toàn bộ sự sống trên mặt đất. Giữa lúc biển xanh cuộn trào những đợt sóng dữ dội nhất Aquaman sẽ đương đầu với mọi việc như thế nào để bảo vệ quê hương và thế giới? ', 143, 'Hoàn Thành ', '1', '2019-08-02 09:53:21'),
(31, 'Shazam!', 'Shazam.jpg', 'go6GEIrcvFY', '2019', 'Warner Bros. Pictures', 'Tất cả chúng ta đều là người hùng, vấn đề ở chỗ chúng ta phải biết cách phát huy năng lực của mình. Trong trường hợp của Bill Batson (Angel), với sự giúp đỡ của một phù thủy cổ xưa, chỉ cần nói lớn từ “Shazam!” là đứa trẻ 14 tuổi này có thể biến thành siêu anh hùng Shazam trưởng thành (Levi). Nhưng bên trong thân hình như một vị thần đó vẫn là trái tim của một đứa trẻ.   Cái tên Shazam được dựa trên chữ cái đầu của những vị thần dũng mãnh là Solomon, Hercules, Atlas, Zeus, Achilles cùng Mercury.', 132, 'Hoàn Thành', '1', '2019-08-02 09:53:03'),
(37, 'Spiderman : Far Form Home', 'spiderman3.jpg', 'Nt9L1jCKGnE', '2019', 'Marvel Studio', 'Nhóc nhện Tom Holland vừa hé lộ tên phần tiếp theo của loạt phim Người Nhện sẽ là \"Spider-Man: Far From Home\", tạm hiểu là \"Người Nhện: Xa Nhà\". Trước đó thì giám đốc Marvel Studios Kevin Feige đã tiết lộ rằng một trong những điểm đến của người nhện chính là thủ đô Luân Đôn của đảo quốc sương mù.\r\n\r\nTạm thời vẫn chưa có nhiều thông tin về phần 2 của loạt phim về Người Nhện, bên cạnh việc nam tài tử Jake Gyllenhaal đang trong quá trình đàm phán để vào vai siêu ác nhân Mysterio.\r\nVới việc phần tiếp theo của Người Nhện, Vệ Binh Dải Ngân Hà và Báo Đen trong quá trình sản xuất, có vẻ như kết quả ở cuối tập Avengers: Infinity War sẽ không phải là vĩnh viễn. Tuy vậy cũng sẽ rất thú vị để xem các siêu anh hùng Marvel như thế nào sau \"chiến thắng\" của đại ác nhân Thanos.\r\n\r\nSpider-Man: Far From Home sẽ khởi chiếu vào ngày 5/7/2019', 129, 'Hoàn Thành', '1', '2019-08-02 06:50:49'),
(32, 'Wonder Woman', 'wonderwomen1.jpg', '1Q8fG0TtVAY', '2017', 'Warner Bros. Pictures', 'Bộ phim kể về quá khứ của nữ chiến binh huyền thoại Diana Prince trước khi nàng trở thành Wonder Woman gặp gỡ Người Dơi và Siêu Nhân trong Batman v Superman: Dawn Of Justice.   Wonder Woman khi đó nàng công chúa Diana của vùng Amazone rời hòn đảo quê nhà để khám phá thế giới và từng bước trở thành một trong những siêu anh hùng vĩ đại nhất thế giới. Dù không có sự xuất hiện của hai trai đẹp Batman Ben Affleck và Superman Henry Cavill nhưng Wonder Woman sẽ có sự tham gia của ngôi sao series Star Trek – Chris Pine.', 141, 'Hoàn Thành', '1', '2019-08-02 09:59:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim_daodien`
--

DROP TABLE IF EXISTS `phim_daodien`;
CREATE TABLE IF NOT EXISTS `phim_daodien` (
  `MaPhim` int(11) NOT NULL,
  `MaDaoDien` int(11) NOT NULL,
  PRIMARY KEY (`MaPhim`,`MaDaoDien`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim_daodien`
--

INSERT INTO `phim_daodien` (`MaPhim`, `MaDaoDien`) VALUES
(1, 8),
(2, 7),
(5, 7),
(6, 10),
(7, 11),
(9, 1),
(10, 2),
(11, 3),
(11, 4),
(12, 5),
(14, 6),
(15, 3),
(15, 4),
(17, 5),
(19, 15),
(20, 16),
(21, 3),
(21, 4),
(22, 6),
(23, 17),
(23, 18),
(24, 3),
(24, 4),
(25, 19),
(28, 33),
(29, 12),
(29, 32),
(30, 37),
(31, 38);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim_dienvien`
--

DROP TABLE IF EXISTS `phim_dienvien`;
CREATE TABLE IF NOT EXISTS `phim_dienvien` (
  `MaPhim` int(11) NOT NULL,
  `MaDienVien` int(11) NOT NULL,
  `ThuVai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaPhim`,`MaDienVien`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim_dienvien`
--

INSERT INTO `phim_dienvien` (`MaPhim`, `MaDienVien`, `ThuVai`) VALUES
(2, 2, 'Anthony Edward Stark / Ironman'),
(5, 2, 'Anthony Edward Stark / Ironman'),
(9, 2, 'Anthony Edward Stark / Ironman'),
(12, 11, 'Peter Quill / Star Lord'),
(17, 11, 'Peter Quill / Star Lord'),
(21, 11, 'Peter Quill / Star Lord'),
(24, 11, 'Peter Quill / Star Lord'),
(7, 3, 'Steve Rogers / Captain America'),
(11, 3, 'Steve Rogers / Captain America'),
(21, 3, 'Steve Rogers / Captain America'),
(24, 3, 'Steve Rogers / Captain America'),
(21, 2, 'Anthony Edward Stark / Ironman'),
(24, 2, 'Anthony Edward Stark / Ironman'),
(6, 6, 'Thor'),
(10, 6, 'Thor'),
(21, 6, 'Thor'),
(24, 6, 'Thor'),
(19, 6, 'Thor'),
(21, 8, 'Bruce Banner / Hulk '),
(19, 8, 'Bruce Banner / Hulk '),
(24, 8, 'Bruce Banner / Hulk '),
(21, 9, 'Scott Lang / Ant-man'),
(24, 9, 'Scott Lang / Ant-man'),
(14, 9, 'Scott Lang / Ant-man'),
(22, 9, 'Scott Lang / Ant-man'),
(6, 5, 'Clinton Francis Barton /Hawkeye'),
(24, 5, 'Clinton Francis Barton /Hawkeye'),
(8, 5, 'Clinton Francis Barton /Hawkeye'),
(13, 5, 'Clinton Francis Barton /Hawkeye'),
(16, 10, 'Stephen Vincent Strange / Doctor Strange'),
(19, 10, 'Stephen Vincent Strange / Doctor Strange'),
(21, 10, 'Stephen Vincent Strange / Doctor Strange'),
(24, 10, 'Stephen Vincent Strange / Doctor Strange'),
(5, 4, 'Natalia Alianovna Romanoff / Black Widow'),
(8, 4, 'Natalia Alianovna Romanoff / Black Widow'),
(11, 4, 'Natalia Alianovna Romanoff / Black Widow'),
(13, 4, 'Natalia Alianovna Romanoff / Black Widow'),
(21, 4, 'Natalia Alianovna Romanoff / Black Widow'),
(24, 4, 'Natalia Alianovna Romanoff / Black Widow'),
(15, 4, 'Natalia Alianovna Romanoff / Black Widow'),
(2, 1, 'Nick Fury'),
(5, 1, 'Nick Fury'),
(7, 1, 'Nick Fury'),
(11, 1, 'Nick Fury'),
(8, 1, 'Nick Fury'),
(13, 1, 'Nick Fury'),
(23, 1, 'Nick Fury'),
(24, 1, 'Nick Fury'),
(15, 13, 'Peter Benjamin Parker / Spider-Man'),
(18, 13, 'Peter Benjamin Parker / Spider-Man'),
(21, 13, 'Peter Benjamin Parker / Spider-Man'),
(24, 13, 'Peter Benjamin Parker / Spider-Man'),
(28, 20, 'Floyd Lawton / Deadshot'),
(14, 22, 'Hope van Dyne / Wasp'),
(22, 22, 'Hope van Dyne / Wasp'),
(37, 1, 'Nick Fury'),
(37, 13, 'Peter Parker / Spiderman'),
(13, 2, 'Anthony Edward Stark / Ironman'),
(8, 3, 'Steve Rogers / Captain America'),
(6, 7, 'Loki'),
(10, 7, 'Loki'),
(19, 7, 'Loki'),
(21, 7, 'Loki'),
(8, 7, 'Loki'),
(8, 2, 'Anthony Edward Stark / Ironman'),
(24, 23, 'Valkyrie'),
(21, 23, 'Valkyrie'),
(19, 23, 'Valkyrie'),
(19, 24, 'Hela'),
(22, 19, 'Hank Pym'),
(14, 19, 'Hank Pym'),
(17, 25, 'Drax'),
(12, 25, 'Drax'),
(12, 26, 'Rocket Raccoon'),
(17, 26, 'Rocket Raccoon'),
(21, 26, 'Rocket Raccoon'),
(24, 26, 'Rocket Raccoon'),
(24, 25, 'Drax'),
(21, 25, 'Drax'),
(23, 15, ' Carol Danvers / Captain Marvel'),
(24, 15, ' Carol Danvers / Captain Marvel'),
(13, 6, 'Thor'),
(8, 6, 'Thor'),
(17, 27, 'Ronan the Accuser'),
(23, 27, 'Ronan the Accuser'),
(11, 17, 'Bucky Barnes / Winter Soldier'),
(15, 17, 'Bucky Barnes / Winter Soldier'),
(7, 17, 'Bucky Barnes'),
(21, 17, 'Bucky Barnes / Winter Soldier'),
(24, 17, 'Bucky Barnes / Winter Soldier'),
(11, 18, 'Samuel Thomas Wilson / Falcon'),
(15, 18, 'Samuel Thomas Wilson / Falcon'),
(24, 18, 'Samuel Thomas Wilson / Falcon'),
(21, 18, 'Samuel Thomas Wilson / Falcon'),
(8, 8, 'Bruce Banner / Hulk'),
(13, 8, 'Bruce Banner / Hulk'),
(2, 29, 'J.A.R.V.I.S.'),
(5, 29, 'J.A.R.V.I.S.'),
(9, 29, 'J.A.R.V.I.S.'),
(21, 29, 'Vision'),
(8, 29, 'J.A.R.V.I.S.'),
(13, 29, 'Vision'),
(15, 29, 'Vision');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim_quocgia`
--

DROP TABLE IF EXISTS `phim_quocgia`;
CREATE TABLE IF NOT EXISTS `phim_quocgia` (
  `MaPhim` int(11) NOT NULL,
  `MaQuocGia` int(11) NOT NULL,
  PRIMARY KEY (`MaPhim`,`MaQuocGia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim_quocgia`
--

INSERT INTO `phim_quocgia` (`MaPhim`, `MaQuocGia`) VALUES
(1, 1),
(2, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(25, 4),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(37, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim_theloai`
--

DROP TABLE IF EXISTS `phim_theloai`;
CREATE TABLE IF NOT EXISTS `phim_theloai` (
  `MaPhim` int(11) NOT NULL,
  `MaTheLoai` int(11) NOT NULL,
  PRIMARY KEY (`MaPhim`,`MaTheLoai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim_theloai`
--

INSERT INTO `phim_theloai` (`MaPhim`, `MaTheLoai`) VALUES
(1, 3),
(1, 10),
(2, 3),
(5, 3),
(6, 10),
(7, 1),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 1),
(12, 3),
(13, 3),
(13, 10),
(14, 3),
(15, 3),
(15, 10),
(16, 3),
(16, 10),
(17, 3),
(18, 3),
(25, 13),
(27, 10),
(28, 7),
(28, 10),
(29, 3),
(32, 3),
(32, 10),
(37, 7),
(37, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

DROP TABLE IF EXISTS `quocgia`;
CREATE TABLE IF NOT EXISTS `quocgia` (
  `MaQuocGia` int(11) NOT NULL AUTO_INCREMENT,
  `TenQuocGia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaQuocGia`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`MaQuocGia`, `TenQuocGia`) VALUES
(1, 'Mỹ'),
(2, 'Trung Quốc'),
(3, 'Nga'),
(4, 'Anh'),
(5, 'Nhật Bản'),
(6, 'Hàn Quốc'),
(7, 'Úc'),
(8, 'Pháp'),
(9, 'Ấn Độ'),
(10, 'Việt Nam'),
(11, 'Thái Lan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tapphim`
--

DROP TABLE IF EXISTS `tapphim`;
CREATE TABLE IF NOT EXISTS `tapphim` (
  `MaPhim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaTap` int(11) NOT NULL AUTO_INCREMENT,
  `SoTap` int(11) NOT NULL,
  `TenTap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaTap`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tapphim`
--

INSERT INTO `tapphim` (`MaPhim`, `MaTap`, `SoTap`, `TenTap`, `Video`) VALUES
('25', 1, 1, '1:23:45', '1.mp4'),
('25', 2, 2, 'Please Remain Calm', '1.mp4'),
('25', 3, 3, 'Open Wide, O Earth', '1.mp4'),
('25', 4, 4, 'The Happiness of All Mankind', '1.mp4'),
('25', 5, 5, 'Vichnaya Pamyat', '1.mp4'),
('1', 6, 1, '', '1.mp4'),
('2', 7, 1, '', '1.mp4'),
('5', 8, 1, '', '1.mp4'),
('6', 9, 1, '', '1.mp4'),
('7', 10, 1, '', '1.mp4'),
('8', 11, 1, '', '1.mp4'),
('12', 12, 1, '', '1.mp4'),
('13', 13, 1, '', '1.mp4'),
('14', 14, 1, '', '1.mp4'),
('15', 15, 1, '', '1.mp4'),
('16', 16, 1, '', '1.mp4'),
('17', 17, 1, '', '1.mp4'),
('18', 18, 1, '', '1.mp4'),
('19', 19, 1, '', '1.mp4'),
('20', 20, 1, '', '1.mp4'),
('21', 21, 1, '', '1.mp4'),
('22', 22, 1, '', '1.mp4'),
('23', 23, 1, '', '1.mp4'),
('24', 24, 1, '', '1.mp4'),
('30', 32, 1, '', '1.mp4'),
('28', 26, 1, '', '1.mp4'),
('27', 27, 1, '', '1.mp4'),
('9', 28, 1, '', '1.mp4'),
('10', 29, 1, '', '1.mp4'),
('11', 30, 1, '', '1.mp4'),
('31', 33, 1, '', '1.mp4'),
('37', 39, 1, '', '1.mp4'),
('32', 41, 1, '', '1.mp4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `MaTheLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenTheLoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaTheLoai`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`MaTheLoai`, `TenTheLoai`, `MoTa`) VALUES
(1, 'Hài Kịch', '111'),
(2, 'Kinh Dị', ''),
(3, 'Hành Động\r\n', ''),
(4, 'Viễn Tưởng', ''),
(5, 'hoạt hình', ''),
(6, 'lãng mạn', ''),
(7, 'hành động', ''),
(8, 'phiêu lưu', ''),
(10, 'Siêu Anh Hùng', ''),
(12, 'Thay Ma', ''),
(13, 'Thảm Họa', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
