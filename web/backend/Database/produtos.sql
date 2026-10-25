USE atacadao;

CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    marca VARCHAR(50) NOT NULL,
    validade DATE NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO produtos 
(nome, quantidade, marca, validade, preco)
VALUES
('Arroz', 100, 'Tio Negrão', '2026-10-30', 25.00),
('Feijão', 80, 'Kicaldo', '2027-05-15', 8.50),
('Macarrão', 50, 'Adria', '2027-08-20', 5.99);