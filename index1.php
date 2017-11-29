<html>
	<body>
			<?php
			$daysOfweek=[
				'Mon'=>'Понедельник',
				'Tue'=>'Вторник'
				'Wed'=>'Среда'
				'Thu'=>'Четверг'
				'Fri'=>'Пятница'
				'Sat'=>'Суббота'
				'SUN'=>'Воскресенье'
			];
		?>
		
		<form metod="GET" action="index.php" >
			<input type="date" name="value" value="<?php if (isset($myDate))
			{
			
			echo htmlspecialchars($myDate->format('Y-m-d'));
			}?>">
			<input type="submit" value="Узнать день недели 1 числа месяца">
		</form>
		<?php
			if (isset($myDate)){
				$month=$myDate -> format('m');
				$year=$myDate -> format('Y');
				$day=1;
				$myDate->setDate((int)$year,(int)$month,(int)$day);
				echo $myDate->format('D');
			}		
		?>
		<?php	
			if (isset($_GET['result'])) {
				$dayOfweek=$NewDate('D')
			}
		?>
	</body>
</html>
