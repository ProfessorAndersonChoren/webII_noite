-- Buscar os dados - Select

-- Buscar todos os dados
select * from product;

-- Buscar somente o nome e o preço
select product_name, product_price from product;

-- Buscar todos os dados, porém com filtro
select * from product where product_code = 2;
select * from product where product_price > 1.4;
select * from product where product_quantity between 100 and 200;
select * from product where product_quantity between 100 and 200 or product_price > 3;

select count(*) as 'Contagem de produtos' from product where product_quantity between 100 and 200;

select avg(product_price) as 'Média de preços' from product;

select * from product order by product_price desc;

-- Seleção entre tabelas
-- Nome produto, nome do fornecedor e preço do produto
select pd.product_name,pr.provider_name,pd.product_price from provider pr
inner join provider_product pp on pr.provider_code = pp.provider_code
inner join product pd on pp.product_code = pd.product_code;