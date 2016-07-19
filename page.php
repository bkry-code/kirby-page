<?php

/**
 * @file
 * Bootstrap the Kirby plugin.
 *
 * @author  Daniel Weidner <hallo@danielweidner.de>
 * @package Weidner\Page
 * @since   1.0.0
 */

// Default blueprint
$kirby->set('blueprint', 'default', __DIR__ . DS . 'blueprints' . DS . 'default.yml');

// Meta Information
$kirby->set('blueprint', 'fields/title', __DIR__ . DS . 'blueprints' . DS . 'fields' . DS . 'title.yml');
$kirby->set('blueprint', 'fields/menu', __DIR__ . DS . 'blueprints' . DS . 'fields' . DS . 'menu.yml');
$kirby->set('blueprint', 'fields/description', __DIR__ . DS . 'blueprints' . DS . 'fields' . DS . 'description.yml');
$kirby->set('blueprint', 'fields/text', __DIR__ . DS . 'blueprints' . DS . 'fields' . DS . 'text.yml');

// Image Representation
$kirby->set('blueprint', 'fields/thumbnail', __DIR__ . DS . 'blueprints' . DS . 'fields' . DS . 'thumbnail.yml');
$kirby->set('blueprint', 'fields/coverimage', __DIR__ . DS . 'blueprints' . DS . 'fields' . DS . 'coverimage.yml');
