drop database if exists oficinarodriguez;
create database oficinarodriguez;
use oficinarodriguez;

create table if not exists cliente(
    id int auto_increment primary key,
    nome varchar(50),
    senha varchar(50),
    email varchar(50),
    fone bigint(13),
    endereco varchar(100)
);

create table if not exists carro(
    id int auto_increment primary key,
    idcliente int,
    placa varchar(11),
    modelo varchar(50),
    marca varchar(50),
    ano year,
    cor varchar(20),
    foreign key (idcliente) references cliente(id)
);
create table if not exists funcionario(
    id int auto_increment primary key,
    nome varchar(50),
    email varchar(50),
    senha varchar(50),
    funcao varchar(50),
    fone bigint(13)
    
);

create table if not exists peca(
    id int auto_increment primary key,
    nome varchar(100),
    tipo varchar(50),
    preco float,
    estoque int,
    descricao text,
    imagem varchar(70)
);

create table if not exists costumizacao(
    id int auto_increment primary key,
    idpeca int,
    idcarro int,
    idcliente int,
    idfuncionario int,
    valortotal float,
    dataentrada date,
    datasaida date,
    foreign key (idpeca) references peca(id),
    foreign key (idcarro) references carro(id),
    foreign key (idcliente) references cliente(id),
    foreign key (idfuncionario) references funcionario(id)
);

create table if not exists servicos(
    id int auto_increment primary key,
    idcarro int,
    idcliente int,
    idfuncionario int,
    valortotal float,
    dataentrada date,
    datasaida date,
    foreign key (idcarro) references carro(id),
    foreign key (idcliente) references cliente(id),
    foreign key (idfuncionario) references funcionario(id)
);
create table if not exists carrinho(
	id int auto_increment primary key,
    idcliente int,
    nomePeca int,
    precoPeca int,
    foreign key (idcliente) references cliente(id)
);

create table if not exists portifolios(
    id int auto_increment primary key,
    imagem varchar(45),
    nome varchar(45),
    descricao text
);

insert into cliente (nome,senha,email,fone,endereco) values('Lucas Morais da Silva','senha123@','lucasqy77@gmail.com','984274908','Cerrito, Santa Maria - RS');
insert into cliente (nome,senha,email,fone,endereco) values('Enzo Augusto Mucha','123456','eznoamd6@gmail.com','97273502','Juscelino Kubitschek, Santa Maria - RS');


insert into carro (placa,modelo,marca,ano,cor,idcliente) values('LUCA7777','Honda Civic','Honda','2023','azul',1);
insert into carro (placa,modelo,marca,ano,cor,idcliente) values('ENZO6666','Astra','Chevrolet','2014','vermelho',2);


insert into funcionario (id, nome, email, senha, funcao, fone) values(0, 'Rian Deroci Rodrigues', 'rianroder@gmail.com', 'asasas','Dono','96546070');
insert into funcionario (nome, email, senha, funcao, fone) values('Eduardo Gindri', 'eduardoreis@gmail.com', '12345', 'Mecanico','84040000');

insert into portifolios (imagem, nome, descricao) values ('port1.jpg','Fiat Ferrari', 'O modelo foi meticulosamente construído a partir de um Fiat Uno 95 branco, passando por um processo artesanal que envolveu a incorporação cuidadosa de detalhes feitos de papelão. Cada peça foi habilmente moldada e adicionada, simulando com precisão os componentes distintivos de uma Ferrari, desde as linhas aerodinâmicas até os contornos elegantes. A meticulosidade na replicação destaca-se na atenção aos detalhes, criando uma ilusão visual envolvente que faz com que o espectador aprecie a transformação do humilde Fiat Uno em uma representação única e estilizada de luxo automotivo.');
insert into portifolios (imagem, nome, descricao) values ('port2.jpg','Ford Maverick GT 302 FASE 2', 'Esse Ford Maverick foi refeito usando um legítimo Ford Americano caracterizado como FORD MAVERICK GT fase 2 cujo só foi fabricado e lançado no Brasil. Esse carro esta com um Motor V8 302 com Carburador Holley 750, ignição eletronica MSD, escapamento em X-Pipe com saidas nas laterais, transmissão 5 Marchas (T-5), disco de embreagem de ceramica, Diferencial auto blocante, freios a Disco Mustang GT 96 nas 4 rodas, interior em preto e com Bancos elétricos do Nissan 350z.');
insert into portifolios (imagem, nome, descricao) values ('port3.jpg','Opala Apel Edition', 'Esta obra-prima automotiva é uma fusão envolvente entre o clássico Opala brasileiro e o icônico estilo do Impala, harmoniosamente incorporado com a distinta carroceria do Opel alemão. Cada detalhe reflete a habilidade artística do criador, desde a grade frontal imponente e cromada até os para-choques finamente trabalhados que evocam o charme atemporal dos automóveis clássicos. O interior é uma sinfonia de conforto e sofisticação, onde detalhes personalizados como revestimentos em couro genuíno e painéis de madeira finamente trabalhada complementam a experiência luxuosa.');
insert into portifolios (imagem, nome, descricao) values ('port4.jpg','Saleen Xquisite','O Saleen S281 é uma mescla impressionante de potência e elegância. Seu motor cromado exposto no capô, combinado com a carroceria cromada preta e rodas pretas com bordas cromadas, cria uma estética moderna e arrojada. Os bancos vermelhos acrescentam um toque vibrante ao interior, enquanto um discreto aerofólio traseiro equilibra a estética e funcionalidade. Cada detalhe reflete uma fusão harmoniosa de design refinado e desempenho excepcional, tornando o Saleen S281 uma verdadeira obra de arte sobre rodas.');
insert into portifolios (imagem, nome, descricao) values ('port5.jpg','Impala Lowrider', 'Este Impala Lowrider é uma fusão excepcional de elegância clássica e moderna. Com suspensão a ar ajustável, sua presença nas ruas é marcada por imponência e uma postura aerodinâmica única. A carroceria negra, realçada por detalhes cromados, oferece um visual impressionante. Aros de grande diâmetro proporcionam um toque contemporâneo ao design clássico do Impala. Internamente, bancos de couro vermelho adicionam um toque luxuoso e vibrante. Detalhes cromados no painel e acabamentos refinados completam o visual, destacando a singularidade desse Impala como uma peça única na cultura automotiva.');
insert into portifolios (imagem, nome, descricao) values ('port6.jpg','1987 Chevy Monte Carlo', 'Este Chevy Monte Carlo foi feito em preto cromado, personifica a elegância atemporal com um toque moderno. A carroceria negra brilhante, acentuada por detalhes cromados, proporciona uma estética clássica e imponente, As linhas aerodinâmicas evocam a nostalgia dos anos 80, enquanto os faróis xenon acrescentam uma pitada contemporânea. Internamente, o Monte Carlo surpreende com um interior moderno e luxuoso: bancos em couro, tecnologia de ponta e detalhes cromados no painel e nos acabamentos conferem conforto e uma experiência de condução atualizada.');
insert into portifolios (imagem, nome, descricao) values ('port7.jpg','Ford Mustang CAGED', 'A transformação do Mustang conversível de 1964 em uma peça única envolveu mais de 4.200 horas de trabalho dedicado. Equipado com um motor Coyote V8 de 5.0 litros da Ford Performance e transmissão automática de 10 velocidades, o Mustang CAGED oferece desempenho excepcional. Cada componente, desde os engastes até os emblemas, foi meticulosamente projetado e fabricado pela equipe. Detalhes únicos, como engastes de lanternas e molduras de luz lateral, revelam o compromisso com a personalização.');    
insert into portifolios (imagem, nome, descricao) values ('port8.jpg','Jaguar E-Type Roadster', 'O Jaguar E-Type Roadster Restomod de Chip Foose é uma visão americana singular. Banhado em amarelo queimado cromado, sem a presença de um teto, ele irradia um encanto nostálgico. Os bancos alaranjados, elegantemente estofados em couro, adicionam um toque de sofisticação ao interior. Cada elemento, meticulosamente cromado, preserva com maestria a estética clássica, distanciando-se do modernismo para capturar a intemporalidade do Jaguar E-Type de uma maneira verdadeiramente distinta.');
insert into portifolios (imagem, nome, descricao) values ('port9.jpg','Kombi "Corujinha" 1962', 'Esta Kombi elétrica carinhosamente chamada de "corujinha", mantém sua icônica estética clássica, porém, sob a superfície, abraça toda a modernidade possível. O motor original foi substituído por um motor elétrico mais potente. Destaca-se visualmente, os detalhes em laranja nos aerofólios laterais, suportes de retrovisores e rodas. O interior revela uma fusão de tons laranja e preto, enquanto a parte superior da Kombi ostenta um preto fosco, contrastando com o branco cromado na parte inferior. Os para-choques foscos adicionam um toque contemporâneo, reinventando com maestria o clássico modelo.');
insert into portifolios (imagem, nome, descricao) values ('port10.jpg','Fusca GT3 ChromaP', 'A fusão entre um Fusca da Volkswagen e o Porsche 992 GT3 resultou em uma criação automotiva verdadeiramente única. Conta uma pintura azul cromada, faróis modernos, um aerofólio traseiro robusto com cores em azul e preto que adiciona um toque contemporâneo. Conta com a silhueta distintiva do Fusca e as linhas aerodinâmicas e presença robusta do Porsche 992 GT3.  Conta também com bancos estofados em couro e detalhes luxuosos, enquanto o painel de instrumentos incorpora tecnologias de última geração.');

insert into peca values (null, 'Fita LED RGB + controle', 'led', 149.99, 25, 'Fita LED RGB colorida com controle remoto para personalizar a iluminação do interior do seu veículo', 'bk1');
insert into peca values (null, 'Fita LED RGB fluofosrecente', 'led', 129.99, 18, 'Fita LED RGB fluorescente que adiciona um toque único e vibrante ao ambiente interno do carro', 'bk2');
insert into peca values (null, 'Kit faróis Xenôn', 'farol', 249.99, 15, 'Kit completo de faróis com lâmpadas de Xenôn para proporcionar uma iluminação intensa e eficiente', 'bk3');
insert into peca values (null, 'Kit parachoque dianteiro StreetRacer', 'spoiler', 199.99, 20, 'Kit especial para personalização do para-choque traseiro, dando um aspecto único ao seu carro', 'bk4');
insert into peca values (null, 'Spoiler traseiro StealthGlide Performance', 'spoiler', 79.99, 30, 'Spoiler dianteiro com design esportivo e curvatura, proporcionando um visual agressivo e dinâmico', 'bk5');
insert into peca values (null, 'Spoiler traseiro UrbanStyle Lite (escolha a cor)', 'spoiler', 59.99, 25, 'Spoiler dianteiro projetado especificamente para carros populares, disponível em diversas cores', 'bk6');
insert into peca values (null, 'Spoiler traseiro + parachoque dianteiro', 'spoiler', 299.99, 10, 'Combo que inclui spoiler dianteiro e parachoque dianteiro para uma transformação completa da frente do veículo', 'bk7');
insert into peca values (null, 'Câmera de ré v3.5', 'funcionalidade', 89.99, 15, 'Câmera de ré de alta qualidade na versão 3.5 para facilitar as manobras e estacionamentos', 'bk8');
insert into peca values (null, 'Spoiler traseiro Esportivo AeroDynamics', 'spoiler', 69.99, 22, 'Spoiler dianteiro com design esportivo e linhas retas, conferindo um visual moderno e arrojado', 'bk9');
insert into peca values (null, 'Kit Spoilers Laterais TurboFlex Evolution (branco)', 'spoiler', 119.99, 18, 'Conjunto com dois spoilers laterais na cor branca para adicionar um toque estilizado às laterais do veículo', 'bk10');
insert into peca values (null, 'Conjunto de Spoilers Laterais StealthGlide Boost (preto e vermelho)', 'spoiler', 129.99, 20, 'Conjunto com dois spoilers laterais nas cores preto e vermelho para uma estética audaciosa e moderna', 'bk11');
insert into peca values (null, 'Retrovisores BlueSky Deluxe', 'espelhos', 49.99, 28, 'Espelhos laterais retrovisores com design arrojado e coloração azul para um visual diferenciado', 'bk12');
insert into peca values (null, 'Sistema de Som Automotivo JBL Elite', 'som automotivo', 199.99, 15, 'Sistema de som automotivo da JBL, proporcionando uma experiência sonora de alta qualidade e potência', 'bk13');
insert into peca values (null, 'Alpine Performance Audio System', 'som automotivo', 249.99, 12, 'Sistema de som automotivo da JBL, com recursos avançados para os amantes de música no carro', 'bk14');
insert into peca values (null, 'Pioneer Supreme Sound System', 'som automotivo', 299.99, 10, 'Sistema de som automotivo da JBL, combinando estilo e desempenho sonoro excepcional', 'bk15');
insert into peca values (null, 'Luz Neon CarFlow Sublime Kit', 'luz neon', 39.99, 30, 'Kit de iluminação neon para a parte inferior do veículo, criando um visual noturno único e chamativo', 'bk16');
insert into peca values (null, 'Spoiler dianteiro TurboRush Pro', 'funcionalidade', 109.99, 20, 'Spoiler dianteiro com design esportivo e função adicional para aprimorar o desempenho aerodinâmico', 'bk17');
insert into peca values (null, 'Central Multimídia Touchscreen Pioneer AVH-Z5280TV', 'funcionalidade', 149.99, 15, 'Central multimídia com recursos avançados, incluindo GPS, Spotify e YouTube integrados', 'bk18');
insert into peca values (null, 'Central Multimídia Android Kenwood Excelon DMX907S', 'funcionalidade', 179.99, 12, 'Central multimídia acompanhada de uma mini câmera para ampliar as funcionalidades do sistema', 'bk19');
insert into peca values (null, 'Central Multimídia Sony XAV-AX5000 com Apple CarPlay + Android Auto', 'funcionalidade', 219.99, 18, 'Central multimídia Android com controle remoto, oferecendo uma experiência de entretenimento completa', 'bk20');
insert into peca values (null, 'Motor Parcial Vw Touareg 3.6 Vr6 2012', 'motor', 1499.99, 8, 'Motor parcial específico para Vw Touareg 3.6 Vr6 do ano 2012, garantindo desempenho e confiabilidade', 'bk21');
insert into peca values (null, 'Motor Ford Coyote v8', 'motor', 2999.99, 5, 'Motor potente Ford Coyote V8 para uma experiência de condução emocionante e de alto desempenho', 'bk22');
insert into peca values (null, 'Motor 2JZ GTE NON VVTI FORGED', 'motor', 3999.99, 3, 'Motor 2JZ GTE NON VVTI FORGED, projetado para entusiastas que buscam potência', 'bk23');
insert into peca values (null, 'Kit Faróis de Neblina IceBeam Xtreme', 'farol', 129.99, 20, 'Faróis de neblina para melhor visibilidade em condições adversas de tempo', 'bk24');
insert into peca values (null, 'Roda Esportiva Magnum Xtreme', 'roda', 199.99, 15, 'Roda esportiva de alta qualidade para proporcionar um visual moderno e dinâmico ao seu veículo', 'bk25');
insert into peca values (null, 'Aro Forjado Velocity Vortex', 'roda', 199.99, 18, 'Roda esportiva de design exclusivo para uma estética única no seu carro', 'bk26');
insert into peca values (null, 'Roda Esportiva Eclipse Elegance', 'roda', 199.99, 15, 'Roda esportiva com acabamento premium para um toque de elegância', 'bk27');
insert into peca values (null, 'Aro Leve Radiant Revolution', 'roda', 199.99, 20, 'Roda esportiva que combina estilo e desempenho para aprimorar a experiência de condução', 'bk28');
insert into peca values (null, 'Assento Esportivo TurboConfort Pro', 'banco', 299.99, 10, 'Banco esportivo projetado para oferecer suporte e conforto durante a condução esportiva', 'bk29');
insert into peca values (null, 'Kit pedaleiras ShineCruise', 'pedal', 49.99, 25, 'Kit de pedaleiras cromadas para um toque de estilo no interior do seu carro', 'bk30');
insert into peca values (null, 'Conjunto 2 saídas de ar TurboVortex Pro', 'saida de ar', 29.99, 30, 'Kit com duas saídas de ar pretas e compridas para uma ventilação eficiente e estilizada', 'bk31');
insert into peca values (null, 'Kit 4 saidas  AirFlex', 'saida de ar', 39.99, 25, 'Kit com quatro saídas de ar curtas e cromadas para um visual elegante no interior do carro', 'bk32');
insert into peca values (null, 'Kit 2 saídas de ar BreezeFlow Elite', 'saida de ar', 34.99, 20, 'Kit com duas saídas de ar curtas, pretas e cromadas para uma estética arrojada', 'bk33');
insert into peca values (null, 'Kit 4 dissipadores de ar condicionado ArcticCool Pro', 'dissipador de ar', 19.99, 15, 'Kit com quatro dissipadores de ar condicionado interno para uma ventilação eficiente e estilizada', 'bk34');
insert into peca values (null, 'Sistema de Escape TurboFlow Performance', 'escapamento', 149.99, 12, 'Escapamento esportivo para um som potente e visual diferenciado', 'bk35');
insert into peca values (null, 'Escapamento MagnaFlow Street Series', 'escapamento', 159.99, 18, 'Escapamento de alta performance para uma experiência de condução emocionante', 'bk36');
insert into peca values (null, 'Escapamento Borla S-Type Stealth Edition', 'escapamento', 139.99, 15, 'Escapamento com design exclusivo para uma melhoria estética e de desempenho', 'bk37');
insert into peca values (null, 'Suspensão a ar SkyFloat Elite', 'suspensao ar', 799.99, 10, 'Sistema de suspensão a ar para um ajuste personalizado da altura do veículo', 'bk38');
insert into peca values (null, 'Direção esportiva TurboRacer', 'volante', 129.99, 22, 'Volante esportivo para uma condução mais dinâmica e precisa', 'bk39');
insert into peca values (null, 'Direção clássica VintageDrive', 'volante', 109.99, 18, 'Volante clássico para uma experiência de condução elegante e confortável', 'bk40');

