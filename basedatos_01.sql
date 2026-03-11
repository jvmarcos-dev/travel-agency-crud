USE juanvalentin_bbdd2;

DROP TABLE IF EXISTS reservas;
CREATE TABLE reservas (
  DNI varchar(9) NOT NULL,
  NOMBRE varchar(100) NOT NULL,
  ORIGEN varchar(50) NOT NULL,
  DESTINO varchar(50) NOT NULL,
  CLASE_VUELO varchar(20) NOT NULL,
  FECHA date NOT NULL,
  ESTANCIA int NOT NULL,
  PRIMARY KEY (DNI)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES reservas WRITE;
INSERT INTO reservas VALUES 
('12345678A', 'Juan Pérez García', 'Madrid', 'China', 'First', '2026-03-15', 2),
('23456789B', 'María López Santos', 'Barcelona', 'Petra', 'Business', '2026-04-20', 4),
('34567890C', 'Carlos Martín Ruiz', 'Valencia', 'Roma', 'Premium', '2026-05-10', 1),
('45678901D', 'Ana Fernández Díaz', 'Sevilla', 'Peru', 'Economica', '2026-06-05', 3),
('56789012E', 'Pedro Sánchez Mora', 'Bilbao', 'India', 'First', '2026-07-12', 2),
('67890123F', 'Laura García Vega', 'Málaga', 'Mexico', 'Business', '2026-08-18', 5),
('78901234G', 'David Torres Blanco', 'Zaragoza', 'China', 'Premium', '2026-09-22', 2),
('89012345H', 'Sofía Ramírez Cruz', 'Murcia', 'Roma', 'Economica', '2026-10-30', 6),
('90123456I', 'Miguel Jiménez Ortiz', 'Alicante', 'Petra', 'First', '2026-11-14', 3),
('01234567J', 'Elena Vargas Núñez', 'Granada', 'Peru', 'Business', '2026-12-25', 4);
UNLOCK TABLES;