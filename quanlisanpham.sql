-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2021 lúc 03:46 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlisanpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `tenCate` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `tenCate`, `theloai`) VALUES
(1, 'Nước Hoa', 'NH'),
(2, 'Mỹ phẩm xách tay', 'Phấn mắt'),
(3, 'Son', 'Son'),
(4, 'Toners', 'Toners'),
(5, 'Phấn Má', 'PM'),
(6, 'Kẻ mắt', 'KM'),
(7, 'Kem nền', 'KN'),
(8, 'Mascara', 'MCR'),
(9, 'Nước tẩy trang', 'NTT'),
(10, 'Phấn Mắt', 'PMM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `ho` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_update` date NOT NULL,
  `date_at` date NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `email`, `password`, `sdt`, `ho`, `ten`, `date_update`, `date_at`, `diachi`) VALUES
(1, 'mienmien192@gmail.com', 'ha12345', '0703759912', 'Tran', 'Ha', '2021-06-09', '2021-06-09', '165 Hoàng Hoa Thám');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `xuatxu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cate_ID` int(11) DEFAULT NULL,
  `category` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `des` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `img`, `gia`, `soluong`, `xuatxu`, `cate_ID`, `category`, `des`, `info`, `product_status`) VALUES
(3, 'SHALIMAR PARFUM INITIAL', 'shalimar.jpg', 499000, 1, 'Việt Nam', NULL, 'Nước hoa', 'Khi ra mắt Shalimar Parfum Initial, Thierry Wasser đã xem đó là câu trả lời cho lời thách thức của cháu gái ông: một loại nước hoa dành riêng cho cô bé. Thưởng hiệu Guerlain đã giải thích việc tạo ra loại nước hoa này khó đến thế nào, khi cố gắng khiến cho mùi hương ngày càng nở rộ nhưng vẫn giữ được đúng bản chất quyến rũ của nó. Kết quả đã cho ra một loại nước hoa hoa cỏ - hổ phách. Shalimar Parfum Initial đã được ra mắt vào tháng 3, 2011. và người đã sáng tạo ra nó không ai khác chính là Thierry Wasser.\r\n\r\nVới mùi hương đậm chất hương phấn và hương thực phẩm hơn so với phiên bản Shalimar gốc, Shalimar Parfum Initial có sử dụng hương cam quýt, xanh tự nhiên, hương hoa cỏ, gỗ và phương đông. Khi bắt đầu với hương cam quýt, ông đã sử dụng vỏ cam. Hương hoa hồng và nhài bao bọc lấy hương gỗ của cỏ hương bài và hoắc hương. Về phần hương phương đông, vani, bạch xạ hương và đậu Tonka tạo ra một hơi ấm đầy quyến rũ. Hương xanh tự nhiên mang lại một chút tươi mát cho hỗn hợp nước hoa.\r\n\r\n', 'Khi ra mắt Shalimar Parfum Initial, Thierry Wasser đã xem đó là câu trả lời cho lời thách thức của cháu gái ông: một loại nước hoa dành riêng cho cô bé. Thưởng hiệu Guerlain đã giải thích việc tạo ra loại nước hoa này khó đến thế nào, khi cố gắng khiến cho mùi hương ngày càng nở rộ nhưng vẫn giữ được đúng bản chất quyến rũ của nó. Kết quả đã cho ra một loại nước hoa hoa cỏ - hổ phách. Shalimar Parfum Initial đã được ra mắt vào tháng 3, 2011. và người đã sáng tạo ra nó không ai khác chính là Thierry Wasser.\r\n\r\nVới mùi hương đậm chất hương phấn và hương thực phẩm hơn so với phiên bản Shalimar gốc, Shalimar Parfum Initial có sử dụng hương cam quýt, xanh tự nhiên, hương hoa cỏ, gỗ và phương đông. Khi bắt đầu với hương cam quýt, ông đã sử dụng vỏ cam. Hương hoa hồng và nhài bao bọc lấy hương gỗ của cỏ hương bài và hoắc hương. Về phần hương phương đông, vani, bạch xạ hương và đậu Tonka tạo ra một hơi ấm đầy quyến rũ. Hương xanh tự nhiên mang lại một chút tươi mát cho hỗn hợp nước hoa.\r\n\r\n', 1),
(4, 'Bảng màu mắt BECCA Après Ski Glow Face Palette', 'becca.jpg', 380000, 1, 'Hà Nội', NULL, 'Phấn mắt', 'Bảng BECCA Après Ski Glow Face Palette\r\nÁnh sáng tươi mới từ sườn núi bao gồm Shimmering Skin Perfector® mới được làm nổi bật trong lớp lấp lánh và lớp phấn hồng trong mùa đông Berry!', 'Bảng BECCA Après Ski Glow Face Palette\r\nÁnh sáng tươi mới từ sườn núi bao gồm Shimmering Skin Perfector® mới được làm nổi bật trong lớp lấp lánh và lớp phấn hồng trong mùa đông Berry!', 1),
(5, 'Nước tẩy trang Simple Micellar Cleansing Water', 'simple.jpg', 200000, 1, 'Việt Nam', NULL, 'Nước tẩy trang', '- Nước tẩy trang Simple nằm trong top những sản phẩm Best Seller của hãng, sử dụng công nghệ Mixen rất lành tính cho da.\r\n- Tẩy được cho vùng mắt, môi nhạy cảm.\r\n- Các thành phần rất lành tính, không gây kích ứng da, phù hợp với mọi làn da, kể cả làn da nhạy cảm nhất.\r\n- Sau khi tẩy trang không cần phải rửa lại với nước ngay.', '- Nước tẩy trang Simple nằm trong top những sản phẩm Best Seller của hãng, sử dụng công nghệ Mixen rất lành tính cho da.\r\n- Tẩy được cho vùng mắt, môi nhạy cảm.\r\n- Các thành phần rất lành tính, không gây kích ứng da, phù hợp với mọi làn da, kể cả làn da nhạy cảm nhất.\r\n- Sau khi tẩy trang không cần phải rửa lại với nước ngay.', 1),
(6, 'Kẻ Mắt Hold Live siêu mảnh', 'km_holdlive.jpg', 199000, 1, 'Việt Nam', NULL, 'Kẻ mắt', 'chuyên hàng chính hãng mọi thắc mắc xin liên hệ hotline \r\nquý khách hàng xin vui lòng đọc kỹ về sản phẩm. bao bì sản phẩm khác nhau tùy thuộc từng lô sản phẩm, mẫu cũ mẫu mới....HSD sản phẩm in trên bao bì. CAM KẾT BẢO HÀNH CHÍNH HÃNG TRỌN ĐỜI)\r\n\r\nKẻ mắt HOLDLIVE\r\nXuất xứ: Trung Quốc\r\n3 màu \r\n- 901 - Đen nét nhỏ\r\n- 902 - Nâu nét nhỏ\r\n- 903 - Đen nét to\r\nCác nàng tha hồ lựa chọn sản phẩm phù hợp cho mình nha.. ', 'chuyên hàng chính hãng mọi thắc mắc xin liên hệ hotline \r\nquý khách hàng xin vui lòng đọc kỹ về sản phẩm. bao bì sản phẩm khác nhau tùy thuộc từng lô sản phẩm, mẫu cũ mẫu mới....HSD sản phẩm in trên bao bì. CAM KẾT BẢO HÀNH CHÍNH HÃNG TRỌN ĐỜI)\r\n\r\nKẻ mắt HOLDLIVE\r\nXuất xứ: Trung Quốc\r\n3 màu \r\n- 901 - Đen nét nhỏ\r\n- 902 - Nâu nét nhỏ\r\n- 903 - Đen nét to\r\nCác nàng tha hồ lựa chọn sản phẩm phù hợp cho mình nha.. ', 1),
(7, 'Son Givenchy 37 Rogue Graine màu Đỏ Tươi', 'son_givenchy.jpg', 999000, 1, 'Pháp', NULL, 'Son', 'Son Givenchy Le Rouge Deep Velvet Màu 37 Rouge Graine ( Vừa Ra Mắt)\r\n\r\n\r\n\r\nSon Givenchy 37 Rouge Graine là màu mới nhất của Givenchy,với màu đỏ thuần sang trọng, quyến rũ kèm vỏ nhung sanh chảnh siêu đỉnh đã về đến shop rồi đây. Chất son Givenchy 37 cải tiến mềm, mịn nhưng vẫn lì vô cùng, không sợ nhanh trôi như các bản trước đây các Nàng nhé\r\n\r\n\r\n\r\nThiết Kế Givenchy Le Rouge Deep Velvet 37 Rouge Graine', 'Son Givenchy Le Rouge Deep Velvet Màu 37 Rouge Graine ( Vừa Ra Mắt)\r\n\r\n\r\n\r\nSon Givenchy 37 Rouge Graine là màu mới nhất của Givenchy,với màu đỏ thuần sang trọng, quyến rũ kèm vỏ nhung sanh chảnh siêu đỉnh đã về đến shop rồi đây. Chất son Givenchy 37 cải tiến mềm, mịn nhưng vẫn lì vô cùng, không sợ nhanh trôi như các bản trước đây các Nàng nhé\r\n\r\n\r\n\r\nThiết Kế Givenchy Le Rouge Deep Velvet 37 Rouge Graine', 1),
(9, 'Son Kem Black Rouge Airfit Velvet Tint Ver 6 Blueming Garden', 'son_blackrouge.jpg', 152000, 1, 'Hàn Quốc', NULL, 'Son', 'Black Rouge tiếp tục ra mắt bộ sưu tập mới Ver 6 với chủ đề “ Blueming Garden” bắt trend cực nhanh tone xanh rất sang trọng và thời thượng. Son Kem Lì Black Rouge Air Fit Velvet Tint Ver.6 Blueming Garden đầy thơ mộng, tựa khu vườn bí mật đầy sắc hoa nở rộ, như đưa bạn chạm đến những cánh hoa mềm mại đa sắc. Một bộ sưu tập đầy nữ tính và mộng mơ.\r\nXuất xứ: Hàn Quốc\r\n\r\nTrọng lượng: 4,5g\r\n\r\n– Vẫn là thiết kế mang phong cách đặc trưng của Air Fit Velvet Tint, thân son vuông, nhám lì chắc tay, bạn vẫn có thể thấy màu son bên trong.\r\n\r\n– Blueming Garden có nắp son màu Icy Blue xanh mát mẻ, với khớp vặn chặt, giúp bạn bảo vệ son tốt hơn.', 'Black Rouge tiếp tục ra mắt bộ sưu tập mới Ver 6 với chủ đề “ Blueming Garden” bắt trend cực nhanh tone xanh rất sang trọng và thời thượng. Son Kem Lì Black Rouge Air Fit Velvet Tint Ver.6 Blueming Garden đầy thơ mộng, tựa khu vườn bí mật đầy sắc hoa nở rộ, như đưa bạn chạm đến những cánh hoa mềm mại đa sắc. Một bộ sưu tập đầy nữ tính và mộng mơ.', 1),
(10, 'Mascara Siêu Mảnh, Dài và Chống Trôi Lilybyred am9 to pm9 Survival Colorcara 6g', 'mascaralilybyred.jpg', 139000, 1, 'Việt Nam', NULL, 'Mascara', 'Mascara Chải Mi Mắt Lilybyred Am9 To Pm9 Survival Colorcara với khả năng chống trôi tuyệt vời kéo dài từ 9 giờ sáng đến 9 giờ tối như tên gọi. Sản phẩm giúp đôi mắt bạn trở nên long lanh. Mascara với đầu cọ thiết kế đặc biệt giúp nâng và làm dày từng sợi mi mà không làm nặng mi.\r\n\r\nThành phần và công dụng:\r\n- Mascara Chải Mi Mắt Lilybyred Am9 To Pm9 Survival Colorcara với thiết kế đầu bàn chải siêu mịn có độ đàn hồi cao 2mm lướt nhẹ với độ chính xác hoàn hảo.\r\n- Độ bền màu lâu suốt ngày dài, cho đường viền mi bạn luôn đen nhánh, rõ ràng, có chiều sâu và quyến rũ.\r\n- Thiết kế đầu chổi nhỏ nhắn, dễ apply vào những vòng hẹp, không gây hiện tượng lem ra ngoài. Apply lên mi không bị vón cục, bết dính vào nhau.\r\n- Sản phẩm có nhiều màu thời trang cho bạn dễ dàng chọn lựa.', 'Mascara Chải Mi Mắt Lilybyred Am9 To Pm9 Survival Colorcara với khả năng chống trôi tuyệt vời kéo dài từ 9 giờ sáng đến 9 giờ tối như tên gọi. Sản phẩm giúp đôi mắt bạn trở nên long lanh. Mascara với đầu cọ thiết kế đặc biệt giúp nâng và làm dày từng sợi mi mà không làm nặng mi.\r\n', 1),
(12, 'Nước Hoa Hồng Mamonde Toner 250ml', 'mamonde.jpg', 295000, 12, 'Hàn Quốc', NULL, 'Toner', ' Nước hoa hồng Mamonde sở hữu 90.89% tinh chất hoa hồng Bulgaria mang đến hiệu quả cung cấp độ ẩm và làm mềm mịn da hiệu quả tuyệt vời. Sản phẩm là một trong những sản phẩm chăm sóc da nổi bật của hãng Mamonde thuộc tập đoàn mỹ phẩm nổi tiếng Amore Pacific Hàn Quốc. Đây không chỉ là thương hiệu được ưa chuộng tại Hàn Quốc, mà còn được yêu thích tại nhiều quốc gia trên thế giới, đặc biệt là các quốc gia Châu Á và Việt Nam.', ' Nước hoa hồng Mamonde sở hữu 90.89% tinh chất hoa hồng Bulgaria mang đến hiệu quả cung cấp độ ẩm và làm mềm mịn da hiệu quả tuyệt vời. Sản phẩm là một trong những sản phẩm chăm sóc da nổi bật của hãng Mamonde thuộc tập đoàn mỹ phẩm nổi tiếng Amore Pacific Hàn Quốc. Đây không chỉ là thương hiệu được ưa chuộng tại Hàn Quốc, mà còn được yêu thích tại nhiều quốc gia trên thế giới, đặc biệt là các quốc gia Châu Á và Việt Nam.', 1),
(13, 'Nước Hoa Hồng Dear Klairs Dưỡng Ẩm Da Và Làm Mềm Da Supple Preparation Unscented 180ml', 'klairs.jpg', 289000, 12, 'America', NULL, 'Toner', 'Nước Hoa Hồng Không Mùi Dear Klairs Dưỡng Ẩm Da Và Làm Mềm Da Supple Preparation Unscented 180ml có chiết xuất từ thực vật, giúp cân bằng độ pH, tăng cường hiệu quả chăm sóc da Toner có dạng trong suốt, không màu, lỏng, nhẹ, hơi nhớt, thấm rất nhanh trên da. Sản phẩm giúp loại bỏ bụi bẩn và bã nhờn dư thừa trên da sau khi rửa mặt đồng thời cân bằng độ pH để các bước skincare tiếp theo đạt hiệu quả hơn.', 'Nước Hoa Hồng Không Mùi Dear Klairs Dưỡng Ẩm Da Và Làm Mềm Da Supple Preparation Unscented 180ml có chiết xuất từ thực vật, giúp cân bằng độ pH, tăng cường hiệu quả chăm sóc da Toner có dạng trong suốt, không màu, lỏng, nhẹ, hơi nhớt, thấm rất nhanh trên da. Sản phẩm giúp loại bỏ bụi bẩn và bã nhờn dư thừa trên da sau khi rửa mặt đồng thời cân bằng độ pH để các bước skincare tiếp theo đạt hiệu quả hơn.', 1),
(14, 'Nước làm sạch sâu và tẩy trang da dầu nhạy cảm la roche-posay micellar water 200ml', 'larocheposay.jpg', 350000, 23, 'Việt Nam', NULL, 'Toner', 'Nước Làm Sạch Sâu Và Tẩy Trang La Roche-Posay Dành Cho Da Dầu Nhạy Cảm 200ml dành Cho Da Dầu Nhạy Cảm là sản phẩm tẩy trang làm sạch sâu được thiết kế riêng cho da dầu nhạy cảm. Với công nghệ cải tiến Glyco Micellar, sản phẩm mang lại hiệu quả làm sạch sâu vượt trội giúp lấy đi bụi bẩn, bã nhờn và lớp trang điểm nhưng vẫn an toàn cho làn da nhạy cảm & dễ kích ứng.', 'Nước Làm Sạch Sâu Và Tẩy Trang La Roche-Posay Dành Cho Da Dầu Nhạy Cảm 200ml dành Cho Da Dầu Nhạy Cảm là sản phẩm tẩy trang làm sạch sâu được thiết kế riêng cho da dầu nhạy cảm. Với công nghệ cải tiến Glyco Micellar, sản phẩm mang lại hiệu quả làm sạch sâu vượt trội giúp lấy đi bụi bẩn, bã nhờn và lớp trang điểm nhưng vẫn an toàn cho làn da nhạy cảm & dễ kích ứng.', 1),
(15, 'Kem Nền Catrice HD Liquid Coverage Foundation', 'catrice.jpg', 250000, 32, 'America', NULL, 'Kem nền', ' Kem nền Catrice HD với chất kem siêu mịn tạo lớp trang điểm mỏng, đều màu và trong suốt đem lại cho bạn vẻ đẹp tự nhiên. Ngoài ra, các dưỡng chất có trong kem nền còn giúp da mềm mịn, không hề gây khô hay bí bách da.', ' Kem nền Catrice HD với chất kem siêu mịn tạo lớp trang điểm mỏng, đều màu và trong suốt đem lại cho bạn vẻ đẹp tự nhiên. Ngoài ra, các dưỡng chất có trong kem nền còn giúp da mềm mịn, không hề gây khô hay bí bách da.', 1),
(16, 'Nước Hoa Nam Dior Sauvage EDT 100ML - Nam Tính, Mạnh Mẽ', 'dior.jpg', 2350000, 23, 'America', NULL, 'Nước hoa', 'Dior ra mắt nước hoa Sauvage mới của mình với tên có nguồn gốc từ các loại nước hoaEau Sauvage từ năm 1966, mặc dù cả hai không cùng chung bộ sưu tập. Dior Sauvage for men được lấy cảm hứng từ không gian mở tự nhiên với bầu trời xanh, núi đá dưới ánh mặt trời.Được lấy cảm hứng từ tự nhiên, không gian mở, bầu trời xanh, những ngọn núi đá và ánh nắng sa mạc.Nước Hoa Dior Sauvage EDT ra mắt vào năm 2015 và thuộc hương cam chanh thơm ngát đem lại cảm giác tự tin, mạnh mẽ và cuốn hút.', 'Dior ra mắt nước hoa Sauvage mới của mình với tên có nguồn gốc từ các loại nước hoaEau Sauvage từ năm 1966, mặc dù cả hai không cùng chung bộ sưu tập. Dior Sauvage for men được lấy cảm hứng từ không gian mở tự nhiên với bầu trời xanh, núi đá dưới ánh mặt trời.Được lấy cảm hứng từ tự nhiên, không gian mở, bầu trời xanh, những ngọn núi đá và ánh nắng sa mạc.Nước Hoa Dior Sauvage EDT ra mắt vào năm 2015 và thuộc hương cam chanh thơm ngát đem lại cảm giác tự tin, mạnh mẽ và cuốn hút.', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ho` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `ho`, `ten`, `username`, `password`, `phone`, `level`) VALUES
(0, 'ha', 'tran', 'hatran@gmail.com', '12345', '0123456789', 1),
(4, '0', '', 'mienmien192@gmail.com', 'ha12345', '', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
