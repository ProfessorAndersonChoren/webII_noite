set foreign_key_checks = 0; -- Desabilita a verificação
delete from provider where provider_code = 2;
delete from address where address_code = 2;
set foreign_key_checks = 1; -- Habilita a verificação