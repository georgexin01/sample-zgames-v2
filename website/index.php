<?php

require_once __DIR__ . '/router.php';

// get(route: '/', path_to_include: '/home.php');
get(route: '/', path_to_include: '/home.php');
get(route: '/404', path_to_include: '/404.php');

get(route: '/home', path_to_include: '/home.php');
get(route: '/contact', path_to_include: '/contact.php');
get(route: '/about', path_to_include: '/about.php');
get(route: '/equipment', path_to_include: '/equipment.php');
get(route: '/career', path_to_include: '/career.php');
get(route: '/service', path_to_include: '/service.php');
get(route: '/service/{id}', path_to_include: '/service_detail.php');
get(route: '/project', path_to_include: '/project.php');
get(route: '/project/{id}', path_to_include: '/project_detail.php');
get(route: '/article', path_to_include: '/article.php');
get(route: '/article/{id}', path_to_include: '/article.php');
