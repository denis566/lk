<?
namespace SomePartner\MyBooksCatalog;
// namespace lib\test;


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>

<?
// echo 'test';

use Bitrix\Main\Application;
use Bitrix\Main\Entity;

// $connection = Application::getConnection();

//         try{
//             $connection->createTable(
//                 'b_user_balance',
//                 [
//                     'id' => new Entity\IntegerField(
//                         'id',
//                         [
//                             'column_name' => 'id'
//                         ]
//                     ),
//                     'user_id' => new Entity\IntegerField(
//                         'user_id',
//                         [
//                             'column_name' => 'user_id'
//                         ]
//                     ),
//                     'summ' => new Entity\IntegerField(
//                         'summ',
//                         [
//                             'column_name' => 'summ'
//                         ]
//                     )
//                 ],
//                 ['id'],
//                 ['id']
//             );
//         }
//         catch(\Exception $exception){
//             echo $exception->getMessage();
//         }

//  $someclass = new SomeClass();
//  $someclass->hello();

// $someclass = new lib\SomeClass();
// $someclass->hello();

use Bitrix\Main\Type;


//echo BookTable::getMap();

$result = BookTable::add(array(
	'USER_ID' => '11',
	// 'TITLE' => 'Patterns of Enterprise Application Architecture',
	'PUBLISH_DATE' => new Type\Date('2002-11-16', 'Y-m-d')
));
if ($result->isSuccess())
{
	$id = $result->getId();
    echo $id;
}


?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>