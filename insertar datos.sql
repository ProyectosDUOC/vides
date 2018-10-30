

--  tipo usuario

INSERT INTO  `tipo_usuario` (`id_tipo_u`, `nombre_tipo_u`) VALUES ('1', 'Cliente');
INSERT INTO  `tipo_usuario` (`id_tipo_u`, `nombre_tipo_u`) VALUES ('2', 'Piloto Dron');
INSERT INTO  `tipo_usuario` (`id_tipo_u`, `nombre_tipo_u`) VALUES ('3', 'Tecnico');

-- usuario

INSERT INTO `usuario` (`id_usuario`, `rut`, `nombre`, `apellido`, `celular`, `domicilio`, `email`, `activo`, `id_tipo_u`) VALUES ('1', '11', 'benjamin', 'mora', '82828', 'los crisantemos', 'b.morat@alumnos.duoc.cl', '1', '1');
INSERT INTO `usuario` (`id_usuario`, `rut`, `nombre`, `apellido`, `celular`, `domicilio`, `email`, `activo`, `id_tipo_u`) VALUES ('2', '12', 'sebastian', 'orrego', '123123', 'san bernardo', 'seba@gmail.com', '1', '2');
INSERT INTO `usuario` (`id_usuario`, `rut`, `nombre`, `apellido`, `celular`, `domicilio`, `email`, `activo`, `id_tipo_u`) VALUES ('3', '13', 'rodrigo', 'arranguiz', '123123', 'san bernardo', 'r@gmail.com', '1', '3');

-- acceso

INSERT INTO `acceso` (`id_acceso`, `id_usuario`, `username`, `password`, `activo`) VALUES ('1', '1', 'benjamin', '1234', '1');
INSERT INTO `acceso` (`id_acceso`, `id_usuario`, `username`, `password`, `activo`) VALUES ('2', '2', 'sebastian', '1234', '1');
INSERT INTO `acceso` (`id_acceso`, `id_usuario`, `username`, `password`, `activo`) VALUES ('3', '3', 'rodrigo', '1234', '1');

-- dron

INSERT INTO `vehiculo_volador` (`id_vehiculo_volador`, `modelo`, `activo`) VALUES ('1', 'Dron modelo phanteon II', '1');
INSERT INTO `vehiculo_volador` (`id_vehiculo_volador`, `modelo`, `activo`) VALUES ('2', 'WaterProof ', '1');
INSERT INTO `vehiculo_volador` (`id_vehiculo_volador`, `modelo`, `activo`) VALUES ('3', 'Dron 300', '1');
