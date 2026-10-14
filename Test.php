<!DOCTYPE html>
<html>

<head>
	<title>GE 9 - Final Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		body {
			background-color: #29fff1;
			background-image: url('https://img.pikbest.com/wp/202344/antique-paper-texture-photo-download-vintage-background-with-an_9917195.jpg!bw700');
			background-attachment: fixed;
			background-size: cover;
			font-size: 14px;
			font-family: 'Montserrat', sans-serif;
			margin: 0;
		}

		.vintage-input-group {
			background-color: #8B4513;
			border: 1px solid #6B4226;
			border-radius: 5px;
			font-family: 'Georgia', serif;
		}

		.examinee-input {
			color: #F5DEB3;
			border: none;
			background-color: #D2B48C;
		}

		.input-group-text {
			color: #F5DEB3;
			background-color: #6B4226;
			border: 1px solid #8B4513;
			border-right: none;
			border-top-left-radius: 5px;
			border-bottom-left-radius: 5px;
		}

		.examinee-input:focus {
			outline: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
		}




		h1 {
			font-family: 'Montserrat', sans-serif;
			text-align: center;
			color: black;
			font-weight: bold;
		}

		h2 {
			font-family: 'Montserrat', sans-serif;
			text-align: center;
			color: brown;
			font-size: 20px;
		}

		h3 {
			font-family: 'Montserrat', sans-serif;
			text-align: center;
			color: black;
			font-size: 17px;
		}

		p {
			font-family: 'Montserrat', sans-serif;
			color: black;
			font-size: 17px;
		}

		.student-name-label {
			font-size: 18px;
			width: 50%;
			font-weight: normal;
		}



		.container {
			max-width: 700px;
			margin: 0 auto;
			padding: 10px 80px 25px;
			background: rgba(153, 102, 51, 0.9);
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			;
			background: rgba(255, 255, 255, 0.4);
			-webkit-backdrop-filter: blur(3px);
			backdrop-filter: blur(3px);
			border: 1px solid rgba(255, 255, 255, 0.2);

		}

		input[type="radio"],
		textarea {
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid brown;
			border-radius: 50px;
		}

		.center-button {
			text-align: center;
			margin-top: 10px;
		}

		strong {
			font-weight: bold;
			font-size: 16px;
		}

		.quiz-question {
			font-size: 18px;
			margin-bottom: 20px;
		}

		.quiz-options {
			font-weight: normal;
			margin-bottom: 25px;
			display: block;
		}

		.btn-danger {
			float: right;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="input-group mb-3 vintage-input-group">
			<span class="input-group-text" id="inputGroup-sizing-default">Examinee</span>
			<input type="text" class="form-control examinee-input" aria-label="Sizing example input"
				aria-describedby="inputGroup-sizing-default" name="Examinee" required>
		</div>

		<h1>GE 9 - The Life and Works of Rizal</h1>
		<h2>Final Project : An exam form made BSIT 2G</h2>
		<h3></h3>
		<p>
			&#x2022;&nbsp;Ruthiemay T. Esquilador
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x2022;&nbsp;Djahaira Diana B.
			Aspa<br>
			&#x2022;&nbsp;Mark Dale Andrie S. Perillo
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#x2022;&nbsp;Maria Alexandria O. Valdez<br>
			&#x2022;&nbsp;Mary Jane C. Lamud
		</p>

		<form method="post" action="Results.php">

			<div class="quiz-question">
				<p>1. When was Jose Rizal born?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q1" value="a"> June 19, 1861<br>
				<input type="radio" name="q1" value="b"> July 4, 1876<br>
				<input type="radio" name="q1" value="c"> August 30, 1896<br>
			</div>

			<div class="quiz-question">
				<p>2. Where was Jose Rizal born?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q2" value="a"> Manila<br>
				<input type="radio" name="q2" value="b"> Cebu<br>
				<input type="radio" name="q2" value="c"> Calamba<br>
			</div>

			<div class="quiz-question">
				<p>3. Which novel written by Rizal depicts the corruption and oppression of Spanish rule in the
					Philippines?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q3" value="a"> Noli Me Tangere<br>
				<input type="radio" name="q3" value="b"> El Filibusterismo<br>
				<input type="radio" name="q3" value="c"> La Solidaridad<br>
			</div>

			<div class="quiz-question">
				<p>4. In which country did Rizal complete his medical studies?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q4" value="a"> Spain<br>
				<input type="radio" name="q4" value="b"> Germany<br>
				<input type="radio" name="q4" value="c"> France<br>
			</div>

			<div class="quiz-question">
				<p>5. Which organization did Rizal establish in the Philippines?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q5" value="a"> La Liga Filipina<br>
				<input type="radio" name="q5" value="b"> Katipunan<br>
				<input type="radio" name="q5" value="c"> KKK (Kataastaasang Kagalanggalangang Katipunan ng mga Anak ng
				Bayan)<br>
			</div>

			<div class="quiz-question">
				<p>6. What was the title of Rizal's first novel?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q6" value="a"> Noli Me Tangere<br>
				<input type="radio" name="q6" value="b"> El Filibusterismo<br>
				<input type="radio" name="q6" value="c"> Mi Ultimo Adios<br>
			</div>

			<div class="quiz-question">
				<p>7. How did Jose Rizal die?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q7" value="a"> Execution by firing squad<br>
				<input type="radio" name="q7" value="b"> Illness<br>
				<input type="radio" name="q7" value="c"> Accidental drowning<br>
			</div>

			<div class="quiz-question">
				<p>8. What is the title of Rizal's famous farewell poem?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q8" value="a"> Mi Ultimo Adios<br>
				<input type="radio" name="q8" value="b"> A La Juventud Filipina<br>
				<input type="radio" name="q8" value="c"> To the Philippine Youth<br>
			</div>

			<div class="quiz-question">
				<p>9. Which country did Rizal visit to further his studies in ophthalmology?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q9" value="a"> Japan<br>
				<input type="radio" name="q9" value="b"> England<br>
				<input type="radio" name="q9" value="c"> Austria<br>
			</div>

			<div class="quiz-question">
				<p>10. What is the English translation of Rizal's famous quote "Ang hindi marunong magmahal sa sariling
					wika, ay higit pa sa hayop at malansang isda"?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q10" value="a"> He who does not love his own language is worse than an animal
				and a smelly fish<br>
				<input type="radio" name="q10" value="b"> He who does not love his country is worse than an animal and a
				stinky fish<br>
				<input type="radio" name="q10" value="c"> He who does not love his own language is worse than a beast
				and a rotten fish<br>
			</div>

			<div class="quiz-question">
				<p>11. Which of the following languages did Jose Rizal speak fluently?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q11" value="a"> Spanish, English, Tagalog<br>
				<input type="radio" name="q11" value="b"> Spanish, German, French<br>
				<input type="radio" name="q11" value="c"> Spanish, Latin, Japanese<br>
			</div>

			<div class="quiz-question">
				<p>12. What was the title of Rizal's second novel?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q12" value="a"> Noli Me Tangere<br>
				<input type="radio" name="q12" value="b"> El Filibusterismo<br>
				<input type="radio" name="q12" value="c"> Makamisa<br>
			</div>

			<div class="quiz-question">
				<p>13. What does "Rizal" mean in Spanish?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q13" value="a"> Heroic<br>
				<input type="radio" name="q13" value="b"> Martyr<br>
				<input type="radio" name="q13" value="c"> Green fields<br>
			</div>

			<div class="quiz-question">
				<p>14. Which country awarded Rizal the title of Doctor of Medicine?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q14" value="a"> Spain<br>
				<input type="radio" name="q14" value="b"> Germany<br>
				<input type="radio" name="q14" value="c"> Philippines<br>
			</div>

			<div class="quiz-question">
				<p>15. In which city was Rizal executed?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q15" value="a"> Manila<br>
				<input type="radio" name="q15" value="b"> Davao<br>
				<input type="radio" name="q15" value="c"> Baguio<br>
			</div>

			<div class="quiz-question">
				<p>16. What is the English translation of "Mi Ultimo Adios"?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q16" value="a"> My Last Farewell<br>
				<input type="radio" name="q16" value="b"> My Final Goodbye<br>
				<input type="radio" name="q16" value="c"> My Last Prayer<br>
			</div>

			<div class="quiz-question">
				<p>17. What was the pen name Rizal used in writing satirical articles for La Solidaridad?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q17" value="a"> Dimasalang<br>
				<input type="radio" name="q17" value="b"> Laong Laan<br>
				<input type="radio" name="q17" value="c"> La Indolencia de los Filipinos<br>
			</div>

			<div class="quiz-question">
				<p>18. How many siblings did Jose Rizal have?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q18" value="a"> 9<br>
				<input type="radio" name="q18" value="b"> 10<br>
				<input type="radio" name="q18" value="c"> 11<br>
			</div>

			<div class="quiz-question">
				<p>19. What was the name of the ship that took Rizal to Spain for the first time?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q19" value="a"> SS Victoria<br>
				<input type="radio" name="q19" value="b"> SS Negros<br>
				<input type="radio" name="q19" value="c"> SS Deutschland<br>
			</div>

			<div class="quiz-question">
				<p>20. What did Rizal do to depict the injustices of Spanish friars in the Philippines?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q20" value="a"> Wrote novels and essays<br>
				<input type="radio" name="q20" value="b"> Organized protests<br>
				<input type="radio" name="q20" value="c"> Started a revolution<br>
			</div>

			<div class="quiz-question">
				<p>21. Who is considered as the national hero of the Philippines?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q21" value="a"> Andres Bonifacio<br>
				<input type="radio" name="q21" value="b"> Emilio Aguinaldo<br>
				<input type="radio" name="q21" value="c"> Jose Rizal<br>
			</div>

			<div class="quiz-question">
				<p>22. What was Rizal's profession aside from being a writer?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q22" value="a"> Physician<br>
				<input type="radio" name="q22" value="b"> Lawyer<br>
				<input type="radio" name="q22" value="c"> Teacher<br>
			</div>

			<div class="quiz-question">
				<p>23. What is the title of the national hero's first poem?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q23" value="a"> To the Filipino Youth<br>
				<input type="radio" name="q23" value="b"> Sa Aking Mga Kabata<br>
				<input type="radio" name="q23" value="c"> Mi Ultimo Adios<br>
			</div>

			<div class="quiz-question">
				<p>24. What was Rizal's stance on the use of violence to achieve independence?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q24" value="a"> He advocated for peaceful means<br>
				<input type="radio" name="q24" value="b"> He supported violent revolution<br>
				<input type="radio" name="q24" value="c"> He was neutral<br>
			</div>

			<div class="quiz-question">
				<p>25. What was the occupation of Rizal's parents?</p>
			</div>
			<div class="quiz-options">
				<input type="radio" name="q25" value="a"> Farmers<br>
				<input type="radio" name="q25" value="b"> Merchants<br>
				<input type="radio" name="q25" value="c"> Educators<br>
			</div>


			<button type="submit" class="btn btn-dark">Submit</button>


			<br>
			<br>
		</form>
	</div>
	</div>
</body>

</html>