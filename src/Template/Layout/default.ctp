<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
    <?= $this->Html->css('http://www.w3schools.com/lib/w3.css') ?>
    <?= $this->Html->css('http://www.w3schools.com/lib/w3-theme-blue-grey.css') ?>
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') ?>
    <?= $this->Html->css('style.css') ?>
    
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>

    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-brand"><i class="fa fa-coffee" aria-hidden="true"></i>&nbsp;Cafe Diary</div>
            
<!-- ログイン前の表示 -->
            <!-- <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul> -->

            <!-- ログイン後の表示 -->
                        <ul class="nav navbar-nav navbar-right">
                              <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><big><i class="fa fa-bars" aria-hidden="true"></i></big>
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><?= $this->Html->link('HOME',['action' => 'home']) ?></li>
                                  <li><?= $this->Html->link('CALENDAR',['action' => 'calendar']) ?></li>
                                  <li><?= $this->Html->link('WRITE',['action' => 'add']) ?></li>
                                  <li><?= $this->Html->link('MYPAGE',['action' => 'mypage']) ?></li>
                                </ul>
                              </li>
                        </ul>
        </div>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
        <!-- フッター -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="footer-top">
                          <ul>
                            <li>cafestudyとは</li>
                            <li>calendar</li>
                            <li>お問い合わせ</li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

<style type="text/css">
    .contents li{
      display: inline;
    }

    .navbar {
      height: 120px;
      border-bottom: 1px solid #dddddd;
      background-color: #7b5544;
    }

    .navbar-brand {
       font-size: 30px;
       padding: 10px 15px 0 0;
    }

    .container-fluid {
        padding: 38px 60px;
        color: #fffff9;
        font-size: 20px;
    }


</style>