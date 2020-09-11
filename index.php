<?php

$category = array(
    array(
        "id" => '1',
        "name" => "cate1",
        "sub" =>  array(
            array(
                "id" => '1-1',
                "name" => "cate1-1",
                "sub" => array(
                    array(
                        "id" => '1-1-1',
                        "name" => "cate1-1-1"
                    ),
                    array(
                        "id" => '1-1-2',
                        "name" => "cate1-1-2",
                    ),
                    array(
                        "id" => '1-1-3',
                        "name" => "cate1-1-3"
                    )
                )
            )
        ), array(
            array(
                "id" => '1-2',
                "name" => "cate1-2",
                "sub" => array(
                    array(
                        "id" => '1-2-1',
                        "name" => "cate1-2-1"
                    ),
                    array(
                        "id" => '1-2-2',
                        "name" => "cate1-2-2",
                    ),
                    array(
                        "id" => '1-2-3',
                        "name" => "cate1-2-3"
                    )
                )
            )
        )
    ),
    array(
        "id" => '2',
        "name" => "cate2",
        "sub" => array(
            array(
                "id" => '2-1',
                "name" => "cate2-1",
                "sub" => array(
                    "id" => '2-1-1',
                    "name" => "cate2-1-1"
                ),
                array(
                    "id" => '2-1-2',
                    "name" => "cate2-1-2",
                ),
                array(
                    "id" => '2-1-3',
                    "name" => "cate2-1-3"
                )
            )
        ), array(
            array(
                "id" => '2-2',
                "name" => "cate2-2",
                "sub" => array(
                    "id" => '2-2-1',
                    "name" => "cate2-2-1"
                ),
                array(
                    "id" => '2-2-2',
                    "name" => "cate2-2-2",
                ),
                array(
                    "id" => '2-2-3',
                    "name" => "cate2-2-3"
                )
            )
        )
    )

);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#2196f3">
    <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
    <title>Horesca</title>
    <link rel="stylesheet" href="./css/framework7.bundle.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="apple-touch-icon" href="img/f7-icon-square.png">
    <link rel="icon" href="img/f7-icon.png">
</head>

<body>
    <div id="app">

        <!-- main   view -->
        <div class="view view-main view-init safe-areas" data-master-detail-breakpoint="800" data-url="/">
            <div class="page page-home">


                <!-- navbar -->
                <div class="navbar color-theme-white">
                    <div class="navbar-bg"></div>
                    <div class="navbar-inner">
                        <div class="title">
                            <div class="title-large-text text-color-yellow">Horesca</div>
                        </div>

                        <div class="right">
                            <a class="link icon-only searchbar-enable text-color-teal" data-searchbar=".searchbar-components">
                                <i class="icon f7-icons if-not-md">search</i>
                                <i class="icon material-icons md-only">search</i>
                            </a>
                        </div>

                        <form data-search-container=".components-list" data-search-in="a" class="searchbar searchbar-expandable searchbar-components searchbar-init">
                            <div class="searchbar-inner">
                                <div class="searchbar-input-wrap">
                                    <input type="search" placeholder="Search components" />
                                    <i class="searchbar-icon"></i>
                                    <span class="input-clear-button"></span>
                                </div>
                                <span class="searchbar-disable-button if-not-aurora">Cancel</span>
                            </div>
                        </form>

                        <div class="subnavbar bg-color-teal">
                            <div class="subnavbar-inner">

                                <div class="row ">
                                    <a href="#tab1" class="button">Home</a>
                                    <a href="#tab2" class="button">Brands</a>
                                    <a href="#tab3" class="button">About us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- page contents -->
                <div class="page-content">

                    <div class="row">
                        <div class="col-25">
                            <div class="block-title">List View Accordion</div>
                            <div class="list accordion-list">
                                <ul>
                                    <?
                                        foreach ($category as $key => $value) { ?>
                                    <li class="accordion-item"><a href="#" class="item-content item-link">
                                            <div class="item-inner">
                                                <div class="item-title">
                                                    <?echo $value['name']?>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="accordion-item-content">
                                            <div style="margin-left: 10px;">
                                                <ul>
                                                    <?
                                        foreach ($value['sub'] as $key => $value2) { ?>
                                                    <li class="accordion-item"><a href="#" class="item-content item-link">
                                                            <div class="item-inner">
                                                                <div class="item-title">
                                                                    <?echo $value2['name']?>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="accordion-item-content">
                                                            <div style="margin-left: 10px;">
                                                                <?
                                        foreach ($value2['sub'] as $key => $value3) { ?>
                                                                <?echo $value3['name']?>
                                                                <?
                                                            }
                                                        ?>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?
                                        }
                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <?
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-75">

                        </div>
                    </div>


                    <div class="list simple-list searchbar-not-found">
                        <ul>
                            <li>Nothing found</li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script src="./js/framework7.bundle.min.js"></script>
    <script src="js/routes.js"></script>
    <script src="js/app.js"></script>

</body>

</html>