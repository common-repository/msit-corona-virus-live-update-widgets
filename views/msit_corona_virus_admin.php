<div class="msit-coronavirus-update">
  <div>
    <!-- PART 1: Widget Background Chnage field START -->
     <p>
      <label for="<?php echo $this->get_field_id('Background'); ?>">Background Color: <br></label>
        <script type='text/javascript'>
          jQuery(document).ready(function($) {
              $('.msit-color-picker').wpColorPicker();
          });
      </script>

      <input class="widefat msit-color-picker" id="<?php echo $this->get_field_id('background_color'); ?>" 
               name="<?php echo $this->get_field_name('background_color'); ?>" type="text"
               <?php if(empty($background_color)){?> 
                value="#000000"
              <?php }else{?>
                value="<?php echo esc_attr( $instance['background_color'] ); ?>"
              <?php }?>
                />
      
      </p>
      <!-- PART 1: Widget Background Chnage field END -->
    <!-- PART 2: Widget Title field START -->
     <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title: 
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
               name="<?php echo $this->get_field_name('title'); ?>" type="text"
               <?php if(empty($title)){?> 
                value="<?php echo attribute_escape('Covid 19'); ?>"
              <?php }else{?>
                value="<?php echo attribute_escape($title); ?>"
              <?php }?>
                />
      </label>
      </p>
      <!-- Widget Title field END -->

     <!-- Widget country field START -->
     <p>
      <label for="<?php echo $this->get_field_id('text'); ?>">Country: 
        <select class='widefat' id="<?php echo $this->get_field_id('country'); ?>"
                name="<?php echo $this->get_field_name('country'); ?>" type="text">
          <option value='China'<?php echo ($country=='China')?'selected':''; ?>>
            China
          </option> 
          <option value='Italy'<?php echo ($country=='Italy')?'selected':''; ?>>
            Italy
          </option> 
          <option value='Iran'<?php echo ($country=='Iran')?'selected':''; ?>>
            Iran
          </option> 
          <option value='Spain'<?php echo ($country=='Spain')?'selected':''; ?>>
            Spain
          </option> 
          <option value='South Korea'<?php echo ($country=='South Korea')?'selected':''; ?>>
            South Korea
          </option> 
          <option value='Germany'<?php echo ($country=='Germany')?'selected':''; ?>>
            Germany
          </option> 
          <option value='France'<?php echo ($country=='France')?'selected':''; ?>>
            France
          </option>
          <option value='USA'<?php echo ($country=='USA')?'selected':''; ?>>
            USA
          </option>
          <option value='Switzerland'<?php echo ($country=='Switzerland')?'selected':''; ?>>
            Switzerland
          </option>
          <option value='United Kingdom'<?php echo ($country=='United Kingdom')?'selected':''; ?>>
            United Kingdom
          </option>
          <option value='Netherlands'<?php echo ($country=='Netherlands')?'selected':''; ?>>
            Netherlands
          </option>
          <option value='Austria'<?php echo ($country=='Austria')?'selected':''; ?>>
            Austria
          </option>
          <option value='Norway'<?php echo ($country=='Norway')?'selected':''; ?>>
            Norway
          </option>
          <option value='Belgium'<?php echo ($country=='Belgium')?'selected':''; ?>>
            Belgium
          </option>
          <option value='Sweden'<?php echo ($country=='Sweden')?'selected':''; ?>>
            Sweden
          </option>
          <option value='Denmark'<?php echo ($country=='Denmark')?'selected':''; ?>>
            Denmark
          </option>
          <option value='Japan'<?php echo ($country=='Japan')?'selected':''; ?>>
            Japan
          </option>
          <option value='Diamond Princess'<?php echo ($country=='Diamond Princess')?'selected':''; ?>>
            Diamond Princess
          </option>
          <option value='Malaysia'<?php echo ($country=='Malaysia')?'selected':''; ?>>
            Malaysia
          </option>
          <option value='Canada'<?php echo ($country=='Canada')?'selected':''; ?>>
            Canada
          </option>
          <option value='Australia'<?php echo ($country=='Australia')?'selected':''; ?>>
            Australia
          </option>
          <option value='Portugal'<?php echo ($country=='Portugal')?'selected':''; ?>>
            Portugal
          </option>
          <option value='Qatar'<?php echo ($country=='Qatar')?'selected':''; ?>>
            Qatar
          </option>
          <option value='Greece'<?php echo ($country=='Greece')?'selected':''; ?>>
            Greece
          </option>
          <option value='Israel'<?php echo ($country=='Israel')?'selected':''; ?>>
            Israel
          </option>
          <option value='Finland'<?php echo ($country=='Finland')?'selected':''; ?>>
            Finland
          </option>
          <option value='Portugal'<?php echo ($country=='Portugal')?'selected':''; ?>>
            Portugal
          </option>
          <option value='Slovenia'<?php echo ($country=='Slovenia')?'selected':''; ?>>
            Slovenia
          </option>
          <option value='Bahrain'<?php echo ($country=='Bahrain')?'selected':''; ?>>
            Bahrain
          </option>
          <option value='Brazil'<?php echo ($country=='Brazil')?'selected':''; ?>>
            Brazil
          </option>
          <option value='Estonia'<?php echo ($country=='Estonia')?'selected':''; ?>>
            Estonia
          </option>
          <option value='Iceland'<?php echo ($country=='Iceland')?'selected':''; ?>>
            Iceland
          </option>
          <option value='Pakistan'<?php echo ($country=='Pakistan')?'selected':''; ?>>
            Pakistan
          </option>
          <option value='Poland'<?php echo ($country=='Poland')?'selected':''; ?>>
            Poland
          </option>
          <option value='Turkey'<?php echo ($country=='Turkey')?'selected':''; ?>>
            Turkey
          </option>
          <option value='Iraq'<?php echo ($country=='Iraq')?'selected':''; ?>>
            Iraq
          </option>
          <option value='Syrian Arab Republic'<?php echo ($country=='Syrian Arab Republic')?'selected':''; ?>>
            Syrian Arab Republic
          </option>
          <option value='Ireland'<?php echo ($country=='Ireland')?'selected':''; ?>>
            Ireland
          </option>
          <option value='Luxembourg'<?php echo ($country=='Luxembourg')?'selected':''; ?>>
            Luxembourg
          </option>
          <option value='Mexico'<?php echo ($country=='Mexico')?'selected':''; ?>>
            Mexico
          </option>
          <option value='India'<?php echo ($country=='India')?'selected':''; ?>>
            India
          </option>
          <option value='Bangladesh'<?php echo ($country=='Bangladesh')?'selected':''; ?>>
            Bangladesh
          </option>
          <option value='Ecuador'<?php echo ($country=='Ecuador')?'selected':''; ?>>
            Ecuador
          </option>
          <option value='Martinique'<?php echo ($country=='Martinique')?'selected':''; ?>>
            Martinique
          </option>
          <option value='Argentina'<?php echo ($country=='Argentina')?'selected':''; ?>>
            Argentina
          </option>
          <option value='Egypt'<?php echo ($country=='Egypt')?'selected':''; ?>>
            Egypt
          </option>
          <option value='Philippines'<?php echo ($country=='Philippines')?'selected':''; ?>>
            Philippines
          </option>
          <option value='Russia'<?php echo ($country=='Russia')?'selected':''; ?>>
            Russia
          </option>
          <option value='Nigeria'<?php echo ($country=='Nigeria')?'selected':''; ?>>
            Nigeria
          </option>
          <option value='Indonesia'<?php echo ($country=='Indonesia')?'selected':''; ?>>
            Indonesia
          </option>
          <option value='Peru'<?php echo ($country=='Peru')?'selected':''; ?>>
            Peru
          </option>
          <option value='Iraq'<?php echo ($country=='Iraq')?'selected':''; ?>>
            Iraq
          </option>
          <option value='Congo'<?php echo ($country=='Congo')?'selected':''; ?>>
            Congo
          </option>
          <option value='Colombia'<?php echo ($country=='Colombia')?'selected':''; ?>>
            Colombia
          </option>
          <option value='Hong Kong'<?php echo ($country=='Hong Kong')?'selected':''; ?>>
            Hong Kong
          </option>
          <option value='Taiwan'<?php echo ($country=='Taiwan')?'selected':''; ?>>
            Taiwan
          </option>
          <option value='Thailand'<?php echo ($country=='Thailand')?'selected':''; ?>>
            Thailand
          </option>
          <option value='Chile'<?php echo ($country=='Chile')?'selected':''; ?>>
            Chile
          </option>
          <option value='Vietnam'<?php echo ($country=='Vietnam')?'selected':''; ?>>
            Vietnam
          </option>
          <option value='Angola'<?php echo ($country=='Angola')?'selected':''; ?>>
            Angola
          </option>
          <option value='Sudan'<?php echo ($country=='Sudan')?'selected':''; ?>>
            Sudan
          </option>
          <option value='Saudi Arabia'<?php echo ($country=='Saudi Arabia')?'selected':''; ?>>
            Saudi Arabia
          </option>
          <option value='Myanmar'<?php echo ($country=='Myanmar')?'selected':''; ?>>Myanmar</option>
          <option value='Côte d Ivoire'<?php echo ($country=='Côte d Ivoire')?'selected':''; ?>>Côte d Ivoire</option>
          <option value='South Africa'<?php echo ($country=='South Africa')?'selected':''; ?>>South Africa</option>
          <option value='Algeria'<?php echo ($country=='Algeria')?'selected':''; ?>>Algeria</option>
          <option value='North Korea'<?php echo ($country=='North Korea')?'selected':''; ?>>North Korea</option>
          <option value='Afghanistan'<?php echo ($country=='Afghanistan')?'selected':''; ?>>Afghanistan</option>
          <option value='Morocco'<?php echo ($country=='Morocco')?'selected':''; ?>>Morocco</option>
          <option value='Ethiopia'<?php echo ($country=='Ethiopia')?'selected':''; ?>>Ethiopia</option>
          <option value='Kenya'<?php echo ($country=='Kenya')?'selected':''; ?>>Kenya</option>
          <option value='Venezuela'<?php echo ($country=='Venezuela')?'selected':''; ?>>Venezuela</option>
          <option value='Tanzania'<?php echo ($country=='Tanzania')?'selected':''; ?>>Tanzania</option>
          <option value='Syria'<?php echo ($country=='Syria')?'selected':''; ?>>Syria</option>
          <option value='Ukraine'<?php echo ($country=='Ukraine')?'selected':''; ?>>Ukraine</option>
          <option value='Senegal'<?php echo ($country=='Senegal')?'selected':''; ?>>Senegal</option>
          <option value='Tunisia'<?php echo ($country=='Tunisia')?'selected':''; ?>>Tunisia</option>
          <option value='Libya'<?php echo ($country=='Libya')?'selected':''; ?>>Libya</option>
          <option value='Uzbekistan'<?php echo ($country=='Uzbekistan')?'selected':''; ?>>Uzbekistan</option>
          <option value='Cuba'<?php echo ($country=='Cuba')?'selected':''; ?>>Cuba</option>
          <option value='Dominican'<?php echo ($country=='Dominican')?'selected':''; ?>>Dominican</option>
          <option value='Azerbaijan'<?php echo ($country=='Azerbaijan')?'selected':''; ?>>Azerbaijan</option>
          <option value='Ghana'<?php echo ($country=='Ghana')?'selected':''; ?>>Ghana</option>
          <option value='Bolivia'<?php echo ($country=='Bolivia')?'selected':''; ?>>Bolivia</option>
          <option value='Kuwait'<?php echo ($country=='Kuwait')?'selected':''; ?>>Kuwait</option>
          <option value='Yemen'<?php echo ($country=='Yemen')?'selected':''; ?>>Yemen</option>
          <option value='Haiti'<?php echo ($country=='Haiti')?'selected':''; ?>>Haiti</option>
          <option value='Romania'<?php echo ($country=='Romania')?'selected':''; ?>>Romania</option>
          <option value='Cameroon'<?php echo ($country=='Cameroon')?'selected':''; ?>>Cameroon</option>
          <option value='Paraguay'<?php echo ($country=='Paraguay')?'selected':''; ?>>Paraguay</option>
          <option value='Lebanon'<?php echo ($country=='Lebanon')?'selected':''; ?>>Lebanon</option>
          <option value='Belarus'<?php echo ($country=='Belarus')?'selected':''; ?>>Belarus</option>
          <option value='Madagascar'<?php echo ($country=='Madagascar')?'selected':''; ?>>Madagascar</option>
          <option value='Hungary'<?php echo ($country=='Hungary')?'selected':''; ?>>Hungary</option>
          <option value='Zimbabwe'<?php echo ($country=='Zimbabwe')?'selected':''; ?>>Zimbabwe</option>
          <option value='Uruguay'<?php echo ($country=='Uruguay')?'selected':''; ?>>Uruguay</option>
          <option value='Mali'<?php echo ($country=='Mali')?'selected':''; ?>>Mali</option>
          <option value='Guinea'<?php echo ($country=='Guinea')?'selected':''; ?>>Guinea</option>
          <option value='Cambodia'<?php echo ($country=='Cambodia')?'selected':''; ?>>Cambodia</option>
          <option value='Togo'<?php echo ($country=='Togo')?'selected':''; ?>>Togo</option>
          <option value='Mozambique'<?php echo ($country=='Mozambique')?'selected':''; ?>>Mozambique</option>
          <option value='El Salvador'<?php echo ($country=='El Salvador')?'selected':''; ?>>El Salvador</option>
          <option value='Uganda'<?php echo ($country=='Uganda')?'selected':''; ?>>Uganda</option>
          <option value='United Arab Emirates'<?php echo ($country=='United Arab Emirates')?'selected':''; ?>>United Arab Emirates</option>
          <option value='New Zealand'<?php echo ($country=='New Zealand')?'selected':''; ?>>New Zealand</option>
          <option value='Congo'<?php echo ($country=='Congo')?'selected':''; ?>>Congo</option>
          <option value='Zambia'<?php echo ($country=='Zambia')?'selected':''; ?>>Zambia</option>
          <option value='Costa Rica'<?php echo ($country=='Costa Rica')?'selected':''; ?>>Costa Rica</option>
          <option value='Panama'<?php echo ($country=='Panama')?'selected':''; ?>>Panama</option>
          <option value='Kazakhstan'<?php echo ($country=='Kazakhstan')?'selected':''; ?>>Kazakhstan</option>
          <option value='Bulgaria'<?php echo ($country=='Bulgaria')?'selected':''; ?>>Bulgaria</option>
          <option value='Czechia'<?php echo ($country=='Czechia')?'selected':''; ?>>Czechia</option>
          <option value='Burkina Faso'<?php echo ($country=='Burkina Faso')?'selected':''; ?>>Burkina Faso</option>
          <option value='Armenia'<?php echo ($country=='Armenia')?'selected':''; ?>>Armenia</option>
          <option value='Somalia'<?php echo ($country=='Somalia')?'selected':''; ?>>Somalia</option>
          <option value='Georgia'<?php echo ($country=='Georgia')?'selected':''; ?>>Georgia</option>
          <option value='Serbia'<?php echo ($country=='Serbia')?'selected':''; ?>>Serbia</option>
          <option value='Tajikistan'<?php echo ($country=='Tajikistan')?'selected':''; ?>>Tajikistan</option>
          <option value='Jordan'<?php echo ($country=='Jordan')?'selected':''; ?>>Jordan</option>
          <option value='Liberia'<?php echo ($country=='Liberia')?'selected':''; ?>>Liberia</option>
          <option value='Guatemala'<?php echo ($country=='Guatemala')?'selected':''; ?>>Guatemala</option>
          <option value='Chad'<?php echo ($country=='Chad')?'selected':''; ?>>Chad</option>
          <option value='Honduras'<?php echo ($country=='Honduras')?'selected':''; ?>>Honduras</option>
          <option value='Jamaica'<?php echo ($country=='Jamaica')?'selected':''; ?>>Jamaica</option>
          <option value='Djibouti'<?php echo ($country=='Djibouti')?'selected':''; ?>>Djibouti</option>
          <option value='Nicaragua'<?php echo ($country=='Nicaragua')?'selected':''; ?>>Nicaragua</option>
          <option value='Niger'<?php echo ($country=='Niger')?'selected':''; ?>>Niger</option>
          <option value='Albania'<?php echo ($country=='Albania')?'selected':''; ?>>Albania</option>
          <option value='Nepal'<?php echo ($country=='Nepal')?'selected':''; ?>>Nepal</option>
          <option value='Mongolia'<?php echo ($country=='Mongolia')?'selected':''; ?>>Mongolia</option>
          <option value='Rwanda'<?php echo ($country=='Rwanda')?'selected':''; ?>>Rwanda</option>
          <option value='Kyrgyzstan'<?php echo ($country=='Kyrgyzstan')?'selected':''; ?>>Kyrgyzstan</option>
          <option value='Central African Republic'<?php echo ($country=='Central African Republic')?'selected':''; ?>>Central African Republic</option>
          <option value='Leone'<?php echo ($country=='Leone')?'selected':''; ?>>Leone</option>
          <option value='Benin'<?php echo ($country=='Benin')?'selected':''; ?>>Benin</option>
          <option value='Laos'<?php echo ($country=='Laos')?'selected':''; ?>>Laos</option>
          <option value='Latvia'<?php echo ($country=='Latvia')?'selected':''; ?>>Latvia</option>
          <option value='Mauritania'<?php echo ($country=='Mauritania')?'selected':''; ?>>Mauritania</option>
          <option value='Oman'<?php echo ($country=='Oman')?'selected':''; ?>>Oman</option>
          <option value='Turkmenistan'<?php echo ($country=='Turkmenistan')?'selected':''; ?>>Turkmenistan</option>
          <option value='Croatia'<?php echo ($country=='Croatia')?'selected':''; ?>>Croatia</option>
          <option value='Bosnia And Herzegovina'<?php echo ($country=='Bosnia And Herzegovina')?'selected':''; ?>>Bosnia And Herzegovina</option>
          <option value='Moldova'<?php echo ($country=='Moldova')?'selected':''; ?>>Moldova</option>
          <option value='Malawi'<?php echo ($country=='Malawi')?'selected':''; ?>>Malawi</option>
          <option value='Eritrea'<?php echo ($country=='Eritrea')?'selected':''; ?>>Eritrea</option>
          <option value='Mauritius'<?php echo ($country=='Mauritius')?'selected':''; ?>>Mauritius</option>
          <option value='Gabon'<?php echo ($country=='Gabon')?'selected':''; ?>>Gabon</option>
          <option value='Lithuania'<?php echo ($country=='Lithuania')?'selected':''; ?>>Lithuania</option>
          <option value='Macedonia'<?php echo ($country=='Macedonia')?'selected':''; ?>>Macedonia</option>
          <option value='Slovakia'<?php echo ($country=='Slovakia')?'selected':''; ?>>Slovakia</option>
          <option value='Guinea-Bissau'<?php echo ($country=='Guinea-Bissau')?'selected':''; ?>>Guinea-Bissau</option>
          <option value='Malta'<?php echo ($country=='Malta')?'selected':''; ?>>Malta</option>
          <option value='Lesotho'<?php echo ($country=='Lesotho')?'selected':''; ?>>Lesotho</option>
          <option value='Burundi'<?php echo ($country=='Burundi')?'selected':''; ?>>Burundi</option>
          <option value='Brunei'<?php echo ($country=='Brunei')?'selected':''; ?>>Brunei</option>
          <option value='Trinidad and Tobago'<?php echo ($country=='Trinidad and Tobago')?'selected':''; ?>>Trinidad and Tobago</option>
          <option value='Papua New Guinea'<?php echo ($country=='Papua New Guinea')?'selected':''; ?>>Papua New Guinea</option>
          <option value='Namibia'<?php echo ($country=='Namibia')?'selected':''; ?>>Namibia</option>
          <option value='Guyana'<?php echo ($country=='Guyana')?'selected':''; ?>>Guyana</option>
          <option value='Suriname'<?php echo ($country=='Suriname')?'selected':''; ?>>Suriname</option>
          <option value='Timor-Leste'<?php echo ($country=='Timor-Leste')?'selected':''; ?>>Timor-Leste</option>
          <option value='Bahamas'<?php echo ($country=='Bahamas')?'selected':''; ?>>Bahamas</option>
          <option value='Cyprus'<?php echo ($country=='Cyprus')?'selected':''; ?>>Cyprus</option>
          <option value='Sri Lanka'<?php echo ($country=='Sri Lanka')?'selected':''; ?>>Sri Lanka</option>
          <option value='Botswana'<?php echo ($country=='Botswana')?'selected':''; ?>>Botswana</option>
          <option value='Barbados'<?php echo ($country=='Barbados')?'selected':''; ?>>Barbados</option>
          <option value='Fiji'<?php echo ($country=='Fiji')?'selected':''; ?>>Fiji</option>
          <option value='Equatorial'<?php echo ($country=='Equatorial')?'selected':''; ?>>Equatorial</option>
          <option value='Curacao'<?php echo ($country=='Curacao')?'selected':''; ?>>Curacao</option>
          <option value='Montenegro'<?php echo ($country=='Montenegro')?'selected':''; ?>>Montenegro</option>
          <option value='Comoros'<?php echo ($country=='Comoros')?'selected':''; ?>>Comoros</option>
          <option value='Cabo Verde'<?php echo ($country=='Cabo Verde')?'selected':''; ?>>Cabo Verde</option>
          <option value='Maldives'<?php echo ($country=='Maldives')?'selected':''; ?>>Maldives</option>
          <option value='South Sudan'<?php echo ($country=='South Sudan')?'selected':''; ?>>South Sudan</option>
          <option value='Luxembourg'<?php echo ($country=='Luxembourg')?'selected':''; ?>>Luxembourg</option>
          <option value='Bhutan'<?php echo ($country=='Bhutan')?'selected':''; ?>>Bhutan</option>
          <option value='Swaziland'<?php echo ($country=='Swaziland')?'selected':''; ?>>Swaziland</option>
          <option value='Sao Tome And Principe'<?php echo ($country=='Sao Tome And Principe')?'selected':''; ?>>Sao Tome And Principe</option>
          <option value='Solomon Islands'<?php echo ($country=='Solomon Islands')?'selected':''; ?>>Solomon Islands</option>
          <option value='Aruba'<?php echo ($country=='Aruba')?'selected':''; ?>>Aruba</option>
          <option value='Samoa'<?php echo ($country=='Samoa')?'selected':''; ?>>Samoa</option>
          <option value='Andorra'<?php echo ($country=='Andorra')?'selected':''; ?>>Andorra</option>
          <option value='Vanuatu'<?php echo ($country=='Vanuatu')?'selected':''; ?>>Vanuatu</option>
          <option value='Gambia'<?php echo ($country=='Gambia')?'selected':''; ?>>Gambia</option>
          <option value='Tonga'<?php echo ($country=='Tonga')?'selected':''; ?>>Tonga</option>
          <option value='Saint Lucia'<?php echo ($country=='Saint Lucia')?'selected':''; ?>>Saint Lucia</option>
          <option value='Monaco'<?php echo ($country=='Monaco')?'selected':''; ?>>Monaco</option>
          <option value='Liechtenstein'<?php echo ($country=='Liechtenstein')?'selected':''; ?>>Liechtenstein</option>
          <option value='Antigua and Barbuda'<?php echo ($country=='Antigua and Barbuda')?'selected':''; ?>>Antigua and Barbuda</option>
          <option value='Grenada'<?php echo ($country=='Grenada')?'selected':''; ?>>Grenada</option>
          <option value='Svalbard and Jan Mayen'<?php echo ($country=='Svalbard and Jan Mayen')?'selected':''; ?>>Svalbard and Jan Mayen</option>
          <option value='Seychelles'<?php echo ($country=='Seychelles')?'selected':''; ?>>Seychelles</option>
          <option value='San Marino'<?php echo ($country=='San Marino')?'selected':''; ?>>San Marino</option>
          <option value='Kiribati'<?php echo ($country=='Kiribati')?'selected':''; ?>>Kiribati</option>
          <option value='Marshall Islands'<?php echo ($country=='Marshall Islands')?'selected':''; ?>>Marshall Islands</option>
          <option value='Dominica'<?php echo ($country=='Dominica')?'selected':''; ?>>Dominica</option>
          <option value='Saint Kitts and Nevis'<?php echo ($country=='Saint Kitts and Nevis')?'selected':''; ?>>Saint Kitts and Nevis</option>
          <option value='Belize'<?php echo ($country=='Belize')?'selected':''; ?>>Belize</option>
          <option value='American Samoa'<?php echo ($country=='American Samoa')?'selected':''; ?>>American Samoa</option>
          <option value='Tuvalu'<?php echo ($country=='Tuvalu')?'selected':''; ?>>Tuvalu</option>
          <option value='Micronesia'<?php echo ($country=='Micronesia')?'selected':''; ?>>Micronesia</option>
          <option value='MP'<?php echo ($country=='MP')?'selected':''; ?>>Northern Mariana Islands</option>
          <option value='Guam'<?php echo ($country=='Guam')?'selected':''; ?>>Guam</option>
          <option value='West Bank'<?php echo ($country=='West Bank')?'selected':''; ?>>West Bank</option>
          <option value='Sint Maarten'<?php echo ($country=='Sint Maarten')?'selected':''; ?>>Sint Maarten</option>
          <option value='Kosovo'<?php echo ($country=='Kosovo')?'selected':''; ?>>Kosovo</option>
          <option value='Macau'<?php echo ($country=='Macau')?'selected':''; ?>>Macau</option>
          <option value='Palau'<?php echo ($country=='Palau')?'selected':''; ?>>Palau</option>
          <option value='Puerto Rico'<?php echo ($country=='Puerto Rico')?'selected':''; ?>>Puerto Rico</option>
          <option value='Reunion'<?php echo ($country=='Reunion')?'selected':''; ?>>Reunion</option>
          <option value='Gibraltar'<?php echo ($country=='Gibraltar')?'selected':''; ?>>Gibraltar</option>
          <option value='Guadeloupe'<?php echo ($country=='Guadeloupe')?'selected':''; ?>>Guadeloupe</option>
          <option value='French Polynesia'<?php echo ($country=='French Polynesia')?'selected':''; ?>>French Polynesia</option>
          <option value='New Caledonia'<?php echo ($country=='New Caledonia')?'selected':''; ?>>New Caledonia</option>
          <option value='French Guiana'<?php echo ($country=='French Guiana')?'selected':''; ?>>French Guiana</option>
          <option value='Mayotte'<?php echo ($country=='Mayotte')?'selected':''; ?>>Mayotte</option>
          <option value='Greenland'<?php echo ($country=='Greenland')?'selected':''; ?>>Greenland</option>
          <option value='Faroe Islands'<?php echo ($country=='Faroe Islands')?'selected':''; ?>>Faroe Islands</option>
          <option value='Wallis And Futuna'<?php echo ($country=='Wallis And Futuna')?'selected':''; ?>>Wallis And Futuna</option>
          <option value='Saint Helena, Ascension and Tristan da Cunha'<?php echo ($country=='Saint Helena, Ascension and Tristan da Cunha')?'selected':''; ?>>Saint Helena, Ascension and Tristan da Cunha</option>
          <option value='Bermuda'<?php echo ($country=='Bermuda')?'selected':''; ?>>Bermuda</option>
          <option value='South Georgia and the South Sandwich Islands'<?php echo ($country=='South Georgia and the South Sandwich Islands')?'selected':''; ?>>South Georgia and the South Sandwich Islands</option>
          <option value='Falkland Islands'<?php echo ($country=='Falkland Islands')?'selected':''; ?>>Falkland Islands</option>
          <option value='Cook Islands'<?php echo ($country=='Cook Islands')?'selected':''; ?>>Cook Islands</option>
          <option value='Cayman Islands'<?php echo ($country=='Cayman Islands')?'selected':''; ?>>Cayman Islands</option>
          <option value='Turks And Caicos Islands'<?php echo ($country=='Turks And Caicos Islands')?'selected':''; ?>>Turks And Caicos Islands</option>
        </select>                
      </label>
     </p>
     <!-- Widget City field END -->
  </div>
</div>