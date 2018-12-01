<?php

namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Lib\ModuleContainer;
use DateTime;
class Etalons extends \Codeception\Module
{

    public function getIngredientsValidListJson()
    {
        $ingredients_valid_list = '[
        {
        "stores": [],
        "created": "2018-10-22T14:39:29.6964767+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2"
            ]
        },
        "id": 1,
        "name": "Солома пшеничная",
        "type": 3,
        "dryMatter": 0.86,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "SolPsh"
        },
    {
        "stores": [],
        "created": "2018-10-22T14:39:29.3780567+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 2,
        "name": "Комбикорм № 20",
        "type": 1,
        "dryMatter": 0.88,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Kom 20"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:29.017326+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1"
            ]
        },
        "id": 3,
        "name": "Комбикорм № 11",
        "type": 1,
        "dryMatter": 0.89,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Kom 11"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:28.8445806+03:00",
        "blockedActions": {},
        "id": 4,
        "name": "Барда сухая",
        "type": 1,
        "dryMatter": 0.9,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Barda"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:28.6324753+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2"
            ]
        },
        "id": 5,
        "name": "Соя",
        "type": 1,
        "dryMatter": 0.9,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Soya"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:28.3253748+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 6,
        "name": "Рапс",
        "type": 1,
        "dryMatter": 0.9,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Raps"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:26.6602072+03:00",
        "blockedActions": {},
        "id": 7,
        "name": "Комбикором № 1",
        "type": 1,
        "dryMatter": 0.92,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Komb 1"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:26.8706689+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1"
            ]
        },
        "id": 8,
        "name": "Премикс коровы",
        "type": 1,
        "dryMatter": 0.99,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "PreKor"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:28.1109395+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2"
            ]
        },
        "id": 9,
        "name": "Комбикорм № 2",
        "type": 1,
        "dryMatter": 0.9,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Komb 2"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.9166204+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0"
            ]
        },
        "id": 10,
        "name": "Глицерин",
        "type": 1,
        "dryMatter": 1,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Glizer"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:26.4665383+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 11,
        "name": "Сенаж ",
        "type": 3,
        "dryMatter": 0.4,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": true,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Senazh"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:26.2259582+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 12,
        "name": "Силос",
        "type": 3,
        "dryMatter": 0.26,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": true,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Silos"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.7096584+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 14,
        "name": "Сено",
        "type": 3,
        "dryMatter": 0.86,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Seno"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.4935732+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 2 - 6"
            ]
        },
        "id": 15,
        "name": "Комбикорм № 3",
        "type": 1,
        "dryMatter": 0.88,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Komb 3"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.2940602+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 3"
            ]
        },
        "id": 16,
        "name": "Комбикорм № 12",
        "type": 1,
        "dryMatter": 0.89,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "Komb12"
    },
    {
        "stores": [],
        "created": "2018-10-22T14:39:27.0791555+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Нетели",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 12 - 18",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Т 6 - 12"
            ]
        },
        "id": 17,
        "name": "Премикс телки",
        "type": 1,
        "dryMatter": 0.95,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "PreTel"
    }
    ]';


        return $ingredients_valid_list;
    }

    public function getIngredientsValidListByIdJson()
    {
        $ingredient_json =  '{
    "stores": [],
    "created": "2018-10-22T14:39:29.6964767+03:00",
    "blockedActions": {
        "RemoveIngredient": [
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1",
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 2",
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 1",
            "Ингредиент нельзя удалить, т.к. он входит с состав рациона Сух - 2"
        ]
    },
    "id": 1,
    "name": "Солома пшеничная",
    "type": 3,
    "dryMatter": 0.86,
    "lossType": 0,
    "lossCount": 0,
    "dynamicDryMatter": false,
    "isUnderweight": false,
    "digiStarInterchangeCode": "SolPsh"
}';

    return $ingredient_json;
    }

    public function getJsonForIngredientUpdate()  {


        $update_ingredient_json = '{
        "stores": [],
        "created": "2018-10-22T14:39:29.017326+03:00",
        "blockedActions": {
            "RemoveIngredient": [
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 0",
                "Ингредиент нельзя удалить, т.к. он входит с состав рациона Д - 1"
            ]
        },
        "id": 3,
        "name": "Комбикорм № 11 updated",
        "type": 3,
        "dryMatter": 0.50,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "digiStarInterchangeCode": "Kom 22"
    }';

        return $update_ingredient_json;

    }

    public function getJsonForIngredientCreate()  {


        $create_ingredient_json =
        '{
        "id": 13,
        "name": "in test created ingredient",
        "description": "description",
        "type": 1,
        "dryMatter": 0.5,
        "lossType": 0,
        "lossCount": 0,
        "price": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "windLossProportion": 0,
        "digiStarInterchangeCode": "123456"
    }';

        return $create_ingredient_json;

    }


    public function getRationsValidListJson()
    {  $rations_valid_list = '[
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 2.5,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 11",
                "ingredientId": 3,
                "ordinalNumber": 2,
                "dryWeight": 3,
                "ptoRotation": 0
            },
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 3,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 4,
                "dryWeight": 0.55,
                "ptoRotation": 0
            },
            {
                "name": "Глицерин",
                "ingredientId": 10,
                "ordinalNumber": 5,
                "dryWeight": 0.45,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 6,
                "dryWeight": 2.5,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 7,
                "dryWeight": 7,
                "ptoRotation": 0
            }
        ],
        "id": 1,
        "name": "Д - 0",
        "density": 380,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 720,
        "digiStarInterchangeCode": "D  0"
    },
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 0.7,
                "ptoRotation": 0
            },
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 1,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 2,
                "dryWeight": 7.2,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 11",
                "ingredientId": 3,
                "ordinalNumber": 3,
                "dryWeight": 4,
                "ptoRotation": 0
            },
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 4,
                "dryWeight": 1.8,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 5,
                "dryWeight": 0.8,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 6,
                "dryWeight": 3.35,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 7,
                "dryWeight": 6.15,
                "ptoRotation": 0
            }
        ],
        "id": 2,
        "name": "Д - 1",
        "density": 370,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 2.51,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "D 1"
    },
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 0.5,
                "ptoRotation": 0
            },
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 1,
                "dryWeight": 1.5,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 12",
                "ingredientId": 16,
                "ordinalNumber": 2,
                "dryWeight": 4,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 3,
                "dryWeight": 6,
                "ptoRotation": 0
            },
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 4,
                "dryWeight": 1.6,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 5,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 6,
                "dryWeight": 3.6,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 7,
                "dryWeight": 6.8,
                "ptoRotation": 0
            }
        ],
        "id": 4,
        "name": "Д - 2",
        "density": 400,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 1.51,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "D 2"
    },
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 1.5,
                "ptoRotation": 0
            },
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 1,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 2,
                "dryWeight": 0.8,
                "ptoRotation": 0
            },
            {
                "name": "Премикс коровы",
                "ingredientId": 8,
                "ordinalNumber": 3,
                "dryWeight": 0.15,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 4.3,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 4.25,
                "ptoRotation": 0
            }
        ],
        "id": 5,
        "name": "Сух - 1",
        "density": 400,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "SUH 1"
    },
    {
        "ingredients": [
            {
                "name": "Солома пшеничная",
                "ingredientId": 1,
                "ordinalNumber": 0,
                "dryWeight": 1.5,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 1.65,
                "ptoRotation": 0
            },
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 2,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 3,
                "dryWeight": 0.6,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 2",
                "ingredientId": 9,
                "ordinalNumber": 4,
                "dryWeight": 1.37,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 5,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 6,
                "dryWeight": 4.88,
                "ptoRotation": 0
            }
        ],
        "id": 6,
        "name": "Сух - 2",
        "density": 380,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "SUH 2"
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 3,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 2,
                "dryWeight": 0.5,
                "ptoRotation": 0
            },
            {
                "name": "Премикс телки",
                "ingredientId": 17,
                "ordinalNumber": 3,
                "dryWeight": 0.15,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 3.4,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 3.95,
                "ptoRotation": 0
            }
        ],
        "id": 7,
        "name": "Нетели",
        "density": 400,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "NETELI"
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 2.1,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 2,
                "dryWeight": 0.6,
                "ptoRotation": 0
            },
            {
                "name": "Премикс телки",
                "ingredientId": 17,
                "ordinalNumber": 3,
                "dryWeight": 0.15,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 4,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 4.15,
                "ptoRotation": 0
            }
        ],
        "id": 8,
        "name": "Т 12 - 18",
        "density": 400,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "T12 18"
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 1,
                "dryWeight": 2.15,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 2,
                "dryWeight": 0.9,
                "ptoRotation": 0
            },
            {
                "name": "Премикс телки",
                "ingredientId": 17,
                "ordinalNumber": 3,
                "dryWeight": 0.15,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 1.9,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 1.9,
                "ptoRotation": 0
            }
        ],
        "id": 9,
        "name": "Т 6 - 12",
        "density": 400,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "T 6 12"
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 0.35,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 3",
                "ingredientId": 15,
                "ordinalNumber": 1,
                "dryWeight": 2.1,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 2,
                "dryWeight": 0.4,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 3,
                "dryWeight": 0.35,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 4,
                "dryWeight": 0.8,
                "ptoRotation": 0
            }
        ],
        "id": 10,
        "name": "Т 2 - 6",
        "density": 400,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "T 2 6"
    },
    {
        "ingredients": [
            {
                "name": "Сено",
                "ingredientId": 14,
                "ordinalNumber": 0,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 12",
                "ingredientId": 16,
                "ordinalNumber": 1,
                "dryWeight": 3.5,
                "ptoRotation": 0
            },
            {
                "name": "Комбикорм № 20",
                "ingredientId": 2,
                "ordinalNumber": 2,
                "dryWeight": 2,
                "ptoRotation": 0
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 3,
                "dryWeight": 1,
                "ptoRotation": 0
            },
            {
                "name": "Сенаж ",
                "ingredientId": 11,
                "ordinalNumber": 4,
                "dryWeight": 6.75,
                "ptoRotation": 0
            },
            {
                "name": "Силос",
                "ingredientId": 12,
                "ordinalNumber": 5,
                "dryWeight": 6.75,
                "ptoRotation": 0
            }
        ],
        "id": 11,
        "name": "Д - 3",
        "density": 380,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 0,
        "waterPtoRotation": 0,
        "digiStarInterchangeCode": "D 3"
    }
]';
    return $rations_valid_list;


    }

    public function getRationsValidListJsonById()
    {  $ration_json = '{
    "ingredients": [
        {
            "name": "Сено",
            "ingredientId": 14,
            "ordinalNumber": 0,
            "dryWeight": 0.35,
            "ptoRotation": 0
        },
        {
            "name": "Комбикорм № 3",
            "ingredientId": 15,
            "ordinalNumber": 1,
            "dryWeight": 2.1,
            "ptoRotation": 0
        },
        {
            "name": "Комбикорм № 20",
            "ingredientId": 2,
            "ordinalNumber": 2,
            "dryWeight": 0.4,
            "ptoRotation": 0
        },
        {
            "name": "Сенаж ",
            "ingredientId": 11,
            "ordinalNumber": 3,
            "dryWeight": 0.35,
            "ptoRotation": 0
        },
        {
            "name": "Силос",
            "ingredientId": 12,
            "ordinalNumber": 4,
            "dryWeight": 0.8,
            "ptoRotation": 0
        }
    ],
    "id": 10,
    "name": "Т 2 - 6",
    "density": 400,
    "isPremix": false,
    "compensationMode": 0,
    "waterWeight": 0,
    "waterPtoRotation": 0,
    "digiStarInterchangeCode": "T 2 6"
}';

        return $ration_json;


    }

    public function getJsonForRationCreate() {
        $create_ration_json = '{
    "ingredients": [
        {
            "name": "Сено",
            "ingredientId": 14,
            "ordinalNumber": 0,
            "dryWeight": 0.35,
            "ptoRotation": 0
        },
        {
            "name": "Комбикорм № 3",
            "ingredientId": 15,
            "ordinalNumber": 1,
            "dryWeight": 2.1,
            "ptoRotation": 0
        },
        {
            "name": "Комбикорм № 20",
            "ingredientId": 2,
            "ordinalNumber": 2,
            "dryWeight": 0.4,
            "ptoRotation": 0
        },
        {
            "name": "Сенаж ",
            "ingredientId": 11,
            "ordinalNumber": 3,
            "dryWeight": 0.35,
            "ptoRotation": 0
        },
        {
            "name": "Силос",
            "ingredientId": 12,
            "ordinalNumber": 4,
            "dryWeight": 0.8,
            "ptoRotation": 0
        }
    ],
    "id": 61,
    "name": "ration create in test",
    "density": 700,
    "isPremix": false,
    "compensationMode": 0,
    "waterWeight": 1,
    "waterPtoRotation": 1,
    "digiStarInterchangeCode": "177777"
}';

            return $create_ration_json;

    }

    public function getJsonForRationUpdate() {

        $update_ration_json = '{
        "ingredients": [],
        "id": 10,
        "name": "Д123",
        "density": 480,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 1,
        "waterPtoRotation": 820,
        "digiStarInterchangeCode": "d12"
        }';

        return $update_ration_json;



    }



    public function getMixersValidListJson()
    {  $mixers_valid_list = '[
    {
        "id": 1,
        "name": "30",
        "description": "",
        "volume": 30
    },
    {
        "id": 2,
        "name": "15",
        "description": "",
        "volume": 15
    }
]';
        return $mixers_valid_list;


    }

    public function getMixersValidListJsonById()
    {  $mixer_json = '{
    "id": 1,
    "name": "30",
    "description": "",
    "volume": 30
}';

        return $mixer_json;


    }

    public function getJsonForMixerCreate() {
        $create_mixer_json = '{
        "id": 5,
        "name": "mixer in test create",
        "description": "fifth description",
        "volume": 30
        }';

        return $create_mixer_json;

    }

    public function getJsonForMixerUpdate() {

        $update_mixer_json = '{
        "id": 1,
        "name": "30 name",
        "description": "",
        "volume": 31
        }';

        return $update_mixer_json;



    }


    public function getFeedingPlansValidListJson()
    {  $feed_plans_valid_list = '[
    {
        "id": 1,
        "name": "Д - 0 100%",
        "rationId": 1,
        "parts": [
            1
        ]
    },
    {
        "id": 4,
        "name": "Д - 1 100%",
        "rationId": 2,
        "parts": [
            1
        ]
    },
    {
        "id": 5,
        "name": "Сух - 1",
        "rationId": 5,
        "parts": [
            1
        ]
    },
    {
        "id": 6,
        "name": "Сух - 2",
        "rationId": 6,
        "parts": [
            1
        ]
    },
    {
        "id": 7,
        "name": "Т 12 - 18",
        "rationId": 8,
        "parts": [
            1
        ]
    },
    {
        "id": 8,
        "name": "Т 6 - 12",
        "rationId": 9,
        "parts": [
            1
        ]
    },
    {
        "id": 9,
        "name": "Т 2 - 6",
        "rationId": 10,
        "parts": [
            1
        ]
    },
    {
        "id": 10,
        "name": "Д - 1 50/50 %",
        "rationId": 2,
        "parts": [
            0.5,
            0.5
        ]
    },
    {
        "id": 11,
        "name": "Д - 2 100%",
        "rationId": 4,
        "parts": [
            1
        ]
    },
    {
        "id": 13,
        "name": "Нетели",
        "rationId": 7,
        "parts": [
            1
        ]
    },
    {
        "id": 16,
        "name": "Сух - 1 50/50%",
        "rationId": 5,
        "parts": [
            0.5,
            0.5
        ]
    },
    {
        "id": 18,
        "name": "Д - 2 50/50%",
        "rationId": 4,
        "parts": [
            0.5,
            0.5
        ]
    },
    {
        "id": 19,
        "name": "Т 2-6 50/50%",
        "rationId": 10,
        "parts": [
            0.5,
            0.5
        ]
    },
    {
        "id": 20,
        "name": "Д - 0 50/50%",
        "rationId": 1,
        "parts": [
            0.5,
            0.5
        ]
    },
    {
        "id": 21,
        "name": "Д - 3 100%",
        "rationId": 11,
        "parts": [
            1
        ]
    },
    {
        "id": 22,
        "name": "Д - 3 50/50%",
        "rationId": 11,
        "parts": [
            0.5,
            0.5
        ]
    },
    {
        "id": 23,
        "name": "Д - 1 45/55%",
        "rationId": 2,
        "parts": [
            0.45,
            0.55
        ]
    }
]';
        return $feed_plans_valid_list;


    }

    public function getFeedingPlansListJsonById()
    {  $feed_plan_json = '{
       "id": 10,
       "name": "Д - 1 50/50 %",
       "rationId": 2,
       "parts": [
       0.5,
       0.5
       ]
       }';
        return $feed_plan_json;


    }

    public function getJsonForFeedingPlanCreate() {
        $create_feed_plan_json = '{
         "id": 77,
         "name": "plan created in test",
         "rationId": 1,
         "parts": [
         0.5,
         0.5
         ]
         }';

        return $create_feed_plan_json;

    }

    public function getJsonForFeedingPlanUpdate() {

        $update_feed_plan_json = '{
       "id": 10,
       "name": "new name Д - 1 50/50 %",
       "rationId": 1,
       "parts": [
       0.5,
       0.5
       ]
       }';

        return $update_feed_plan_json;



    }


    public function getStorageUnitsValidListJson()
    {  $storages_valid_list = '[
    {
        "id": 1,
        "name": "Силос",
        "description": "",
        "ingredientId": 12,
        "amount": 2547973
    },
    {
        "id": 2,
        "name": "Комбикорм № 1",
        "description": "",
        "ingredientId": 7,
        "amount": 0
    },
    {
        "id": 4,
        "name": "Сенаж 17",
        "description": "",
        "ingredientId": 11,
        "amount": 632336
    },
    {
        "id": 5,
        "name": "Премикс телки",
        "description": "",
        "ingredientId": 17,
        "amount": 1125
    },
    {
        "id": 6,
        "name": "Комбикорм № 12",
        "description": "",
        "ingredientId": 16,
        "amount": 5999
    },
    {
        "id": 7,
        "name": "Комбикорм № 3",
        "description": "",
        "ingredientId": 15,
        "amount": 6926
    },
    {
        "id": 8,
        "name": "Сено",
        "description": "",
        "ingredientId": 14,
        "amount": 12641
    },
    {
        "id": 9,
        "name": "Глицерин",
        "description": "",
        "ingredientId": 10,
        "amount": 1551
    },
    {
        "id": 10,
        "name": "Комбикорм № 2",
        "description": "",
        "ingredientId": 9,
        "amount": 858
    },
    {
        "id": 11,
        "name": "Премикс коровы",
        "description": "",
        "ingredientId": 8,
        "amount": 967
    },
    {
        "id": 12,
        "name": "Рапс",
        "description": "",
        "ingredientId": 6,
        "amount": 490588
    },
    {
        "id": 13,
        "name": "Соя",
        "description": "",
        "ingredientId": 5,
        "amount": 485263
    },
    {
        "id": 14,
        "name": "Барда сухая",
        "description": "",
        "ingredientId": 4,
        "amount": 2578
    },
    {
        "id": 15,
        "name": "Комбикорм № 11",
        "description": "",
        "ingredientId": 3,
        "amount": 478905
    },
    {
        "id": 16,
        "name": "Комбикорм № 20",
        "description": "",
        "ingredientId": 2,
        "amount": 437246
    },
    {
        "id": 17,
        "name": "Солома пшеничная",
        "description": "",
        "ingredientId": 1,
        "amount": 100189
    }
    ]';
        return $storages_valid_list;


    }

    public function getStorageUnitsListJsonById()
    {  $storage_json = '{
       "id": 8,
       "name": "Сено",
       "description": "",
       "ingredientId": 14,
       "amount": 12641
       }';
        return $storage_json;


    }

    public function getJsonForStorageUnitsCreate() {
        $create_storage_json = '{
        "id": 20,
        "name": "storage in test created",
        "description": "description",
        "ingredientId": 14,
        "amount": 5000
        }';

        return $create_storage_json;

    }

    public function getJsonForStorageUnitsCreated() {
        $created_storage_json = '{
        "ingredient": {
         "id": 14,
         "name": "Сено",
         "type": 3,
         "dryMatter": 0.86,
         "lossType": 0,
         "lossCount": 0,
         "dynamicDryMatter": false,
         "isUnderweight": false,
         "digiStarInterchangeCode": "Seno"
        },
        "id": 20,
        "name": "storage in test created",
        "description": "description",
        "ingredientId": 14,
        "amount": 5000
           }';

        return $created_storage_json;

    }

    public function getJsonForStorageUnitsUpdate()
    {

        $update_storage_json = '
         {
        "id": 1,
        "name": "Силос updated",
        "description": "update",
        "ingredientId": 10,
        "amount": 7777
         }';

        return $update_storage_json;
    }

    public function getJsonForStorageUnitsUpdated() {

         $updated_storage_json = '{
         "ingredient": {
         "id": 10,
         "name": "Глицерин",
         "type": 1,
         "dryMatter": 1,
         "lossType": 0,
         "lossCount": 0,
         "dynamicDryMatter": false,
         "isUnderweight": false,
         "digiStarInterchangeCode": "Glizer"
         },
        "id": 1,
        "name": "Силос updated",
        "description": "update",
        "ingredientId": 10,
        "amount": 7777
        }';

            return $updated_storage_json;



    }


    public function getCattleHousesSectionsValidListJson()
    {  $chouses_valid_list = '[
    {
        "physiologicalGroups": [
            {
                "name": "Д - 0",
                "physiologicalGroupId": 1,
                "headCount": 62
            }
        ],
        "id": 1,
        "name": "32",
        "feedingPlanId": 1,
        "appetite": 0.78,
        "ordinalNumber": 2,
        "notCombine": false,
        "mixerId": 2,
        "digiStarInterchangeCode": "32"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 0",
                "physiologicalGroupId": 1,
                "headCount": 7
            }
        ],
        "id": 3,
        "name": "15",
        "feedingPlanId": 1,
        "appetite": 0.48,
        "ordinalNumber": 3,
        "notCombine": false,
        "mixerId": 2,
        "digiStarInterchangeCode": "15"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 112
            }
        ],
        "id": 4,
        "name": "21",
        "feedingPlanId": 10,
        "appetite": 0.93,
        "ordinalNumber": 7,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "21"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 113
            }
        ],
        "id": 5,
        "name": "22",
        "feedingPlanId": 10,
        "appetite": 0.88,
        "ordinalNumber": 8,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "22"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 110
            }
        ],
        "id": 6,
        "name": "23",
        "feedingPlanId": 10,
        "appetite": 0.74,
        "ordinalNumber": 5,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "23"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 111
            }
        ],
        "id": 7,
        "name": "24",
        "feedingPlanId": 10,
        "appetite": 0.79,
        "ordinalNumber": 6,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "24"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 35
            }
        ],
        "id": 8,
        "name": "10",
        "feedingPlanId": 4,
        "appetite": 0.87,
        "ordinalNumber": 12,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "10"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Т 2-6",
                "physiologicalGroupId": 8,
                "headCount": 374
            }
        ],
        "id": 9,
        "name": "Навес",
        "feedingPlanId": 9,
        "appetite": 1.44,
        "ordinalNumber": 9,
        "notCombine": false,
        "mixerId": 2,
        "digiStarInterchangeCode": "Naves"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 152
            }
        ],
        "id": 11,
        "name": "43",
        "feedingPlanId": 10,
        "appetite": 0.88,
        "ordinalNumber": 10,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "43"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 151
            }
        ],
        "id": 12,
        "name": "44",
        "feedingPlanId": 10,
        "appetite": 0.97,
        "ordinalNumber": 11,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "44"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Т 6-12",
                "physiologicalGroupId": 9,
                "headCount": 55
            }
        ],
        "id": 15,
        "name": "64",
        "feedingPlanId": 8,
        "appetite": 0.8,
        "ordinalNumber": 15,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "64"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 145
            }
        ],
        "id": 16,
        "name": "41",
        "feedingPlanId": 10,
        "appetite": 0.81,
        "ordinalNumber": 16,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "41"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 144
            }
        ],
        "id": 17,
        "name": "42",
        "feedingPlanId": 10,
        "appetite": 1.01,
        "ordinalNumber": 17,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "42"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 15
            },
            {
                "name": "Сух - 1",
                "physiologicalGroupId": 4,
                "headCount": 94
            }
        ],
        "id": 18,
        "name": "72",
        "feedingPlanId": 5,
        "appetite": 0.97,
        "ordinalNumber": 22,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "72"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 2",
                "physiologicalGroupId": 3,
                "headCount": 154
            }
        ],
        "id": 21,
        "name": "53",
        "feedingPlanId": 11,
        "appetite": 0.82,
        "ordinalNumber": 20,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "53"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 145
            }
        ],
        "id": 22,
        "name": "54",
        "feedingPlanId": 4,
        "appetite": 0.96,
        "ordinalNumber": 23,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "54"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 3",
                "physiologicalGroupId": 14,
                "headCount": 121
            }
        ],
        "id": 23,
        "name": "52",
        "feedingPlanId": 22,
        "appetite": 0.82,
        "ordinalNumber": 25,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "52"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 3",
                "physiologicalGroupId": 14,
                "headCount": 105
            }
        ],
        "id": 24,
        "name": "51",
        "feedingPlanId": 22,
        "appetite": 0.74,
        "ordinalNumber": 24,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "51"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 0",
                "physiologicalGroupId": 1,
                "headCount": 62
            }
        ],
        "id": 26,
        "name": "31",
        "feedingPlanId": 1,
        "appetite": 0.78,
        "ordinalNumber": 1,
        "notCombine": false,
        "mixerId": 2,
        "digiStarInterchangeCode": "31"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 1
            }
        ],
        "id": 28,
        "name": "Копытчик",
        "feedingPlanId": 4,
        "appetite": 0.67,
        "ordinalNumber": 4,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "Kopit"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 27
            },
            {
                "name": "Сух - 2",
                "physiologicalGroupId": 5,
                "headCount": 62
            }
        ],
        "id": 29,
        "name": "11",
        "feedingPlanId": 6,
        "appetite": 0.95,
        "ordinalNumber": 28,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "11"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Сух - 2",
                "physiologicalGroupId": 5,
                "headCount": 23
            },
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 36
            }
        ],
        "id": 30,
        "name": "16",
        "feedingPlanId": 6,
        "appetite": 0.85,
        "ordinalNumber": 27,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "16"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 115
            }
        ],
        "id": 33,
        "name": "71",
        "feedingPlanId": 13,
        "appetite": 0.85,
        "ordinalNumber": 19,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "71"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Сух - 2",
                "physiologicalGroupId": 5,
                "headCount": 18
            },
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 27
            }
        ],
        "id": 36,
        "name": "13",
        "feedingPlanId": 6,
        "appetite": 0.9,
        "ordinalNumber": 26,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "13"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Д - 1",
                "physiologicalGroupId": 2,
                "headCount": 20
            }
        ],
        "id": 39,
        "name": "12",
        "feedingPlanId": 4,
        "appetite": 0.78,
        "ordinalNumber": 13,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "12"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Сух - 1",
                "physiologicalGroupId": 4,
                "headCount": 109
            },
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 1
            }
        ],
        "id": 41,
        "name": "73",
        "feedingPlanId": 5,
        "appetite": 1.03,
        "ordinalNumber": 21,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "73"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Т 12-18",
                "physiologicalGroupId": 10,
                "headCount": 304
            }
        ],
        "id": 43,
        "name": "61-63",
        "feedingPlanId": 8,
        "appetite": 0.62,
        "ordinalNumber": 14,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "61 63"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 111
            }
        ],
        "id": 45,
        "name": "65",
        "feedingPlanId": 13,
        "appetite": 0.8,
        "ordinalNumber": 18,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "65"
    },
    {
        "physiologicalGroups": [
            {
                "name": "Сух - 2",
                "physiologicalGroupId": 5,
                "headCount": 16
            },
            {
                "name": "Нетели",
                "physiologicalGroupId": 6,
                "headCount": 51
            }
        ],
        "id": 46,
        "name": "74",
        "feedingPlanId": 6,
        "appetite": 1,
        "ordinalNumber": 29,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "74"
    }
]';
        return $chouses_valid_list;


    }

    public function getCattleHousesSectionListJsonById()
    {  $section_json = '
        {
        "physiologicalGroups": [
        {
            "name": "Д - 0",
            "physiologicalGroupId": 1,
            "headCount": 7
        }
    ],
        "id": 3,
        "name": "15",
        "feedingPlanId": 1,
        "appetite": 0.48,
        "ordinalNumber": 3,
        "notCombine": false,
        "mixerId": 2,
        "digiStarInterchangeCode": "15"
        }';
        return $section_json;


    }

    public function getJsonForCattleHousesCreate() {
        $create_section_json = '{
         "physiologicalGroups": [
           {
            "name": "Д - 0",
            "physiologicalGroupId": 1,
            "headCount": 62
          }
        ],
        "id": 47,
        "name": "section in test created",
        "feedingPlanId": 1,
        "appetite": 0.99,
        "ordinalNumber": 30,
        "notCombine": false,
        "mixerId": 2,
        "digiStarInterchangeCode": "100"
        }';

        return $create_section_json;

    }

    public function getJsonForCattleHousesUpdate()
    {

        $update_section_json = '{
        "physiologicalGroups": [
        {
            "name": "Нетели",
            "physiologicalGroupId": 6,
            "headCount": 211
        }
        ],
        "id": 45,
        "name": "65",
        "feedingPlanId": 13,
        "appetite": 0.8,
        "ordinalNumber": 18,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "65"
        }';

        return $update_section_json;
    }



    public function getCompoundFeedValidListJson()
    {  $chouses_valid_list = '';
        return $chouses_valid_list;


    }

    public function getJsonForCombicormCreate() {
        $create_combicorm_json = '{
        "composition": [
          {
           "ingredientId": 17,
           "ordinalNumber": 1,
           "dryWeight": 1,
           "mixingTime": "00:01:00"
          }
        ],
          "name": "combicorm1",
          "description": "description",
          "density": 1,
          "digiStarInterchangeCode": "c12345"
        }';

        return $create_combicorm_json;

    }

    public function getJsonForCombicormContainsCombicormCreate() {
        $create_combicorm_json = '{
          "composition": [
            {
              "ingredientId": 18,
              "ordinalNumber": 1,
              "dryWeight": 1,
              "mixingTime": "00:01:00"
            }
          ],
        
          "name": "combicorm2",
          "description": "description",
          "density": 1,
          "digiStarInterchangeCode": "c12346"
        }';

        return $create_combicorm_json;

    }

    public function getJsonForCombicormCreated() {
        $created_combicorm_json = '
        {
        "dryMatterProportion": 0.95,
        "composition": [
            {
                "name": "Премикс телки",
                "ingredientId": 17,
                "ordinalNumber": 1,
                "dryWeight": 1,
                "mixingTime": "00:01:00"
            }
        ],
        "id": 18,
        "name": "combicorm1",
        "description": "description",
        "density": 1,
        "digiStarInterchangeCode": "c12345"
        }
        ';

        return $created_combicorm_json;

    }

    public function getJsonForCombicormAsIngredient() {
        $cobicorm_ingredient_json = '{
        "stores": [],
        "blockedActions": {
            "ChangeIngredientTypeFromCompoundFeed": [
                "Нельзя изменить тип ингредиента, так как с ним связан рецепт на приготовление корма"
            ]
        },
        "id": 18,
        "name": "combicorm1",
        "description": "description",
        "type": 4,
        "dryMatter": 0.95,
        "lossType": 0,
        "lossCount": 0,
        "dynamicDryMatter": false,
        "isUnderweight": false,
        "digiStarInterchangeCode": "c12345"
        }';

        return $cobicorm_ingredient_json;

    }

    public function getJsonForCombicormFeedUpdate()
    {

        $update_section_json = '{
        "physiologicalGroups": [
        {
            "name": "Нетели",
            "physiologicalGroupId": 6,
            "headCount": 211
        }
        ],
        "id": 45,
        "name": "65",
        "feedingPlanId": 13,
        "appetite": 0.8,
        "ordinalNumber": 18,
        "notCombine": false,
        "mixerId": 1,
        "digiStarInterchangeCode": "65"
        }';

        return $update_section_json;
    }



    public function getPhysiologicalGroupValidListJson()
    {  $phys_groups_valid_list = '[
    {
        "name": "Д - 0",
        "id": 1
    },
    {
        "name": "Д - 1",
        "id": 2
    },
    {
        "name": "Д - 2",
        "id": 3
    },
    {
        "name": "Сух - 1",
        "id": 4
    },
    {
        "name": "Сух - 2",
        "id": 5
    },
    {
        "name": "Нетели",
        "id": 6
    },
    {
        "name": "Т 0-2",
        "id": 7
    },
    {
        "name": "Т 2-6",
        "id": 8
    },
    {
        "name": "Т 6-12",
        "id": 9
    },
    {
        "name": "Т 12-18",
        "id": 10
    },
    {
        "name": "Т ст 18",
        "id": 11
    },
    {
        "name": "Б 0-2",
        "id": 12
    },
    {
        "name": "Д - 3",
        "id": 14
    }
]';
        return $phys_groups_valid_list;


    }

    public function getPhysiologicalGroupJsonById()
    {  $group_json = '{
    "name": "Сух - 2",
    "id": 5
}';
        return $group_json;


    }

    public function getJsonForPhysiologicalGroupsCreate() {
        $create_group_json = '{
          "name": "in test created group",
          "description": "description"
        }';

        return $create_group_json;

    }

    public function getJsonForPhysiologicalGroupUpdate()
    {

        $update_group_json = '{
        "name": "Т 12-18 updated",
        "description": "description",
        "id": 10
        }';

        return $update_group_json;
    }


    public function getOperatorsListJson()
    {  $phys_operators_valid_list = '';
        return $phys_operators_valid_list;


    }

    public function getOperatorsJsonById()
    {  $operator_json = '';
        return $operator_json;


    }

    public function getJsonForOperatorsCreate() {
        $create_operators_json = '';

        return $create_operators_json;

    }

    public function getJsonForOperatorsUpdate()
    {

        $update_operators_json = '';

        return $update_operators_json;
    }


    public function getTaskByDateJson()
    {  $task_by_date = '';
        return $task_by_date;


    }
//44
    public function getTaskByIdJson()
    {  $task_by_id = '[
        {
            "sections": [
                {
                    "sectionId": 1,
                    "weight": 2101,
                    "actualWeight": 0,
                    "section": {
                        "id": 1,
                        "name": "32",
                        "feedingPlanId": 1,
                        "feedingPlan": {
                            "id": 1,
                            "name": "Д - 0",
                            "rationId": 1,
                            "ration": {
                                "id": 1,
                                "name": "Д - 0",
                                "ingredients": [
                                    {
                                        "ingredientId": 1,
                                        "dryWeight": 1.3,
                                        "ordinalNumber": 0,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 2,
                                        "dryWeight": 2.94,
                                        "ordinalNumber": 1,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 3,
                                        "dryWeight": 3,
                                        "ordinalNumber": 2,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 4,
                                        "dryWeight": 0.8,
                                        "ordinalNumber": 3,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 5,
                                        "dryWeight": 1.3,
                                        "ordinalNumber": 4,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 6,
                                        "dryWeight": 0.45,
                                        "ordinalNumber": 5,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 7,
                                        "dryWeight": 0.46,
                                        "ordinalNumber": 6,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 10,
                                        "dryWeight": 0.45,
                                        "ordinalNumber": 7,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 11,
                                        "dryWeight": 2,
                                        "ordinalNumber": 8,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 12,
                                        "dryWeight": 6.3,
                                        "ordinalNumber": 9,
                                        "ptoRotation": 0
                                    }
                                ],
                                "isPremix": false,
                                "density": 370,
                                "digiStarInterchangeCode": "D  0",
                                "compensationMode": 0
                            },
                            "parts": [
                                1
                            ]
                        },
                        "physiologicalGroups": [
                            {
                                "physiologicalGroupId": 1,
                                "headCount": 61,
                                "physiologicalGroup": {
                                    "id": 1,
                                    "name": "Д - 0"
                                }
                            }
                        ],
                        "appetite": 0.78,
                        "ordinalNumber": 1,
                        "digiStarInterchangeCode": "32",
                        "mixerId": 1,
                        "notCombine": false
                    },
                    "ordinalNumber": 1
                },
                {
                    "sectionId": 2,
                    "weight": 331,
                    "actualWeight": 0,
                    "section": {
                        "id": 2,
                        "name": "14",
                        "feedingPlanId": 1,
                        "feedingPlan": {
                            "id": 1,
                            "name": "Д - 0",
                            "rationId": 1,
                            "ration": {
                                "id": 1,
                                "name": "Д - 0",
                                "ingredients": [
                                    {
                                        "ingredientId": 1,
                                        "dryWeight": 1.3,
                                        "ordinalNumber": 0,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 2,
                                        "dryWeight": 2.94,
                                        "ordinalNumber": 1,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 3,
                                        "dryWeight": 3,
                                        "ordinalNumber": 2,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 4,
                                        "dryWeight": 0.8,
                                        "ordinalNumber": 3,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 5,
                                        "dryWeight": 1.3,
                                        "ordinalNumber": 4,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 6,
                                        "dryWeight": 0.45,
                                        "ordinalNumber": 5,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 7,
                                        "dryWeight": 0.46,
                                        "ordinalNumber": 6,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 10,
                                        "dryWeight": 0.45,
                                        "ordinalNumber": 7,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 11,
                                        "dryWeight": 2,
                                        "ordinalNumber": 8,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 12,
                                        "dryWeight": 6.3,
                                        "ordinalNumber": 9,
                                        "ptoRotation": 0
                                    }
                                ],
                                "isPremix": false,
                                "density": 370,
                                "digiStarInterchangeCode": "D  0",
                                "compensationMode": 0
                            },
                            "parts": [
                                1
                            ]
                        },
                        "physiologicalGroups": [
                            {
                                "physiologicalGroupId": 1,
                                "headCount": 10,
                                "physiologicalGroup": {
                                    "id": 1,
                                    "name": "Д - 0"
                                }
                            }
                        ],
                        "appetite": 0.75,
                        "ordinalNumber": 2,
                        "digiStarInterchangeCode": "14",
                        "mixerId": 1,
                        "notCombine": false
                    },
                    "ordinalNumber": 2
                },
                {
                    "sectionId": 3,
                    "weight": 358,
                    "actualWeight": 0,
                    "section": {
                        "id": 3,
                        "name": "15",
                        "feedingPlanId": 1,
                        "feedingPlan": {
                            "id": 1,
                            "name": "Д - 0",
                            "rationId": 1,
                            "ration": {
                                "id": 1,
                                "name": "Д - 0",
                                "ingredients": [
                                    {
                                        "ingredientId": 1,
                                        "dryWeight": 1.3,
                                        "ordinalNumber": 0,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 2,
                                        "dryWeight": 2.94,
                                        "ordinalNumber": 1,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 3,
                                        "dryWeight": 3,
                                        "ordinalNumber": 2,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 4,
                                        "dryWeight": 0.8,
                                        "ordinalNumber": 3,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 5,
                                        "dryWeight": 1.3,
                                        "ordinalNumber": 4,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 6,
                                        "dryWeight": 0.45,
                                        "ordinalNumber": 5,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 7,
                                        "dryWeight": 0.46,
                                        "ordinalNumber": 6,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 10,
                                        "dryWeight": 0.45,
                                        "ordinalNumber": 7,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 11,
                                        "dryWeight": 2,
                                        "ordinalNumber": 8,
                                        "ptoRotation": 0
                                    },
                                    {
                                        "ingredientId": 12,
                                        "dryWeight": 6.3,
                                        "ordinalNumber": 9,
                                        "ptoRotation": 0
                                    }
                                ],
                                "isPremix": false,
                                "density": 370,
                                "digiStarInterchangeCode": "D  0",
                                "compensationMode": 0
                            },
                            "parts": [
                                1
                            ]
                        },
                        "physiologicalGroups": [
                            {
                                "physiologicalGroupId": 1,
                                "headCount": 15,
                                "physiologicalGroup": {
                                    "id": 1,
                                    "name": "Д - 0"
                                }
                            }
                        ],
                        "appetite": 0.54,
                        "ordinalNumber": 3,
                        "digiStarInterchangeCode": "15",
                        "mixerId": 1,
                        "notCombine": false
                    },
                    "ordinalNumber": 3
                }
            ],
            "stores": [
                {
                    "storeId": 17,
                    "weight": 96,
                    "actualWeight": 0,
                    "order": 0,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 17,
                        "name": "Солома пшеничная",
                        "ingredientId": 1,
                        "amount": 75000,
                        "ingredient": {
                            "id": 1,
                            "name": "Солома пшеничная",
                            "dryMatter": 0.86,
                            "type": 3,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": false,
                            "digiStarInterchangeCode": "SolPsh",
                            "isUnderweight": false,
                            "created": "2018-05-28T11:09:00+00:00"
                        }
                    }
                },
                {
                    "storeId": 16,
                    "weight": 211,
                    "actualWeight": 0,
                    "order": 1,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 16,
                        "name": "Комбикорм № 20",
                        "ingredientId": 2,
                        "amount": 25000,
                        "ingredient": {
                            "id": 2,
                            "name": "Комбикорм № 20",
                            "dryMatter": 0.88,
                            "type": 1,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": false,
                            "digiStarInterchangeCode": "Kom 20",
                            "isUnderweight": false,
                            "created": "2018-05-28T11:13:45+00:00"
                        }
                    }
                },
                {
                    "storeId": 15,
                    "weight": 213,
                    "actualWeight": 0,
                    "order": 2,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 15,
                        "name": "Комбикорм № 11",
                        "ingredientId": 3,
                        "amount": 10000,
                        "ingredient": {
                            "id": 3,
                            "name": "Комбикорм № 11",
                            "dryMatter": 0.89,
                            "type": 1,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": false,
                            "digiStarInterchangeCode": "Kom 11",
                            "isUnderweight": false,
                            "created": "2018-05-28T11:14:53+00:00"
                        }
                    }
                },
                {
                    "storeId": 14,
                    "weight": 56,
                    "actualWeight": 0,
                    "order": 3,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 14,
                        "name": "Барда сухая",
                        "ingredientId": 4,
                        "amount": 25000,
                        "ingredient": {
                            "id": 4,
                            "name": "Барда сухая",
                            "dryMatter": 0.9,
                            "type": 1,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": false,
                            "digiStarInterchangeCode": "Barda",
                            "isUnderweight": false,
                            "created": "2018-05-28T11:16:06+00:00"
                        }
                    }
                },
                {
                    "storeId": 13,
                    "weight": 91,
                    "actualWeight": 0,
                    "order": 4,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 13,
                        "name": "Соя",
                        "ingredientId": 5,
                        "amount": 10000,
                        "ingredient": {
                            "id": 5,
                            "name": "Соя",
                            "dryMatter": 0.9,
                            "type": 1,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": false,
                            "digiStarInterchangeCode": "Soya",
                            "isUnderweight": false,
                            "created": "2018-05-28T11:17:00+00:00"
                        }
                    }
                },
                {
                    "storeId": 12,
                    "weight": 32,
                    "actualWeight": 0,
                    "order": 5,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 12,
                        "name": "Рапс",
                        "ingredientId": 6,
                        "amount": 10000,
                        "ingredient": {
                            "id": 6,
                            "name": "Рапс",
                            "dryMatter": 0.9,
                            "type": 1,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": false,
                            "digiStarInterchangeCode": "Raps",
                            "isUnderweight": false,
                            "created": "2018-05-28T11:17:38+00:00"
                        }
                    }
                },
                {
                    "storeId": 2,
                    "weight": 32,
                    "actualWeight": 0,
                    "order": 6,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 2,
                        "name": "Комбикорм № 1",
                        "ingredientId": 7,
                        "amount": 1400,
                        "ingredient": {
                            "id": 7,
                            "name": "Комбикором № 1",
                            "dryMatter": 0.92,
                            "type": 1,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": false,
                            "digiStarInterchangeCode": "Komb 1",
                            "isUnderweight": true,
                            "created": "2018-06-18T13:43:40+00:00"
                        }
                    }
                },
                {
                    "storeId": 9,
                    "weight": 28,
                    "actualWeight": 0,
                    "order": 7,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 9,
                        "name": "Глицерин",
                        "ingredientId": 10,
                        "amount": 1000,
                        "ingredient": {
                            "id": 10,
                            "name": "Глицерин",
                            "dryMatter": 1,
                            "type": 1,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": false,
                            "digiStarInterchangeCode": "Glizer",
                            "isUnderweight": false,
                            "created": "2018-05-28T11:22:46+00:00"
                        }
                    }
                },
                {
                    "storeId": 4,
                    "weight": 301,
                    "actualWeight": 0,
                    "order": 8,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 4,
                        "name": "Сенаж 17",
                        "ingredientId": 11,
                        "amount": 2650000,
                        "ingredient": {
                            "id": 11,
                            "name": "Сенаж 17",
                            "dryMatter": 0.42,
                            "type": 3,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": true,
                            "digiStarInterchangeCode": "Sena17",
                            "isUnderweight": false,
                            "created": "2018-06-18T13:40:44+00:00"
                        }
                    }
                },
                {
                    "storeId": 1,
                    "weight": 1731,
                    "actualWeight": 0,
                    "order": 9,
                    "ptoRotations": 0,
                    "actualPtoRotations": 0,
                    "store": {
                        "id": 1,
                        "name": "Силос",
                        "ingredientId": 12,
                        "amount": 800000,
                        "ingredient": {
                            "id": 12,
                            "name": "Силос",
                            "dryMatter": 0.23,
                            "type": 3,
                            "lossType": 0,
                            "lossCount": 0,
                            "dynamicDryMatter": true,
                            "digiStarInterchangeCode": "Silos",
                            "isUnderweight": false,
                            "created": "2018-06-18T15:36:36+00:00"
                        }
                    }
                }
            ],
            "date": "2018-06-18",
            "created": "2018-10-22T11:39:54.838+00:00",
            "state": 0,
            "feedingNumber": 0,
            "dailyNumber": 1,
            "mixer": {
                "id": 1,
                "name": "30",
                "volume": 30
            },
            "id": 44
        }
    ]';
        return $task_by_id;


    }











    public function getSectionsAppetiteHistoryListArray() {
        // поскольку история аппетита возвращается всегда за последние 6 дней,
        // формируем массив, содержащий последние даты
        // текущая
        $date0 = date('Y-m-d');
        // предыдущая
        $date1 = new DateTime('-1 days');
        // приводим к формату строки, иначе в массив не положить
        $date1 = date_format($date1, 'Y-m-d');
        $date2 = new DateTime('-2 days');
        $date2 = date_format($date2, 'Y-m-d');
        $date3 = new DateTime('-3 days');
        $date3 = date_format($date3, 'Y-m-d');
        $date4 = new DateTime('-4 days');
        $date4 = date_format($date4, 'Y-m-d');
        $date5 = new DateTime('-5 days');
        $date5 = date_format($date5, 'Y-m-d');
        $date6 = new DateTime('-6 days');
        $date6 = date_format($date6, 'Y-m-d');

        $array_date = array(
            $date6  => null,
            $date5 => null,
            $date4 => null,
            $date3 => null,
            $date2 => null,
            $date1 => null,
            $date0 => null
        );

        $appetite_history = array(
    array(
        "id" => 1,
        "name" => "32",
        "appetite" => 0.78,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 3,
        "name" => "15",
        "appetite" => 0.48,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 4,
        "name" => "21",
        "appetite" => 0.93,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 5,
        "name" => "22",
        "appetite" => 0.88,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 6,
        "name" => "23",
        "appetite" => 0.74,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 7,
        "name" => "24",
        "appetite" => 0.79,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 8,
        "name" => "10",
        "appetite" => 0.87,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 9,
        "name" => "Навес",
        "appetite" => 1.44,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 11,
        "name" => "43",
        "appetite" => 0.88,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 12,
        "name" => "44",
        "appetite" => 0.97,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 15,
        "name" => "64",
        "appetite" => 0.8,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 16,
        "name" => "41",
        "appetite" => 0.81,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 17,
        "name" => "42",
        "appetite" => 1.01,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 18,
        "name" => "72",
        "appetite" => 0.97,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 21,
        "name" => "53",
        "appetite" => 0.82,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 22,
        "name" => "54",
        "appetite" => 0.96,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 23,
        "name" => "52",
        "appetite" => 0.82,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 24,
        "name" => "51",
        "appetite" => 0.74,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 26,
        "name" => "31",
        "appetite" => 0.78,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 28,
        "name" => "Копытчик",
        "appetite" => 0.67,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 29,
        "name" => "11",
        "appetite" => 0.95,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 30,
        "name" => "16",
        "appetite" => 0.85,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 33,
        "name" => "71",
        "appetite" => 0.85,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 36,
        "name" => "13",
        "appetite" => 0.9,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 39,
        "name" => "12",
        "appetite" => 0.78,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 41,
        "name" => "73",
        "appetite" => 1.03,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 43,
        "name" => "61-63",
        "appetite" => 0.62,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 45,
        "name" => "65",
        "appetite" => 0.8,
        "appetiteHistory" => $array_date
    ),
    array(
        "id" => 46,
        "name" => "74",
        "appetite" => 1,
        "appetiteHistory" => $array_date
    )
);



      return $appetite_history;

    }
    public function getIngredientsHistoryListArray() {
       $ingr_array =
           array(
               array(
                   array(
                       "id" => 1,
                       "name" => "Солома пшеничная",
                       "type" => 3,
                       "dryMatter" => 0.86,
                       "lossType" => 0,
                       "lossCount" => 0,
                       "dynamicDryMatter" => false,
                       "isUnderweight" => false,
                       "digiStarInterchangeCode" => "SolPsh",
                       "created" => "2018-10-22T14:39:29.6962862+03:00"
                   )
               ),
            array(
                array(
                    "id" => 2,
                    "name" => "Комбикорм № 20",
                    "type" => 1,
                    "dryMatter" => 0.88,
                    "lossType" => 0,
                    "lossCount" => 0,
                    "dynamicDryMatter" => false,
                    "isUnderweight" => false,
                    "digiStarInterchangeCode" => "Kom 20",
                    "created" => "2018-10-22T14:39:29.3779298+03:00"
                )
            ),

            array(
                array(
                    "id" => 3,
                    "name" => "Комбикорм № 11",
                    "type" => 1,
                    "dryMatter" => 0.89,
                    "lossType" => 0,
                    "lossCount" => 0,
                    "dynamicDryMatter" => false,
                    "isUnderweight" => false,
                    "digiStarInterchangeCode" => "Kom 11",
                    "created" => "2018-10-22T14:39:29.0172083+03:00"
                )
            ),
            array(
                array(
                    "id" => 4,
                    "name" => "Барда сухая",
                    "type" => 1,
                    "dryMatter" => 0.9,
                    "lossType" => 0,
                    "lossCount" => 0,
                    "dynamicDryMatter" => false,
                    "isUnderweight" => false,
                    "digiStarInterchangeCode" => "Barda",
                    "created" => "2018-10-22T14:39:28.8444475+03:00"
                )
            ),

            array(
                array(
                    "id" => 5,
                    "name" => "Соя",
                    "type" => 1,
                    "dryMatter" => 0.9,
                    "lossType" => 0,
                    "lossCount" => 0,
                    "dynamicDryMatter" => false,
                    "isUnderweight" => false,
                    "digiStarInterchangeCode" => "Soya",
                    "created" => "2018-10-22T14:39:28.6317568+03:00"
                )
            ));

        return $ingr_array;

    }



}
