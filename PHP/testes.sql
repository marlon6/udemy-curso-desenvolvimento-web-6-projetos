-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 06:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_funcionarios`
--

CREATE TABLE `tb_funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `matricula` varchar(20) DEFAULT NULL,
  `data_admissao` datetime DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_funcionarios`
--

INSERT INTO `tb_funcionarios` (`id_funcionario`, `matricula`, `data_admissao`, `idade`, `sexo`, `nome`) VALUES
(1, '1672', '2016-07-13 00:00:00', 19, 'M', 'Fernando Silva'),
(2, '1805', '2016-11-09 00:00:00', 25, 'F', 'Maria Rosa'),
(3, '1953', '2016-04-14 00:00:00', 34, 'M', 'Carlos Alberto'),
(4, '1691', '2016-09-03 00:00:00', 23, 'M', 'Henrique Oliveira'),
(5, '1159', '2016-09-22 00:00:00', 49, 'F', 'Juliana Torres'),
(6, '1089', '2015-06-10 00:00:00', 38, 'M', 'Marcos Lopes'),
(7, '1475', '2016-10-30 00:00:00', 33, 'M', 'Bruno Alencar'),
(8, '1948', '2016-10-15 00:00:00', 39, 'F', 'Eliana Rocha'),
(9, '1577', '2016-07-31 00:00:00', 56, 'M', 'Júlio Cruz'),
(10, '1381', '2015-08-17 00:00:00', 47, 'F', 'Fátima Santana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_funcionarios_dados_contato`
--

CREATE TABLE `tb_funcionarios_dados_contato` (
  `id_funcionarios_dados_contato` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `telefone_fixo` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_funcionarios_dados_contato`
--

INSERT INTO `tb_funcionarios_dados_contato` (`id_funcionarios_dados_contato`, `id_funcionario`, `telefone_fixo`, `telefone_celular`) VALUES
(1, 1, '113362-2236', '1195533-3355'),
(2, 10, '115566-2236', '1199933-3665'),
(3, 3, '115485-5566', '1196578-2542'),
(4, 6, '113321-6654', '1198754-6541'),
(5, 8, '113335-2547', '1195533-3547'),
(6, 4, '113367-4236', '1193697-7412'),
(7, 2, '115756-8485', '1196593-4565'),
(8, 7, '113777-2278', '1197777-4433'),
(9, 9, '115362-5678', '1197853-3355'),
(10, 5, '113462-5536', '1194578-3254');

-- --------------------------------------------------------

--
-- Table structure for table `tb_funcionarios_dados_endereco`
--

CREATE TABLE `tb_funcionarios_dados_endereco` (
  `id_funcionario_dados_endereco` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_funcionarios_dados_endereco`
--

INSERT INTO `tb_funcionarios_dados_endereco` (`id_funcionario_dados_endereco`, `id_funcionario`, `endereco`, `cidade`, `bairro`, `cep`, `uf`) VALUES
(1, 4, 'Rua dos autonomistas', 'São Paulo', 'Jd Conceição', '03355-045', 'SP'),
(2, 3, 'Rua Dr. Arnaldo', 'Alto Rio Doce', 'Parque Fortes', '00348-500', 'MG'),
(3, 7, 'Avenida Glória', 'Cuiabá', 'São Tomé das Letras', '66633-148', 'MT'),
(4, 1, 'Rua das flores', 'São Paulo', 'Jd Amélia', '04848-048', 'SP'),
(5, 10, 'Rua Alencar de Souza', 'Caicó', 'Sítio açu', '33001-000', 'RN'),
(6, 5, 'Avenida Guararapes', 'Curitiba', 'Cruzeiro do Sul', '15435-222', 'PR'),
(7, 2, 'Avenida dos caçadores', 'Rio de Janeiro', 'Santa Luz', '03520-001', 'RJ'),
(8, 8, 'Avenida Esperança', 'Goiânia', 'Goiânia', '04558-010', 'GO'),
(9, 6, 'Rua dos Vingadores', 'São Paulo', 'Santo Amaro', '55634-001', 'SP'),
(10, 9, 'Rua Aclimação', 'Salvador', 'Abaré', '00133-333', 'BA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pessoas`
--

CREATE TABLE `tb_pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `interesse` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pessoas`
--

INSERT INTO `tb_pessoas` (`id`, `nome`, `idade`, `interesse`, `email`, `estado`) VALUES
(1, 'Reed Knox', 37, 'Música', 'augue.Sed@cursus.co.uk', 'MA'),
(3, 'Ana Maria Eduarda', 89, 'Informática', 'odio@duiFuscealiquam.com', 'MA'),
(4, 'Wyoming Hooper', 33, 'Música', 'ut@Curabitur.org', 'BA'),
(6, 'Nathaniel Valenzuela', 66, 'Informática', 'Ut.nec@nequeNullam.ca', 'RS'),
(7, 'Reed Baxter', 41, 'Jogos', 'in@justo.net', 'PR'),
(8, 'Clark Hale', 26, 'Música', 'in.consequat.enim@purus.net', 'MG'),
(9, 'Zachary Ewing', 65, 'Música', 'massa@etipsumcursus.com', 'GO'),
(10, 'Shelby Hamilton', 77, 'Música', 'diam@Aliquam.net', 'MG'),
(11, 'Sopoline Castillo', 18, 'Informática', 'sit.amet@arcu.ca', 'SP'),
(12, 'Caleb Hobbs', 63, 'Jogos', 'feugiat@rhoncusDonecest.edu', 'RS'),
(13, 'Melissa Mcneil', 83, 'Informática', 'eu@egestasFuscealiquet.co.uk', 'GO'),
(14, 'Claudinho Claudez', 45, 'Comida', 'casadobolo@casadobolo.com', 'RJ'),
(15, 'Ferdinand Melton', 30, 'Esporte', 'eleifend@Donecconsectetuer.com', 'PR'),
(16, 'Murphy Velasquez', 6, 'Música', 'ipsum.dolor.sit@eliterat.co.uk', 'PR'),
(17, 'Blossom Trujillo', 34, 'Informática', 'a.ultricies@adipiscingligula.com', 'SP'),
(18, 'Victor Schroeder', 77, 'Informática', 'nulla@sem.org', 'SC'),
(19, 'Ayanna Mann', 17, 'Música', 'blandit@interdum.net', 'PR'),
(20, 'Jermaine Brady', 44, 'Saúde', 'Vivamus.euismod@eratVivamus.com', 'MG'),
(21, 'Amber Cummings', 64, 'Esporte', 'ligula.elit@consequatenimdiam.com', 'RS'),
(22, 'Walker Cox', 80, 'Informática', 'nisi.sem.semper@Duiselementumdui.net', 'MG'),
(23, 'Jarrod Hartman', 56, 'Música', 'dui@lacusUt.edu', 'SP'),
(24, 'Bernard Howard', 9, 'Esporte', 'sed.libero@Loremipsum.ca', 'MG'),
(25, 'Yuri Hardy', 56, 'Saúde', 'vehicula.Pellentesque.tincidunt@lobortisnisinibh.co.uk', 'RS'),
(26, 'Aurelia Terry', 59, 'Jogos', 'et@in.co.uk', 'SP'),
(27, 'Scarlet Blankenship', 24, 'Saúde', 'Nunc@mattis.co.uk', 'CE'),
(28, 'Dean Suarez', 76, 'Saúde', 'Morbi.sit@urnaconvalliserat.co.uk', 'MA'),
(29, 'Joy Lowe', 29, 'Música', 'et@enim.ca', 'SC'),
(30, 'Phillip Moody', 61, 'Esporte', 'justo.Praesent.luctus@Aliquamnecenim.com', 'RS'),
(31, 'Shellie Gordon', 37, 'Jogos', 'fringilla.cursus.purus@libero.org', 'BA'),
(32, 'Anjolie Skinner', 34, 'Jogos', 'amet.ornare@nonduinec.co.uk', 'GO'),
(33, 'Brielle Browning', 12, 'Jogos', 'risus@egestas.ca', 'PR'),
(34, 'Dahlia May', 58, 'Jogos', 'tempus.mauris.erat@erat.org', 'SP'),
(35, 'Brandon Rosales', 76, 'Saúde', 'Aliquam.tincidunt.nunc@CraspellentesqueSed.org', 'RS'),
(36, 'Clare Levy', 5, 'Informática', 'lorem@id.com', 'PE'),
(37, 'Brent Moon', 62, 'Jogos', 'nunc.risus@nuncinterdum.net', 'MG'),
(38, 'Gloria Conley', 55, 'Jogos', 'posuere@enim.org', 'MA'),
(39, 'Ivory Weiss', 43, 'Informática', 'odio.semper@lectusconvallis.net', 'MG'),
(40, 'Quentin Rosario', 6, 'Esporte', 'sit.amet.lorem@Aliquam.ca', 'RJ'),
(41, 'Keegan Spears', 11, 'Informática', 'arcu.iaculis.enim@tellus.net', 'CE'),
(42, 'Addison Cruz', 71, 'Esporte', 'Pellentesque.habitant@Curabitur.net', 'PE'),
(43, 'Charlotte Rhodes', 71, 'Saúde', 'eu.odio.Phasellus@lobortisnisi.com', 'MA'),
(44, 'Sheila Melendez', 33, 'Jogos', 'semper.erat@maurisrhoncusid.net', 'BA'),
(45, 'Madaline Sloan', 19, 'Música', 'semper.rutrum.Fusce@risusQuisque.com', 'RS'),
(46, 'Wynter Herrera', 57, 'Informática', 'ultricies.ornare@odioa.org', 'BA'),
(47, 'Zenia Dominguez', 9, 'Esporte', 'semper.Nam.tempor@necluctus.ca', 'MG'),
(48, 'Leroy Burton', 12, 'Informática', 'nisl@eleifend.co.uk', 'RJ'),
(49, 'Regan Foley', 39, 'Saúde', 'consectetuer.rhoncus.Nullam@a.org', 'SP'),
(50, 'Xanthus Wagner', 88, 'Informática', 'mauris.Integer@cursus.ca', 'SP'),
(51, 'Josiah Bentley', 72, 'Música', 'Suspendisse.ac.metus@massa.edu', 'PE'),
(52, 'Ingrid Perkins', 72, 'Esporte', 'auctor.non.feugiat@aliquetodio.edu', 'PE'),
(53, 'Chloe Emerson', 36, 'Saúde', 'quam@Loremipsumdolor.edu', 'MG'),
(54, 'Plato Norman', 29, 'Esporte', 'Phasellus.vitae.mauris@ProinultricesDuis.net', 'BA'),
(55, 'Rhea Graham', 56, 'Informática', 'sapien@dictum.org', 'SP'),
(56, 'Jocelyn Johns', 58, 'Música', 'sed@utsem.com', 'RJ'),
(57, 'Fritz Rosales', 80, 'Informática', 'neque@Nunc.ca', 'RJ'),
(58, 'Carter Phillips', 73, 'Informática', 'dolor@risusDonecnibh.net', 'CE'),
(59, 'Orson Cantu', 28, 'Música', 'Sed@ametrisusDonec.ca', 'BA'),
(60, 'Yeo Wyatt', 31, 'Saúde', 'dolor.Nulla@nequeNullamut.com', 'CE'),
(61, 'Summer Watts', 69, 'Jogos', 'lorem@Donecconsectetuer.org', 'RJ'),
(62, 'Clinton Eaton', 3, 'Jogos', 'dapibus@ornaresagittisfelis.com', 'SP'),
(63, 'Edan Gutierrez', 69, 'Música', 'tellus.Nunc.lectus@magnisdis.com', 'RJ'),
(64, 'Keefe Harmon', 78, 'Saúde', 'penatibus.et@ac.ca', 'SP'),
(65, 'Jocelyn Bush', 41, 'Esporte', 'porttitor.scelerisque@magnamalesuada.org', 'SP'),
(66, 'Porter Sharpe', 47, 'Informática', 'Sed@tristiquesenectus.edu', 'PA'),
(67, 'Odessa Benson', 56, 'Esporte', 'sit@semper.co.uk', 'RJ'),
(68, 'Hoyt Armstrong', 43, 'Música', 'sem.mollis.dui@dictumeueleifend.com', 'CE'),
(69, 'Nolan Gillespie', 77, 'Informática', 'sed@acmattis.ca', 'CE'),
(70, 'Cassandra Wallace', 84, 'Informática', 'quam.a@eu.org', 'SP'),
(71, 'Katell Navarro', 58, 'Esporte', 'consequat@nibh.net', 'GO'),
(72, 'Kelly Chang', 61, 'Esporte', 'neque.Morbi.quis@montesnascetur.net', 'CE'),
(73, 'Ria Guy', 80, 'Informática', 'habitant@euultrices.net', 'BA'),
(74, 'Maisie Kramer', 33, 'Saúde', 'aliquet@auguescelerisque.net', 'SP'),
(75, 'Haviva Knight', 51, 'Música', 'dolor.tempus@metussit.co.uk', 'MA'),
(76, 'Colt Payne', 45, 'Saúde', 'lacinia@tellusloremeu.org', 'PE'),
(77, 'Wylie Berry', 11, 'Esporte', 'Nam@urna.co.uk', 'MG'),
(78, 'Medge Burks', 54, 'Saúde', 'sollicitudin@arcuacorci.edu', 'PE'),
(79, 'Martena Barnes', 36, 'Esporte', 'tellus.Nunc@lectusNullamsuscipit.co.uk', 'PE'),
(80, 'Hasad Fowler', 73, 'Música', 'nibh.Phasellus@dui.net', 'PE'),
(81, 'Dante Hardin', 35, 'Saúde', 'ornare.Fusce.mollis@Nulla.ca', 'CE'),
(82, 'Danielle Barr', 43, 'Informática', 'id@lacus.ca', 'SP'),
(83, 'Dexter Richmond', 6, 'Jogos', 'magna@Aliquamultricesiaculis.com', 'BA'),
(84, 'Kylie Baird', 66, 'Música', 'eu.elit.Nulla@nuncQuisque.edu', 'PR'),
(85, 'David Patterson', 34, 'Esporte', 'rutrum@euultrices.edu', 'RJ'),
(86, 'Zachary Gonzalez', 67, 'Saúde', 'adipiscing.Mauris@semelit.org', 'GO'),
(87, 'Dolan Slater', 26, 'Jogos', 'nec.enim@idmagna.edu', 'GO'),
(88, 'Wanda Joseph', 15, 'Saúde', 'sem.magna.nec@mattisornarelectus.com', 'PE'),
(89, 'Wynne Small', 62, 'Esporte', 'Maecenas.iaculis.aliquet@urna.edu', 'PB'),
(90, 'Zachary Graham', 54, 'Informática', 'primis@Donec.edu', 'CE'),
(91, 'Ulla Maynard', 70, 'Saúde', 'nunc.Quisque@loremsitamet.org', 'MA'),
(92, 'Kiara Guy', 35, 'Jogos', 'ipsum.Donec.sollicitudin@diam.ca', 'MG'),
(93, 'Hedley Curtis', 59, 'Música', 'sed.turpis@lacus.co.uk', 'PB'),
(94, 'Evangeline Bird', 60, 'Saúde', 'scelerisque.mollis@Suspendisse.net', 'GO'),
(95, 'Ignacia Young', 9, 'Jogos', 'vel.venenatis@ligula.net', 'BA'),
(96, 'Cheyenne Watts', 51, 'Jogos', 'pede.Cras.vulputate@enim.org', 'MG'),
(97, 'Mikayla Dickerson', 81, 'Informática', 'Etiam@Naminterdum.co.uk', 'SP'),
(98, 'Clare Dudley', 14, 'Jogos', 'lobortis@posuere.edu', 'MG'),
(99, 'Charity Gordon', 17, 'Saúde', 'dictum.mi@orciUtsagittis.com', 'BA'),
(100, 'Caesar Wall', 36, 'Esporte', 'Phasellus.fermentum@Nullamsuscipitest.org', 'SP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `tb_funcionarios_dados_contato`
--
ALTER TABLE `tb_funcionarios_dados_contato`
  ADD PRIMARY KEY (`id_funcionarios_dados_contato`),
  ADD KEY `id_funcionario` (`id_funcionario`);

--
-- Indexes for table `tb_funcionarios_dados_endereco`
--
ALTER TABLE `tb_funcionarios_dados_endereco`
  ADD PRIMARY KEY (`id_funcionario_dados_endereco`),
  ADD KEY `id_funcionario` (`id_funcionario`);

--
-- Indexes for table `tb_pessoas`
--
ALTER TABLE `tb_pessoas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_funcionarios_dados_contato`
--
ALTER TABLE `tb_funcionarios_dados_contato`
  MODIFY `id_funcionarios_dados_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_funcionarios_dados_endereco`
--
ALTER TABLE `tb_funcionarios_dados_endereco`
  MODIFY `id_funcionario_dados_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pessoas`
--
ALTER TABLE `tb_pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_funcionarios_dados_contato`
--
ALTER TABLE `tb_funcionarios_dados_contato`
  ADD CONSTRAINT `tb_funcionarios_dados_contato_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `tb_funcionarios` (`id_funcionario`);

--
-- Constraints for table `tb_funcionarios_dados_endereco`
--
ALTER TABLE `tb_funcionarios_dados_endereco`
  ADD CONSTRAINT `tb_funcionarios_dados_endereco_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `tb_funcionarios` (`id_funcionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
