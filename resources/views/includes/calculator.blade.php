<div class="calculator-area pt-130 pb-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-6 offset-lg-6">
					<div class="calculator-chart mb-70">
						<h3>Tableau du calculateur d'IMC</h3>
						<table class="table bg-white">
							<thead>
							<tr>
								<th scope="col">IMC</th>
								<th scope="col">Statut de poids</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Dessous 18.5</td>
								<td>Poids insuffisant</td>
							</tr>
							<tr>
								<td>18.5 - 24.9</td>
								<td>En bonne santé</td>
							</tr>
							<tr>
								<td>25.0 - 29.9</td>
								<td>En surpoids</td>
							</tr>
							<tr>
								<td>30.0 - et plus</td>
								<td>Obèse</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="calculator-form">
						<h3>Tableau de calcul de l’IMC</h3>
						<form action="#">
							<div class="input-wrap">
								<input type="text" placeholder="taille/cm">
							</div>
							<div class="input-wrap">
								<input type="text" placeholder="poids/kg">
							</div>
							<div class="input-wrap">
								<input type="text" placeholder="poids/kg">
							</div>
							<div class="input-wrap">
								<select id="gender">
									<option value="gender">Genre</option>
									<option value="male">Homme</option>
									<option value="fmale">Femme</option>
								</select>
							</div>
							<div class="input-wrap">
								<select id="factory">
									<option value="factory">Activity Factory</option>
									<option value="one">One</option>
									<option value="two">Two</option>
								</select>
							</div>
							<div class="input-wrap">
								<a href="#" class="btn btn-gra">
									Calculer<i class="fas fa-angle-double-right"></i>
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="calculator-thumb">
			<img src="{{ asset('frontOffice/assets/img/thumb/thumb-2.png') }}" alt="thumb">
		</div>
		<div class="calculator-shape-1">
			<img src="{{ asset('frontOffice/assets/img/shape/shape-3.png') }}" alt="shape">
		</div>
		<div class="calculator-shape-2">
			<img src="{{ asset('frontOffice/assets/img/shape/shape-4.png') }}" alt="shape">
		</div>
	</div>