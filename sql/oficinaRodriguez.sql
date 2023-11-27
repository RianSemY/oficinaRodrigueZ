create database if not exists oficinarodriguez;
use oficinarodriguez;

create table if not exists cliente(
    id int auto_increment primary key,
    nome varchar(50),
    senha varchar(50),
    email varchar(50),
    fone int(11),
    endereco varchar(100)
);

create table if not exists carro(
    id int auto_increment primary key,
    idcliente int,
    placa varchar(11),
    modelo varchar(50),
    marca varchar(50),
    ano year,
    foreign key (idcliente) references cliente(id)
);

create table if not exists funcionario(
    id int auto_increment primary key,
    nome varchar(50),
    funcao varchar(50),
    fone int(11)
);

create table if not exists peca(
    id int auto_increment primary key,
    nome varchar(50),
    tipo varchar(50),
    preco float,
    estoquedisponivel int,
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

create table if not exists portifolios(
    id int auto_increment primary key,
    imagem varchar(45),
    nome varchar(45),
    descricao text
);

insert into cliente (nome,senha,email,fone,endereco) values('Lucas Morais da Silva','senha123@','lucasqy77@gmail.com','984274908','Cerrito, Santa Maria - RS');
insert into cliente (nome,senha,email,fone,endereco) values('Enzo Augusto Mucha','123456','eznoamd6@gmail.com','97273502','Juscelino Kubitschek, Santa Maria - RS');


insert into carro (placa,modelo,marca,ano,idcliente) values('LUCA7777','Honda Civic','Honda','2023',1);
insert into carro (placa,modelo,marca,ano,idcliente) values('ENZO6666','Astra','Chevrolet','2014',2);


insert into funcionario (nome,funcao,fone) values('Rian Deroci Rodrigues','Dono','96546070');
insert into funcionario (nome,funcao,fone) values('Eduardo Gindri','Mecanico','84040000');

insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port1.jpg','Fiat Ferrari', 'O modelo foi meticulosamente construído a partir de um Fiat Uno 95 branco, passando por um processo artesanal que envolveu a incorporação cuidadosa de detalhes feitos de papelão. Cada peça foi habilmente moldada e adicionada, simulando com precisão os componentes distintivos de uma Ferrari, desde as linhas aerodinâmicas até os contornos elegantes. A meticulosidade na replicação destaca-se na atenção aos detalhes, criando uma ilusão visual envolvente que faz com que o espectador aprecie a transformação do humilde Fiat Uno em uma representação única e estilizada de luxo automotivo.');
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port2.jpg','Ford Maverick GT 302 FASE 2', 'Esse Ford Maverick foi refeito usando um legítimo Ford Americano caracterizado como FORD MAVERICK GT fase 2 cujo só foi fabricado e lançado no Brasil. Esse carro esta com um Motor V8 302 com Carburador Holley 750, ignição eletronica MSD, escapamento em X-Pipe com saidas nas laterais, transmissão 5 Marchas (T-5), disco de embreagem de ceramica, Diferencial auto blocante, freios a Disco Mustang GT 96 nas 4 rodas, interior em preto e com Bancos elétricos do Nissan 350z.');
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port3.jpg','Opala Apel Edition', 'Esta obra-prima automotiva é uma fusão envolvente entre o clássico Opala brasileiro e o icônico estilo do Impala, harmoniosamente incorporado com a distinta carroceria do Opel alemão. Cada detalhe reflete a habilidade artística do criador, desde a grade frontal imponente e cromada até os para-choques finamente trabalhados que evocam o charme atemporal dos automóveis clássicos. O interior é uma sinfonia de conforto e sofisticação, onde detalhes personalizados como revestimentos em couro genuíno e painéis de madeira finamente trabalhada complementam a experiência luxuosa.');
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port4.jpg','Saleen Xquisite','O Saleen S281 é uma mescla impressionante de potência e elegância. Seu motor cromado exposto no capô, combinado com a carroceria cromada preta e rodas pretas com bordas cromadas, cria uma estética moderna e arrojada. Os bancos vermelhos acrescentam um toque vibrante ao interior, enquanto um discreto aerofólio traseiro equilibra a estética e funcionalidade. Cada detalhe reflete uma fusão harmoniosa de design refinado e desempenho excepcional, tornando o Saleen S281 uma verdadeira obra de arte sobre rodas.');
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port5.jpg','Impala Lowrider', 'Este Impala Lowrider é uma fusão excepcional de elegância clássica e moderna. Com suspensão a ar ajustável, sua presença nas ruas é marcada por imponência e uma postura aerodinâmica única. A carroceria negra, realçada por detalhes cromados, oferece um visual impressionante. Aros de grande diâmetro proporcionam um toque contemporâneo ao design clássico do Impala. Internamente, bancos de couro vermelho adicionam um toque luxuoso e vibrante. Detalhes cromados no painel e acabamentos refinados completam o visual, destacando a singularidade desse Impala como uma peça única na cultura automotiva.');
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port6.jpg','1987 Chevy Monte Carlo', 'Este Chevy Monte Carlo foi feito em preto cromado, personifica a elegância atemporal com um toque moderno. A carroceria negra brilhante, acentuada por detalhes cromados, proporciona uma estética clássica e imponente, As linhas aerodinâmicas evocam a nostalgia dos anos 80, enquanto os faróis xenon acrescentam uma pitada contemporânea. Internamente, o Monte Carlo surpreende com um interior moderno e luxuoso: bancos em couro, tecnologia de ponta e detalhes cromados no painel e nos acabamentos conferem conforto e uma experiência de condução atualizada.');
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port7.jpg','Ford Mustang CAGED', 'A transformação do Mustang conversível de 1964 em uma peça única envolveu mais de 4.200 horas de trabalho dedicado. Equipado com um motor Coyote V8 de 5.0 litros da Ford Performance e transmissão automática de 10 velocidades, o Mustang CAGED oferece desempenho excepcional. Cada componente, desde os engastes até os emblemas, foi meticulosamente projetado e fabricado pela equipe. Detalhes únicos, como engastes de lanternas e molduras de luz lateral, revelam o compromisso com a personalização.');    
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port8.jpg','Jaguar E-Type Roadster', 'O Jaguar E-Type Roadster Restomod de Chip Foose é uma visão americana singular. Banhado em amarelo queimado cromado, sem a presença de um teto, ele irradia um encanto nostálgico. Os bancos alaranjados, elegantemente estofados em couro, adicionam um toque de sofisticação ao interior. Cada elemento, meticulosamente cromado, preserva com maestria a estética clássica, distanciando-se do modernismo para capturar a intemporalidade do Jaguar E-Type de uma maneira verdadeiramente distinta.');
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port9.jpg','Kombi "Corujinha" 1962', 'Esta Kombi elétrica carinhosamente chamada de "corujinha", mantém sua icônica estética clássica, porém, sob a superfície, abraça toda a modernidade possível. O motor original foi substituído por um motor elétrico mais potente. Destaca-se visualmente, os detalhes em laranja nos aerofólios laterais, suportes de retrovisores e rodas. O interior revela uma fusão de tons laranja e preto, enquanto a parte superior da Kombi ostenta um preto fosco, contrastando com o branco cromado na parte inferior. Os para-choques foscos adicionam um toque contemporâneo, reinventando com maestria o clássico modelo.');
insert into portifolios (imagem, nome, descricao) values ('img/portifolios/port10.jpg','Fusca GT3 ChromaP', 'A fusão entre um Fusca da Volkswagen e o Porsche 992 GT3 resultou em uma criação automotiva verdadeiramente única. Conta uma pintura azul cromada, faróis modernos, um aerofólio traseiro robusto com cores em azul e preto que adiciona um toque contemporâneo. Conta com a silhueta distintiva do Fusca e as linhas aerodinâmicas e presença robusta do Porsche 992 GT3.  Conta também com bancos estofados em couro e detalhes luxuosos, enquanto o painel de instrumentos incorpora tecnologias de última geração.');
