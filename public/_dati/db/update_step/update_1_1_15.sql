DELETE FROM lmgc_Brand;

CREATE TABLE IF NOT EXISTS lmgc_Nationalities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    name_italian VARCHAR(255) NOT NULL,
    name_french VARCHAR(255) NOT NULL,
    name_spanish VARCHAR(255) NOT NULL,
    name_german VARCHAR(255) NOT NULL,
    name_portuguese VARCHAR(255) NOT NULL,
    note TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE lmgc_People
ADD CONSTRAINT fk_nationality FOREIGN KEY (nationality) REFERENCES lmgc_Nationalities(id);

INSERT INTO lmgc_Nationalities (name, name_italian, name_french, name_spanish, name_german, name_portuguese, note) VALUES
('Afghan', 'Afghano', 'Afghan', 'Afgano', 'Afghane', 'Afegão', 'Nota su Afghan'),
('Albanian', 'Albanese', 'Albanais', 'Albanés', 'Albanisch', 'Albanês', 'Nota su Albanian'),
('Algerian', 'Algerino', 'Algérien', 'Argelino', 'Algerisch', 'Argelino', 'Nota su Algerian'),
('American', 'Americano', 'Américain', 'Americano', 'Amerikanisch', 'Americano', 'Nota su Americano'),
('Andorran', 'Andorrano', 'Andorran', 'Andorrano', 'Andorranisch', 'Andorrano', 'Nota su Andorran'),
('Angolan', 'Angolano', 'Angolais', 'Angoleño', 'Angolanisch', 'Angolano', 'Nota su Angolan'),
('Argentine', 'Argentino', 'Argentin', 'Argentino', 'Argentinisch', 'Argentino', 'Nota su Argentine'),
('Armenian', 'Armeno', 'Arménien', 'Armenio', 'Armenisch', 'Armênio', 'Nota su Armenian'),
('Australian', 'Australiano', 'Australien', 'Australiano', 'Australisch', 'Australiano', 'Nota su Australian'),
('Austrian', 'Austriaco', 'Autrichien', 'Austriaco', 'Österreichisch', 'Austríaco', 'Nota su Austrian'),
('Azerbaijani', 'Azerbaigiano', 'Azerbaïdjanais', 'Azerí', 'Aserbaidschanisch', 'Azeri', 'Nota su Azerbaijani'),
('Bahamian', 'Bahamense', 'Bahamien', 'Bahamense', 'Bahamesisch', 'Bahamense', 'Nota su Bahamian'),
('Bahraini', 'Bahreinita', 'Bahreïnien', 'Bareiní', 'Bahrainisch', 'Bareinita', 'Nota su Bahraini'),
('Bangladeshi', 'Bangladese', 'Bangladais', 'Bangladesí', 'Bangladeschisch', 'Bangladeshiano', 'Nota su Bangladeshi'),
('Barbadian', 'Barbadiano', 'Barbadien', 'Barbadense', 'Barbadisch', 'Barbadense', 'Nota su Barbadian'),
('Belarusian', 'Bielorusso', 'Biélorusse', 'Bielorruso', 'Belarussisch', 'Bielorrusso', 'Nota su Belarusian'),
('Belgian', 'Belga', 'Belge', 'Belga', 'Belgisch', 'Belga', 'Nota su Belgian'),
('Belizean', 'Beliziano', 'Bélizéen', 'Beliceño', 'Belizisch', 'Belizenho', 'Nota su Belizean'),
('Beninese', 'Beninese', 'Béninois', 'Beninés', 'Beninisch', 'Beninense', 'Nota su Beninese'),
('Bhutanese', 'Bhutanese', 'Bhoutanais', 'Butanés', 'Bhutanisch', 'Butanês', 'Nota su Bhutanese'),
('Bolivian', 'Boliviano', 'Bolivien', 'Boliviano', 'Bolivianisch', 'Boliviano', 'Nota su Bolivian'),
('Bosnian', 'Bosniaco', 'Bosniaque', 'Bosnio', 'Bosnisch', 'Bósnio', 'Nota su Bosnian'),
('Botswanan', 'Botswanese', 'Botswanais', 'Botswanés', 'Botswanisch', 'Botsuanense', 'Nota su Botswanan'),
('Brazilian', 'Brasiliano', 'Brésilien', 'Brasileño', 'Brasilianisch', 'Brasileiro', 'Nota su Brazilian'),
('British', 'Britannico', 'Britannique', 'Británico', 'Britisch', 'Britânico', 'Nota su British'),
('Bruneian', 'Bruneiano', 'Brunéien', 'Bruneano', 'Bruneiisch', 'Bruneano', 'Nota su Bruneian'),
('Bulgarian', 'Bulgaro', 'Bulgare', 'Búlgaro', 'Bulgarisch', 'Búlgaro', 'Nota su Bulgarian'),
('Burkinabe', 'Burkinabè', 'Burkinabé', 'Burkinés', 'Burkinisch', 'Burquinense', 'Nota su Burkinabe'),
('Burundian', 'Burundese', 'Burundais', 'Burundés', 'Burundisch', 'Burundês', 'Nota su Burundian'),
('Cambodian', 'Cambogiano', 'Cambodgien', 'Camboyano', 'Kambodschanisch', 'Cambojano', 'Nota su Cambodian'),
('Cameroonian', 'Camerunese', 'Camerounais', 'Camerunés', 'Kamerunisch', 'Camarones', 'Nota su Cameroonian'),
('Canadian', 'Canadese', 'Canadien', 'Canadiense', 'Kanadisch', 'Canadense', 'Nota su Canadian'),
('Cape Verdean', 'Capoverdiano', 'Cap-Verdien', 'Cabo Verdiano', 'Kapverdisch', 'Cabo-verdiano', 'Nota su Cape Verdean'),
('Central African', 'Centrafricano', 'Centrafricain', 'Centroafricano', 'Zentralafrikanisch', 'Centro-africano', 'Nota su Central African'),
('Chadian', 'Ciadiano', 'Tchadien', 'Chadiano', 'Tschadisch', 'Chadiano', 'Nota su Chadian'),
('Chilean', 'Chileno', 'Chilien', 'Chileno', 'Chilenisch', 'Chileno', 'Nota su Chilean'),
('Chinese', 'Cinese', 'Chinois', 'Chino', 'Chinesisch', 'Chinês', 'Nota su Chinese'),
('Colombian', 'Colombiano', 'Colombien', 'Colombiano', 'Kolumbianisch', 'Colombiano', 'Nota su Colombian'),
('Comoran', 'Comoriano', 'Comorien', 'Comorense', 'Komorisch', 'Comorano', 'Nota su Comoran'),
('Congolese', 'Congolese', 'Congolais', 'Congoleño', 'Kongolesisch', 'Congolês', 'Nota su Congolese'),
('Costa Rican', 'Costaricano', 'Costaricien', 'Costarricense', 'Costa-ricanisch', 'Costarriquenho', 'Nota su Costa Rican'),
('Croatian', 'Croato', 'Croate', 'Croata', 'Kroatisch', 'Croata', 'Nota su Croatian'),
('Cuban', 'Cubano', 'Cubain', 'Cubano', 'Kubanisch', 'Cubano', 'Nota su Cuban'),
('Cypriot', 'Cipriota', 'Chypriote', 'Chipriota', 'Zypriotisch', 'Cipriota', 'Nota su Cypriot'),
('Czech', 'Ceco', 'Tchèque', 'Checo', 'Tschechisch', 'Checo', 'Nota su Czech'),
('Danish', 'Danese', 'Danois', 'Danés', 'Dänisch', 'Dinamarquês', 'Nota su Danish'),
('Djiboutian', 'Gibutiano', 'Djiboutien', 'Yibutiano', 'Dschibutisch', 'Djibutiano', 'Nota su Djiboutian'),
('Dominican', 'Dominicano', 'Dominicain', 'Dominicano', 'Dominikanisch', 'Dominicano', 'Nota su Dominican'),
('Dutch', 'Olandese', 'Néerlandais', 'Holandés', 'Niederländisch', 'Holandês', 'Nota su Dutch'),
('East Timorese', 'Timorese', 'Est-Timorais', 'Timorense', 'Osttimoresisch', 'Timorense', 'Nota su East Timorese'),
('Ecuadorian', 'Ecuadoriano', 'Équatorien', 'Ecuatoriano', 'Ecuadorianisch', 'Equatoriano', 'Nota su Ecuadorian'),
('Egyptian', 'Egiziano', 'Égyptien', 'Egipcio', 'Ägyptisch', 'Egípcio', 'Nota su Egyptian'),
('Emirati', 'Emiratino', 'Émirati', 'Emiratí', 'Emiratisch', 'Emiratense', 'Nota su Emirati'),
('Equatoguinean', 'Guineano Equatoriale', 'Équatoguinéen', 'Guineano Ecuatorial', 'Äquatorialguineisch'),
('Eritrean', 'Eritreo', 'Érythréen', 'Eritreo', 'Eritreisch', 'Eritreu', 'Nota su Eritrean'),
('Estonian', 'Estone', 'Estonien', 'Estonio', 'Estnisch', 'Estoniano', 'Nota su Estonian'),
('Ethiopian', 'Ethiopico', 'Éthiopien', 'Etíope', 'Äthiopisch', 'Etíope', 'Nota su Ethiopian'),
('Fijian', 'Fijiano', 'Fidjien', 'Fijiano', 'Fidschianisch', 'Fijiano', 'Nota su Fijian'),
('Filipino', 'Filippino', 'Philippin', 'Filipino', 'Philippinisch', 'Filipino', 'Nota su Filipino'),
('Finnish', 'Finlandese', 'Finlandais', 'Finlandés', 'Finnisch', 'Finlandês', 'Nota su Finnish'),
('French', 'Francese', 'Français', 'Francés', 'Französisch', 'Francês', 'Nota su French'),
('Gabonese', 'Gabonese', 'Gabonais', 'Gabones', 'Gabonisch', 'Gabônes', 'Nota su Gabonese'),
('Gambian', 'Gambiano', 'Gambien', 'Gambiano', 'Gambisch', 'Gambiano', 'Nota su Gambian'),
('Georgian', 'Georgiano', 'Géorgien', 'Georgiano', 'Georgisch', 'Georgiano', 'Nota su Georgian'),
('German', 'Tedesco', 'Allemand', 'Alemán', 'Deutsch', 'Alemão', 'Nota su German'),
('Ghanaian', 'Ghanese', 'Ghanéen', 'Ghanés', 'Ghanaisch', 'Ghanês', 'Nota su Ghanaian'),
('Greek', 'Greco', 'Grec', 'Griego', 'Griechisch', 'Grego', 'Nota su Greek'),
('Grenadian', 'Grenadese', 'Grenadien', 'Granadino', 'Grenadinisch', 'Granadino', 'Nota su Grenadian'),
('Guatemalan', 'Guatemalteco', 'Guatémaltèque', 'Guatemalteco', 'Guatemaltekisch', 'Guatemalteco', 'Nota su Guatemalan'),
('Guinean', 'Guineano', 'Guinéen', 'Guineano', 'Guineisch', 'Guineano', 'Nota su Guinean'),
('Guyanese', 'Guyanese', 'Guyanais', 'Guyanes', 'Guyanesisch', 'Guyanês', 'Nota su Guyanese'),
('Haitian', 'Haitiano', 'Haïtien', 'Haitiano', 'Haitianisch', 'Haitiano', 'Nota su Haitian'),
('Honduran', 'Honduregno', 'Hondurien', 'Hondureño', 'Honduranisch', 'Hondurenho', 'Nota su Honduran'),
('Hungarian', 'Ungherese', 'Hongrois', 'Húngaro', 'Ungarisch', 'Húngaro', 'Nota su Hungarian'),
('Icelandic', 'Islandese', 'Islandais', 'Islandés', 'Isländisch', 'Islandês', 'Nota su Icelandic'),
('Indian', 'Indiano', 'Indien', 'Indio', 'Indisch', 'Indiano', 'Nota su Indian'),
('Indonesian', 'Indonesiano', 'Indonésien', 'Indonesio', 'Indonesisch', 'Indonésio', 'Nota su Indonesian'),
('Iranian', 'Iraniano', 'Iranien', 'Iraní', 'Iranisch', 'Iraniano', 'Nota su Iranian'),
('Iraqi', 'Irakeno', 'Irakien', 'Irakí', 'Irakisch', 'Iraquiano', 'Nota su Iraqi'),
('Irish', 'Irlandese', 'Irlandais', 'Irlandés', 'Irisch', 'Irlandês', 'Nota su Irish'),
('Israeli', 'Israeliano', 'Israélien', 'Israelí', 'Israeli', 'Israelense', 'Nota su Israeli'),
('Italian', 'Italiano', 'Italien', 'Italiano', 'Italienisch', 'Italiano', 'Nota su Italian'),
('Jamaican', 'Giamicano', 'Jamaïcain', 'Jamaicano', 'Jamaikanisch', 'Jamaicano', 'Nota su Jamaican'),
('Japanese', 'Giapponese', 'Japonais', 'Japonés', 'Japanisch', 'Japonês', 'Nota su Japanese'),
('Jordanian', 'Giordano', 'Jordannais', 'Jordano', 'Jordanisch', 'Jordano', 'Nota su Jordanian'),
('Kazakh', 'Kazako', 'Kazakh', 'Kazajo', 'Kasachisch', 'Cazaque', 'Nota su Kazakh'),
('Kenyan', 'Kenyano', 'Kényan', 'Keniano', 'Kenyaisch', 'Queniano', 'Nota su Kenyan'),
('Kiribati', 'Kiribatiano', 'Kiribatis', 'Kiribatiano', 'Kiribatisch', 'Kiribatiano', 'Nota su Kiribati'),
('Kuwaiti', 'Kuwaitiano', 'Koweïtien', 'Kuwaití', 'Kuwaitisch', 'Kuwaitiano', 'Nota su Kuwaiti'),
('Laotian', 'Laotiano', 'Laotien', 'Laosiano', 'Laotisch', 'Laosiano', 'Nota su Laotian'),
('Latvian', 'Lettone', 'Letton', 'Letón', 'Lettisch', 'Letão', 'Nota su Latvian'),
('Lebanese', 'Libanese', 'Libanais', 'Libanés', 'Libanesisch', 'Libanês', 'Nota su Lebanese'),
('Liberian', 'Liberiano', 'Libérien', 'Liberiano', 'Liberianisch', 'Liberiano', 'Nota su Liberian'),
('Libyan', 'Libico', 'Libyen', 'Libio', 'Libysch', 'Líbio', 'Nota su Libyan'),
('Liechtensteiner', 'Liechtensteiniano', 'Liechtensteinois', 'Liechtensteiniano', 'Liechtensteinisch', 'Liechtensteiniano', 'Nota su Liechtensteiner'),
('Lithuanian', 'Lituano', 'Lituanien', 'Lituano', 'Litauisch', 'Lituano', 'Nota su Lithuanian'),
('Luxembourger', 'Lussemburghese', 'Luxembourgeois', 'Luxemburgués', 'Luxemburgisch', 'Luxemburguês', 'Nota su Luxembourger'),
('Malagasy', 'Malgascio', 'Malgache', 'Malgache', 'Madagassisch', 'Malgaxe', 'Nota su Malagasy'),
('Malawian', 'Malawiano', 'Malawien', 'Malauí', 'Malawisch', 'Malawiano', 'Nota su Malawian'),
('Malaysian', 'Malesiano', 'Malaisien', 'Malasio', 'Malaysisch', 'Malaio', 'Nota su Malaysian'),
('Maldivian', 'Maldiviano', 'Maldivien', 'Maldivo', 'Maldivisch', 'Maldivo', 'Nota su Maldivian'),
('Malian', 'Maliano', 'Malien', 'Maliano', 'Malisch', 'Maliano', 'Nota su Malian'),
('Maltese', 'Maltese', 'Maltais', 'Maltés', 'Maltesisch', 'Maltês', 'Nota su Maltese'),
('Marshallese', 'Marshallese', 'Marshallais', 'Marshallés', 'Marshallisch', 'Marshallês', 'Nota su Marshallese'),
('Mauritanian', 'Mauretano', 'Mauritanien', 'Mauritano', 'Mauretanisch', 'Mauritano', 'Nota su Mauritanian'),
('Mauritian', 'Mauriziano', 'Mauricien', 'Mauriciano', 'Maurizianisch', 'Mauriciano', 'Nota su Mauritian'),
('Mexican', 'Messicano', 'Mexicain', 'Mexicano', 'Mexikanisch', 'Mexicano', 'Nota su Mexican'),
('Micronesian', 'Micronesiano', 'Micronésien', 'Micronesio', 'Mikronesisch', 'Micronésio', 'Nota su Micronesian'),
('Moldovan', 'Moldavo', 'Moldave', 'Moldavo', 'Moldawisch', 'Moldavo', 'Nota su Moldovan'),
('Monacan', 'Monacense', 'Monégasque', 'Monegasco', 'Monégassisch', 'Monegasco', 'Nota su Monacan'),
('Mongolian', 'Mongolo', 'Mongol', 'Mongol', 'Mongolisch', 'Mongol', 'Nota su Mongolian'),
('Moroccan', 'Marocchino', 'Marocain', 'Marroquí', 'Marokkanisch', 'Marroquino', 'Nota su Moroccan'),
('Mozambican', 'Mozambicano', 'Mozambicain', 'Mozambiqueño', 'Mosambikisch', 'Moçambicano', 'Nota su Mozambican'),
('Namibian', 'Namibiano', 'Namibien', 'Namibio', 'Namibisch', 'Namibiano', 'Nota su Namibian'),
('Nauruan', 'Nauruano', 'Nauruan', 'Nauruano', 'Nauruisch', 'Nauruano', 'Nota su Nauruan'),
('Nepalese', 'Nepalese', 'Népalais', 'Nepalí', 'Nepalesisch', 'Nepalês', 'Nota su Nepalese'),
('New Zealander', 'Neozelandese', 'Néo-Zélandais', 'Neozelandés', 'Neuseeländisch', 'Neozelandês', 'Nota su New Zealander'),
('Nicaraguan', 'Nicaraguense', 'Nicaraguéen', 'Nicaragüense', 'Nikaraguanisch', 'Nicaraguense', 'Nota su Nicaraguan'),
('Nigerian', 'Nigeriano', 'Nigérian', 'Nigeriano', 'Nigerianisch', 'Nigeriano', 'Nota su Nigerian'),
('Nigerien', 'Nigerino', 'Nigerien', 'Nigerino', 'Nigerisch', 'Nigerino', 'Nota su Nigerien'),
('North Korean', 'Nordcoreano', 'Nord-Coréen', 'Norcoreano', 'Nordkoreanisch', 'Norte-coreano', 'Nota su North Korean'),
('Northern Irish', 'Irlandese del Nord', 'Irlandais du Nord', 'Irlandés del Norte', 'Nordirisch', 'Irlandês do Norte', 'Nota su Northern Irish'),
('Norwegian', 'Norvegese', 'Norvégien', 'Noruego', 'Norwegisch', 'Norueguês', 'Nota su Norwegian'),
('Omani', 'Omanita', 'Omanais', 'Omaní', 'Omanisch', 'Omanita', 'Nota su Omani'),
('Pakistani', 'Pakistano', 'Pakistanais', 'Paquistaní', 'Pakistani', 'Paquistanês', 'Nota su Pakistani'),
('Palauan', 'Palauan', 'Paluan', 'Palauano', 'Palauanisch', 'Palauano', 'Nota su Palauan'),
('Panamanian', 'Panamense', 'Panaméen', 'Panameño', 'Panamaisch', 'Panamense', 'Nota su Panamanian'),
('Papua New Guinean', 'Papua Nuova Guineana', 'Papou-Néo-Guinéen', 'Papú', 'Papua-Neuguineisch', 'Papua-Nova-Guineano', 'Nota su Papua New Guinean'),
('Paraguayan', 'Paraguaiano', 'Paraguayen', 'Paraguayo', 'Paraguayisch', 'Paraguaio', 'Nota su Paraguayan'),
('Peruvian', 'Peruviano', 'Péruvien', 'Peruano', 'Peruanisch', 'Peruano', 'Nota su Peruvian'),
('Polish', 'Polacco', 'Polonais', 'Polaco', 'Polnisch', 'Polonês', 'Nota su Polish'),
('Portuguese', 'Portoghese', 'Portugais', 'Portugués', 'Portugiesisch', 'Português', 'Nota su Portuguese'),
('Qatari', 'Qatari', 'Qatari', 'Qatari', 'Katarisch', 'Qatariano', 'Nota su Qatari'),
('Romanian', 'Rumeno', 'Roumain', 'Rumano', 'Rumänisch', 'Romeno', 'Nota su Romanian'),
('Russian', 'Russo', 'Russe', 'Ruso', 'Russisch', 'Russo', 'Nota su Russian'),
('Rwandan', 'Ruandese', 'Rwandais', 'Rwandés', 'Ruandisch', 'Rwandês', 'Nota su Rwandan'),
('Saint Lucian', 'Saint Lucian', 'Saint-Lucien', 'Sainte-Lucienne', 'Saint-Lucianisch', 'São-lucense', 'Nota su Saint Lucian'),
('Salvadoran', 'Salvadoreno', 'Salvadorien', 'Salvadoreño', 'Salvadorianisch', 'Salvadorenho', 'Nota su Salvadoran'),
('Samoan', 'Samoano', 'Samoan', 'Samoano', 'Samoanisch', 'Samoano', 'Nota su Samoan'),
('San Marinese', 'Sammarinese', 'Sammarinais', 'Sanmarinés', 'San-marinesisch', 'San-marinhês', 'Nota su San Marinese'),
('Saudi', 'Arabo Saudita', 'Saoudien', 'Saudí', 'Saudi', 'Saudita', 'Nota su Saudi'),
('Senegalese', 'Senegalese', 'Sénégalais', 'Senegalés', 'Senegalesisch', 'Senegalês', 'Nota su Senegalese'),
('Serbian', 'Serbo', 'Serbe', 'Serbio', 'Serbisch', 'Sérvio', 'Nota su Serbian'),
('Seychellois', 'Seychellese', 'Seychellois', 'Seychellois', 'Seychellisch', 'Seychellense', 'Nota su Seychellois'),
('Sierra Leonean', 'Sierro-leonese', 'Sierra-Léonais', 'Serraleonés', 'Sierra-leonisch', 'Sierra-leonês', 'Nota su Sierra Leonean'),
('Singaporean', 'Singaporiano', 'Singapourien', 'Singapurense', 'Singapurisch', 'Cingapurense', 'Nota su Singaporean'),
('Slovak', 'Slovacco', 'Slovaque', 'Eslovaco', 'Slowakisch', 'Eslovaco', 'Nota su Slovak'),
('Slovenian', 'Sloveno', 'Slovène', 'Esloveno', 'Slowenisch', 'Esloveno', 'Nota su Slovenian'),
('Somali', 'Somalo', 'Somalien', 'Somalí', 'Somalisch', 'Somali', 'Nota su Somali'),
('South African', 'Sudafricano', 'Sud-Africain', 'Sudafricano', 'Südafrikanisch', 'Sul-africano', 'Nota su South African'),
('South Korean', 'Coreano del Sud', 'Sud-Coréen', 'Surcoreano', 'Südkoreanisch', 'Sul-coreano', 'Nota su South Korean'),
('Spanish', 'Spagnolo', 'Espagnol', 'Español', 'Spanisch', 'Espanhol', 'Nota su Spanish'),
('Sri Lankan', 'Sri Lankese', 'Sri-Lankais', 'Sri Lankan', 'Sri-Lankisch', 'Sri-lankês', 'Nota su Sri Lankan'),
('Sudanese', 'Sudanese', 'Soudanais', 'Sudanés', 'Sudanesisch', 'Sudanês', 'Nota su Sudanese'),
('Surinamese', 'Surinamese', 'Surinamien', 'Surinamés', 'Surinamisch', 'Surinamês', 'Nota su Surinamese'),
('Swedish', 'Svedese', 'Suédois', 'Sueco', 'Schwedisch', 'Sueco', 'Nota su Swedish'),
('Swiss', 'Svizzero', 'Suisse', 'Suizo', 'Schweizerisch', 'Suíço', 'Nota su Swiss'),
('Syrian', 'Syriano', 'Syrien', 'Sirio', 'Syrisch', 'Sírio', 'Nota su Syrian'),
('Taiwanese', 'Taiwanese', 'Taïwanais', 'Taiwanés', 'Taiwanesisch', 'Taiwanês', 'Nota su Taiwanese'),
('Tajik', 'Tagico', 'Tadjik', 'Tayiko', 'Tadschikisch', 'Tajique', 'Nota su Tajik'),
('Tanzanian', 'Tanzaniano', 'Tanzanien', 'Tanzano', 'Tansanisch', 'Tanzaniano', 'Nota su Tanzanian'),
('Thai', 'Tailandese', 'Thaïlandais', 'Tailandés', 'Thailändisch', 'Tailandês', 'Nota su Thai'),
('Togolese', 'Togolese', 'Togolais', 'Togoleño', 'Togolesisch', 'Togolês', 'Nota su Togolese'),
('Tongan', 'Tonga', 'Tongien', 'Tongano', 'Tongaisch', 'Tongano', 'Nota su Tongan'),
('Trinidadian', 'Trinidadiano', 'Trinidadien', 'Trinitense', 'Trinidadisch', 'Trinitário', 'Nota su Trinidadian'),
('Tunisian', 'Tunisino', 'Tunisien', 'Tunisino', 'Tunesisch', 'Tunisiano', 'Nota su Tunisian'),
('Turkish', 'Turco', 'Turc', 'Turco', 'Türkisch', 'Turco', 'Nota su Turkish'),
('Turkmen', 'Turkmeno', 'Turkmène', 'Turcomano', 'Turkmensch', 'Turcomano', 'Nota su Turkmen'),
('Tuvaluan', 'Tuvaluano', 'Tuvaluan', 'Tuvaluano', 'Tuvaluano', 'Tuvaluano', 'Nota su Tuvaluan'),
('Ugandan', 'Ugandese', 'Ougandais', 'Ugandés', 'Ugandés', 'Ugandês', 'Nota su Ugandan'),
('Ukrainian', 'Ucraino', 'Ukrainien', 'Ucraniano', 'Ukrainisch', 'Ucraniano', 'Nota su Ukrainian'),
('Uruguayan', 'Uruguaiano', 'Uruguayen', 'Uruguayo', 'Uruguayisch', 'Uruguaio', 'Nota su Uruguayan'),
('Uzbek', 'Uzbeco', 'Ouzbek', 'Uzbeco', 'Usbekisch', 'Uzbeque', 'Nota su Uzbek'),
('Venezuelan', 'Venezuelano', 'Vénézuélien', 'Venezolano', 'Venezolanisch', 'Venezuelano', 'Nota su Venezuelan'),
('Vietnamese', 'Vietnamita', 'Vietnamien', 'Vietnamita', 'Vietnamesisch', 'Vietnamita', 'Nota su Vietnamese'),
('Yemeni', 'Yemenita', 'Yéménite', 'Yemení', 'Jemenitisch', 'Yemenita', 'Nota su Yemeni'),
('Zambian', 'Zambiano', 'Zambien', 'Zambiano', 'Sambiano', 'Zambiano', 'Nota su Zambian'),
('Zimbabwean', 'Zimbabwano', 'Zimbabwéen', 'Zimbabuense', 'Simbabweisch', 'Zimbabueano', 'Nota su Zimbabwean');
