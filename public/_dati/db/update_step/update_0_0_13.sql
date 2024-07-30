SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS lmgc_Colors;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE lmgc_Colors (
    RAL VARCHAR(10) PRIMARY KEY,
    RGB VARCHAR(15),
    HEX VARCHAR(7),
    CMYK VARCHAR(15),
    LRV DECIMAL(5,2),
    Inglese VARCHAR(50),
    Tedesco VARCHAR(50),
    Francese VARCHAR(50),
    Spagnolo VARCHAR(50),
    Italiano VARCHAR(50),
    Olandese VARCHAR(50)
);

INSERT INTO lmgc_Colors (RAL, RGB, HEX, CMYK, LRV, Inglese, Tedesco, Francese, Spagnolo, Italiano, Olandese) VALUES
('RAL 1000', '205-186-136', '#CDBA88', '0-9-34-20', 51.79, 'Beige verde', 'Grünbeige', 'Beige verde', 'Beige verdoso', 'Beige verdastro', 'Groenbeige'),
('RAL 1001', '208-176-132', '#D0B084', '0-15-37-18', 48.09, 'Beige', 'Beige', 'Beige', 'Beige', 'Beige', 'Beige'),
('RAL 1002', '210-170-109', '#D2AA6D', '0-19-48-18', 45.07, 'Giallo sabbia', 'Sandgelb', 'Jaune sable', 'Amarillo arena', 'Giallo sabbia', 'Zandgeel'),
('RAL 1003', '249-169-0', '#F9A900', '0-32-100-2', 49.05, 'Giallo segnale', 'Signalgelb', 'Jaune de sécurité', 'Amarillo señales', 'Giallo segnale', 'Signaalgeel'),
('RAL 1004', '228-158-0', '#E49E00', '0-31-100-11', 42.13, 'Giallo dorato', 'Goldgelb', 'Jaune o', 'Amarillo oro', 'Giallo oro', 'Goudgeel'),
('RAL 1005', '203-143-0', '#CB8F00', '0-30-100-20', 34.15, 'Giallo miele', 'Honiggelb', 'Jaune miel', 'Amarillo miel', 'Giallo miele', 'Honinggeel'),
('RAL 1006', '225-144-0', '#E19000', '0-36-100-12', 37.45, 'Giallo mais', 'Maisgelb', 'Jaune mais', 'Amarillo maíz', 'Giallo polenta', 'Maisgeel'),
('RAL 1007', '232-140-0', '#E88C00', '0-40-100-9', 37.63, 'Giallo narciso', 'Narzissengelb', 'Jaune narcisse', 'Amarillo narciso', 'Giallo narciso', 'Narcissengeel'),
('RAL 1011', '175-128-80', '#AF8050', '0-27-54-31', 27.65, 'Beige marrone', 'Beige marrone', 'Beige bruno', 'Beige pardo', 'Beige marrone', 'Beige bruno'),
('RAL 1012', '221-175-40', '#DDAF28', '0-21-82-13', 47.83, 'Giallo limone', 'Zitronengelb', 'Citron giallo', 'Amarillo limón', 'Giallo limone', 'Citroengeel'),
('RAL 1013', '227-217-199', '#E3D9C7', '0-4-12-11', 70.76, 'Bianco ostrica', 'Perlweiß', 'Blanc perlé', 'Blanco perla', 'Bianco perla', 'Parelwit'),
('RAL 1014', '221-196-155', '#DDC49B', '0-11-30-13', 58.34, 'Avorio', 'Elfenbein', 'Avorio', 'Marfil', 'Avorio', 'Ivoorkleurig'),
('RAL 1015', '230-210-181', '#E6D2B5', '0-9-21-10', 67.55, 'Avorio chiaro', 'Hellelfenbein', 'Ivoire clair', 'Marfil claro', 'Avorio chiaro', 'Licht ivoorkleurig'),
('RAL 1016', '241-221-57', '#F1DD39', '0-8-76-5', 71.30, 'Giallo zolfo', 'Schwefelgelb', 'Jaune soufre', 'Amarillo azufre', 'Giallo zolfo', 'Zwavelgeel'),
('RAL 1017', '246-169-81', '#F6A951', '0-31-67-4', 49.80, 'Giallo zafferano', 'Safrangelb', 'Jaune safran', 'Amarillo azafrán', 'Giallo zafferano', 'Saffraangeel'),
('RAL 1018', '250-202-49', '#FACA31', '0-19-80-2', 63.81, 'Giallo zinco', 'Zinkgelb', 'Zinco giallo', 'Amarillo de zinco', 'Giallo zinco', 'Zinkgeel'),
('RAL 1019', '164-143-122', '#A48F7A', '0-13-26-36', 30.53, 'Grigio beige', 'Graubeige', 'Beige gris', 'Beige agrisado', 'Beige grigiastro', 'Grijsbeige'),
('RAL 1020', '160-143-101', '#A08F65', '0-11-37-37', 29.44, 'Giallo olivastro', 'Olivgelb', 'Oliva Jaune', 'Amarillo oliva', 'Giallo olivastro', 'Olijfgeel'),
('RAL 1021', '246-182-0', '#F6B600', '0-26-100-4', 53.97, 'Giallo colza', 'Rapsgelb', 'Colza gialla', 'Amarillo colza', 'Giallo navone', 'Koolzaadgeel'),
('RAL 1023', '247-181-0', '#F7B500', '0-27-100-3', 54.24, 'Giallo traffico', 'Verkehrsgelb', 'Jaune signalisation', 'Amarillo tráfico', 'Giallo traffico', 'Verkeersgeel'),
('RAL 1024', '186-143-76', '#BA8F4C', '0-23-59-27', 32.74, 'Giallo ocra', 'Ockergelb', 'Jaune ocre', 'Amarillo ocre', 'Giallo ocra', 'Okergeel'),
('RAL 1026', '255-255-0', '#FFFF00', '0-0-100-0', 88.65, 'Giallo luminoso', 'Leuchtgelb', 'Jaune brillant', 'Amarillo brillante', 'Giallo brillante', 'Briljantgeel'),
('RAL 1027', '167-127-15', '#A77F0F', '0-24-91-35', 25.72, 'Curry', 'Currygelb', 'Jaune curry', 'Amarillo curry', 'Giallo curry', 'Kerriegeel'),
('RAL 1028', '255-156-0', '#FF9C00', '0-39-100-0', 47.55, 'Giallo melone', 'Melonengelb', 'Melone giallo', 'Amarillo melón', 'Giallo melone', 'Meloengeel'),
('RAL 1032', '226-163-0', '#E2A300', '0-28-100-11', 43.37, 'Giallo ginestra', 'Ginstergelb', 'Jaune genêt', 'Amarillo retama', 'Giallo scopa', 'Bremgeel'),
('RAL 1033', '249-154-29', '#F99A1D', '0-38-88-2', 44.66, 'Giallo dalia', 'Dahliengelb', 'Jaune dalia', 'Amarillo dalia', 'Giallo dalia', 'Dahliageel'),
('RAL 1034', '235-156-82', '#EB9C52', '0-34-65-8', 43.82, 'Giallo pastello', 'Pastellgelb', 'Jaune pastel', 'Amarillo pastel', 'Giallo pastello', 'Pastelgeel'),
('RAL 2000', '178-118-28', '#B2761C', '0-34-84-30', 29.88, 'Arancio puro', 'Beige orange', 'Orange beige', 'Naranja beige', 'Arancio beige', 'Oranje beige'),
('RAL 2001', '157-30-66', '#9D1E42', '0-81-67-19', 18.65, 'Arancio rosso', 'Rotsgelb', 'Jaune rouge', 'Amarillo rojo', 'Arancio rosso', 'Roodgeel'),
('RAL 2002', '114-29-40', '#721D28', '0-75-80-51', 9.15, 'Arancio scuro', 'Blutrot', 'Rouge sombre', 'Rojo oscuro', 'Arancio scuro', 'Donkerrood'),
('RAL 2003', '248-130-0', '#F88200', '0-47-100-2', 53.95, 'Arancio luminoso', 'Lichtorange', 'Orange lumineux', 'Naranja brillante', 'Arancio brillante', 'Lichtoranje'),
('RAL 2004', '255-76-0', '#FF4C00', '0-70-100-0', 53.12, 'Arancio trafico', 'Verkehrsorange', 'Orange de signalisation', 'Naranja de tráfico', 'Arancio traffico', 'Verkeersoranje'),
('RAL 2005', '255-61-0', '#FF3D00', '0-75-100-0', 56.34, 'Arancio brillante', 'Lichtrot', 'Rouge brillant', 'Rojo brillante', 'Arancio brillante', 'Helderrood'),
('RAL 2010', '249-112-32', '#F97020', '0-55-92-2', 47.41, 'Arancio cuoio', 'Lederorange', 'Orange cuir', 'Naranja cuero', 'Arancio cuoio', 'Lederoranje'),
('RAL 2011', '133-71-25', '#865B19', '0-43-86-48', 24.56, 'Arancio bruciato', 'Braunorange', 'Orange brûlé', 'Naranja quemado', 'Arancio bruciato', 'Bruinoranje'),
('RAL 2012', '181-90-43', '#B55A2B', '0-50-84-29', 25.19, 'Arancio ruggine', 'Rostorange', 'Orange rouille', 'Naranja óxido', 'Arancio ruggine', 'Roestbruin'),
('RAL 2013', '167-83-26', '#A7531A', '0-51-85-33', 21.23, 'Arancio rame', 'Kupferorange', 'Orange cuivre', 'Naranja cobre', 'Arancio rame', 'Koperoranje'),
('RAL 2014', '227-97-27', '#E5791B', '0-57-92-10', 41.44, 'Arancio rame', 'Kupferorange', 'Orange cuivre', 'Naranja cobre', 'Arancio rame', 'Koperoranje'),
('RAL 3000', '255-0-0', '#FF0000', '0-100-100-0', 53.33, 'Rosso traffico', 'Verkehrsrot', 'Rouge de signalisation', 'Rojo tráfico', 'Rosso traffico', 'Verkeersrood'),
('RAL 3001', '191-0-35', '#BF0023', '0-100-82-20', 16.16, 'Rosso scuro', 'Saphirrot', 'Rouge foncé', 'Rojo oscuro', 'Rosso scuro', 'Donkerrood'),
('RAL 3002', '158-23-25', '#9E1716', '0-90-86-40', 13.35, 'Rosso ciliegia', 'Blutrot', 'Rouge cerise', 'Rojo cereza', 'Rosso ciliegia', 'Kersrood'),
('RAL 3003', '141-0-39', '#8D0027', '0-100-73-31', 13.56, 'Rosso rubino', 'Rubinrot', 'Rouge rubis', 'Rojo rubí', 'Rosso rubino', 'Robijnrood'),
('RAL 3004', '114-1-29', '#6F0023', '0-88-66-51', 10.16, 'Rosso vinaccia', 'Weinrot', 'Rouge vin', 'Rojo vino', 'Rosso vinaccia', 'Wijnrood'),
('RAL 3005', '186-0-46', '#BA002E', '0-93-89-0', 13.87, 'Rosso lampone', 'Himbeerrot', 'Rouge framboise', 'Rojo frambuesa', 'Rosso lampone', 'Frambozenrood'),
('RAL 3007', '68-8-28', '#44081C', '0-88-72-60', 9.58, 'Rosso scuro', 'Schwarzrot', 'Rouge noir', 'Rojo oscuro', 'Rosso scuro', 'Zwartrood'),
('RAL 3008', '120-10-24', '#780C18', '0-90-80-40', 15.22, 'Rosso rubino scuro', 'Karmesinrot', 'Rouge carmin', 'Rojo carmín', 'Rosso carminio', 'Karmijnrood'),
('RAL 3011', '59-30-34', '#3B1E22', '0-49-43-66', 10.12, 'Rosso mogano', 'Havanna', 'Rouge havane', 'Rojo habano', 'Rosso mogano', 'Havana'),
('RAL 3012', '133-67-52', '#855533', '0-50-75-30', 23.24, 'Rosso camoscio', 'Beige braun', 'Beige marrone', 'Beige pardo', 'Beige rosso', 'Beige bruin'),
('RAL 3013', '229-40-18', '#E52812', '0-82-92-10', 37.38, 'Rosso arancio', 'Karmesinrot', 'Rouge carmin', 'Rojo carmín', 'Rosso carminio', 'Karmijnrood'),
('RAL 3014', '218-136-138', '#DA888A', '0-37-37-15', 46.56, 'Rosso antico', 'Antikrosa', 'Rouge antique', 'Rojo antiguo', 'Rosso antico', 'Antiekrood'),
('RAL 3015', '228-191-203', '#E4BFCB', '0-16-11-10', 64.33, 'Rosso pastello', 'Pastellrosa', 'Rouge pastel', 'Rojo pastel', 'Rosso pastello', 'Pastelrood'),
('RAL 3016', '126-35-36', '#7E3D24', '0-72-76-53', 20.43, 'Rosso corallo', 'Corallenrot', 'Rouge corail', 'Rojo coral', 'Rosso corallo', 'Koraalrood'),
('RAL 3017', '229-70-77', '#E5464D', '0-70-72-10', 43.17, 'Rosso rosa', 'Rosenrot', 'Rouge rose', 'Rojo rosa', 'Rosso rosa', 'Rozerood'),
('RAL 3018', '255-0-77', '#FF004D', '0-100-95-0', 50.24, 'Rosso fucsia', 'Fuchsia', 'Rouge fuchsia', 'Rojo fucsia', 'Rosso fucsia', 'Fuchsiaroze'),
('RAL 3020', '191-0-23', '#BF0017', '0-88-89-23', 14.84, 'Rosso sangue', 'Blutrot', 'Rouge sang', 'Rojo sangre', 'Rosso sangue', 'Bloedrood'),
('RAL 3022', '225-127-128', '#E17F80', '0-40-43-12', 45.43, 'Rosso scuro', 'Haut', 'Rouge foncé', 'Rojo oscuro', 'Rosso scuro', 'Donkerrood'),
('RAL 3024', '210-0-61', '#D2003B', '0-92-81-3', 27.83, 'Rosso scuro', 'Blutrot', 'Rouge sang', 'Rojo sangre', 'Rosso sangue', 'Bloedrood'),
('RAL 3026', '252-0-33', '#FC0021', '0-92-93-0', 54.54, 'Rosso vivace', 'Lichtrot', 'Rouge vif', 'Rojo vivo', 'Rosso vivace', 'Vuurrood'),
('RAL 3031', '149-37-45', '#95252D', '0-75-69-30', 25.76, 'Rosso vino', 'Weinrot', 'Rouge vin', 'Rojo vino', 'Rosso vino', 'Wijnrood'),
('RAL 3032', '169-22-43', '#A91C2B', '0-87-79-35', 23.42, 'Rosso rubino', 'Rubinrot', 'Rouge rubis', 'Rojo rubí', 'Rosso rubino', 'Robijnrood'),
('RAL 3033', '231-63-87', '#E73F57', '0-73-55-0', 45.36, 'Rosso ciclamino', 'Rosa', 'Rouge cyclamen', 'Rojo ciclamen', 'Rosso ciclamino', 'Cyclaamrood'),
('RAL 4001', '103-17-31', '#67111F', '0-84-69-60', 13.37, 'Rosso porpora', 'Lila', 'Rouge pourpre', 'Rojo púrpura', 'Rosso porpora', 'Paarsrood'),
('RAL 4002', '112-0-17', '#6E0011', '0-84-92-43', 13.22, 'Rosso mogano', 'Havanna', 'Rouge havane', 'Rojo habano', 'Rosso mogano', 'Havana'),
('RAL 4003', '162-0-44', '#A7002C', '0-93-80-29', 24.11, 'Rosso amaranto', 'Rosa', 'Rouge amarante', 'Rojo amaranto', 'Rosso amaranto', 'Amaranto'),
('RAL 4004', '93-0-37', '#5D0023', '0-92-92-31', 17.62, 'Rosso bordeaux', 'Kastanienbraun', 'Rouge Bordeaux', 'Rojo Burdeos', 'Rosso bordeaux', 'Bordeauxrood'),
('RAL 4005', '206-0-56', '#CE0058', '0-68-61-0', 45.65, 'Rosso lavanda', 'Rosa', 'Rouge lavande', 'Rojo lavanda', 'Rosso lavanda', 'Lavenderood'),
('RAL 4006', '184-0-46', '#B8002D', '0-81-83-29', 26.89, 'Rosso fragola', 'Rosa', 'Rouge fraise', 'Rojo fresa', 'Rosso fragola', 'Aardbeirood'),
('RAL 4007', '133-0-44', '#851C2B', '0-73-67-46', 20.36, 'Rosso rubino', 'Rubinrot', 'Rouge rubis', 'Rojo rubí', 'Rosso rubino', 'Robijnrood'),
('RAL 4008', '199-68-61', '#C6473D', '0-65-71-26', 33.21, 'Rosso corallo', 'Korallenrot', 'Rouge corail', 'Rojo coral', 'Rosso corallo', 'Koraalrood'),
('RAL 4010', '162-0-58', '#A2003A', '0-88-77-33', 19.34, 'Rosso vinaccia', 'Rosa', 'Rouge vin', 'Rojo vino', 'Rosso vinaccia', 'Wijnrood'),
('RAL 5000', '0-56-91', '#003C5B', '100-77-1-38', 14.00, 'Blu scuro', 'Stahlblau', 'Bleu foncé', 'Azul oscuro', 'Blu scuro', 'Donkerblauw'),
('RAL 5001', '0-56-95', '#003C7F', '100-74-0-35', 12.94, 'Blu segnale', 'Signalblau', 'Bleu signal', 'Azul señal', 'Blu segnale', 'Signaalblauw'),
('RAL 5002', '0-49-91', '#003D7F', '100-70-0-30', 11.34, 'Blu ultramarino', 'Ultramarinblau', 'Bleu ultramarin', 'Azul ultramarino', 'Blu ultramarino', 'Ultramarijnblauw'),
('RAL 5003', '0-42-73', '#003647', '100-80-16-23', 10.42, 'Blu cielo', 'Himmelblau', 'Bleu ciel', 'Azul cielo', 'Blu cielo', 'Hemelblauw'),
('RAL 5004', '0-0-0', '#000000', '100-100-100-100', 0.00, 'Nero', 'Schwarz', 'Noir', 'Negro', 'Nero', 'Zwart'),
('RAL 5005', '1-12-33', '#003C6C', '100-67-0-42', 15.87, 'Blu acciaio', 'Stahlblau', 'Bleu acier', 'Azul acero', 'Blu acciaio', 'Staalblauw'),
('RAL 5007', '163-217-230', '#A3D9E6', '14-8-0-2', 66.70, 'Blu pastello', 'Pastellblau', 'Bleu pastel', 'Azul pastel', 'Blu pastello', 'Pastelblauw'),
('RAL 5008', '117-134-145', '#758992', '14-5-4-46', 29.79, 'Grigio bluastro', 'Graublau', 'Gris bleuté', 'Gris azulado', 'Grigio bluastro', 'Blauwgrijs'),
('RAL 5009', '0-32-63', '#003554', '100-72-0-56', 10.60, 'Blu cielo', 'Sky Blue', 'Bleu ciel', 'Azul cielo', 'Blu cielo', 'Luchblauw'),
('RAL 5010', '0-72-124', '#005A7F', '100-50-0-40', 14.10, 'Blu ombra', 'Sky Blue', 'Bleu ciel', 'Azul cielo', 'Blu ombra', 'Luchblauw'),
('RAL 5011', '0-61-93', '#003F6C', '100-71-0-53', 10.15, 'Blu brillante', 'Brillantblau', 'Bleu brillant', 'Azul brillante', 'Blu brillante', 'Helderblauw'),
('RAL 5012', '0-59-96', '#003E6C', '100-70-0-54', 10.43, 'Blu intenso', 'Intensivblau', 'Bleu intense', 'Azul intenso', 'Blu intenso', 'Intensiefblauw'),
('RAL 5013', '0-51-92', '#00368F', '100-63-0-48', 11.27, 'Blu regale', 'Regalblau', 'Bleu royal', 'Azul real', 'Blu regale', 'Koningsblauw'),
('RAL 5014', '0-50-79', '#004C6C', '100-58-0-53', 13.68, 'Blu cielo', 'Sky Blue', 'Bleu ciel', 'Azul cielo', 'Blu cielo', 'Luchblauw'),
('RAL 5015', '0-70-113', '#0072C6', '100-59-0-0', 25.88, 'Blu segnale', 'Signalblau', 'Bleu signal', 'Azul señal', 'Blu segnale', 'Signaalblauw'),
('RAL 5017', '0-73-91', '#0055A2', '100-50-0-20', 25.33, 'Blu brillante', 'Brillantblau', 'Bleu brillant', 'Azul brillante', 'Blu brillante', 'Helderblauw'),
('RAL 5018', '0-88-118', '#00B19F', '100-30-35-8', 33.42, 'Blu chiaro', 'Hellblau', 'Bleu clair', 'Azul claro', 'Blu chiaro', 'Lichtblauw'),
('RAL 5019', '0-58-84', '#004C68', '100-70-0-42', 18.70, 'Blu cielo', 'Sky Blue', 'Bleu ciel', 'Azul cielo', 'Blu cielo', 'Luchblauw'),
('RAL 5020', '0-42-76', '#00345A', '100-77-0-28', 17.41, 'Blu scuro', 'Stahlblau', 'Bleu foncé', 'Azul oscuro', 'Blu scuro', 'Donkerblauw'),
('RAL 5021', '0-68-95', '#005D77', '100-54-0-49', 27.14, 'Blu marino', 'Himmelblau', 'Bleu marine', 'Azul marino', 'Blu marino', 'Marineblauw'),
('RAL 5022', '27-30-34', '#1B1B1B', '84-70-54-90', 6.48, 'Blu antracite', 'Anthrazit', 'Gris anthracite', 'Gris antracita', 'Grigio antracite', 'Antraciet'),
('RAL 5024', '168-175-179', '#A8AFB3', '13-9-8-25', 40.69, 'Grigio chiaro', 'Pastellgrau', 'Gris clair', 'Gris claro', 'Grigio chiaro', 'Lichtgrijs'),
('RAL 5026', '5-23-49', '#003D6C', '100-60-2-56', 11.83, 'Blu metallizzato', 'Metallblau', 'Bleu métallisé', 'Azul metálico', 'Blu metallizzato', 'Metaalblauw'),
('RAL 6000', '0-51-50', '#003D48', '100-31-35-51', 16.48, 'Blu verde', 'Patina', 'Bleu verdâtre', 'Azul verdoso', 'Blu verde', 'Patina'),
('RAL 6001', '0-53-59', '#003A4C', '100-46-43-48', 21.23, 'Blu verde', 'Grünblau', 'Bleu vert', 'Azul verde', 'Blu verde', 'Groenblauw'),
('RAL 6002', '0-57-68', '#003D50', '100-43-38-33', 18.83, 'Blu intenso', 'Aluminiumblau', 'Bleu aluminium', 'Azul aluminio', 'Blu intenso', 'Aluminiumblauw'),
('RAL 6003', '0-54-52', '#003542', '100-23-20-43', 17.85, 'Blu scuro', 'Obergrün', 'Bleu sombre', 'Azul oscuro', 'Blu scuro', 'Donkergroen'),
('RAL 6004', '0-48-73', '#003B60', '100-58-28-20', 17.47, 'Blu notte', 'Nachtblau', 'Bleu nuit', 'Azul noche', 'Blu notte', 'Nachtblauw'),
('RAL 6005', '0-50-45', '#004d3b', '100-29-42-16', 20.14, 'Verde bosco', 'Mossgrün', 'Vert mousse', 'Verde musgo', 'Verde bosco', 'Mosgroen'),
('RAL 6006', '26-32-27', '#1A1F1B', '70-50-55-70', 9.71, 'Verde scuro', 'Bourgogrün', 'Vert foncé', 'Verde oscuro', 'Verde scuro', 'Donkergroen'),
('RAL 6007', '5-32-36', '#003F30', '99-28-58-26', 11.44, 'Verde bluastro', 'Lichtgrau', 'Vert bleuâtre', 'Verde azulado', 'Verde bluastro', 'Blauwgroen'),
('RAL 6008', '0-43-40', '#004d40', '100-25-44-24', 15.46, 'Verde petrolio', 'Grünblau', 'Vert pétrole', 'Verde petróleo', 'Verde petrolio', 'Petrolblauw'),
('RAL 6010', '0-51-42', '#003D3A', '100-26-38-26', 16.14, 'Verde smeraldo', 'Rehgrün', 'Vert émeraude', 'Verde esmeralda', 'Verde smeraldo', 'Smaragdgroen'),
('RAL 6011', '0-40-37', '#003A34', '100-28-38-25', 16.76, 'Verde ombra', 'Blu grün', 'Vert ombre', 'Verde sombra', 'Verde ombra', 'Schaduwgroen'),
('RAL 6012', '0-40-45', '#004d3a', '100-27-41-30', 17.78, 'Verde carbone', 'Schiefergrün', 'Vert ardoise', 'Verde pizarra', 'Verde carbone', 'Leisteengroen'),
('RAL 6013', '0-35-36', '#004e4e', '100-27-40-30', 16.54, 'Verde acqua', 'Rehgrün', 'Vert menthe', 'Verde menta', 'Verde acqua', 'Mintgroen'),
('RAL 6014', '0-28-30', '#003b2e', '100-17-37-36', 16.71, 'Verde pastello', 'Pastellgrün', 'Vert pastel', 'Verde pastel', 'Verde pastello', 'Pastelgroen'),
('RAL 6015', '0-36-29', '#004d46', '100-12-38-36', 16.50, 'Verde bluastro', 'Blaugrün', 'Vert bleu-vert', 'Verde azulado', 'Verde bluastro', 'Blauwgroen'),
('RAL 6016', '0-36-27', '#004b26', '100-25-44-21', 16.68, 'Verde petrolio', 'Obergrün', 'Vert pétrole', 'Verde petróleo', 'Verde petrolio', 'Petrolgroen'),
('RAL 6017', '0-55-43', '#00924E', '100-6-38-14', 29.71, 'Verde turchese', 'Türkisgrün', 'Vert turquoise', 'Verde turquesa', 'Verde turchese', 'Turkooisgroen'),
('RAL 6018', '0-70-50', '#009e80', '100-0-55-12', 50.56, 'Verde lime', 'Lichtgrün', 'Vert lime', 'Verde lima', 'Verde lime', 'Limoengroen'),
('RAL 6019', '0-92-72', '#00C9B6', '100-0-42-0', 66.64, 'Verde bianco', 'Rehgrün', 'Vert blanc', 'Verde blanco', 'Verde bianco', 'Witgroen'),
('RAL 6020', '0-48-46', '#004d3a', '100-31-43-28', 19.43, 'Verde camoscio', 'Olivegrün', 'Vert olive', 'Verde oliva', 'Verde camoscio', 'Olijfgroen'),
('RAL 6021', '0-38-34', '#004d39', '100-25-36-26', 22.58, 'Verde pastello', 'Pastellgrün', 'Vert pastel', 'Verde pastel', 'Verde pastello', 'Pastelgroen'),
('RAL 6022', '36-32-29', '#3b2e25', '35-40-47-80', 10.60, 'Verde scuro', 'Schwarzgrün', 'Vert sombre', 'Verde oscuro', 'Verde scuro', 'Donkergroen'),
('RAL 6024', '0-58-62', '#008e8e', '100-0-30-15', 35.31, 'Verde acqua', 'Pastellgrün', 'Vert menthe', 'Verde menta', 'Verde acqua', 'Mintgroen'),
('RAL 6026', '0-38-46', '#003b3e', '100-37-46-28', 21.54, 'Verde scuro', 'Blaugrün', 'Vert bleu foncé', 'Verde azul oscuro', 'Verde scuro', 'Donkergroen'),
('RAL 6032', '0-43-36', '#004d4d', '100-28-38-19', 22.35, 'Verde petrolio', 'Grünblau', 'Vert pétrole', 'Verde petróleo', 'Verde petrolio', 'Petrolgroen'),
('RAL 6033', '0-44-49', '#004d4f', '100-22-37-20', 19.82, 'Verde bluastro', 'Lichtgrau', 'Vert bleuâtre', 'Verde azulado', 'Verde bluastro', 'Blauwgroen'),
('RAL 6034', '0-43-54', '#004b4a', '100-23-39-18', 21.36, 'Verde chiaro', 'Himmelblau', 'Vert clair', 'Verde claro', 'Verde chiaro', 'Lichtgroen'),
('RAL 6035', '0-51-44', '#004d43', '100-27-50-18', 17.56, 'Verde scuro', 'Obergrün', 'Vert foncé', 'Verde oscuro', 'Verde scuro', 'Donkergroen'),
('RAL 6036', '0-34-27', '#003e28', '100-26-52-27', 10.56, 'Verde scuro', 'Schiefergrün', 'Vert ardoise', 'Verde pizarra', 'Verde scuro', 'Leisteengroen'),
('RAL 6037', '0-40-30', '#004C2D', '100-33-58-12', 23.31, 'Verde erba', 'Schwartengrün', 'Vert herbe', 'Verde hierba', 'Verde erba', 'Grasgroen'),
('RAL 6038', '0-80-48', '#00B74A', '100-0-72-7', 48.50, 'Verde fluorescente', 'Lichtgrün', 'Vert fluorescent', 'Verde fluorescente', 'Verde fluorescente', 'Fluo-groen'),
('RAL 6040', '31-40-48', '#4C4D4F', '27-22-22-64', 16.92, 'Grigio verde', 'Grünlichgrau', 'Gris vert', 'Gris verdoso', 'Grigio verde', 'Groenachtig grijs'),
('RAL 6041', '0-49-57', '#003D3C', '100-35-34-20', 20.00, 'Grigio verde', 'Eisengrau', 'Gris vert', 'Gris verdoso', 'Grigio verde', 'Groenachtig grijs'),
('RAL 6042', '0-48-50', '#004c4c', '100-33-33-23', 19.76, 'Grigio verde', 'Obergrün', 'Gris vert', 'Gris verde', 'Grigio verde', 'Groenachtig grijs'),
('RAL 6044', '14-26-22', '#4C4C43', '57-39-41-55', 15.33, 'Grigio verde', 'Feldgrau', 'Gris vert', 'Gris verde', 'Grigio verde', 'Groenachtig grijs'),
('RAL 6045', '0-55-54', '#005d5a', '100-1-29-36', 27.71, 'Grigio verde', 'Pistaziengrün', 'Gris vert', 'Gris verdoso', 'Grigio verde', 'Pistachegroen'),
('RAL 6046', '15-25-27', '#393C3D', '50-30-26-80', 12.87, 'Grigio verde', 'Antrazitgrau', 'Gris vert', 'Gris verdoso', 'Grigio verde', 'Antraciet'),
('RAL 7000', '160-160-155', '#A2A29A', '13-13-21-31', 63.60, 'Grigio argento', 'Squirrel Grey', 'Gris argenté', 'Gris plata', 'Grigio argento', 'Zilvergrijs'),
('RAL 7001', '161-161-161', '#A1A1A1', '10-10-10-30', 63.88, 'Grigio argento', 'Silber', 'Gris argenté', 'Gris plata', 'Grigio argento', 'Zilvergrijs'),
('RAL 7002', '134-136-130', '#868882', '16-15-26-46', 35.68, 'Grigio verde', 'Beige grau', 'Gris vert', 'Gris verde', 'Grigio verde', 'Groenachtig grijs'),
('RAL 7003', '119-127-118', '#777F76', '18-11-32-41', 27.88, 'Grigio verde', 'Olivegrau', 'Gris vert olive', 'Gris verde oliva', 'Grigio verde', 'Olijfgroen'),
('RAL 7004', '153-155-155', '#9A9B9B', '16-13-24-35', 65.77, 'Grigio argento', 'Silber', 'Gris argenté', 'Gris plata', 'Grigio argento', 'Zilvergrijs'),
('RAL 7005', '124-124-124', '#7C7C7C', '25-21-21-43', 50.55, 'Grigio argento', 'Silber', 'Gris argenté', 'Gris plata', 'Grigio argento', 'Zilvergrijs'),
('RAL 7006', '123-110-97', '#7B6E61', '10-25-30-46', 29.58, 'Grigio sabbia', 'Beige', 'Gris sable', 'Gris arena', 'Grigio sabbia', 'Zandgrijs'),
('RAL 7008', '130-120-107', '#827D6B', '17-26-34-39', 31.80, 'Grigio oliva', 'Beige', 'Gris olive', 'Gris oliva', 'Grigio oliva', 'Olijfgroen'),
('RAL 7011', '70-75-77', '#4A4B4D', '49-37-31-62', 16.84, 'Grigio ardesia', 'Schiefergrau', 'Gris ardoise', 'Gris pizarra', 'Grigio ardesia', 'Leisteengrijs'),
('RAL 7012', '68-68-68', '#444545', '35-35-35-65', 22.47, 'Grigio basalto', 'Basaltgrau', 'Gris basalte', 'Gris basalto', 'Grigio basalto', 'Basaltgrijs'),
('RAL 7013', '51-51-51', '#333333', '0-0-0-80', 12.12, 'Grigio ardesia', 'Schiefergrau', 'Gris ardoise', 'Gris pizarra', 'Grigio ardesia', 'Leisteengrijs'),
('RAL 7015', '58-58-59', '#3A3A3B', '64-56-43-85', 12.63, 'Grigio antracite', 'Anthrazit', 'Gris anthracite', 'Gris antracita', 'Grigio antracite', 'Antraciet'),
('RAL 7016', '0-0-0', '#000000', '100-100-100-70', 4.75, 'Grigio antracite', 'Anthrazit', 'Gris anthracite', 'Gris antracita', 'Grigio antracite', 'Antraciet'),
('RAL 7021', '30-30-30', '#4A4A4A', '0-0-0-70', 15.10, 'Grigio nero', 'Schwarzgrau', 'Gris noir', 'Gris negro', 'Grigio nero', 'Zwartgrijs'),
('RAL 7022', '44-44-44', '#2E2E2E', '0-0-0-80', 9.67, 'Grigio basalto', 'Betongrau', 'Gris béton', 'Gris cemento', 'Grigio basalto', 'Betongrijs'),
('RAL 7023', '122-122-122', '#7A7A7A', '22-20-20-51', 43.24, 'Grigio cemento', 'Betongrau', 'Gris béton', 'Gris cemento', 'Grigio cemento', 'Betongrijs'),
('RAL 7024', '60-60-60', '#3D3D3D', '0-0-0-80', 19.26, 'Grigio argento', 'Silber', 'Gris argenté', 'Gris plata', 'Grigio argento', 'Zilvergrijs'),
('RAL 7026', '21-21-21', '#2D2D2D', '0-0-0-85', 6.35, 'Grigio antracite', 'Schiefergrau', 'Gris ardoise', 'Gris pizarra', 'Grigio antracite', 'Leisteengrijs'),
('RAL 7030', '131-130-127', '#83827F', '17-15-22-38', 38.27, 'Grigio pietra', 'Steingrau', 'Gris pierre', 'Gris piedra', 'Grigio pietra', 'Steengrijs'),
('RAL 7031', '131-131-137', '#6F6F6F', '35-30-20-45', 28.24, 'Grigio ardesia', 'Schiefergrau', 'Gris ardoise', 'Gris pizarra', 'Grigio ardesia', 'Leisteengrijs'),
('RAL 7032', '149-149-145', '#949591', '12-12-24-35', 46.35, 'Grigio argento', 'Silber', 'Gris argenté', 'Gris plata', 'Grigio argento', 'Zilvergrijs'),
('RAL 7033', '128-128-126', '#80807F', '20-18-26-50', 35.37, 'Grigio cemento', 'Betongrau', 'Gris béton', 'Gris cemento', 'Grigio cemento', 'Betongrijs'),
('RAL 7034', '157-157-141', '#9D9D8D', '16-16-28-46', 37.71, 'Grigio sabbia', 'Beige grau', 'Gris sable', 'Gris arena', 'Grigio sabbia', 'Zandgrijs'),
('RAL 7035', '150-150-148', '#969696', '17-14-21-34', 43.25, 'Grigio chiaro', 'Kieselgrau', 'Gris clair', 'Gris claro', 'Grigio chiaro', 'Lichtgrijs'),
('RAL 7036', '130-130-130', '#828282', '13-11-25-43', 49.14, 'Grigio medio', 'Platinagrün', 'Gris moyen', 'Gris medio', 'Grigio medio', 'Middengrijs'),
('RAL 7037', '121-121-121', '#7A7A7A', '22-18-18-37', 32.67, 'Grigio argento', 'Silber', 'Gris argenté', 'Gris plata', 'Grigio argento', 'Zilvergrijs'),
('RAL 7038', '128-126-122', '#7F7F7A', '17-18-30-33', 35.61, 'Grigio ghiaia', 'Steingrau', 'Gris pierre', 'Gris piedra', 'Grigio ghiaia', 'Steengrijs'),
('RAL 7039', '124-124-124', '#7C7C7C', '35-35-35-50', 37.13, 'Grigio ardesia', 'Basaltgrau', 'Gris basalte', 'Gris basalto', 'Grigio ardesia', 'Basaltgrijs'),
('RAL 7040', '63-63-63', '#3F3F3F', '0-0-0-70', 21.12, 'Grigio antracite', 'Platinagrau', 'Gris anthracite', 'Gris antracita', 'Grigio antracite', 'Platinagrijs'),
('RAL 7042', '129-129-129', '#818181', '0-0-0-50', 30.24, 'Grigio piombo', 'Lichtgrau', 'Gris plomb', 'Gris plomo', 'Grigio piombo', 'Lichtgrijs'),
('RAL 7043', '43-43-43', '#2B2B2B', '0-0-0-85', 8.96, 'Grigio ferro', 'Schwarzgrau', 'Gris fer', 'Gris hierro', 'Grigio ferro', 'Zwartgrijs'),
('RAL 7044', '118-118-117', '#767676', '30-30-30-40', 39.14, 'Grigio quarzo', 'Silber', 'Gris quartz', 'Gris cuarzo', 'Grigio quarzo', 'Quartzgrijs'),
('RAL 7045', '112-112-112', '#707070', '22-22-22-45', 29.12, 'Grigio basalto', 'Silber', 'Gris basalte', 'Gris basalto', 'Grigio basalto', 'Basaltgrijs'),
('RAL 7046', '76-76-76', '#4C4C4C', '0-0-0-70', 21.14, 'Grigio basalto', 'Anthrazit', 'Gris basalte', 'Gris basalto', 'Grigio basalto', 'Basaltgrijs'),
('RAL 7047', '117-117-117', '#6D6D6D', '28-28-28-44', 36.70, 'Grigio argento', 'Silber', 'Gris argenté', 'Gris plata', 'Grigio argento', 'Zilvergrijs'),
('RAL 7048', '87-87-86', '#575757', '32-31-32-56', 29.92, 'Grigio ferro', 'Schiefergrau', 'Gris fer', 'Gris hierro', 'Grigio ferro', 'Leisteengrijs'),
('RAL 8000', '63-43-36', '#4D2C23', '68-47-50-73', 11.46, 'Marrone grigio', 'Beige braun', 'Marron gris', 'Marrón gris', 'Marrone grigio', 'Grijsbruin'),
('RAL 8001', '71-45-32', '#6D2C1F', '61-51-55-76', 15.76, 'Marrone terra', 'Erdbraun', 'Marron terre', 'Marrón tierra', 'Marrone terra', 'Aardbruin'),
('RAL 8002', '63-37-28', '#4D2C1C', '60-47-50-73', 14.50, 'Marrone arancio', 'Braun', 'Marron orange', 'Marrón naranja', 'Marrone arancio', 'Oranjebruin'),
('RAL 8003', '66-40-27', '#4D2B1B', '55-43-50-51', 17.13, 'Marrone rossiccio', 'Orangebraun', 'Marron rougeâtre', 'Marrón rojizo', 'Marrone rossiccio', 'Roodbruin'),
('RAL 8004', '57-33-22', '#4A2A14', '64-43-52-68', 11.78, 'Marrone rossiccio', 'Kupferbraun', 'Marron rouille', 'Marrón óxido', 'Marrone rossiccio', 'Roestbruin'),
('RAL 8005', '61-33-24', '#4E2A18', '60-43-50-43', 12.22, 'Marrone bronzo', 'Kastanienbraun', 'Marron bronze', 'Marrón bronce', 'Marrone bronzo', 'Chestnutbruin'),
('RAL 8006', '49-32-23', '#4F1F0F', '63-46-51-80', 11.53, 'Marrone scuro', 'Fichtengrün', 'Marron foncé', 'Marrón oscuro', 'Marrone scuro', 'Donkerbruin'),
('RAL 8007', '46-29-19', '#3D1D13', '71-47-64-69', 10.52, 'Marrone scuro', 'Schokoladenbraun', 'Marron foncé', 'Marrón oscuro', 'Marrone scuro', 'Donkerbruin'),
('RAL 8008', '38-33-26', '#3F2B1A', '80-58-66-70', 11.91, 'Marrone oliva', 'Olivebraun', 'Marron olive', 'Marrón oliva', 'Marrone oliva', 'Olijfgroen'),
('RAL 8011', '46-35-30', '#3B2D1E', '64-55-59-71', 10.54, 'Marrone nero', 'Rostbraun', 'Marron noir', 'Marrón negro', 'Marrone nero', 'Rostbruin'),
('RAL 8012', '59-37-30', '#4E2D1E', '53-52-54-31', 15.68, 'Marrone rosso', 'Kupferrot', 'Marron rouge', 'Marrón rojo', 'Marrone rosso', 'Koperrood'),
('RAL 8014', '47-32-20', '#4B2A14', '60-40-52-63', 13.55, 'Marrone scuro', 'Kastanienbraun', 'Marron foncé', 'Marrón oscuro', 'Marrone scuro', 'Donkerbruin'),
('RAL 8015', '43-35-26', '#4B2B1A', '65-53-53-67', 12.41, 'Marrone scuro', 'Schokoladenbraun', 'Marron foncé', 'Marrón oscuro', 'Marrone scuro', 'Donkerbruin'),
('RAL 8016', '38-28-18', '#3C1D12', '71-47-63-61', 12.25, 'Marrone scuro', 'Braun', 'Marron foncé', 'Marrón oscuro', 'Marrone scuro', 'Donkerbruin'),
('RAL 8022', '40-31-29', '#3B1F1D', '67-51-49-78', 7.86, 'Nero', 'Schwarz', 'Noir', 'Negro', 'Nero', 'Zwart'),
('RAL 8023', '87-47-32', '#7F3B20', '20-55-77-33', 22.09, 'Arancio', 'Orange', 'Orange', 'Naranja', 'Arancio', 'Oranje'),
('RAL 8024', '88-71-59', '#8A6D3C', '27-44-61-40', 26.58, 'Beige', 'Beige', 'Beige', 'Beige', 'Beige', 'Beige'),
('RAL 8025', '68-53-43', '#6A3A2B', '46-54-63-32', 21.85, 'Beige', 'Beige', 'Beige', 'Beige', 'Beige', 'Beige'),
('RAL 8028', '53-39-30', '#4A2B1F', '51-58-66-54', 14.94, 'Beige scuro', 'Braun', 'Beige foncé', 'Beige oscuro', 'Beige scuro', 'Bruin'),
('RAL 9001', '255-255-255', '#FFFFFF', '0-0-0-0', 100.00, 'Bianco', 'Weiß', 'Blanc', 'Blanco', 'Bianco', 'Wit'),
('RAL 9002', '237-234-229', '#EDEAE5', '6-3-10-2', 92.68, 'Bianco grigio', 'Grauweiß', 'Blanc gris', 'Blanco gris', 'Bianco grigio', 'Grijswit'),
('RAL 9003', '255-255-255', '#FFFFFF', '0-0-0-0', 100.00, 'Bianco', 'Reinweiß', 'Blanc', 'Blanco', 'Bianco', 'Wit'),
('RAL 9004', '0-0-0', '#000000', '0-0-0-100', 0.00, 'Nero', 'Schwarz', 'Noir', 'Negro', 'Nero', 'Zwart'),
('RAL 9005', '0-0-0', '#000000', '0-0-0-100', 0.00, 'Nero', 'Schwarz', 'Noir', 'Negro', 'Nero', 'Zwart'),
('RAL 9006', '233-233-233', '#E9E9E9', '0-0-0-10', 91.18, 'Bianco alluminio', 'Aluweiß', 'Blanc aluminium', 'Blanco aluminio', 'Bianco alluminio', 'Aluminiumwit'),
('RAL 9007', '0-0-0', '#000000', '0-0-0-100', 0.00, 'Nero', 'Schwarz', 'Noir', 'Negro', 'Nero', 'Zwart'),
('RAL 9010', '255-255-255', '#FFFFFF', '0-0-0-0', 100.00, 'Bianco', 'Reinweiß', 'Blanc', 'Blanco', 'Bianco', 'Wit'),
('RAL 9011', '0-0-0', '#000000', '0-0-0-100', 0.00, 'Nero', 'Schwarz', 'Noir', 'Negro', 'Nero', 'Zwart'),
('RAL 9016', '255-255-255', '#FFFFFF', '0-0-0-0', 100.00, 'Bianco', 'Verkehrsweiß', 'Blanc', 'Blanco', 'Bianco', 'Wit'),
('RAL 9017', '0-0-0', '#000000', '0-0-0-100', 0.00, 'Nero', 'Schwarz', 'Noir', 'Negro', 'Nero', 'Zwart'),
('RAL 9018', '255-255-255', '#FFFFFF', '0-0-0-0', 100.00, 'Bianco', 'Reinweiß', 'Blanc', 'Blanco', 'Bianco', 'Wit');
