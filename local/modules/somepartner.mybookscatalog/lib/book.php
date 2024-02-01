<? 
namespace SomePartner\MyBooksCatalog;
use Bitrix\Main\Entity;
class BookTable extends Entity\DataManager
{
	public static function getTableName()
	{
		return 'b_user_balance';
	}
	
	public static function getUfId()
	{
		return 'B_USER_BALANCE';
	}
	public static function getMap()
	{
		return array(
			new Entity\IntegerField('ID', array(
				'primary' => true,
				'autocomplete' => true
			)),
			// new Entity\StringField('ISBN', array(
			// 	'required' => true,
			// 	'column_name' => 'ISBNCODE'
			// )),
			new Entity\StringField('USER_ID'),
			new Entity\StringField('SUMM'),
	//		new Entity\DateField('PUBLISH_DATE')
		);
	}
}
// код для создания таблицы в MySQL 
// (получен путем вызова BookTable::getEntity()->compileDbTableStructureDump())
// CREATE TABLE `my_book` (
// 	`ID` int NOT NULL AUTO_INCREMENT,
// 	`ISBNCODE` varchar(255) NOT NULL,
// 	`TITLE` varchar(255) NOT NULL,
// 	`PUBLISH_DATE` date NOT NULL,
// 	PRIMARY KEY(`ID`)
// );
?>