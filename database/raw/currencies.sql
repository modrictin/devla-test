CREATE TABLE currencies
(
    `id`   bigint(11) unsigned NOT NULL AUTO_INCREMENT,
    name   VARCHAR(20),
    code   VARCHAR(3),
    symbol VARCHAR(5),
    PRIMARY KEY (`id`)
);

ALTER TABLE currencies CONVERT TO CHARACTER SET utf8;

-- Insert currencies records
INSERT INTO currencies (name, code, symbol)
VALUES ('Leke', 'ALL', 'Lek');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'USD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Afghanis', 'AFN', '؋');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pesos', 'ARS', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Guilders', 'AWG', 'ƒ');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'AUD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('New Manats', 'AZN', 'ман');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'BSD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'BBD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rubles', 'BYR', 'p.');
INSERT INTO currencies (name, code, symbol)
VALUES ('Euro', 'EUR', '€');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'BZD', 'BZ$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'BMD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Bolivianos', 'BOB', '$b');
INSERT INTO currencies (name, code, symbol)
VALUES ('Convertible Marka', 'BAM', 'KM');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pula', 'BWP', 'P');
INSERT INTO currencies (name, code, symbol)
VALUES ('Leva', 'BGN', 'лв');
INSERT INTO currencies (name, code, symbol)
VALUES ('Reais', 'BRL', 'R$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'GBP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'BND', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Riels', 'KHR', '៛');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'CAD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'KYD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pesos', 'CLP', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Yuan Renminbi', 'CNY', '¥');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pesos', 'COP', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Colón', 'CRC', '₡');
INSERT INTO currencies (name, code, symbol)
VALUES ('Kuna', 'HRK', 'kn');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pesos', 'CUP', '₱');
INSERT INTO currencies (name, code, symbol)
VALUES ('Koruny', 'CZK', 'Kč');
INSERT INTO currencies (name, code, symbol)
VALUES ('Kroner', 'DKK', 'kr');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pesos', 'DOP ', 'RD$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'XCD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'EGP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Colones', 'SVC', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'FKP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'FJD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Cedis', 'GHC', '¢');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'GIP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Quetzales', 'GTQ', 'Q');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'GGP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'GYD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Lempiras', 'HNL', 'L');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'HKD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Forint', 'HUF', 'Ft');
INSERT INTO currencies (name, code, symbol)
VALUES ('Kronur', 'ISK', 'kr');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rupees', 'INR', 'Rp');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rupiahs', 'IDR', 'Rp');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rials', 'IRR', '﷼');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'IMP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('New Shekels', 'ILS', '₪');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'JMD', 'J$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Yen', 'JPY', '¥');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'JEP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Tenge', 'KZT', 'лв');
INSERT INTO currencies (name, code, symbol)
VALUES ('Won', 'KPW', '₩');
INSERT INTO currencies (name, code, symbol)
VALUES ('Won', 'KRW', '₩');
INSERT INTO currencies (name, code, symbol)
VALUES ('Soms', 'KGS', 'лв');
INSERT INTO currencies (name, code, symbol)
VALUES ('Kips', 'LAK', '₭');
INSERT INTO currencies (name, code, symbol)
VALUES ('Lati', 'LVL', 'Ls');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'LBP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'LRD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Switzerland Francs', 'CHF', 'CHF');
INSERT INTO currencies (name, code, symbol)
VALUES ('Litai', 'LTL', 'Lt');
INSERT INTO currencies (name, code, symbol)
VALUES ('Denars', 'MKD', 'ден');
INSERT INTO currencies (name, code, symbol)
VALUES ('Ringgits', 'MYR', 'RM');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rupees', 'MUR', '₨');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pesos', 'MXN', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Tugriks', 'MNT', '₮');
INSERT INTO currencies (name, code, symbol)
VALUES ('Meticais', 'MZN', 'MT');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'NAD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rupees', 'NPR', '₨');
INSERT INTO currencies (name, code, symbol)
VALUES ('Guilders', 'ANG', 'ƒ');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'NZD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Cordobas', 'NIO', 'C$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Nairas', 'NGN', '₦');
INSERT INTO currencies (name, code, symbol)
VALUES ('Krone', 'NOK', 'kr');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rials', 'OMR', '﷼');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rupees', 'PKR', '₨');
INSERT INTO currencies (name, code, symbol)
VALUES ('Balboa', 'PAB', 'B/.');
INSERT INTO currencies (name, code, symbol)
VALUES ('Guarani', 'PYG', 'Gs');
INSERT INTO currencies (name, code, symbol)
VALUES ('Nuevos Soles', 'PEN', 'S/.');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pesos', 'PHP', 'Php');
INSERT INTO currencies (name, code, symbol)
VALUES ('Zlotych', 'PLN', 'zł');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rials', 'QAR', '﷼');
INSERT INTO currencies (name, code, symbol)
VALUES ('New Lei', 'RON', 'lei');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rubles', 'RUB', 'руб');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'SHP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Riyals', 'SAR', '﷼');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dinars', 'RSD', 'Дин.');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rupees', 'SCR', '₨');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'SGD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'SBD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Shillings', 'SOS', 'S');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rand', 'ZAR', 'R');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rupees', 'LKR', '₨');
INSERT INTO currencies (name, code, symbol)
VALUES ('Kronor', 'SEK', 'kr');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'SRD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pounds', 'SYP', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('New Dollars', 'TWD', 'NT$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Baht', 'THB', '฿');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'TTD', 'TT$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Lira', 'TRY', '₺');
INSERT INTO currencies (name, code, symbol)
VALUES ('Liras', 'TRL', '£');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dollars', 'TVD', '$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Hryvnia', 'UAH', '₴');
INSERT INTO currencies (name, code, symbol)
VALUES ('Pesos', 'UYU', '$U');
INSERT INTO currencies (name, code, symbol)
VALUES ('Sums', 'UZS', 'лв');
INSERT INTO currencies (name, code, symbol)
VALUES ('Bolivares Fuertes', 'VEF', 'Bs');
INSERT INTO currencies (name, code, symbol)
VALUES ('Dong', 'VND', '₫');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rials', 'YER', '﷼');
INSERT INTO currencies (name, code, symbol)
VALUES ('Zimbabwe Dollars', 'ZWD', 'Z$');
INSERT INTO currencies (name, code, symbol)
VALUES ('Rupees', 'INR', '₹');

