-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 12/06/2019 às 18:32
-- Versão do servidor: 8.0.15
-- Versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `diario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agencies`
--

CREATE TABLE `agencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `initials` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `agencies`
--

INSERT INTO `agencies` (`id`, `entity_id`, `category_id`, `name`, `initials`, `cnpj`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'GOVERNADOR DO ESTADO DO AMAZONAS', 'GOVERNADORIA', '00.000.000/0000-00', NULL, '2019-03-04 15:20:04', '2019-03-04 15:20:04'),
(2, 1, 1, 'VICE-GOVERNADOR DO ESTADO DO AMAZONAS', 'VICE-GOVERNADORIA', '00.000.000/0000-00', NULL, '2019-03-04 15:20:32', '2019-03-04 15:20:32'),
(3, 1, 1, 'SECRETARIA DE ESTADO DA CASA CIVIL', 'CASA CIVIL', '00.000.000/0000-00', NULL, '2019-03-04 15:20:58', '2019-03-04 15:20:58'),
(4, 1, 1, 'SECRETARIA EXTRAORDINÁRIA', 'SECRETARIA EXTRAORDINÁRIA', '00.000.000/0000-00', NULL, '2019-03-04 15:21:25', '2019-03-04 15:21:25'),
(5, 1, 1, 'FUNDO DE PROMOÇÃO SOCIAL', 'FPS', '00.000.000/0000-00', NULL, '2019-03-04 15:21:55', '2019-03-04 15:43:26'),
(6, 1, 1, 'SECRETARIA DE ESTADO DE RELAÇÕES INSTITUCIONAIS', 'SERINS', '00.000.000/0000-00', NULL, '2019-03-04 15:22:23', '2019-03-04 15:22:23'),
(7, 1, 1, 'SECRETARIA DE ESTADO DA CASA MILITAR', 'CASA MILITAR', '00.000.000/0000-00', NULL, '2019-03-04 15:22:54', '2019-03-04 15:22:54'),
(8, 1, 1, 'CONTROLADORIA GERAL DO ESTADO', 'CGE', '00.000.000/0000-00', NULL, '2019-03-04 15:23:26', '2019-03-04 15:23:26'),
(9, 1, 1, 'PROCURADORIA GERAL DO ESTADO', 'PGE', '00.000.000/0000-00', NULL, '2019-03-04 15:24:15', '2019-03-04 15:24:15'),
(10, 1, 1, 'UNIVERSIDADE DO ESTADO DO AMAZONAS', 'UEA', '00.000.000/0000-00', NULL, '2019-03-04 15:24:46', '2019-03-04 15:24:46'),
(11, 1, 1, 'SECRETARIA DE ESTADO DA FAZENDA', 'SEFAZ', '00.000.000/0000-00', NULL, '2019-03-04 15:25:24', '2019-03-04 15:25:24'),
(12, 1, 1, 'SECRETARIA DE ESTADO DE PLANEJAMENTO, DESENVOLVIMENTO, CIÊNCIA, TECNOLOGIA E INOVAÇÃO', 'SEPLANCTI', '00.000.000/0000-00', NULL, '2019-03-04 15:25:50', '2019-03-04 15:25:50'),
(13, 1, 1, 'SECRETARIA DE ADMINISTRAÇÃO E GESTÃO', 'SEAD', '00.000.000/0000-00', NULL, '2019-03-04 15:26:10', '2019-03-04 15:26:10'),
(14, 1, 1, 'COMISSÃO GERAL DE LICITAÇÃO', 'CGL', '00.000.000/0000-00', NULL, '2019-03-04 15:26:33', '2019-03-04 15:26:55'),
(15, 1, 1, 'SECRETARIA DE ESTADO DE JUSTIÇA, DIREITOS HUMANOS E CIDADANIA', 'SEJUSC', '00.000.000/0000-00', NULL, '2019-03-04 15:27:23', '2019-03-04 15:27:23'),
(16, 1, 1, 'SECRETARIA DE ESTADO DE SAÚDE', 'SUSAM', '00.000.000/0000-00', NULL, '2019-03-04 15:27:52', '2019-03-04 15:27:52'),
(17, 1, 1, 'SECRETARIA DE ESTADO DE EDUCAÇÃO E QUALIDADE DO ENSINO', 'SEDUC', '00.000.000/0000-00', NULL, '2019-03-04 15:28:15', '2019-03-04 15:28:15'),
(18, 1, 1, 'SECRETARIA DE ESTADO DE SEGURANÇA PÚBLICA', 'SSP', '00.000.000/0000-00', NULL, '2019-03-04 15:28:41', '2019-03-04 15:28:41'),
(19, 1, 1, 'SECRETARIA DE ESTADO DA ASSISTÊNCIA SOCIAL', 'SEAS', '00.000.000/0000-00', NULL, '2019-03-04 15:29:06', '2019-03-04 15:29:06'),
(20, 1, 1, 'SECRETARIA DE ESTADO DO TRABALHO', 'SETRAB', '00.000.000/0000-00', NULL, '2019-03-04 15:29:26', '2019-03-04 15:29:26'),
(21, 1, 1, 'SECRETARIA DE ESTADO DE CULTURA', 'SEC', '00.000.000/0000-00', NULL, '2019-03-04 15:29:50', '2019-03-04 15:29:50'),
(22, 1, 1, 'SECRETARIA DE ESTADO DE INFRAESTRUTURA', 'SEINFRA', '00.000.000/0000-00', NULL, '2019-03-04 15:30:14', '2019-03-04 15:30:14'),
(23, 1, 1, 'SECRETARIA DE ESTADO DO MEIO AMBIENTE', 'SEMA', '00.000.000/0000-00', NULL, '2019-03-04 15:30:42', '2019-03-04 15:30:42'),
(24, 1, 1, 'SECRETARIA DE POLÍTICA FUNDIÁRIA', 'SPF', '00.000.000/0000-00', NULL, '2019-03-04 15:31:03', '2019-03-04 15:31:03'),
(25, 1, 1, 'SECRETARIA DE ESTADO DE PRODUÇÃO RURAL', 'SEPROR', '00.000.000/0000-00', NULL, '2019-03-04 15:31:33', '2019-03-04 15:31:33'),
(26, 1, 1, 'SECRETARIA DE ESTADO DA JUVENTUDE, ESPORTE E LAZER', 'SEJEL', '00.000.000/0000-00', NULL, '2019-03-04 15:32:13', '2019-03-04 15:32:13'),
(27, 1, 1, 'ESCRITÓRIO DE REPRESENTAÇÃO DO GOVERNO, EM SÃO PAULO', 'ERSP', '00.000.000/0000-00', NULL, '2019-03-04 15:32:41', '2019-03-04 15:32:41'),
(28, 1, 1, 'SECRETARIA DE ESTADO DOS DIREITOS DA PESSOA COM DEFICIÊNCIA', 'SEPED', '00.000.000/0000-00', NULL, '2019-03-04 15:32:59', '2019-03-04 15:32:59'),
(29, 1, 1, 'SECRETARIA DE ESTADO DE DESENVOLVIMENTO DA REGIÃO METROPOLITANA DE MANAUS', 'SRMM', '00.000.000/0000-00', NULL, '2019-03-04 15:33:23', '2019-03-04 15:33:23'),
(30, 1, 1, 'UNIDADE GESTORA DE PROJETOS ESPECIAIS', 'UGPE', '00.000.000/0000-00', NULL, '2019-03-04 15:33:42', '2019-03-04 15:33:42'),
(31, 1, 1, 'SECRETARIA DE ESTADO DE ADMINISTRAÇÃO PENITENCIÁRIA', 'SEAP', '00.000.000/0000-00', NULL, '2019-03-04 15:34:07', '2019-03-04 15:34:07'),
(32, 1, 1, 'SECRETARIA DE ESTADO DE COMUNICAÇÃO SOCIAL', 'SECOM', '00.000.000/0000-00', NULL, '2019-03-04 15:34:28', '2019-03-04 15:34:28'),
(33, 1, 1, 'POLÍCIA CIVIL DO ESTADO', 'PC', '00.000.000/0000-00', NULL, '2019-03-04 15:34:48', '2019-03-04 15:34:48'),
(34, 1, 1, 'POLÍCIA MILITAR DO AMAZONAS', 'PMAM', '00.000.000/0000-00', NULL, '2019-03-04 15:35:11', '2019-03-04 15:35:11'),
(35, 1, 1, 'CORPO DE BOMBEIROS MILITAR DO ESTADO DO AMAZONAS', 'CBMAM', '00.000.000/0000-00', NULL, '2019-03-04 15:35:35', '2019-03-04 15:35:35'),
(36, 1, 1, 'SECRETARIA EXECUTIVA DE DEFESA CIVIL DO ESTADO', 'DEFESA CIVIL', '00.000.000/0000-00', NULL, '2019-03-04 15:35:56', '2019-03-04 15:35:56'),
(37, 1, 2, 'AGÊNCIA REGULADORA DOS SERVIÇOS PÚBLICOS CONCEDIDOS DO ESTADO DO AMAZONAS', 'ARSAM', '00.000.000/0000-00', NULL, '2019-03-04 15:36:39', '2019-03-04 15:37:44'),
(38, 1, 2, 'IMPRENSA OFICIAL DO ESTADO DO AMAZONAS', 'IMPEAM', '00.000.000/0000-00', NULL, '2019-03-04 15:37:10', '2019-03-04 15:42:37'),
(39, 1, 2, 'AGÊNCIA AMAZONENSE DE DESENVOLVIMENTO ECONOMICO E SOCIAL', 'AADES', '00.000.000/0000-00', NULL, '2019-03-04 15:38:13', '2019-03-04 15:38:13'),
(40, 1, 2, 'DEPARTAMENTO ESTADUAL DE TRÂNSITO', 'DETRAN', '00.000.000/0000-00', NULL, '2019-03-04 15:38:39', '2019-03-04 15:42:23'),
(41, 1, 2, 'JUNTA COMERCIAL DO ESTADO DO AMAZONAS', 'JUCEA', '00.000.000/0000-00', NULL, '2019-03-04 15:39:06', '2019-03-04 15:39:06'),
(42, 1, 2, 'SUPERINTENDÊNCIA DE HABITAÇÃO', 'SUHAB', '00.000.000/0000-00', NULL, '2019-03-04 15:39:28', '2019-03-04 15:43:14'),
(43, 1, 2, 'INSTITUTO DE PESOS E MEDIDAS', 'IPEM', '00.000.000/0000-00', NULL, '2019-03-04 15:39:52', '2019-03-04 15:39:52'),
(44, 1, 2, 'INSTITUTO DE PROTEÇÃO AMBIENTAL DO AMAZONAS', 'IPAAM', '00.000.000/0000-00', NULL, '2019-03-04 15:40:18', '2019-03-04 15:42:59'),
(45, 1, 2, 'INSTITUTO DE DESENVOLVIMENTO AGROPECUÁRIO E FLORESTAL SUSTENTÁVEL DO ESTADO DO AMAZONAS', 'IDAM', '00.000.000/0000-00', NULL, '2019-03-04 15:40:45', '2019-03-04 15:42:49'),
(46, 1, 2, 'CENTRO DE EDUCAÇÃO TECNOLÓGICA DO AMAZONAS', 'CETAM', '00.000.000/0000-00', NULL, '2019-03-04 15:41:21', '2019-03-04 15:41:21'),
(47, 1, 2, 'SUPERINTENDÊNCIA ESTADUAL DE NAVEGAÇÃO, PORTOS E HIDROVIAS', 'SNPH', '00.000.000/0000-00', NULL, '2019-03-04 15:41:46', '2019-03-04 15:41:46'),
(48, 1, 2, 'AGÊNCIA DE DEFESA AGROPECUÁRIA E FLORESTAL DO ESTADO DO AMAZONAS', 'ADAF', '00.000.000/0000-00', NULL, '2019-03-04 15:42:06', '2019-03-04 15:42:06'),
(49, 1, 4, 'FUNDAÇÃO DE MEDICINA TROPICAL “DOUTOR HEITOR VIEIRA DOURADO', 'FMT-AM', '00.000.000/0000-00', NULL, '2019-03-04 15:45:29', '2019-03-04 15:45:29'),
(50, 1, 4, 'FUNDAÇÃO DE DERMATOLOGIA TROPICAL E VENEREOLOGIA “ALFREDO DA MATTA”', 'FUAM', '00.000.000/0000-00', NULL, '2019-03-04 15:45:57', '2019-03-04 15:45:57'),
(51, 1, 4, 'FUNDAÇÃO CENTRO DE CONTROLE DE ONCOLOGIA DO ESTADO DO AMAZONAS', 'FCECON', '00.000.000/0000-00', NULL, '2019-03-04 15:46:32', '2019-03-04 15:46:32'),
(52, 1, 4, 'FUNDAÇÃO HOSPITALAR E HEMATOLOGIA E HEMOTERAPIA DO AMAZONAS', 'FHEMOAM', '00.000.000/0000-00', NULL, '2019-03-04 15:46:59', '2019-03-04 15:46:59'),
(53, 1, 4, 'FUNDAÇÃO HOSPITAL “ADRIANO JORGE”', 'FHAJ', '00.000.000/0000-00', NULL, '2019-03-04 15:47:26', '2019-03-04 15:47:26'),
(54, 1, 4, 'FUNDAÇÃO HOSPITAL DO CORAÇÃO “FRANCISCA MENDES”', 'FRANCISCA MENDES', '00.000.000/0000-00', NULL, '2019-03-04 15:47:49', '2019-03-04 15:47:49'),
(55, 1, 4, 'FUNDAÇÃO DE VIGILÂNCIA EM SAÚDE DO ESTADO DO AMAZONAS', 'FVS', '00.000.000/0000-00', NULL, '2019-03-04 15:48:07', '2019-03-04 15:48:07'),
(56, 1, 4, 'FUNDAÇÃO TELEVISÃO E RÁDIO CULTURA DO AMAZONAS', 'FUNTEC', '00.000.000/0000-00', NULL, '2019-03-04 15:48:26', '2019-03-04 15:48:26'),
(57, 1, 4, 'FUNDAÇÃO DE AMPARO À PESQUISA DO ESTADO DO AMAZONAS', 'FAPEAM', '00.000.000/0000-00', NULL, '2019-03-04 15:48:48', '2019-03-04 15:48:48'),
(58, 1, 4, 'FUNDAÇÃO FUNDO PREVIDENCIÁRIO DO ESTADO DO AMAZONAS', 'AMAZONPREV', '00.000.000/0000-00', NULL, '2019-03-04 15:49:08', '2019-03-04 15:49:08'),
(59, 1, 4, 'FUNDAÇÃO ESTADUAL DO INDÍO', 'FEI', '00.000.000/0000-00', NULL, '2019-03-04 15:49:27', '2019-03-04 15:49:27'),
(60, 1, 3, 'AGÊNCIA DE DESENVOLVIMENTO E FOMENTO DO ESTADO DO AMAZONAS', 'AFEAM', '00.000.000/0000-00', NULL, '2019-03-04 15:50:33', '2019-03-04 15:50:33'),
(61, 1, 3, 'EMPRESA ESTADUAL DE TURISMO', 'AMAZONASTUR', '00.000.000/0000-00', NULL, '2019-03-04 15:51:10', '2019-03-04 15:51:10'),
(62, 1, 3, 'AGÊNCIA DE DESENVOLVIMENTO SUSTENTÁVEL DO AMAZONAS', 'ADS', '00.000.000/0000-00', NULL, '2019-03-04 15:51:30', '2019-03-04 15:51:30'),
(63, 1, 5, 'PROCESSAMENTO DE DADOS DO AMAZONAS', 'PRODAM', '00.000.000/0000-00', NULL, '2019-03-04 15:51:52', '2019-03-04 15:51:52'),
(64, 1, 5, 'COMPANHIA DE DESENVOLVIMENTO DO ESTADO DO AMAZONAS', 'CIAMA', '00.000.000/0000-00', NULL, '2019-03-04 15:52:09', '2019-03-04 15:52:09'),
(65, 1, 5, 'COMPANHIA DE GÁS DO ESTADO DO AMAZONAS', 'CIGÁS', '00.000.000/0000-00', NULL, '2019-03-04 15:52:53', '2019-03-04 15:52:53'),
(66, 1, 5, 'COMPANHIA DE SANEAMENTO DO AMAZONAS', 'COSAMA', '00.000.000/0000-00', NULL, '2019-03-04 15:53:22', '2019-03-04 15:53:22'),
(67, 1, 5, 'AGÊNCIA AMAZONENSE DE DESENVOLVIMENTO CULTURAL', 'AADC', '00.000.000/0000-00', NULL, '2019-03-04 15:53:51', '2019-03-04 15:53:51'),
(68, 3, 1, 'MINISTÉRIO PÚBLICO DO ESTADO DO AMAZONAS', 'MPE-AM', '00.000.000/0000-00', NULL, '2019-03-04 16:06:19', '2019-03-04 16:06:19'),
(69, 2, 1, 'TRIBUNAL DE CONTAS DO ESTADO DO AMAZONAS', 'TCE-AM', '00.000.000/0000-00', NULL, '2019-03-04 16:09:25', '2019-03-04 16:09:25'),
(70, 4, 1, 'ALVARÃES', 'PREF. ALVARÃES', '00.000.000/0000-00', NULL, NULL, '2019-03-04 16:15:16'),
(71, 4, 1, 'AMATURÁ', 'PREF.AMATURÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(72, 4, 1, 'ANAMÃ', 'PREF.ANAMÃ', '00.000.000/0000-00', NULL, NULL, NULL),
(73, 4, 1, 'ANORI', 'PREF.ANORI', '00.000.000/0000-00', NULL, NULL, NULL),
(74, 4, 1, 'APUÍ', 'PREF.APUÍ', '00.000.000/0000-00', NULL, NULL, NULL),
(75, 4, 1, 'ATALAIA DO NORTE', 'PREF.ATALAIA DO NORTE', '00.000.000/0000-00', NULL, NULL, NULL),
(76, 4, 1, 'AUTAZES', 'PREF.AUTAZES', '00.000.000/0000-00', NULL, NULL, NULL),
(77, 4, 1, 'BARCELOS', 'PREF.BARCELOS', '00.000.000/0000-00', NULL, NULL, NULL),
(78, 4, 1, 'BARREIRINHA', 'PREF.BARREIRINHA', '00.000.000/0000-00', NULL, NULL, NULL),
(79, 4, 1, 'BENJAMIN CONSTANT', 'PREF.BENJAMIN CONSTANT', '00.000.000/0000-00', NULL, NULL, NULL),
(80, 4, 1, 'BERURI', 'PREF.BERURI', '00.000.000/0000-00', NULL, NULL, NULL),
(81, 4, 1, 'BOA VISTA DO RAMOS', 'PREF.BOA VISTA DO RAMOS', '00.000.000/0000-00', NULL, NULL, NULL),
(82, 4, 1, 'BOCA DO ACRE', 'PREF.BOCA DO ACRE', '00.000.000/0000-00', NULL, NULL, NULL),
(83, 4, 1, 'BORBA', 'PREF.BORBA', '00.000.000/0000-00', NULL, NULL, NULL),
(84, 4, 1, 'CANUTAMA', 'PREF.CANUTAMA', '00.000.000/0000-00', NULL, NULL, NULL),
(85, 4, 1, 'CARAUARI', 'PREF.CARAUARI', '00.000.000/0000-00', NULL, NULL, NULL),
(86, 4, 1, 'CAREIRO', 'PREF.CAREIRO', '00.000.000/0000-00', NULL, NULL, NULL),
(87, 4, 1, 'CAREIRO DA VÁRZEA', 'PREF.CAREIRO DA VÁRZEA', '00.000.000/0000-00', NULL, NULL, NULL),
(88, 4, 1, 'COARI', 'PREF.COARI', '00.000.000/0000-00', NULL, NULL, NULL),
(89, 4, 1, 'CODAJÁS', 'PREF.CODAJÁS', '00.000.000/0000-00', NULL, NULL, NULL),
(90, 4, 1, 'EIRUNEPÉ', 'PREF.EIRUNEPÉ', '00.000.000/0000-00', NULL, NULL, NULL),
(91, 4, 1, 'ENVIRA', 'PREF.ENVIRA', '00.000.000/0000-00', NULL, NULL, NULL),
(92, 4, 1, 'CAAPIRANGA', 'PREF.CAAPIRANGA', '00.000.000/0000-00', NULL, NULL, NULL),
(93, 4, 1, 'FONTE BOA', 'PREF.FONTE BOA', '00.000.000/0000-00', NULL, NULL, NULL),
(94, 4, 1, 'GUAJARÁ', 'PREF.GUAJARÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(95, 4, 1, 'HUMAITÁ', 'PREF.HUMAITÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(96, 4, 1, 'IPIXUNA', 'PREF.IPIXUNA', '00.000.000/0000-00', NULL, NULL, NULL),
(97, 4, 1, 'IRANDUBA', 'PREF.IRANDUBA', '00.000.000/0000-00', NULL, NULL, NULL),
(98, 4, 1, 'ITACOATIARA', 'PREF.ITACOATIARA', '00.000.000/0000-00', NULL, NULL, NULL),
(99, 4, 1, 'ITAMARATI', 'PREF.ITAMARATI', '00.000.000/0000-00', NULL, NULL, NULL),
(100, 4, 1, 'ITAPIRANGA', 'PREF.ITAPIRANGA', '00.000.000/0000-00', NULL, NULL, NULL),
(101, 4, 1, 'JAPURÁ', 'PREF.JAPURÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(102, 4, 1, 'JURUÁ', 'PREF.JURUÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(103, 4, 1, 'JUTAÍ', 'PREF.JUTAÍ', '00.000.000/0000-00', NULL, NULL, NULL),
(104, 4, 1, 'LÁBREA', 'PREF.LÁBREA', '00.000.000/0000-00', NULL, NULL, NULL),
(105, 4, 1, 'MANACAPURU', 'PREF.MANACAPURU', '00.000.000/0000-00', NULL, NULL, NULL),
(106, 4, 1, 'MANAQUIRI', 'PREF.MANAQUIRI', '00.000.000/0000-00', NULL, NULL, NULL),
(107, 4, 1, 'MANAUS', 'PREF.MANAUS', '00.000.000/0000-00', NULL, NULL, NULL),
(108, 4, 1, 'MANICORÉ', 'PREF.MANICORÉ', '00.000.000/0000-00', NULL, NULL, NULL),
(109, 4, 1, 'MARAÃ', 'PREF.MARAÃ', '00.000.000/0000-00', NULL, NULL, NULL),
(110, 4, 1, 'MAUÉS', 'PREF.MAUÉS', '00.000.000/0000-00', NULL, NULL, NULL),
(111, 4, 1, 'NHAMUNDÁ', 'PREF.NHAMUNDÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(112, 4, 1, 'NOVA OLINDA DO NORTE', 'PREF.NOVA OLINDA DO NORTE', '00.000.000/0000-00', NULL, NULL, NULL),
(113, 4, 1, 'NOVO AIRÃO', 'PREF.NOVO AIRÃO', '00.000.000/0000-00', NULL, NULL, NULL),
(114, 4, 1, 'NOVO ARIPUANÃ', 'PREF.NOVO ARIPUANÃ', '00.000.000/0000-00', NULL, NULL, NULL),
(115, 4, 1, 'PARINTINS', 'PREF.PARINTINS', '00.000.000/0000-00', NULL, NULL, NULL),
(116, 4, 1, 'PAUINI', 'PREF.PAUINI', '00.000.000/0000-00', NULL, NULL, NULL),
(117, 4, 1, 'PRESIDENTE FIGUEIREDO', 'PREF.PRESIDENTE FIGUEIREDO', '00.000.000/0000-00', NULL, NULL, NULL),
(118, 4, 1, 'RIO PRETO DA EVA', 'PREF.RIO PRETO DA EVA', '00.000.000/0000-00', NULL, NULL, NULL),
(119, 4, 1, 'SANTA ISABEL DO RIO NEGRO', 'PREF.SANTA ISABEL DO RIO NEGRO', '00.000.000/0000-00', NULL, NULL, NULL),
(120, 4, 1, 'SANTO ANTÔNIO DO IÇÁ', 'PREF.SANTO ANTÔNIO DO IÇÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(121, 4, 1, 'SILVES', 'PREF.SILVES', '00.000.000/0000-00', NULL, NULL, NULL),
(122, 4, 1, 'SÃO GABRIEL DA CACHOEIRA', 'PREF.SÃO GABRIEL DA CACHOEIRA', '00.000.000/0000-00', NULL, NULL, NULL),
(123, 4, 1, 'SÃO PAULO DE OLIVENÇA', 'PREF.SÃO PAULO DE OLIVENÇA', '00.000.000/0000-00', NULL, NULL, NULL),
(124, 4, 1, 'SÃO SEBASTIÃO DO UATUMÃ', 'PREF.SÃO SEBASTIÃO DO UATUMÃ', '00.000.000/0000-00', NULL, NULL, NULL),
(125, 4, 1, 'TABATINGA', 'PREF.TABATINGA', '00.000.000/0000-00', NULL, NULL, NULL),
(126, 4, 1, 'TAPAUÁ', 'PREF.TAPAUÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(127, 4, 1, 'TEFÉ', 'PREF.TEFÉ', '00.000.000/0000-00', NULL, NULL, NULL),
(128, 4, 1, 'TONANTINS', 'PREF.TONANTINS', '00.000.000/0000-00', NULL, NULL, NULL),
(129, 4, 1, 'UARINI', 'PREF.UARINI', '00.000.000/0000-00', NULL, NULL, NULL),
(130, 4, 1, 'URUCARÁ', 'PREF.URUCARÁ', '00.000.000/0000-00', NULL, NULL, NULL),
(131, 4, 1, 'URUCURITUBA', 'PREF.URUCURITUBA', '00.000.000/0000-00', NULL, NULL, NULL),
(132, 5, 5, 'CONSELHO REGIONAL DE CONTABILIDADE', 'CRCAM', '00.000.000/0000-00', NULL, '2019-03-04 16:22:56', '2019-03-04 16:22:56'),
(133, 6, 1, 'SECRETARIA MUNICIPAL DE ADMINISTRAÇÃO', 'SEMAD', '00.000.000/0000-00', NULL, '2019-03-25 11:28:50', '2019-03-25 11:28:50'),
(134, 7, 1, 'SECRETARIA MUNICIPAL DE FINANÇAS', 'SEMEF', '00.000.000/0000-00', NULL, '2019-03-25 16:24:21', '2019-03-25 16:25:13'),
(135, 6, 1, 'SECRETARIA DE ESTADO DE COMUNICAÇÃO SOCIAL', 'SECOM', '00.000.000/0000-00', NULL, '2019-03-26 11:30:05', '2019-03-26 11:30:23'),
(136, 7, 2, 'SECRETARIA DE ESTADO DE SEGURANÇA PÚBLICA', 'SSP', '00.000.000/0000-00', NULL, '2019-03-26 11:34:29', '2019-03-26 11:34:37'),
(137, 5, 5, 'CONSELHO REGIONAL DE MEDICINAS', 'CRM-AM', '00.000.000/0000-00', '2019-04-11 16:31:18', '2019-04-11 16:30:07', '2019-04-11 16:31:18'),
(138, 7, 1, 'SECRETARIA MUNICIPAL DE EDUCAÇÃO', 'SEMAD', '00.000.000/0000-00', NULL, '2019-04-11 17:26:16', '2019-04-11 17:26:16'),
(139, 7, 2, 'teste', 'teste', '00.000.000/0000-00', '2019-05-29 10:46:14', '2019-05-29 10:42:11', '2019-05-29 10:46:14'),
(140, 10, 1, 'SECRETARIA MUNICIPAL DE ADMINISTRAÇÃO', 'SEMAD', '00.000.000/0000-00', NULL, '2019-06-02 22:42:36', '2019-06-02 22:42:36'),
(141, 10, 1, 'SECRETARIA MUNICIPAL DE EDUCAÇÃO', 'SEMED', '00.000.000/0000-00', NULL, '2019-06-02 22:43:12', '2019-06-02 22:43:12'),
(142, 10, 1, 'SECRETARIA MUNICIPAL DE FINANÇAS', 'SEMEF', '00.000.000/0000-00', NULL, '2019-06-02 22:43:55', '2019-06-02 22:43:55');

-- --------------------------------------------------------

--
-- Estrutura para tabela `agency_user`
--

CREATE TABLE `agency_user` (
  `agency_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `agency_user`
--

INSERT INTO `agency_user` (`agency_id`, `user_id`) VALUES
(136, 41),
(134, 44),
(132, 46),
(140, 47),
(142, 48);

-- --------------------------------------------------------

--
-- Estrutura para tabela `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `sphere_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `branches`
--

INSERT INTO `branches` (`id`, `sphere_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'EXECUTIVO', NULL, NULL),
(2, 1, 'LEGISLATIVO', NULL, NULL),
(3, 1, 'JUDICIÁRIO', NULL, NULL),
(4, 2, 'EXECUTIVO', NULL, NULL),
(5, 2, 'LEGISLATIVO', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `calendars`
--

CREATE TABLE `calendars` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  `permanent` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `calendars`
--

INSERT INTO `calendars` (`id`, `client_id`, `description`, `date`, `permanent`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Segunda-Feira de Carnaval 2019', '2019-03-04 00:00:00', 0, '2019-03-04 16:27:07', '2019-03-04 15:55:06', '2019-03-04 16:27:07'),
(2, 1, 'Terça-Feira de Carnaval 2019', '2019-03-05 00:00:00', 0, '2019-03-04 16:27:11', '2019-03-04 15:55:43', '2019-03-04 16:27:11'),
(3, 1, 'Quarta-Feira de Cinza 2019', '2019-03-06 00:00:00', 0, '2019-03-04 16:27:03', '2019-03-04 15:56:07', '2019-03-04 16:27:03'),
(4, 1, 'Elevação do Amazonas a Categoria de Província', '2019-09-05 00:00:00', 1, NULL, '2019-03-04 15:59:37', '2019-03-04 15:59:37'),
(5, 1, 'Confraternização Universal', '2019-01-01 00:00:00', 1, '2019-03-04 16:26:04', '2019-03-04 16:00:36', '2019-03-04 16:26:04'),
(6, 1, 'Paixão de Cristo', '2019-04-19 00:00:00', 0, '2019-03-04 16:26:59', '2019-03-04 16:02:49', '2019-03-04 16:26:59'),
(7, 1, 'Ponto Facultativo', '2019-09-06 00:00:00', 0, NULL, '2019-03-04 16:29:13', '2019-03-04 16:29:26'),
(8, 2, 'Início da Revolução Acreana', '2019-08-06 00:00:00', 1, NULL, '2019-03-25 14:34:11', '2019-03-25 14:34:11'),
(9, 2, 'TESTES', '2019-03-27 00:00:00', 0, '2019-03-25 16:28:38', '2019-03-25 16:28:25', '2019-03-25 16:28:38'),
(10, 2, 'TESTE d', '2019-03-26 00:00:00', 0, '2019-03-26 11:38:51', '2019-03-26 11:38:34', '2019-03-26 11:38:51'),
(11, 10, 'Elevação do Amazonas a Categoria de Província', '2019-09-05 00:00:00', 1, NULL, '2019-06-02 22:45:00', '2019-06-02 22:45:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `categories`
--

INSERT INTO `categories` (`id`, `branch_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'SECRETARIA', NULL, NULL, NULL),
(2, 1, 'AUTARQUIA', NULL, NULL, NULL),
(3, 1, 'EMPRESA PÚBLICA', NULL, NULL, NULL),
(4, 1, 'FUNDAÇÃO PÚBLICA', NULL, NULL, NULL),
(5, 1, 'ECONOMIA MISTA', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `layout_pattern_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `initials` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `clients`
--

INSERT INTO `clients` (`id`, `layout_pattern_id`, `name`, `initials`, `alias`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Imprensa Oficial do Estado do Amazonas', 'IMPEAM', 'impeam', NULL, '2019-03-04 15:15:56', '2019-03-04 16:04:42'),
(2, 1, 'Associação de Municípios', 'AMUN', 'amun', NULL, '2019-03-22 16:24:30', '2019-03-25 16:18:12'),
(10, 1, 'Prefeitura Modelo', 'PMO', 'pm-modelo', NULL, '2019-06-02 22:38:29', '2019-06-02 22:38:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `client_user`
--

CREATE TABLE `client_user` (
  `client_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `client_user`
--

INSERT INTO `client_user` (`client_id`, `user_id`) VALUES
(10, 1),
(10, 2),
(10, 3),
(2, 40),
(2, 41),
(2, 44),
(1, 45),
(1, 46),
(10, 47),
(10, 48);

-- --------------------------------------------------------

--
-- Estrutura para tabela `competences`
--

CREATE TABLE `competences` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `competences`
--

INSERT INTO `competences` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Competência padrão', '2019-06-02 00:00:00', '2018-11-23 15:05:14', '2018-11-23 15:05:14'),
(2, '1º Bimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(3, '2º Bimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(4, '3º Bimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(5, '4º Bimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(6, '5º Bimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(7, '6º Bimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(8, '1º Quadrimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(9, '2º Quadrimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(10, '3º Quadrimestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(11, '1º Semestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(12, '2º Semestre', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(13, 'Anual', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(14, 'Quadrienal', NULL, '2018-12-17 14:48:37', '2018-12-17 14:48:37'),
(15, 'abc', '2019-03-25 16:47:27', '2019-03-25 16:47:06', '2019-03-25 16:47:27'),
(16, '1abc', '2019-03-26 12:10:15', '2019-03-26 12:10:01', '2019-03-26 12:10:15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dailies`
--

CREATE TABLE `dailies` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_released` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `dailies`
--

INSERT INTO `dailies` (`id`, `client_id`, `description`, `number`, `date_released`, `year`, `file_path`, `deleted_at`, `created_at`, `updated_at`) VALUES
(64, 10, 'Diário Oficial do Município Modelo', '4610', '2019-06-03', '20', NULL, NULL, '2019-06-03 09:05:21', '2019-06-03 09:25:52'),
(65, 10, 'Diário Oficial do Município Modelo', '4611', '2019-06-04', '20', NULL, NULL, '2019-06-03 09:05:21', '2019-06-03 09:05:21'),
(66, 10, 'Diário Oficial do Município Modelo', '4612', '2019-06-05', '20', NULL, NULL, '2019-06-03 09:05:21', '2019-06-03 09:05:21'),
(67, 10, 'Diário Oficial do Município Modelo', '4613', '2019-06-06', '20', NULL, NULL, '2019-06-03 09:05:21', '2019-06-03 09:05:21'),
(68, 10, 'Diário Oficial do Município Modelo', '4614', '2019-06-07', '20', NULL, NULL, '2019-06-03 09:05:21', '2019-06-03 09:05:21'),
(69, 10, 'Diário Oficial do Município Modelo', '4615', '2019-06-10', '20', 'dev/diario/pm-modelo/dailies/daily20190610093832.pdf', NULL, '2019-06-09 23:57:59', '2019-06-10 09:38:32'),
(70, 10, 'Diário Oficial do Município Modelo', '4616', '2019-06-11', '20', NULL, NULL, '2019-06-09 23:57:59', '2019-06-09 23:57:59'),
(71, 10, 'Diário Oficial do Município Modelo', '4617', '2019-06-12', '20', NULL, NULL, '2019-06-09 23:57:59', '2019-06-09 23:57:59'),
(72, 10, 'Diário Oficial do Município Modelo', '4618', '2019-06-13', '20', NULL, NULL, '2019-06-09 23:57:59', '2019-06-09 23:57:59'),
(73, 10, 'Diário Oficial do Município Modelo', '4619', '2019-06-14', '20', NULL, NULL, '2019-06-09 23:57:59', '2019-06-09 23:57:59');

-- --------------------------------------------------------

--
-- Estrutura para tabela `daily_theme`
--

CREATE TABLE `daily_theme` (
  `daily_id` int(10) UNSIGNED NOT NULL,
  `theme_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `entities`
--

CREATE TABLE `entities` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `entities`
--

INSERT INTO `entities` (`id`, `client_id`, `state_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'EXECUTIVO', NULL, '2019-03-04 15:16:30', '2019-03-04 15:16:30'),
(2, 1, 3, 'LEGISLATIVO', NULL, '2019-03-04 15:16:56', '2019-03-04 15:16:56'),
(3, 1, 3, 'JUDICIÁRIO', NULL, '2019-03-04 15:17:24', '2019-03-04 15:17:24'),
(4, 1, 3, 'MUNICÍPIOS', NULL, '2019-03-04 15:17:45', '2019-03-04 15:17:45'),
(5, 1, 3, 'EMPRESAS PRIVADAS', NULL, '2019-03-04 15:18:34', '2019-03-04 15:18:34'),
(6, 2, 1, 'Brasileia', NULL, '2019-03-22 16:25:35', '2019-03-22 16:25:35'),
(7, 2, 1, 'Acrelândia', NULL, '2019-03-25 16:19:49', '2019-03-25 16:19:56'),
(9, 1, 3, 'testes', '2019-04-11 16:28:53', '2019-04-11 16:28:33', '2019-04-11 16:28:53'),
(10, 10, 3, 'PODER EXECUTIVO', NULL, '2019-06-02 22:40:24', '2019-06-02 22:40:24');

-- --------------------------------------------------------

--
-- Estrutura para tabela `entity_section`
--

CREATE TABLE `entity_section` (
  `entity_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `entity_section`
--

INSERT INTO `entity_section` (`entity_id`, `section_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(6, 6),
(7, 6),
(10, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `entity_user`
--

CREATE TABLE `entity_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `layouts`
--

CREATE TABLE `layouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `layout_pattern_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `width` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `layouts`
--

INSERT INTO `layouts` (`id`, `layout_pattern_id`, `name`, `width`, `height`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '09 cm', '340', '1100', NULL, '2019-03-20 15:49:04', '2019-03-20 17:28:08'),
(2, 1, '19 cm', '718', '1100', NULL, '2019-03-20 15:49:23', '2019-03-20 17:28:23'),
(3, 1, '27 cm', '1021', '1100', NULL, '2019-03-20 15:49:44', '2019-03-20 17:28:34'),
(4, 2, 'CM - Largura 9,5 cm', '409', '550', NULL, '2019-03-04 16:48:33', '2019-03-08 20:21:01'),
(5, 2, 'PÁGINA INTEIRA - 20 (largura) x 27 (altura)', '818', '1100', NULL, '2019-03-04 16:50:13', '2019-03-08 20:22:38'),
(6, 2, '3/4 PÁGINA - 20 x 20', '818', '550', NULL, '2019-03-04 16:50:45', '2019-03-08 20:21:27'),
(7, 2, '1/2 PÁGINA - 20 (largura) x 13,5 (altura)', '818', '818', NULL, '2019-03-04 16:51:34', '2019-03-08 20:22:17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_patterns`
--

CREATE TABLE `layout_patterns` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `layout_patterns`
--

INSERT INTO `layout_patterns` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Padrão I - Prefeitura', NULL, '2019-03-29 17:36:51', '2019-03-29 17:38:43'),
(2, 'Padrão II - Imprensa Oficial', NULL, '2019-03-29 17:38:58', '2019-03-29 17:38:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `messages`
--

INSERT INTO `messages` (`id`, `title`, `message`, `created_at`, `updated_at`) VALUES
(4, 'ERRO NA FORMATAÇÃO', 'NÃO FOI POSSÍVEL APROVAR A MATÉRIA', '2019-04-02 10:44:26', '2019-04-02 10:44:26'),
(5, 'MOTIVO DE TESTE', 'MDMDKSD', '2019-05-28 11:51:00', '2019-05-28 11:51:00'),
(6, 'vvvdd', 'fdasfdsafdsa', '2019-05-28 11:58:08', '2019-05-28 11:58:08'),
(7, 'TESTE', 'VVVDD', '2019-05-28 12:38:44', '2019-05-28 12:38:44');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_19_101004_create_spheres_table', 1),
(4, '2018_11_19_101400_create_branches_table', 1),
(5, '2018_11_19_101521_add_spheres_to_branches', 1),
(6, '2018_11_19_102442_create_categories_table', 1),
(7, '2018_11_19_102510_add_branches_to_categories', 1),
(8, '2018_11_19_103213_create_states_table', 1),
(9, '2018_11_19_103305_create_entities_table', 1),
(10, '2018_11_19_103349_add_states_to_entities', 1),
(11, '2018_11_19_104145_create_agencies_table', 1),
(12, '2018_11_19_105009_add_entities_to_agencies', 1),
(13, '2018_11_19_111124_insert_spheres', 1),
(14, '2018_11_19_111419_insert_branches', 1),
(15, '2018_11_19_111839_insert_categories', 1),
(16, '2018_11_19_114143_create_sections_table', 1),
(17, '2018_11_19_114403_create_layouts_table', 1),
(18, '2018_11_19_114640_create_types_table', 1),
(19, '2018_11_19_114916_create_statuses_table', 1),
(20, '2018_11_19_120251_create_dailies_table', 1),
(23, '2018_11_19_122303_insert_user_on_users_table', 1),
(24, '2018_11_19_135330_insert_states', 1),
(25, '2018_11_19_135924_insert_entities', 1),
(26, '2018_11_21_092613_add_categories_to_agencies', 2),
(39, '2018_11_23_111458_create_subtypes_table', 3),
(40, '2018_11_23_111641_add_types_to_subtypes_table', 3),
(41, '2018_11_23_145346_create_competences_table', 4),
(44, '2018_11_23_150946_create_clients_table', 5),
(46, '2018_11_23_155207_add_clients_to_entities', 6),
(52, '2018_11_19_121250_add_relationship_on_theme', 7),
(53, '2018_11_26_113322_add_upload_column_to_themes', 7),
(54, '2018_11_30_114633_create_calendars_table', 8),
(55, '2018_11_30_115010_add_clients_to_calendars', 8),
(56, '2018_12_04_134128_add_clients_to_dailies', 9),
(58, '2018_12_12_094642_create_client_user_table', 10),
(59, '2018_12_12_101136_create_roles_table', 10),
(60, '2018_12_12_101247_create_permissions_table', 10),
(61, '2018_12_12_101705_create_role_user_table', 10),
(62, '2018_12_12_102018_create_permission_role_table', 10),
(63, '2018_12_13_134551_add_area_column_to_permissions', 11),
(64, '2018_12_17_114232_create_agency_user_table', 12),
(65, '2018_11_19_120803_create_themes_table', 13),
(66, '2018_12_26_113500_add_foreings_to_themes', 13),
(67, '2018_12_26_122710_create_daily_theme_table', 14),
(68, '2018_12_27_153452_add_entities_to_user', 15),
(69, '2019_01_03_115014_add_file_to_themes', 16),
(70, '2019_01_21_111734_add_status_to_themes', 17),
(71, '2019_01_21_181112_create_messages_table', 18),
(72, '2019_01_21_181300_add_messages_to_themes', 18),
(73, '2019_01_29_163708_add_diagrammed_by_column_in_theme_table', 19),
(74, '2019_02_15_155449_create_entity_user_table', 20),
(75, '2019_02_19_151442_add_sections_to_types', 21),
(76, '2019_02_20_101300_add_clients_to_sections_relationship', 22),
(77, '2019_02_20_105844_create_entity_section_table', 23),
(78, '2019_02_22_103550_add_sections_to_themes_relation', 24),
(79, '2019_03_29_170838_create_layout_patterns_table', 25),
(80, '2019_03_29_175436_add_layout_patterns_to_clients', 26),
(81, '2019_03_29_180207_add_layout_patterns_to_layouts', 27);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `area`, `deleted_at`, `created_at`, `updated_at`) VALUES
(13, 'agencies-view', 'Orgãos', 'agencies', NULL, '2018-12-13 16:22:55', '2018-12-13 16:22:55'),
(14, 'agencies-create', 'Orgãos', 'agencies', NULL, '2018-12-13 16:22:55', '2018-12-13 16:22:55'),
(15, 'agencies-edit', 'Orgãos', 'agencies', NULL, '2018-12-13 16:22:55', '2018-12-13 16:22:55'),
(16, 'agencies-delete', 'Orgãos', 'agencies', NULL, '2018-12-13 16:22:55', '2018-12-13 16:22:55'),
(17, 'clients-view', 'Clientes', 'clients', NULL, '2018-12-13 16:23:45', '2018-12-13 16:23:45'),
(18, 'clients-create', 'Clientes', 'clients', NULL, '2018-12-13 16:23:45', '2018-12-13 16:23:45'),
(19, 'clients-edit', 'Clientes', 'clients', NULL, '2018-12-13 16:23:45', '2018-12-13 16:23:45'),
(20, 'clients-delete', 'Clientes', 'clients', NULL, '2018-12-13 16:23:45', '2018-12-13 16:23:45'),
(21, 'calendars-view', 'Calendários', 'calendars', NULL, '2018-12-13 16:24:05', '2018-12-13 16:24:05'),
(22, 'calendars-create', 'Calendários', 'calendars', NULL, '2018-12-13 16:24:05', '2018-12-13 16:24:05'),
(23, 'calendars-edit', 'Calendários', 'calendars', NULL, '2018-12-13 16:24:05', '2018-12-13 16:24:05'),
(24, 'calendars-delete', 'Calendários', 'calendars', NULL, '2018-12-13 16:24:05', '2018-12-13 16:24:05'),
(25, 'sections-view', 'Cadernos', 'sections', NULL, '2018-12-13 16:25:10', '2018-12-13 16:25:10'),
(26, 'sections-create', 'Cadernos', 'sections', NULL, '2018-12-13 16:25:10', '2018-12-13 16:25:10'),
(27, 'sections-edit', 'Cadernos', 'sections', NULL, '2018-12-13 16:25:10', '2018-12-13 16:25:10'),
(28, 'sections-delete', 'Cadernos', 'sections', NULL, '2018-12-13 16:25:10', '2018-12-13 16:25:10'),
(29, 'types-view', 'Tipos de Matérias', 'types', NULL, '2018-12-13 16:25:26', '2018-12-13 16:25:26'),
(30, 'types-create', 'Tipos de Matérias', 'types', NULL, '2018-12-13 16:25:26', '2018-12-13 16:25:26'),
(31, 'types-edit', 'Tipos de Matérias', 'types', NULL, '2018-12-13 16:25:26', '2018-12-13 16:25:26'),
(32, 'types-delete', 'Tipos de Matérias', 'types', NULL, '2018-12-13 16:25:26', '2018-12-13 16:25:26'),
(33, 'subtypes-view', 'Sub Tipos de Materias', 'subtypes', NULL, '2018-12-13 16:25:39', '2018-12-13 16:25:39'),
(34, 'subtypes-create', 'Sub Tipos de Materias', 'subtypes', NULL, '2018-12-13 16:25:39', '2018-12-13 16:25:39'),
(35, 'subtypes-edit', 'Sub Tipos de Materias', 'subtypes', NULL, '2018-12-13 16:25:39', '2018-12-13 16:25:39'),
(36, 'subtypes-delete', 'Sub Tipos de Materias', 'subtypes', NULL, '2018-12-13 16:25:39', '2018-12-13 16:25:39'),
(37, 'competences-view', 'Competências', 'competences', NULL, '2018-12-13 16:25:57', '2018-12-13 16:25:57'),
(38, 'competences-create', 'Competências', 'competences', NULL, '2018-12-13 16:25:57', '2018-12-13 16:25:57'),
(39, 'competences-edit', 'Competências', 'competences', NULL, '2018-12-13 16:25:57', '2018-12-13 16:25:57'),
(40, 'competences-delete', 'Competências', 'competences', NULL, '2018-12-13 16:25:57', '2018-12-13 16:25:57'),
(41, 'layouts-view', 'Layouts', 'layouts', NULL, '2018-12-13 16:26:15', '2018-12-13 16:26:15'),
(42, 'layouts-create', 'Layouts', 'layouts', NULL, '2018-12-13 16:26:15', '2018-12-13 16:26:15'),
(43, 'layouts-edit', 'Layouts', 'layouts', NULL, '2018-12-13 16:26:15', '2018-12-13 16:26:15'),
(44, 'layouts-delete', 'Layouts', 'layouts', NULL, '2018-12-13 16:26:15', '2018-12-13 16:26:15'),
(45, 'statuses-view', 'Status', 'statuses', NULL, '2018-12-13 16:26:26', '2018-12-13 16:26:26'),
(46, 'statuses-create', 'Status', 'statuses', NULL, '2018-12-13 16:26:26', '2018-12-13 16:26:26'),
(47, 'statuses-edit', 'Status', 'statuses', NULL, '2018-12-13 16:26:26', '2018-12-13 16:26:26'),
(48, 'statuses-delete', 'Status', 'statuses', NULL, '2018-12-13 16:26:26', '2018-12-13 16:26:26'),
(49, 'dailies-view', 'Diários', 'Dailies', NULL, '2018-12-13 16:26:35', '2018-12-13 16:26:35'),
(50, 'dailies-create', 'Diários', 'Dailies', NULL, '2018-12-13 16:26:35', '2018-12-13 16:26:35'),
(51, 'dailies-edit', 'Diários', 'Dailies', NULL, '2018-12-13 16:26:35', '2018-12-13 16:26:35'),
(52, 'dailies-delete', 'Diários', 'Dailies', NULL, '2018-12-13 16:26:35', '2018-12-13 16:26:35'),
(53, 'roles-view', 'Papéis', 'roles', NULL, '2018-12-13 16:26:44', '2018-12-13 16:26:44'),
(54, 'roles-create', 'Papéis', 'roles', NULL, '2018-12-13 16:26:44', '2018-12-13 16:26:44'),
(55, 'roles-edit', 'Papéis', 'roles', NULL, '2018-12-13 16:26:44', '2018-12-13 16:26:44'),
(56, 'roles-delete', 'Papéis', 'roles', NULL, '2018-12-13 16:26:44', '2018-12-13 16:26:44'),
(57, 'permissions-view', 'Permissões', 'permissions', NULL, '2018-12-13 16:26:56', '2018-12-13 16:26:56'),
(58, 'permissions-create', 'Permissões', 'permissions', NULL, '2018-12-13 16:26:56', '2018-12-13 16:26:56'),
(59, 'permissions-edit', 'Permissões', 'permissions', NULL, '2018-12-13 16:26:56', '2018-12-13 16:26:56'),
(60, 'permissions-delete', 'Permissões', 'permissions', NULL, '2018-12-13 16:26:56', '2018-12-13 16:26:56'),
(61, 'themes-view', 'Publicações', 'themes', NULL, '2018-12-13 16:27:14', '2018-12-13 16:27:14'),
(62, 'themes-create', 'Publicações', 'themes', NULL, '2018-12-13 16:27:14', '2018-12-13 16:27:14'),
(63, 'themes-edit', 'Publicações', 'themes', NULL, '2018-12-13 16:27:14', '2018-12-13 16:27:14'),
(64, 'themes-delete', 'Publicações', 'themes', NULL, '2018-12-13 16:27:14', '2018-12-13 16:27:14'),
(65, 'users-view', 'Usuários', 'users', NULL, '2018-12-13 16:27:56', '2018-12-13 16:27:56'),
(66, 'users-create', 'Usuários', 'users', NULL, '2018-12-13 16:27:56', '2018-12-13 16:27:56'),
(67, 'users-edit', 'Usuários', 'users', NULL, '2018-12-13 16:27:56', '2018-12-13 16:27:56'),
(68, 'users-delete', 'Usuários', 'users', NULL, '2018-12-13 16:27:56', '2018-12-13 16:27:56'),
(69, 'approves-view', 'Aprovar Materia', 'approves', NULL, '2018-12-13 16:52:25', '2018-12-13 16:52:25'),
(70, 'approves-create', 'Aprovar Materia', 'approves', NULL, '2018-12-13 16:52:25', '2018-12-13 16:52:25'),
(71, 'approves-edit', 'Aprovar Materia', 'approves', NULL, '2018-12-13 16:52:25', '2018-12-13 16:52:25'),
(72, 'approves-delete', 'Aprovar Materia', 'approves', NULL, '2018-12-13 16:52:25', '2018-12-13 16:52:25'),
(73, 'authorize-view', 'Autorizar Matérias', 'authorize', NULL, '2018-12-13 16:52:40', '2018-12-13 16:52:40'),
(74, 'authorize-create', 'Autorizar Matérias', 'authorize', NULL, '2018-12-13 16:52:40', '2018-12-13 16:52:40'),
(75, 'authorize-edit', 'Autorizar Matérias', 'authorize', NULL, '2018-12-13 16:52:40', '2018-12-13 16:52:40'),
(76, 'authorize-delete', 'Autorizar Matérias', 'authorize', '2019-01-04 16:24:49', '2018-12-13 16:52:40', '2019-01-04 16:24:49'),
(77, 'publish-view', 'Publicar Matéria', 'publish', NULL, '2018-12-13 16:52:53', '2018-12-13 16:52:53'),
(78, 'publish-create', 'Publicar Matéria', 'publish', NULL, '2018-12-13 16:52:53', '2018-12-13 16:52:53'),
(79, 'publish-edit', 'Publicar Matéria', 'publish', NULL, '2018-12-13 16:52:53', '2018-12-13 16:52:53'),
(80, 'publish-delete', 'Publicar Matéria', 'publish', NULL, '2018-12-13 16:52:53', '2018-12-13 16:52:53'),
(81, 'editors-view', 'Editores', 'editors', NULL, '2019-01-22 17:36:19', '2019-01-22 17:36:19'),
(82, 'editors-create', 'Editores', 'editors', NULL, '2019-01-22 17:36:19', '2019-01-22 17:36:19'),
(83, 'editors-edit', 'Editores', 'editors', NULL, '2019-01-22 17:36:19', '2019-01-22 17:36:19'),
(84, 'editors-delete', 'Editores', 'editors', NULL, '2019-01-22 17:36:19', '2019-01-22 17:36:19'),
(85, 'entities-view', 'Entidades', 'entities', NULL, '2019-01-22 18:01:25', '2019-01-22 18:01:25'),
(86, 'entities-create', 'Entidades', 'entities', NULL, '2019-01-22 18:01:25', '2019-01-22 18:01:25'),
(87, 'entities-edit', 'Entidades', 'entities', NULL, '2019-01-22 18:01:25', '2019-01-22 18:01:25'),
(88, 'entities-delete', 'Entidades', 'entities', NULL, '2019-01-22 18:01:25', '2019-01-22 18:01:25'),
(89, 'linton-view', 'Permissão do linton', 'linton', NULL, '2019-02-12 16:58:14', '2019-02-12 16:58:14'),
(90, 'linton-create', 'Permissão do linton', 'linton', NULL, '2019-02-12 16:58:14', '2019-02-12 16:58:14'),
(91, 'linton-edit', 'Permissão do linton', 'linton', NULL, '2019-02-12 16:58:14', '2019-02-12 16:58:14'),
(92, 'linton-delete', 'Permissão do linton', 'linton', NULL, '2019-02-12 16:58:14', '2019-02-12 16:58:14'),
(97, 'usersoperationals-view', 'Usuários Operadores', 'usersoperationals', NULL, '2019-03-01 17:02:18', '2019-03-01 17:02:18'),
(98, 'usersoperationals-create', 'Usuários Operadores', 'usersoperationals', NULL, '2019-03-01 17:02:18', '2019-03-01 17:02:18'),
(99, 'usersoperationals-edit', 'Usuários Operadores', 'usersoperationals', NULL, '2019-03-01 17:02:18', '2019-03-01 17:02:18'),
(100, 'usersoperationals-delete', 'Usuários Operadores', 'usersoperationals', NULL, '2019-03-01 17:02:18', '2019-03-01 17:02:18'),
(105, 'sistemamenu-view', 'Permissão de visualizar menus', 'SistemaMenu', NULL, '2019-03-01 17:19:55', '2019-03-01 17:19:55'),
(106, 'sistemamenu-create', 'Permissão de visualizar menus', 'SistemaMenu', NULL, '2019-03-01 17:19:55', '2019-03-01 17:19:55'),
(107, 'sistemamenu-edit', 'Permissão de visualizar menus', 'SistemaMenu', NULL, '2019-03-01 17:19:55', '2019-03-01 17:19:55'),
(108, 'sistemamenu-delete', 'Permissão de visualizar menus', 'SistemaMenu', NULL, '2019-03-01 17:19:55', '2019-03-01 17:19:55'),
(109, 'cadastromenu-view', 'Permissão de visualizar menus', 'cadastroMenu', NULL, '2019-03-01 17:20:47', '2019-03-01 17:20:47'),
(110, 'cadastromenu-create', 'Permissão de visualizar menus', 'cadastroMenu', NULL, '2019-03-01 17:20:47', '2019-03-01 17:20:47'),
(111, 'cadastromenu-edit', 'Permissão de visualizar menus', 'cadastroMenu', NULL, '2019-03-01 17:20:47', '2019-03-01 17:20:47'),
(112, 'cadastromenu-delete', 'Permissão de visualizar menus', 'cadastroMenu', NULL, '2019-03-01 17:20:47', '2019-03-01 17:20:47');

-- --------------------------------------------------------

--
-- Estrutura para tabela `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
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
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(105, 1),
(109, 1),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 3),
(74, 3),
(75, 3),
(77, 3),
(78, 3),
(79, 3),
(80, 3),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(61, 4),
(62, 4),
(63, 4),
(64, 4),
(76, 4),
(85, 4),
(86, 4),
(87, 4),
(88, 4),
(97, 4),
(98, 4),
(99, 4),
(100, 4),
(105, 4),
(109, 4),
(13, 5),
(14, 5),
(15, 5),
(16, 5),
(61, 5),
(62, 5),
(63, 5),
(64, 5),
(76, 5),
(97, 5),
(98, 5),
(99, 5),
(100, 5),
(105, 5),
(109, 5),
(61, 6),
(62, 6),
(63, 6),
(64, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'Administrador do Sistema', NULL, '2018-12-12 13:55:11', '2018-12-12 13:55:11'),
(2, 'Editor', 'Editor de Publicações', NULL, '2018-12-12 13:56:17', '2019-04-02 18:36:01'),
(3, 'Diagramador', 'Diagramador de Publicações', NULL, '2018-12-12 16:54:40', '2018-12-12 16:54:40'),
(4, 'Gestor do Cliente', 'Gestor do Cliente', NULL, NULL, '2019-04-11 16:04:18'),
(5, 'Gestor da Entidade', 'Gestor de Entidade', NULL, '2018-12-13 16:17:29', '2018-12-13 16:17:29'),
(6, 'Operador', 'Operador de Publicações', NULL, '2018-12-13 16:17:45', '2018-12-13 16:17:45'),
(10, 'teste', 'tested', '2019-04-02 18:31:25', '2019-04-02 18:30:59', '2019-04-02 18:31:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(3, 2),
(2, 3),
(5, 40),
(6, 41),
(6, 44),
(4, 45),
(6, 46),
(6, 47),
(6, 48);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `sections`
--

INSERT INTO `sections` (`id`, `client_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Poder Executivo', NULL, '2019-03-04 16:04:04', '2019-03-04 16:04:04'),
(2, 1, 'Poder Legislativo', NULL, '2019-03-04 16:04:17', '2019-03-04 16:04:17'),
(3, 1, 'Poder Judiciário', NULL, '2019-03-04 16:04:31', '2019-03-04 16:04:31'),
(4, 1, 'Municipalidades', NULL, '2019-03-04 16:05:03', '2019-03-04 16:05:03'),
(5, 1, 'Publicações Diversas', NULL, '2019-03-04 16:05:27', '2019-03-04 16:05:27'),
(6, 2, 'Poder Executivo', NULL, '2019-03-25 14:34:35', '2019-03-25 14:34:35'),
(9, 10, 'Caderno I', NULL, '2019-06-02 22:45:57', '2019-06-02 22:45:57'),
(10, 10, 'Caderno II', NULL, '2019-06-02 22:46:23', '2019-06-02 22:46:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `spheres`
--

CREATE TABLE `spheres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `spheres`
--

INSERT INTO `spheres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ESTADUAL', NULL, NULL),
(2, 'MUNICIPAL', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `initials` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `states`
--

INSERT INTO `states` (`id`, `name`, `initials`, `created_at`, `updated_at`) VALUES
(1, 'Acre', 'AC', NULL, NULL),
(2, 'Alagoas', 'AL', NULL, NULL),
(3, 'Amazonas', 'AM', NULL, NULL),
(4, 'Amapá', 'AP', NULL, NULL),
(5, 'Bahia', 'BA', NULL, NULL),
(6, 'Ceará', 'CE', NULL, NULL),
(7, 'Distrito Federal', 'DF', NULL, NULL),
(8, 'Espírito Santo', 'ES', NULL, NULL),
(9, 'Goiás', 'GO', NULL, NULL),
(10, 'Maranhão', 'MA', NULL, NULL),
(11, 'Minas Gerais', 'MG', NULL, NULL),
(12, 'Mato Grosso do Sul', 'MS', NULL, NULL),
(13, 'Mato Grosso', 'MT', NULL, NULL),
(14, 'Pará', 'PA', NULL, NULL),
(15, 'Paraíba', 'PB', NULL, NULL),
(16, 'Pernambuco', 'PE', NULL, NULL),
(17, 'Piauí', 'PI', NULL, NULL),
(18, 'Paraná', 'PR', NULL, NULL),
(19, 'Rio de Janeiro', 'RJ', NULL, NULL),
(20, 'Rio Grande do Norte', 'RN', NULL, NULL),
(21, 'Rondônia', 'RO', NULL, NULL),
(22, 'Roraima', 'RR', NULL, NULL),
(23, 'Rio Grande do Sul', 'RS', NULL, NULL),
(24, 'Santa Catarina', 'SC', NULL, NULL),
(25, 'Sergipe', 'SE', NULL, NULL),
(26, 'São Paulo', 'SP', NULL, NULL),
(27, 'Tocantins', 'TO', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Verde', '#d630d6', NULL, '2018-11-21 13:45:15', '2018-11-21 14:00:12'),
(2, 'VERDE 2', '#ffff00', '2019-01-04 16:19:41', '2018-11-21 16:15:02', '2019-01-04 16:19:41');

-- --------------------------------------------------------

--
-- Estrutura para tabela `subtypes`
--

CREATE TABLE `subtypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `subtypes`
--

INSERT INTO `subtypes` (`id`, `type_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lei', NULL, '2019-03-04 16:35:44', '2019-03-04 16:35:44'),
(2, 1, 'Lei Complementar', NULL, '2019-03-04 16:35:56', '2019-03-04 16:35:56'),
(3, 1, 'Lei Delegada', NULL, '2019-03-04 16:36:06', '2019-03-04 16:36:06'),
(4, 1, 'Decreto', NULL, '2019-03-04 16:36:17', '2019-03-04 16:36:17'),
(5, 1, 'Extrato', NULL, '2019-03-04 16:37:22', '2019-03-04 16:37:22'),
(6, 1, 'Portaria', NULL, '2019-03-04 16:37:32', '2019-03-04 16:37:32'),
(7, 2, 'Parecer', NULL, '2019-03-04 16:38:46', '2019-03-04 16:38:46'),
(8, 3, 'Extrato', NULL, '2019-03-04 16:39:27', '2019-03-04 16:39:27'),
(9, 4, 'Aviso de Tomada de Preço', NULL, '2019-03-04 16:40:24', '2019-03-04 16:40:24'),
(10, 5, 'Deliberação', NULL, '2019-03-04 16:41:17', '2019-03-04 16:41:17'),
(11, 5, 'Extrato', NULL, '2019-03-04 16:41:27', '2019-03-04 16:41:27'),
(12, 5, 'Portaria', NULL, '2019-03-04 16:41:36', '2019-03-04 16:41:36'),
(13, 5, 'Termo de Ajuste de Contas', NULL, '2019-03-04 16:42:53', '2019-03-04 16:42:53'),
(14, 5, 'Termo de Contrato', NULL, '2019-03-04 16:43:23', '2019-03-04 16:43:23'),
(15, 5, 'Termo Aditivo', NULL, '2019-03-04 16:44:44', '2019-03-04 16:44:44'),
(16, 12, 'RGF -  I - Demonstrativo da Despesa com Pessoal', NULL, '2019-03-04 16:46:56', '2019-03-07 20:42:52'),
(17, 12, 'RGF - II - Demonstrativo da Dívida Consolidada Líquida', NULL, '2019-03-07 20:43:10', '2019-03-07 20:43:10'),
(18, 12, 'RGF - III - Demonstrativo das Garantias e Contra garantias de Valores', NULL, '2019-03-07 20:43:31', '2019-03-07 20:43:31'),
(19, 6, 'RGF - IV - Demonstrativo das Operações de Crédito', NULL, '2019-03-07 20:43:43', '2019-03-07 20:43:43'),
(20, 6, 'RGF - V - Demonstrativo da Disponibilidade de Caixa e dos Restos a Pagar', NULL, '2019-03-07 20:43:57', '2019-03-07 20:43:57'),
(21, 6, 'RGF - VI - Demonstrativo Simplificado do Relatório de Gestão Fiscal', NULL, '2019-03-07 20:44:09', '2019-03-07 20:44:09'),
(22, 6, 'RREO - I - BO - Balanço orçamentário', NULL, '2019-03-07 20:44:23', '2019-03-07 20:44:23'),
(23, 6, 'RREO - II - Função - Execução das despesas por função/subfunção', NULL, '2019-03-07 20:44:36', '2019-03-07 20:44:36'),
(24, 6, 'RREO - III - RCL - Receita corrente líquida', NULL, '2019-03-07 20:44:50', '2019-03-07 20:44:50'),
(25, 6, 'RREO - IV - RPPS - Receitas e despesas previdenciárias - RPPS', NULL, '2019-03-07 20:45:04', '2019-03-07 20:45:04'),
(26, 6, 'RREO - IX - Op. Crédito - Receitas de operação de crédito e despesas de capital', NULL, '2019-03-07 20:45:18', '2019-03-07 20:45:18'),
(27, 6, 'RREO - VIII - Ensino -	Receitas e despesas com MDE', NULL, '2019-03-07 20:45:31', '2019-03-07 20:45:31'),
(28, 6, 'RREO - VII - Restos a Pagar - Restos a pagar por poder e órgão', NULL, '2019-03-07 20:45:43', '2019-03-07 20:45:43'),
(29, 6, 'RREO - VI - Primário - Resultado primário', NULL, '2019-03-07 20:45:58', '2019-03-07 20:45:58'),
(30, 6, 'RREO - V	- Nominal - Resultado nominal', NULL, '2019-03-07 20:46:12', '2019-03-07 20:46:12'),
(31, 6, 'RREO - XI - Alienação -	Receita de alienação de ativos e aplicação dos recursos', NULL, '2019-03-07 20:46:27', '2019-03-07 20:46:27'),
(32, 6, 'RREO - XIII - PPP - Parcerias Público – Privadas', NULL, '2019-03-07 20:46:40', '2019-03-07 20:46:40'),
(33, 6, 'RREO - XII - Saúde - Receitas e Despesas com ASPS', NULL, '2019-03-07 20:46:52', '2019-03-07 20:46:52'),
(34, 6, 'RREO - XIV - Simplificado - Demonstrativo Simplificado RREO', NULL, '2019-03-07 20:47:04', '2019-03-07 20:47:04'),
(35, 6, 'RREO - X - Projeção RPPS - Projeção atuarial do regime de previdência', NULL, '2019-03-07 20:47:17', '2019-03-07 20:47:17'),
(36, 7, 'Lei Delegada', NULL, '2019-03-25 15:39:34', '2019-03-25 15:39:34'),
(37, 7, 'teste', '2019-03-25 15:42:22', '2019-03-25 15:42:00', '2019-03-25 15:42:22'),
(38, 7, 'vdds', '2019-03-25 16:45:00', '2019-03-25 16:44:47', '2019-03-25 16:45:00'),
(39, 7, 'Lei Orçamentárias', '2019-03-26 12:07:14', '2019-03-26 12:06:58', '2019-03-26 12:07:14'),
(40, 10, 'Lei', NULL, '2019-06-02 22:50:55', '2019-06-02 22:50:55'),
(41, 10, 'Portaria', NULL, '2019-06-02 22:51:55', '2019-06-02 22:51:55'),
(42, 10, 'Decreto', NULL, '2019-06-02 22:52:17', '2019-06-02 22:52:17'),
(43, 11, 'Extrato de Ata de Registro de Preço', NULL, '2019-06-02 22:53:35', '2019-06-02 22:53:35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `themes`
--

CREATE TABLE `themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED DEFAULT NULL,
  `message_id` int(10) UNSIGNED DEFAULT NULL,
  `daily_id` int(10) UNSIGNED NOT NULL,
  `agency_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `competence_id` int(10) UNSIGNED DEFAULT NULL,
  `layout_id` int(10) UNSIGNED NOT NULL,
  `repeated_id` int(11) DEFAULT NULL,
  `act` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_created` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_accepted` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `accepted_at` timestamp NULL DEFAULT NULL,
  `diagrammed_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Despejando dados para a tabela `themes`
--

INSERT INTO `themes` (`id`, `section_id`, `message_id`, `daily_id`, `agency_id`, `type_id`, `subtype_id`, `competence_id`, `layout_id`, `repeated_id`, `act`, `year`, `title`, `content`, `file`, `status`, `publish_number`, `user_created`, `user_accepted`, `accepted_at`, `diagrammed_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 9, NULL, 69, 142, 10, 40, NULL, 1, NULL, '18394', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.394/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.394/2019</b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica. </div>\r\n\r\n<br>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 272.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2985/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4251/00829, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 06-05-2008 a 05-05-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA AUXILIADORA DE LIMA CORR&Ecirc;A, </b>Professor N&iacute;vel Superior, matr&iacute;cula 072.470-0 C, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>\r\n\r\n <table>\r\n  <tr>\r\n    <th>Firstname</th>\r\n    <th>Lastname</th>\r\n    <th>Age</th>\r\n  </tr>\r\n  <tr>\r\n    <td>Jill</td>\r\n    <td>Smith</td>\r\n    <td>50</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Eve</td>\r\n    <td>Jackson</td>\r\n    <td>94</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Eve</td>\r\n    <td>Jackson</td>\r\n    <td>94</td>\r\n  </tr>\r\n  <tr>\r\n    <td>Eve</td>\r\n    <td>Jackson</td>\r\n    <td>94</td>\r\n  </tr>\r\n</table>', 'dev/diario/pm-modelo/files/theme20190603090842.docx', 'Aprovado', 'SVaKZ3', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:08:42', '2019-06-03 09:10:17'),
(4, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H64', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(5, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H65', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(6, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H66', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(7, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H67', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(9, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H69', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(10, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H610', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(11, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H611', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(12, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H612', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(16, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H616', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(17, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H617', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(18, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H618', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(19, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H619', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(20, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H620', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(21, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H621', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(22, 9, NULL, 69, 140, 10, 40, NULL, 1, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H622', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(23, 9, NULL, 69, 140, 10, 40, NULL, 2, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H623', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11');
INSERT INTO `themes` (`id`, `section_id`, `message_id`, `daily_id`, `agency_id`, `type_id`, `subtype_id`, `competence_id`, `layout_id`, `repeated_id`, `act`, `year`, `title`, `content`, `file`, `status`, `publish_number`, `user_created`, `user_accepted`, `accepted_at`, `diagrammed_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(31, 9, NULL, 69, 140, 10, 40, NULL, 2, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H631', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(32, 9, NULL, 69, 140, 10, 40, NULL, 2, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H632', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(33, 9, NULL, 69, 140, 10, 40, NULL, 2, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H633', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(35, 9, NULL, 69, 140, 10, 40, NULL, 2, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H635', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(36, 9, NULL, 69, 140, 10, 40, NULL, 2, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H636', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(37, 9, NULL, 69, 140, 10, 40, NULL, 2, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H637', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(38, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H638', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(42, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H642', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(43, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H643', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(44, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H644', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(46, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H646', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(47, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H647', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(48, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H648', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(49, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H649', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(53, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H653', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(54, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H654', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(55, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H655', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11');
INSERT INTO `themes` (`id`, `section_id`, `message_id`, `daily_id`, `agency_id`, `type_id`, `subtype_id`, `competence_id`, `layout_id`, `repeated_id`, `act`, `year`, `title`, `content`, `file`, `status`, `publish_number`, `user_created`, `user_accepted`, `accepted_at`, `diagrammed_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(56, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H656', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(57, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H657', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(58, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H658', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11'),
(59, 9, NULL, 69, 140, 10, 40, NULL, 3, NULL, '18393', '2019', 'PORTARIA POR DELEGAÇÃO Nº 18.393/2019', '<div align=\"center\"><b>PORTARIA POR DELEGA&Ccedil;&Atilde;O N&ordm; 18.393/2019</b></div>\r\n\r\n<div align=\"center\">&nbsp;</div>\r\n\r\n<div><b>CONCEDE </b>Licen&ccedil;a-Pr&ecirc;mio na forma que especifica.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><b>A SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL, </b>em exerc&iacute;cio, no uso da compet&ecirc;ncia que lhe confere o art. 128, inc. II, da Lei Org&acirc;nica do Munic&iacute;pio de Manaus, </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a delega&ccedil;&atilde;o de compet&ecirc;ncia firmada pelo Prefeito de Manaus no Decreto n&ordm; 3.085, republicado na Edi&ccedil;&atilde;o 3644 do DOM de 11-05-2015; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o art. 150 da Lei n&ordm; 1.118, de 01 de setembro de 1971 - Estatuto dos Servidores P&uacute;blicos do Munic&iacute;pio de Manaus; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o requerimento da servidora adiante identificada; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>as manifesta&ccedil;&otilde;es favor&aacute;veis da Chefia Imediata, da Ger&ecirc;ncia de Direitos e Deveres e da Divis&atilde;o de Pessoal da Secretaria Municipal de Educa&ccedil;&atilde;o &ndash; SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o disposto no Parecer n&ordm; 131.03.2019 &ndash; ASSJUR/SEMED, que opina pela possibilidade de deferimento do pleito; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o teor do Of&iacute;cio n&ordm; 2984/2019 &ndash; SEMED/GSAF, subscrito pelo Subsecret&aacute;rio de Administra&ccedil;&atilde;o e Finan&ccedil;as da SEMED; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>a an&aacute;lise da Divis&atilde;o de Acompanhamento de Pessoal e Gest&atilde;o de Benef&iacute;cios da Secretaria Municipal de Administra&ccedil;&atilde;o, Planejamento e Gest&atilde;o - SEMAD; </div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERANDO </b>o que consta nos autos do Processo n&ordm; 2018/4114/4241/01215, <b>resolve </b></div>\r\n\r\n<br>\r\n\r\n<div><b>CONSIDERAR CONCEDIDA</b>, a contar de 01-02-2019, pelo prazo de 06 (seis) meses, referente ao dec&ecirc;nio de 18-04-2008 a 17-04-2018, <b>LICEN&Ccedil;A-PR&Ecirc;MIO </b>&agrave; servidora <b>MARIA APARECIDA CALDEIRA DE SOUZA</b>, Professor N&iacute;vel Superior, matr&iacute;cula 114.839-7 A, integrante do quadro de pessoal da <b>SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O &ndash; SEMED. </b></div>\r\n\r\n<br>\r\n\r\n<div><b>GABINETE DA SUBSECRET&Aacute;RIA SUBCHEFE MUNICIPAL DE ASSUNTOS ADMINISTRATIVOS E DE GOVERNO DA CASA CIVIL</b>, em exerc&iacute;cio, em Manaus, 31 de maio de 2019.</div>', NULL, 'Aprovado', 'Xd8H659', '1', '1', '2019-06-07 00:00:00', '2019-06-10', NULL, '2019-06-03 09:07:26', '2019-06-03 09:10:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `types`
--

INSERT INTO `types` (`id`, `section_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Atos do Executivo', NULL, '2019-03-04 16:35:05', '2019-03-04 16:37:57'),
(2, 2, 'Atos do Legislativo', NULL, '2019-03-04 16:38:12', '2019-03-04 16:38:12'),
(3, 3, 'Atos do Judiciário', NULL, '2019-03-04 16:39:12', '2019-03-04 16:39:12'),
(4, 4, 'Atos dos Municípios', NULL, '2019-03-04 16:40:06', '2019-03-04 16:40:06'),
(5, 5, 'Atos Diversos', NULL, '2019-03-04 16:40:58', '2019-03-04 16:40:58'),
(6, 5, 'Relatórios de Gestão', NULL, '2019-03-04 16:46:28', '2019-03-04 16:46:28'),
(7, 6, 'Lei', NULL, '2019-03-25 15:11:46', '2019-03-25 15:39:06'),
(10, 9, 'Atos do Executivo', NULL, '2019-06-02 22:49:14', '2019-06-02 22:49:14'),
(11, 10, 'Atos Diversos', NULL, '2019-06-02 22:49:36', '2019-06-02 22:49:36'),
(12, 9, 'Relatórios de Gestão', NULL, '2019-06-02 22:54:32', '2019-06-02 22:54:32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `entity_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Administrador', 'admin@dd.com', NULL, '$2y$10$tYG861XMfNWlTXQ.4VtAcuv6KFkT90vr13sWe7Nu6yZKb9jJU2I6i', 'ACNw1d9oNcifMcwBGZlW7wQUlUPuW1dfnklelyoWB5EY0uiFajjewLYbrMnQ', NULL, NULL, NULL),
(2, NULL, 'Diagramador', 'diagramador@dd.com', NULL, '$2y$10$tYG861XMfNWlTXQ.4VtAcuv6KFkT90vr13sWe7Nu6yZKb9jJU2I6i', 'gK6PtEpdGY1VFbwcXhEqphiA9hAT7XT44tKrZITXYPNNkvNChMH07TwyV2ws', NULL, '2018-12-13 16:19:22', '2019-02-27 14:12:47'),
(3, NULL, 'Editor', 'editor@dd.com', NULL, '$2y$10$tYG861XMfNWlTXQ.4VtAcuv6KFkT90vr13sWe7Nu6yZKb9jJU2I6i', 'ypk8oqWpJVumbWFE5vCHCAA4J3cW14Iot0znfTq0d9v2PvUP4HAWcZ5ReHQD', NULL, '2018-12-13 16:19:44', '2018-12-13 16:19:44'),
(40, 7, 'Gestor AMAC Acrelandia', 'gestor@amac.com', NULL, '$2y$10$9hA0WE9A0.KuSRozOEQGwuNDU716jlgD5Vbs40HXqdEAmcBuk1ngW', 'XZf7VMh2k3osrVJirbtZzreQflglpRTTRw0FcwyMhvBMrWMJdfvANIhfpJVE', NULL, '2019-03-28 16:34:33', '2019-04-11 16:55:07'),
(41, 7, 'Operador', 'operador@gmail.com', NULL, '$2y$10$50VmmdeO4.ps1JrSrf9PK.3Mpd6pw4iWFtO9s7t25mHDc2Brx/mNq', 'BMfIR6SCovc3vrLuanFGBGNTC8UxOlklxDGKwqO8dFDm7snzdeUhZMlu7zvx', NULL, '2019-03-28 16:37:21', '2019-03-28 16:37:21'),
(44, 7, 'Operador Acrelandia SEMEF', 'ope-acrelandia-semef@gmail.com', NULL, '$2y$10$chK4SZ7N6PR14mW1WNRLB.FT1oHAWPlseanrc0jue1u3XxCsEpQPO', 'r7qAKJZWSLAAObN7D1bsMhu4Cjdc0GUxbeiZ3sjDfcqe9kr15hgtz2CZDuvn', NULL, '2019-03-28 17:30:13', '2019-03-28 17:30:13'),
(45, NULL, 'Gestor IMPE-AM', 'gestor@impe-am.com', NULL, '$2y$10$4Iyogh6d0FMwVP.nX5U/y.1FABegqXjyTRjpYc9NQORZG5ULpKrem', 'kvTOLKzLlUjvcmbgtgGmGIeRnPw6GLxqcqoSMzJ4tB3GPbvKIYeK2zTIIFc2', NULL, '2019-04-05 10:20:57', '2019-04-05 10:20:57'),
(46, NULL, 'Operador CRC-AM', 'operador-crcam@gmail.com', NULL, '$2y$10$bcD.Th8huhO7w2VDbS1jy.Q6vx2BafNgVBfxc5KkacCU.qSEh2USe', NULL, NULL, '2019-04-11 16:37:09', '2019-04-11 16:37:09'),
(47, 10, 'Operador SEMAD', 'operador@semad.com', NULL, '$2y$10$PXDZuCH1kjvvXiJU1KOZVez4yvbCbNjHHFNkDY9FmEfUgMfCBbvm6', 'rkMrjDz8LbpwlhfAYOsDtiAsfpQzIpg3QlX9F4Wu1MLAIUzlFOeK8ygPmLZ2', NULL, '2019-06-02 23:01:40', '2019-06-02 23:01:40'),
(48, 10, 'Operador SEMEF', 'operador@semef.com', NULL, '$2y$10$2mZclJh4npPEFwE6hiXTw.JrWRG69bvymPerdkcnNgeRYVCm/QY7.', NULL, NULL, '2019-06-02 23:02:10', '2019-06-02 23:02:10');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agencies_entity_id_foreign` (`entity_id`),
  ADD KEY `agencies_category_id_foreign` (`category_id`);

--
-- Índices de tabela `agency_user`
--
ALTER TABLE `agency_user`
  ADD PRIMARY KEY (`agency_id`,`user_id`),
  ADD KEY `agency_user_user_id_foreign` (`user_id`);

--
-- Índices de tabela `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branches_sphere_id_foreign` (`sphere_id`);

--
-- Índices de tabela `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calendars_client_id_foreign` (`client_id`);

--
-- Índices de tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_branch_id_foreign` (`branch_id`);

--
-- Índices de tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_layout_pattern_id_foreign` (`layout_pattern_id`);

--
-- Índices de tabela `client_user`
--
ALTER TABLE `client_user`
  ADD PRIMARY KEY (`client_id`,`user_id`),
  ADD KEY `clients_users_user_id_foreign` (`user_id`);

--
-- Índices de tabela `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dailies`
--
ALTER TABLE `dailies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dailies_client_id_foreign` (`client_id`);

--
-- Índices de tabela `daily_theme`
--
ALTER TABLE `daily_theme`
  ADD PRIMARY KEY (`daily_id`,`theme_id`),
  ADD KEY `daily_theme_theme_id_foreign` (`theme_id`);

--
-- Índices de tabela `entities`
--
ALTER TABLE `entities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entities_state_id_foreign` (`state_id`);

--
-- Índices de tabela `entity_section`
--
ALTER TABLE `entity_section`
  ADD PRIMARY KEY (`entity_id`,`section_id`),
  ADD KEY `entity_section_section_id_foreign` (`section_id`);

--
-- Índices de tabela `entity_user`
--
ALTER TABLE `entity_user`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layouts`
--
ALTER TABLE `layouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `layouts_layout_pattern_id_foreign` (`layout_pattern_id`);

--
-- Índices de tabela `layout_patterns`
--
ALTER TABLE `layout_patterns`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permissions_roles_role_id_foreign` (`role_id`);

--
-- Índices de tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `roles_users_user_id_foreign` (`user_id`);

--
-- Índices de tabela `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_client_id_foreign` (`client_id`);

--
-- Índices de tabela `spheres`
--
ALTER TABLE `spheres`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `subtypes`
--
ALTER TABLE `subtypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subtypes_type_id_foreign` (`type_id`);

--
-- Índices de tabela `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `themes_daily_id_foreign` (`daily_id`),
  ADD KEY `themes_agency_id_foreign` (`agency_id`),
  ADD KEY `themes_type_id_foreign` (`type_id`),
  ADD KEY `themes_subtype_id_foreign` (`subtype_id`),
  ADD KEY `themes_layout_id_foreign` (`layout_id`),
  ADD KEY `themes_competence_id_foreign` (`competence_id`),
  ADD KEY `themes_message_id_foreign` (`message_id`),
  ADD KEY `themes_section_id_foreign` (`section_id`);

--
-- Índices de tabela `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `types_section_id_foreign` (`section_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_entity_id_foreign` (`entity_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de tabela `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `dailies`
--
ALTER TABLE `dailies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `entities`
--
ALTER TABLE `entities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `entity_user`
--
ALTER TABLE `entity_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `layouts`
--
ALTER TABLE `layouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `layout_patterns`
--
ALTER TABLE `layout_patterns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `spheres`
--
ALTER TABLE `spheres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `subtypes`
--
ALTER TABLE `subtypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `agencies`
--
ALTER TABLE `agencies`
  ADD CONSTRAINT `agencies_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `agencies_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entities` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `agency_user`
--
ALTER TABLE `agency_user`
  ADD CONSTRAINT `agency_user_agency_id_foreign` FOREIGN KEY (`agency_id`) REFERENCES `agencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `agency_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_sphere_id_foreign` FOREIGN KEY (`sphere_id`) REFERENCES `spheres` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `calendars`
--
ALTER TABLE `calendars`
  ADD CONSTRAINT `calendars_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_layout_pattern_id_foreign` FOREIGN KEY (`layout_pattern_id`) REFERENCES `layout_patterns` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `client_user`
--
ALTER TABLE `client_user`
  ADD CONSTRAINT `clients_users_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clients_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `dailies`
--
ALTER TABLE `dailies`
  ADD CONSTRAINT `dailies_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `daily_theme`
--
ALTER TABLE `daily_theme`
  ADD CONSTRAINT `daily_theme_daily_id_foreign` FOREIGN KEY (`daily_id`) REFERENCES `dailies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_theme_theme_id_foreign` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `entities`
--
ALTER TABLE `entities`
  ADD CONSTRAINT `entities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `entity_section`
--
ALTER TABLE `entity_section`
  ADD CONSTRAINT `entity_section_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `entity_section_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `layouts`
--
ALTER TABLE `layouts`
  ADD CONSTRAINT `layouts_layout_pattern_id_foreign` FOREIGN KEY (`layout_pattern_id`) REFERENCES `layout_patterns` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permissions_roles_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permissions_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `roles_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `subtypes`
--
ALTER TABLE `subtypes`
  ADD CONSTRAINT `subtypes_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `themes`
--
ALTER TABLE `themes`
  ADD CONSTRAINT `themes_agency_id_foreign` FOREIGN KEY (`agency_id`) REFERENCES `agencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `themes_competence_id_foreign` FOREIGN KEY (`competence_id`) REFERENCES `competences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `themes_daily_id_foreign` FOREIGN KEY (`daily_id`) REFERENCES `dailies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `themes_layout_id_foreign` FOREIGN KEY (`layout_id`) REFERENCES `layouts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `themes_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`),
  ADD CONSTRAINT `themes_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `themes_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `subtypes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `themes_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
