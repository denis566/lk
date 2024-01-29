<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>

<?
// echo 'test';

use Bitrix\Main\Application;
use Bitrix\Main\Entity;

$connection = Application::getConnection();

        try{
            $connection->createTable(
                'b_table_name',
                [
                    'id' => new Entity\IntegerField(
                        'id',
                        [
                            'column_name' => 'id'
                        ]
                    ),
                    'user_id' => new Entity\IntegerField(
                        'user_id',
                        [
                            'column_name' => 'user_id'
                        ]
                    ),
                    'type' => new Entity\StringField(
                        'type',
                        [
                            'column_name' => 'type'
                        ]
                    ),
                    'create_date' => new Entity\DatetimeField(
                        'create_date',
                        [
                            'column_name' => 'create_date'
                        ]
                    )
                ],
                ['id'],
                ['id']
            );
        }
        catch(\Exception $exception){
            echo $exception->getMessage();
        }
?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>