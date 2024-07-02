SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `workout_gym`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs_treinos_usuario`
--

CREATE TABLE `logs_treinos_usuario` (
  `id` int(11) NOT NULL,
  `timestamp` int(20) NOT NULL,
  `acao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `treino`
--

CREATE TABLE `treino` (
  `id` int(11) NOT NULL,
  `nome_identificador` varchar(250) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `treino`
--

INSERT INTO `treino` (`id`, `nome_identificador`, `nome`) VALUES
(1, 'agachamento', 'Agachamento'),
(2, 'levantamento-terra', 'Levantamento Terra'),
(3, 'supino', 'Supino'),
(4, 'remada-curvada', 'Remada Curvada'),
(5, 'desenvolvimento-ombros', 'Desenvolvimento de Ombros'),
(6, 'rosca-biceps', 'Rosca Bíceps'),
(7, 'triceps-pulley', 'Tríceps no Pulley'),
(8, 'leg-press', 'Leg Press'),
(9, 'extensao-perna', 'Extensão de Perna'),
(10, 'flexao-perna', 'Flexão de Perna'),
(11, 'puxada-polia', 'Puxada na Polia'),
(12, 'remada-sentada', 'Remada Sentada'),
(13, 'abdominal-maquina', 'Abdominal na Máquina'),
(14, 'crossover-cabos', 'Crossover de Cabos'),
(15, 'elevacao-panturrilha', 'Elevação de Panturrilha'),
(16, 'rosca-martelo', 'Rosca Martelo'),
(17, 'triceps-testa', 'Tríceps Testa'),
(18, 'abducao-quadril', 'Abdução de Quadril');

-- --------------------------------------------------------

--
-- Estrutura para tabela `treinos_usuario`
--

CREATE TABLE `treinos_usuario` (
  `id` int(11) NOT NULL,
  `treino` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `categoria` enum('Normal','Administrador') NOT NULL,
  `cadastrado_em` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `logs_treinos_usuario`
--
ALTER TABLE `logs_treinos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `treinos_usuario`
--
ALTER TABLE `treinos_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `treinos-usuario_usuario` (`usuario`),
  ADD KEY `treinos-usuario_treino` (`treino`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `logs_treinos_usuario`
--
ALTER TABLE `logs_treinos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `treino`
--
ALTER TABLE `treino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `treinos_usuario`
--
ALTER TABLE `treinos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `treinos_usuario`
--
ALTER TABLE `treinos_usuario`
  ADD CONSTRAINT `treinos-usuario_treino` FOREIGN KEY (`treino`) REFERENCES `treino` (`id`),
  ADD CONSTRAINT `treinos-usuario_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
