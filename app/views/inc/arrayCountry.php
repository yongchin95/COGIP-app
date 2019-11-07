<?php

$continents = [
    'Africa' =>  array('Algeria','Angola','Benin','Botswana','Burkina Faso','Burundi','Cabo Verde','Cameroon','Central African Republic','Chad','Comoros','Democratic Republic of the Congo','Republic of the Congo','Djibouti','Egypt','Equatorial Guinea','Eritrea','Ethiopia','Eswatini','Gabon','Gambia','Ghana','Guinea','Guinea Bissau', 'Ivory Coast', 'Kenya','Lesotho','Liberia','Libya','Madagascar','Malawi','Mali','Mauritania','Mauritius','Morocco','Mozambique','Namibia','Niger','Nigeria','Rwanda','Sao Tome and Principe','Senegal','Seychelles','Sierra Leone','Somalia','South Africa','South Sudan','Sudan','Tanzania','Togo','Tunisia','Uganda','Zambia','Zimbabwe'),
    
    'Asia' => array('Armenia','Azerbaijan','Bahrain','Bangladesh','Bhutan','Brunei', 'Cambodia','China','Cyprus','Georgia','India','Indonesia','Iran','Iraq','Israel', 'Japan','Jordan','Kazakhstan','Kuwait','Kyrgyzstan','Laos','Lebanon','Malaysia','Maldives','Mongolia','Myanmar','Nepal','North Korea','Oman','Pakistan','Palestine','Philippines','Qatar','Russia','Saudi Arabia','Singapore','South Korea','Sri Lanka','Syria','Taiwan','Tajikistan','Thailand','Timor Leste','Turkey','Turkmenistan','United Arab Emirates','Uzbekistan','Vietnam','Yemen'),
    
    'Europe' => array('Albania','Andorra','Armenia','Austria','Azerbaijan','Belarus','Belgium','Bosnia and Herzegovina','Bulgaria','Croatia','Cyprus','Czech Republic','Denmark','Estonia','Finland','France','Georgia','Germany','Greece','Iceland','Ireland','Italy','Kazakhstan','Kosovo','Latvia','Liechtenstein','Lithuania','Luxembourg','Macedonia','Malta','Moldova','Monaco','Montenegro','Netherlands','Norway','Poland','Portugal','Romania','Russia','San Marino','Serbia','Slovakia','Slovenia','Spain','Sweden','Switzerland','Turkey','Ukraine','United Kingdom','Vatican City'),
    
    'North America' => array('Antigua and Barbuda','Bahamas','Barbados','Belize','Canada','Costa Rica','Cuba','Curaçao','Dominica',
    'Dominican Republic','El Salvador','Grenada','Guatemala','Haiti','Honduras','Jamaica','Mexico','Nicaragua','Panama','Saint Kitts and Nevis','Saint Lucia','Sint Maarten','Saint Vincent and the Grenadines','Trinidad and Tobago','United States of America'),
    
    'South America' => array('Argentina', 'Bolivia','Brazil','Chile','Colombia','Ecuador','Guyana','Paraguay','Peru','Suriname','Uruguay','Venezuela'), 
    
    'Oceania' => array('Australia', 'Fiji', 'Kiribati', 'Marshall Islands', 'Micronesia', 'Nauru', 'New Zealand', 'Palau', 'Papua New Guinea', 'Samoa', 'Solomon Islands', 'Tonga', 'Tuvalu', 'Vanuatu')
];
?>
                   <div class="form__group">
                    <select name="country" class="form__select" id="country">
                        <option value="" default selected>--Choose a country--</option>
                        <?php 
                        foreach ($continents as $continent => $countries) { ?>
                            <optgroup label="<?= $continent ?>">
                            <?php 
                            foreach ($countries as $country) { ?>
                                <option value="<?= strtolower($country) ?>" <?= preserveCountryChoice($post, strtolower($country)) ?>>
                                    <?= $country ?>
                                </option>
                            <?php } ?>
                            </optgroup>
                        <?php } ?>
                    </select>
                    </div>