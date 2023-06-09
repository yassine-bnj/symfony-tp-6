<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'new_category' => [[], ['_controller' => 'App\\Controller\\TestController::newCategory'], [], [['text', '/categorie/newCat']], [], [], []],
    'adarticles' => [[], ['_controller' => 'App\\Controller\\TestController::save'], [], [['text', '/article/save']], [], [], []],
    'allArticles' => [[], ['_controller' => 'App\\Controller\\TestController::home'], [], [['text', '/article/all']], [], [], []],
    'addArticle' => [[], ['_controller' => 'App\\Controller\\TestController::new'], [], [['text', '/article/new']], [], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\TestController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'article_edit' => [['id'], ['_controller' => 'App\\Controller\\TestController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/edit']], [], [], []],
    'article_delete' => [['id'], ['_controller' => 'App\\Controller\\TestController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/delete']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
