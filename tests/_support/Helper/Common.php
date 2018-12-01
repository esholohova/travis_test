<?php
/**
 * Created by PhpStorm.
 * User: esholohova
 * Date: 01.11.2018
 * Time: 10:55
 */

namespace Helper;
use Codeception\Codecept;
use PDO;

class Common extends \Codeception\Module
{

    public  function updateDataBase() {

        $file = 'tests/_data/sqlite.db';
        $newfile = '../release/feeding-farm-datastore/sqlite.db';
        if (!copy($file, $newfile)) {
            echo "не удалось скопировать $file...\n";            return false;
        }
       return true;
    }



    public  function runApplication() {
        pclose(popen("start /b ../release/feeding.exe", 'r'));
        sleep(7);
    }


    public  function stopApplication() {
        exec("cmd /c taskkill /F /IM feeding.exe /T");

    }

    public  function getExistingIngredientsList() {

            // список ингредиентов
            // todo соединение с бд вынести в приличное место
            $myPDO = new PDO('../release/feeding-farm-datastore\sqlite.db');
            $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $ingredients_list = array();

            $sth = $myPDO->query("SELECT * FROM Ingredients WHERE DeletedAt IS NULL");
            while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
                $ingredients_list[] = $row; // appends each row to the array

            }
            return $ingredients_list;
        }


    public  function getExistingRationsList() {

        // список рационов
        $myPDO = new PDO('sqlite:C:\Users\esholohova\Desktop\releases\1056\feeding-farm-datastore\sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $myPDO->query("SELECT * FROM Rations");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $rations_list[] = $row; // appends each row to the array

        }
        return $rations_list;
    }

    public  function getExistingRationIngredientsList($rationName) {

        // выборка таблички со списком ингредиентов, которая расположена внизу карточки рациона. вывод только ее полей
        // запрос осуществляется по имени
        $myPDO = new PDO('sqlite:C:\Users\esholohova\Desktop\releases\1056\feeding-farm-datastore\sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $myPDO->query("SELECT RationIngredients.OrdinalNumber, Rations.Name As RationName, Ingredients.Name As IName, RationIngredients.MixingTime, RationIngredients.DryWeight FROM Rations 
        join RationIngredients On Rations.Id = RationIngredients.RationId 
        join Ingredients On RationIngredients.IngredientId = Ingredients.Id
        Where Rations.Name = '" . $rationName . "'
        ORDER BY RationIngredients.OrdinalNumber ASC");
        $ration_ingredients_list = array();
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $ration_ingredients_list[] = $row; // appends each row to the array

        }

        return $ration_ingredients_list;
    }


    public  function getExistingFeedingPlansList() {

        // список расписаний
        $myPDO = new PDO('sqlite:C:\Users\esholohova\Desktop\releases\1056\feeding-farm-datastore\sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // выборка таблички со списком ингредиентов, которая расположена внизу карточки рациона. вывод только ее полей
        $sth = $myPDO->query("SELECT * FROM 'FeedingPlans' ORDER BY NAME DESC");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $feeding_plans_list[] = $row; // appends each row to the array

        }
        return $feeding_plans_list;
    }

    public  function getExistingPhysiologicalGroupsList() {

        // список физиологических групп
        $myPDO = new PDO('sqlite:C:\Users\esholohova\Desktop\releases\1056\feeding-farm-datastore\sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // выборка таблички со списком ингредиентов, которая расположена внизу карточки рациона. вывод только ее полей
        $sth = $myPDO->query("SELECT * FROM 'PhysiologicalGroups' ORDER BY NAME DESC");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $physiological_groups_list[] = $row; // appends each row to the array

        }
        return $physiological_groups_list;

    }


    public  function getPensList() {

        // список отделений коровника вывод по порядковому номеру
        $myPDO = new PDO('sqlite:C:\Users\esholohova\Desktop\releases\1056\feeding-farm-datastore\sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // выборка таблички со списком ингредиентов, которая расположена внизу карточки рациона. вывод только ее полей
        $sth = $myPDO->query("SELECT * FROM 'Pens' ORDER BY ORDER BY OrdinalNumber ASC ");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $pens_list[] = $row; // appends each row to the array

        }
        return $pens_list;

    }


    public  function getPenSettingsList($penName) {

        // список данных, видимых на странице Коровник
        $myPDO = new PDO('sqlite:C:\Users\esholohova\Desktop\releases\1056\feeding-farm-datastore\sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //сортировка как на странице, по номеру сексии, а не айди
        //выводит: имя PensName (имя секции) FeedingPlanName (название расписания)
        //PhysiologicalGroupsName (название группы) MixerName (название миксера) HeadCount (поголовье) Apetit
        // todo добавить аппетит
        $sth = $myPDO->query("SELECT  Pens.Name AS PensName, PhysiologicalGroups.Name AS PhysiologicalGroupsName, Mixers.Name AS MixerName, PenPhysiologicalGroups.HeadCount, FeedingPlans.Name AS FeedingPlanName FROM Pens 
        join PhysiologicalGroups On Pens.Id = PenPhysiologicalGroups.PenId
		join PenPhysiologicalGroups ON PenPhysiologicalGroups.PhysiologicalGroupId = PhysiologicalGroups.Id
		join Mixers ON Mixers.Id = Pens.MixerId
		join FeedingPlans ON FeedingPlans.Id = Pens.FeedingPlanId
		Where Pens.Name = . $penName . 
        ORDER BY Pens.OrdinalNumber ASC");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $pen_settings_list[] = $row; // appends each row to the array

        }
        return $pen_settings_list;

    }






}