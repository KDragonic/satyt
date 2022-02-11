<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мой профиль</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js"></script>
	<script src="js/valid.js"></script>

</head>
<body>
	<main>
		<div class="menu">
			<div class="header">
				<img src="src/icon_2.svg" alt="" class="icon">
				<div>
					<span class="name">
						Михаил Мингалёв
					</span>

					<span class="rank">
						Покупатель
					</span>
				</div>
			</div>

			<div class="nav">
				<ul>
					<hr>
					<section>
						<div> </div>
						<li>Мой профиль</li>
					</section>
					<hr>

					<section>
						<div> </div>
						<li>Statut Club</li>
					</section>
					<hr>

					<section>
						<div> </div>
						<li>Заказы</li>
					</section>
					<hr>

					<section>
						<div> </div>
						<li>Избранные товары</li>
					</section>
					<hr>

					<section>
						<div> </div>
						<li>Отзывы о товарах</li>
					</section>
					<hr>

					<section>
						<div> </div>
						<li style="color:red">Выход</li>
					</section>
				</ul>
			</div>
		</div>

		<div class="myProfel">
			<h2>Мой профиль</h2>
			<ul class="tab_1">
				<li>
					<div><span>Личные данные</span></div>
				</li>
				<li>
					<div><span>Адреса доставки</span></div>
				</li>
				<li>
					<div><span>Пароль</span></div>
				</li>
			</ul>

			<form>
				<label class="BoxEmail">
					<span class="nameInput">E-mail</span> <span class="star">*</span><br>
					<div class="inputBox">
						<input type="text" id="emailInput" name="email" class="email" required>
						<img src="src/InputCheckMark.svg" alt="">
					</div>
				</label>
				<section class="BoxTels">
					<label class="BoxTel">
						<span class="nameInput">Номер телефона</span> <span class="star">*</span><br>
						<div class="inputBox">
							<input type="text" id="telInput" name="phone" required>
							<img src="src/InputCheckMark.svg" alt="">
						</div>
					</label>
					<label class="Box2Tel">
						<span class="nameInput">Дополнительный номер</span><br>
						<div class="inputBox">
							<input type="text" id="tel2Input" name="phone2">
							<img src="src/InputCheckMark.svg" alt="">
						</div>
					</label>
				</section>
				<label class="BoxFamil">
					<span class="nameInput">Фамилия</span> <span class="star">*</span><br>
					<div class="inputBox">
						<input type="text" id="familInput">
						<img src="src/InputCheckMark.svg" alt="" name="family" required>
					</div>
				</label>
				<label class="BoxName">
					<span class="nameInput">Имя</span> <span class="star">*</span><br>
					<div class="inputBox">
						<input type="text" id="nameInput" name="name" required>
						<img src="src/InputCheckMark.svg" alt="">
					</div>
				</label>
				<label class="BoxSurname">
					<span class="surnameInput">Отчетсво</span><br>
					<div class="inputBox">
						<input type="text" id="surnameInput" name="surname">
						<img src="src/InputCheckMark.svg" alt="">
					</div>
				</label>
				<label class="BoxDateBirth">
					<span class="nameInput">Дата рождения</span><br>
					<section>
						<div class="inputBox">
							<select id="dateBirthInput_Day" name="dateBirthDay">
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
						</div>
						<div class="inputBox">
							<select id="dateBirthInput_Month" name="dateBirthMonth">
								<option value="1">Месяц 1</option>
								<option value="2">Месяц 2</option>
								<option value="3">Месяц 3</option>
								<option value="4">Месяц 4</option>
								<option value="5">Месяц 5</option>
								<option value="6">Месяц 6</option>
								<option value="7">Месяц 7</option>
								<option value="8">Месяц 8</option>
								<option value="9">Месяц 9</option>
								<option value="10">Месяц 10</option>
								<option value="11">Месяц 11</option>
								<option value="12">Месяц 12</option>
							</select>
						</div>
						<div class="inputBox">
							<select id="dateBirthInput_Year" name="dateBirthYear">
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
							</select>
						</div>
					</section>
				</label>
				<span class="nameInput">Пол</span><br>
				<div class="BoxSex">
						<div class="radioInput">
							<input type="radio" name="sexInput" id="sexInput_1" checked name="sex">
							<label for="sexInput_1">
								<span>
									Мужской
									<img src="src/InputCheckMark.svg" alt="">
								</span>
							</label>					
						</div>

						<div class="radioInput">
							<input type="radio" name="sexInput" id="sexInput_2" name="sex">
							<label for="sexInput_2">
								<span>
									Женский
									<img src="src/InputCheckMark.svg" alt="">
								</span>
							</label>
						</div>
				</div>
				<button type="submit" onclick="validate.send(this, event)">Сохранить изменения</button>
			</form>
		</div>
	</main>
</body>
</html>