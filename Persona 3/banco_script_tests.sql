insert into persona(nome_persona, nivel, arcano, descricao, perfil_persona) 
Values
('Slime', 12, 'Fool', 'um monstro primitivo com um corpo viscoso. Existem várias teorias quanto à sua origem, mas ainda está em debate. Coleta objetos brilhantes compulsivamente.', '../img/compendium/slime.png'),
('Odin', 57, 'Emperor', 'No mito nórdico, ele é o pai dos deuses e o deus da sabedoria. Ele monta seu cavalo de oito pernas Sleipnir, carregando sua lança Gungnir e usando seu anel Draupnir.', '../img/compendium/odin.png');

Insert Into lista_habilidade(nome_habilidade, tipo_habilidade, custo, descricao_habilidade) values
('Evil Touch', 'Bad Status', '8%HP', 'Causa dano perfurante leve à 1 inimigo.')