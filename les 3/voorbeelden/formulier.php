<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Voorbeeldformulier</title>
	</head>
	<body>
		
		<h1>Aanmelden</h1>
		<form action="" method="post">

			<fieldset>
				<legend>Accountgegevens</legend>
				<input type="hidden" name="uid" value="34562" />
				<label for="gebruikersnaam">Gebruikersnaam</label><input type="text" name="gebruikersnaam" value="" id="gebruikersnaam" />
				<label for="wachtwoord1">Wachtwoord</label><input type="password" name="wachtwoord1" value="" id="wachtwoord1" />
				<label for="wachtwoord2">Herhaal wachtwoord</label><input type="password" name="wachtwoord2" value="" id="wachtwoord2" />	
			</fieldset>

	
			<fieldset>
				<legend>Naam</legend>
				<label for="voornaam">Voornaam</label><input type="text" name="voornaam" value="" id="voornaam" />
				<label for="tussenvoegsel">Tussenvoegsel</label><input type="text" name="tussenvoegsel" value="" id="tussenvoegsel" />
				<label for="achternaam">Achternaam</label><input type="text" name="achternaam" value="" id="achternaam" />	
			</fieldset>

			<fieldset>
				<legend>Geslacht</legend>
				<input type="radio" name="geslacht" value="m" id="geslacht_m" /> <label for="geslacht_m">Man</label>
				<input type="radio" name="geslacht" value="v" id="geslacht_v" /> <label for="geslacht_v">Vrouw</label>
			</fieldset>

			<fieldset>
				<legend>Pasfoto</legend>
				<label for="foto">Bestandsnaam</label> <input type="file" name="foto" value="" id="foto" /> 
			</fieldset>

			<fieldset>
				<legend>Geboortedatum</legend>
				<label for="dag">Geboortedag</label>
				<select id="dag" name="dag"> 
					<option value="">-- dag --</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
	
				<label for="maand">Geboortemaand</label>	
				<select id="maand" name="maand"> 
					<option value="">-- maand --</option>
					<option value="1" >januari</option>
					<option value="2" >februari</option>
					<option value="3" >maart</option>
					<option value="4" >april</option>
					<option value="5" >mei</option>
					<option value="6" >juni</option>
					<option value="7" >juli</option>
					<option value="8" >augustus</option>
					<option value="9" >september</option>
					<option value="10" >oktober</option>
					<option value="11" >november</option>
					<option value="12" >december</option>
				</select>
	
				<label for="jaar">Geboortejaar</label>
				<select id="jaar" name="jaar">
					<option value="">-- jaar --</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
					<option value="1979">1979</option>
					<option value="1978">1978</option>
					<option value="1977">1977</option>
					<option value="1976">1976</option>
					<option value="1975">1975</option>
					<option value="1974">1974</option>
					<option value="1973">1973</option>
					<option value="1972">1972</option>
					<option value="1971">1971</option>
					<option value="1970">1970</option>
					<option value="1969">1969</option>
					<option value="1968">1968</option>
					<option value="1967">1967</option>
					<option value="1966">1966</option>
					<option value="1965">1965</option>
					<option value="1964">1964</option>
					<option value="1963">1963</option>
					<option value="1962">1962</option>
					<option value="1961">1961</option>
					<option value="1960">1960</option>
					<option value="1959">1959</option>
					<option value="1958">1958</option>
					<option value="1957">1957</option>
					<option value="1956">1956</option>
					<option value="1955">1955</option>
					<option value="1954">1954</option>
					<option value="1953">1953</option>
					<option value="1952">1952</option>
					<option value="1951">1951</option>
					<option value="1950">1950</option>
					<option value="1949">1949</option>
					<option value="1948">1948</option>
					<option value="1947">1947</option>
					<option value="1946">1946</option>
					<option value="1945">1945</option>
					<option value="1944">1944</option>
					<option value="1943">1943</option>
					<option value="1942">1942</option>
					<option value="1941">1941</option>
					<option value="1940">1940</option>
					<option value="1939">1939</option>
					<option value="1938">1938</option>
					<option value="1937">1937</option>
					<option value="1936">1936</option>
					<option value="1935">1935</option>
					<option value="1934">1934</option>
					<option value="1933">1933</option>
					<option value="1932">1932</option>
					<option value="1931">1931</option>
					<option value="1930">1930</option>
					<option value="1929">1929</option>
					<option value="1928">1928</option>
					<option value="1927">1927</option>
					<option value="1926">1926</option>
					<option value="1925">1925</option>
					<option value="1924">1924</option>
					<option value="1923">1923</option>
					<option value="1922">1922</option>
					<option value="1921">1921</option>
					<option value="1920">1920</option>
					<option value="1919">1919</option>
					<option value="1918">1918</option>
					<option value="1917">1917</option>
					<option value="1916">1916</option>
					<option value="1915">1915</option>
					<option value="1914">1914</option>
					<option value="1913">1913</option>
					<option value="1912">1912</option>
				</select>
			</fieldset>

			<fieldset>
				<legend>Nieuwsbrief</legend>
				<input type="checkbox" name="nieuwsbrief[]" value="dagelijks" id="n_dagelijks" /> <label for="n_dagelijks">Dagelijks</label>
				<input type="checkbox" name="nieuwsbrief[]" value="wekelijks" id="n_wekelijks" /> <label for="n_wekelijks">Wekelijks</label>
				<input type="checkbox" name="nieuwsbrief[]" value="maandelijks" id="n_maandelijks" /> <label for="n_maandelijks">Maandelijks</label>
			</fieldset>

			<fieldset>
				<legend>Bio</legend>
				<textarea name="Name" rows="8" cols="40"></textarea>
			</fieldset>

			<p><input type="submit" value="Opslaan" /></p>	

		</form>
	</body>
</html>