<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ЛК");
?>

<div class="container">
	<div class="summ-form">
			<h2>Вывести средства с этого счета</h2>
			<form class="form">

				<input type="text" placeholder="Укажите сумму">

				<button>Вывести</button>
			</form>
	</div>

	<h2>историей операций </h2>
	<div class="history">
		<div class="history__head">
			<div >Дата</div>
			<div>Выведено</div>
			<div>Остаток</div>
		</div>
		<div class="history__body">
			<div class="history__item">
				<div>22.01.2024</div>
				<div>500 руб.</div>
				<div>4500 руб.</div>
			</div>
			<div class="history__item">
				<div>22.01.2024</div>
				<div>500 руб.</div>
				<div>4500 руб.</div>
			</div>
			<div class="history__item">
				<div>22.01.2024</div>
				<div>500 руб.</div>
				<div>4500 руб.</div>
			</div>
			<div class="history__item">
				<div>22.01.2024</div>
				<div>500 руб.</div>
				<div>4500 руб.</div>
			</div>
			<div class="history__item">
				<div>22.01.2024</div>
				<div>500 руб.</div>
				<div>4500 руб.</div>
			</div>
		</div>


	</div>


</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>