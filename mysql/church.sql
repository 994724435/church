-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 05 月 20 日 05:52
-- 服务器版本: 5.1.36
-- PHP 版本: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `church`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(25) CHARACTER SET utf8 NOT NULL,
  `list` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`, `list`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, '123456', '123456', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Bid` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(18) CHARACTER SET utf8 NOT NULL,
  `author` varchar(18) CHARACTER SET utf8 NOT NULL,
  `price` varchar(10) CHARACTER SET utf8 NOT NULL,
  `class` varchar(9) CHARACTER SET utf8 NOT NULL,
  `pubplace` varchar(9) CHARACTER SET utf8 NOT NULL,
  `pubdate` varchar(20) CHARACTER SET utf8 NOT NULL,
  `storedate` varchar(20) CHARACTER SET utf8 NOT NULL,
  `remark` varchar(38) CHARACTER SET utf8 NOT NULL,
  `num` varchar(20) CHARACTER SET utf8 NOT NULL,
  `source` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Bid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`Bid`, `name`, `author`, `price`, `class`, `pubplace`, `pubdate`, `storedate`, `remark`, `num`, `source`) VALUES
(2, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(3, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(4, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(5, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(6, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(7, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(8, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(9, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(10, '圣经', '洪叶', '28', '经书', '重邮出版社', '2012.12.', '2015.4.6', '很好', '', ''),
(11, '语文', '老师', '', '购买', '重庆邮电', '', '2015-05-13', '地方', '', ''),
(12, '数学', '老师', '34', '购买', '重邮', '', '', '', '', ''),
(13, '英语', '老师', '23', '购买', '重邮', '2015-05-', '2015-05-20', '很好', '', ''),
(14, '李海龙', '李海龙', '34', '购买', '重邮', '2015-05-3', '2015-05-12', '很好', 'A123', '赠送'),
(15, '大物', '华康', '34', '赠送', '重邮', '2015-05-04', '2015-05-12', '方力', 'A123456', ''),
(16, '计算机', '大哥', '34', '赠送', '重邮', '2015-05-20', '2015-05-12', '很好啊', 'A3545', ''),
(17, '恩恩', '恩恩', '23 ', '赠送', '额额', '2015-04-27', '2015-05-05', '方法', '234', ''),
(18, '打', '啊', '阿达', '购买', '阿达', '2015-05-06', '2015-05-06', '地方', '阿达', ''),
(19, '打', '啊', '阿达', '购买', '阿达', '2015-05-06', '2015-05-06', '地方', '阿达', ''),
(20, '沙发', '发生', '发呆', '经书', '发', '2015-05-20', '2015-05-06', '发生的', '阿士大夫', '购买');

-- --------------------------------------------------------

--
-- 表的结构 `church`
--

CREATE TABLE IF NOT EXISTS `church` (
  `Cid` int(6) NOT NULL AUTO_INCREMENT,
  `sex` varchar(10) CHARACTER SET utf8 NOT NULL,
  `age` int(3) NOT NULL,
  `birth` varchar(20) CHARACTER SET utf8 NOT NULL,
  `paster` varchar(6) CHARACTER SET utf8 NOT NULL,
  `pasterdate` varchar(12) CHARACTER SET utf8 NOT NULL,
  `believedate` varchar(12) CHARACTER SET utf8 NOT NULL,
  `pasterplace` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '救主堂',
  `jiguan` varchar(10) CHARACTER SET utf8 NOT NULL,
  `address` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tel` int(20) NOT NULL,
  `wenhua` varchar(6) CHARACTER SET utf8 NOT NULL,
  `job` varchar(6) CHARACTER SET utf8 NOT NULL,
  `deathdate` varchar(8) CHARACTER SET utf8 NOT NULL,
  `txt` varchar(20) CHARACTER SET utf8 NOT NULL,
  `introduce` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name` varchar(6) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147 ;

--
-- 转存表中的数据 `church`
--

INSERT INTO `church` (`Cid`, `sex`, `age`, `birth`, `paster`, `pasterdate`, `believedate`, `pasterplace`, `jiguan`, `address`, `tel`, `wenhua`, `job`, `deathdate`, `txt`, `introduce`, `name`) VALUES
(144, '请选择：', 22, '12.23', '单位', '12.3', '12.3', '重庆', '重庆', '重邮', 2147483647, '初中', '学生', '', '', '我', '李海龙'),
(3, '女', 0, '1976/10/29', '吴明月', '2003.11', '2001.11', '救主堂', '万洲', '南福菀学生公寓4-24', 0, '高中', '工人', '', '', '熊道秀', '李红敏'),
(4, '女', 0, '1969/9/24', '吴明月', '2003.11', '2002.2.', '救主堂', '重庆', '木洞丰胜观桥村', 0, '初中', '农民', '', '', '宋优燕', '张世红'),
(5, '女', 0, '1949/9/19', '吴明月', '2003.11', '1998.2', '救主堂', '重庆', '新市场新龙社43号', 0, '小学', '农民', '', '', '', '扬怀英'),
(6, '女', 0, '1953/9/11', '吴明月', '2003.11', '2003.5', '救主堂', '重庆', '南岸区联合村龙文合作社69', 0, '初中', '农民', '', '', '赵仁俊', '杨世英'),
(7, '男', 0, '1964/11/29', '吴明月', '2003.11', '2003.6', '救主堂', '重庆', '南岸区峡口镇柏树村栏草社', 0, '高中', '厨师', '', '', '彭婷', '孙传华'),
(8, '女', 0, '1949/10/1', '吴明月', '2003.11', '1998', '救主堂', '四川', '大兴场峡口镇鸭朋子生产队', 0, '', '农民', '', '', '富贵容', '向发兰'),
(9, '女', 0, '1953/1/2', '吴明月', '2003.11', '1992', '救主堂', '重庆', '峡口镇柏树村', 0, '小学', '农民', '', '', '富贵容', '吴伯珍'),
(10, '女', 0, '1942/10/27', '吴明月', '2003.11', '2003.6', '救主堂', '', '难岸区长生镇新塘村', 0, '文盲', '农民', '', '', '刘德诚', '钱世碧'),
(11, '男', 0, '1962/6/29', '吴明月', '2003.11', '2003.6', '救主堂', '', '难岸区长生镇新塘村', 0, '初中', '农民', '', '', '刘德诚', '陈仲国'),
(12, '女', 0, '1946/9/1', '吴明月', '2003.11', '1990', '救主堂', '重庆', '黄桷垭新力村新农社61号', 0, '初小', '农民', '', '', '朱玉碧', '杨东英'),
(13, '女', 0, '1955/2/17', '吴明月', '2003.11', '2003', '救主堂', '重庆', '黄桷垭新力村新农社', 0, '小学', '农民', '', '', '朱玉碧', '杨春兰'),
(14, '女', 0, '1942/12/27', '吴明月', '2003.11', '2002.11', '救主堂', '重庆', '黄桷垭联合村崇文社41号', 0, '初小', '农民', '', '', '宋世秀', '魏寿英'),
(15, '女', 0, '1953/10/10', '吴明月', '2003.11', '1992', '救主堂', '重庆', '南岸长生桥桃花新区三区', 0, '小学', '农民', '', '', '', '张敦容'),
(16, '女', 0, '1944/12/9', '吴明月', '2003.11', '2002', '救主堂', '重庆', '金竹村金竹沟', 0, '小学', '农民', '', '', '赖立梅', '卢斗贵'),
(17, '女', 0, '1947/12/30', '吴明月', '2003.11', '1992', '救主堂', '重庆', '长生镇石桥', 0, '小学', '农民', '', '', '邓文秀', '刘圣铭'),
(18, '女', 0, '1931/3/6', '吴明月', '2003.11', '2003.3', '救主堂', '重庆', '长生镇横街20号', 0, '文盲', '', '', '', '张正林', '张巨英'),
(19, '女', 0, '1951/1/9', '吴明月', '2003.11', '2003.8.20', '救主堂', '重庆', '长生镇菜园村', 0, '小学', '农民', '', '', '覃久兰', '张书芬'),
(20, '女', 0, '1933/3/5', '吴明月', '2003.11', '1983', '救主堂', '重庆', '黄桷垭新力村新农社', 0, '文盲', '农民', '', '', '肯玉碧', '李成碧'),
(21, '女', 0, '1941/1/1', '吴明月', '2003.11', '2003.5', '救主堂', '', '', 0, '', '非农', '', '', '潭年芬', '唐远兰'),
(22, '女', 0, '1943/9/4', '吴明月', '2003.11', '2003.1', '救主堂', '重庆', '黄桷垭联合村龙文68号', 0, '小学', '农民', '', '', '赵仁俊', '刘家全'),
(23, '女', 0, '1948/5/14', '吴明月', '2003.11', '2003.3', '救主堂', '重庆', '黄桷垭联合村和平队', 0, '小学', '农民', '', '', '杨再英', '范兰英'),
(24, '女', 0, '1944/2/23', '吴明月', '2003.11', '2003.5', '救主堂', '重庆', '黄桷垭胡家坡', 0, '初小', '农民', '', '', '王学兰', '黄长碧'),
(25, '女', 0, '1968/4/1', '吴明月', '2003.11', '2003', '救主堂', '重庆', '重庆市南岸区黄桷垭龙井村大房子', 0, '小学', '农民', '', '', '张容', '张燕'),
(26, '女', 0, '1968/8/1', '吴明月', '2003.11', '2003.7', '救主堂', '', '黄桷垭镇联合村崇文社56', 0, '小学', '农民', '', '', '向远琼', '高德会'),
(27, '女', 0, '1959/1/1', '吴明月', '2003.11', '2002.12', '救主堂', '重庆', '长生天文白沙花园', 0, '', '农民', '', '', '傅朝秀', '文胜菊'),
(28, '女', 0, '1961/11/29', '吴明月', '2003.11', '2002.11', '救主堂', '重庆', '长生新塘村', 0, '初中', '农民', '', '', '陈昌英', '邓文秀'),
(29, '女', 0, '1936/9/13', '吴明月', '2003.11', '2002.12', '救主堂', '重庆', '长生老塘村', 0, '小学', '农民', '', '', '邓文秀', '黄利惠'),
(30, '女', 0, '1938/9/16', '吴明月', '2003.11', '2002.3', '救主堂', '武胜', '黄桷垭邮村54-1', 0, '初中', '教师', '', '', '万世德', '黄兴秀'),
(31, '男', 0, '1938/9/21', '吴明月', '2003.11', '2002.1', '救主堂', '重庆', '南岸南山双龙村农社', 0, '中专', '退休', '', '', '', '李文良'),
(32, '女', 0, '1956/7/16', '吴明月', '2003.11', '1985', '救主堂', '重庆', '长生天文七龙水牛湾', 0, '小学', '农民', '', '', '吴富菊', '张启容'),
(33, '女', 0, '1941/5/20', '吴明月', '2003.11', '2002.1', '救主堂', '达州', '邮电学院高智楼2单元2楼', 0, '初中', '农民', '', '', '', '周其琼'),
(34, '女', 0, '1947/10/5', '吴明月', '2003.11', '2003.5.1', '救主堂', '重庆', '南岸区长生桥', 0, '小学', '农民', '', '', '甘庭芬', '张安淑'),
(35, '女', 0, '1970/10/12', '吴明月', '2003.11', '1987', '救主堂', '重庆', '南岸区长生镇凉风村仰天窝', 0, '小学', '农民', '', '', '石云素', '宴平美'),
(36, '女', 0, '1957/3/7', '吴明月', '2003.11', '1989', '救主堂', '重庆', '南岸区长生镇凉风村仰天窝', 0, '小学', '农民', '', '', '', '黄永芬'),
(37, '女', 0, '1959/4/24', '吴明月', '2003.11', '2002', '救主堂', '重庆', '黄桷垭保上园', 0, '高中', '农民', '', '', '陆贤珍', '石宗碧'),
(38, '女', 0, '1986/8/24', '吴明月', '2003.11', '1993', '救主堂', '重庆', '长生镇凉风村', 0, '高中', '学生', '', '', '唐孝兰', '赵晓庆'),
(39, '女', 0, '1990/5/2', '吴明月', '2003.11', '1997', '救主堂', '重庆', '长生镇老木垭', 0, '初中', '学生', '', '', '唐孝兰', '赵  莉 '),
(40, '女', 0, '1986/12/19', '吴明月', '2003.11', '1993', '救主堂', '重庆', '长生镇凉风村', 0, '初中', '学生', '', '', '唐孝兰', '赵晓静'),
(41, '男', 0, '1944/5/31', '吴明月', '2003.11', '2000', '救主堂', '重庆', '黄桷垭崇文路108号', 0, '中专', '', '', '', '吴 敏', '蔺学光'),
(42, '女', 0, '1991/10/4', '吴明月', '2003.11', '1998', '救主堂', '重庆', '黄桷垭崇文路109号', 0, '小学', '学生', '', '', '吴 敏', '蔺苏曼'),
(43, '女', 0, '1926/6/2', '吴明月', '2003.11', '2001', '救主堂', '重庆', '老厂回龙池生产队', 0, '文盲', '农民', '', '', '', '邹正碧'),
(44, '女', 0, '1905/11/27', '吴明月', '2003.11', '2000', '救主堂', '重庆', '黄桷垭新力村前进社', 0, '文盲', '农民', '', '', '戴荣兰', '冯思碧'),
(45, '女', 0, '1941/7/20', '吴明月', '2003.11', '2003', '救主堂', '重庆', '迎龙镇清油洞社', 0, '文盲', '农民', '', '', '赵光敏', '朱先素'),
(46, '男', 0, '1957/1/15', '吴明月', '2003.11', '1983', '救主堂', '河北`', '河北省蒿城市西关镇大王村', 0, '初中', '农民', '', '', '父 母', '马新保'),
(47, '女', 0, '1957/8/16', '吴明月', '2004.4', '1992', '救主堂', '重庆', '长生天文岩尚', 0, '小学', '农民', '', '', '黄朝经', '彭国秀'),
(48, '女', 0, '1929/2/2', '吴明月', '2004.4', '2001', '救主堂', '重庆', '长生白沙曹家院', 0, '文盲', '农民', '', '', '将乾君', '刘强碧'),
(49, '女', 0, '1952/1/9', '吴明月', '2004.4', '2004', '救主堂', '重庆', '长生天文岩尚', 0, '文盲', '农民', '', '', '赵纯珍', '冉光碧'),
(50, '女', 0, '1937/10/8', '吴明月', '2004.4', '2003', '救主堂', '重庆', '长生镇农贸市场2单元6楼2号', 0, '小学', '', '', '', '王婆婆', '曾凡秀'),
(51, '女', 0, '1943/5/10', '吴明月', '2004.4', '2003', '救主堂', '武隆', '新市场新龙社51号', 0, '小学', '农民', '', '', '袁素华', '黄仁碧'),
(52, '女', 0, '1936/10/10', '吴明月', '2004.4', '2003', '救主堂', '重庆', '长生镇农贸市场1单元3-2', 0, '小学', '', '', '', '王婆婆', '邓昌珍'),
(53, '女', 0, '1941/10/14', '吴明月', '2004.4', '2003', '救主堂', '涪陵', '清水溪全桥干堰塘', 0, '', '农民', '', '', '陶姊妹', '刘正秀'),
(54, '女', 0, '1949/8/19', '吴明月', '2004.4', '1998', '救主堂', '綦江', '邮电学院邮村69号', 0, '初中', '教师', '', '', '万治惠', '万治伦'),
(55, '女', 0, '1957/11/27', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭正街35', 0, '初中', '农民', '', '', '黄文武', '李天容'),
(56, '女', 0, '1949/12/16', '吴明月', '2004.4', '2003', '救主堂', '重庆', '长生桥正街110号', 0, '文盲', '', '', '', '余婆婆', '钟光华'),
(57, '女', 0, '1948/12/29', '吴明月', '2004.4', '2003', '救主堂', '重庆', '长生镇河街南海楼', 0, '小学', '', '', '', '杨再英', '张礼芬'),
(58, '女', 0, '1954/9/29', '吴明月', '2004.4', '2004', '救主堂', '上海', '黄桷垭中高丽景小区', 0, '初中', '技工', '', '', '', '王建华'),
(59, '女', 0, '1964/12/18', '吴明月', '2004.4', '2003', '救主堂', '重庆', '南岸区文峰龙井村雷家埔合作社', 0, '初中', '农民', '', '', '张术华', '丁祖芬'),
(60, '女', 0, '1951/10/2', '吴明月', '2004.4', '1999', '救主堂', '重庆', '黄桷垭镇文峰龙井窝', 0, '初中', '农民', '', '', '文木秀', '周元珍'),
(61, '女', 0, '1929/10/7', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇文峰乡新力村新民', 0, '', '农民', '', '', '', '杨全玉'),
(62, '女', 0, '1930/5/6', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇联合村崇文社', 0, '文盲', '农民', '', '', '魏寿英', '蔡荣芳'),
(63, '女', 0, '1950/8/4', '吴明月', '2004.4', '2003', '救主堂', '重庆', '龙纹合作社2号', 0, '小学', '农民', '', '', '谢常梅', '姚崇影'),
(64, '女', 0, '1978/4/22', '吴明月', '2004.4', '2004', '救主堂', '重庆', '黄桷垭镇原山村麻柳湾', 0, '初中', '', '', '', '母亲', '邓晓琴'),
(65, '女', 0, '1952/12/28', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇原山村麻柳湾', 0, '', '农民', '', '', '', '刘宗宪'),
(66, '女', 0, '1943/1/19', '吴明月', '2004.4', '2004', '救主堂', '重庆', '黄桷垭镇新力村茶园社', 0, '小学', '农民', '', '', '杨怀英', '杨怀珍'),
(67, '女', 0, '1971/1/2', '吴明月', '2004.4', '1994', '救主堂', '', '黄桷垭镇新市场新农社', 0, '高中', '', '', '', '肖祖琼', '范天英'),
(68, '女', 0, '1949/4/30', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇教导队', 0, '小学', '', '', '', '', '唐书碧'),
(69, '女', 0, '1921/1/8', '吴明月', '2004.4', '2003', '救主堂', '重庆', '长生镇果庄村', 0, '', '', '', '', '黎碧良', '陈德富'),
(70, '女', 0, '1946/12/18', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇凉风仰天窝', 0, '小学', '农民', '', '', '黄永芬', '陈纯智'),
(71, '女', 0, '1923/12/8', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇新力村', 0, '', '农民', '', '', '朱遗碧', '胡朝芳'),
(72, '女', 0, '1950/2/7', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇新力村前进居民组', 0, '小学', '农民', '', '', '尚继存', '杨立英'),
(73, '女', 0, '1949/2/11', '吴明月', '2004.4', '2004', '救主堂', '重庆', '黄桷垭镇龙井村胡家坡', 0, '初小', '农民', '', '', '肖祖群', '张国梅'),
(74, '女', 0, '1953/1/8', '吴明月', '2004.4', '2003', '救主堂', '重庆', '凉风村仰天窝', 0, '小学', '农民', '', '', '周先素', '唐元密'),
(75, '女', 0, '1951/3/21', '吴明月', '2004.4', '2003', '救主堂', '重庆', '巴县长生街上', 0, '初中', '工人', '', '', '妹妹', '杨世慧'),
(76, '女', 0, '1955/1/9', '吴明月', '2004.4', '2004', '救主堂', '重庆', '长生天文刘家湾', 0, '小学', '农民', '', '', '张贵碧', '张袁玉'),
(77, '女', 0, '1953/8/26', '吴明月', '2004.4', '2003', '救主堂', '重庆', '长生天文刘家湾', 0, '小学', '农民', '', '', '周成蓉', '张贵碧'),
(78, '女', 0, '1953/12/18', '吴明月', '2004.4', '2004', '救主堂', '重庆', '长生镇水利龙门村土山社', 0, '初中', '农民', '', '', '刘尧岚', '黎永珍'),
(79, '女', 0, '1951/11/28', '吴明月', '2004.4', '2003', '救主堂', '江西', '大佛段东坪二村77-5-3', 0, '初中', '工人', '', '', '陈善美', '肖玉麟'),
(80, '女', 0, '1952/11/27', '吴明月', '2004.4', '2003', '救主堂', '重庆', '弹子石群慧路15-9-4', 0, '初中', '退休', '', '', '陈善美', '别学伦'),
(81, '男', 0, '1950/3/27', '吴明月', '2004.4', '2003', '救主堂', '重庆', '南岸区野猫溪中学街60-12号', 0, '初中', '工人', '', '', '陈善美', '李金贵'),
(82, '女', 0, '1955/5/1', '吴明月', '2004.4', '2003', '救主堂', '重庆', '弹子石东坪3村5-1', 0, '初中', '退休', '', '', '陈善美', '李玉兰'),
(83, '男', 0, '1977/7/23', '吴明月', '2004.4', '2001', '救主堂', '岳池', '黄桷垭镇崇文路101号3-2-2', 0, '高中', '', '', '', '王昌秀', '胡春林'),
(84, '女', 0, '1933/11/15', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇教堂敬老院', 0, '文盲', '', '', '', '朱依荣', '陈文分'),
(85, '男', 0, '1980/11/5', '吴明月', '2004.4', '2002', '救主堂', '垫江', '垫江县包家乡三元村5社-16号', 0, '初中', '工人', '', '', '刘尧岚', '游贤华'),
(86, '女', 0, '1980/7/8', '吴明月', '2004.4', '2001', '救主堂', '重庆', '黄桷垭镇崇文路101号3-2-2', 0, '初中', '', '', '', '王昌秀', '陈齐娟'),
(87, '女', 0, '1989/4/30', '吴明月', '2004.4', '2003', '救主堂', '黑龙江', '南岸区海棠晓月', 0, '初中', '学生', '', '', '陈善美', '张超旋'),
(88, '女', 0, '1985/5/7', '吴明月', '2004.4', '1999', '救主堂', '贵州', '贵州省铜仁地区公安局', 0, '大学', '学生', '', '', '', '张  婷'),
(89, '女', 0, '1967/4/6', '吴明月', '2004.4', '2004', '救主堂', '重庆', '黄桷垭镇龙井村仙女洞', 0, '小学', '农民', '', '', '丁祖芬', '丁祖红'),
(90, '男', 0, '1952/1/19', '吴明月', '2004.4', '1994', '救主堂', '重庆', '德州市群蕙路16-9-4', 0, '初中', '工人', '', '', '', '蔡显国'),
(91, '男', 0, '1963/6/8', '吴明月', '2004.4', '2003', '救主堂', '自贡', '江北区黄桷树长安驾校平按村', 0, '高中', '工人', '', '', '王淑华', '邓晓勇'),
(92, '男', 0, '1931/1/1', '吴明月', '2004.4', '', '救主堂', '', '长生镇红花村赵家沟', 0, '', '', '', '', '', '蔡登明'),
(93, '男', 0, '1941/12/24', '吴明月', '2004.4', '2003', '救主堂', '重庆', '黄桷垭镇崇文路高中丽景1-4-1', 0, '大专', '医生', '', '', '詹医生', '凌宗远'),
(94, '女', 0, '1936/8/19', '吴明月', '2004.4', '2004', '救主堂', '广安', '黄桷垭镇龙井村龙井湾', 0, '文盲', '农民', '', '', '曹照莲', '李庆英'),
(95, '女', 0, '1938/4/14', '吴明月', '2004.4', '2002', '救主堂', '重庆', '黄桷垭镇龙井村檬子院合作社社', 0, '', '农民', '', '', '朱显文', '彭远碧'),
(96, '女', 0, '1964/9/1', '吴明月', '2004.4', '2004', '救主堂', '重庆', '长生镇茶园村', 0, '初中', '农民', '', '', '湖洪芳', '刘正美'),
(97, '女', 0, '1944/7/23', '吴明月', '2004.4', '2004', '救主堂', '重庆', '四川省巴县天文乡', 0, '初中', '农民', '', '', '湖洪芳', '冉家碧'),
(98, '女', 0, '1984/9/20', '吴明月', '2004.4', '2000', '救主堂', '', '黄桷垭镇崇文路105号6-4-1', 0, '初中', '', '', '', '吴锡安', '蒋雪梅'),
(99, '女', 0, '1950/9/19', '吴明月', '2004.4', '1986', '救主堂', '重庆', '茶园村，新房子社', 0, '文盲', '农民', '', '', '', '尹思菊'),
(100, '女', 0, '1951/10/17', '吴明月', '2004.4', '2002', '救主堂', '重庆', '重庆市长生镇茶园新区', 0, '小学', '农民', '', '', '陈树清', '刘万珍'),
(101, '女', 0, '1917/6/17', '吴明月', '2004.4', '2004', '救主堂', '重庆', '天文村岩尚社', 0, '小学', '农民', '', '', '彭国秀', '陈学芳'),
(102, '男', 0, '1913/10/30', '吴明月', '2004.4', '2004', '救主堂', '重庆', '天文村岩尚社', 0, '', '', '', '', '牟思群', '李炳全'),
(103, '女', 0, '1960/3/28', '吴明月', '2004.4', '2003', '救主堂', '岳池', '合川市', 0, '高中', '农民', '', '', '', '张利华'),
(104, '男', 0, '1952/2/8', '吴明月', '2004.4', '2003', '救主堂', '重庆', '上桥', 0, '', '', '', '', '张志玉', '陈少云'),
(105, '女', 0, '1926/12/6', '吴明月', '2004.4', '2003', '救主堂', '巴县', '上桥队', 0, '', '农民', '', '', '丁德军', '熊素英'),
(106, '女', 0, '1942/8/28', '吴明月', '2004.4', '1996', '救主堂', '重庆', '清油洞村', 0, '小学', '农民', '', '', '陈永碧', '田时芬'),
(107, '女', 0, '1929/7/15', '吴明月', '2004.4', '1998', '救主堂', '重庆', '迎龙双谷村庆云山队', 0, '小学', '', '', '', '周光玉', '秦世玉'),
(108, '女', 0, '1952/10/10', '吴明月', '2004.4', '2003', '救主堂', '重庆', '迎龙镇一家边村', 0, '初中', '农民', '', '', '周光玉', '刘福秀'),
(109, '女', 0, '1968/10/22', '吴明月', '2004.4', '2002', '救主堂', '重庆', '迎龙镇双谷村陈家社', 0, '初中', '农民', '', '', '张代碧', '杨邦菊'),
(110, '女', 0, '1950/4/28', '吴明月', '2004.4', '2002', '救主堂', '重庆', '长生镇锣天村', 0, '文盲', '农民', '', '', '钟兰珍', '罗书碧'),
(111, '女', 0, '1937/3/22', '吴明月', '2004.4', '1994', '救主堂', '重庆', '迎龙镇新民村', 0, '文盲', '农民', '', '', '余勇', '赵云芳'),
(112, '男', 0, '1951/9/28', '吴明月', '2004.4', '2003', '救主堂', '重庆', '巴县二圣镇龙池村天池坝', 0, '小学', '农民', '', '', '吕祖兰', '方觉全'),
(113, '女', 0, '1938/9/18', '吴明月', '2004.4', '2002', '救主堂', '重庆', '双岩村龙石塔社', 0, '文盲', '农民', '', '', '聂先容', '仉世碧'),
(114, '女', 0, '1923/4/21', '吴明月', '2004.4', '2002', '救主堂', '重庆', '迎龙镇一家边村', 0, '小学', '农民', '', '', '周光玉', '甘姓英'),
(146, '', 0, '', '', '', '', '救主堂', '', '', 0, '', '', '', '', '', 'def');
