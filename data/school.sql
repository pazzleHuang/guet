-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 10 日 01:46
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `school`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userflag` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`userflag`, `id`, `username`, `passwd`) VALUES
(1, 1, '管理员001', '123456'),
(1, 2, '管理员002', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `contact` varchar(50) CHARACTER SET utf32 NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `feedback`
--

INSERT INTO `feedback` (`id`, `title`, `content`, `contact`, `time`) VALUES
(1, '优利特产品', '优利特查您展示得像淘宝的一样，不符合企业公司形象', 'hyhning@163.com', '0000-00-00'),
(5, '安全问题', '防aql注入', 'hyhning@163.com', '0000-00-00'),
(6, '安全问题', '防aql注入', 'hyhning@163.com', '0000-00-00'),
(7, '优利特医疗电子有限公司前端设计', '45', 'hyhning@163.com', '0000-00-00'),
(8, '优利特医疗电子有限公司前端设计', '12', 'hyhning@163.com', '2015-06-08');

-- --------------------------------------------------------

--
-- 表的结构 `new2`
--

CREATE TABLE IF NOT EXISTS `new2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `content` text NOT NULL,
  `click` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `new2`
--

INSERT INTO `new2` (`id`, `title`, `dates`, `content`, `click`) VALUES
(1, '2015年优利特展会信息及展位号', '2015-03-16', '<p>1、《第十二届中国检验医学及输血用品博览会（CACLP）》定于2015年3月18-20日在福建厦门国际会展中心举行，我公司展位C厅特80号，届时欢迎新老客户光临。</p>\r\n<p>2、《第28届中国（浙江）国际科研、医疗仪器设备技术交流展览会》定于2015年3月18-21日在浙江世贸国际展览中心举行，我公司展位2号馆W22-23号，届时欢迎新老客户光临。</p>\r\n<p>3、《第27届国际医疗仪器设备展览会（总后会）》定于2015年3月26日~28日在北京国家会议中心举行，我公司展位5号馆5A085-086号，届时欢迎新老客户光临。</p>\r\n<p>4、《第28届西部国际医疗器械展览会》定于2015年3月26-28日在陕西西安曲江国际会展中心举行，我公司展位B1馆T8号，届时欢迎新老客户光临。</p>\r\n<p>5、《2015年北部湾广西临床检验仪器、试剂与设备展览会》定于2015年3月27-29日在广西南宁国际会展中心举行，我公司展位特37 1/2号，届时欢迎新老客户光临。</p>\r\n<p>6、《第31届湖北省先进医疗器械展会》定于2015年4月1-3日在湖北省武汉国际会展中心举行，我公司展位C107号，届时欢迎新老客户光临。</p>\r\n<p>7、《2015第33届中国国际医疗器械（山东）博览会（春）》定于2015年4月1-3日在山东济南国际会展中心举行，我公司展位D区C16号，届时欢迎新老客户光临。</p>\r\n<p>8、《中国贵州临床医学及输血用品展览会》定于2015年4月1-3日在贵阳国际会议展览中心举行，我公司展位T24号，届时欢迎新老客户光临。</p>\r\n<p>9、《第73届中国国际医疗器械春季博览会（CMEF上海）》定于2015年5月15-18日在上海国家会展中心举行，我公司展位IVD区H6.2-B42号，届时欢迎新老客户光临。</p>', 20),
(2, '第70届中国国际医疗器械秋季博览会（2013厦门 ', '2013-09-10', '<p>《第70届中国国际医疗器械秋季博览会（2013厦门）》定于2013年11月3-6日在福建厦门国际会展中心举行，我公司展位为DF09号，届时欢迎新老客户光临。</p>', 16),
(3, '2013第三十届中国国际医疗器械（山东）博览会（秋）', '2015-05-24', '<p>《2013第三十届中国国际医疗器械（山东）博览会（秋）暨医院管理国际系列论坛》定于2013年9月11-13日在山东济南国际会展中心举行，我公司展位为T88号，届时欢迎新老客户光临。</p>', 12),
(4, '优利特五分类血细胞分析仪推介会', '2013-04-09', '<p>优利特五分类血细胞分析仪推介会暨客户答谢活动”将于2013年4月17-18日在《第69届中国国际医疗器械春季博览会》2号馆C06盛大举行，届时欢迎新老客户光临。</p>', 2),
(5, '2013第十四届山西医疗器械展览交易会', '2013-03-01', '<p>《2013第十四届山西医疗器械展览交易会》定于2013年5月23-25日在中国（太原）煤炭交易中心展览中心举行，我公司展位为T50,T51号，届时欢迎新老客户光临。</p>', 2),
(6, '第十三届西北（兰州）医疗器械展览会', '2013-03-01', '<p>《第十三届西北（兰州）医疗器械展览会》定于2013年5月10-12日在甘肃国际会展中心举行，我公司展位为B11号，届时欢迎新老客户光临。</p>', 6),
(7, '第69届中国国际医疗器械春季博览会（2013深圳）', '2013-03-01', '<p>《第69届中国国际医疗器械春季博览会（2013深圳）》定于2013年4月17-20日在广东深圳会展中心举行，我公司展位为H2-C06号，届时欢迎新老客户光临。</p>', 5),
(8, '第25届国际医疗仪器设备展览会', '2013-03-01', '<p>《第25届国际医疗仪器设备展览会》定于2013年3月28-30日在北京国家会议中心举行，我公司展位为5A082-5A083号，届时欢迎新老客户光临。</p>', 0),
(9, '第十四届贵阳医疗器械、设备技术展览会', '2013-03-01', '<p> 《第十四届贵阳医疗器械、设备技术展览会》定于2013年3月27-29日在贵阳新展览中心举行，我公司展位为特17号，届时欢迎新老客户光临。</p>', 10),
(12, '测试', '2015-06-09', '1234', 0);

-- --------------------------------------------------------

--
-- 表的结构 `new3`
--

CREATE TABLE IF NOT EXISTS `new3` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `content` text NOT NULL,
  `click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `new3`
--

INSERT INTO `new3` (`id`, `title`, `dates`, `content`, `click`) VALUES
(5, '农村卫生室专用设备 收费低廉受欢迎', '2011-11-04', '<p>广东省惠州市博罗县柏塘镇石湖村的卫生站原本是一家很普通的村级卫生院，但是自从今年1月份以来，到这里来看病的病人突然多了起来。村医杨远飞说，门诊量比以前起码增加了了20%到30%。</p>\r\n    <p>卫生站门诊量之所以增加，是源于县里从去年底开始的农村三级医疗网点建设工作的推进，他们村作为试点，配备了一套由中科院研发的医疗检测诊疗新设备。因为有了这套设备，这个小小的村级卫生站不仅诊断准确率提高了，病患的检查费用也大大降低了。据了解，全套检查包括血氧、心电图、尿常规、血液常规等，费用为15元，这样低廉的收费当然会受到当地村民的欢迎。</p>\r\n    <p>据中国科学院深圳先进技术研究院全民低成本健康工程中心郝重亮副主任介绍，这套设备是专门针对农村卫生室设计的专用设备，包括一个12档带自动诊断的心电图、血液分析仪、多功能出诊包，出诊包上集成了尿常规、呼吸、体温、脉律、色盲、色弱等功能。</p>\r\n    <p>据了解，传统的检查设备全套下来至少要十几万甚至几十万元，而这套集多功能于一身的专门用于农村社区医疗的设备只有3.5万元！这套设备之所以这个价格，是高科技起的作用，即把信息、材料、医学工程等方面所取得的世界上的最新进展，通过集成创新，通过单一技术突破来降低针对农村乡镇卫生解决方案的成本。</p>\r\n这其中，核心技术是中科院自己的知识产权，这就大大降低了成本，而不设中间环节，由中科院深圳低成本健康工程中心直接与地方政府对接，又省下了大量营销推广成本，再加上中科院的众多项目有国家政策和资金的支持，所以很多技术研发成果，软件开发应用都为农村社区基层医疗免费提供，而这些做法背后，是中国科学院作为科技力量国家队的责任和担当。</p>\r\n    <p>目前，这一低成本健康工程惠民项目，已经开始在全国十个省市自治区的600多个农村站点推广试用，特别是在福建宁德、广东汕头及新疆维吾尔自治区等地，还将这一项目作为当地的民心工程，有的还将其作为当地科技卫生部门的一号工程进行推广，深受农村百姓的欢迎。而这一健康工程，只是中国科学院用科技服务社会改善民生的众多成果之一。</p>', 19),
(4, '金融风暴之下 国际医药市场仍将继续增长', '2008-12-17', '<p>一场席卷全球的金融风暴使世界经济降到了冰点，国际医药市场是否也会像房地产业那样走向萧条？这是业内人士非常关心的一个大问题。美国著名工业咨询公司DataMonitor最近就此做出大胆预测：世界医药市场不仅不会受金融危机的冲击，相反它将继续保持目前的增长态势。该公司的资深经济分析师经过深入研究全球主要医药市场的现状和发展情况后，得出如下结论：2008年及以后的几年内，无论是在金融风暴的发源地美国，还是在世界其他发达工业国或“新兴市场经济国家“，如中国、印度、巴西和俄罗斯等国，医药市场都不会陷入衰退困境。相反，世界医药市场在2009年及以后仍将以高于其他行业的增长速度继续向前发展。</p>\r\n\r\n 　　<h4>美医药工业总体运行良好 </h4>　　\r\n\r\n    <p>DataMonitor的经济分析师认为：虽然近年来美、英、德、法等西方制药大国的新药开发上市数量锐减（如美国FDA2007年仅批准19个新药上市，为近20年来批准数量最少的一年），且今后5年内还将有50个畅销处方药的专利陆续到期（这些畅销药的年销售额合计高达1150亿美元以上），但由于过去几十年里各大跨国制药公司已打下牢固而坚实的基础，世界医药市场仍将保持健康发展态势。即使在国际金融风暴的发源地美国，根据最新报道，从道·琼斯股票指数看，医药板块的股票指数仍大大高于其它工业板块，这表明投资人对美国的医药行业充满信心。再从另一角度看，美国的金融业负债率高达95％（即自有资产仅5％，其它均为借款如发行的各种债券等），而美国医药公司整体负债率仅6％。这对投资者来说是非常令人放心的数字。换言之，即使再大的金融风暴也未必能使美国医药公司破产，因其负债率极低。此外，美国医药工业作为全球最大的医药工业集群，今年前3季度排名前20名的大公司的现金回笼高达75亿美元，表明美国医药工业总体运行情况良好。正是由于美国医药工业的上佳业绩，今年10月纽约证券交易所“医药板块”的道·琼斯指数已从2％上升为5％。另一不容忽视的因素是，美国作为全球最大的生物工程制药强国其发展后劲十足，如据国外媒体报道，目前美国各生物工程公司实验室正在研发中的“重组DNA”蛋白质类新药多达数百个，其中包括抗肿瘤药物、治疗棘手疾病的新药和心血管病新药等等。这些重组DNA新药一旦开发上市，其中很多新药有望成为年销售额超过10亿美元的“重磅炸弹”级药物。美国医药工业将坚挺的根据是，基本上所有美国大制药公司今年的盈利都很可观，如排名世界前二名的辉瑞公司，凭借其前几年打下的畅销新药基础，今年前3季度已创造250亿美元回笼现金的良好业绩。其它美国制药公司今年的销售业绩同样令人称道。</p>\r\n', 16),
(3, '卫生部通报贯彻落实“三定”规定的有关情况', '2008-12-17', '<p>今年7月，国务院批复了卫生部“三定”规定。卫生部按照十一届全国人大一次会议审议通过的《国务院机构改革方案》和国务院的统一部署，及时研究确定了《关于贯彻落实“三定”规定的实施意见》，着力转变职能、理顺关系、优化结构、提高效能，做好机构、编制、职责和人员的调整工作。目前，新“三定”规定的贯彻落实情况进展顺利。</p>\r\n\r\n    <p>一是按照“三定”规定，卫生部承担管理国家食品药品监督管理局的职责。卫生部和食药局的具体职能进行了调整和交接。食品安全综合协调、组织查处食品安全重大事故的职责由卫生部承担；食品餐饮消费环节的安全监管和保健品、化妆品质量监管，由国家食品药品监督管理局负责。</p>\r\n\r\n     <p>二是完成了卫生部机关各司局的职责调整工作，职能更加明确，责任更加清晰。</p>\r\n\r\n     <p>三是初步完成了新设立的医疗服务监管司、药物政策与基本药物制度司的组建和食品安全综合协调与卫生监督局职能的调整工作。三个司局的主要职责为：医疗服务监管司主要承担医疗机构医疗服务的监管工作，建立医疗机构医疗质量评价和监督体系，组织开展医疗质量、安全、服务、财务监督和评价等工作；建立健全以公益性为核心的公立医院监督制度，承担推进公立医院管理体制改革工作。药物政策与基本药物制度司主要承担建立国家基本药物制度并组织实施的工作，组织拟订药品法典和国家基本药物目录，组织拟订国家药物政策、国家基本药物生产、采购、配送、使用的政策措施；会同有关方面提出国家基本药物目录内药品生产的鼓励扶持政策和国家基本药物价格政策的建议。食品安全综合协调与卫生监督局在原承担卫生监督职责的基础上，增加了组织拟订食品安全标准，组织查处食品安全重大事故，组织开展食品安全监测、风险评估和预警，拟订食品安全检验机构资质认定条件和检验规范以及重大食品安全信息发布等职责。局内相应设立食品安全政策信息处、食品安全标准处、食品安全评估预警处和食品安全重大事故督查处。</p>\r\n\r\n     <p>目前，新组建、改建司局的主要领导和部分处室人员已经到岗，按照“三定”规定赋予的职责开展工作。</p>', 9),
(2, '国家药监局目前筹备在美国设立办事机构', '2008-12-17', '<p> 12月8日上午，国家药监局举行例行新闻发布会，新闻发言人颜江瑛指出，国家药监局目前正筹备在美国设立办事机构的相关工作。 据颜江瑛介绍，今年的11月19日，美国FDA在北京设立了一个驻华办事处，同时相继几天又在广州、上海设立了驻华办事处。按照外交对等的原则，中国也会在美国设立相应的办事机构。目前，中国外交部也在牵头，卫生部、国家食品药品监督管理局正在配合，正在酝酿中国在美国设立相应的驻美办事机构。 另据颜江瑛介绍，去年的12月11日，国家食品药品监督管理局和美国的人类健康服务部下属的FDA签署了中美《关于药品医疗器械安全的协议》，这个协议签署了已经将近一年了，在将近一年的时间里，国家食品药品监督管理局和美国FDA共同开展了一系列的工作，并取得了良好成效。</p>', 8),
(1, '新医改方案有望年内推出 5个配套文件具操作性', '2008-12-17', '<p>自《关于深化医药卫生体制改革的意见(征求意见稿)》公开征求意见以来，国家发改委网站共收到意见27000余条。新医改方案能否解决“看病难、看病贵”，成为社会焦点。卫生部专家预计，新方案有望在年底前推出，改革方向不太可能有根本性变动，但将更有操作性。</p>\r\n　　<p>在为期一个月的征求意见过程中，新医改草案的“专、绕、涩、大、空”遭到很多抨击，普通百姓说“看不懂”，医药界代表则认为“缺乏操作性”。记者获悉，从下周起，国务院医改领导小组将根据社会各界反馈的意见，重新修订形成《关于深化医药卫生体制改革的实施方案》。</p>\r\n　　<p>专家预计，新方案有望在年底前推出，改革方向不太可能有根本性变动，但将更有操作性。而《意见稿》中的5项重点工作，即加快推进基本医疗保障制度建设、初步建立国家基本药物制度、健全基层医疗卫生服务体系、促进基本公共卫生服务逐步均等化、推进公立医院改革试点，将形成5个配套文件颁布，更具操作性。</p>', 4);

-- --------------------------------------------------------

--
-- 表的结构 `news1`
--

CREATE TABLE IF NOT EXISTS `news1` (
  `id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `contents` text NOT NULL,
  `imgurl` varchar(500) NOT NULL,
  `time` date NOT NULL,
  `click` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news1`
--

INSERT INTO `news1` (`id`, `title`, `contents`, `imgurl`, `time`, `click`) VALUES
(1, '2015年优利特升旗仪式', '', 'http://127.0.0.1/0511school/images/news/3_01.jpg', '2015-05-20', 2),
(2, '2015新年寄语', '', 'http://127.0.0.1/0511school/images/news/3_02.jpg', '0000-00-00', 3),
(3, '优利特携全线产品参加第72届CMEF', '<p>优利特携全线系列产品于2014年10月23日至26日参加了在重庆举办的第72届中国国际医疗器械秋季博览会（CMEF)。</p>\r\n    <p>第72届CMEF，优利特公司展位设计白蓝映衬、简素自然，全方位立体化地突出展现了优利特品牌元素和产品系列宣传。正面“国家高性能医学诊疗设备重大专项优利特五分类血细胞分析仪”红色醒目，高视角吸引专业观众，直击优利特重磅产品。整体展台采取复式搭建结构，一层产品按系列清晰陈列、集中展示，吸引众多专家受众驻足观看，二层空间设立VIP专属洽谈区，接待与会专家和重要客户，角落摆放的盆盆绿植于细节处彰显着优利特的用心和关爱。</p>\r\n    <p>本次展示产品包括全自动尿液分析系统、全自动生化分析系统、全自动血细胞分析系统、全科诊断系统、即时检验（POCT）诊断产品和医用电子产品（监护仪）等。公司创新开辟了全科诊断系统产品展示专区，集成、便捷、高效的健康平台，成为本届博览会的集中亮点。集团执行总裁和销售公司营销总监亲自对社区医疗卫生专家、专业观众讲解全科诊断系统的发展历程和李克强总理等国家领导人对优利特研发工作的重点关注和支持，以及多方媒体的宣传报道。优利特壁挂式全科诊断系统作为中国首创和国家专利产品，不断开发升级，目前拥有URIT-7200、URIT-7200A、URIT-8000、URIT-9000和全科医生巡诊箱等，全国装机案例接近万余套。借此，优利特切实落实了李克强总理的指示，积极推进基层医疗保障体系建设，完成了全科诊断系统在全国各级医疗机构的推广，替代进口产品，并加紧步伐开拓国际市场。</p>\r\n    <p>四天的时间，公司产品井然有序的展览和销售人员挥洒自如的讲解，正是优利特专注检验和用户至上的完美展现。优利特正一步一步坚定地迈向全球一流的医学诊断产品制造商、供应商和服务商的行列。</p>\r\n', 'http://127.0.0.1/0511school/images/news/3_03.jpg', '0000-00-00', 29),
(4, '优利特情系鲁甸灾区安危', '', 'http://127.0.0.1/0511school/images/news/3_04.jpg 	', '2015-05-13', 0),
(5, '《血红蛋白分析系统》项目科技成果...', '', 'http://127.0.0.1/0511school/images/news/3_05.jpg', '2015-05-21', 0),
(6, '2014新年寄语', '', 'http://127.0.0.1/0511school/images/news/3_06.jpg', '2015-05-20', 0),
(7, '优利特全新力量，绽放2013CMEF', '', 'http://127.0.0.1/0511school/images/news/3_07.jpg', '2015-05-08', 0),
(8, '优利特集团举行2013年升旗仪式', '', 'http://127.0.0.1/0511school/images/3_08.jpg', '2015-05-20', 0),
(9, '优利特集团举行2013年新春团拜会', '', 'http://127.0.0.1/0511school/images/news/3_09.jpg', '2015-05-10', 0);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `产品分类` varchar(100) NOT NULL,
  `产品编号` varchar(50) NOT NULL,
  `产品名称` varchar(200) NOT NULL,
  `产品图片` varchar(1000) NOT NULL,
  `产品说明` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `产品分类`, `产品编号`, `产品名称`, `产品图片`, `产品说明`) VALUES
(1, '生化分析系列1', 'URIT-8260', ' 分立式全自动生化分析仪', 'http://127.0.0.1/0511school/images/products/401.jpg', '◎恒速480测试/小时（纯生化），720测试/小时（带ISE）◎光栅后分光光学系统◎专用急诊位，急诊样本优先测试◎一体化自动恒温水清洗◎加样针液面感应，随量跟踪，立体防撞、试剂预加温功能◎美国原装进口陶瓷内芯定量器，保证取样精度和耐麿性◎支持多水平质控，自动分析质控数据，绘制质控分析图谱，提供线性、非线性多种定标模式◎试剂盘24小时不间断水循环制冷，静音、环保、高效◎反应盘采用终身免维护的固态恒温装置，确保37℃恒温◎实时显示所有波长测试曲线，为数据分析提供更全面的信息◎高污染项目间可插入独立清洗，杜绝项目间干扰◎支持LIS系统◎Windows XP全中文彩色图形化操作系统 					'),
(2, '生化分析系列', 'URIT-8260', '分立式全自动生化分析仪', 'http://127.0.0.1/0511school/images/products/402.jpg', '◎恒速420 测试/小时（纯生化），660测试/小时（带ISE）\r\n◎光栅后分光光学系统\r\n◎专用急诊位，急诊样本优先测试\r\n◎一体化自动恒温水清洗\r\n◎加样针液面感应，随量跟踪，立体防撞，试剂预加温功能\r\n◎美国原装进口陶瓷内芯定量器，保证取样精度和耐磨性\r\n◎支持多水平质控，自动分析质控数据，绘制质控分析图谱，提供线形与非线形多种定标模式\r\n◎试剂盘24小时不间断水循环制冷，静音、环保、高效\r\n◎反应盘采用终身免维护的固态恒温装置，确保37℃恒温\r\n◎实时显示所有波长测试曲线，为数据分析提供更全面的信息\r\n◎高污染项目间可插入独立清洗，杜绝项目间干扰\r\n◎支持LIS系统\r\n◎Windows XP 全中文彩色图形化操作系统'),
(3, '生化分析系列', 'URIT-8060', '分立式全自动生化分析仪', 'http://127.0.0.1/0511school/images/products/403.jpg', ' 	\r\n◎400测试/小时（纯生化）\r\n◎斩波式后分光光学系统\r\n◎专用急诊位，急诊样本优先测试\r\n◎一体化自动恒温水清洗\r\n◎加样针液面感应，随量跟踪，立体防撞、试剂预加温功能\r\n◎美国原装进口陶瓷内芯定量器，保证取样精度和耐麿性\r\n◎支持多水平质控，自动分析质控数据，绘制质控分析图谱，提供线性、非线性多种定标模式\r\n◎试剂盘24小时不间断水循环制冷，静音、环保、高效\r\n◎实时显示所有波长测试曲线，为数据分析提供更全面的信息\r\n◎高污染项目间可插入独立清洗，杜绝项目间干扰\r\n◎支持LIS系统\r\n◎Windows XP全中文彩色图形化操作系统 '),
(4, '生化分析系列', 'URIT-8031', '分立式全自动生化分析仪', 'http://127.0.0.1/0511school/images/products/404.jpg', '◎360测试/小时（纯生化）\r\n◎斩波式后分光光学系统\r\n◎专用急诊位，急诊样本优先测试\r\n◎一体化自动恒温水清洗\r\n◎加样针液面感应，随量跟踪，立体防撞，试剂预加温功能\r\n◎美国原装进口陶瓷内芯定量器，保证取样精度和耐磨性\r\n◎支持多水平质控，自动分析质控数据，绘制质控分析图谱，提供线形与非线形多种定标模式\r\n◎试剂盘24小时不间断水循环制冷，静音、环保、高效\r\n◎实时显示所有波长测试曲线，为数据分析提供更全面的信息\r\n◎高污染项目间可插入独立清洗，杜绝项目间干扰\r\n◎支持LIS系统\r\n◎Windows XP 全中文彩色图形化操作系统'),
(5, '生化分析系列', 'URIT-8021A', '分立式全自动生化分析仪', 'http://127.0.0.1/0511school/images/products/405.jpg', '◎测试速度：300 测试/小时（纯生化）。\r\n◎光分析项目：可在线同时开展60个项目测试（可扩展）。\r\n◎项目储存：1200个以上。\r\n◎数据储存：根据电脑空间无限量储存。\r\n◎测量方法：终点法、速率法、两点终点法、两点速率法、双波长法、空白扣除法（试剂、样本空白），免疫比浊法等。\r\n◎比色单元：120个反应比色位，反应杯直接比色。\r\n◎样本盘：71个个样本位，包括标准位、质控位、急诊位；可用多种规格试管。\r\n◎试试剂盘：60个带冷藏的试剂位，可放置多规格试剂瓶。\r\n◎最小反应量：150μL。 '),
(6, '生化分析系列', 'URIT-800', '半自动生化分析仪', 'http://127.0.0.1/0511school/images/products/406.jpg', '◎拥有最完善的功能，最先进的进口核心部件，最尖端的技术，几近完美\r\n◎品牌电脑操控（带Windows XP彩色界面、全中文操作系统），超强大实验室管理软件管理，超大存储量，同时提供多种形式病人中文综合报告单\r\n◎随时显示反应曲线，实时掌控底物耗尽等异常情况；全面完善的质控功能，可做多个不同水平质控，并自动进行质控数据统计，储存和绘制质控分析图；专用的配套试剂，让分析数据更加精确；分析仪与电脑系统分开，避免干扰；计算项目自动计算\r\n◎密封式全自动光路设计，避免水汽、灰尘进入腐蚀滤光片\r\n◎独创的外置蠕动泵，更换泵管方便快捷 '),
(7, '生化分析系列', 'URIT-810', '半自动生化分析仪', 'http://127.0.0.1/0511school/images/products/407.jpg', '◎功能完善，进口的核心部件，拥有尖端的技术\r\n◎新型电子掉电保护系统；程序自带专业维护界面、维护、 维修简单快捷；滤光片带自动调零功能；实时显示反应曲线，实时掌控底物耗尽等异常情况\r\n◎试剂全开放；大容量存储检测结果，并可随时查询、打印标本测试结果\r\n◎密封式全自动光路设计，避免水汽、灰尘进入腐蚀滤光片\r\n◎独创的外置蠕动泵，更换泵管方便快捷；并具有吸样量自动补偿功能\r\n◎仪器空闲时光源自动休眠，增加灯泡寿命 '),
(8, '生化分析系列', 'URIT', '系列生化试剂', 'http://127.0.0.1/0511school/images/products/408.jpg', ' 	\r\n一、肝功能检测项目：　\r\n· 丙氨酸氨基转移酶(ALT) · 天冬氨酸氨基转移酶(AST)\r\n· 碱性磷酸酶(ALP) · γ-谷氨酰转移酶(γ-GT）\r\n· 总蛋白(TP) · 白蛋白(ALB)　\r\n· 总胆红素(TB) · 直接胆红素(DB)\r\n· 总胆汁酸(TBA) · 胆碱脂酶(CHE)\r\n二、血脂与脂蛋白检测项目：\r\n· 甘油三酯(TG) · 胆固醇(CHOL)\r\n· 载脂蛋白A1(Apo A-1) · 载脂蛋白B(Apo B)\r\n· 高密度脂蛋白胆固醇(HDL-C)\r\n· 低密度脂蛋白胆固醇(LDL-C)\r\n三、肾功能检测项目：\r\n· 尿素(Urea) · 肌酐(Cr)(酶法) · 肌酐(Cr) ·二氧化碳(CO2 )\r\n四、心肌酶类检测项目：\r\n· 乳酸脱氢酶(LDH) · 肌酸激酶(CK-NAC)\r\n· 羟丁酸脱氢酶(α-HBDH) ·肌酸激酶同工酶(CK-MB)\r\n五、离子类检测项目：\r\n· 铁(Fe) ·钙(Ca) ·镁(Mg) ·无机磷(P)\r\n六、胰腺类检测项目：淀粉酶(AMY)\r\n七、痛风类检测项目：尿酸(UA)\r\n八、糖类检测项目：\r\n· 葡萄糖(氧化酶法Glu-OX) · 葡萄糖(己糖激酶法Glu-HK)\r\n九、免疫比浊试剂：\r\n·微量白蛋白(m- ALB) ·CRP(C-反应蛋白) ·IgG 免疫球白蛋白G\r\n·IgM 免疫球白蛋白M ·IgA 免疫球白蛋白A\r\n	\r\n		'),
(9, '血细胞分析系列', 'URIT-5500', '全自动五分类血细胞分析仪', 'http://127.0.0.1/0511school/images/products/411.jpg', '◎四角度激光散射技术，仅用四种试剂\r\n◎110个标本/小时，轻松完成大批量标本检测\r\n◎采用稳定性高、寿命长的氦氖激光器\r\n◎WOC和WIC双重白细胞计数\r\n◎直线加速鞘流技术\r\n◎精确高效的陶瓷分血阀定量系统，截取中段血样，排除气泡及携带污染等干扰，且光滑耐磨、寿命长、密封性好\r\n◎先进的拔插式宝石孔板设计，方便拆装，易清洁保养，同时配备高压灼烧、正负压反冲及智能自动清洗，彻底解决堵孔困扰\r\n◎三维立体图像分析技术\r\n◎卓越的存储、查询功能\r\n◎全中文界面操作系统\r\n◎专用急诊位，急诊随时插入功能 '),
(10, '血细胞分析系列', 'URIT-5300', '全自动五分类血细胞分析仪', 'http://127.0.0.1/0511school/images/products/412.jpg', ' 	\r\n◎采用国际最先进的四角度纯激光散射技术\r\n◎WOC和WIC双重白细胞计数\r\n◎检测速度达到80样本/小时\r\n◎具备穿刺进样方式\r\n◎采用进口陶瓷分血阀定量系统，截取中段血样，剔除干扰确保结果的精准、稳定\r\n◎二次加速流式细胞技术\r\n◎具有国际领先的三维立体图像分析技术，为鉴别和分类未成熟细胞及干扰物质提供了更直观、更丰富的分析方式'),
(11, '血细胞分析系列', 'URIT-5200', '全自动五分类血细胞分析仪', 'http://127.0.0.1/0511school/images/products/413.jpg', '◎采用国际最先进的四角度纯激光散射技术\r\n◎检测速度分别达到60样本/小时\r\n◎二次加速流式细胞技术\r\n◎具有国际领先的三维立体图像分析技术，为鉴别和分类未成熟细胞及干扰物质提供了更直观、更丰富的分析方式\r\n◎采用进口氦氖激光器，光源稳定、寿命长'),
(12, '血细胞分析系列', 'URIT-3300', '全自动血细胞分析仪', 'http://127.0.0.1/0511school/images/products/414.jpg', '\r\n采用最先进的分立式机型设计理念，整机由测试主机和综合业务平台两部分共同组成，不仅为用户提供基本的血液常规检测管理 ，同时还提供检验室其他项目的管理功能。它可以联接检验室中的尿液分析仪、生化分析仪、免疫分析仪等不同项目检测设备，形成数据一体化管理的检验室综合业务工作站。\r\n◎白细胞三分类\r\n◎电阻抗原理结合先进扫流技术，浮动界标技术，独立的双模式自动校准系统\r\n◎智能清洗、正负压反冲、高压灼烧三位一体排堵方案\r\n◎核心部件、原装进口，整机核心部件泵、阀及管路等均采用进口知名产品，以确保仪器优越\r\n◎自主研发的系列配套试剂和质控物、校准品，降低使用成本，保证测试结果的准确性，无毒环保试剂，使用安全可靠 '),
(13, '血细胞分析系列', 'URIT-3000', '全自动血细胞分析仪', 'http://127.0.0.1/0511school/images/products/415.jpg', ' 	\r\n◎白细胞三分类\r\n◎大屏幕液晶显示所有测试参数及直方图\r\n◎多项业内领先技术保证测试结果准确\r\n◎核心部件进口知名产品，确保仪器优越品质\r\n◎人性化设计，令操作、维护更加便捷\r\n◎完善的校准与质控体系\r\n◎大容量数据存储，多种中、英文报告格式\r\n◎自主研发的系列配套试剂和质控物、校准品，降低使用成本，保证测试结果的准确性，无毒环保试剂，使用安全可靠 '),
(14, '血细胞分析系列', 'URIT-3000PLUS', '全自动血细胞分析仪', 'http://127.0.0.1/0511school/images/products/416.jpg', ' 	\r\n◎白细胞三分类\r\n◎彩色大屏幕显示所有测试参数、直方图、病人信息、报警信息\r\n◎扫流技术、浮动界标技术和电气隔离等多项业内领先技术保证测试结果准确\r\n◎核心部件进口知名产品，确保仪器优越品质\r\n◎人性化设计，令操作、维护更加便捷\r\n◎完善的校准与质控体系\r\n◎大容量数据存储，多种中、英文报告格式\r\n◎原厂配套试剂和质控物、校准品，保证测试结果的准确性及可溯源性，无毒环保试剂，使用安全可靠'),
(15, '血细胞分析系列', 'URIT-2900', '全自动血细胞分析仪', 'http://127.0.0.1/0511school/images/products/417.jpg', ' 	\r\n◎白细胞三分类\r\n◎大屏幕液晶显示所有测试参数及直方图\r\n◎多项业内领先技术保证测试结果准确\r\n◎核心部件进口知名产品，确保仪器优越品质\r\n◎人性化设计，令操作、维护更加便捷\r\n◎完善的校准与质控体系\r\n◎大容量数据存储，多种中、英文报告格式\r\n◎自主研发的系列配套试剂和质控物、校准品，降低使用成本，保证测试结果的准确性，无毒环试剂，使用安全可靠 '),
(16, '血细胞分析系列', 'URIT-2900PLUS', '全自动血细胞分析仪', 'http://127.0.0.1/0511school/images/products/418.jpg', '◎白细胞三分类\r\n◎大屏幕液晶显示所有测试参数及直方图\r\n◎多项业内领先技术保证测试结果准确\r\n◎核心部件进口知名产品，确保仪器优越品质\r\n◎人性化设计，令操作、维护更加便捷\r\n◎完善的校准与质控体系\r\n◎大容量数据存储，多种中、英文报告格式\r\n◎原厂配套试剂和质控物、校准品，保证测试结果的准确性及可溯源性，无毒环保试剂，使用安全可靠\r\n◎可编辑打印综合报告单'),
(17, '血细胞分析系列', 'URIT', '系列血细胞试剂', 'http://127.0.0.1/0511school/images/products/419.jpg', '五分类血细胞分析仪试剂\r\n◎ ABBOTT：CD3700/3500/3000\r\n◎ NIHON KOEHDEN系列：MEK7222K/MEK82222K\r\n三分类血细胞分析仪试剂\r\n◎ ABBOTT：CD1400EX/1600/1700/1800\r\n◎ NIHON KOEHDEN系列：MEK6318/6108/8118\r\n◎ SYSMEX系列：KX-21,F-820\r\n◎迈瑞系列：BC-1800/2000/2200/2300/2800/3000/3200\r\n◎ ABX系列：MICROS60,OT18 ADVIA60\r\n◎ SWELAB系列：AC900\\AC900 EO AC920\\AC920 EO\r\n◎ AITAIK系列：CA-800,CA-500 '),
(18, '尿液分析系列', 'URIT', '全自动尿液分析系统', 'http://127.0.0.1/0511school/images/products/421.jpg', '\r\nURIT-1500 & URIT-1200 Automatic Urinalysis System\r\n◎融合世界最先进的机器视觉图像处理技术及机械三维点阵技术\r\n◎甄选最优质配件，全球采购确保测试精确，质量稳定\r\n◎真实反映有型成分形态，自动识别，自动拼接成全景图像，智能图像分割，分类保存，提高审核速度\r\n◎全面简化尿液检验工作流程，一键即可完成50个标本的尿干化学及尿沉渣测试，提高实验室工作效率\r\n◎可自动打印出带尿液中有型成分全景图片及尿干化学和尿沉渣结果的综合报告单 '),
(19, '尿液分析系列', 'URIT-1500', '全自动尿液分析仪', 'http://127.0.0.1/0511school/images/products/422.jpg', '◎自动化程度高，采用一键操作模式，完成多个标本的连续测定\r\n◎采用冷光源测试系统，减少环境光干扰，光源寿命长，提高仪器的灵敏度、准度度、稳定性\r\n◎自动修正环境温度、试纸非特异性、SG、pH、颜色对测试结果的影响\r\n◎超大触摸液晶显示屏，windows操作系统\r\n◎自动输送样本、吸样、点样、清洗、试纸条进给、收集废条\r\n◎精确定量滴样，避免测试项间交叉污染\r\n◎急诊插入功能，可进行单个或成组样本的急诊测试\r\n◎海量数据储存\r\n◎通过升级卡对仪器进行升级\r\n◎RS-232标准接口及网络接口可与医院Lis或His进行网络连接\r\n◎配有原厂配套尿质控液，保证测试结果准确 '),
(20, '尿液分析系列', 'URIT-500B', '尿液分析仪', 'http://127.0.0.1/0511school/images/products/423.jpg', '◎采用反射光电比色法测试尿液中的各种成分\r\n◎高速测试，适用于大批量体检\r\n◎自动修正试纸非特异性、pH值、SG、颜色对测试结果的影响\r\n◎大屏幕液晶触摸屏，中英文操作界面自由切换，中英文结果输出可选\r\n◎仪器能自动感应试纸条，将感应到的试纸条送入仪器内部\r\n◎有自动卸废试纸条功能，能自动将测试过的试纸条卸到废条盒内\r\n◎内置热敏打印机，自动打印测试结果\r\n◎仪器有RS232等接口，可实现电脑或Lis系统连接\r\n◎配有原厂配套尿质控液，保证测试结果准确 '),
(21, '尿液分析系列', 'Uritest-200B', '自动尿液分析仪', 'http://127.0.0.1/0511school/images/products/424.jpg', '◎采用反射光电比色法测试尿液中的各种成分\r\n◎皮带式进样系统，可自动传送试纸条，进行快速连续测试\r\n◎自动修正试纸非特异性、pH值、SG、颜色对测试结果的影响\r\n◎大屏幕液晶触摸屏，中英文操作界面自由切换，中英文结果输出可选\r\n◎有自动卸废试纸条功能，能自动将测试过的试纸条卸到废条盒内\r\n◎内置热敏打印机，自动打印测试结果\r\n◎仪器有RS232等接口，可实现电脑或Lis系统连接\r\n◎配有原厂配套尿质控液，保证测试结果准确 '),
(22, '尿液分析系列', 'Uritest-200A', '自动尿液分析系统', 'http://127.0.0.1/0511school/images/products/425.jpg', '◎采用反射光电比色法测试尿液中的各种成分\r\n◎皮带式进样系统，可自动传送试纸条，进行快速连续测试\r\n◎自动修正试纸非特异性、pH值、SG、颜色对测试结果的影响\r\n◎大屏幕液晶触摸屏，中英文操作界面自由切换，中英文结果输出可选\r\n◎有自动卸废试纸条功能，能自动将测试过的试纸条卸到废条盒内\r\n◎内置热敏打印机，自动打印测试结果\r\n◎仪器有RS232等接口，可实现电脑或Lis系统连接\r\n◎配有原厂配套尿质控液，保证测试结果准确 '),
(23, '尿液分析系列', 'URIT-330', '尿液分析仪', 'http://127.0.0.1/0511school/images/products/426.jpg', '◎采用反射光电比色法测试尿液中的各种成分\r\n◎高速测试，适用于大批量体检\r\n◎自动修正试纸非特异性、pH值、SG、颜色对测试结果的影响\r\n◎大屏幕液晶触摸屏，中英文操作界面自由切换，中英文结果输出可选\r\n◎仪器能自动感应试纸条，将感应到的试纸条送入仪器内部\r\n◎有自动卸废试纸条功能，能自动将测试过的试纸条卸到废条盒内\r\n◎内置热敏打印机，自动打印测试结果\r\n◎仪器有RS232等接口，可实现电脑或Lis系统连接\r\n◎配有原厂配套尿质控液，保证测试结果准确 '),
(24, '尿液分析系列', 'URIT-180', '尿液分析仪', 'http://127.0.0.1/0511school/images/products/427.jpg', ' 	\r\n◎采用反射光电比色法测试尿液中的各种成分\r\n◎有快速测试模式及普通测试模式可供选择\r\n◎自动修正试纸非特异性、pH值、SG、颜色对测试结果的影响\r\n◎大屏幕液晶触摸屏，中英文操作界面自由切换，中英文结果输出可选\r\n◎有自动吸取试纸条上多余废液功能\r\n◎内置热敏打印机，自动打印测试结果，并可外接针式打印机\r\n◎仪器有RS232等接口，可实现电脑或Lis系统连接\r\n◎配有原厂配套尿质控液，保证测试结果准确 '),
(25, '尿液分析系列', 'URIT-55', '尿液分析仪', 'http://127.0.0.1/0511school/images/products/428.jpg', '◎采用反射光电比色法测试尿液中的各种成分\r\n◎有快速测试模式及普通测试模式可供选择\r\n◎自动修正试纸非特异性、pH值、SG、颜色对测试结果的影响\r\n◎大屏幕液晶触摸屏，中英文操作界面自由切换，中英文结果输出可选\r\n◎内置热敏打印机，自动打印测试结果，并可外接针式打印机\r\n◎仪器有RS232等接口，可实现电脑或Lis系统连接\r\n◎配有原厂配套尿质控液，保证测试结果准确 '),
(26, '尿液分析系列', 'URIT-30', '便携式尿液分析仪', 'http://127.0.0.1/0511school/images/products/429.jpg', '◎可用干电池供电\r\n◎采用反射光电比色法测试尿液中的各种成分\r\n◎有连续测试模式及单条测试模式可供选择\r\n◎自动修正试纸非特异性、pH值、SG、颜色对测试结果的影响\r\n◎大屏幕液晶触摸屏，中英文操作界面自由切换，中英文结果输出可选\r\n◎接驳专用热敏打印机，自动打印测试结果\r\n◎仪器有RS232等接口，可实现电脑或Lis系统连接\r\n◎配有原厂配套尿质控液，保证测试结果准确 '),
(27, '尿液分析系列', 'URIT-1200', '全自动尿沉渣分析仪', 'http://127.0.0.1/0511school/images/products/430.jpg', '◎自动化程度高，采用一键操作模式，完成多个标本的连续测定\r\n◎可对尿液中各种有型成分进行分类、计数\r\n◎采用双通道计数池，高速测试\r\n◎可直接用原尿进行测试，无需离心\r\n◎急诊插入功能，可进行单个或成组样本的急诊测试\r\n◎可接收联机的尿干化学分析仪的测试结果\r\n◎海量数据储存，包含测试参数及标本图形\r\n◎可通过USB端口对仪器进行升级\r\n◎可通过网络接口 与医院Lis或His进行网络连接 '),
(28, '尿液分析系列', 'URIT-1000PLUS', '全自动尿沉渣分析仪', 'http://127.0.0.1/0511school/images/products/431.jpg', '◎可对尿液中23种有型成分进行检测，并可进行红细胞位相检测\r\n◎采用平场消色差自动连续变倍显微检测系统\r\n◎可用尿杯直接上机检测，无需试管\r\n◎采用双通道计数池，高速测试\r\n◎可与多款尿液分析仪联机，尿干化学结果自动匹配\r\n◎不需使用聚焦液即可实现自动聚焦校准'),
(29, '其他检验产品系列', 'URIT-910系列', '系列电解质分析仪', 'http://127.0.0.1/0511school/images/products/441.jpg', '\r\n◎仪器仅设YES、NO二个触摸按键\r\n◎分析速度快，试剂用量少\r\n◎仪器可24小时开机\r\n◎样品分析后，自动冲洗，更好的保护电极，延长电极寿命\r\n◎具有波浪式冲洗及直冲进样方式，杜绝堵塞和交叉污染现象\r\n◎进样一次可同时测出K、Na、Cl、ica、nca、Tca、pH、TCO2、AG七项九参数\r\n◎仪器具有断电保护功能，断电仍可储存质控和样品数据\r\n◎仪器有自动休眠模式，可减少试剂消耗'),
(30, '其他检验产品系列', 'URIT-660', '酶标分析仪', 'http://127.0.0.1/0511school/images/products/442.jpg', '◎96孔可视化布板\r\n◎8通道光纤测量系统\r\n◎人性化操作界面\r\n◎表抗五项一次性测量，即时得出完整检测报告\r\n◎计算：吸光度，cut-opf、线性回归、指数回归、对数回归幂回归、单点、折线、多点百分比\r\n◎触摸屏操作，简便快捷，便于清洁消毒 '),
(31, '其他检验产品系列', 'URIT-670', '自动酶标洗板机', 'http://127.0.0.1/0511school/images/products/443.jpg', '◎残留量≤2μL/孔，清洗干净彻底；具有底部冲洗、两点吸液、震荡、浸泡等功能，有效去除非特异性吸附干扰物质，洗板充分彻底\r\n◎洗板类型、次数、条数可选，浸泡时间、暂停时间、振板时间、吸液时间可设，可定义50组不同的清洗程序；可选择板洗、行洗或跳行冲洗，满足您的不同需求\r\n◎大屏幕中文液晶显示屏，图形化界面，全屏显示洗板进度，操作简便\r\n◎吸液针与分液针独立设计，具有防溢流功能、废液液面自动感应报警功能，可最大限度减少交叉污染；全新的防护罩设计，防止液体溅出，全面提升安全性 '),
(32, '其他检验产品系列', 'URIT-610', '四通道凝血分析仪', 'http://127.0.0.1/0511school/images/products/444.jpg', '◎检测结果不受黄疸、溶血、乳糜血等异常因素的影响\r\n◎高精度电子加样枪，自动触发测量，测量时间可精确到十分之一秒\r\n◎样品和试剂预温槽采用高品质电子恒温器，精确模拟人体温度\r\n◎试剂用量少；各通道完全独立，测试项目可任意组合\r\n◎预温有计时提醒功能；超大液晶显示屏，全中文显示操作信息和检测结果 '),
(33, '其他检验产品系列', 'URIT-600', '双通道凝血分析仪', 'http://127.0.0.1/0511school/images/products/445.jpg', '◎检测结果不受黄疸、溶血、乳糜血等异常因素的影响\r\n◎高精度电子加样枪，自动触发测量，测量时间可精确到十分之一秒\r\n◎样品和试剂预温槽采用高品质电子恒温器，精确模拟人体温度\r\n◎试剂用量少；各通道完全独立，测试项目可任意组合\r\n◎预温有计时提醒功能；超大液晶显示屏，全中文显示操作信息和检测结果 '),
(34, 'POCT产品', 'URIT-80', '血糖分析仪', 'http://127.0.0.1/0511school/images/products/451.jpg', '介绍暂无'),
(35, 'POCT产品', 'URIT-25', '血糖分析仪', 'http://127.0.0.1/0511school/images/products/552.jpg', '◎外观时尚、大屏显示、插条开机、插卡自动调节CODE值，操作简便\r\n◎虹吸进样，1.0μL微量取血，疼痛感更轻\r\n◎三电极试条，5秒检验，快速而准确\r\n◎两节7号干电池，方便购买更换。\r\n◎自动气温监测和提示；自动电池电量监测和提示；自动判断故障\r\n◎300个测试结果大容量存储，可进行7天、14天、30天等多种平均值的计算 '),
(36, 'POCT产品', 'URIT-26', '血糖分析仪', 'http://127.0.0.1/0511school/images/products/453.jpg', '◎外观时尚、大屏显示、插条开机、插卡自动调节CODE值，操作简便\r\n◎虹吸进样，1μL微量取血，疼痛感更轻\r\n◎三电极试条，5秒检验，快速而准确\r\n◎自动检测使用温度，自动进行温度补偿，减少了环境温度的影响，使测试数据更准确\r\n◎大容量存储，可进行7天、14天、30天等多种平均值的计算以及联机上传检测数据，让用户更好的掌握血糖情况 '),
(37, 'POCT产品', 'URIT-10', '尿酸/血糖分析仪', 'http://127.0.0.1/0511school/images/products/454.jpg', '◎外观时尚、大屏显示、插条开机、拔条关机；插卡自动调节CODE值，操作简便\r\n◎虹吸进样，1μL微量取血（尿酸用血量≤1.5uL），疼痛感更轻\r\n◎三电极试条，5秒检验，快速而准确（尿酸浓度测试25秒），同时有酮体提示功能；\r\n◎仪器自动判断试纸条为尿酸或血糖。\r\n◎自动气温监测和提示；自动电池电量监测和提示；自动判断故障\r\n◎400个测试结果大容量存储，可进行7天、14天、30天等多种平均值的计算 '),
(38, 'POCT产品', 'URIT-12', '血红蛋白分析仪', 'http://127.0.0.1/0511school/images/products/455.jpg', '◎微量取血仅需一滴全血样本，即可完成检验\r\n◎定量检测直接显示体内血红蛋白含量\r\n◎检测快速15秒内即可读取结果\r\n◎结果精确与ICSH参考方法对照相关性良好 '),
(39, 'POCT产品', 'URIT', '指夹式血氧脉搏仪', 'http://127.0.0.1/0511school/images/products/456.jpg', '◎仪器集血氧探头和处理显示模块于一体\r\n◎适用于医院、家庭、社区医疗、运动保健等范围\r\n◎能精确测量血氧饱和度和脉率\r\n◎血氧和脉率值显示、脉率波形和棒图显示、低电量显示、多种显示模式选择、屏幕亮度二级可调\r\n◎功耗低、无信号时自动关机\r\n◎体积小、重量轻，携带方便 '),
(40, '医用电子产品', 'URIT', '多参数病人监护仪', 'http://127.0.0.1/0511school/images/products/461.jpg', '◎监护参数：ECG、RESP、NIBP、SPO2、PR、2TEMP\r\n◎专业医用的嵌入式平台，低功耗，高速和高稳定性\r\n◎框架式内部结构，整机设计新颖，可选各种显示界面\r\n◎宽电压设计，适应于各种电网环境\r\n◎中、英、西班牙文的国际化操作界面\r\n◎可通过中央监护系统远程监控监护仪，多种报警方式提示，同屏显示多台监护信息，实现多个病人同时监护 '),
(41, '医用电子产品', 'URIT', '生命体征监护系列', 'http://127.0.0.1/0511school/images/products/462.jpg', '◎用于测试心电、血氧、血压、体温、呼吸等 ');

-- --------------------------------------------------------

--
-- 表的结构 `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `公司名称` varchar(100) NOT NULL,
  `注册资本` varchar(50) NOT NULL,
  `法定代表人` varchar(20) NOT NULL,
  `占地面积` varchar(50) DEFAULT NULL,
  `体系证书` varchar(50) DEFAULT NULL,
  `成立时间` date DEFAULT NULL,
  `姓名` varchar(20) DEFAULT NULL,
  `职务` varchar(20) DEFAULT NULL,
  `电话` varchar(20) DEFAULT NULL,
  `上年末资产规模` varchar(20) DEFAULT NULL,
  `上年末销售额` varchar(20) DEFAULT NULL,
  `行业地位` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `table`
--

INSERT INTO `table` (`id`, `公司名称`, `注册资本`, `法定代表人`, `占地面积`, `体系证书`, `成立时间`, `姓名`, `职务`, `电话`, `上年末资产规模`, `上年末销售额`, `行业地位`) VALUES
(1, '桂林电子科技大学', '桂电', '桂电', '1000', '证书4', '2015-06-09', '黄艺', 'stu', '13788742565', '3000', '2000', '1000');

-- --------------------------------------------------------

--
-- 表的结构 `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `公司名称` varchar(100) NOT NULL,
  `注册资本` varchar(50) NOT NULL,
  `法定代表人` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `table1`
--

INSERT INTO `table1` (`id`, `公司名称`, `注册资本`, `法定代表人`) VALUES
(1, '桂林电子科技大学', '桂电', '桂电');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userflag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `passwd`, `company`, `email`, `userflag`) VALUES
(1, 'stu', '1234567', '桂林2', 'hyhning@163.com', 0),
(3, 'stu2', 'e10adc3949ba59abbe56e057f20f883e', '深圳', 'hyhning@163.com', 0),
(4, 'student', 'e10adc3949ba59abbe56e057f20f883e', '桂林电子科技大学', 'hyhning@163.com', 0),
(6, 'stu001', '123456', '桂林电子科技大学', 'hyhning@163.com', 0),
(7, 'stu007', 'e10adc3949ba59abbe56e057f20f883e', '桂林电子', 'hyhning@163.com', 0),
(8, 'stu007', 'e10adc3949ba59abbe56e057f20f883e', '桂林电子', 'hyhning@163.com', 0),
(9, 'stu007', 'e10adc3949ba59abbe56e057f20f883e', '桂林电子', 'hyhning@163.com', 0),
(10, 'stu002', '96e79218965eb72c92a549dd5a330112', '桂林', 'hyhning@163.com', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wrappic`
--

CREATE TABLE IF NOT EXISTS `wrappic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picname` varchar(50) NOT NULL,
  `urlpic` varchar(100) NOT NULL,
  `src` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `wrappic`
--

INSERT INTO `wrappic` (`id`, `picname`, `urlpic`, `src`, `date`) VALUES
(1, '优利特企业', 'http://127.0.0.1/0511school/images/index/1_01.jpg', '../About/about.php', '2015-05-30'),
(2, '产品展示', 'http://127.0.0.1/0511school/images/index/1_02.jpg', '../Product/productnow.php', '2015-05-30'),
(3, '风景', 'http://127.0.0.1/0511school/images/index/1_03.jpg', '../About/about.php', '2015-05-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
