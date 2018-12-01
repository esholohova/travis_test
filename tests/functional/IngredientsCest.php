<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<?php
use Helper\Functional;
use Helper\Etalons;
use Helper\Common;
class IngredientsCest
{

    public function _before(FunctionalTester $I)
    {
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateDataBase();
        $I->runApplication();
        $I->sendGet('/api/breeding-complex');
           while ($I->seeResponseCodeIs(200)):
               print_r('ok');
           endwhile;

    }

    public function _after(FunctionalTester $I)
    {

        $I->stopApplication();

    }





    public function getExistingIngredientsList(FunctionalTester $I)
    {

        $I->sendGet('/api/ingredients');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $ingredients_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getIngredientsValidListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($ingredients_array, $etalon);

    }

        public function getIngredientById(FunctionalTester $I)
    {   // проверка получения ингредиента по id
        $I->sendGet('/api/ingredients/1');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $ingredient = json_decode($response, true);
        $r = $I->getIngredientsValidListByIdJson();
        $etalon = json_decode($r, true);
        $I->assertEquals($ingredient, $etalon);

    }


    public function createNewIngredient(FunctionalTester $I)
    {
        $json = $I->getJsonForIngredientCreate();
        $I->sendPOST('/api/ingredients', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $j = json_decode($json, true);
        // удаляем из массива. вернувшегося в ответ, три первых параметра, которых нет в эталонном запросе, чтобы сравнить остальные данные
        $r1 = array_slice($r, 3);
        $I->assertEquals($r1, $j);
        $I->sendGET('/api/ingredients');
        $I->seeResponseContains('in test created ingredient');

    }

    public function deleteIngredient(FunctionalTester $I)
    {

        $I->sendDELETE('/api/ingredients/4');
        $I->seeResponseCodeIs(204);
        //$I->sendGET('/api/ingredients/4'); завести ошибку
        $I->sendGET('/api/ingredients/');
        $I->dontSeeResponseContains('Барда сухая');

    }

    public function updateIngredient(FunctionalTester $I)
    {
        $json = $I->getJsonForIngredientUpdate();
        $I->sendPUT('/api/ingredients/3', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $ingredient = json_decode($response, true);
        $etalon = json_decode($json, true);

        $I->assertEquals($ingredient, $etalon);




    }


}
